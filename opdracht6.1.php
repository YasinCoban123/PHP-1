<?php
session_start();

if(isset($_SESSION['teller']) ) {
  $_SESSION['teller']++;
}

else

{
  $_SESSION['teller']++;
}

$message="U heeft dit pagina ". $_SESSION['teller']. " keer bekeken!";
echo $message;
?>