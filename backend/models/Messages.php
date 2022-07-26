<?php

namespace backend\models;

use common\models\Message;

class Messages extends Message{


    public function rules()
    {
        return [
            
            [['description', 'fullName', 'email', 'phone'], 'required'],

            [['description'], 'string', 'max'=>5000],

            [['created_at'], 'safe'],

            [['status'], 'integer'],

            [['fullName'], 'string', 'max' => 255],

            [['email'], 'email'],

            [['phone'], 'string', 'max'=>13]

        ];
    }


}

?>