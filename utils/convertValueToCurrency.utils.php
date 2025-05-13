<?php
function convertValueToCurrency($value): string
{
    if (!is_numeric($value)) {
        echo "<script type='text/javascript'>alert('It should be number');</script>";
    }

    $overThousands = floor($value / 1000000);
    $overHundreds = floor($value / 1000);
    $underHundreds = $value % 1000;
    $decimals = $value % 1;

    $converted = "";
    if ($overThousands > 0) {
        $converted .= $overThousands . ",";
    }
    if ($overHundreds > 0) {
        $converted .= $overHundreds . ",";
    }
    if ($underHundreds > 0) {
        $converted .= $underHundreds . ".";
    }
    if ($decimals > 0) {
        $converted .= $decimals;
    } else {
        $converted .= "00";
    }

    return "$ " . $converted;

}