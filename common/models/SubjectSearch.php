<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Subject;

/**
 * SubjectSearch represents the model behind the search form about `common\models\Subject`.
 */
class SubjectSearch extends Subject
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'teacher_id', 'time_start', 'time_study', 'created_at', 'updated_at'], 'integer'],
            [['subject_name', 'schedule'], 'safe'],
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
        $query = Subject::find();

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
            'teacher_id' => $this->teacher_id,
            'time_start' => $this->time_start,
            'time_study' => $this->time_study,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'subject_name', $this->subject_name])
            ->andFilterWhere(['like', 'schedule', $this->schedule]);

        return $dataProvider;
    }
}
