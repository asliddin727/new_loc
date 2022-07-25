<?php

use yii\db\Migration;

/**
 * Class m220725_014256_portfolio
 */
class m220725_014256_portfolio extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable("{{%portfolio}}",[
            'id'=>$this->primaryKey(),
            'name'=>$this->string(50)->null(),
            'category'=>$this->string(100)->null(),
            'description'=>$this->text()->null(),
            'images'=>$this->text()->null(),
            'created_at'=>$this->timestamp()->null(),
            'updated_at'=>$this->integer()->null()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%portfolio}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220725_014256_portfolio cannot be reverted.\n";

        return false;
    }
    */
}
