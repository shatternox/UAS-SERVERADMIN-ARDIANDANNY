<?php

	$db['db_host'] = "db";
	$db['db_user'] = "danny";
	$db['db_pass'] = "67sunE#hvJX%sQ918p@ZC!AyaR";
	$db['db_name'] = "Trucorp";

	foreach($db as $key => $value){

	    define(strtoupper($key), $value);

	}

	$connect = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ardian Danny - 230184303</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">Jabatan</th>
    </tr>
  </thead>
  <tbody>
      <?php
            $query = "SELECT * FROM users";
            $result = $connect->query($query);
            
            while($row = $result->fetch_assoc()){
                ?>
                <tr>
                    <th scope="row"><?= $row['ID'] ?></th>
                    <td><?= $row['Name'] ?></td>
                    <td><?= $row['Alamat'] ?></td>
                    <td><?= $row['Jabatan'] ?></td>
                </tr>
                echo "test2";
                <?php
            }
      ?>
    </tbody>
</table>      
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>    
</body>
    
