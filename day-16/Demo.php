<?php


class Demo{
    public $name = "Karim Box";
    public $city = "Dhaka";
    public $country = "Bangladesh";

    function newOne(){
        echo 'In function new one';
    }
    function newTwo(){
        echo 'In fnction new Two';
    }
    function newThree(){
        echo 'In function new three';
    }
    function makeFullName($data){
        $firstName = $data['first_name'];
        $lastName = $data['last_name'];
        $fullName = $firstName.' '.$lastName;
        return $fullName;
    }
}