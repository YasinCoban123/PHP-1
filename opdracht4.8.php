<h1>leeftijd voor scooterbewijs en om te stemmen</h1>
<form action="" method="post">
<input type="text" name="leeftijd" placeholder="wat is je leeftijd?">
stempas ontvangen?
<input type="radio" name="stempas" value="true">ja
<input type="radio" name="stempas" value="false">nee
<input type="submit" value="verzenden"> 
</form>

<?php

if(isset($_POST['leeftijd']))
{
    $leeftijd = $_POST['leeftijd'];
    $stempas = $_POST['stempas'];
    $examen = 16;

if ($leeftijd >= $examen) {
    echo "je mag praktijkexamen voor je scooterrijbewijs doen.</br>";
}  else {
    echo"je mag geen praktijkexamen vooor scooterrijbewijs doen.</br>";
}

if ($stempas=='true' && $leeftijd >= 18) {
    echo "je mag stemmen en hebt een stemmpas ontvangen.";
}  else {
    echo "je mag niet stemmen, want je hebt geen stempas";
}
}
?>
