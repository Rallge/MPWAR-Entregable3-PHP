<?php

error_reporting(E_ALL);
ini_set("display_errors", "on");

include_once __DIR__ . '/User.php';
include_once __DIR__ . '/Users.php';

echo "Se creo la clase Users para guardar los objetos de la clase User";
$colausers = new Users();
var_dump($colausers); //cola vacía

echo "agrego 4 propiedades: geraldinelopz@gmail.com,672389896,Barcelona,Femenino e imprimo la cola y la cantidad de elementos";
$colausers->add('geraldinelopz@gmail.com', 672389896,'Barcelona','Femenino');

var_dump($colausers); //muestra los 4 elementos
var_dump($colausers->count()); // Prints 4

echo "Devolver todos los usuarios guardados en la colección";
$colausers->findAll();

var_dump($colausers->findAll()); //muestra los elementos


//Filtros


echo "Filtrar usuarios por correo electronico";
$filtroEmail = $colausers->findByEmail(); // Filtrar por email geraldinelopz@gmail.com
var_dump($filtroEmail);


echo "Filtrar usuarios por telefono";
$filtroPhone = $colausers->findByPhone(); // Filtrar por phone 672389896
var_dump($filtroPhone);


echo "Filtrar usuarios por telefono";
$filtroCity = $colausers->findByCity(); // Filtrar por city Barcelona
var_dump($filtroCity);


echo "Filtrar usuarios por Gender";
$filtroGender = $colausers->findByGender(); // Filtrar por city Barcelona
var_dump($filtroGender);
