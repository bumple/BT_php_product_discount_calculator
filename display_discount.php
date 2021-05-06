<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $productDescription = $_POST['productDescription'];
    $listPrice = $_POST['listPrice'];
    $discountPercent = $_POST['discountPercent'];
    $discountAmount = null;
    $discountPrice = null;

    $discountAmount = $listPrice * $discountPercent * 0.1;
    $discountPrice = $listPrice - $discountAmount;
    echo "Product Description: $productDescription<br>
            Discount Amount: $discountAmount<br>
            Discount Price: $discountPrice";
}
?>