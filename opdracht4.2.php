<?php
$uur=13;
switch($uur){

case $uur > 6 && $uur < 12;
echo"het is ochtend";
break;
case $uur > 12 && $uur < 18;
echo"het is middag";
break;
case $uur > 18 && $uur < 24;
echo"het is avond";
break;
case $uur > 24 && $uur < 6;
echo"het is nacht";
break;
}
?>