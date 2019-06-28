<?php

use yii\db\Migration;

/**
 * Class m190613_115032_unsignedClients
 */
class m190613_115032_unsignedClients extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('potentialiclienti', [
            'id' => $this->primaryKey(),
            'firstName' => $this->integer(11),
            'lastName' => $this->string(100),
            'email1' => $this->string(255),
            'phone1' => $this->string(100),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('potentialiclienti');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190613_115032_unsignedClients cannot be reverted.\n";

        return false;
    }
    */
}
