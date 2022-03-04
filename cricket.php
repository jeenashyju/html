<html>
<head><title>hello world</title></head>
<body>
<?php
$cricket=array("virat","dhonu","sachyin","sewag");
echo"displaying name in table format";
echo"<br>       <br/>";
echo"name of cricket players stored in an array<br/>";
print_r($cricket);
echo"<br><br>name of cricket players stored in an table<br/>";
echo"<br><table border=2><tr><th>players names</th></tr><br/>";
echo"<tr><td>$cricket[0]</td></tr>";
echo"<tr><td>$cricket[1]</td></tr>";
echo"<tr><td>$cricket[2]</td></tr>";
echo"<tr><td>$cricket[3]</td></tr>";
echo"</table>";
?>
</body>

</html>
