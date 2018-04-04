<?php

namespace app\models;

use Yii;
use yii\base\Model;
/**
 * LoginForm is the model behind the login form.
 *
 * @property User|null $user This property is read-only.
 *
 */
class VeryForm extends Model
{
    public $name;
    public $email;
    public function rules()
    {
        return [
            // username and password are both required
            [['name', 'email'], 'required'],
            // rememberMe must be a boolean value
            ['email', 'email'],
        ];
    }

    }