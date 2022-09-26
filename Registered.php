<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Registered User</title>
</head>
<body>
    <form action="Registered.php">
        
    <div class="contain"><tr><th>RGISTERED USERS</th></div>
    <table class="table table-striped table-hover table-bordered">
        
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile No</th>
            <th>Password</th>
        </tr></tr>
        <?php
                $con = new mysqli('localhost','root','','assessment');
                $q = "select * from user";
                $query = mysqli_query($con,$q);
                while($res = mysqli_fetch_array($query)){
        ?>
                <tr class="text-center">
                    <td><?php echo $res['id']; ?></td>
                    <td><?php echo $res['name']; ?></td>
                    <td><?php echo $res['email']; ?></td>
                    <td><?php echo $res['mobile']; ?></td>
                    <td><?php echo $res['password']; ?></td>
                    
                </tr>
            <?php
                }
            ?>
        </table>
    </form>
</body>
</html>