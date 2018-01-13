<?php
$link = mysqli_connect('localhost', 'root', '', 'image');

//echo '<pre>';\
//print_r($_FILES);
if (isset($_POST['btn'])){
    $fileName =  $_FILES['imageFile']['name'];
    $directory = '../assets/images/';
    $imageUrl = $directory.$fileName;
    $fileSize = $_FILES['imageFile']['size'];
    $fileType = pathinfo($_FILES['imageFile']['name'], PATHINFO_EXTENSION);
    $check = getimagesize($_FILES['imageFile']['tmp_name']);
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
                    move_uploaded_file($_FILES['imageFile']['tmp_name'], $imageUrl);
                    $sql = "INSERT INTO images (imageFile) VALUES ('$imageUrl')";
                    mysqli_query($link, $sql);
                    echo 'Success';
                }
            }
        }

    }else{
        die("Please select an image file. Thanks...!!!");
    }
}
//echo '<pre>';
//print_r($check);
//move_uploaded_file($_FILES['imageFile']['tmp_name'], $imageUrl);
?>
<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <th>Select Image</th>
            <td><input type="file" name="imageFile" accept="image/*"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="Submit"></td>
        </tr>
    </table>
</form>
<hr>
<?php
$sql = "SELECT * FROM images";
$queryResult = mysqli_query($link, $sql);

?>
<table>
    <?php while($imageInfo = mysqli_fetch_assoc($queryResult)){?>
    <tr>
        <td><img src="<?php echo  $imageInfo['imageFile'];?>" alt="" height="150" width="200"></td>
    </tr>
    <?php }?>
</table>
</body>
</html>