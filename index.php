<?php
require __DIR__ . '/Models/Movie.php';
require __DIR__ . '/Models/listFilm.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elenco Film</title>
    <link rel="stylesheet" href="/style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    
<table class="table table-striped">
<thead>
    <tr>
    <th scope="row"></th>
      <th scope="col">TITLE</th>
      <th scope="col">VOTE</th>
      <th scope="col">genres</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach($listMovie as $movie){ ?>
        <tr>
        <th scope="row"></th>
            <td> <?php echo $movie->title; ?></td>
            <td> <?php echo $movie->vote; ?></td>
            <td > <?php echo $movie->genres; ?></td>
           
        </tr>
 <?php   } ?>

</table>
</body>
</html>