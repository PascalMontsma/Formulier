<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/*
Tested working with PHP5.4 and above (including PHP 7 )

 */
require_once './vendor/autoload.php';

use FormGuide\Handlx\FormHandler;


$pp = new FormHandler();

$validator = $pp->getValidator();
$validator->fields(['Name','Email','Phonenumber'])->areRequired()->maxLength(50);
$validator->field('Email')->isEmail();
$validator->field('Phonenumber')->maxLength(10);
$validator->field('street')->maxLength(100);
$validator->field('Postalcode')->maxLength(6);
$validator->field('City')->maxLength(50);
$validator->field('NameDog')->maxLength(20);
$validator->field('AgeDo')->maxLength(2);
$validator->field('M-FDog');
$validator->field('Via');
$validator = $pp->getValidator();
$pp->sendEmailTo('pascal@magicolr.com'); // ← Your email here

/*$pp->sendEmailTo('info@hondenschoolindy.nl'); // ← Your email here*/

echo $pp->process($_POST);
