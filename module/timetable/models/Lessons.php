<?php

namespace app\module\timetable\models;
use app\module\handbook\models\Faculty;
use app\module\handbook\models\Groups;
use app\module\handbook\models\Speciality;

use Yii;

/**
 * This is the model class for table "lessons".
 *
 * @property integer $lesson_id
 * @property integer $id_group
 * @property integer $id_faculty
 * @property integer $id_speciality
 * @property integer $course
 * @property integer $semester
 * @property integer $id_okr
 * @property integer $is_numerator
 * @property integer $id_discipline
 * @property integer $id_teacher
 * @property integer $id_classroom
 * @property integer $day
 * @property integer $is_holiday
 * @property integer $all_group
 * @property integer $all_speciality
 * @property integer $lesson_number
 *
 * @property DisciplineDistribution $idDiscipline
 * @property ClassRooms $idClassroom
 * @property Faculty $idFaculty
 * @property Groups $idGroup
 * @property Okr $idOkr
 * @property Speciality $idSpeciality
 * @property Teachers $idTeacher
 */
class Lessons extends \yii\db\ActiveRecord
{
    
    
    public $course_get;
    public $num_dem;
    public $subgroup;
    public $parent;
    public $no_check;
    
    public $semester_for_editor;
    
    public $d1l1n, $d1l2n, $d1l3n, $d1l4n, $d1l5n, $d1l6n, $d1l7n, $d1l8n;
    public $d1l1, $d1l2, $d1l3, $d1l4, $d1l5, $d1l6, $d1l7, $d1l8;
    
    public $d2l1n, $d2l2n, $d2l3n, $d2l4n, $d2l5n, $d2l6n, $d2l7n, $d2l8n;
    public $d2l1, $d2l2, $d2l3, $d2l4, $d2l5, $d2l6, $d2l7, $d2l8;
    
    public $d3l1n, $d3l2n, $d3l3n, $d3l4n, $d3l5n, $d3l6n, $d3l7n, $d3l8n;
    public $d3l1, $d3l2, $d3l3, $d3l4, $d3l5, $d3l6, $d3l7, $d3l8;
    
    public $d4l1n, $d4l2n, $d4l3n, $d4l4n, $d4l5n, $d4l6n, $d4l7n, $d4l8n;
    public $d4l1, $d4l2, $d4l3, $d4l4, $d4l5, $d4l6, $d4l7, $d4l8;
    
    public $d5l1n, $d5l2n, $d5l3n, $d5l4n, $d5l5n, $d5l6n, $d5l7n, $d5l8n;
    public $d5l1, $d5l2, $d5l3, $d5l4, $d5l5, $d5l6, $d5l7, $d5l8;
    
    public $d6l1n, $d6l2n, $d6l3n, $d6l4n, $d6l5n, $d6l6n, $d6l7n, $d6l8n;
    public $d6l1, $d6l2, $d6l3, $d6l4, $d6l5, $d6l6, $d6l7, $d6l8;
    
    public $stream1, $stream2, $stream3, $stream4, $stream5, $stream6;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lessons';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_group', 'id_faculty', 'id_speciality', 'course', 'semester', 'id_okr', 'is_numerator', 'id_discipline', 'id_teacher', 'id_classroom', 'day', 'is_holiday', 'all_group', 'lesson_number'], 'required'],
            [['id_group', 'id_faculty', 'id_speciality', 'course', 'semester', 'id_okr', 'is_numerator', 'id_discipline', 'id_teacher', 'id_classroom', 'day', 'is_holiday', 'all_group', 'lesson_number'], 'integer'],
            [['semester_for_editor','course_get','num_dem','subgroup', 'parent', 'no_check', 'comment', 'all_speciality', 
            
            'd1l1n', 'd1l2n', 'd1l3n', 'd1l4n', 'd1l5n', 'd1l6n', 'd1l7n', 'd1l8n',
            'd1l1', 'd1l2', 'd1l3', 'd1l4', 'd1l5', 'd1l6', 'd1l7', 'd1l8',

            'd2l1n', 'd2l2n', 'd2l3n', 'd2l4n', 'd2l5n', 'd2l6n', 'd2l7n', 'd2l8n',
            'd2l1', 'd2l2', 'd2l3', 'd2l4', 'd2l5', 'd2l6', 'd2l7', 'd2l8',

            'd3l1n', 'd3l2n', 'd3l3n', 'd3l4n', 'd3l5n', 'd3l6n', 'd3l7n', 'd3l8n',
            'd3l1', 'd3l2', 'd3l3', 'd3l4', 'd3l5', 'd3l6', 'd3l7', 'd3l8',

            'd4l1n', 'd4l2n', 'd4l3n', 'd4l4n', 'd4l5n', 'd4l6n', 'd4l7n', 'd4l8n',
            'd4l1', 'd4l2', 'd4l3', 'd4l4', 'd4l5', 'd4l6', 'd4l7', 'd4l8',

            'd5l1n', 'd5l2n', 'd5l3n', 'd5l4n', 'd5l5n', 'd5l6n', 'd5l7n', 'd5l8n',
            'd5l1', 'd5l2', 'd5l3', 'd5l4', 'd5l5', 'd5l6', 'd5l7', 'd5l8',

            'd6l1n', 'd6l2n', 'd6l3n', 'd6l4n', 'd6l5n', 'd6l6n', 'd6l7n', 'd6l8n',
            'd6l1', 'd6l2', 'd6l3', 'd6l4', 'd6l5', 'd6l6', 'd6l7', 'd6l8',
                
            'stream1', 'stream2', 'stream3', 'stream4', 'stream5', 'stream6'    
            ],
                    
            'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'lesson_id' => 'Lesson ID',
            'id_group' => 'Id Group',
            'id_faculty' => 'Id Faculty',
            'id_speciality' => 'Id Speciality',
            'course' => 'Course',
            'semester' => 'Semester',
            'id_okr' => 'Id Okr',
            'is_numerator' => 'Is Numerator',
            'id_discipline' => 'Id Discipline',
            'id_teacher' => 'Id Teacher',
            'id_classroom' => 'Id Classroom',
            'day' => 'Day',
            'is_holiday' => 'ДСР',
            'all_group' => 'Для всієї групи',
            'all_speciality' => 'Для всього потоку',
            'lesson_number' => 'Lesson Number',
            'num_dem' => 'По чисельнику і по знаменнику',
            'no_check' => 'Не перевіряти кількість місць',
            'comment' => 'Коментар',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDiscipline()
    {
        return $this->hasOne(DisciplineDistribution::className(), ['discipline_distribution_id' => 'id_discipline']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClassroom()
    {
        return $this->hasOne(ClassRooms::className(), ['classrooms_id' => 'id_classroom']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFaculty()
    {
        return $this->hasOne(Faculty::className(), ['faculty_id' => 'id_faculty']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGroup()
    {
        return $this->hasOne(Groups::className(), ['group_id' => 'id_group']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOkr()
    {
        return $this->hasOne(Okr::className(), ['okr_id' => 'id_okr']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSpeciality()
    {
        return $this->hasOne(Speciality::className(), ['speciality_id' => 'id_speciality']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeacher()
    {
        return $this->hasOne(Teachers::className(), ['teacher_id' => 'id_teacher']);
    }
}
