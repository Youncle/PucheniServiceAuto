<?php
namespace frontend\models;

use common\models\Programare;
use common\models\PotentialClient;
use yii\base\Model;


/**
 * Signup form
 */
class ProgramareForm extends Model
{
    public $firstName;
    public $lastName;
    public $phone1;
    public $email1;
    public $type;
    public $description;
    public $marcaAuto;
    public $anFabricatie;
    public $serieSasiu;
    public $caiPutere;
    public $culoare;
    public $data;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [

            ['firstName', 'required'],
            ['firstName', 'string'],

            ['lastName', 'required'],
            ['lastName', 'string'],

            ['email1', 'trim'],
            ['email1', 'required'],
            ['email1', 'email'],
            ['email1', 'string', 'max' => 255],
          //  ['email1', 'unique'],

            ['phone1', 'trim'],
            ['phone1', 'required'],
            ['phone1', 'string', 'max' => 255],


            [['marcaAuto'], 'string', 'max' => 100],

            [['anFabricatie'],'integer'],
            [['anFabricatie'],'required'],

            [['serieSasiu','culoare'],'string'],

            [['caiPutere'],'integer'],

            [['type'],'required'],

            [['data'],'safe'],
            [['data'],'required'],



            [['description'], 'string'],
            [['description'], 'required'],

        ];
    }

    /**
     * Creates new appointment.
     *
     * @return Programare|null the saved model or null if saving fails
     */
    public function save()
    {
        if (!$this->validate()) {
            return null;
        }

        $client = new PotentialClient();
        $client->firstName = $this->firstName;
        $client->lastName = $this->lastName;
        $client->email1 = $this->email1;
        $client->phone1 = $this->phone1;

        if (!$client->save()) {

            return null;
        }



        $programare = new Programare();
        $programare->type = $this->type;
        $programare->description = $this->description;
        $programare->marcaAuto = $this->marcaAuto;
        $programare->anFabricatie = $this->anFabricatie;
        $programare->serieSasiu = $this->serieSasiu;
        $programare->caiPutere = $this->caiPutere;
        $programare->culoare = $this->culoare;
        $programare->data = $this->data;


        if (!$programare->save()) {

            return null;
        }


        return $programare;

    }
}