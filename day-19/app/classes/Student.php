<?php


namespace App\classes;


class Student
{
    public function saveStudentInfo($data) {
      $link = mysqli_connect('localhost', 'root', '', 'php72');
//      echo '<pre>';
//      print_r($link);
        $sql = "INSERT INTO students (name, email, mobile) VALUES ('$data[name]', '$data[email]', '$data[mobile]')";
//        $sql = "INSERT INTO students (name, email, mobile) VALUES ('Satyajit', 'email@gmail.com', '6514581916515612')" ;

        if(mysqli_query($link, $sql)){
           $insert = 'Data Insertted Successfully';
           return $insert;
        }else{
            die ('OPPS!!! Go Back<-<-<-'.mysqli_error($link));
        }
    }
}