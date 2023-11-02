<?php include('../config/constants.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Data Customer</title>
</head>

<body>
    <center>
        <h2>Data Customer</h2>
    </center>
    <table border="1" style="width: 100%;">
        <tr>
            <th>No.</th>
            <th>Customer</th>
            <th>Contact</th>
            <th>Email</th>
            <th>Address</th>
        </tr>
        <?php
        $sql = "SELECT * FROM tbl_order";

        //Execute the qUery
        $res = mysqli_query($conn, $sql);
        $sn = 1;
        while ($row = mysqli_fetch_assoc($res)) {
        ?>
            <tr>
                <td><?php echo $sn++; ?></td>
                <td><?php echo $row['customer_name']; ?></td>
                <td><?php echo $row['customer_contact'] ?></td>
                <td><?php echo $row['customer_email'] ?></td>
                <td><?php echo $row['customer_address'] ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
    <script>
        window.print();
    </script>

</body>

</html>