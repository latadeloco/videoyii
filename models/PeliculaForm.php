<?php

namespace app\models;

class PeliculaForm extends \yii\base\Model
{
    public $codigo;

    public function rules()
    {
        return [
            [['codigo'], 'required'],
            [['codigo'], 'number'],
            [['codigo'], 'exist',
                'skipOnError' => true,
                'targetClass' => Pelicula::className(),
                'targetAttribute' => ['codigo' => 'codigo'],
            ],
        ];
    }

    public function attributeLabels()
    {
        return [
            'codigo' => 'Código de película',
        ];
    }
}
