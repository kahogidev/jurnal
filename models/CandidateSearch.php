<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Candidate;

/**
 * CandidateSearch represents the model behind the search form of `app\models\Candidate`.
 */
class CandidateSearch extends Candidate
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'status'], 'integer'],
            [['fullname', 'address', 'email', 'image', 'website_link', 'phone', 'school', 'university', 'degree', 'experience_title', 'company', 'skill_first', 'skill_second', 'skill_third', 'telegram_link', 'instagram_link', 'facebook_link', 'tweetter_link'], 'safe'],
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
        $query = Candidate::find();

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
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'fullname', $this->fullname])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'website_link', $this->website_link])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'school', $this->school])
            ->andFilterWhere(['like', 'university', $this->university])
            ->andFilterWhere(['like', 'degree', $this->degree])
            ->andFilterWhere(['like', 'experience_title', $this->experience_title])
            ->andFilterWhere(['like', 'company', $this->company])
            ->andFilterWhere(['like', 'skill_first', $this->skill_first])
            ->andFilterWhere(['like', 'skill_second', $this->skill_second])
            ->andFilterWhere(['like', 'skill_third', $this->skill_third])
            ->andFilterWhere(['like', 'telegram_link', $this->telegram_link])
            ->andFilterWhere(['like', 'instagram_link', $this->instagram_link])
            ->andFilterWhere(['like', 'facebook_link', $this->facebook_link])
            ->andFilterWhere(['like', 'tweetter_link', $this->tweetter_link]);

        return $dataProvider;
    }
}
