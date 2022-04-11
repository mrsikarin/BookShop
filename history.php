<?php include 'config.php';

if (isset($_SESSION['userid'])) {
    $iduser = $_SESSION['userid'];

    $sql = "SELECT * FROM `bill` WHERE `u_id` = '$iduser'";
    $mysql = mysqli_query($con, $sql);
    if ($mysql) {
    } else {
        echo "ดูประวัติผิดพลาด";
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
<div class="container">
<center>
<table id="example" class="table table-hover" style="width:100%" border="0.1">
                            <thead class="table-secondary .bg-primary.bg-gradient">
                                <tr>
                                    <th>รหัส</th>
                                    <th>รายละเอียด</th>
                                    <th>ชื่อ</th>
                                </tr>
                            </thead>
                            <tbody>
        <?php while ($listbill = mysqli_fetch_array($mysql)) {
            $bid = $listbill['b_id']; 
            $name = "SELECT * FROM `storebook`.`book` WHERE `b_id` = $bid";
            $mysqlbook = mysqli_query($con, $name);
            $listbook = mysqli_fetch_array($mysqlbook);
        ?>

            <tr>
                <td>เลขบิล : <?php echo $listbill['bill_id']; ?> </td>
                <td>รายละเอียด <?php echo $listbill['detail']; ?></td>
                <td>ชื่อ <?php echo $listbook['b_name']; ?></td>
            </tr>
        <?php } ?>
        </tbody>
                            <tfoot>
                                <tr>
                                    <th>รหัส</th>
                                    <th>รายละเอียด</th>
                                    <th>ชื่อ</th>
                                </tr>
                            </tfoot>

    </table>
     <a href="showbook.php"><input type="button" class="btn btn-outline-info" value="Back"></a>
    </center>
 
</div>
   
  
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


</body>

</html>