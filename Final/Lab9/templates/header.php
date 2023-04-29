<?php

/**
 * Can't access directly by URL
 */

defined("_DIRECT_ACCESS") or exit("<h1>Your are not allowed</h1>");
?>
<?php function header_page($title = "") { ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?php echo (!empty($title)) ? " | " . $title : ""; ?></title>

    <style>
        *,
        *::after,
        *::before {
            box-sizing: border-box;
        }

        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 0.625rem;
            margin: 1rem;
        }

        ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        img {
            display: block;
        }

        .success {
            color: green;
        }

        .error {
            color: red;
        }

    </style>
</head>

<body>

<?php } ?>