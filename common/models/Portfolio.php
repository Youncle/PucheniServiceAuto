<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "portofoliu".
 *
 * @property int $id
 * @property string $photo
 * @property string $imageFile
 * @property string $name
 * @property string $description
 */
class Portfolio extends \yii\db\ActiveRecord
{

    public $imageFile;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'portofoliu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['photo', 'description'], 'string', 'max' => 255],
            [['name'], 'string', 'max' => 100],
            [['imageFile'], 'file', 'skipOnEmpty' => true],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'photo' => 'Photo',
            'name' => 'Name',
            'description' => 'Description',
        ];
    }
}
