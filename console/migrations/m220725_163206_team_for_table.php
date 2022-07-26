<?php

use yii\db\Migration;

/**
 * Class m220725_163206_team_for_table
 */
class m220725_163206_team_for_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable("{{%team}}", [
            'id'=>$this->primaryKey(),
            'fullName'=>$this->string()->null(),
            'degree'=>$this->string()->null(),
            'images'=>$this->string()->null(),
            'twitter'=>$this->string()->null(),
            'facebook'=>$this->string()->null(),
            'telegram'=>$this->string()->null(),
            'created_at'=>$this->timestamp()->null(),
            'updated_at'=>$this->timestamp()->null()
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable("{{%team}}");
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220725_163206_team_for_table cannot be reverted.\n";

        return false;
    }
    */
}
