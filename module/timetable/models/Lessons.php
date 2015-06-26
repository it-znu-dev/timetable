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
    
    public $d1n, $d1, $d2n, $d2, $d3n, $d3, $d4n, $d4, $d5n, $d5, $d6n, $d6;
    

    
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
                'd1n', 'd1', 'd2n', 'd2', 'd3n', 'd3', 'd4n', 'd4', 'd5n', 'd5', 'd6n', 'd6',
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
