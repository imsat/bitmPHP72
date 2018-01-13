<?php

namespace App\classes;
use App\classes\Database;

class Blog{
    public function getAllPublishedCategory() {
        $sql = "SELECT * FROM categories WHERE publicationStatus = 1";
        if(mysqli_query(Database::dbConnection(), $sql)){
            $queryResult = mysqli_query(Database::dbConnection(), $sql);
            return $queryResult;
        }
    }

//    public function createblog(){
//        $sql = "SELECT * FROM categories WHERE publicationStatus=1";
//        if(mysqli_query(Database::dbConnection(), $sql)){
//            $categoryName = mysqli_query(Database::dbConnection(), $sql);
//            return $categoryName;
//        }
//    }
    public function saveBlogInfo($data){
        $fileName =  $_FILES['blogImage']['name'];
        $directory = '../asset/images/';
        $imageUrl = $directory.$fileName;
        $fileSize = $_FILES['blogImage']['size'];
        $fileType = pathinfo($_FILES['blogImage']['name'], PATHINFO_EXTENSION);
        $check = getimagesize($_FILES['blogImage']['tmp_name']);
        if($check){

            if(file_exists($imageUrl)){
                die("Image allready Exists. Please...!!!");
            }else{

                if($fileSize > 50000){
                    die("file size must be 5 MB!!!");
                }else{

                    if($fileType != 'jpg' && $fileType != 'png'){
                        die("file must be JPG or Png");
                    }else{
                        move_uploaded_file($_FILES['blogImage']['tmp_name'], $imageUrl);
                        $sql = "INSERT INTO blogs (categoryId, blogTitle, shortDescription, longDescription, imageFile, publicationStatus) VALUES ('$data[categoryId]', '$data[blogTitle]', '$data[shortDescription]', '$data[longDescription]', '$data[$imageUrl]', '$data[publicationStatus]')";
                        if(mysqli_query(Database::dbConnection(), $sql)){
                            $insertBlog = 'Blog Info Created Successfully';
                            return $insertBlog;
                        }else{
                            die('OPPS!!!'.mysqli_error(Database::dbConnection()));
                        }

                    }
                }
            }

        }else{
            die("Please select an image file. Thanks...!!!");
        }


    }
    public function getAllBlogInfo(){
        $sql = "SELECT * FROM blogs";
        if(mysqli_query(Database::dbConnection(), $sql)){
            $blogResult = (mysqli_query(Database::dbConnection(),$sql));
            return $blogResult;
        }else{
            die('OPPS!!!'.mysqli_error(Database::dbConnection()));
        }
    }
    public function viewAllBlogInfo($id){
        $sql = "SELECT * FROM blogs where id = $id";
        if(mysqli_query(Database::dbConnection(), $sql)){
            $blogResult = (mysqli_query(Database::dbConnection(),$sql));
            return $blogResult;
        }else{
            die('OPPS!!!'.mysqli_error(Database::dbConnection()));
        }
    }
    public function updateBlogInfo($data, $id){
        $sql = "update  blogs SET categoryName = '$data[categoryName]',blogTitle = '$data[blogTitle]', shortDescription = '$data[shortDescription]', longDescription = '$data[longDescription]', publicationStatus = '$data[publicationStatus]' WHERE id = '$id'";
        if(mysqli_query(Database::dbConnection(), $sql)){

            header('Location: manageBlog.php');

        }else{
            die('OPPS!!!'.mysqli_error(Database::dbConnection()));
        }
    }
    public function deleteBlogInfo($id){
        $sql = "delete FROM blogs WHERE id = '$id'";
        if(mysqli_query(Database::dbConnection(),$sql)){
            $deleteBlog = 'Blog Info Delete Successfully';
            return $deleteBlog;
        }else{
            die('OPPS!!!'.mysqli_error(Database::dbConnection()));
        }
    }

}

?>