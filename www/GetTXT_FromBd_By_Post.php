<?php
$a = $_POST["a"];
  $b = $_POST["b"];
  echo $a + $b;
/*
$conn = new mysqli("localhost", "Moderator", "270380","VseOElectroGitarah");
if($conn->connect_error){die("Ошибка: " . $conn->connect_error);}
$sql = 'SELECT * FROM first';
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result))
{
	echo($row['text1']);
}
$conn->close();
*/
/*
$conn = new mysqli("localhost", "Moderator", "270380","VseOElectroGitarah");
if($conn->connect_error){die("Ошибка: " . $conn->connect_error);}
$sql = 'SELECT ID_html, TEXT FROM `SecondText`';
$result = mysqli_query($conn, $sql);
echo($a);
echo('<br>');
while ($row = mysqli_fetch_array($result))
{
	echo($row['ID_html']);
	echo($row['TEXT']);
}
$conn->close();
*/
?>