<?php include 'config.php'; ?>

<?php
if (isset($_GET['id'])) {
    $username = $_POST['adminname'];
    $pass = $_POST['passadmin'];

    $sql = "SELECT * FROM `admin` WHERE `admin_id` = '$username'  AND `admin_pass` = '$pass' ";

    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['admin'] = $username;
        header("Location:admin.php");
    } else {
        echo "NO Login";
?><a href="index.php"><input type="button" value="Back"></a>

<?php
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background: linear-gradient(to right, rgba(233, 222, 250, 0.5), rgba(251, 252, 219, 0.5))
        }

        div.container {
            margin-top: 10%;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
        <div class="col align-self-start rounded-3">
        </div>
            <div class="col shadow p-3 mb-5 bg-body  align-self-center p-3 mb-2  bg-light text-dark rounded-pill ">
               <center> <h1>Admin</h1><br>
                   <form action="loginadmin.php?id=1" method="POST">
                    <input type="text" class="shadow p-3 mb-5 bg-body rounded border-0" name="adminname"><br><br>
                    <input type="password" class="shadow p-3 mb-5 bg-body rounded border-0" name="passadmin"><br><br>
                    <input type="submit" class="btn btn-outline-primary" value="Login">
                    <a href="index.php"><input type="button" class="btn btn-outline-warning" value="Back"></a>
                </form></center>
            </div>
            <div class="col align-self-end">
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>