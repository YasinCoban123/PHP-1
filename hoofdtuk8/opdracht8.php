<?php
session_start();
?>

<h1>Boodschappen lijst</h1>
<form method="post">
<input type="text" value="Noem een product..." name="item"/><br>
<input type="submit" value="Click" name="submit"/>
</form> <br>
<a href="Opdracht 7.8.php?knop=schudden">Schudden met shuffle.</a> <br>
<a href="Opdracht 7.8.php?knop=az">Sorteren van A-Z, met sort</a> <br>
<a href="Opdracht 7.8.php?knop=wissen">Session wissen</a> <br> <br>

<?php
error_reporting(0);
if (!$_SESSION['lijst']) {
    $_SESSION['lijst'] = array();
}

if (isset ($_POST['item']) && trim($_POST['item']) != '') {


    $veld = trim($_POST['item']);
    
    if (!in_array ($veld, $_SESSION['lijst'], true) ) {

        $_SESSION['lijst'][] = $veld;
    }
}

if (!empty ($_SESSION['lijst']) ) {
    echo "<h2>Winkelmand</h2>";

    foreach ($_SESSION['lijst'] as $waarden) {
        echo "$waarden <br> ";
    }
}

if (isset ($_GET['knop']) ) {
    if ($_GET['knop'] == "schudden") {
        shuffle ($_SESSION['lijst']);
    }
}

if (isset ($_GET['knop']) ) {
    if ($_GET['knop'] == "az") {
        sort ($_SESSION['lijst']);
    }
}

if (isset ($_GET['knop']) ) {
    if ($_GET['knop'] == "wissen") {
        $_SESSION = array();
        session_destroy();
        echo "Alle sessievariabelen worden verwijderd.";

        header ('Refresh: 0; url=Opdracht 7.8.php');
    }
}

?>