
<?php
function stringChecking($string)
{
    include('db.php');

    if (!empty($string)) {
        $removedSpaces = str_replace("  ", " ", $string);
        //$convertDoubleQuotation  = str_replace("\"", "&#34;", $removedSpaces);
        $convertDoubleQuotation  = $removedSpaces;
        $returnedString = $convertDoubleQuotation;
    } else {
        $returnedString = "";
    }
    $returnedString = $link->real_escape_string($returnedString);
    return $returnedString;
}
