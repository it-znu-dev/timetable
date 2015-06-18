<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
use app\module\handbook\models\DisciplineList;
use app\module\handbook\models\Cathedra;
use app\module\handbook\models\LessonsType;
use app\module\handbook\models\Groups;
use app\module\handbook\models\ClassRooms;
use app\module\handbook\models\Housing;
use app\module\handbook\models\Faculty;

/* @var $this yii\web\View */
/* @var $model app\module\handbook\models\Discipline */
/* @var $form yii\widgets\ActiveForm */
    $classes = ClassRooms::find()->orderBy('classrooms_number ASC')->all();
    foreach ($classes as $cl){ 
        $housing = Housing::findOne(['housing_id' => $cl['id_housing']]);
        $classroomsArray[$cl['classrooms_id']] = $cl['classrooms_number'].' - '.$housing['name'];
    }
    
    $all_faculty = Faculty::find()->orderBy('faculty_name ASC')->all();

foreach($all_faculty as $af){
    $tmp_cathedra = Cathedra::find()->where(['id_faculty' => $af['faculty_id']])->orderBy('cathedra_name ASC')->all();
    foreach($tmp_cathedra as $tc){
        $all_cathedra[$tc['cathedra_id']] = $tc['cathedra_name']." / ".$af['faculty_name'];
    }  
}
?>

<div class="discipline-form">

    <?php $form = ActiveForm::begin(); ?>

    <?=
        $form->field($model, 'id_discipline')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(DisciplineList::find()->orderBy('discipline_name ASC')->all(), 'discipline_id','discipline_name'),
            'language' => 'uk',
            'pluginOptions' => [
                'allowClear' => true
            ],
        ])->label('Дисципліна');
    ?>

    <?=
        $form->field($model, 'id_cathedra')->widget(Select2::classname(), [
            'data' => $all_cathedra,//ArrayHelper::map(Cathedra::find()->all(), 'cathedra_id','cathedra_name'),
            'language' => 'uk',
            'pluginOptions' => [
                'allowClear' => true
            ],
        ])->label('Кафедра');
    ?>

    <?=
        $form->field($model, 'id_lessons_type')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(LessonsType::find()->all(), 'id','lesson_type_name'),
            'language' => 'uk',
            'pluginOptions' => [
                'allowClear' => true
            ],
        ])->label('Тип заняття');
    ?>

    <?php
        echo Html::label("Групи");
        echo Select2::widget([
            'model' => $model,
            'attribute' => 'id_group',
            'language' => 'ru',
            'data' => ArrayHelper::map(Groups::find()->all(),'group_id','main_group_name')
        ]);  
    ?>  
        
    <?= $form->field($model, 'course')->textInput() ?>
    
    <?= $form->field($model, 'discipline_semester')->textInput() ?>

    <?php
        if(isset($_GET['id'])){
    ?>    
    
        <?= $form->field($model, 'hours')->textInput() ?>

        <?= $form->field($model, 'semestr_hours')->textInput() ?>
    
    <?php
    }else{
    ?>
    
        <?= $form->field($model, 'hours')->textInput(['value' => 0]) ?>

        <?= $form->field($model, 'semestr_hours')->textInput(['value' => 0]) ?>
    
    <?php
    }
    ?>

    <?= $form->field($model, 'id_edbo')->textInput(['value' => 0]) ?>

    <?= $form->field($model, 'id_deanery')->textInput(['value' => 0]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Створити' : 'Зберегти', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
