<?php
function afficheImpair($data)
{
    return ($data & 1);
}
$tableau = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$tableau_filtre = array_filter($tableau, "afficheImpair");
foreach ($tableau_filtre as $element)
    echo $element . "<br>";
