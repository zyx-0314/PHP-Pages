<?php
function htmlEscape(string $str): string
{
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}