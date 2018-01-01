<?php
require_once 'Example.php';
class Test extends Example   //test child and Example parrent
{
    public $name = 'Satyajit Mondal';
    protected  $city = 'Dhaka';
    private  $country = 'Bamgladesh';
    public $data;


    function __construct($value)          //__construct mane magic method
    {
       // $this->data = $value;
    }

    public function one(){
        //$this->three();     //$this own class object
       // echo $this->country;
        //echo $this->city;
        //echo $name;
        echo $this->data;
        echo $this->two();
        echo $this->three();
    }
    protected function two(){
        //echo 'In Two';
        echo $this->data;
    }
    private function three(){
        //echo 'In Three';
        echo $this->data;
    }

}