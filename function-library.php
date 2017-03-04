<?php
//filename: function-library.php
function getOption($key, $default)
{
    $value = isset($_GET[$key]);
    if ($value) {
        $value = $_GET[$key];
    } else {
        $value = $default;
    }
    return $value;
}

function isVowel($input)
{
    switch ($input) {
        case "A":
        case "E":
        case "I":
        case "O":
        case "U":
    }

    return true;
}

?>