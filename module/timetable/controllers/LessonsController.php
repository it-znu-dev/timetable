<?php
namespace app\module\timetable\controllers;
use Yii;
use yii\helpers\Url;
use app\module\timetable\models\Lessons;
use app\module\timetable\models\LessonsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\module\handbook\models\Faculty;
use app\module\handbook\models\Speciality;
use app\module\handbook\models\Groups;
use app\module\handbook\models\ClassRooms;
use app\module\handbook\models\Housing;
use app\module\handbook\models\Teachers;
use app\module\handbook\models\Discipline;
/**
 * LessonsController implements the CRUD actions for Lessons model.
 */
class LessonsController extends Controller
{
    public function behaviors()
    {
        
        return [            
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }
    /**
     * Lists all Lessons models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new LessonsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    /**
     * Displays a single Lessons model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }
    public function actionCopy($id)
    {
        $model = $this->findModel($id);
        
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            
            
                
            $parent = Groups::findAll(['parent_group' => $model->parent]);
            $group_has_subgroup = false;
                if($model->parent != 0){
                    $group_has_subgroup = true;
                }else{
                    $group_has_subgroup = false;
                    $group_id = $model->id_group;
                }
/**
 * Понедельник
 */
if($model->stream1 == 1){//Если на понедельнике нажата кнопка "Для всей групи"
  
    if($group_has_subgroup == false){
        breack;
    }
    foreach($parent as $p){
        
       for($counter_d1 = 1; $counter_d1 < 9; $counter_d1++){
        if($model->d1[$counter_d1] == 0){
            continue;
        }else{
            $m = new Lessons;
                $m->is_holiday = $model->is_holiday;
                $m->all_group = $model->all_group;
                $m->id_discipline = $model->id_discipline;
                $m->id_teacher = $model->id_teacher;
                $m->id_classroom = $model->id_classroom;
                $m->id_group = $p['group_id'];
                $m->id_faculty = $model->id_faculty;
                $m->id_speciality = $model->id_speciality;
                $m->course = $model->course;
                $m->semester = $model->semester;
                $m->id_okr = $model->id_okr;
                $m->is_numerator = 0;
                $m->day = 1;
                $m->comment = $model->comment;
                $m->lesson_number = $counter_d1;
            $m->insert();
        }
    }
    for($counter_d1n = 1; $counter_d1n < 9; $counter_d1n++){
        if($model->d1n[$counter_d1n] == 0){
            continue;
        }else{
            $m = new Lessons;
                $m->is_holiday = $model->is_holiday;
                $m->all_group = $model->all_group;
                $m->id_discipline = $model->id_discipline;
                $m->id_teacher = $model->id_teacher;
                $m->id_classroom = $model->id_classroom;
                $m->id_group = $p['group_id'];
                $m->id_faculty = $model->id_faculty;
                $m->id_speciality = $model->id_speciality;
                $m->course = $model->course;
                $m->semester = $model->semester;
                $m->id_okr = $model->id_okr;
                $m->is_numerator = 1;
                $m->day = 1;
                $m->comment = $model->comment;
                $m->lesson_number = $counter_d1n;
            $m->insert();
        }
    } 
        
    }
    
}else{
    
    for($counter_d1 = 1; $counter_d1 < 9; $counter_d1++){
        if($model->d1[$counter_d1] == 0){
            continue;
        }else{
            $m = new Lessons;
                $m->is_holiday = $model->is_holiday;
                $m->all_group = $model->all_group;
                $m->id_discipline = $model->id_discipline;
                $m->id_teacher = $model->id_teacher;
                $m->id_classroom = $model->id_classroom;
                $m->id_group = $model->id_group;
                $m->id_faculty = $model->id_faculty;
                $m->id_speciality = $model->id_speciality;
                $m->course = $model->course;
                $m->semester = $model->semester;
                $m->id_okr = $model->id_okr;
                $m->is_numerator = 0;
                $m->day = 1;
                $m->comment = $model->comment;
                $m->lesson_number = $counter_d1;
            $m->insert();
        }
    }
    for($counter_d1n = 1; $counter_d1n < 9; $counter_d1n++){
        if($model->d1n[$counter_d1n] == 0){
            continue;
        }else{
            $m = new Lessons;
                $m->is_holiday = $model->is_holiday;
                $m->all_group = $model->all_group;
                $m->id_discipline = $model->id_discipline;
                $m->id_teacher = $model->id_teacher;
                $m->id_classroom = $model->id_classroom;
                $m->id_group = $model->id_group;
                $m->id_faculty = $model->id_faculty;
                $m->id_speciality = $model->id_speciality;
                $m->course = $model->course;
                $m->semester = $model->semester;
                $m->id_okr = $model->id_okr;
                $m->is_numerator = 1;
                $m->day = 1;
                $m->comment = $model->comment;
                $m->lesson_number = $counter_d1n;
            $m->insert();
        }
    }
}
                
                
/**
 * Конец функций обработчика понедельника
 */

/**
 * Вторник
 */
if($model->stream2 == 1){//Если на вторнике нажата кнопка "Для всей групи"
      
    foreach($parent as $p){
        
       for($counter_d2 = 1; $counter_d2 < 9; $counter_d2++){
        if($model->d2[$counter_d2] == 0){
            continue;
        }else{
            $m = new Lessons;
                $m->is_holiday = $model->is_holiday;
                $m->all_group = $model->all_group;
                $m->id_discipline = $model->id_discipline;
                $m->id_teacher = $model->id_teacher;
                $m->id_classroom = $model->id_classroom;
                $m->id_group = $p['group_id'];
                $m->id_faculty = $model->id_faculty;
                $m->id_speciality = $model->id_speciality;
                $m->course = $model->course;
                $m->semester = $model->semester;
                $m->id_okr = $model->id_okr;
                $m->is_numerator = 0;
                $m->day = 2;
                $m->comment = $model->comment;
                $m->lesson_number = $counter_d2;
            $m->insert();
        }
    }
    for($counter_d2n = 1; $counter_d2n < 9; $counter_d2n++){
        if($model->d2n[$counter_d2n] == 0){
            continue;
        }else{
            $m = new Lessons;
                $m->is_holiday = $model->is_holiday;
                $m->all_group = $model->all_group;
                $m->id_discipline = $model->id_discipline;
                $m->id_teacher = $model->id_teacher;
                $m->id_classroom = $model->id_classroom;
                $m->id_group = $p['group_id'];
                $m->id_faculty = $model->id_faculty;
                $m->id_speciality = $model->id_speciality;
                $m->course = $model->course;
                $m->semester = $model->semester;
                $m->id_okr = $model->id_okr;
                $m->is_numerator = 1;
                $m->day = 2;
                $m->comment = $model->comment;
                $m->lesson_number = $counter_d2n;
            $m->insert();
        }
    } 
        
    }
    
}else{
    
    for($counter_d2 = 1; $counter_d2 < 9; $counter_d2++){
        if($model->d2[$counter_d2] == 0){
            continue;
        }else{
            $m = new Lessons;
                $m->is_holiday = $model->is_holiday;
                $m->all_group = $model->all_group;
                $m->id_discipline = $model->id_discipline;
                $m->id_teacher = $model->id_teacher;
                $m->id_classroom = $model->id_classroom;
                $m->id_group = $model->id_group;
                $m->id_faculty = $model->id_faculty;
                $m->id_speciality = $model->id_speciality;
                $m->course = $model->course;
                $m->semester = $model->semester;
                $m->id_okr = $model->id_okr;
                $m->is_numerator = 0;
                $m->day = 2;
                $m->comment = $model->comment;
                $m->lesson_number = $counter_d2;
            $m->insert();
        }
    }
    for($counter_d2n = 1; $counter_d2n < 9; $counter_d2n++){
        if($model->d2n[$counter_d2n] == 0){
            continue;
        }else{
            $m = new Lessons;
                $m->is_holiday = $model->is_holiday;
                $m->all_group = $model->all_group;
                $m->id_discipline = $model->id_discipline;
                $m->id_teacher = $model->id_teacher;
                $m->id_classroom = $model->id_classroom;
                $m->id_group = $model->id_group;
                $m->id_faculty = $model->id_faculty;
                $m->id_speciality = $model->id_speciality;
                $m->course = $model->course;
                $m->semester = $model->semester;
                $m->id_okr = $model->id_okr;
                $m->is_numerator = 1;
                $m->day = 2;
                $m->comment = $model->comment;
                $m->lesson_number = $counter_d2n;
            $m->insert();
        }
    }
}                
/**
 * Конец функций обработчика вторника
 */

/**
 * Среда
 */
if($model->stream3 == 1){//Если на среде нажата кнопка "Для всей групи"
      
    foreach($parent as $p){//Проходим по всем группам
        
       for($counter_d3 = 1; $counter_d3 < 9; $counter_d3++){//Смотрим, что нам прислали для знаменателя
        if($model->d3[$counter_d3] == 0){
            continue;
        }else{//Если стоял флажок =) записываем 
            $m = new Lessons;
                $m->is_holiday = $model->is_holiday;
                $m->all_group = $model->all_group;
                $m->id_discipline = $model->id_discipline;
                $m->id_teacher = $model->id_teacher;
                $m->id_classroom = $model->id_classroom;
                $m->id_group = $p['group_id'];
                $m->id_faculty = $model->id_faculty;
                $m->id_speciality = $model->id_speciality;
                $m->course = $model->course;
                $m->semester = $model->semester;
                $m->id_okr = $model->id_okr;
                $m->is_numerator = 0;
                $m->day = 3;
                $m->comment = $model->comment;
                $m->lesson_number = $counter_d3;
            $m->insert();
        }
    }
    for($counter_d3n = 1; $counter_d3n < 9; $counter_d3n++){//Смотрим, что нам прислали для числителя
        if($model->d3n[$counter_d3n] == 0){
            continue;
        }else{
            $m = new Lessons;
                $m->is_holiday = $model->is_holiday;
                $m->all_group = $model->all_group;
                $m->id_discipline = $model->id_discipline;
                $m->id_teacher = $model->id_teacher;
                $m->id_classroom = $model->id_classroom;
                $m->id_group = $p['group_id'];
                $m->id_faculty = $model->id_faculty;
                $m->id_speciality = $model->id_speciality;
                $m->course = $model->course;
                $m->semester = $model->semester;
                $m->id_okr = $model->id_okr;
                $m->is_numerator = 1;
                $m->day = 3;
                $m->comment = $model->comment;
                $m->lesson_number = $counter_d3n;
            $m->insert();
        }
    } 
        
    }
    
}else{//Нужна только 1 группа
    
    for($counter_d3 = 1; $counter_d3 < 9; $counter_d3++){//Смотрим, что нам прислали для знаменателя
        if($model->d3[$counter_d3] == 0){
            continue;
        }else{
            $m = new Lessons;
                $m->is_holiday = $model->is_holiday;
                $m->all_group = $model->all_group;
                $m->id_discipline = $model->id_discipline;
                $m->id_teacher = $model->id_teacher;
                $m->id_classroom = $model->id_classroom;
                $m->id_group = $model->id_group;
                $m->id_faculty = $model->id_faculty;
                $m->id_speciality = $model->id_speciality;
                $m->course = $model->course;
                $m->semester = $model->semester;
                $m->id_okr = $model->id_okr;
                $m->is_numerator = 0;
                $m->day = 3;
                $m->comment = $model->comment;
                $m->lesson_number = $counter_d3;
            $m->insert();
        }
    }
    for($counter_d3n = 1; $counter_d3n < 9; $counter_d3n++){//Смотрим, что нам прислали для числителя
        if($model->d3n[$counter_d3n] == 0){
            continue;
        }else{
            $m = new Lessons;
                $m->is_holiday = $model->is_holiday;
                $m->all_group = $model->all_group;
                $m->id_discipline = $model->id_discipline;
                $m->id_teacher = $model->id_teacher;
                $m->id_classroom = $model->id_classroom;
                $m->id_group = $model->id_group;
                $m->id_faculty = $model->id_faculty;
                $m->id_speciality = $model->id_speciality;
                $m->course = $model->course;
                $m->semester = $model->semester;
                $m->id_okr = $model->id_okr;
                $m->is_numerator = 1;
                $m->day = 3;
                $m->comment = $model->comment;
                $m->lesson_number = $counter_d3n;
            $m->insert();
        }
    }
}                
/**
 * Конец функций обработчика среды
 */

/**
 * Четверг
 */
if($model->stream4 == 1){//Если на четверге нажата кнопка "Для всей групи"
      
    foreach($parent as $p){//Проходим по всем группам
        
       for($counter_d4 = 1; $counter_d4 < 9; $counter_d4++){//Смотрим, что нам прислали для знаменателя
        if($model->d4[$counter_d4] == 0){
            continue;
        }else{//Если стоял флажок =) записываем 
            $m = new Lessons;
                $m->is_holiday = $model->is_holiday;
                $m->all_group = $model->all_group;
                $m->id_discipline = $model->id_discipline;
                $m->id_teacher = $model->id_teacher;
                $m->id_classroom = $model->id_classroom;
                $m->id_group = $p['group_id'];
                $m->id_faculty = $model->id_faculty;
                $m->id_speciality = $model->id_speciality;
                $m->course = $model->course;
                $m->semester = $model->semester;
                $m->id_okr = $model->id_okr;
                $m->is_numerator = 0;
                $m->day = 4;
                $m->comment = $model->comment;
                $m->lesson_number = $counter_d4;
            $m->insert();
        }
    }
    for($counter_d4n = 1; $counter_d4n < 9; $counter_d4n++){//Смотрим, что нам прислали для числителя
        if($model->d4n[$counter_d4n] == 0){
            continue;
        }else{
            $m = new Lessons;
                $m->is_holiday = $model->is_holiday;
                $m->all_group = $model->all_group;
                $m->id_discipline = $model->id_discipline;
                $m->id_teacher = $model->id_teacher;
                $m->id_classroom = $model->id_classroom;
                $m->id_group = $p['group_id'];
                $m->id_faculty = $model->id_faculty;
                $m->id_speciality = $model->id_speciality;
                $m->course = $model->course;
                $m->semester = $model->semester;
                $m->id_okr = $model->id_okr;
                $m->is_numerator = 1;
                $m->day = 4;
                $m->comment = $model->comment;
                $m->lesson_number = $counter_d4n;
            $m->insert();
        }
    } 
        
    }
    
}else{//Нужна только 1 группа
    
    for($counter_d4 = 1; $counter_d4 < 9; $counter_d4++){//Смотрим, что нам прислали для знаменателя
        if($model->d4[$counter_d4] == 0){
            continue;
        }else{
            $m = new Lessons;
                $m->is_holiday = $model->is_holiday;
                $m->all_group = $model->all_group;
                $m->id_discipline = $model->id_discipline;
                $m->id_teacher = $model->id_teacher;
                $m->id_classroom = $model->id_classroom;
                $m->id_group = $model->id_group;
                $m->id_faculty = $model->id_faculty;
                $m->id_speciality = $model->id_speciality;
                $m->course = $model->course;
                $m->semester = $model->semester;
                $m->id_okr = $model->id_okr;
                $m->is_numerator = 0;
                $m->day = 4;
                $m->comment = $model->comment;
                $m->lesson_number = $counter_d4;
            $m->insert();
        }
    }
    for($counter_d4n = 1; $counter_d4n < 9; $counter_d4n++){//Смотрим, что нам прислали для числителя
        if($model->d4n[$counter_d4n] == 0){
            continue;
        }else{
            $m = new Lessons;
                $m->is_holiday = $model->is_holiday;
                $m->all_group = $model->all_group;
                $m->id_discipline = $model->id_discipline;
                $m->id_teacher = $model->id_teacher;
                $m->id_classroom = $model->id_classroom;
                $m->id_group = $model->id_group;
                $m->id_faculty = $model->id_faculty;
                $m->id_speciality = $model->id_speciality;
                $m->course = $model->course;
                $m->semester = $model->semester;
                $m->id_okr = $model->id_okr;
                $m->is_numerator = 1;
                $m->day = 4;
                $m->comment = $model->comment;
                $m->lesson_number = $counter_d4n;
            $m->insert();
        }
    }
}                
/**
 * Конец функций обработчика четверга
 */

/**
 * Пятница
 */
if($model->stream5 == 1){//Если на пятнице нажата кнопка "Для всей групи"
      
    foreach($parent as $p){//Проходим по всем группам
        
       for($counter_d5 = 1; $counter_d5 < 9; $counter_d5++){//Смотрим, что нам прислали для знаменателя
        if($model->d5[$counter_d5] == 0){
            continue;
        }else{//Если стоял флажок =) записываем 
            $m = new Lessons;
                $m->is_holiday = $model->is_holiday;
                $m->all_group = $model->all_group;
                $m->id_discipline = $model->id_discipline;
                $m->id_teacher = $model->id_teacher;
                $m->id_classroom = $model->id_classroom;
                $m->id_group = $p['group_id'];
                $m->id_faculty = $model->id_faculty;
                $m->id_speciality = $model->id_speciality;
                $m->course = $model->course;
                $m->semester = $model->semester;
                $m->id_okr = $model->id_okr;
                $m->is_numerator = 0;
                $m->day = 5;
                $m->comment = $model->comment;
                $m->lesson_number = $counter_d5;
            $m->insert();
        }
    }
    for($counter_d5n = 1; $counter_d5n < 9; $counter_d5n++){//Смотрим, что нам прислали для числителя
        if($model->d5n[$counter_d5n] == 0){
            continue;
        }else{
            $m = new Lessons;
                $m->is_holiday = $model->is_holiday;
                $m->all_group = $model->all_group;
                $m->id_discipline = $model->id_discipline;
                $m->id_teacher = $model->id_teacher;
                $m->id_classroom = $model->id_classroom;
                $m->id_group = $p['group_id'];
                $m->id_faculty = $model->id_faculty;
                $m->id_speciality = $model->id_speciality;
                $m->course = $model->course;
                $m->semester = $model->semester;
                $m->id_okr = $model->id_okr;
                $m->is_numerator = 1;
                $m->day = 5;
                $m->comment = $model->comment;
                $m->lesson_number = $counter_d5n;
            $m->insert();
        }
    } 
        
    }
    
}else{//Нужна только 1 группа
    
    for($counter_d5 = 1; $counter_d5 < 9; $counter_d5++){//Смотрим, что нам прислали для знаменателя
        if($model->d5[$counter_d5] == 0){
            continue;
        }else{
            $m = new Lessons;
                $m->is_holiday = $model->is_holiday;
                $m->all_group = $model->all_group;
                $m->id_discipline = $model->id_discipline;
                $m->id_teacher = $model->id_teacher;
                $m->id_classroom = $model->id_classroom;
                $m->id_group = $model->id_group;
                $m->id_faculty = $model->id_faculty;
                $m->id_speciality = $model->id_speciality;
                $m->course = $model->course;
                $m->semester = $model->semester;
                $m->id_okr = $model->id_okr;
                $m->is_numerator = 0;
                $m->day = 5;
                $m->comment = $model->comment;
                $m->lesson_number = $counter_d5;
            $m->insert();
        }
    }
    for($counter_d5n = 1; $counter_d5n < 9; $counter_d5n++){//Смотрим, что нам прислали для числителя
        if($model->d5n[$counter_d5n] == 0){
            continue;
        }else{
            $m = new Lessons;
                $m->is_holiday = $model->is_holiday;
                $m->all_group = $model->all_group;
                $m->id_discipline = $model->id_discipline;
                $m->id_teacher = $model->id_teacher;
                $m->id_classroom = $model->id_classroom;
                $m->id_group = $model->id_group;
                $m->id_faculty = $model->id_faculty;
                $m->id_speciality = $model->id_speciality;
                $m->course = $model->course;
                $m->semester = $model->semester;
                $m->id_okr = $model->id_okr;
                $m->is_numerator = 1;
                $m->day = 5;
                $m->comment = $model->comment;
                $m->lesson_number = $counter_d5n;
            $m->insert();
        }
    }
}                
/**
 * Конец функций обработчика пятницы
 */

/**
 * Суббота
 */
if($model->stream6 == 1){//Если на субботе нажата кнопка "Для всей групи"
      
    foreach($parent as $p){//Проходим по всем группам
        
       for($counter_d6 = 1; $counter_d6 < 9; $counter_d6++){//Смотрим, что нам прислали для знаменателя
        if($model->d6[$counter_d6] == 0){
            continue;
        }else{//Если стоял флажок =) записываем 
            $m = new Lessons;
                $m->is_holiday = $model->is_holiday;
                $m->all_group = $model->all_group;
                $m->id_discipline = $model->id_discipline;
                $m->id_teacher = $model->id_teacher;
                $m->id_classroom = $model->id_classroom;
                $m->id_group = $p['group_id'];
                $m->id_faculty = $model->id_faculty;
                $m->id_speciality = $model->id_speciality;
                $m->course = $model->course;
                $m->semester = $model->semester;
                $m->id_okr = $model->id_okr;
                $m->is_numerator = 0;
                $m->day = 6;
                $m->comment = $model->comment;
                $m->lesson_number = $counter_d6;
            $m->insert();
        }
    }
    for($counter_d6n = 1; $counter_d6n < 9; $counter_d6n++){//Смотрим, что нам прислали для числителя
        if($model->d6n[$counter_d6n] == 0){
            continue;
        }else{
            $m = new Lessons;
                $m->is_holiday = $model->is_holiday;
                $m->all_group = $model->all_group;
                $m->id_discipline = $model->id_discipline;
                $m->id_teacher = $model->id_teacher;
                $m->id_classroom = $model->id_classroom;
                $m->id_group = $p['group_id'];
                $m->id_faculty = $model->id_faculty;
                $m->id_speciality = $model->id_speciality;
                $m->course = $model->course;
                $m->semester = $model->semester;
                $m->id_okr = $model->id_okr;
                $m->is_numerator = 1;
                $m->day = 6;
                $m->comment = $model->comment;
                $m->lesson_number = $counter_d6n;
            $m->insert();
        }
    } 
        
    }
    
}else{//Нужна только 1 группа
    
    for($counter_d6 = 1; $counter_d6 < 9; $counter_d6++){//Смотрим, что нам прислали для знаменателя
        if($model->d6[$counter_d6] == 0){
            continue;
        }else{
            $m = new Lessons;
                $m->is_holiday = $model->is_holiday;
                $m->all_group = $model->all_group;
                $m->id_discipline = $model->id_discipline;
                $m->id_teacher = $model->id_teacher;
                $m->id_classroom = $model->id_classroom;
                $m->id_group = $model->id_group;
                $m->id_faculty = $model->id_faculty;
                $m->id_speciality = $model->id_speciality;
                $m->course = $model->course;
                $m->semester = $model->semester;
                $m->id_okr = $model->id_okr;
                $m->is_numerator = 0;
                $m->day = 6;
                $m->comment = $model->comment;
                $m->lesson_number = $counter_d6;
            $m->insert();
        }
    }
    for($counter_d6n = 1; $counter_d6n < 9; $counter_d6n++){//Смотрим, что нам прислали для числителя
        if($model->d6n[$counter_d6n] == 0){
            continue;
        }else{
            $m = new Lessons;
                $m->is_holiday = $model->is_holiday;
                $m->all_group = $model->all_group;
                $m->id_discipline = $model->id_discipline;
                $m->id_teacher = $model->id_teacher;
                $m->id_classroom = $model->id_classroom;
                $m->id_group = $model->id_group;
                $m->id_faculty = $model->id_faculty;
                $m->id_speciality = $model->id_speciality;
                $m->course = $model->course;
                $m->semester = $model->semester;
                $m->id_okr = $model->id_okr;
                $m->is_numerator = 1;
                $m->day = 6;
                $m->comment = $model->comment;
                $m->lesson_number = $counter_d6n;
            $m->insert();
        }
    }
}                
/**
 * Конец функций обработчика субботы
 */

            if($group_has_subgroup == true){
                $url = Url::to('index.php?r=timetable/lessons/editor&id'.$model->lesson_id.'&semester_for_editor='.$model->semester.'&course_get='.$model->course.'&faculty_id='.$model->id_faculty.'&speciality_id='.$model->id_speciality.'&group_id='.$model->parent.'#lesson_id'.$model->lesson_id);    
            }else{
                $url = Url::to('index.php?r=timetable/lessons/editor&id'.$model->lesson_id.'&semester_for_editor='.$model->semester.'&course_get='.$model->course.'&faculty_id='.$model->id_faculty.'&speciality_id='.$model->id_speciality.'&group_id='.$model->id_group.'#lesson_id'.$model->lesson_id);    
            }
            return $this->redirect($url);
        } else {
            return $this->renderAjax('copy', [
                'model' => $this->findModel($id),
            ]);
        }
    }        
    /**
     * Creates a new Lessons model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Lessons();
        
        
        
        
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            
            $group_info = Groups::findOne(["group_id" => $model->id_group]);
            
            function lesson_insert($id_group, $is_numerator){
                    $m = new Lessons;
                    $m->is_holiday = $model->is_holiday;
                    $m->all_group = $model->all_group;
                    $m->id_discipline = $model->id_discipline;
                    $m->id_teacher = $model->id_teacher;
                    $m->id_classroom = $model->id_classroom;
                    $m->id_group = $id_group;
                    $m->id_faculty = $model->id_faculty;
                    $m->id_speciality = $model->id_speciality;
                    $m->course = $model->course;
                    $m->semester = $model->semester;
                    $m->id_okr = $model->id_okr;
                    $m->is_numerator = $is_numerator;
                    $m->day = $model->day;
                    $m->comment = $model->comment;
                    $m->lesson_number = $model->lesson_number;
                    $m->insert();
            }
            
//Код для всего потока            
    if($model->all_speciality){
       
        $sp = Speciality::findAll(['id_faculty' => $model->id_faculty]);//Узнаем факультет этой группы
        $gr = Groups::find()->where(['inflow_year' => date("Y") - $model->course])->all();//Выбираем все группы с таким же годом поступления
        
        foreach($gr as $g){
            foreach($sp as $s){
                if($s['speciality_id'] == $g['id_speciality']){//Если у группы и специальности совпадают ИД, это то, что нужно
                    $stream_groups[] = $g['group_id'];
                }
            }
        }
//Сам код вставки    

/* 
    Если выбрана галка "Числитель/знаменатель", единожды записываем данные для этой группы
*/
if($model->num_dem == 1){//Если выбрана галка "Числитель/знаменатель"
    if($model->is_numerator == 0){//Если ИД подгруппы совпадает - психуем и забиваем
        $m = new Lessons;                                                    
            $m->is_holiday = $model->is_holiday;
            $m->all_group = $model->all_group;
            $m->id_discipline = $model->id_discipline;
            $m->id_teacher = $model->id_teacher;
            $m->id_classroom = $model->id_classroom;
            $m->id_group = $model->id_group;
            $m->id_faculty = $model->id_faculty;
            $m->id_speciality = $model->id_speciality;
            $m->course = $model->course;
            $m->semester = $model->semester;
            $m->id_okr = $model->id_okr;
            $m->is_numerator = 1;
            $m->comment = $model->comment;
            $m->day = $model->day;
            $m->lesson_number = $model->lesson_number;
        $m->insert();
    }else{//Иначе все по новой
        $m = new Lessons;                                                    
            $m->is_holiday = $model->is_holiday;
            $m->all_group = $model->all_group;
            $m->id_discipline = $model->id_discipline;
            $m->id_teacher = $model->id_teacher;
            $m->id_classroom = $model->id_classroom;
            $m->id_group = $model->id_group;
            $m->id_faculty = $model->id_faculty;
            $m->id_speciality = $model->id_speciality;
            $m->course = $model->course;
            $m->semester = $model->semester;
            $m->id_okr = $model->id_okr;
            $m->is_numerator = 0;
            $m->comment = $model->comment;
            $m->day = $model->day;
            $m->lesson_number = $model->lesson_number;
            $m->insert();
    }
    
 
foreach($stream_groups as $sg){
    $is_group_for_subgroup = Groups::find()->where(['parent_group' => $sg])->all();
    $group_speciality = Groups::find()->where(['group_id' => $sg])->select('id_speciality')->all();
            
    if((!(empty($is_group_for_subgroup))) || ($sg == $model->id_group)){//Если у группы существуют подгруппы или это первоначальная группа - пропускаем
        continue;
    }else{
        $m = new Lessons;                                                    
            $m->is_holiday = $model->is_holiday;
            $m->all_group = $model->all_group;
            $m->id_discipline = $model->id_discipline;
            $m->id_teacher = $model->id_teacher;
            $m->id_classroom = $model->id_classroom;
            $m->id_group = $sg;
            $m->id_faculty = $model->id_faculty;
            $m->id_speciality = $group_speciality[0]['id_speciality'];
            $m->course = $model->course;
            $m->semester = $model->semester;
            $m->id_okr = $model->id_okr;
            $m->is_numerator = 0;
            $m->comment = $model->comment;
            $m->day = $model->day;
            $m->lesson_number = $model->lesson_number;
        $m->insert();
        $m = new Lessons;
            $m->is_holiday = $model->is_holiday;
            $m->all_group = $model->all_group;
            $m->id_discipline = $model->id_discipline;
            $m->id_teacher = $model->id_teacher;
            $m->id_classroom = $model->id_classroom;
            $m->id_group = $sg;
            $m->id_faculty = $model->id_faculty;
            $m->id_speciality = $group_speciality[0]['id_speciality'];
            $m->course = $model->course;
            $m->semester = $model->semester;
            $m->id_okr = $model->id_okr;
            $m->is_numerator = 1;
            $m->comment = $model->comment;
            $m->day = $model->day;
            $m->lesson_number = $model->lesson_number;
            $m->insert(); 
    }   
}

}else{//Если галка Числитель/знаменатель не выбрана
    foreach($stream_groups as $sg){
    $is_group_for_subgroup = Groups::find()->where(['parent_group' => $sg])->all();
    $group_speciality = Groups::find()->where(['group_id' => $sg])->select('id_speciality')->all();
            
    if((!(empty($is_group_for_subgroup))) || ($sg == $model->id_group)){//Если у группы существуют подгруппы или это первоначальная группа - пропускаем
        continue;
    }else{
        $m = new Lessons;                                                    
            $m->is_holiday = $model->is_holiday;
            $m->all_group = $model->all_group;
            $m->id_discipline = $model->id_discipline;
            $m->id_teacher = $model->id_teacher;
            $m->id_classroom = $model->id_classroom;
            $m->id_group = $sg;
            $m->id_faculty = $model->id_faculty;
            $m->id_speciality = $group_speciality[0]['id_speciality'];
            $m->course = $model->course;
            $m->semester = $model->semester;
            $m->id_okr = $model->id_okr;
            $m->is_numerator = $model->is_numerator;
            $m->comment = $model->comment;
            $m->day = $model->day;
            $m->lesson_number = $model->lesson_number;
        $m->insert();
    }   
}
}
                 
//Конец кода вставки     
//Конец кода для всего потока
        
}else{//Если не выбрана галка "Для всего потока"
    if($group_info['parent_group'] == 0){//Выясняем группа это или подгруппа
        $is_group = true; //Если это группа
    if($model->num_dem == 1){//Записываем если выбрана галочка Числитель/Знаменатель для 1 группы
        $m = new Lessons;
            if($model->is_numerator == 1){                    
                $m->is_holiday = $model->is_holiday;
                $m->all_group = $model->all_group;
                $m->id_discipline = $model->id_discipline;
                $m->id_teacher = $model->id_teacher;
                $m->id_classroom = $model->id_classroom;
                $m->id_group = $model->id_group;
                $m->id_faculty = $model->id_faculty;
                $m->id_speciality = $model->id_speciality;
                $m->course = $model->course;
                $m->semester = $model->semester;
                $m->id_okr = $model->id_okr;
                $m->is_numerator = 0;
                $m->day = $model->day;
                $m->comment = $model->comment;
                $m->lesson_number = $model->lesson_number;
                    $m->insert();
            }else{
                $m->is_holiday = $model->is_holiday;
                $m->all_group = $model->all_group;
                $m->id_discipline = $model->id_discipline;
                $m->id_teacher = $model->id_teacher;
                $m->id_classroom = $model->id_classroom;
                $m->id_group = $model->id_group;
                $m->id_faculty = $model->id_faculty;
                $m->id_speciality = $model->id_speciality;
                $m->course = $model->course;
                $m->semester = $model->semester;
                $m->id_okr = $model->id_okr;
                $m->is_numerator = 1;
                $m->day = $model->day;
                $m->comment = $model->comment;
                $m->lesson_number = $model->lesson_number;
                    $m->insert();                       
            }
    } 
    }else{
        $is_group = false; //Если это подгруппа
            if($model->all_group == 1){//Если выбрана галка для всей группы
                $groups_arr = Groups::findAll(['parent_group' => $model->parent]);
                    if($model->num_dem == 1){//Если выбрана галка числитель/знаменатель, сохраним это для этой подгруппы
                        $m = new Lessons;
                            if($model->is_numerator == 1){                    
                                $m->is_holiday = $model->is_holiday;
                                $m->all_group = $model->all_group;
                                $m->id_discipline = $model->id_discipline;
                                $m->id_teacher = $model->id_teacher;
                                $m->id_classroom = $model->id_classroom;
                                $m->id_group = $model->id_group;
                                $m->id_faculty = $model->id_faculty;
                                $m->id_speciality = $model->id_speciality;
                                $m->course = $model->course;
                                $m->semester = $model->semester;
                                $m->id_okr = $model->id_okr;
                                $m->is_numerator = 0;                                    
                                $m->comment = $model->comment;
                                $m->day = $model->day;
                                $m->lesson_number = $model->lesson_number;
                                $m->insert();
                            }else{
                                $m->is_holiday = $model->is_holiday;
                                $m->all_group = $model->all_group;
                                $m->id_discipline = $model->id_discipline;
                                $m->id_teacher = $model->id_teacher;
                                $m->id_classroom = $model->id_classroom;
                                $m->id_group = $model->id_group;
                                $m->id_faculty = $model->id_faculty;
                                $m->id_speciality = $model->id_speciality;
                                $m->course = $model->course;
                                $m->semester = $model->semester;
                                $m->id_okr = $model->id_okr;
                                $m->is_numerator = 1;
                                $m->comment = $model->comment;
                                $m->day = $model->day;
                                $m->lesson_number = $model->lesson_number;
                                $m->insert();                            
                            }             
                    }
    foreach($groups_arr as $ga){//Перебираем все группы
        if($ga['group_id'] == $model->id_group){//Если ИД подгруппы совпадает - психуем и забиваем
            continue;
        }else{//Иначе все по новой
            if($model->num_dem == 1){//Выбрана галочка Числитель/Знаменатель для всей группы
                $m = new Lessons;                                                    
                    $m->is_holiday = $model->is_holiday;
                    $m->all_group = $model->all_group;
                    $m->id_discipline = $model->id_discipline;
                    $m->id_teacher = $model->id_teacher;
                    $m->id_classroom = $model->id_classroom;
                    $m->id_group = $ga['group_id'];
                    $m->id_faculty = $model->id_faculty;
                    $m->id_speciality = $model->id_speciality;
                    $m->course = $model->course;
                    $m->semester = $model->semester;
                    $m->id_okr = $model->id_okr;
                    $m->is_numerator = 0;
                    $m->comment = $model->comment;
                    $m->day = $model->day;
                    $m->lesson_number = $model->lesson_number;
                    $m->insert();
                $m = new Lessons;
                    $m->is_holiday = $model->is_holiday;
                    $m->all_group = $model->all_group;
                    $m->id_discipline = $model->id_discipline;
                    $m->id_teacher = $model->id_teacher;
                    $m->id_classroom = $model->id_classroom;
                    $m->id_group = $ga['group_id'];
                    $m->id_faculty = $model->id_faculty;
                    $m->id_speciality = $model->id_speciality;
                    $m->course = $model->course;
                    $m->semester = $model->semester;
                    $m->id_okr = $model->id_okr;
                    $m->is_numerator = 1;
                    $m->comment = $model->comment;
                    $m->day = $model->day;
                    $m->lesson_number = $model->lesson_number;
                $m->insert(); 
            }else{
                $m = new Lessons;
                    $m->is_holiday = $model->is_holiday;
                    $m->all_group = $model->all_group;
                    $m->id_discipline = $model->id_discipline;
                    $m->id_teacher = $model->id_teacher;
                    $m->id_classroom = $model->id_classroom;
                    $m->id_group = $ga['group_id'];
                    $m->id_faculty = $model->id_faculty;
                    $m->id_speciality = $model->id_speciality;
                    $m->course = $model->course;
                    $m->semester = $model->semester;
                    $m->id_okr = $model->id_okr;
                    $m->comment = $model->comment;
                    $m->is_numerator = $model->is_numerator;
                    $m->day = $model->day;
                    $m->lesson_number = $model->lesson_number;
                $m->insert();
            }
        }
    } 
            }else{
                if($model->num_dem == 1){//Если выбрана галка числитель/знаменатель, сохраним это для этой подгруппы
                    $m = new Lessons;
                        if($model->is_numerator == 1){                    
                            $m->is_holiday = $model->is_holiday;
                            $m->all_group = $model->all_group;
                            $m->id_discipline = $model->id_discipline;
                            $m->id_teacher = $model->id_teacher;
                            $m->id_classroom = $model->id_classroom;
                            $m->id_group = $model->id_group;
                            $m->id_faculty = $model->id_faculty;
                            $m->id_speciality = $model->id_speciality;
                            $m->course = $model->course;
                            $m->semester = $model->semester;
                            $m->id_okr = $model->id_okr;
                            $m->is_numerator = 0;                                    
                            $m->comment = $model->comment;
                            $m->day = $model->day;
                            $m->lesson_number = $model->lesson_number;
                    $m->insert();
                        }else{
                            $m->is_holiday = $model->is_holiday;
                            $m->all_group = $model->all_group;
                            $m->id_discipline = $model->id_discipline;
                            $m->id_teacher = $model->id_teacher;
                            $m->id_classroom = $model->id_classroom;
                            $m->id_group = $model->id_group;
                            $m->id_faculty = $model->id_faculty;
                            $m->id_speciality = $model->id_speciality;
                            $m->course = $model->course;
                            $m->semester = $model->semester;
                            $m->id_okr = $model->id_okr;
                            $m->is_numerator = 1;
                            $m->comment = $model->comment;
                            $m->day = $model->day;
                            $m->lesson_number = $model->lesson_number;
                            $m->insert();                            
                        }             
                }
            }
                
    }
}    
//Конец кода добавления            
            if($model->subgroup == 1){
                $url = Url::to('index.php?r=timetable/lessons/editor&id'.$model->lesson_id.'&semester_for_editor='.$model->semester.'&course_get='.$model->course.'&faculty_id='.$model->id_faculty.'&speciality_id='.$model->id_speciality.'&group_id='.$model->parent.'#lesson_id'.$model->lesson_id);    
            }else{
                $url = Url::to('index.php?r=timetable/lessons/editor&id'.$model->lesson_id.'&semester_for_editor='.$model->semester.'&course_get='.$model->course.'&faculty_id='.$model->id_faculty.'&speciality_id='.$model->id_speciality.'&group_id='.$model->id_group.'#lesson_id'.$model->lesson_id);    
            }
            return $this->redirect($url);
        } else {
            return $this->renderAjax('create', [
                'model' => $model,
            ]);
        }
    }
    
    public function actionCreator_index()
    {
        $model = new Lessons();
        if ($model->load(Yii::$app->request->post())) {//$faculty->load(Yii::$app->request->post()) && $speciality->load(Yii::$app->request->post()) && 
            return $this->redirect(['editor', 'semester_for_editor' => $model->semester_for_editor, 'course_get' => $model->course_get, 'faculty_id' => $model->id_faculty, 'speciality_id' => $model->id_speciality, 'group_id' => $model->id_group]);
        } else {
            return $this->render('creator_index', [
                'model' => $model
            ]);
        }
    }
    
    public function actionEditor()
    {
        $model = new Lessons();
        
        $model->load(Yii::$app->request->get());
        return $this->render('editor', [
                'model' => $model,
                'semester_for_editor' => $model['semester_for_editor']
            ]);
    }    
    
    public function actionClass_list($id,$seats)
    {
        if($id == true){
            $posts = ClassRooms::find()
                ->orderBy('classrooms_number ASC')
                ->all();
            foreach ($posts as $cl){ 
                $housing = Housing::findOne(['housing_id' => $cl['id_housing']]);
                echo "<option value='".$cl['classrooms_id']."'>".$cl['classrooms_number'].' - '.$housing['name']."</option>";
            }
        }else{
            $classes = ClassRooms::find()->Where('seats>'.$seats)->orderBy('classrooms_number ASC')->all();
            foreach ($classes as $cl){ 
                $housing = Housing::findOne(['housing_id' => $cl['id_housing']]);
                echo "<option value='".$cl['classrooms_id']."'>".$cl['classrooms_number'].' - '.$housing['name']."</option>";
            }
        }
        
    }
    
    public function actionSpeciality_list($id)
    {
        $countPosts = Speciality::find()
                ->where(['id_faculty' => $id])
                ->count();
 
        $posts = Speciality::find()
                ->where(['id_faculty' => $id])
                ->orderBy('id_faculty DESC')
                ->all();
 
        if($countPosts>0){
                echo "<option>Оберіть спеціальність</option>";
            foreach($posts as $post){
                echo "<option value='".$post->speciality_id."'>".$post->speciality_name."</option>";
            }
        }
        else{
            echo "<option>-</option>";
        }
 
    }
    
    public function actionGroups_list($id,$course)
    {   
        
        $infl = date('Y') - $course;
        $countPosts = Groups::find()
                ->where(['id_speciality' =>  $id, 'is_subgroup' => 0])
                ->count();
 
        $posts = Groups::find()
                ->where(['id_speciality' => $id, 'inflow_year' => $infl, 'is_subgroup' => 0])
                ->orderBy('id_speciality DESC')
                ->all();
 
        if($countPosts>0){
            echo "<option>Оберіть групу</option>";
            foreach($posts as $post){
                echo "<option value='".$post->group_id."'>".$post->main_group_name."</option>";
            }
        }
        else{
            echo "<option>-</option>";
        }
 
    }
    
    public function actionTeacher_by_cathedra($id)
    {   
        
        $cathedra_id = Discipline::findOne(['discipline_distribution_id' => $id]);
        
        $countPosts = Teachers::find() 
                ->where(['id_cathedra' =>  $cathedra_id['id_cathedra']])
                ->count();
        
        $posts = Teachers::find() 
                ->where(['id_cathedra' =>  $cathedra_id['id_cathedra']])
                ->orderBy('teacher_name ASC')
                ->all();
        
        
        if($countPosts>0){
            echo "<option>Оберіть викладача</option>";
            foreach($posts as $post){
                echo "<option value='".$post->teacher_id."'>".$post->teacher_name."</option>";
            }
        }
        else{
            echo "<option>-</option>";
        }
 
    }
    /**
     * Updates an existing Lessons model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        
        /*if($model->is_holiday == 1){
                $model->lesson_id = 0;
                $model->id_discipline = 0;
                $model->id_teacher = 0;
                $model->id_classroom = 0;
                $model->is_holiday = 1;
        }*/
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
        
            if($model->subgroup == 1){
                $url = Url::to('index.php?r=timetable/lessons/editor&id'.$model->lesson_id.'&semester_for_editor='.$model->semester.'&course_get='.$model->course.'&faculty_id='.$model->id_faculty.'&speciality_id='.$model->id_speciality.'&group_id='.$model->parent.'#lesson_id'.$model->lesson_id);    
            }else{
                $url = Url::to('index.php?r=timetable/lessons/editor&id'.$model->lesson_id.'&semester_for_editor='.$model->semester.'&course_get='.$model->course.'&faculty_id='.$model->id_faculty.'&speciality_id='.$model->id_speciality.'&group_id='.$model->id_group.'#lesson_id'.$model->lesson_id);    
            }
            return $this->redirect($url);                
                
        } else {
            return $this->renderAjax('update', [
                'model' => $model,
            ]);
        }
    }
    /**
     * Deletes an existing Lessons model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        
        $this->findModel($id)->delete();
        
        $group = Groups::find()->where(['group_id' => $model->id_group])->all();
        
        if($group[0]['parent_group'] != 0){
            $url = Url::to('index.php?r=timetable/lessons/editor&id'.$model->lesson_id.'&semester_for_editor='.$model->semester.'&course_get='.$model->course.'&faculty_id='.$model->id_faculty.'&speciality_id='.$model->id_speciality.'&group_id='.$group[0]['parent_group'].'#day_lesson'.$model->day.'_'.$model->lesson_number);    
        }else{
            $url = Url::to('index.php?r=timetable/lessons/editor&id'.$model->lesson_id.'&semester_for_editor='.$model->semester.'&course_get='.$model->course.'&faculty_id='.$model->id_faculty.'&speciality_id='.$model->id_speciality.'&group_id='.$model->id_group.'#day_lesson'.$model->day.'_'.$model->lesson_number);    
        }
        return $this->redirect($url);
    }
    /**
     * Finds the Lessons model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Lessons the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Lessons::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}