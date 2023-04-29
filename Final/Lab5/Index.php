<?php
session_start();

$messages = isset($_SESSION['messages']) ? $_SESSION['messages'] : [
    "errors" => [],
    "success" => "",
    "unsuccess" => "",
    "data" => []
];

$_SESSION['messages'] = [
    "errors" => [],
    "success" => "",
    "unsuccess" => "",
    "data" => []
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>

<body>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="add-product.php">Add Product</a></li>
            <li><a href="view-product.php">View Product</a></li>
        </ul>
    </nav>
</body>

</html>