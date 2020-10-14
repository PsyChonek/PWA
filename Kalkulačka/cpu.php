  <?php
      $a = $_POST['a'];
      $b = $_POST['b'];

      // Oprava (,) místo (.)
      $a = str_replace(',', '.', $a);
      $b = str_replace(',', '.', $b);

      // String na číslo
      $a += 0;
      $b += 0;

      $znamenko = $_POST['znamenko'];
      $vysledek = 0;
      $c = 0;
      $z = 0;

      echo '<body style="text-align:center; padding-top:5%; font-size:30pt;">';
      echo "Výsledek: " ;

      switch ($znamenko) {
        case "+":

            $vysledek = $a + $b;
            echo $vysledek;
          break;

        case "-":

            $vysledek = $a - $b;
            echo $vysledek;
          break;

        case "*":

            for ($b; $b > 0; $b--){ $vysledek += $a;}
            echo $vysledek;
          break;

        case "/":

            if ($b == 0){
              echo "Nelze dělit nulou!";
            }
            else if (gettype($a) == "integer" && gettype($b) == "integer" && $a >= $b ){
              while ($a >= $b) {
                $a -= $b;
                $c++;
                $z = $a;
              }
              echo "<br><br> c =  $c <br> z = $z";
            }
            else {
              $vysledek = $a / $b;
              echo round($vysledek, 2);
            }
          break;

      }
      echo '<br><br><a href="index.html">Zpět</a>';
      echo '</body>';
   ?>
