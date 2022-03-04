<?php
    session_start();
    $con=new mysqli("localhost","root","","login");
    if($con->connect_error){
        die("Connection Error : ".$con->connect_error);
    }

    $fullname = "";
    $email = "";
    $pass = "";

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $fullname = $con->real_escape_string($_POST['fullname']);
        $email = $con->real_escape_string($_POST['email']);
        $pass = $con->real_escape_string($_POST['pass']);

        $sql="SELECT * FROM user WHERE email='$email';";
        $res=$con->query($sql);
        if($res->num_rows > 0){}
        else{
            $sql="INSERT INTO user(email,pass,fullname) VALUES('$email','$pass','$fullname');";
            if(mysqli_query($con,$sql)){
                header("location:file.php?fullname=$fullname");
            }
        }
    }

?>
<!DOCTYPE html>
<htm>
    <head>
        <title>Php MySql</title>
    </head>
    <body>
        <h2 align="center">php mysql file test</h2>
        <form action="phpsql.php" method="POST">
            Full Name : <br><input type="text" name="fullname" /><br><br>
            E-mail : <br><input type="email" name="email" /><br><br>
            Password : <br><input type="password" name="pass" /><br><br>
            <input type="submit" name="register" value="Register" />
        </form>
    </body>
</html>