<?php
    require_once 'vendor/autoload.php';
    use App\classes\Blog;
    $insert = '';
    if(isset($_POST['btn'])){
        $insert = Blog::savePostInfo($_POST);
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1 style="color: #28a745;"><?php echo $insert; ?></h1>
<form action="" method="post">
    <hr>
    <a href="index.php">Add Post</a>
    <a href="viewPosts.php">View Post</a>
    <hr>
    <table>
        <tr>
            <th>Category Name</th>
            <td><input type="text" name="categoryName"></td>
        </tr>
        <tr>
            <th>Blog Title</th>
            <td><input type="text" name="title"></td>
        </tr>
        <tr>
            <th>Author Name</th>
            <td><input type="text" value="" name="authorName"></td>
        </tr>
        <tr>
            <th>Description</th>
            <td>
                <textarea name="blogDescription" id="" cols="30" rows="10"></textarea>
            </td>
        </tr>
        <tr>
            <th>Publication Status</th>
            <td>
                <label><input type="radio" name="status" value="1"/>Publuished</label>
                <label><input type="radio" name="status" value="0"/>Unpublished</label>
            </td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="Create Post"></td>
        </tr>
    </table>

</form>
</body>
</html>
