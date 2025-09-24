<?php
include 'db.php';
$name = $_GET['name'];
$query = "SELECT * FROM `product` WHERE `name` LIKE '%$name%'";
$result = mysqli_query($conn, $query);
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/list-wisata.css">
    <link rel="stylesheet" href="css/index.css">
    <title>Document</title>
</head>

<?php include "components/header.php"?>


<div class="wisata1">
<?php while ($data = mysqli_fetch_assoc($result)) { ?>
<div class="list-wisata">
    <div class="wisata">
                <img src="<?php echo $data['image'] ?>" alt="" class="img-wisata">
        <div class="content-wisata">
            <div class="content">
                <h1><?php echo $data['name'] ?></h1> 
                <a>4.6 <img src="icons/STAR.svg" alt=""></a>
            </div>
            <div class="location">
                    <img src="icons/location.svg" alt="" width="15px">
                <a class="desc-loc"><?php echo $data['location'] ?></a>
                <h1 class="harga" style="font-size:20px; padding-top: 5px"><?php echo $data['price'] ?></h1>
            </div>  
        </div>
    </div>
<?php } ?>
</div>