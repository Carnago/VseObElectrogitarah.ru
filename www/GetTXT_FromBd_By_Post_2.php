<?php
  $a = $_POST["a"];  
$conn = new mysqli("localhost", "Moderator", "270380","VseOElectroGitarah");
if($conn->connect_error){die("Ошибка: " . $conn->connect_error);}
//$sql = 'SELECT ID_html, TEXT FROM `SecondText`'; /*  нужно суметь в текстувую переменную подставить переменную php */
//$sql = "SELECT ID_html, TEXT FROM `SecondText` WHERE ID_html='id_160923052022'";
$sql = <<<SQL
SELECT ID_html, TEXT FROM `SecondText` WHERE ID_html='$a';
SQL;
//
$result = mysqli_query($conn, $sql);
echo('<br>');
while ($row = mysqli_fetch_array($result))
{
	//echo($row['ID_html']);
	echo($row['TEXT']);
}
$conn->close();
?>