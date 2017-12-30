<?php
require_once 'fullName.php';
$fullName = new FullName;

$fullName->makeFullName($_POST);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Day-17</title>
    <link rel="stylesheet" href="css/bootstrap.css" />
</head>
<body>
<form action="view.php" method="post">
    <div class="container">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="firstName">First Name</label>
                    <input type="text" placeholder="Your First Name"  name="first_name" id="firstName" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="lastName">Last Name</label>
                    <input type="text" name="last_name" placeholder="Your Last Name" id="lastName" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="email">Full Name</label>
                    <input type="text" placeholder="Full Name" name="full_name" id="full_name"  class="form-control"/>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-outline-primary btn-block" id="btn">Submit</button>
                </div>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>
</form>
<script src="js/bootstrap.js"></script>
<script src="js/jquery-3.2.1.js"></script>
<!--<script src="js/script.js"></script>-->
</body>
</html>