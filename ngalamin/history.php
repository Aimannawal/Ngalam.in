<?php
include 'db.php';
$query = "SELECT * FROM orders";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/history.css">
    <title>Document</title>
</head>
<body>
<?php include "components/header.php"?>

<div class="list-history">
    <!-- <div class="card"> -->
    <?php while ($data = mysqli_fetch_assoc($result)) { ?>
        <div class="content">
            <a href="invoice.php?id=<?php echo $data['id'] ?>">
            <div class="image">
                <img src="<?php echo $data['image'] ?>" class="img">
            </div>
            </a>
            <div class="desc">
                <p><?php echo $data['name'] ?></p>
                <p><?php echo $data['location'] ?></p>
                <p><?php echo $data['timestamp'] ?></p>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
</body>
</html>