<?php

/**
 * Can access direcly by URL
 */

define("_DIRECT_ACCESS", true);

?>
<?php require_once __DIR__ . "/helper/functions.php"; ?>

<?php header_page("Public Home"); ?>

<?php primary_menu(); ?>

    <section>

        <?php
            if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                aside_menu();
            }
        ?>

        <main>
            <h1>Welcome to xCompany</h1>
        </main>
    </section>

<?php footer_page(); ?>