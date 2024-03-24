<?php
  $num = $_POST["number"];
echo  "<TABLE border='1'>";
for ($i=1; $i <= 10; $i++) { 
    echo "<tr><td>$num X $i </td>";
    echo "<td>".$num * $i ."</td> </tr>";
}
echo "</TABLE>";
?>