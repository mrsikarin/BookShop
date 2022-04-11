<?php include 'config.php'; ?>


<?php
if (isset($_GET['id'])) {
    $IDadmin = $_SESSION['admin'];
    print_r($_FILES);
    $filename = $_FILES['fileUpload']['name'];
    $bn = $_POST['bookname'];
    $pr = $_POST['price'];
    $an = $_POST['amount'];
    $ty = $_POST['type'];
    $sql = "SELECT * FROM `book` WHERE `b_name` = '$bn'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) <= 0) {
        $sql = "INSERT INTO `book`(`b_id`, `b_name`,`price`, `amount`, `Type`,`admin_id`,`imagebook`) VALUES ('','$bn','$pr','$an','$ty','$IDadmin','$filename')";
        if (move_uploaded_file($_FILES['fileUpload']['tmp_name'], "images/" . $filename)) {
            $mysql = mysqli_query($con, $sql);
            if ($mysql) {
                header("Location:admin.php");
            }
        }
    } else {
        echo "มีข้อมูลอยู่แล้ว";
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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
        body {
            background: linear-gradient(to right, rgba(233, 222, 250, 0.5), rgba(251, 252, 219, 0.5))
        }
    </style>
</head>

<body>
    <script>
        function validateForm() {
            var x1 = document.forms["myForm"]["bookname"].value;
            var x2 = document.forms["myForm"]["price"].value;
            var x3 = document.forms["myForm"]["amount"].value;
            var x4 = document.forms["myForm"]["type"].value;
            var x5 = document.forms["myForm"]["fileUpload"].value;
            if ((x1 == null || x1 == "") || (x2 == null || x2 == "") || (x3 == null || x3 == "") || (x4 == null || x4 == "") || (x5 == null || x5 == "")) {
                alert("ใส่ข้อมูลให้ครบ");
                return false;
            }
        }
    </script>
    <div class="container">
        <div class="row">
            <div class="col align-self-start rounded-3">
            </div>
            <div class="col shadow p-3 mb-5 bg-body  align-self-center p-3 mb-2  bg-light text-dark rounded-3 ">
                <center>
                    <form name="myForm" action="add.php?id=1" method="post" onsubmit="return validateForm()" enctype="multipart/form-data">

                        <input type="text" class="shadow p-3 mb-3 bg-body rounded border-0" placeholder="ชื่อหนังสือ" name="bookname"><br><br>
                        <input type="text" class="shadow p-3 mb-3 bg-body rounded border-0" placeholder="ราคา" name="price"><br><br>
                        <input type="text" class="shadow p-3 mb-3 bg-body rounded border-0" placeholder="จำนวน" name="amount"><br><br>
                        <select name="type" id="type" class="shadow p-3 mb-3 bg-body rounded border-0">
                            <option value="" selected>---เลือกประเภท---</option>
                            <option value="การ์ตูน">การ์ตูน</option>
                            <option value="โดจิน">โดจิน</option>
                        </select>
                        <input type="file" name="fileUpload"><br>
                        <input type="submit" class="btn btn-outline-primary" value="ADD">
                        <a href="admin.php"><input type="button" class="btn btn-outline-warning" value="Back"></a>
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