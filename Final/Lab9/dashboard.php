<?php

/**
 * Can access direcly by URL
 */

define("_DIRECT_ACCESS", true);

?>
<?php require_once __DIR__ . "/helper/functions.php"; ?>

<?php

if (!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] != true) {
    header("Location: login.php");
    exit();
}

?>

<?php header_page("Dashboard"); ?>

<?php primary_menu(); ?>

    <section>

        <?php aside_menu(); ?>

        <main>
            <h1>Welcome <?php echo ucfirst($_SESSION['username']); ?></h1>
        </main>
    </section>

<?php footer_page(); ?>