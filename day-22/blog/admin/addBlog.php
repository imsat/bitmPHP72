<?php include 'includes/header.php'; ?>
<div class="container" style="margin-top: 10px;">
    <div class="row">
        <div class="col-sm-8 mx-auto">
            <div class="card">
                <div class="card-body">
                    <!--                    <h3 class="text-danger">--><?php //echo $message; ?><!--<br></h3>-->
                    <form action="" method="post">
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-3 col-form-label">Category Name</label>
                                <div class="col-sm-9">
                                <select class="form-control" name="categoryId">
                                    <option>----Select Category Name---</option>
                                    <option value="Category1">Category1</option>
                                    <option value="Category2">Category2</option>
                                    <option value="Category3">Category3</option>
                                </select>
                                </div>

                        </div>
                        <div class="form-group row">
                            <label for="blogTitle" class="col-sm-3 col-form-label">Blog Title </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="blogTitle" name="blogTitle" placeholder="Blog Title">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="shortDescription" class="col-sm-3 col-form-label">Short Description</label>
                            <div class="col-sm-9">
                                <textarea name="shortDescription" placeholder="Short Description"  id="shortDescription" cols="53" rows="2"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="longDescription" class="col-sm-3 col-form-label">Long Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control textarea" name="longDescription" placeholder="Long Description"  id="longDescription" cols="53" rows="10"></textarea>
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
<?php include 'includes/footer.php'; ?>

