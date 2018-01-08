<?php
require_once 'vendor/autoload.php';
use App\classes\Blog;

$delete = '';
if(isset($_GET['delete'])){
    $id = $_GET['id'];
    $delete = Blog::deleteStudentInfo($id);
}
$queryResult = Blog::getAllPostInfo();

?>
<hr>
<a href="index.php">Add Post</a>
<a href="viewPosts.php">View Post</a>
<hr>

<h1 style="color: #28a745;"><?php echo $delete; ?></h1>
<table border="1" width="200">
    <tr>
        <th>Id</th>
        <th>Category Name</th>
        <th>Blog Title</th>
        <th>Author Name</th>
        <th>Blog Description</th>
        <th>Publication Status</th>
        <th>Action</th>
    </tr>
    <?php while($blogs = mysqli_fetch_assoc($queryResult)){?>
        <tr>
            <td><?php echo $blogs['id']; ?></td>
            <td><?php echo $blogs['categoryName']; ?></td>
            <td><?php echo $blogs['title']; ?></td>
            <td><?php echo $blogs['authorName']; ?></td>
            <td><?php echo $blogs['blogDescription']; ?></td>
            <td>
                <?php if($blogs['status']==1){
                echo "Published";
                }else{
                    echo "Unpublished";
                } ?>
            </td>
            <td>
                <a href="edit-post.php?id=<?php echo $blogs['id']; ?>">Edit</a>||
                <a href="?delete=true&id=<?php echo $blogs['id']; ?>">Delete</a>
            </td>
        </tr>
    <?php } ?>
</table>