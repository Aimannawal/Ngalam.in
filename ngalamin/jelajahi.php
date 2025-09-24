<?php
include 'db.php';
$query = "SELECT * FROM product";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/list-wisata.css">
    <link rel="stylesheet" href="css/jelajahi.css">
    <title>Document</title>
</head>
<body>
    <?php include "components/header.php"?>
    <div class="main">
        <h1>Jelajahi Destinasi di Malang Terbaik dan Rencanakan Petualanganmu</h1>
        <form action="search.php">
        <input type="search" name="name" class="search">
        </form>
    </div>

<div class="wisata1">
<h1 class="judul-wist">Baru Saja Ditambahkan</h1>
<div class="list-wisata">
    <?php while ($data = mysqli_fetch_assoc($result)) { ?>
        <a href="detail-produk.php?id=<?php echo $data['id'] ?>">
    <div class="wisata">
                <img src="<?php echo $data['image'] ?>" alt="" class="img-wisata">
                </a>
        <div class="content-wisata">
            <div class="content">
                <h1><?php echo $data['name'] ?></h1> 
                <a>4.6 <img src="icons/STAR.svg" alt=""></a>
            </div>
            <div class="location">
                    <img src="icons/location.svg" alt="" width="15px">
                <a class="desc-loc"><?php echo $data['location'] ?></a>
                <h1 class="harga" style="font-size:20px; padding-top: 5px">Rp <?php echo $data['price'] ?></h1>
            </div>  
        </div>
    </div>
    <?php } ?>

</div>
</div>
</body>
</html>