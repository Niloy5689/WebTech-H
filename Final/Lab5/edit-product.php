<?php

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    header("Location: view-product.php");
    exit();
}

if (!isset($_POST['editproduct'])) {

    require_once "./controller/EditProduct.php";
}

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

// echo '<pre>';
// var_dump($_SESSION['messages']);
// echo '</pre>';

// echo '<pre>';
// var_dump($messages);
// echo '</pre>';
// exit;


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Product</title>
</head>

<body>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="add-product.php">Add Product</a></li>
            <li><a href="view-product.php">View Product</a></li>
        </ul>
    </nav>
    <form action="./controller/EditProduct.php" method="post">
        <fieldset>
            <legend>Edit Product</legend>
            <div>
                <table>
                    <tr>
                        <td><label for="name">Name</label></td>
                        <td>:<input type="text" name="name" id="name" value="<?php echo isset($messages['data']['name']) ? $messages['data']['name'] : ""; ?>"></td>
                        <td class="error"><?php echo isset($messages['errors']['name']) ? $messages['errors']['name'] : ""; ?></td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td><label for="buyingprice">Buying Price</label></td>
                        <td>:<input type="text" name="buyingprice" id="buyingprice" value="<?php echo isset($messages['data']['buyingprice']) ? $messages['data']['buyingprice'] : ""; ?>"></td>
                        <td class="error"><?php echo isset($messages['errors']['buyingprice']) ? $messages['errors']['buyingprice'] : ""; ?></td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td><label for="sellingprice">Selling Price</label></td>
                        <td>:<input type="text" name="sellingprice" id="sellingprice" value="<?php echo isset($messages['data']['sellingprice']) ? $messages['data']['sellingprice'] : ""; ?>"></td>
                        <td class="error"><?php echo isset($messages['errors']['sellingprice']) ? $messages['errors']['sellingprice'] : ""; ?></td>
                    </tr>
                </table>
                <hr>
            </div>
            <div>
                <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                <input type="submit" name="editproduct" value="Submit">

                <?php if (isset($messages['success']) && !empty($messages['success'])) : ?>

                    <span class="success"><?php echo $messages['success']; ?></span>

                <?php elseif (isset($messages['unsuccess']) && !empty($messages['unsuccess'])) : ?>

                    <span class="error"><?php echo $messages['unsuccess']; ?></span>

                <?php endif; ?>
            </div>
        </fieldset>
    </form>
</body>

</html>