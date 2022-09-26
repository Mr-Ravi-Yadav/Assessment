<?php
session_start();

if(isset($_POST['signup'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $con= new mysqli('localhost','root','','assessment');
    if($con->connect_error){
        die('Conncetion Failed :'.$con->connect_error);
    }else{
        $connection ="INSERT INTO user (name, email, mobile,password)
        values('$name', '$email','$mobile','$password')";

        $result= mysqli_query($con,$connection);
        if($result){
            ?>
            <script>alert("are you sure")</script>
            <?php
            header("location: Registered.php");
        }
        else{
            echo "something went wrong";
        }
        $con->close();
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Sign Up</title>
</head>
<body>
    <div class="container">
    <div class="row">
    <div class="col-md-4 offset-md-4 form">
    <form action="signup.php" method="POST">
    <h2 class="text-center">Signup Form</h2>
    <div class="form-group">
        <input class="form-control" type="text" name="name" placeholder="Name" required autocomplete="off">
    </div>
    <div class="form-group">
        <input class="form-control" type="email" name="email" placeholder="Email Address" required autocomplete="off">
    </div>
    <div class="form-group">
        <input class="form-control" type="mobile" name="mobile" placeholder="Mobile No" required autocomplete="off">
    </div>
    <div class="form-group">
        <input class="form-control" type="password" name="password" placeholder="Password" required autocomplete="off">
    </div>
    <div class="form-group">
        <input class="form-control button" type="submit" name="signup" value="Signup">
    </div>
    </form>
</div>
</div>
</div>
</body>
</html>