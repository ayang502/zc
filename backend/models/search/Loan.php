<?php

namespace backend\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Loan as LoanModel;

/**
 * Loan represents the model behind the search form about `backend\models\Loan`.
 */
class Loan extends LoanModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'dollar', 'code_type', 'assure_type', 'status', 'created_at', 'updated_at'], 'integer'],
            [['name', 'gender', 'code', 'starttime', 'endtime', 'paytime', 'contact'], 'safe'],
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
        $query = LoanModel::find();

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
            'id' => $this->id,
            'user_id' => $this->user_id,
            'dollar' => $this->dollar,
            'code_type' => $this->code_type,
            'starttime' => $this->starttime,
            'endtime' => $this->endtime,
            'paytime' => $this->paytime,
            'assure_type' => $this->assure_type,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'gender', $this->gender])
            ->andFilterWhere(['like', 'code', $this->code])
            ->andFilterWhere(['like', 'contact', $this->contact]);

        return $dataProvider;
    }
}
