<?php
namespace backend\models;

use common\models\Angajat;
use yii\base\Model;
use yii\web\UploadedFile;


/**
 * Signup form
 */
class AngajatForm extends Model
{
    public $name;
    public $description;
    /**
     * @var UploadedFile
     */
    public $imageFile;
    public $photo;
    public $extension;



    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['name', 'trim'],
            ['name', 'required'],
            ['name', 'string', 'min' => 2, 'max' => 255],

            [['description'], 'string'],
            ['description', 'required'],

            [['imageFile'], 'file', 'skipOnEmpty' => false],


        ];
    }

    /**
     * Creates new angajat record.
     *
     * @return Angajat|null the saved model or null if saving fails
     */
    public function create()
    {

        if (!$this->validate()) {
            return null;
        }

        // step 2 try to do the upload, otherwise revert everything
        if ($this->imageFile->saveAs('Angajatiuploads/' . $this->imageFile->baseName . '.' . $this->imageFile->extension)) {
            $angajat = new Angajat();
            $angajat->name = $this->name;
            $angajat->photo = $this->imageFile->baseName . '.' . $this->imageFile->extension;
            $angajat->description = $this->description;

            if (!$angajat->save()) {
                return null;

            }
            return $angajat;
        }

        return null;
    }



}