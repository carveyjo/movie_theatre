<?php
$connect = mysqli_connect("localhost", "root", "", "movie_theatre");

  function getcolumndata($row)
  {
      if ($row['Rambo'] == 1) {
          $Rambo = "Rambo: First blood: $10";
      } elseif ($row['Rambo']== 2) {
          $Rambo = "Rambo: First blood: $10 <br> Rambo: First blood: $10";
      } elseif ($row['Rambo']== 3) {
          $Rambo = "Rambo: First blood: $10 <br> Rambo: First blood: $10 <br> Rambo: First blood: $10";
      } elseif ($row['Rambo']== 4) {
          $Rambo = "Rambo: First blood: $10 <br> Rambo: First blood: $10 <br> Rambo: First blood: $10 <br> Rambo: First blood: $10";
      } elseif ($row['Rambo']== 5) {
          $Rambo = "Rambo: First blood: $10 <br> Rambo: First blood: $10 <br> Rambo: First blood: $10 <br> Rambo: First blood: $10 <br> Rambo: First blood: $10";
      } elseif ($row['Rambo']== 6) {
          $Rambo = "Rambo: First blood: $10 <br> Rambo: First blood: $10 <br> Rambo: First blood: $10 <br> Rambo: First blood: $10
          <br> Rambo: First blood: $10 <br> Rambo: First blood: $10";
      } elseif ($row['Rambo']== 7) {
          $Rambo = "Rambo: First blood: $10 <br> Rambo: First blood: $10 <br> Rambo: First blood: $10 <br> Rambo: First blood: $10
          <br> Rambo: First blood: $10 <br> Rambo: First blood: $10 <br> Rambo: First blood: $10";
      } elseif ($row['Rambo']== 8) {
          $Rambo = "Rambo: First blood: $10 <br> Rambo: First blood: $10 <br> Rambo: First blood: $10 <br> Rambo: First blood: $10
          <br> Rambo: First blood: $10 <br> Rambo: First blood: $10 <br> Rambo: First blood: $10 <br> Rambo: First blood: $10";
      } elseif ($row['Rambo']== 9) {
          $Rambo = "Rambo: First blood: $10 <br> Rambo: First blood: $10 <br> Rambo: First blood: $10 <br> Rambo: First blood: $10
          <br> Rambo: First blood: $10 <br> Rambo: First blood: $10 <br> Rambo: First blood: $10 <br> Rambo: First blood: $10 <br> Rambo: First blood: $10";
      } elseif ($row['Rambo']== 10) {
          $Rambo = "Rambo: First blood: $10 <br> Rambo: First blood: $10 <br> Rambo: First blood: $10 <br> Rambo: First blood: $10
          <br> Rambo: First blood: $10 <br> Rambo: First blood: $10 <br> Rambo: First blood: $10 <br> Rambo: First blood: $10 <br> Rambo: First blood: $10 <br> Rambo: First blood: $10";
      } else {
          $Rambo = "";
      };
      if ($row['Terminator'] == 1) {
          $Terminator = "The Terminator: $20";
      } elseif ($row['Terminator']== 2) {
          $Terminator = "The Terminator: $20 <br> The Terminator: $20";
      } elseif ($row['Terminator']== 3) {
          $Terminator = "The Terminator: $20 <br> The Terminator: $20 <br> The Terminator: $20";
      } elseif ($row['Terminator']== 4) {
          $Terminator = "The Terminator: $20 <br> The Terminator: $20 <br> The Terminator: $20 <br> The Terminator: $20";
      } elseif ($row['Terminator']== 5) {
          $Terminator = "The Terminator: $20 <br> The Terminator: $20 <br> The Terminator: $20 <br> The Terminator: $20 <br> The Terminator: $20";
      } elseif ($row['Terminator']== 6) {
          $Terminator = "The Terminator: $20 <br> The Terminator: $20 <br> The Terminator: $20 <br> The Terminator: $20
          <br> The Terminator: $20 <br> The Terminator: $20";
      } elseif ($row['Terminator']== 7) {
          $Terminator = "The Terminator: $20 <br> The Terminator: $20 <br> The Terminator: $20 <br> The Terminator: $20
          <br> The Terminator: $20 <br> The Terminator: $20 <br> The Terminator: $20";
      } elseif ($row['Terminator']== 8) {
          $Terminator = "The Terminator: $20 <br> The Terminator: $20 <br> The Terminator: $20 <br> The Terminator: $20
          <br> The Terminator: $20 <br> The Terminator: $20 <br> The Terminator: $20 <br> The Terminator: $20";
      } elseif ($row['Terminator']== 9) {
          $Terminator = "The Terminator: $20 <br> The Terminator: $20 <br> The Terminator: $20 <br> The Terminator: $20
          <br> The Terminator: $20 <br> The Terminator: $20 <br> The Terminator: $20 <br> The Terminator: $20 <br> The Terminator: $20";
      } elseif ($row['Terminator']== 10) {
          $Terminator = "The Terminator: $20 <br> The Terminator: $20 <br> The Terminator: $20 <br> The Terminator: $20
          <br> The Terminator: $20 <br> The Terminator: $20 <br> The Terminator: $20 <br> The Terminator: $20 <br> The Terminator: $20 <br> The Terminator: $20";
      } else {
          $Terminator = "";
      };
      if ($row['Bloodsport'] == 1) {
          $Bloodsport = "Bloodsport: $15";
      } elseif ($row['Bloodsport']== 2) {
          $Bloodsport = "Bloodsport: $15 <br> Bloodsport: $15";
      } elseif ($row['Bloodsport']== 3) {
          $Bloodsport = "Bloodsport: $15 <br> Bloodsport: $15 <br> Bloodsport: $15";
      } elseif ($row['Bloodsport']== 4) {
          $Bloodsport = "Bloodsport: $15 <br> Bloodsport: $15 <br> Bloodsport: $15 <br> Bloodsport: $15";
      } elseif ($row['Bloodsport']== 5) {
          $Bloodsport = "Bloodsport: $15 <br> Bloodsport: $15 <br> Bloodsport: $15 <br> Bloodsport: $15 <br> Bloodsport: $15";
      } elseif ($row['Bloodsport']== 6) {
          $Bloodsport = "Bloodsport: $15 <br> Bloodsport: $15 <br> Bloodsport: $15 <br> Bloodsport: $15
          <br> Bloodsport: $15 <br> Bloodsport: $15";
      } elseif ($row['Bloodsport']== 7) {
          $Bloodsport = "Bloodsport: $15 <br> Bloodsport: $15 <br> Bloodsport: $15 <br> Bloodsport: $15
          <br> Bloodsport: $15 <br> Bloodsport: $15 <br> Bloodsport: $15";
      } elseif ($row['Bloodsport']== 8) {
          $Bloodsport = "Bloodsport: $15 <br> Bloodsport: $15 <br> Bloodsport: $15 <br> Bloodsport: $15
          <br> Bloodsport: $15 <br> Bloodsport: $15 <br> Bloodsport: $15 <br> Bloodsport: $15";
      } elseif ($row['Bloodsport']== 9) {
          $Bloodsport = "Bloodsport: $15 <br> Bloodsport: $15 <br> Bloodsport: $15 <br> Bloodsport: $15
          <br> Bloodsport: $15 <br> Bloodsport: $15 <br> Bloodsport: $15 <br> Bloodsport: $15 <br> Bloodsport: $15";
      } elseif ($row['Bloodsport']== 10) {
          $Bloodsport = "Bloodsport: $15 <br> Bloodsport: $15 <br> Bloodsport: $15 <br> Bloodsport: $15
          <br> Bloodsport: $15 <br> Bloodsport: $15 <br> Bloodsport: $15 <br> Bloodsport: $15 <br> Bloodsport: $15 <br> Bloodsport: $15";
      } else {
          $Bloodsport = "";
      };
      if ($row['Popcorn'] == 1) {
          $Popcorn = "Popcorn: $10";
      } elseif ($row['Popcorn']== 2) {
          $Popcorn = "Popcorn: $10 <br> Popcorn: $10";
      } elseif ($row['Popcorn']== 3) {
          $Popcorn = "Popcorn: $10 <br> Popcorn: $10 <br> Popcorn: $10";
      } elseif ($row['Popcorn']== 4) {
          $Popcorn = "Popcorn: $10 <br> Popcorn: $10 <br> Popcorn: $10 <br> Popcorn: $10";
      } elseif ($row['Popcorn']== 5) {
          $Popcorn = "Popcorn: $10 <br> Popcorn: $10 <br> Popcorn: $10 <br> Popcorn: $10 <br> Popcorn: $10";
      } elseif ($row['Popcorn']== 6) {
          $Popcorn = "Popcorn: $10 <br> Popcorn: $10 <br> Popcorn: $10 <br> Popcorn: $10
          <br> Popcorn: $10 <br> Popcorn: $10";
      } elseif ($row['Popcorn']== 7) {
          $Popcorn = "Popcorn: $10 <br> Popcorn: $10 <br> Popcorn: $10 <br> Popcorn: $10
          <br> Popcorn: $10 <br> Popcorn: $10 <br> Popcorn: $10";
      } elseif ($row['Popcorn']== 8) {
          $Popcorn = "Popcorn: $10 <br> Popcorn: $10 <br> Popcorn: $10 <br> Popcorn: $10
          <br> Popcorn: $10 <br> Popcorn: $10 <br> Popcorn: $10 <br> Popcorn: $10";
      } elseif ($row['Popcorn']== 9) {
          $Popcorn = "Popcorn: $10 <br> Popcorn: $10 <br> Popcorn: $10 <br> Popcorn: $10
          <br> Popcorn: $10 <br> Popcorn: $10 <br> Popcorn: $10 <br> Popcorn: $10 <br> Popcorn: $10";
      } elseif ($row['Popcorn']== 10) {
          $Popcorn = "Popcorn: $10 <br> Popcorn: $10 <br> Popcorn: $10 <br> Popcorn: $10
          <br> Popcorn: $10 <br> Popcorn: $10 <br> Popcorn: $10 <br> Popcorn: $10 <br> Popcorn: $10 <br> Popcorn: $10";
      } else {
          $Popcorn = "";
      };
      if ($row['Soda'] == 1) {
          $Soda = "Soda: $5";
      } elseif ($row['Soda']== 2) {
          $Soda = "Soda: $5 <br> Soda: $5";
      } elseif ($row['Soda']== 3) {
          $Soda = "Soda: $5 <br> Soda: $5 <br> Soda: $5";
      } elseif ($row['Soda']== 4) {
          $Soda = "Soda: $5 <br> Soda: $5 <br> Soda: $5 <br> Soda: $5";
      } elseif ($row['Soda']== 5) {
          $Soda = "Soda: $5 <br> Soda: $5 <br> Soda: $5 <br> Soda: $5 <br> Soda: $5";
      } elseif ($row['Soda']== 6) {
          $Soda = "Soda: $5 <br> Soda: $5 <br> Soda: $5 <br> Soda: $5
          <br> Soda: $5 <br> Soda: $5";
      } elseif ($row['Soda']== 7) {
          $Soda = "Soda: $5 <br> Soda: $5 <br> Soda: $5 <br> Soda: $5
          <br> Soda: $5 <br> Soda: $5 <br> Soda: $5";
      } elseif ($row['Soda']== 8) {
          $Soda = "Soda: $5 <br> Soda: $5 <br> Soda: $5 <br> Soda: $5
          <br> Soda: $5 <br> Soda: $5 <br> Soda: $5 <br> Soda: $5";
      } elseif ($row['Soda']== 9) {
          $Soda = "Soda: $5 <br> Soda: $5 <br> Soda: $5 <br> Soda: $5
          <br> Soda: $5 <br> Soda: $5 <br> Soda: $5 <br> Soda: $5 <br> Soda: $5";
      } elseif ($row['Soda']== 10) {
          $Soda = "Soda: $5 <br> Soda: $5 <br> Soda: $5 <br> Soda: $5
          <br> Soda: $5 <br> Soda: $5 <br> Soda: $5 <br> Soda: $5 <br> Soda: $5 <br> Soda: $5";
      } else {
          $Soda = "";
      };
      if ($row['Candy'] == 1) {
          $Candy = "Candy: $3";
      } elseif ($row['Candy']== 2) {
          $Candy = "Candy: $3 <br> Candy: $3";
      } elseif ($row['Candy']== 3) {
          $Candy = "Candy: $3 <br> Candy: $3 <br> Candy: $3";
      } elseif ($row['Candy']== 4) {
          $Candy = "Candy: $3 <br> Candy: $3 <br> Candy: $3 <br> Candy: $3";
      } elseif ($row['Candy']== 5) {
          $Candy = "Candy: $3 <br> Candy: $3 <br> Candy: $3 <br> Candy: $3 <br> Candy: $3";
      } elseif ($row['Candy']== 6) {
          $Candy = "Candy: $3 <br> Candy: $3 <br> Candy: $3 <br> Candy: $3
          <br> Candy: $3 <br> Candy: $3";
      } elseif ($row['Candy']== 7) {
          $Candy = "Candy: $3 <br> Candy: $3 <br> Candy: $3 <br> Candy: $3
          <br> Candy: $3 <br> Candy: $3 <br> Candy: $3";
      } elseif ($row['Candy']== 8) {
          $Candy = "Candy: $3 <br> Candy: $3 <br> Candy: $3 <br> Candy: $3
          <br> Candy: $3 <br> Candy: $3 <br> Candy: $3 <br> Candy: $3";
      } elseif ($row['Candy']== 9) {
          $Candy = "Candy: $3 <br> Candy: $3 <br> Candy: $3 <br> Candy: $3
          <br> Candy: $3 <br> Candy: $3 <br> Candy: $3 <br> Candy: $3 <br> Candy: $3";
      } elseif ($row['Candy']== 10) {
          $Candy = "Candy: $3 <br> Candy: $3 <br> Candy: $3 <br> Candy: $3
          <br> Candy: $3 <br> Candy: $3 <br> Candy: $3 <br> Candy: $3 <br> Candy: $3 <br> Candy: $3";
      } else {
          $Candy = "";
      };
      $TotalCost = ($row['RamboTotal']+$row['TerminatorTotal']+$row['BloodsportTotal']+$row['PopcornTotal']+$row['SodaTotal']+$row['CandyTotal']);
      $ReceiptOutput = ($Rambo. " <br> " .$Terminator. " <br> " .$Bloodsport. " <br> " .$Popcorn. " <br> " .$Soda. " <br> ".$Candy. "<br> - <br> TOTAL: $" .$TotalCost);

      return array(
        $ReceiptOutput
    );
  };

        $query = "SELECT *, Rambo*10 AS RamboTotal, Terminator*20 AS TerminatorTotal, Bloodsport*15 AS BloodsportTotal,
        Popcorn*10 AS PopcornTotal, Soda*5 AS SodaTotal, Candy*3 AS CandyTotal
        FROM cash_register
        ORDER BY id DESC
        LIMIT 1";

  $responseArray=array("data" => array());

  if (mysqli_multi_query($connect, $query)) {
      do {
          if ($result = mysqli_store_result($connect)) {
              while ($row = mysqli_fetch_array($result)) {
                  $temp = getcolumndata($row);
                  array_push($responseArray['data'], $temp);
              };
              mysqli_free_result($result);
          };
      } while (mysqli_next_result($connect));
  } else {
      $result = mysqli_query($connect, $query);
      echo $result;
      while ($row = mysqli_fetch_array($result)) {
          $temp = getcolumndata($row);
          array_push($responseArray['data'], $temp);
      };
  };




  echo json_encode($responseArray);
  mysqli_close($connect);
