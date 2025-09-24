
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <img src="<?php echo $data['image'] ?>" alt="" width="1000">
        <p><?php echo $data['name'] ?></p>
        <p><?php echo $data['price'] ?></p>
        <p><?php echo $data['location'] ?></p>

        
            
            <input type="number" name="quantity" value="1">
            <br>
            <select name="method" id="">
                <option value="E-Wallet">E-Wallet</option>
                <option value="Bank">Bank</option>
            </select>
            <br>
            <button>Submit</button>
        
</body>
</html>