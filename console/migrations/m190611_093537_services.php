<?php

use yii\db\Migration;

/**
 * Class m190611_093537_services
 */
class m190611_093537_services extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('services',[
            'id' => $this->primaryKey(),
            'name' => $this->string(100),
            'description' => $this->text(),
            'createdAt' => $this->integer(),
            'updatedAt' => $this->integer(),
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('services');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190611_093537_services cannot be reverted.\n";

        return false;
    }
    */
}
