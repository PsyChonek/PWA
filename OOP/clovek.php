<?php

  class Clovek
  {
    private $jmeno;

    public function __construct($jmeno)
    {
      $this->jmeno=$jmeno;
    }

    public function __destruct()
    {
      echo('<br> Objekt je pryč');
    }

    public function pozdrav()
    {
      echo('Ahoj, já jsem '. $this->jmeno);
    }

    public static function naDruhou($cislo)
    {
      return $cislo*$cislo;
    }
  }

 ?>
