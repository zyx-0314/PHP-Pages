<?php
require_once BASE_PATH . '/utils/joinWithComma.utils.php';
require_once BASE_PATH . '/utils/convertValueToCurrency.utils.php';
?>

<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <?php
                foreach ($tableColumnNames as $tableColumnName):
                    ?>
                    <th scope="col" class="px-6 py-3">
                        <?php echo $tableColumnName ?>
                    </th>
                    <?php
                endforeach;
                ?>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($productList as $product):
                ?>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <?php echo $product["productName"] ?>
                    </th>
                    <td class="px-6 py-4">
                        <?php echo
                            joinWithComma($product["details"]["color"]);
                        ?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo $product["details"]["category"] ?>
                    </td>
                    <td class="px-6 py-4">
                        <?php echo convertValueToCurrency($product["details"]["price"]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>