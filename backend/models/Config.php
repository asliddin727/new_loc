<?php

namespace backend\models;

use common\models\Config as ModelsConfig;
use Yii;
use yii\db\ActiveRecord;

class Config extends ModelsConfig
{
    
    public function rules()
    {
        return [

            [['twitter', 'facebook', 'telegram'], 'required'],
            [['twitter', 'facebook', 'telegram'], 'string', 'max' => 255]

        ];
    }
}