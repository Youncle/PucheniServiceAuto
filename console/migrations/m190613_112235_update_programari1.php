<?php

use yii\db\Migration;

/**
 * Class m190613_112235_update_programari1
 */
class m190613_112235_update_programari1 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('programari','description','text');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->alterColumn('programari','description','string');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190613_112235_update_programari1 cannot be reverted.\n";

        return false;
    }
    */
}
