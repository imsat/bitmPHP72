<?php
    require_once 'vendor/autoload.php';
    use App\classes\Teacher;
    $insert = '';
    if(isset($_POST['btn'])){
    //    $student = new App\classes\Student();
//        $student->saveStudentInfo($_POST);
        $insert = Teacher::saveTeacherInfo($_POST);
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Teacher</title>
</head>
<body>
<h1 style="color: #28a745;"><?php echo $insert; ?></h1>
<form action="" method="post">
    <table>
        <tr>
            <th>First Name</th>
            <td><input type="text" name="firstName"></td>
        </tr>
         <tr>
            <th>Last Name</th>
            <td><input type="text" name="lastName"></td>
        </tr>
        <tr>
            <th>Email Address</th>
            <td><input type="email" name="email"></td>
        </tr>
        <tr>
            <th>Mobile Number</th>
            <td><input type="number" value="" name="mobile"></td>
        </tr>
        <tr>
            <th>Address</th>
            <td><textarea name="address" rows="6"> </textarea>
            </td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="Submit"></td>
        </tr>
    </table>

</form>
</body>
</html>
