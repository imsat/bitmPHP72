<?php
namespace App\classes;
use App\classes\Blog;
include 'includes/header.php';

$id = $_GET['id'];
$blogResult = Blog::viewAllBlogInfo($id );
$blogResult = mysqli_fetch_assoc($blogResult);
if(isset($_POST['btn'])){
    $updateBlog = Blog::updateBlogInfo($_POST, $id);
}
?>
<div class="container" style="margin-top: 20px;">
    <div class="row">
        <div class="col-sm-10 mx-auto">
            <div class="card">
                <div class="card-body">
<!--                    <h4 class="text-success text-center">--><?php //echo $insertBlog; ?><!--<br></h4>-->
                    <form action="" method="post" name="editBlogForm">
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-3 col-form-label">Category Name</label>
                            <div class="col-sm-9">

                                <select class="form-control" name="categoryName">
                                        <option value="<?php echo $blogResult['categoryName']; ?>"><?php echo $blogResult['categoryName']; ?></option>
                                </select>

                            </div>

                        </div>
                        <div class="form-group row">
                            <label for="blogTitle" class="col-sm-3 col-form-label">Blog Title </label>
                            <div class="col-sm-9">
                                <input type="text" value="<?php echo $blogResult['blogTitle']; ?>" class="form-control" id="blogTitle" name="blogTitle" placeholder="Blog Title">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="shortDescription" class="col-sm-3 col-form-label">Short Description</label>
                            <div class="col-sm-9">
                                <textarea name="shortDescription" placeholder="Short Description"  id="shortDescription" cols="70" rows="2"><?php echo $blogResult['shortDescription']; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="longDescription" class="col-sm-3 col-form-label">Long Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control textarea" name="longDescription" placeholder="Long Description"  id="longDescription" cols="70" rows="10"><?php echo $blogResult['longDescription']; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="blogImage" class="col-sm-3 col-form-label">Blog Image</label>
                            <div class="col-sm-10">
                                <input type="file" name="blogImage" accept="image/*">

                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Publication Status</label>
                            <div class="col-sm-9">
                                <input type="radio" name="publicationStatus" value="1"> Published
                                <input type="radio" name="publicationStatus" value="0"> Unublished
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-12">
                                <button type="submit" name="btn" class="btn btn-outline-primary btn-block">Save Category Info</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.forms['editBlogForm'].elements['publicationStatus'].value="<?php echo $blogResult['publicationStatus']; ?>"
</script>
<?php include 'includes/footer.php'; ?>

