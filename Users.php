<?php

use User;

require 'User.php';

class Users
{
    private $users = array();

    //Metodos

    public function add(string $email, $phone, $city, $gender): void
    {
        $this->users = $user;

    }

    public
    function findAll()
    {
        // Devuelve todos los usuarios guardados en la colección
    }

    public
    function findByEmail($email)
    {
        // Devuelve el usuario que tenga el email X.
    }

    public
    function findByPhone($phone)
    {
        // Devuelve el usuario que tenga el phone X.
    }

    public
    function findByCity($city)
    {
        // Devuelve el usuario que tenga la City X.
    }

    public
    function findByGender($gender)
    {
        // Devuelve el usuario que tenga el gender X.
    }

}