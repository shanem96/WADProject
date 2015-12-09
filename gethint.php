<?php
// Array with names
$a[] = "Adidas";
$a[] = "nike";
$a[] = "nike roche black";
$a[] = "nike roche grey";
$a[] = "air max white";
$a[] = "nike free runs";
$a[] = "nike duel fusion black";
$a[] = "nike duel fushion grey";
$a[] = "adidas originals";
$a[] = "adidas ZX black";
$a[] = "adidas ZX white";
$a[] = "adidas ZX red";
$a[] = "adidas ZX yellow";
$a[] = "adidas ZX blue";
$a[] = "adidas ZX grey";
$a[] = "adidas ZX navy";
$a[] = "adidas ZX black/white";
$a[] = "adidas ZX yellow";


// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from "" 
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values 
echo $hint === "" ? "no suggestion" : $hint;
?>