<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%portfolio}}".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $category
 * @property string|null $description
 * @property string|null $images
 * @property string|null $created_at
 * @property int|null $updated_at
 */
class Portfolio extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%portfolio}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description', 'images'], 'string'],
            [['created_at'], 'safe'],
            [['updated_at'], 'integer'],
            [['name'], 'string', 'max' => 50],
            [['category'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'category' => 'Category',
            'description' => 'Description',
            'images' => 'Images',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
