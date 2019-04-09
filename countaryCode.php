<?php
$country = [
	"91" => "India",
    "92" => "Mexico City",
    "93" => "New York City",
    "94" => "Tokya",
    "95" => "Seoul",
    "96" => "Shanghai",
    "97" => "Lagos",
    "98" => "Buenos Aires",
    "99" => "Cairo",
    "86" => "London"];
echo "<center><h1>Different Country Codes</h1></center>";
echo "<table border='1' align='center'>
<tr>
<th>code</th>
<th>country</th>
</tr>";
foreach ($country as $key => $value) {
  echo "<tr>";
  echo "<td>".$key."</td>";
  echo "<td>".$value."</td>";
  echo "</tr>";
}
echo "</table>";
?>
