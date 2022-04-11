<?php include 'config.php';
if (isset($_GET["idbook"])) {
    $id = $_GET["idbook"];
}
?>


<?php


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $bn = $_POST['b_n'];
    $pr = $_POST['price'];
    $am = $_POST['amount'];
    $type = $_POST['type'];

    $sql = "SELECT * FROM `book` WHERE `b_name` = '$bn'";

    $mysql = mysqli_query($con, $sql);
    if ($mysql) {
        if (mysqli_num_rows($mysql) <= 0) {
            $sql  = "UPDATE `book` SET `b_name` = '$bn', `price` = '$pr', `amount` = '$am', `Type` = '$type' WHERE `book`.`b_id` = $id;";
            $mysql = mysqli_query($con, $sql);
            if ($mysql) {
                header("Location:admin.php");
            }
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
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
        body {
            background: linear-gradient(to right, rgba(233, 222, 250, 0.5), rgba(251, 252, 219, 0.5))
        }
        table.table {
            margin: auto;
            background-color: white;
        }
    </style>
</head>

<body>

    <div class="container">
        <?php

        $sql = "SELECT * FROM `book` WHERE `b_id` = '$id'";
        $mysql = mysqli_query($con, $sql);
        $listbook = mysqli_fetch_array($mysql);
        ?>
        <form action="edit.php?id=<?php echo $id ?>" method="POST">

            <table class="table" border="1" style="width: 50%;">
                <tr>
                    <td>
                        <img src="<?php echo "images/" . $listbook['imagebook'] ?>" width="200" height="200">
                    </td>
                    <td>
                        <input type="text" name="b_n"  class="shadow p-3 mb-3 bg-body rounded border-0" value="<?php echo $listbook['b_name']; ?>"><br>
                        <input type="text" name="price"  class="shadow p-3 mb-3 bg-body rounded border-0" value="<?php echo $listbook['price']; ?>">

                     <input type="text" name="amount"  class="shadow p-3 mb-3 bg-body rounded border-0" value="<?php echo $listbook['amount']; ?>"><br>

                        <select name="type" id="type"  class="shadow p-3 mb-3 bg-body rounded border-0">
                            <option value="" selected>---เลือกประเภท---</option>
                            <option value="การ์ตูน">การ์ตูน</option>
                            <option value="โดจิน">โดจิน</option>


                        </select>
                    </td>
                    <td>
                        <input type="submit" class="btn btn-primary btn-lg" value="แก้ไข"> <br><br><a href="admin.php"><input type="button" class="btn btn-warning btn-lg" value="กลับ"></a>
                    </td>
                </tr>
            </table>

        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


</body>

</html>