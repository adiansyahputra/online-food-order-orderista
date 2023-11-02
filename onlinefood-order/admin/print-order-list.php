<?php include('../config/constants.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Data Pesanan</title>
</head>

<body>
    <center>
        <h2>Data Pesanan</h2>
    </center>
    <table border="1" style="width: 100%;">
        <tr>
            <th>No.</th>
            <th>Customer</th>
            <th>Order Date</th>
            <th>Food</th>
            <th>Price</th>
            <th>Qty</th>
            <th>Total</th>
            <th>Status</th>
            <th>Number Order</th>
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
                <td><?php echo $row['order_date']; ?></td>
                <td><?php echo $row['food'] ?></td>
                <td>Rp. <?php echo $row['price'] ?></td>
                <td><?php echo $row['qty'] ?></td>
                <td>Rp. <?php echo $row['total'] ?></td>
                <td><?php echo $row['status'] ?></td>
                <td><?php echo $row['number_order'] ?></td>
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