<?php include('../config/constants.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Daftar Makanan</title>
</head>

<body>
    <center>
        <h2>Daftar Makanan</h2>
    </center>

    <table border="1" style="width: 100%;">
        <tr>
            <th>No.</th>
            <th>Title</th>
            <th>Price</th>
            <th>Image</th>
            <th>Featured</th>
            <th>Active</th>
        </tr>
        <?php
        $sql = "SELECT * FROM tbl_food";

        //Execute the qUery
        $res = mysqli_query($conn, $sql);
        $sn = 1;
        while ($row = mysqli_fetch_assoc($res)) {
        ?>
            <tr>
                <td><?php echo $sn++; ?></td>
                <td><?php echo $row['title']; ?></td>
                <td>Rp. <?php echo $row['price'] ?></td>
                <td><?php
                    //CHeck whether we have image or not
                    if ($row['image_name'] == "") {
                        //WE do not have image, DIslpay Error Message
                        echo "<div class='error'>Image not Added.</div>";
                    } else {
                        //WE Have Image, Display Image
                    ?>
                        <img src="<?php echo SITEURL; ?>images/food/<?php echo $row['image_name']; ?>" width="100px">
                    <?php
                    }
                    ?>
                </td>
                <td><?php echo $row['featured']; ?></td>
                <td><?php echo $row['active']; ?></td>
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