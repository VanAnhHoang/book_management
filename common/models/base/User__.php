<?php

namespace common\models\base;


use Yii;
use common\models\Rate;

use common\models\base\Role;
use yii\web\IdentityInterface;
use PhpParser\Node\Stmt\Expression;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;


/**
 * This is the model class for table "user".
 *
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
class User extends ActiveRecord implements IdentityInterface
{
    /**
     * {@inheritdoc}
     */
    public $auth_key;
    public $password_reset_token;
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

    public static function findByUsername($username)
{
    return static::findOne(['username' => $username]);
}
    /**
     * Summary of findIdentity
     * @param mixed $id
     * @return User|null
     */
    public static function findIdentity($id)
    {
        return static::findOne(['id' => $id]);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }

    public function getId()
    {
        return $this->getPrimaryKey();
    }

    public function getAuthKey()
    {
        return $this->auth_key;
    }

    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }


    public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }

    public function getRole()
    {
        return $this->hasOne(Role::class, ['idrole' => 'id']);
    }
    public function setPassword($password)
    {
        $this->password = Yii::$app->security->generatePasswordHash($password);
    }

    public function generatePasswordResetToken()
    {
        $this->password_reset_token = Yii::$app->security->generateRandomString() . '_' . time();
    }
    public function removePasswordResetToken()
    {
        $this->password_reset_token = null;
    }

    public function beforeSave($insert) {
        if ($insert) {
            $this -> setPassword($this->password);
            $this->generateAuthKey();
            $this->generatePasswordResetToken();
            $this->created_at = time();
            $this->created_by = Yii::$app->user->identity->username;
        } else {
            $old_user = User::findOne($this->id);
            if($this->password != $old_user->password) {
                $this -> setPassword($this->password);
                $this->generateAuthKey();
                $this->generatePasswordResetToken();
            }
            $this->updated_at = time();
            $this->updated_by = Yii::$app->user->identity->username;
        }
        return parent::beforeSave(($insert));
    }
    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password);
    }

}
