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
$id_group = $_GET['id_group'];
$group_info = Groups::find()->where(['group_id' => $id_group ])->all();
?>

<div class="copy-form">
    <div class="col-md-12">
        <?php $form = ActiveForm::begin(); ?>
        
        <?= $form->field($model, 'parent')->hiddenInput(['value' => $group_info[0]['parent_group']])->label(false) ?>
        
        <div class="col-md-4">
            <div class="row well margin_for_editor_copy"> 
                <h4>Понеділок</h4>  
                    <div class="row">
                        <p class="editor_copy_info">Чисельник</p>
                        <div class="clearfix"></div>                        
                          <div class="col-xs-1">                              
                              <?= $form->field($model, 'd1n[1]')->checkbox(['label' => '1']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd1n[2]')->checkbox(['label' => '2']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd1n[3]')->checkbox(['label' => '3']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd1n[4]')->checkbox(['label' => '4']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd1n[5]')->checkbox(['label' => '5']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd1n[6]')->checkbox(['label' => '6']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd1n[7]')->checkbox(['label' => '7']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd1n[8]')->checkbox(['label' => '8']) ?>
                          </div>
                    </div>
                  <div class="row">
                      <p class="editor_copy_info">Знаменник</p>
                        <div class="clearfix"></div> 
                        <div class="col-md-1">
                            <?= $form->field($model, 'd1[1]')->checkbox(['label' => '1']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd1[2]')->checkbox(['label' => '2']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd1[3]')->checkbox(['label' => '3']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd1[4]')->checkbox(['label' => '4']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd1[5]')->checkbox(['label' => '5']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd1[6]')->checkbox(['label' => '6']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd1[7]')->checkbox(['label' => '7']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd1[8]')->checkbox(['label' => '8']) ?>
                        </div>
                        <div class="clearfix"></div>
                        <div class="editor_copy_footer">
                            <?php
                                if($group_info[0]['parent_group'] != 0){
                            ?> 
                                <?= $form->field($model, 'stream1')->checkbox(['label' => 'Для усієї групи']) ?>   
                            <?php
                                }else{
                            ?>        
                                <?= $form->field($model, 'stream1')->checkbox(['checked' => false, 'disabled'=>true, 'label' => 'Для усієї групи']) ?>
                            <?php
                                }
                            ?>
                        </div>
                  </div>
                
                
            </div>
            <div class="row well margin_for_editor_copy">
                <h4>Четвер</h4>  
                    <div class="row">
                        <p class="editor_copy_info">Чисельник</p>
                        <div class="clearfix"></div> 
                        <div class="col-xs-1">
                              <?= $form->field($model, 'd4n[1]')->checkbox(['label' => '1']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd4n[2]')->checkbox(['label' => '2']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd4n[3]')->checkbox(['label' => '3']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd4n[4]')->checkbox(['label' => '4']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd4n[5]')->checkbox(['label' => '5']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd4n[6]')->checkbox(['label' => '6']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd4n[7]')->checkbox(['label' => '7']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd4n[8]')->checkbox(['label' => '8']) ?>
                          </div>
                    </div>
                  <div class="row">
                      <p class="editor_copy_info">Знаменник</p>
                        <div class="clearfix"></div> 
                        <div class="col-md-1">
                            <?= $form->field($model, 'd4[1]')->checkbox(['label' => '1']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd4[2]')->checkbox(['label' => '2']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd4[3]')->checkbox(['label' => '3']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd4[4]')->checkbox(['label' => '4']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd4[5]')->checkbox(['label' => '5']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd4[6]')->checkbox(['label' => '6']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd4[7]')->checkbox(['label' => '7']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd4[8]')->checkbox(['label' => '8']) ?>
                        </div>                          
                        <div class="clearfix"></div>
                        <div class="editor_copy_footer">
                             <?php
                                if($group_info[0]['parent_group'] != 0){
                            ?> 
                                <?= $form->field($model, 'stream4')->checkbox(['label' => 'Для усієї групи']) ?>   
                            <?php
                                }else{
                            ?>        
                                <?= $form->field($model, 'stream4')->checkbox(['checked' => false, 'disabled'=>true, 'label' => 'Для усієї групи']) ?>
                            <?php
                                }
                            ?>                            
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
                              <?= $form->field($model, 'd2n[1]')->checkbox(['label' => '1']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd2n[2]')->checkbox(['label' => '2']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd2n[3]')->checkbox(['label' => '3']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd2n[4]')->checkbox(['label' => '4']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd2n[5]')->checkbox(['label' => '5']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd2n[6]')->checkbox(['label' => '6']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd2n[7]')->checkbox(['label' => '7']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd2n[8]')->checkbox(['label' => '8']) ?>
                          </div>
                    </div>
                  <div class="row">
                      <p class="editor_copy_info">Знаменник</p>
                        <div class="clearfix"></div> 
                        <div class="col-md-1">
                            <?= $form->field($model, 'd2[1]')->checkbox(['label' => '1']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd2[2]')->checkbox(['label' => '2']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd2[3]')->checkbox(['label' => '3']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd2[4]')->checkbox(['label' => '4']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd2[5]')->checkbox(['label' => '5']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd2[6]')->checkbox(['label' => '6']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd2[7]')->checkbox(['label' => '7']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd2[8]')->checkbox(['label' => '8']) ?>
                        </div>                            
                        <div class="clearfix"></div>
                        <div class="editor_copy_footer">
                             <?php
                                if($group_info[0]['parent_group'] != 0){
                            ?> 
                                <?= $form->field($model, 'stream2')->checkbox(['label' => 'Для усієї групи']) ?>   
                            <?php
                                }else{
                            ?>        
                                <?= $form->field($model, 'stream2')->checkbox(['checked' => false, 'disabled'=>true, 'label' => 'Для усієї групи']) ?>
                            <?php
                                }
                            ?>                           
                        </div>
                  </div>
            </div>
            <div class="row well margin_for_editor_copy">
                <h4>П'ятниця</h4>  
                    <div class="row">
                        <p class="editor_copy_info">Чисельник</p>
                        <div class="clearfix"></div> 
                        <div class="col-xs-1">
                              <?= $form->field($model, 'd5n[1]')->checkbox(['label' => '1']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd5n[2]')->checkbox(['label' => '2']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd5n[3]')->checkbox(['label' => '3']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd5n[4]')->checkbox(['label' => '4']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd5n[5]')->checkbox(['label' => '5']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd5n[6]')->checkbox(['label' => '6']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd5n[7]')->checkbox(['label' => '7']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd5n[8]')->checkbox(['label' => '8']) ?>
                          </div>
                    </div>
                  <div class="row">
                      <p class="editor_copy_info">Знаменник</p>
                        <div class="clearfix"></div> 
                        <div class="col-md-1">
                            <?= $form->field($model, 'd5[1]')->checkbox(['label' => '1']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd5[2]')->checkbox(['label' => '2']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd5[3]')->checkbox(['label' => '3']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd5[4]')->checkbox(['label' => '4']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd5[5]')->checkbox(['label' => '5']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd5[6]')->checkbox(['label' => '6']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd5[7]')->checkbox(['label' => '7']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd5[8]')->checkbox(['label' => '8']) ?>
                        </div>                        
                        <div class="clearfix"></div>
                        <div class="editor_copy_footer">
                             <?php
                                if($group_info[0]['parent_group'] != 0){
                            ?> 
                                <?= $form->field($model, 'stream5')->checkbox(['label' => 'Для усієї групи']) ?>   
                            <?php
                                }else{
                            ?>        
                                <?= $form->field($model, 'stream5')->checkbox(['checked' => false, 'disabled'=>true, 'label' => 'Для усієї групи']) ?>
                            <?php
                                }
                            ?>                            
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
                              <?= $form->field($model, 'd3n[1]')->checkbox(['label' => '1']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd3n[2]')->checkbox(['label' => '2']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd3n[3]')->checkbox(['label' => '3']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd3n[4]')->checkbox(['label' => '4']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd3n[5]')->checkbox(['label' => '5']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd3n[6]')->checkbox(['label' => '6']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd3n[7]')->checkbox(['label' => '7']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd3n[8]')->checkbox(['label' => '8']) ?>
                          </div>
                    </div>
                  <div class="row">
                      <p class="editor_copy_info">Знаменник</p>
                        <div class="clearfix"></div> 
                        <div class="col-md-1">
                            <?= $form->field($model, 'd3[1]')->checkbox(['label' => '1']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd3[2]')->checkbox(['label' => '2']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd3[3]')->checkbox(['label' => '3']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd3[4]')->checkbox(['label' => '4']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd3[5]')->checkbox(['label' => '5']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd3[6]')->checkbox(['label' => '6']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd3[7]')->checkbox(['label' => '7']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd3[8]')->checkbox(['label' => '8']) ?>
                        </div>  
                        <div class="clearfix"></div>
                        <div class="editor_copy_footer">
                             <?php
                                if($group_info[0]['parent_group'] != 0){
                            ?> 
                                <?= $form->field($model, 'stream3')->checkbox(['label' => 'Для усієї групи']) ?>   
                            <?php
                                }else{
                            ?>        
                                <?= $form->field($model, 'stream3')->checkbox(['checked' => false, 'disabled'=>true, 'label' => 'Для усієї групи']) ?>
                            <?php
                                }
                            ?>                            
                        </div>
                  </div>
            </div>
            <div class="row well margin_for_editor_copy">
                <h4>Субота</h4>  
                    <div class="row">
                        <p class="editor_copy_info">Чисельник</p>
                        <div class="clearfix"></div>   
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd6n[1]')->checkbox(['label' => '1']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd6n[2]')->checkbox(['label' => '2']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd6n[3]')->checkbox(['label' => '3']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd6n[4]')->checkbox(['label' => '4']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd6n[5]')->checkbox(['label' => '5']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd6n[6]')->checkbox(['label' => '6']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd6n[7]')->checkbox(['label' => '7']) ?>
                          </div>
                          <div class="col-xs-1">
                              <?= $form->field($model, 'd6n[8]')->checkbox(['label' => '8']) ?>
                          </div>
                    </div>
                  <div class="row">
                      <p class="editor_copy_info">Знаменник</p>
                        <div class="clearfix"></div> 
                        <div class="col-md-1">
                            <?= $form->field($model, 'd6[1]')->checkbox(['label' => '1']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd6[2]')->checkbox(['label' => '2']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd6[3]')->checkbox(['label' => '3']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd6[4]')->checkbox(['label' => '4']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd6[5]')->checkbox(['label' => '5']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd6[6]')->checkbox(['label' => '6']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd6[7]')->checkbox(['label' => '7']) ?>
                        </div>
                        <div class="col-md-1">
                            <?= $form->field($model, 'd6[8]')->checkbox(['label' => '8']) ?>
                        </div>
                        <div class="clearfix"></div>
                        <div class="editor_copy_footer">
                             <?php
                                if($group_info[0]['parent_group'] != 0){
                            ?> 
                                <?= $form->field($model, 'stream6')->checkbox(['label' => 'Для усієї групи']) ?>   
                            <?php
                                }else{
                            ?>        
                                <?= $form->field($model, 'stream6')->checkbox(['checked' => false, 'disabled'=>true, 'label' => 'Для усієї групи']) ?>
                            <?php
                                }
                            ?>                            
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
