<?php

namespace app\module\handbook\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\module\handbook\models\Classrooms;
use app\module\handbook\models\Housing;

/**
 * ClassRoomsSearch represents the model behind the search form about `app\module\handbook\models\Classrooms`.
 */
class ClassRoomsSearch extends Classrooms
{
    public $class_type_name;
    public $housing_name;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['classrooms_id', 'id_housing', 'seats', 'comp_number', 'is_public'], 'integer'],
            [['classrooms_number', 'options','class_type_name', 'housing_name'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = ClassRooms::find()
          ->joinWith(['classTypes', 'classTypes.specClass']);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        
        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
        
        $query = ClassRooms::find()->joinWith('housing');
        
        $query->andFilterWhere([
            'classrooms_id' => $this->classrooms_id,
            'id_housing' => $this->id_housing,
            'seats' => $this->seats,
            'comp_number' => $this->comp_number,
        ]);

        $query->andFilterWhere(['like', 'classrooms_number', $this->classrooms_number])
            ->andFilterWhere(['like', 'options', $this->options])
            ->andFilterWhere(['like', 'spec_classes.spec_class_name', $this->class_type_name]);
        
        $query->andFilterWhere(['like', 'housing.name', $this->housing_name]);

        return new ActiveDataProvider([
            'query' => $query,
        ]);
    }
}
