<?php
/*$date1 = "14-07-2019";
  $format =strtotime($date1);
  echo date('W', $format);

  echo "<br><br>";

  /*----2---*/
  /*$date2 = new DateTime(date("d-m-Y"));
  $date3 = new DateTime("03-02-2023");
  $inter = $date3-> diff($date2);
  echo $inter -> d;

  echo "<br><br>";

  /*----3----*/
  /*$annee = 2023;
  if(date("L", mktime(0,0,0,1,1,$annee))==1){
      echo "bissextile";
  }
  else{
      echo "non bissextile";
  }
  
  echo "<br><br>";

  /*----4----*/
  /*$datePattern = "/^\d{4}\-(0?[1-9]|1[012])\-(0?[1-9]|[12][0-9]|3[01])$/";
  $date = "2019-17-32";
  
  if (preg_match($datePattern, $date))
  {
            for ($a=0; $a <= $nbr; $a++) {
                $table .= '<tr>';
                for ($b=0; $b <= $nbr2 ; $b++) {
                    $table .= '<td>'.$a*$b.'</td>';
                }
      echo "Date ".$date." valide.<br>";
  }
  else
  {
      echo "Date ".$date." erronée.<br>";
  }

  echo "<br>";

  /*----5----*/
  /*echo date("H:i");

  echo "<br><br>";

  /*----6----*/
  /*$d = strtotime("+1 Month");
  echo date("d/m/Y", $d);
  
  echo "<br><br>";

  /*----7----*/
  /*echo date("d/m/Y",1000200000);*/
  ?>