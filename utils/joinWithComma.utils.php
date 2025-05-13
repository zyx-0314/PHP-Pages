<?php
function joinWithComma(array $items): string
{
    return implode(', ', array_map('htmlEscape', $items));
}
