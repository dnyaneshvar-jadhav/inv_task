<?php
 $post_email=$_REQUEST['email_id'];
$con = mysql_connect("localhost","root","") or die(mysql_error());
$sel = mysql_select_db("college") or die(mysql_error());
$v = "select Email from registration where Email='".$post_email."'";
$result = mysql_query($v);
$var ='';
while($row =  mysql_fetch_array($result))
{
    $var = $row['Email'];
}
    if($post_email==$var)
		{
		 echo "false";
		}
		else 
		{
		echo "true";
		}
		
mysql_close();

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
