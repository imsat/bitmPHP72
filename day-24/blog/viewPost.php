<?php
require_once 'vendor/autoload.php';
$app = new App\classes\Application;
$id = $_GET['id'];
$queryResult = $app->getFullPublishedBlogInfo($id);
include 'includes/header.php';

?>
    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <?php while($result = mysqli_fetch_assoc($queryResult)){?>
            <!-- Post Content Column -->
            <div class="col-lg-8">

                <!-- Title -->
                <h1 class="mt-4"><?php echo $result['blogTitle']; ?></h1>

                <!-- Author -->
                <p class="lead">
                    by
                    <a href="#">Satyajit Mondal</a>
                </p>

                <hr>

                <!-- Date/Time -->
                <p>Posted on January 1, 2017 at 12:00 PM</p>

                <hr>

                <!-- Preview Image -->
                <img class="img-fluid rounded" src="admin/<?php echo $result['blogImage'] ?>" alt="">

                <hr>

                <!-- Post Content -->
                <p class="lead"><?php echo $result['shortDescription'].' '.$result['longDescription'] ?></p>

                <hr>

                <!-- Comments Form -->
                <div class="card my-4">
                    <h5 class="card-header">Leave a Comment:</h5>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>

            </div>
            <?php } ?>
            <!-- Sidebar Widgets Column -->
            <?php include 'includes/sidebar.php';?>
        <!-- /.row -->

    </div>
    <!-- /.container -->

<?php include 'includes/footer.php';?>
