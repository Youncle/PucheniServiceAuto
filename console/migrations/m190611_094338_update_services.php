<?php

use yii\db\Migration;

/**
 * Class m190611_094338_update_services
 */
class m190611_094338_update_services extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
//        $this->alterColumn('services','description','string');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190611_094338_update_services cannot be reverted.\n";
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190611_094338_update_services cannot be reverted.\n";

        return false;
    }
    */
}
