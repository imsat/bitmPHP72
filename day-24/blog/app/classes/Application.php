<?php


namespace App\classes;
use App\classes\Database;

class Application
{
    public function getAllPublishedBlogInfo(){
        $sql = "SELECT * FROM blogs WHERE publicationStatus = 1";
        if(mysqli_query(Database::dbConnection(),$sql)){
            $queryResult = mysqli_query(Database::dbConnection(),$sql);
            return $queryResult;
        }else{
            die("Query Problem".mysqli_error(Database::dbConnection(),$sql));
        }

    }
    public function getFullPublishedBlogInfo($id){
        $sql = "SELECT * FROM blogs WHERE id = '$id'";
        if(mysqli_query(Database::dbConnection(),$sql)){
            $queryResult = mysqli_query(Database::dbConnection(),$sql);
            return $queryResult;
        }else{
            die("Query Problem".mysqli_error(Database::dbConnection(),$sql));
        }
    }
}