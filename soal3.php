<?php

include 'config/soal3_connect-db.php';

$items = getData('SELECT person.nama, person.alamat, hobi.hobi FROM hobi JOIN person ON (person.id = hobi.person_id)');

if (isset($_POST['submit'])) {
  $searchByName = $_POST['search-by-name'];
  $searchByAddress = $_POST['search-by-address'];
  if (!$searchByName and !$searchByAddress) {
    $items = getData('SELECT person.nama, person.alamat, hobi.hobi FROM hobi JOIN person ON (person.id = hobi.person_id)');
  } else {
    $items = getData(
      "SELECT person.nama, person.alamat, hobi.hobi 
      FROM hobi 
      JOIN person ON (person.id = hobi.person_id) 
      WHERE nama LIKE '%$searchByName%' AND alamat LIKE '%$searchByAddress%'"
    );
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Soal 3</title>
</head>

<body>

  <div>
    <form action="soal3.php" method="post">
      <label>nama: </label>
      <input type="text" name="search-by-name">
      <br>
      <label>alamat: </label>
      <input type="text" name="search-by-address">
      <br>
      <button type="submit" name="submit">Search</button>
    </form>
    <br>
  </div>

  <table class="table" border="1" cellpadding="10" cellspacing="0">

    <thead>
      <tr>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Hobi</th>
      </tr>
    </thead>
    <tbody>

      <?php foreach ($items as $item) : ?>
        <tr>
          <td align="center"><?= $item['nama']; ?>"></td>
          <td align="center"><?= $item['alamat']; ?></td>
          <td align="center"><?= $item['hobi']; ?></td>
        </tr>
      <?php endforeach; ?>

    </tbody>
  </table>

</body>
</html>