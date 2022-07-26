<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%config}}".
 *
 * @property int $id
 * @property string|null $twitter
 * @property string|null $facebook
 * @property string|null $telegram
 */
class Config extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%config}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['twitter', 'facebook', 'telegram'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'twitter' => 'Twitter',
            'facebook' => 'Facebook',
            'telegram' => 'Telegram',
        ];
    }
}
