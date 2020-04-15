<?php

include "../functions/sortArrayByArray.php";

$words = "aaplebottom jeans-poop&applebees-food&ahhhhhhhhh-imdead";

$words = explode("&",$words);

$i = 0;
foreach ($words as $relate){
	$words[$i]=explode("-",$relate);
	$i++;

}

print_r($words);

?>
