<?php

namespace App\classes;


class Blog{
    public function savePostInfo($data){
        $link = mysqli_connect('localhost', 'root', '', 'db_blog');
        $sql = "INSERT INTO blogs (categoryName, title, authorName, blogDescription, status) VALUES ('$data[categoryName]', '$data[title]', '$data[authorName]', '$data[blogDescription]', '$data[status]')";
        if(mysqli_query($link, $sql)){
            $insert = 'Post Created Successfully';
            return $insert;
        }else{
            die ('OPPS!!! Go Back<-<-<-'.mysqli_error($link));
        }
    }
    public function getAllPostInfo(){
        $link = mysqli_connect('localhost', 'root', '', 'db_blog');
        $sql = "SELECT * FROM blogs";
        if(mysqli_query($link, $sql)){
            $queryResult = mysqli_query($link, $sql);
            return $queryResult;
        }else{
            die ('OPPS!!! Go Back<-<-<-'.mysqli_error($link));
        }
    }
    public function getPostById($id){
        $link = mysqli_connect('localhost', 'root', '', 'db_blog');
        $sql = "SELECT * FROM blogs WHERE id = $id";
        if(mysqli_query($link, $sql)){
            $queryResult = mysqli_query($link, $sql);
            return $queryResult;
        }else{
            die ('OPPS!!! Go Back<-<-<-'.mysqli_error($link));
        }
    }
    public function updatePostInfo($data, $id){
        $link = mysqli_connect('localhost', 'root', '', 'db_blog');
        $sql = "update  blogs SET categoryName = '$data[categoryName]',title= '$data[title]',authorName = '$data[authorName]',blogDescription = '$data[blogDescription]',status = '$data[status]' WHERE id = '$id'";

        if(mysqli_query($link, $sql)){
            header('Location: viewPosts.php');
        }else{
            die ('OPPS!!! Go Back<-<-<-'.mysqli_error($link));
        }
    }

}

?>