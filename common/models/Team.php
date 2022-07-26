<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%team}}".
 *
 * @property int $id
 * @property string|null $fullName
 * @property string|null $degree
 * @property string|null $images
 * @property string|null $twitter
 * @property string|null $facebook
 * @property string|null $telegram
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class Team extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%team}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at'], 'safe'],
            [['fullName', 'degree', 'images', 'twitter', 'facebook', 'telegram'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fullName' => 'Full Name',
            'degree' => 'Degree',
            'images' => 'Images',
            'twitter' => 'Twitter',
            'facebook' => 'Facebook',
            'telegram' => 'Telegram',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
