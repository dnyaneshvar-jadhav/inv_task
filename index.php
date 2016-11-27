<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <script type="text/javascript"  src="nbproject/jquery-1.9.1.min.js"></script>
        <script  type="text/javascript" src="nbproject/validate.min.js"></script>
        <script type="text/javascript"  src="nbproject/registration.js"></script>
        <title></title>
    </head>
    <body>
        <div class="maindiv">
            <div class="interdiv"> 
                <form name="registration_frm" id="registration_frm" method="post" action="registration1.php">
                    <div><h1>Registration form</h1></div>
                    <div>First Name:<br>
                        <input type="text" name="first_name" id="first_name">
                    </div>  <br> 
                    <div>Last Name:<br>
                        <input type="text" name="last_name" id="last_name">
                    </div>  <br>   
                    <div>Mobile No:<br>
                        <input type="text" name="contact" id="contact">
                    </div>  <br>   
                    <div>Email:<br>
                        <input type="text" name="email_id" id="email_id">
                    </div>  <br>   
                    <div>Password:<br>
                        <input type="password" name="password" id="password">
                    </div>  <br>   
                    <div>Re_enter password:<br>
                        <input type="password" name="con_password" id="con_password">
                    </div>  <br>   
                   
                    <br>
                    <input type="submit" name="submit"  value="submit">
               </form>
            </div>
        </div>
       
    </body>
</html>
