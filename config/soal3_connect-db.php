<?php

$connection = mysqli_connect('localhost', 'root', '', 'import');

function getData($query)
{
  global $connection;
  $result = mysqli_query($connection, $query);

  if (!$result) {
    echo mysqli_error($connection);
  }

  $data = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
  }

  return $data;
}