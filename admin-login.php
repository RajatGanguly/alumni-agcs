<?php
    if (isset($_SESSION["log"])){
        header("Location: ./admin.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN | LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/navbar.css">
    <link rel="stylesheet" href="styles/footer.css">
    <style>
        form{
            width: 84vw;
            margin-left: 8vw;
        }
    </style>
</head>
<body>
   <?php
       include "./components/navbar.php";
   ?>
   <br><br><br><br>
   <br><br><br><br>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">User Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
        </div>
        <button type="submit" class="btn btn-primary" name="save">Submit</button>
    </form>
    
   <?php
       if(isset($_POST["save"])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        include "./db/config.php";
        $conn = mysqli_connect("localhost","root","","agsc");
        $sql= "SELECT * FROM `admin` WHERE `user_name` = '$username' AND `user_pass` = '$password' ";
        $result = mysqli_query($conn,$sql) or die("Database connection failed");
        $check = false;
        while($row = mysqli_fetch_assoc($result)){
            if ($row["user_name"]==$username and $row["user_pass"]==$password){
                $check=true;
            }
        }
        if($check==true){
        echo 'success';
            session_start();
            $_SESSION["log"]=true;
            header("Location: ./admin.php");
        }else{
        // echo 'failure';
        // header("Location: ./admin-login.php");
        echo '<div class="alert alert-danger" role="alert">
        Wrong User Name or Password! Try again!
      </div>';
        }
       }
   ?>

</body>
</html>