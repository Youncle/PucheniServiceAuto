<?php
namespace backend\models;

use common\models\Service;
use yii\base\Model;


/**
 * Signup form
 */
class ServiceForm extends Model
{
    public $name;
    public $description;



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

        ];
    }

    /**
     * Creates new service.
     *
     * @return Service|null the saved model or null if saving fails
     */
    public function create()
    {
        if (!$this->validate()) {
            return null;
        }

        $service = new Service();
        $service->name = $this->name;
        $service->description = $this->description;

        if (!$service->save()) {
            return null;
        }

        return $service;

    }
}