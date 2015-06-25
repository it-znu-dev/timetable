<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
use app\module\handbook\models\DisciplineList;
use app\module\handbook\models\Discipline;
use app\module\handbook\models\LessonsType;
use kartik\switchinput\SwitchInput;
use app\module\handbook\models\Teachers;
use app\module\handbook\models\ClassRooms;
use app\module\handbook\models\Housing;
use app\module\handbook\models\Groups;
use app\module\handbook\models\DisciplineGroups;

/* @var $this yii\web\View */
/* @var $model app\module\timetable\models\Lessons */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="copy-form">
    <div class="col-md-12">
        
        <?php $form = ActiveForm::begin(); ?>
        
        <div class="col-md-4">
            <div class="row well margin_for_editor_copy"> 
                <h4>Понеділок</h4>  
                    <div class="row">
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd1l1')->checkbox() ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd1l2')->checkbox() ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd1l3')->checkbox() ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd1l4')->checkbox() ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd1l5')->checkbox() ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd1l6')->checkbox() ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd1l7')->checkbox() ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd1l8')->checkbox() ?>
                          </div>
                    </div>
                  <div class="row">
                        <div class="col-md-1">
                            <?= $form->field($model, 'd1l1')->checkbox() ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd1l2')->checkbox() ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd1l3')->checkbox() ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd1l4')->checkbox() ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd1l5')->checkbox() ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd1l6')->checkbox() ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd1l7')->checkbox() ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd1l8')->checkbox() ?>
                        </div>
                  </div>
                
                
            </div>
            <div class="row well margin_for_editor_copy">
                <h4>Четвер</h4>  
                    <div class="row">
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd1l1')->checkbox() ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd1l2')->checkbox() ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd1l3')->checkbox() ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd1l4')->checkbox() ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd1l5')->checkbox() ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd1l6')->checkbox() ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd1l7')->checkbox() ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd1l8')->checkbox() ?>
                          </div>
                    </div>
                  <div class="row">
                        <div class="col-md-1">
                            <?= $form->field($model, 'd1l1')->checkbox() ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd1l2')->checkbox() ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd1l3')->checkbox() ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd1l4')->checkbox() ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd1l5')->checkbox() ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd1l6')->checkbox() ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd1l7')->checkbox() ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd1l8')->checkbox() ?>
                        </div>
                  </div>
            </div>
        </div>  
        <div class="col-md-4">
            <div class="row well margin_for_editor_copy">
                <h4>Вівторок</h4>  
                    <div class="row">
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd1l1')->checkbox() ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd1l2')->checkbox() ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd1l3')->checkbox() ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd1l4')->checkbox() ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd1l5')->checkbox() ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd1l6')->checkbox() ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd1l7')->checkbox() ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd1l8')->checkbox() ?>
                          </div>
                    </div>
                  <div class="row">
                        <div class="col-md-1">
                            <?= $form->field($model, 'd1l1')->checkbox() ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd1l2')->checkbox() ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd1l3')->checkbox() ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd1l4')->checkbox() ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd1l5')->checkbox() ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd1l6')->checkbox() ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd1l7')->checkbox() ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd1l8')->checkbox() ?>
                        </div>
                  </div>
            </div>
            <div class="row well margin_for_editor_copy">
                <h4>П'ятниця</h4>  
                    <div class="row">
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd1l1')->checkbox() ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd1l2')->checkbox() ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd1l3')->checkbox() ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd1l4')->checkbox() ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd1l5')->checkbox() ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd1l6')->checkbox() ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd1l7')->checkbox() ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd1l8')->checkbox() ?>
                          </div>
                    </div>
                  <div class="row">
                        <div class="col-md-1">
                            <?= $form->field($model, 'd1l1')->checkbox() ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd1l2')->checkbox() ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd1l3')->checkbox() ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd1l4')->checkbox() ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd1l5')->checkbox() ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd1l6')->checkbox() ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd1l7')->checkbox() ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd1l8')->checkbox() ?>
                        </div>
                  </div>
            </div>
        </div>  
        <div class="col-md-4">
            <div class="row well margin_for_editor_copy">
                <h4>Середа</h4>  
                    <div class="row">
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd1l1')->checkbox() ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd1l2')->checkbox() ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd1l3')->checkbox() ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd1l4')->checkbox() ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd1l5')->checkbox() ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd1l6')->checkbox() ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd1l7')->checkbox() ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd1l8')->checkbox() ?>
                          </div>
                    </div>
                  <div class="row">
                        <div class="col-md-1">
                            <?= $form->field($model, 'd1l1')->checkbox() ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd1l2')->checkbox() ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd1l3')->checkbox() ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd1l4')->checkbox() ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd1l5')->checkbox() ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd1l6')->checkbox() ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd1l7')->checkbox() ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd1l8')->checkbox() ?>
                        </div>
                  </div>
            </div>
            <div class="row well margin_for_editor_copy">
                <h4>Субота</h4>  
                    <div class="row">
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd1l1')->checkbox() ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd1l2')->checkbox() ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd1l3')->checkbox() ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd1l4')->checkbox() ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd1l5')->checkbox() ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd1l6')->checkbox() ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd1l7')->checkbox() ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd1l8')->checkbox() ?>
                          </div>
                    </div>
                  <div class="row">
                        <div class="col-md-1">
                            <?= $form->field($model, 'd1l1')->checkbox() ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd1l2')->checkbox() ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd1l3')->checkbox() ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd1l4')->checkbox() ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd1l5')->checkbox() ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd1l6')->checkbox() ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd1l7')->checkbox() ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd1l8')->checkbox() ?>
                        </div>
                  </div>
            </div>
        </div>  
        <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Зберегти' : 'Копіювати', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>

    <?php ActiveForm::end(); ?>
        
    </div>
</div>
