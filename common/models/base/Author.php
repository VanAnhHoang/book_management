<?php

namespace common\models\base;

use Yii;

/**
 * This is the model class for table "author".
 *
 * @property int $id
 * @property string|null $authorname
 * @property string|null $dipcription
 */
class Author extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'author';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['dipcription'], 'string'],
            [['authorname'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'authorname' => 'Authorname',
            'dipcription' => 'Dipcription',
        ];
    }
}
