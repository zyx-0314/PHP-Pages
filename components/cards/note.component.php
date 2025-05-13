<?php
require_once BASE_PATH . '/utils/joinWithComma.utils.php';
?>

<?php
function displayCardForm($productList)
{
    foreach ($productList as $product):
        ?>
        <a href="#"
            class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">

            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                <?php echo $product["productName"] ?>
                2021
            </h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">
                <?php echo
                    joinWithComma($product["details"]["color"]);
                ?>
            </p>
        </a>
        <?php
    endforeach;
}
?>