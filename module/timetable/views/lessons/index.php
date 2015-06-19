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

$all_faculty = Faculty::find()->all();
$all_groups = Groups::find()->all();
$all_lessons = Lessons::find()->select('id_group')->distinct()->all();
/*foreach ($all_faculty as $af){
    foreach($all_lessons as $al){        
        if($al['id_faculty'] == $af['faculty_id']){            
            if($al['id_group'] != $tmp){
                $uniq_group[$al['id_faculty']] = $al['id_group'];
                $tmp = $al['id_group'];
            } 
    }
}
}
foreach($all_lessons as $al){ 
    $uniq_group[] = $al['id_group'];
}*/

//echo $result = array_unique($uniq_group);



foreach($all_lessons as $all){
    
    $group_tmp = Groups::findOne(["group_id" => $all['id_group']]);
    
    if($group_tmp['parent_group'] == 0){
        $res[] = Groups::findOne(["group_id" => $all['id_group']]);
    }else{
        $res[] = Groups::findOne(["group_id" => $group_tmp['parent_group']]);
    }
     
}

foreach($res as $rr){
    $faculty_id = Speciality::findOne(["speciality_id" => $rr['id_speciality']]);
    $arr[] = array(
        "id" => $rr['group_id'],
        "name" => $rr['main_group_name'],
        "sp" => $faculty_id['id_faculty']
    );
}

var_dump($arr);


?>
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
