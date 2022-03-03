<?php
    session_start();
    $emailerr="";
    $passerr="";
    $con = new mysqli("localhost","root","","login");
    if($con->connect_error){
        die("connection error : ".$con->connect_error);
    }
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $email = $con->real_escape_string($_POST['email']);
        $pass = $con->real_escape_string($_POST['password']);

        $sql = "SELECT * FROM user WHERE email='$email' AND pass='$pass';";
        $res = $con->query($sql);
        if($res->num_rows > 0){
            header("location:file.php");
        }
    }

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Php Form</title>
    </head>
    <body>
        <h2>1- Form Handling </h2>
        <form method="POST" action="phpform.php">
            Email Ad : <input type="email" name="email" require><span><?php echo $emailerr; ?></span><br><br>
            Password : <input type="password" name="password" require><span><?php echo $passerr; ?></span><br><br>
            <input type="submit" text="Submit">
        </form>
    </body>
</html>
