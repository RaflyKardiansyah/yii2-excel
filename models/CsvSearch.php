<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Csv;

/**
 * CsvSearch represents the model behind the search form of `app\models\Csv`.
 */
class CsvSearch extends Csv
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['csv_id', 'csv_csv_file_id'], 'integer'],
            [['csv_first_name', 'csv_last_name', 'csv_email'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Csv::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'csv_id' => $this->csv_id,
            'csv_csv_file_id' => $this->csv_csv_file_id,
        ]);

        $query->andFilterWhere(['like', 'csv_first_name', $this->csv_first_name])
            ->andFilterWhere(['like', 'csv_last_name', $this->csv_last_name])
            ->andFilterWhere(['like', 'csv_email', $this->csv_email]);

        return $dataProvider;
    }
}
