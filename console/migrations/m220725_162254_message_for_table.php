<?php

use yii\db\Migration;

/**
 * Class m220725_162254_message_for_table
 */
class m220725_162254_message_for_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable("{{%message}}", [
            'id'=>$this->primaryKey(),
            'fullName'=>$this->string()->null(),
            'email'=>$this->string()->null(),
            'phone'=>$this->string()->null(),
            'description'=>$this->text()->null(),
            'status'=>$this->integer()->defaultValue(0),
            'created_at'=>$this->timestamp()->null()
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable("{{%message}}");
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220725_162254_message_for_table cannot be reverted.\n";

        return false;
    }
    */
}
