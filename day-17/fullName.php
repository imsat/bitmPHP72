<?php

class FullName{

function makeFullName($data){
    $firstName =$data['first_name'];
    $lastName =$data['last_name'];
    $fullName = $firstName.' '.$lastName;
//    echo $fullName;
    //return $fullName;
    $bitm = [
        'first_name' => $firstName,
        'last_name' => $lastName,
        'full_name' => $fullName
    ];
    return $bitm;
}
}
?>