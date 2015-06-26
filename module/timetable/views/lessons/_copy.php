<style>
    .modal-header{
        padding: 0px 20px 0px 20px;
    }
    .well{
        padding: 5px 15px 5px 15px; 
    }
    .editor_copy_footer{
        margin-top: -20px;
    }
    .editor_copy_footer .form-group{
        margin: 0px auto;
    }
    .editor_copy_footer .help-block{
        margin: 0px;
    }
    .col-md-1{
        margin-bottom: -10px;
    }
</style>    
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

use app\module\timetable\models\Lessons;

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
                        <p class="editor_copy_info">Чисельник</p>
                        <div class="clearfix"></div>                        
                          <div class="col-xs-1">                              
                              <?= $form->field($model, 'd1l1n')->checkbox(['label' => '1']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd1l2n')->checkbox(['label' => '2']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd1l3n')->checkbox(['label' => '3']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd1l4n')->checkbox(['label' => '4']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd1l5n')->checkbox(['label' => '5']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd1l6n')->checkbox(['label' => '6']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd1l7n')->checkbox(['label' => '7']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd1l8n')->checkbox(['label' => '8']) ?>
                          </div>
                    </div>
                  <div class="row">
                      <p class="editor_copy_info">Знаменник</p>
                        <div class="clearfix"></div> 
                        <div class="col-md-1">
                            <?= $form->field($model, 'd1l1')->checkbox(['label' => '1']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd1l2')->checkbox(['label' => '2']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd1l3')->checkbox(['label' => '3']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd1l4')->checkbox(['label' => '4']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd1l5')->checkbox(['label' => '5']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd1l6')->checkbox(['label' => '6']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd1l7')->checkbox(['label' => '7']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd1l8')->checkbox(['label' => '8']) ?>
                        </div>
                        <div class="clearfix"></div>
                        <div class="editor_copy_footer">
                            <?= $form->field($model, 'stream1')->checkbox(['label' => 'Для усієї групи']) ?>                            
                        </div>
                  </div>
                
                
            </div>
            <div class="row well margin_for_editor_copy">
                <h4>Четвер</h4>  
                    <div class="row">
                        <p class="editor_copy_info">Чисельник</p>
                        <div class="clearfix"></div> 
                        <div class="col-xs-1">
                              <?= $form->field($model, 'd4l1n')->checkbox(['label' => '1']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd4l2n')->checkbox(['label' => '2']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd4l3n')->checkbox(['label' => '3']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd4l4n')->checkbox(['label' => '4']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd4l5n')->checkbox(['label' => '5']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd4l6n')->checkbox(['label' => '6']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd4l7n')->checkbox(['label' => '7']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd4l8n')->checkbox(['label' => '8']) ?>
                          </div>
                    </div>
                  <div class="row">
                      <p class="editor_copy_info">Знаменник</p>
                        <div class="clearfix"></div> 
                        <div class="col-md-1">
                            <?= $form->field($model, 'd4l1')->checkbox(['label' => '1']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd4l2')->checkbox(['label' => '2']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd4l3')->checkbox(['label' => '3']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd4l4')->checkbox(['label' => '4']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd4l5')->checkbox(['label' => '5']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd4l6')->checkbox(['label' => '6']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd4l7')->checkbox(['label' => '7']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd4l8')->checkbox(['label' => '8']) ?>
                        </div>                          
                        <div class="clearfix"></div>
                        <div class="editor_copy_footer">
                            <?= $form->field($model, 'stream4')->checkbox(['label' => 'Для усієї групи']) ?>                            
                        </div>
                  </div>
            </div>
        </div>  
        <div class="col-md-4">
            <div class="row well margin_for_editor_copy">
                <h4>Вівторок</h4>  
                    <div class="row">
                        <p class="editor_copy_info">Чисельник</p>
                        <div class="clearfix"></div>   
                        <div class="col-xs-1">
                              <?= $form->field($model, 'd2l1n')->checkbox(['label' => '1']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd2l2n')->checkbox(['label' => '2']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd2l3n')->checkbox(['label' => '3']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd2l4n')->checkbox(['label' => '4']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd2l5n')->checkbox(['label' => '5']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd2l6n')->checkbox(['label' => '6']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd2l7n')->checkbox(['label' => '7']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd2l8n')->checkbox(['label' => '8']) ?>
                          </div>
                    </div>
                  <div class="row">
                      <p class="editor_copy_info">Знаменник</p>
                        <div class="clearfix"></div> 
                        <div class="col-md-1">
                            <?= $form->field($model, 'd2l1')->checkbox(['label' => '1']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd2l2')->checkbox(['label' => '2']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd2l3')->checkbox(['label' => '3']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd2l4')->checkbox(['label' => '4']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd2l5')->checkbox(['label' => '5']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd2l6')->checkbox(['label' => '6']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd2l7')->checkbox(['label' => '7']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd2l8')->checkbox(['label' => '8']) ?>
                        </div>                            
                        <div class="clearfix"></div>
                        <div class="editor_copy_footer">
                            <?= $form->field($model, 'stream2')->checkbox(['label' => 'Для усієї групи']) ?>                            
                        </div>
                  </div>
            </div>
            <div class="row well margin_for_editor_copy">
                <h4>П'ятниця</h4>  
                    <div class="row">
                        <p class="editor_copy_info">Чисельник</p>
                        <div class="clearfix"></div> 
                        <div class="col-xs-1">
                              <?= $form->field($model, 'd5l1n')->checkbox(['label' => '1']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd5l2n')->checkbox(['label' => '2']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd5l3n')->checkbox(['label' => '3']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd5l4n')->checkbox(['label' => '4']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd5l5n')->checkbox(['label' => '5']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd5l6n')->checkbox(['label' => '6']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd5l7n')->checkbox(['label' => '7']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd5l8n')->checkbox(['label' => '8']) ?>
                          </div>
                    </div>
                  <div class="row">
                      <p class="editor_copy_info">Знаменник</p>
                        <div class="clearfix"></div> 
                        <div class="col-md-1">
                            <?= $form->field($model, 'd5l1')->checkbox(['label' => '1']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd5l2')->checkbox(['label' => '2']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd5l3')->checkbox(['label' => '3']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd5l4')->checkbox(['label' => '4']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd5l5')->checkbox(['label' => '5']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd5l6')->checkbox(['label' => '6']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd5l7')->checkbox(['label' => '7']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd5l8')->checkbox(['label' => '8']) ?>
                        </div>                        
                        <div class="clearfix"></div>
                        <div class="editor_copy_footer">
                            <?= $form->field($model, 'stream5')->checkbox(['label' => 'Для усієї групи']) ?>                            
                        </div>
                  </div>
            </div>
        </div>  
        <div class="col-md-4">
            <div class="row well margin_for_editor_copy">
                <h4>Середа</h4>  
                    <div class="row">
                        <p class="editor_copy_info">Чисельник</p>
                        <div class="clearfix"></div>   
                        <div class="col-xs-1">
                              <?= $form->field($model, 'd3l1n')->checkbox(['label' => '1']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd3l2n')->checkbox(['label' => '2']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd3l3n')->checkbox(['label' => '3']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd3l4n')->checkbox(['label' => '4']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd3l5n')->checkbox(['label' => '5']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd3l6n')->checkbox(['label' => '6']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd3l7n')->checkbox(['label' => '7']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd3l8n')->checkbox(['label' => '8']) ?>
                          </div>
                    </div>
                  <div class="row">
                      <p class="editor_copy_info">Знаменник</p>
                        <div class="clearfix"></div> 
                        <div class="col-md-1">
                            <?= $form->field($model, 'd3l1')->checkbox(['label' => '1']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd3l2')->checkbox(['label' => '2']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd3l3')->checkbox(['label' => '3']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd3l4')->checkbox(['label' => '4']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd3l5')->checkbox(['label' => '5']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd3l6')->checkbox(['label' => '6']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd3l7')->checkbox(['label' => '7']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd3l8')->checkbox(['label' => '8']) ?>
                        </div>  
                        <div class="clearfix"></div>
                        <div class="editor_copy_footer">
                            <?= $form->field($model, 'stream3')->checkbox(['label' => 'Для усієї групи']) ?>                            
                        </div>
                  </div>
            </div>
            <div class="row well margin_for_editor_copy">
                <h4>Субота</h4>  
                    <div class="row">
                        <p class="editor_copy_info">Чисельник</p>
                        <div class="clearfix"></div>   
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd6l1n')->checkbox(['label' => '1']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd6l2n')->checkbox(['label' => '2']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd6l3n')->checkbox(['label' => '3']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd6l4n')->checkbox(['label' => '4']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd6l5n')->checkbox(['label' => '5']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd6l6n')->checkbox(['label' => '6']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd6l7n')->checkbox(['label' => '7']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd6l8n')->checkbox(['label' => '8']) ?>
                          </div>
                    </div>
                  <div class="row">
                      <p class="editor_copy_info">Знаменник</p>
                        <div class="clearfix"></div> 
                        <div class="col-md-1">
                            <?= $form->field($model, 'd6l1')->checkbox(['label' => '1']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd6l2')->checkbox(['label' => '2']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd6l3')->checkbox(['label' => '3']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd6l4')->checkbox(['label' => '4']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd6l5')->checkbox(['label' => '5']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd6l6')->checkbox(['label' => '6']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd6l7')->checkbox(['label' => '7']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd6l8')->checkbox(['label' => '8']) ?>
                        </div>
                        <div class="clearfix"></div>
                        <div class="editor_copy_footer">
                            <?= $form->field($model, 'stream6')->checkbox(['label' => 'Для усієї групи']) ?>                            
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
