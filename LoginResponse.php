
<?php
//Logga e aggiunge alla sessone
$usr = $_POST["usr"];
$psw = $_POST["psw"];
include("DBhelper.php");
$u = new UserHandler();
switch ($u->login($usr, $psw)) {
  case 0://"username o email non trovato"
    //ritorna al Login
    echo "username o email non trovato";
    echo "<form action='Login.php'><input type='submit' value='torna al login'></form>";
    break;

  case 1: //"Loggato!"
    //immette i dati in sessione
    echo "Login eseguito correttamente";
    echo "<form action='index.html'><input type='submit' value='torna in home'></form>";
    break;

  case 2://"password errata"
    //ritorna al Login
    echo "password errata";
    echo "<form action='Login.php'><input type='submit' value='torna al login'></form>";
    break;
}
 ?>
