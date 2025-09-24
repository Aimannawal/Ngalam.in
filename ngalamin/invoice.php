<?php
include 'db.php';
$id = $_GET['id'];
$query = "SELECT * FROM orders WHERE id=$id";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/invoice.css">
    <title>Document</title>

</head>
<body>
    <?php include "components/header.php"?>
<div class="invoice">
<div class="list-invoice">
    <div class="text2">
    <p>Nama : <?php echo $data['name'] ?></p>
    <p>Lokasi : <?php echo $data['location'] ?></p>
    <p>Metode : <?php echo $data['method'] ?></p>
    <p>Jumlah : <?php echo $data['quantity'] ?></p>
    <p>Waktu : <?php echo $data['timestamp'] ?></p>
    <p>Admin : Rp 2000</p>
    </div>

    <div class="wisata">
           <img src="images/barcode.png" class="barcode">   
    </div>

</div>

<hr>
<br>
<div class="text">
    <p>Total Harga</p>
    <p><?php echo $data['total_price'] ?></p>
</div> 
</div>


<!-- 
        <img src="<?php echo $data['image'] ?>" alt="" width="1000">
        <p><?php echo $data['name'] ?></p>
        <p><?php echo $data['location'] ?></p>
        <p><?php echo $data['method'] ?></p>
        <p><?php echo $data['quantity'] ?></p>
        <p><?php echo $data['total_price'] ?></p>
        <p><?php echo $data['timestamp'] ?></p> -->
</body>
</html>