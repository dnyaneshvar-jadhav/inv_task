<?php
/*echo "<pre>";
print_r($_POST);
echo"</pre>";
exit;*/
session_start();
$fname=$_REQUEST['fstname'];
$lname=$_REQUEST['lstname'];
$mo=$_REQUEST['contact'];
$Id=$_REQUEST['emailid'];
$p=$_REQUEST['password'];
$con = mysql_connect("localhost","root","") or die(mysql_error());
$sel = mysql_select_db("college") or die(mysql_error());
//echo $var= "UPDATE `registration` SET Firstname='".$fname."',Lastname='".$lname."',Mobile='".$mo."',Email='".$Id."',Password='".$p."' where user_id= '".$_SESSION['user_id']."'";exit;
$result = mysql_query("UPDATE `registration` SET Firstname='".$fname."',Lastname='".$lname."',Mobile='".$mo."',Email='".$Id."',Password='".$p."' where user_id= '".$_SESSION['user_id']."'");
 //echo $result;exit;

if($result)
{
    header("location:update_success.php");
    exit;
   
}
 else {
echo "not update";exit;

}
?>
