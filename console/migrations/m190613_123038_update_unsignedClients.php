<?php

use yii\db\Migration;

/**
 * Class m190613_123038_update_unsignedClients
 */
class m190613_123038_update_unsignedClients extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('potentialiclienti','createdAt',$this->integer());
        $this->addColumn('potentialiclienti','updatedAt',$this->integer());

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('potentialiclienti', 'updatedAt');
        $this->dropColumn('potentialiclienti', 'createdAt');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190613_123038_update_unsignedClients cannot be reverted.\n";

        return false;
    }
    */
}
