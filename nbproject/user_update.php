
<?php
session_start();
//if( 'view' == $_REQUEST['btn_submit']){
$con = mysql_connect("localhost", "root", "") or die(mysql_error());
$sel = mysql_select_db("college") or die(mysql_error());
$sql = "SELECT * FROM registration WHERE user_id = '" . $_SESSION['user_id'] . "'";
$result = mysql_query($sql);
while ($row = mysql_fetch_array($result)) {
    ?>
    <html>
        <head>
            <link rel="stylesheet" type="text/css" href="style.css">
        </head>
        <body>
            <div class="maindiv">
                <div class="interdiv">   
                    <form name="frm" id="frm" method="post" action="UpdateData.php">
                        <div> 
                            First Name:<br>
                        </div>
                        <div>
                            <input type="text" id="fstname" name="fstname" value="<?php echo $row['Firstname']; ?>">
                        </div>
                        <br>

                        <div>
                            Last Name:<br>
                        </div>

                        <div> 
                            <input type="text" id="lstname" name="lstname" value="<?php echo $row['Lastname']; ?>">
                        </div>
                        <br>
                        <div>
                            Mobile:<br>
                        </div>
                        <div> 
                            <input type="text" id="contact" name="contact" value="<?php echo $row['Mobile']; ?>">
                        </div>
                        <br>

                        <div>
                            Email:<br>
                        </div>
                        <div> 
                            <input type="text" id="emailid" name="emailid" value="<?php echo $row['Email']; ?>">
                        </div>
                        <br>
                        <div>
                            Password:<br>
                        </div>

                        <div> 
                            <input type="text" id="password" name="password" value="<?php echo $row['Password']; ?>">
                        </div><br>

    <?php
}
mysql_close($con);
?><br>
                    <input type="submit" id="btn_update" value="Udate Data" name="btn_update" />
                </form>

            </div>
        </div>
    </body>
</html>
<?php
//}?>