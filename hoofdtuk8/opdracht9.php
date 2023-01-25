<h1>Zet hier je tekst om:</h1>
<form action="">
    <input type="text" name="tekstveld" placeholder="Type een tekst in."> <br>
    <input type="radio" name="letters" value="HoofdLetters">In hoofdletters <br>
    <input type="radio" name="letters" value="KleineLetters">In kleine letters <br>
    <input type="radio" name="letters" value="EersteHoofdletter">Eerste letter hoofdletter <br>
    <input type="radio" name="letters" value="ElkWoordHoofdletter">Eerste letter ieder woord hoofdletter <br>
    <input type="submit" value="Click">
</form>

<?php

if (isset ($_GET['letters']) ) {
    if ($_GET['letters']  == 'HoofdLetters') {
        echo strtoupper ($_GET['tekstveld']);
    } else if ($_GET['letters'] == 'KleineLetters') {
        echo strtolower ($_GET['tekstveld']);
    } else if ($_GET['letters'] == 'EersteHoofdletter') {
        echo ucfirst ($_GET['tekstveld']);
    } else if ($_GET['letters'] == 'ElkWoordHoofdletter') {
        echo ucwords ($_GET['tekstveld']);
    }
}

?>
