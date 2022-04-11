<?php include 'config.php';

if (isset($_SESSION['user'])) {
    header("Location:showbook.php");
} else if (isset($_SESSION['admin'])) {
    header("Location:logout.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
        body{
            background: linear-gradient(to right, rgba(233, 222, 250, 0.5), rgba(251, 252, 219, 0.5))
        }
        div.container{
            margin-top: 10%;
        }
    </style>
</head>

<body >


    <div class="container">
        <div class="row">
            <div class="col align-self-start rounded-3">
            </div>
            <div class="col shadow p-3 mb-5 bg-body  align-self-center p-3 mb-2  bg-light text-dark rounded-pill ">
                <center>
                    <h1>Login</h1><br>
                    <form action="login.php" method="get">
                        <input type="text" class="shadow p-3 mb-5 bg-body rounded border-0" placeholder="ชื่อผู้ใช้" name="username">
                        <input type="password" class="shadow p-3 mb-5 bg-body rounded border-0" placeholder="รหัสผ่าน" name="pass"><br>
                        <input type="submit" class="btn btn-outline-primary" value="Login">
                        <a href="register.php"><input type="button" class="btn btn-outline-warning" value="Register"></a>
                        <a href="loginadmin.php"><input type="button" class="btn btn-outline-secondary"value="Admin"></a><br>
                    </form>
                    <br>
                </center>
            </div>
            <div class="col align-self-end">
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>