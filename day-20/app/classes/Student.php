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
    public function getAllStudentInfo(){
        $link = mysqli_connect('localhost', 'root', '', 'php72');
        $sql = "SELECT * FROM students";
        if(mysqli_query($link, $sql)){
            $queryResult = mysqli_query($link, $sql);
            return $queryResult;
        }else{
            die ('OPPS!!! Go Back<-<-<-'.mysqli_error($link));
        }
    }
    public function getStudentById($id){
        $link = mysqli_connect('localhost', 'root', '', 'php72');
        $sql = "SELECT * FROM students WHERE id = $id";
        if(mysqli_query($link, $sql)){
            $queryResult = mysqli_query($link, $sql);
            return $queryResult;
        }else{
            die ('OPPS!!! Go Back<-<-<-'.mysqli_error($link));
        }
    }
    public function updateStudentInfo($data, $id){
        $link = mysqli_connect('localhost', 'root', '', 'php72');
        $sql = "update  students SET name = '$data[name]',email= '$data[email]',mobile = '$data[mobile]' WHERE id = '$id'";
        if(mysqli_query($link, $sql)){
            header('Location: view-student.php');
        }else{
            die ('OPPS!!! Go Back<-<-<-'.mysqli_error($link));
        }
    }
    public function deleteStudentInfo($id){
        $link = mysqli_connect('localhost', 'root', '', 'php72');
        $sql = "delete FROM students WHERE id = '$id'";
        if(mysqli_query($link, $sql)){
            $delete = 'Data Delete Successfully';
            return $delete;
        }else{
            die ('OPPS!!! Go Back<-<-<-'.mysqli_error($link));
        }
    }
}