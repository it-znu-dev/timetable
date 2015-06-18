<?php

namespace app\module\handbook\models;

use Yii;

/**
 * This is the model class for table "discipline_distribution".
 *
 * @property integer $discipline_distribution_id
 * @property integer $id_discipline
 * @property integer $id_edbo
 * @property integer $id_deanery
 * @property integer $id_cathedra
 * @property integer $id_lessons_type
 * @property integer $id_group
 * @property integer $course
 * @property integer $hours
 * @property integer $semestr_hours
 * @property integer $id_classroom
 *
 * @property Discipline $idDiscipline
 * @property Discipline[] $disciplines
 * @property Groups $idGroup
 * @property LessonsType $idLessonsType
 * @property Lessons[] $lessons
 */
class Discipline extends \yii\db\ActiveRecord
{
    public $mgroups;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'discipline_distribution';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_discipline', 'id_edbo', 'id_deanery', 'id_cathedra', 'id_lessons_type', 'course', 'hours', 'semestr_hours'], 'required'],
            [['id_discipline', 'mgroups', 'id_edbo', 'id_deanery', 'id_cathedra', 'id_lessons_type', 'id_group', 'course', 'hours', 'semestr_hours', 'id_classroom', 'discipline_semester'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'discipline_distribution_id' => 'Discipline Distribution ID',
            'id_discipline' => 'Дисципліна',
            'id_edbo' => 'Id Edbo',
            'id_deanery' => 'Id Deanery',
            'id_cathedra' => 'Кафедра',
            'id_lessons_type' => 'Тип заняття',
            'id_group' => 'Група',
            'course' => 'Курс',
            'hours' => 'Годин за 2 тижні',
            'semestr_hours' => 'Годин всього',
            'id_classroom' => 'Аудиторія',
            'discipline_semester' => 'Семестр'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdDiscipline()
    {
        return $this->hasOne(Discipline::className(), ['discipline_id' => 'id_discipline']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDisciplines()
    {
        return $this->hasMany(Discipline::className(), ['id_discipline' => 'discipline_id']);
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
    public function getLessonsType()
    {
        return $this->hasOne(LessonsType::className(), ['id' => 'id_lessons_type']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLessons()
    {
        return $this->hasMany(Lessons::className(), ['id_discipline' => 'discipline_distribution_id']);
    }
        /**
     * @return \yii\db\ActiveQuery
     */
    public function getDisciplineName()
    {
        return $this->hasOne(DisciplineList::className(), ['discipline_id' => 'id_discipline']);
    }
        /**
     * @return \yii\db\ActiveQuery
     */
    public function getCathedra()
    {
        return $this->hasOne(Cathedra::className(), ['cathedra_id' => 'id_cathedra']);
    }
}
