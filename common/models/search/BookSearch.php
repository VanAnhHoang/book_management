<?php

namespace common\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\base\Book;

/**
 * BookSearch represents the model behind the search form of `common\models\base\Book`.
 */
class BookSearch extends Book
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'idauthor', 'idcategory', 'idfile', 'created_at', 'updated_at'], 'integer'],
            [['bookname', 'ngaxuatban', 'description', 'created_by', 'updated_by', 'image', 'files'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return \yii\base\Model::scenarios();
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
        $query = Book::find();

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
            'idauthor' => $this->idauthor,
            'idcategory' => $this->idcategory,
            'idfile' => $this->idfile,
            'ngaxuatban' => $this->ngaxuatban,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'bookname', $this->bookname])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'created_by', $this->created_by])
            ->andFilterWhere(['like', 'updated_by', $this->updated_by])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'files', $this->files]);

        return $dataProvider;
    }
}
