<?php include 'config.php';
if (empty($_GET['id'])) {
} else {
    if (empty($_POST['username']) || empty($_POST['pass'])|| empty($_POST['fullname'])|| empty($_POST['phone'])|| empty($_POST['gender'])||empty($_POST['email'])||empty($_POST['address'])) {
        echo "ใส่ข้อมูลให้ครบ";
    } else {
        $username = $_POST['username'];
        $pass = $_POST['pass'];
        $fullname = $_POST['fullname'];
        $phone = $_POST['phone'];
        $gen = $_POST['gender'];
        $em = $_POST['email'];
        $address = $_POST['address'];

        $sql = "SELECT * FROM `user` WHERE `username` = '$username'";
        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) <= 0) {

            $sql = "INSERT INTO `user`(`u_id`, `username`,`pass`, `u_name`, `phone`,`gender`,`e-mail`, `address`) VALUES ('','$username','$pass','$fullname','$phone','$gen','$em','$address')";
            $mysql = mysqli_query($con, $sql);
            if ($mysql) {
                header("Location:index.php");
            }
        } else {
            echo "มีชื่อผู้ใช้ในระบบอยู่แล้ว";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
        body {
            background: linear-gradient(to right, rgba(233, 222, 250, 0.5), rgba(251, 252, 219, 0.5))
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col align-self-start rounded-3">
            </div>
            <div class="col shadow p-3 mb-5 bg-body  align-self-center p-3 mb-2  bg-light text-dark rounded-3 ">
                <center>
                    <form action="register.php?id=1" method="post">
                        <input type="text" class="shadow p-3 mb-4 bg-body rounded border-0" placeholder="ชื่อผู้ใช้" name="username"><br>
                        <input type="password" class="shadow p-3 mb-4 bg-body rounded border-0" placeholder="รหัสผ่าน" name="pass"><br>
                        <input type="text" class="shadow p-3 mb-4 bg-body rounded border-0" placeholder="ชื่อ-นามสกุล" name="fullname"><br>
                        <input type="text" class="shadow p-3 mb-4 bg-body rounded border-0" placeholder="เบอร์" name="phone"><br>
                        <select name="gender" class="shadow p-3 mb-4 bg-body rounded border-0" id="type"><br>
                            <option value="" selected>---เลือกประเพศ---</option>
                            <option value="การ์ตูน">ชาย</option>
                            <option value="โดจิน">หญิง</option>
                        </select><br>
                        <input type="text" placeholder="E-mail" class="shadow p-3 mb-4 bg-body rounded border-0" name="email"><br>
                        <input type="text" placeholder="ที่อยู่" class="shadow p-3 mb-4 bg-body rounded border-0" name="address"><br>
                        <input type="submit" class="btn btn-outline-primary" value="Register">
                        <a href="index.php"><input type="button" class="btn btn-outline-warning" value="Back"></a>
                    </form>
                </center>
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