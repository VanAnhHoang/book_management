<?php

namespace common\models;
use yii\web\IdentityInterface;
use yii\base\NotSupportedException;
use Yii;


class User extends \common\models\base\User implements IdentityInterface 
{
    public $auth_key;

    public $password_reset_token;
    
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
     
    // ... Các thuộc tính và phương thức khác của model User



