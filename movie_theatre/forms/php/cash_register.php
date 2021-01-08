<?php
$connect = mysqli_connect("localhost", "root", "", "movie_theatre");

  $response = array();  //For ajax return data//

  $Rambo = $_POST['Rambo'];
  $Terminator= $_POST['Terminator'];
  $Bloodsport= $_POST['Bloodsport'];
  $Popcorn= $_POST['Popcorn'];
  $Soda= $_POST['Soda'];
  $Candy= $_POST['Candy'];

  $result = mysqli_query($connect, " INSERT INTO cash_register VALUES (NULL,'$Rambo','$Terminator','$Bloodsport','$Popcorn','$Soda','$Candy',now())");
  if ($result) {
      // $response['success'] = "success";
      $response['result'] = $result;
  } else {
      // $response['error'] = "error";
      $response['result'] = mysqli_error($connect);
  }

  echo(json_encode($response)); //Send return data to ajax

  mysqli_close($connect);  //Close link with database
