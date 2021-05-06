<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <input type="text" placeholder="Product Description" name="productDescription">
    <br>
    <br>
    <input type="text" placeholder="List price " name="listPrice">
    <br><br>
    <input type="text" placeholder="Discount Percent" name="discountPercent">
    <br><br>
    <input type="submit" value="Calculate Discount">

</form>
<?php include 'display_discount.php';?>

</body>
</html>