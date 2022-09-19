<?php
  $name = $_POST['name'];
  $age = $_POST['age'];
?>

<form method="POST" action="soal2d.php">
  <input type="hidden" name="name" value="<?= $name; ?>">
  <input type="hidden" name="age" value="<?= $age; ?>">
  <label>
    Hobi Anda:
    <input type="text" name="hobby">
  </label>
  <br><br>
  <button type="submit">submit</button>
</form>