<?php

$fname = $_REQUEST['first_name'];
$lname = $_REQUEST['last_name'];
$mobile = $_REQUEST['contact'];
$email = $_REQUEST['email_id'];
$pass = $_REQUEST['password'];



$con = mysql_connect("localhost", "root", "") or die(mysql_error());
if ($con) {
    echo "connected";
} else {
    echo "not connected";
}
$sel = mysql_select_db("college") or die(mysql_error());
if ($sel) {
    echo "selected";
} else {

    echo "not selected";
}
$result = mysql_query("insert into registration(Firstname,Lastname,Mobile,Email,Password) values('" . $fname . "','" . $lname . "','" . $mobile . "','" . $email . "','" . $pass . "')");
if ($result) {
    //echo"inserted successfully";
    header("Location:nbproject/success.php");
} else {
    echo "not inserted";
}
mysql_close($con);
?>
