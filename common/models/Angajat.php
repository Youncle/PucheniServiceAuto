<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "angajati".
 *
 * @property int $id
 * @property string $photo
 * @property string $name
 * @property string $description
 */
class Angajat extends \yii\db\ActiveRecord
{

    public $imageFile;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'angajati';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['imageFile'], 'file', 'skipOnEmpty' => true],
            [['photo', 'description'], 'string', 'max' => 255],
            [['name'], 'string', 'max' => 100],
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
