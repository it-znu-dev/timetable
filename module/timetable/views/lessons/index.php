<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\module\handbook\models\Groups;
use app\module\handbook\models\Faculty;
use app\module\timetable\models\Lessons;
use app\module\handbook\models\Speciality;

/* @var $this yii\web\View */
/* @var $searchModel app\module\timetable\models\LessonsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Розклад занять';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel-group" role="tablist">
<?php
$all_faculty = Faculty::find()->orderBy('faculty_name ASC')->all();
$count = 0;
foreach($all_faculty as $af){
    unset($groups_array);
    $all_gr = Lessons::find()->where(['id_faculty' => $af['faculty_id']])->select('id_group')->distinct()->all();
    foreach($all_gr as $ag){
        $gr = Groups::find()->where(['group_id' => $ag['id_group']])->all();
        if($gr[0]['parent_group'] == 0){
            $groups_array[] = $gr[0]['group_id'];
        }else{
            $groups_array[] = $gr[0]['parent_group'];
        }
    }
    $groups_list = array_unique($groups_array);
    ?>
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="collapseListGroupHeading<?php echo $count; ?>">
        <h4 class="panel-title">
          <a class="collapsed" role="button" data-toggle="collapse" href="#collapseListGroup<?php echo $count; ?>" aria-expanded="false" aria-controls="collapseListGroup<?php echo $count; ?>">
            <?php echo "<h4 class='small_margins'>".$af['faculty_name']."\t<span class='label label-primary'>".count($groups_list)."</span></h4>";?>
          </a>
        </h4>
      </div>
      <div style="height: 0px;" aria-expanded="false" id="collapseListGroup<?php echo $count; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseListGroupHeading<?php echo $count; ?>">
        <ul class="list-group">    
    <?php    
    foreach($groups_list as $grl){
        
        $sem = date("n");
        if($sem > 8){
            $semester_for_editor = 1;
        }else{
            $semester_for_editor = 2;
        }
        $gr = Groups::find()->where(['group_id' => $grl])->all();
        $course_get = date("Y") - $gr[0]['inflow_year'];
        $speciality_id = $gr[0]['id_speciality'];
        $group_name = $gr[0]['main_group_name'];
        $faculty_id = $af['faculty_id'];
        
        echo  '<li class="list-group-item">
                <a href="index.php?r=timetable/lessons/editor&semester_for_editor=1&course_get='.$course_get.
                    '&faculty_id='.$faculty_id.
                    '&speciality_id='.$speciality_id.
                    '&group_id='.$grl.'" target="_blank">'.
                    $group_name.' 1-й семестр
                </a>
                '."\t ||\t ".'    
                <a href="index.php?r=timetable/lessons/editor&semester_for_editor=2&course_get='.$course_get.
                    '&faculty_id='.$faculty_id.
                    '&speciality_id='.$speciality_id.
                    '&group_id='.$grl.'" target="_blank">'.
                    $group_name.' 2-й семестр
                </a>
               </li>';
    }
    $count++;
    ?>
    </ul>        
      </div>
    </div>
<?php    
}
?>
</div> 

<div class="lessons-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Lessons', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'lesson_id',
            [
                'attribute' => 'id_group',
                'value' => 'group.main_group_name'
            ],
            [
                'attribute' => 'id_faculty',
                'value' => 'faculty.faculty_name'
            ],
            [
                'attribute' => 'id_speciality',
                'value' => 'speciality.speciality_name',
            ],
            'course',
            'semester',
            /*'id_okr',
            'is_numerator',
            'id_discipline',
            'id_teacher',
            'id_classroom',
            'day',
            'is_holiday',*/
            /*'all_group',
            'all_speciality',
            'lesson_number',*/

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
