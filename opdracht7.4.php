<form method="post">
<p> Bedrag exclusief korting
<input type="text" name="bedrag" value="100"></p>
<input type="radio" name="BTW" value="negen">10 % korting
<p><input type="submit" name="omzetten" value="Omzetten"></p>
</form>

<?php
if(isset($_POST['korting'])){
  $korting = $_POST['korting'];
  $bedrag = $_POST['bedrag'];

  if($korting == "10") {
    $korting = $bedrag / 100 / 109;
    echo "Bedrag inclusief 10% korting : &euro; $korting.-";
  }
}
?>