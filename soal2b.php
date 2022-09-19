<?php 
  $name = $_POST['name'];
?>

<form method="POST" action="soal2c.php">
  <input type="hidden" name="name" value="<?= $name; ?>">
  <label>
    Umur Anda:
    <input type="text" name="age">
  </label>
  <br><br>
  <button type="submit">submit</button>
</form>