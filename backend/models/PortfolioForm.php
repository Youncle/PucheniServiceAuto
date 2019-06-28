<?php
namespace backend\models;

use common\models\Portfolio;
use yii\base\Model;
use yii\helpers\VarDumper;
use yii\web\UploadedFile;


/**
 * Signup form
 */
class PortfolioForm extends Model
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
     * Creates new service.
     *
     * @return Portfolio|null the saved model or null if saving fails
     */
    public function create()
    {
        if (!$this->validate()) {
            return null;
        }

        // step 2 try to do the upload, otherwise revert everything
        if ($this->imageFile->saveAs('uploads/' . $this->imageFile->baseName . '.' . $this->imageFile->extension)) {
            $portfolio = new Portfolio();
            $portfolio->name = $this->name;
            $portfolio->photo = $this->imageFile->baseName . '.' . $this->imageFile->extension;
            $portfolio->description = $this->description;

            if (!$portfolio->save()) {
                return null;
            }

            return $portfolio;
        }

        return null;
    }



}