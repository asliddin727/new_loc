<?php

use yii\db\Migration;

/**
 * Class m220725_161205_config_table
 */
class m220725_161205_config_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable("{{%config}}", [
            'id'=>$this->primaryKey(),
            'twitter'=>$this->string()->null(),
            'facebook'=>$this->string()->null(),
            'telegram'=>$this->string()->null()
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable("{{%config}}");
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220725_161205_config_table cannot be reverted.\n";

        return false;
    }
    */
}
