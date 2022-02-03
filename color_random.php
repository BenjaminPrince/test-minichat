<?php

$rgbColor = array();

//creer une boucle
foreach(array('r', 'g', 'b') as $color){
    //le random 
    $rgbColor[$color] = mt_rand(0, 255);
}
// pour afficher
var_dump($rgbColor);

?>