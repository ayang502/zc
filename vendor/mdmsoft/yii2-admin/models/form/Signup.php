<?php
namespace mdm\admin\models\form;

use Yii;
use mdm\admin\models\User;
use yii\base\Model;

/**
 * Signup form
 */
class Signup extends Model
{
    public $username;
    public $mobile;
    public $company;
    public $contact;
    public $password;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'filter', 'filter' => 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => 'mdm\admin\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['mobile', 'filter', 'filter' => 'trim'],
            ['mobile', 'required'],
            ['mobile', 'string', 'min'=>11, 'max'=>11],
            ['mobile', 'unique', 'targetClass' => 'mdm\admin\models\User', 'message' => 'This mobile address has already been taken.'],

            ['company', 'filter', 'filter' => 'trim'],
            ['company', 'required'],
            ['company', 'string', 'min'=>2, 'max'=>225],

            ['contact', 'filter', 'filter' => 'trim'],
            ['contact', 'required'],
            ['contact', 'string', 'min'=>2, 'max'=>100],




            ['password', 'required'],
            ['password', 'string', 'min' => 6],
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if ($this->validate()) {
            $user = new User();
            $user->username = $this->username;
            $user->mobile = $this->mobile;
            $user->company = $this->company;
            $user->contact = $this->contact;
            $user->setPassword($this->password);
            $user->generateAuthKey();
            if ($user->save(false)) {
                //赋予默认角色
                $auth = \Yii::$app->authManager;
                $authorRole = $auth->getRole('普通用户');
                $auth->assign($authorRole, $user->getId());
                return $user;
            }
        }

        return null;
    }
}
