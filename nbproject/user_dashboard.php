


<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <
    </head>
    <body>
        <form name="user_frm" id="user_frm" method="post"  action = "user_update.php" >
            <div class="maindiv" >
                <div class="interdiv"><br>
                    <h2> Welcome <?php session_start();
                        echo $_SESSION['user_name']; ?></h2>
                    <div style='position:absolute;margin-top:200px;margin-left:80px;'>
                   <!-- <input type="submit" value="Update" name="btn_submit"> -->
                    </div>   
                    <div style="position: absolute; margin-left: 180px;margin-top: 20px;"><b><a href="logout_action.php">Logout</a></b></div>
                    <div style='position:absolute;margin-top:20px;margin-left:10px;'>
                        <input style="width:100px;height:60px;" type="submit" value="view" name="btn_submit" id="btn_submit">
                    </div>
                </div>
        </form>
    </body>
</html>   
