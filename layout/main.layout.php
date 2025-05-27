<?php
function renderMainLayout(callable $content, $title)
{
    // Libraries
    require BASE_PATH . '/vendor/autoload.php';
    require BASE_PATH . '/utils/htmlEscape.utils.php';

    // Templates
    require_once BASE_PATH . '/components/templates/foot.component.php';
    require_once BASE_PATH . '/components/templates/head.component.php';
    require_once BASE_PATH . '/components/templates/nav.component.php';

    // Datas
    require_once BASE_PATH . "/staticData/navPages.staticData.php";

    // Code Body
    head($title);
    navHeader($headNavList);

    // This is the content
    $content();

    footer();
}