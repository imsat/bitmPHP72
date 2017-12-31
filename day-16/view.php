<?php
require_once 'Demo.php';

$demo = new Demo; // $demo mane object
//echo $demo->name.' '.$demo->city.' '.$demo->country; // -> mane object sign
$result = ' ';
if(isset($_POST['btn'])){
$result = $demo->makeFullName($_POST);
}
?>

<form action="" method="post">
<table>
    <tr>
        <th>First Name</th>
        <td><input type="text" name="first_name"></td>
    </tr>
    <tr>
        <th>Last Name</th>
        <td><input type="text" name="last_name"></td>
    </tr>
    <tr>
        <th>Full Name</th>
        <td><input type="text" value="<?php echo $result; ?>" name="full_name"></td>
    </tr>
    <tr>
        <th></th>
        <td><input type="submit" name="btn" value="Submit"></td>
    </tr>
</table>
</form>
