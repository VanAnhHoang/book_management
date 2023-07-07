<?php

namespace common\models\base;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property Role $role
 * 
 * @property int $id
 * @property string $username
 * @property string|null $email
 * @property string $password
 * @property int $idrole
 * @property string|null $created_at
 * @property string|null $created_by
 * @property string|null $updated_at
 * @property string|null $updated_by
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password', 'email', 'idrole'], 'required'],
            [['idrole'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['username', 'email', 'password', 'created_by', 'updated_by'], 'string', 'max' => 255],
            [['username'], 'unique'],
            [['email'], 'unique'],
            [['idrole'], 'exist', 'skipOnError' => true, 'targetClass' => Role::class, 'targetAttribute' => ['idrole' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'email' => 'Email',
            'password' => 'Password',
            'idrole' => 'Idrole',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
        ];
    }

    /**
     * Gets query for [[Profile]].
     *
     * @return \yii\db\ActiveQuery
     */
   

    /**
     * Gets query for [[Rates]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRates()
    {
        return $this->hasMany(Rate::class, ['id_user' => 'id_user']);
    }

    /**
     * Gets query for [[Role]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRole()
    {
        return $this->hasOne(Role::class, ['idrole' => 'id']);
    }
}
