
<?php
//Logga e aggiunge alla sessone
$usr = $_POST["usr"];
$psw = $_POST["psw"];
$email = $_POST["email"];

include("DBhelper.php");
$u = new UserHandler();
switch ($u->SignIn($usr, $psw, $email)) {
  case 0:
    echo "caratteri non validi";
    echo "<form action='SignIn.php'><input type='submit' value='riprova'></form>";
    break;

  case 1:
    echo "password troppo corta";
    echo "<form action='SignIn.php'><input type='submit' value='riprova'></form>";
    break;

  case 2:
    echo "email non valida";
    echo "<form action='SignIn.php'><input type='submit' value='riprova'></form>";
    break;

  case 3:
    echo "errore";
    echo "<form action='SignIn.php'><input type='submit' value='riprova'></form>";
    break;

  case 4:
    echo "registrazione completata";
    echo "<form action='index.html'><input type='submit' value='torna in home'></form>";
    break;
}
 ?>
