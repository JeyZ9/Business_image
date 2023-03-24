<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css">
    <link rel="stylesheet" href="_________________________">
    <title>CRUD Customer Information with Enlarge Image</title>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12"> <br>
                <h3>รายชื่อลูกค้า <a href="addCustomer_dropdown.php" class="btn btn-info float-end">+เพิ่มข้อมูล</a> </h3> <br/>
                <!-- <table class="table table-striped  table-hover table-responsive table-bordered"> -->
                <table id="customerTable" class="display table table-striped  table-hover table-responsive table-bordered ">

                    <thead align="center">
                        <tr>
                            <th width="10%">รหัสลูกค้า</th>
                            <th width="20%">ชื่อ-นามสกุล</th>
                            <th width="15%">วันเดือนปีเกิด</th>
                            <th width="20%">อีเมล์</th>
                            <th width="10%">ประเทศ</th>
                            <th width="10%">ยอดหนี้</th>
                            <th width="10%">ภาพ</th>
                            <th width="5%">แก้ไข</th>
                            <th width="5%">ลบ</th>
                        </tr>

                    </thead>
                    <tbody>
                        <?php
                        require '______________';
                        $sql =
                            'SELECT * FROM customer c, country t WHERE _________________________';
                        $stmt = $conn->prepare($sql);
                        __________________
                        $result = $stmt->fetchAll();
                        foreach ($result as $r) { ?>
                            <tr>
                                <td><?= $r['CustomerID'] ?></td>
                                <td><?= $r['Name'] ?></td>
                                <td><?= $r['Birthdate'] ?></td>
                                <td><?= $r['Email'] ?></td>
                                <td><?= $r['CountryName'] ?></td>
                                <td align="right"><?= $r['OutstandingDebt'] ?></td>
                                <td><img src="../image/<?= $r['Image']; ?>" width="50px" height="50" alt="image" onclick="enlargeImg()" id="img1" ></td>

                                <td><a href="updateCustomerForm.php?CustomerID=<?= $r['CustomerID'] ?>" class="btn btn-warning btn-sm">แก้ไข</a></td>
                                <td><a href="deleteCustomer.php?CustomerID=<?= $r['CustomerID'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('ยืนยันการลบข้อมูล !!');">ลบ</a></td>
                            </tr>
                        <?php }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('#__________________').DataTable();
        });
    </script>
    

</body>

</html>