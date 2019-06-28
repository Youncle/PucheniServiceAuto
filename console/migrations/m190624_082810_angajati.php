<?php

use yii\db\Migration;

/**
 * Class m190624_082810_angajati
 */
class m190624_082810_angajati extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('angajati', [
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
        $this->dropTable('angajati');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190624_082810_angajati cannot be reverted.\n";

        return false;
    }
    */
}
