<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "programari".
 *
 * @property int $id
 * @property int $clientId
 * @property string $type
 * @property string $description
 * @property int $employeeId
 * @property string $status
 * @property string $marcaAuto
 * @property int $anFabricatie
 * @property string $serieSasiu
 * @property int $caiPutere
 * @property string $culoare
 * @property string $data
 * @property int $startTime
 * @property int $endTime
 * @property int $createdAt
 * @property int $updatedAt
 */
class Programare extends \yii\db\ActiveRecord
{
    const TYPE_NA = 0;
    const TYPE_ITP = 1;
    const TYPE_SERVICE = 5;
    const TYPE_ALTELE = 10;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'programari';
    }


    /**
     * @return array
     */
    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::class,
                'createdAtAttribute' => 'createdAt',
                'updatedAtAttribute' => 'updatedAt'
            ],
        ];
    }


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['clientId', 'employeeId', 'startTime', 'endTime', 'createdAt', 'updatedAt','anFabricatie','caiPutere'], 'integer'],
            ['type', 'default', 'value' => self::TYPE_NA],
            ['type', 'in', 'range' => [self::TYPE_ITP, self::TYPE_SERVICE, self::TYPE_ALTELE]],
            [['status','marcaAuto','serieSasiu','culoare'], 'string', 'max' => 100],
            [['data'],'date','format' => 'yyyy-MM-dd'],
            [['description'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'clientId' => 'Client ID',
            'type' => 'Type',
            'description' => 'Description',
            'employeeId' => 'Employee ID',
            'status' => 'Status',
            'marcaAuto' =>'Marca Auto',
            'anFabricatie' => 'An de Fabricatie',
            'serieSasiu' => 'Seria de Sasiu',
            'caiPutere' => 'Cai Putere',
            'culoare' => 'Culoare',
            'startTime' => 'Start Time',
            'endTime' => 'End Time',
            'createdAt' => 'Created At',
            'updatedAt' => 'Updated At',
        ];
    }


}
