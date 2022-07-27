<?php
namespace backend\models;

use yii\web\UploadedFile;

use common\models\Portfolio as ModelsPortfolio;

class Portfolio extends ModelsPortfolio{
    
    public function rules()
    {
        return [
            [['description'], 'required'],
            [['description'], 'string', 'max'=>5000],

            [['created_at'], 'integer'],

            [['updated_at'], 'integer'],

            [['name'], 'required'],
            [['name'], 'string', 'max' => 50],

            [['category'], 'required'],
            [['category'], 'string', 'max' => 100],

            [['images'], 'required'],
            [['images'], 'file', 'extensions'=>'jpg, jpeg, png', 'maxSize'=>1042*1024*2],
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