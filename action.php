<!DOCTYPE html>
<html lang="cz" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Action</title>
  </head>
  <body>

    <?php
      $a = $_POST["a"];
      $b = $_POST["b"];
      $c = $_POST["c"];

      $min = $b;
      $max = $a;
      $average = 0;

      $pole = array();
      for ($P=0; $P <= $c; $P++) {
        $pole[]=rand($a,$b);
      }



      foreach ($pole as $cislo) {
        if ($min >  $cislo) {
          $min = $cislo;
        }
        if ($max <  $cislo) {
          $max = $cislo;
        }
        $average += $cislo;
      }
      echo "Min: $min" ;
      echo "<br>";
      echo "Max: $max";
      echo "<br>";
      echo "Součet: $average";
      echo "<br>";
      $average /= $c;
      echo "Průměr: $average";
      echo "<br><br>";



      foreach ($pole as $cislo) {
        echo $cislo;
        echo "<br>";
      }
     ?>

  </body>
</html>
