<?php include 'config.php';
if (empty($_SESSION['admin'])) {
    header("Location:index.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background: linear-gradient(to right, rgba(233, 222, 250, 0.5), rgba(251, 252, 219, 0.5))
        }
    </style>

</head>

<body>
   
    <div class="container" style="background-color:whitesmoke;">
        <table class="table">
            <tr>
                <td> <a href="add.php"><input type="button" class="btn btn-outline-primary"  value="เพิ่มสินค้า"></a>
    <a href="Logout.php"><input type="button"  class="btn btn-outline-warning"  value="ออกจากระบบ"></a></td>
            </tr>
            <tr>
                <td>
                    <center>
                        <table id="example" class="table table-striped" style="width:100%" border="0.1">
                            <thead>
                                <tr>
                                    <th>รูปภาพ</th>
                                    <th>รหัส</th>
                                    <th>ชื่อ</th>
                                    <th>จำนวน</th>
                                    <th>ราคา</th>
                                    <th>ประเภท</th>
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
                                                <?php echo "ประเภท :" . $listbook['Type']; ?>
                                            </td>

                                            <td>
                                                <a href="edit.php?idbook= <?php echo $namebook; ?>"><input type="button" class="btn btn-outline-primary"  value="Edit"></a>
                                                <a href="delete.php?idbook= <?php echo $namebook; ?>"><input type="button" class="btn btn-danger" value="ลบ"></a>
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
                                    <th>ประเภท</th>
                                    <th>คำสั่ง</th>
                                </tr>
                            </tfoot>

                        </table>
                    </center>
                </td>
            </tr>

        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>