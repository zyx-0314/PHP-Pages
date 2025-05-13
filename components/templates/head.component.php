<?php
function head($pageTitle)
{
    ?>
    <!DOCTYPE html>
    <html lang="en">

        <head>
            <meta charset="utf-8">
            <title><?= htmlEscape($pageTitle ?? 'My Shop') ?></title>

            <!-- Libraries -->
            <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
        </head>

        <body>
            <?php
}
?>