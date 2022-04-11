<?php include 'config.php';

if(isset($_GET['idbook']))
{
    $book_id = $_GET['idbook'];
    $sql = "DELETE FROM `book` WHERE `b_id` = '$book_id'";
    $sqlquery = mysqli_query($con,$sql);
    if($sqlquery)
    {
        header("Location:admin.php");
    }else{
        echo "เกิดข้อผิดพลาดในการลบ";
    }
}

?>

