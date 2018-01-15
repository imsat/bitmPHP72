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
        $directory = '../assets/images/';
        $imageUrl = $directory.$fileName;
        $fileSize = $_FILES['blogImage']['size'];
        $fileType = pathinfo($_FILES['blogImage']['name'], PATHINFO_EXTENSION);
        $check = getimagesize($_FILES['blogImage']['tmp_name']);
        if($check){

            if(file_exists($imageUrl)){
                die("Image allready Exists. Please...!!!");
            }else{

                if($fileSize > 500000000){
                    die("file size must be 5 MB!!!");
                }else{

                    if($fileType != 'jpg' && $fileType != 'png'){
                        die("file must be JPG or Png");
                    }else{
                        move_uploaded_file($_FILES['blogImage']['tmp_name'], $imageUrl);
                        $sql = "INSERT INTO blogs (categoryId, blogTitle, shortDescription, longDescription, blogImage, publicationStatus) VALUES ('$data[categoryId]', '$data[blogTitle]', '$data[shortDescription]', '$data[longDescription]', '$imageUrl', '$data[publicationStatus]')";
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
        $sql = "SELECT b.*, c.categoryName FROM blogs as b, categories as c WHERE b.categoryId = c.id";
        if(mysqli_query(Database::dbConnection(), $sql)){
            $blogResult = (mysqli_query(Database::dbConnection(),$sql));
            return $blogResult;
        }else{
            die('OPPS!!!'.mysqli_error(Database::dbConnection()));
        }
    }
    public function viewAllBlogInfo($id){
        $sql = "SELECT b.*, c.categoryName FROM blogs as b, categories as c WHERE b.categoryId = c.id AND b.id = $id";
        if(mysqli_query(Database::dbConnection(), $sql)){
            $blogResult = (mysqli_query(Database::dbConnection(),$sql));
            return $blogResult;
        }else{
            die('OPPS!!!'.mysqli_error(Database::dbConnection()));
        }
    }
    public function updateBlogInfo($data, $id){
        $imageFile = $_FILES['blogImage']['name'];
        if($imageFile){

            $sql = "SELECT * FROM blogs WHERE id = $id";
            $queryResult = mysqli_query(Database::dbConnection(),$sql);
            $blogInfo =mysqli_fetch_assoc($queryResult);
            unlink($blogInfo['blogInfo']);

            $fileName =  $_FILES['blogImage']['name'];
            $directory = '../assets/images/';
            $imageUrl = $directory.$fileName;
            $fileSize = $_FILES['blogImage']['size'];
            $fileType = pathinfo($_FILES['blogImage']['name'], PATHINFO_EXTENSION);
            $check = getimagesize($_FILES['blogImage']['tmp_name']);
            if($check){

                if(file_exists($imageUrl)){
                    die("Image allready Exists. Please...!!!");
                }else{

                    if($fileSize > 500000000){
                        die("file size must be 5 MB!!!");
                    }else{

                        if($fileType != 'jpg' && $fileType != 'png'){
                            die("file must be JPG or Png");
                        }else{
                            move_uploaded_file($_FILES['blogImage']['tmp_name'], $imageUrl);
                            $sql = "update  blogs SET categoryId = '$data[categoryId]',blogTitle = '$data[blogTitle]', shortDescription = '$data[shortDescription]', longDescription = '$data[longDescription]', blogImage = '$imageUrl', publicationStatus = '$data[publicationStatus]' WHERE id = '$id'";
                            if(mysqli_query(Database::dbConnection(), $sql)){
                                header('Location: manageBlog.php');
                            }else{
                                die('Query Problem'.mysqli_error(Database::dbConnection()));
                            }

                        }
                    }
                }

            }else{
                die("Please select an image file. Thanks...!!!");
            }


        }else{
            $sql = "update  blogs SET categoryId = '$data[categoryId]',blogTitle = '$data[blogTitle]', shortDescription = '$data[shortDescription]', longDescription = '$data[longDescription]', publicationStatus = '$data[publicationStatus]' WHERE id = '$id'";
            if(mysqli_query(Database::dbConnection(), $sql)){

                header('Location: manageBlog.php');

            }else{
                die('Query Problem!!!'.mysqli_error(Database::dbConnection()));
            }
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