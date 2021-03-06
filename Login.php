<html>
  <head>
      <link rel="stylesheet" type="text/css" href="style.css"> <!-- CSS -->
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css">
      <!-- Google Materials Icon -->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>
  <body style="background:url('Immagini/pokemon-tripYOLO.jpg');background-position: center;background-attachment: fixed;">
    <!-- Barra di navigazione -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark font-weight-light">
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <!-- Home -->
          <li class="nav-item">
            <a class="nav-link" href="index.html" style="margin-top:15%;"><i class="material-icons">home</i> Home</a>
          </li>
          <!--Catalogo -->
          <li class="nav-item">
            <a class="nav-link" href="catalog.php" style="margin-top:15%;"><i class="material-icons">view_list</i> Catalogo</a>
          </li>
          <!-- PokemonStore -->
          <li class="nav-item">
            <a class="navbar-brand" href="index.html" style="margin-left: 60%;"><h2 class="display-4"><strong>PoKaMn SterE</strong></h2></a>
          </li>
          <!-- Registrati -->
          <li class="nav-item">
            <a class="nav-link" href="Signin.php" style="margin-top:2%;margin-left: 84%;"><i class="material-icons">person_add</i> Registrati</a>
          </li>
          <!-- Accedi -->
          <li class="nav-item">
            <a class="nav-link" href="Login.php" style="margin-top:15%;"><i class="material-icons">account_circle</i> Accedi</a>
          </li>
        </ul>
      </div>
    </nav>
    <br>
   <form action="LoginResponse.php" method="post">
     <div class="form-group row">
       <label>Username</label>
      <input type="text" name="usr"><br>
      <label>Password</label>
      <input type="password" name="psw">
    </div>
    <input type="submit">
   </form>
  </body>
</html>
