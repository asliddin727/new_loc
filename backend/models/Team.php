<?php

namespace backend\models;

use common\models\Team as ModelsTeam;
use Yii;
use yii\web\UploadedFile;

class Team extends ModelsTeam{

    public function rules()
    {
        return [

            [['fullName', 'degree', 'twitter', 'facebook', 'telegram'], 'required'],
            [['fullName', 'degree', 'twitter', 'facebook', 'telegram'], 'string', 'max' => 255],

            [['images'], 'required'],
            [['images'], 'file', 'extensions'=>'jpg, jpeg, png', 'maxSize'=>1042*1024*2],

            [['created_at', 'updated_at'], 'safe'],
            
        ];
    }

    public function mySave(){
        $img = UploadedFile::getInstance($this, 'images');

        if($img){
            $file = $img->baseName . '.' . $img->extension;
            $img->saveAs(\Yii::getAlias('@frontend/web/upload/') . $file);
            $this->images = $file;
        }

        return $this->save() ? true : false;
    }

}

?>