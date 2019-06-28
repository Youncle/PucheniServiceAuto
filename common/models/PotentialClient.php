<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "potentialiclienti".
 *
 * @property int $id
 * @property string $firstName
 * @property string $lastName
 * @property string $email1
 * @property string $phone1
 */
class PotentialClient extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'potentialiclienti';
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
            [['createdAt', 'updatedAt'], 'integer'],
            [['firstName', 'lastName', 'phone1'], 'string', 'max' => 100],
            [['email1'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'firstName' => 'First Name',
            'lastName' => 'Last Name',
            'email1' => 'Email',
            'phone1' => 'Mobil',
            'createdAt' => 'Created At',
            'updatedAt' => 'Updated At',
        ];
    }
}
