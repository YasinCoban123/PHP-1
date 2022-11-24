<?php
$laptop = 1000;
$software = 40;
if ($laptop > 150) {
$som = $laptop * 1.19 ;
echo "de oude prijs is: $laptop,-
<br>na verhoging van 19% is de prijs : $som,- <br> ";
}
if ($software < 55) 
{
$som = $software * 1.11 ;
echo "de oude prijs is: $software,-
<br>na verhoging van 11% is de prijs : $som,-";
}
else{
$som = $laptop * 1.16 ;
echo "de oude priis is: $laptop,-
<br>na verhoging van 16% is de prijs : ; $som,-";
}
?>