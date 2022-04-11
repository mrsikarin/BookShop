<?php include 'config.php'; 

$uid = $_GET['uid'];
$bid = $_GET['bid'];
$amount = $_POST['amount'];
$pi = $_GET['pi'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $tatol = $amount*$pi;
     $sql = "INSERT INTO `bill`(`bill_id`, `detail`, `u_id`, `b_id`) VALUES ('','ราคารวม :$tatol','$uid ','$bid')";
     $mysql = mysqli_query($con,$sql);
     if($mysql)
     {
        header("Location:showbook.php");
     }else{
         echo "การสั่งซื้อผิดำพลาด";
         ?><a href="showbook.php"><input type="button" value="Back"></a><?php
     }
    ?>
</body>
</html>