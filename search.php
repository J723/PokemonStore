

<!DOCTYPE html>
<html lang="en">
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
  <body>
    <img src="source-img\Mocking-Spongebob-Meme.jpg" height="42" width="62">
    <form class="control-form" action="search.php" method="get">
      <input type="text" name="src"/>
      <input type="submit"/>
    </form>

    <?php
      include('DBhelper.php');
      $c_Handle = new CatalogHandler();
      echo "<table class='table table-striped table-dark'>".
            "<tr>".
              "<th>FoTo</th>".
              "<th>NoMMe</th>".
              "<th>BaSeZzA</th>".
              "<th>cYccYeZzza</th>".
            "</tr>";
      foreach ($c_Handle->search() as $record) {
        echo "<tr>".
              "<td><img src='DB POKEMON/main-sprites/".$record['id'].".png'</td>".
              "<td>".fuckUpText($record['identifier'])."</td>".
              "<td>".$record['height']."kM</td>".
              "<td>".$record['weight']."Kg*m/s^2</td>".
            "</tr>";
      }
      echo "</table>";
      //TODO sistemare graficamente (mettere in linea)
      $l = $c_Handle->getPagLinks();
      if ($l != null){
        $echo;
        $srcVal = $l["src"];
        foreach ($c_Handle->getPagLinks() as $key => $value) {
          $echo = $echo."<a class = 'page-link'  href=\"" . $_SERVER['PHP_SELF'] . "?pag=" . $value .'&src='.$srcVal. "\">";
          switch ($key) {
            case "last":
              $echo = $echo."PrReCcEdenTEE</a>";
              unset($value);
              break;
            case "next":
              $echo = $echo."sUcEsSsYvAAA</a>";
              unset($value);
              break;
            case "...":
              $echo = $echo."...</a>";
              unset($value);
              break;
            case "src":
              $echo = $echo."Pr!m0!!!1!</a>";
              unset($value);
              break;
            default:
              $echo = $echo.$value . "</a>";
              unset($value);
              break;
          }
        }
      }
      echo $echo;

      function fuckUpText($text){
        $result;
        $l = strlen($text);
        $doIt = 1;
        for ($s = 0; $s < $l; $s++){
          if ($doIt){
            $result = $result.strtoupper(substr($text, $s, 1));
            $doIt = 0;
          }
          else {
            $result = $result.strtolower(substr($text, $s, 1));
            $doIt = 1;
          }
        }
        return $result;
      }
      //fuckUpText("supercanifragilistichespiralidoso");
      ?>
    </body>
</html>
