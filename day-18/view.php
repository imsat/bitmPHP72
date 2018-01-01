<?php
//require_once 'Test.php';
//$test = new Test('Alomgir');
//
//$test->one();

if(isset($_POST['btn'])){
require_once 'Test.php';
$example = new Example();

$res = $example->createOddEvenSeries($_POST);
}
?>
<form action="" method="post">
    <table>
        <tr>
            <th>Starting Number</th>
            <td><input type="number" name="starting_number"></td>
        </tr>
        <tr>
            <th>Ending Number</th>
            <td><input type="number" name="ending_number"></td>
        </tr>
        <tr>
            <th>Your Choice</th>
            <td>
                <input type="radio" name="choice" value="odd">Odd
                <input type="radio" name="choice" value="even">Even
            </td>
        </tr>
        <tr>
            <th>Result</th>
            <td>
                <textarea name="" id="" cols="21" rows="5">
                    <?php echo $res; ?></textarea>
            </td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="Submit"></td>
        </tr>

    </table>
</form>
