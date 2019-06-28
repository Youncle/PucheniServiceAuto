<?php

use yii\db\Migration;

/**
 * Class m190619_075016_update_programari4
 */
class m190619_075016_update_programari4 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('programari','type',$this->smallInteger());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->alterColumn('programari','type',$this->string());
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190619_075016_update_programari4 cannot be reverted.\n";

        return false;
    }
    */
}
