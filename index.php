<?php
require BASE_PATH . '/vendor/autoload.php';

require BASE_PATH . '/utils/htmlEscape.utils.php';

require BASE_PATH . '/handlers/pageData.handler.php';

$pageTitle = 'Product List';

include BASE_PATH . '/components/templates/head.component.php';
include BASE_PATH . '/components/templates/nav.component.php';
include BASE_PATH . '/components/templates/productTable/singleColor.component.php';
include BASE_PATH . '/components/templates/productTable/dualToneColor.component.php';
include BASE_PATH . '/components/templates/foot.component.php';

include BASE_PATH . '/components/cards/note.component.php';

// displayCardForm($productList);
?>

<!-- <?php
foreach ($accounts as $account) {
    echo $account;
}
?> -->