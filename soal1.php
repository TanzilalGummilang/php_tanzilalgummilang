<?php

$jml = $_GET['jml'];
echo "<table border=1 >";
for ($a = $jml; $a > 0; $a--)
{
  echo "<tr><td style=border:none; colspan=$jml>Total: $a</td></tr>";
  echo "<tr>";
  for ($b = $a; $b > 0; $b--)
  {
    echo "<td>$b</td>";
  }
  echo "</tr>";
}
echo "</table>";