<?php

include_once "Terminator.php";
include_once "Avatar.php";

$t = new Terminator();
$a = new Avatar($t);

// Si true, avatar est libre.  
$t->setIsEndormi(true);
//$t->delete($a);

 // Si true: avatar doit le suivre dans
 //... toute ses actions.
//$t->setIsReveille(true);

//var_dump($a);