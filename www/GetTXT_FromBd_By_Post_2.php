<?php
  $a = $_POST["a"];
  $b = $_POST["b"];
	echo($a);
	echo('<br><br>');
	echo($b);
	echo('<br><br>');
$conn = new mysqli("localhost", "Moderator", "270380","VseOElectroGitarah");
if($conn->connect_error){die("Ошибка: " . $conn->connect_error);}
$sql = 'SELECT ID_html, TEXT FROM `SecondText`';
//$sql = 'SELECT ID_html, TEXT FROM `SecondText` where ID_html='+$a;
$result = mysqli_query($conn, $sql);

echo('<br>');
while ($row = mysqli_fetch_array($result))
{
	echo($row['ID_html']);
	echo($row['TEXT']);
}
$conn->close();

?>