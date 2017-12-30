<?php

class FullName{

function makeFullName($data){
    $firstName =$data['first_name'];
    $lastName =$data['last_name'];
    $fullName = $firstName.' '.$lastName;
    //echo $fullName;
    return $fullName;
}
}
?>