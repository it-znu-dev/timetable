<?php

namespace app\module\handbook\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\module\handbook\models\Specclasses;

/**
 * SpecclassesSearch represents the model behind the search form about `app\module\handbook\models\Specclasses`.
 */
class SpecclassesSearch extends Specclasses
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['spec_class_id'], 'integer'],
            [['spec_class_name'], 'safe'],
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
        $query = Specclasses::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'spec_class_id' => $this->spec_class_id,
        ]);

        $query->andFilterWhere(['like', 'spec_class_name', $this->spec_class_name]);

        return $dataProvider;
    }
}
