<?php

class User
{
 //Declaración de atributos o propiedades de la clase user

    public $email;
    public $phone;
    public $city;
    public $gender;

    /**
     * @param $email
     * @param $phone
     * @param $city
     * @param $gender
     */
    public function __construct($email, $phone, $city, $gender)
    {
        $this->email = $email;
        $this->phone = $phone;
        $this->city = $city;
        $this->gender = $gender;
    }
}