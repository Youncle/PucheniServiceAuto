<?php

use yii\db\Migration;

/**
 * Class m190618_105726_update_programari3
 */
class m190618_105726_update_programari3 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('programari','marcaAuto',$this->string());
        $this->addColumn('programari','AnFabricatie',$this->integer());
        $this->addColumn('programari','SerieSasiu',$this->string());
        $this->addColumn('programari','CP',$this->integer());
        $this->addColumn('programari','Culoare',$this->string());
        $this->addColumn('programari','data',$this->date());
    }


    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('programari','data');
        $this->dropColumn('programari','Culoare');
        $this->dropColumn('programari','CP');
        $this->dropColumn('programari','SerieSasiu');
        $this->dropColumn('programari','AnFabricatie');
        $this->dropColumn('programari','marcaAuto');
    }


}
