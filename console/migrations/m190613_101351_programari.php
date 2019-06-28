<?php

use yii\db\Migration;

/**
 * Class m190613_101351_programari
 */
class m190613_101351_programari extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('programari', [
            'id' => $this->primaryKey(),
            'clientId' => $this->integer(11),
            'type' => $this->string(100),
            'description' => $this->string(255),
            'employeeId' => $this->integer(11),
            'status' => $this->string(100),
            'startTime' => $this->integer(11),
            'endTime' => $this->integer(11),
            'createdAt' => $this->integer(11),
            'updatedAt' => $this->integer(11),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('programari');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190613_101351_programari cannot be reverted.\n";

        return false;
    }
    */
}
