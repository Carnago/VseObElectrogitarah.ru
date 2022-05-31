<?php
echo $_POST["L"];
echo '<br>';
echo $_POST["P"];
echo '<br>';

//$a=$_POST["a"];
//$Log=$_POST["Pass"];
//$Pass=$_POST["Log"];
$POST_Log='Pass';
$POST_Pass='Log';

$conn = new mysqli("localhost", "Moderator", "270380","VseOElectroGitarah");
if($conn->connect_error){die("Ошибка: " . $conn->connect_error);}
//$sql = 'SELECT Log,Pass FROM `Zahod`'; /*  нужно суметь в текстувую переменную подставить переменную php */
$sql = <<<SQL
SELECT Log, Pass FROM Zahod 
WHERE 1 and 1 and Log = '$POST_Pass' and Pass = '$POST_Log';
SQL;

$result = mysqli_query($conn, $sql);
echo('<br>');
$e=0;
while ($row = mysqli_fetch_array($result))
{
	/*
	echo($row['Log']);
	echo('<br>');
	echo($row['Pass']);
	echo('<br>');
	echo('<br>');
	*/
	$e=$e+1;
}
echo($e);
$conn->close();
//http://vseobelectrogitarah.ru/_IAdmin.php?login=Log&password=Pass
?>