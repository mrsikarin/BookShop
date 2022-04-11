<?php include 'config.php'; ?>
<?php
//session_destroy();

if (empty($_SESSION['user'])) {
    header("Location:index.php");
} else {
    $username = $_SESSION['user'];
    $sql = "SELECT * FROM `user` WHERE `username` = '$username'";
    $mysql = mysqli_query($con, $sql);
    $listuser = mysqli_fetch_array($mysql);
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">

    <style>
        table.table1 {
            margin: auto;
        }

        tr.Head {
            background: linear-gradient(to right, rgba(137, 247, 254, 0.5), rgba(102, 166, 255, 0.5))
        }

        body {
            background: linear-gradient(to right, rgba(253, 203, 241, 0.5), rgba(230, 222, 233, 0.5))
        }

        table.table1 {
            background-color: white;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <table style="width:60% " class="table1 shadow p-3 mb-5 rounded-3">
                <tr class="Head shadow p-3 mb-3  bg-body rounded" style="height:100px;width:auto">
                    <td></td>
                    <td>
                        <h1>BOOKSHOP</h1>
                    </td>
                </tr>
                <tr>
                    <td style="width:10%;" VALIGN=TOP>
                        <h1>Hello,คุณ <?php echo $listuser['u_name'] ?></h1>
                        <a href="history.php"><input type="button" class="btn btn-info" value="ประวัติการซื้อ"></a><br><br>
                        <a href="Logout.php"><input type="button" class="btn btn-outline-warning" value="ออกจากระบบ"></a>
                    </td>
                    <td style="width:50%">
                        <br>
                        <table id="example" class="table table-hover" style="width:100%" border="0.1">
                            <thead class="table-secondary .bg-primary.bg-gradient">
                                <tr>
                                    <th>รูปภาพ</th>
                                    <th>รหัส</th>
                                    <th>ชื่อ</th>
                                    <th>จำนวน</th>
                                    <th>ราคา</th>
                                    <th>คำสั่ง</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $sql = "SELECT * FROM `book`";
                                $mysql = mysqli_query($con, $sql);
                                if (mysqli_num_rows($mysql) > 0) {
                                    while ($listbook = mysqli_fetch_array($mysql)) {
                                        $namebook = $listbook['b_id'];

                                ?>
                                        <tr>
                                            <td>
                                                <img src="<?php echo "images/" . $listbook['imagebook'] ?>" width="100" height="100">
                                            </td>
                                            <td>
                                                <?php echo "รหัส :" . $namebook; ?>
                                            </td>
                                            <td>
                                                <?php echo "ชื่อ :" . $listbook['b_name']; ?>
                                            </td>
                                            <td>
                                                <?php echo "จำนวน :" . $listbook['amount']; ?>
                                            </td>
                                            <td>
                                                <?php echo "ราคา :" . $listbook['price']; ?>
                                            </td>

                                            <td>
                                                <a href="buy.php?id= <?php echo $namebook; ?>"><input type="button" class="btn btn-outline-info" value="Buy"></a>
                                            </td>
                                        </tr><?php
                                            }
                                        }
                                                ?>


                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>รูปภาพ</th>
                                    <th>รหัส</th>
                                    <th>ชื่อ</th>
                                    <th>จำนวน</th>
                                    <th>ราคา</th>
                                    <th>คำสั่ง</th>
                                </tr>
                            </tfoot>

                        </table>
                    </td>
                </tr>
                <tfoot>
                    <tr style="background: linear-gradient(to right, rgba(230, 233, 240, 0.5), rgba(238, 241, 245, 0.5));height:50px">
                    <td ></td>
                    <td ><footer><center>นาย ศิครินทร์ สุขใส</center></footer></td>
                    </tr>
                </tfoot>
            </table>
        </div>



    </div>


    </div>







    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>

</html>