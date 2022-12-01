<?php

$hotels = [
  [
    'name' => 'Hotel Belvedere',
    'description' => 'Hotel Belvedere Descrizione',
    'parking' => true,
    'vote' => 4,
    'distance_to_center' => 10.4
  ],
  [
    'name' => 'Hotel Futuro',
    'description' => 'Hotel Futuro Descrizione',
    'parking' => true,
    'vote' => 2,
    'distance_to_center' => 2
  ],
  [
    'name' => 'Hotel Rivamare',
    'description' => 'Hotel Rivamare Descrizione',
    'parking' => false,
    'vote' => 1,
    'distance_to_center' => 1
  ],
  [
    'name' => 'Hotel Bellavista',
    'description' => 'Hotel Bellavista Descrizione',
    'parking' => false,
    'vote' => 5,
    'distance_to_center' => 5.5
  ],
  [
    'name' => 'Hotel Milano',
    'description' => 'Hotel Milano Descrizione',
    'parking' => true,
    'vote' => 2,
    'distance_to_center' => 50
  ],
];



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.css'
    integrity='sha512-bR79Bg78Wmn33N5nvkEyg66hNg+xF/Q8NA8YABbj+4sBngYhv9P8eum19hdjYcY7vXk/vRkhM3v/ZndtgEXRWw=='
    crossorigin='anonymous' />
  <title>Hotel</title>
</head>

<body>
  <div class="container">
    <table class="table">
      <thead>
        <tr>
          <?php
          foreach ($hotels[0] as $key => $value) echo "<th scope='col'> $key </th>";
          ?>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($hotels as $hotel): ?>
        <tr>
          <?php foreach ($hotel as $key => $item): ?>
          <td>
            <?php 
              if($key == 'parking'){
                if($item) echo 'true';
                else echo 'false';
              }else echo $item; 
            ?>
          </td>
          <?php endforeach; ?>
        </tr>
        <?php endforeach; ?>

      </tbody>
    </table>
  </div>
</body>



</html>