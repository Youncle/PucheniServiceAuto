<?php

use yii\db\Migration;

/**
 * Class m190620_130311_portofoliu
 */
class m190620_130311_portofoliu extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('portofoliu', [
            'id' => $this->primaryKey(),
            'photo' => $this->string(255),
            'name' => $this->string(100),
            'description' => $this->string(255),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('portofoliu');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190620_130311_portofoliu cannot be reverted.\n";

        return false;
    }
    */
}
