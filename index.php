

<!doctype html>
<html lang="ru">
<head>
	<link rel="shortcut icon" href="icon.ico" type="image/x-icon">
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/font-awesome.css" type="text/css">
	<link rel="stylesheet" href="style.css" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Cuprum" rel="stylesheet">
	<title>��� � ��������������</title>
	<style>
      p
	{
		font-family: Geneva, Arial, Helvetica, sans-serif;
        font-size: 20pt;
        text-indent: 2em;
        text-align: justify;
	}
	</style>

</head>
<body>
<header>
	<nav class="dws-menu">
		<ul>
			<li><a href="http://vseobelectrogitarah.ru/index.php"><i class="g-main">�������</i></a></li>
			<li><a href="#"><i class="g-guitar">�������������</i></a>
				<ul>
					<li><a href="#">����������</a>
						<ul>
							<a href="Stratocaster.php">Stratocaster</a>
							<a href="Tele.php">Telecaster</a>
							<a href="SG.php">SG</a>
							<a href="FlyingV.php">Flying V</a>
							

						</ul>
					</li>
					<li><a href="#">������</a></li>
					<li><a href="#">��� ��������</a></li>
				</ul>	
			</li>

			<li><a href="#"><i class="g-guitarists">���������</i></a></li>
			<li><a href="#"><i class="g-history">�������</i></a>
				<ul>
					<li><a href="#">������������� �����</a>
						<ul>
							<a href="#">Fender</a>
							<a href="#">Gibson</a>
							<a href="#">Ibanez</a>
							<a href="epiphone.php">Epiphone</a>
							

						</ul>
					</li>
					<li><a href="#">������������� �����</a></li>
					
				</ul>
			</li>
			<li><a href="#"><i class="g-style">������� ����</i></a></li>
		</ul>			
	</nav>
</header>
<table align="center" border="4" bordercolor="#000000" width="70%" height="4450px" bgcolor="#FFF5EE" cellpadding="25px">
        <tr>
			<td valign="top"><p>
			
			<br>
<?php		
$conn = new mysqli("localhost", "Moderator", "270380","VseOElectroGitarah");
if($conn->connect_error){die("������: " . $conn->connect_error);}
$sql = 'SELECT * FROM first';
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result))
{
	print($row['text1']);
}
$conn->close();
?>

			</p></td>� 
		</tr>
		 <tr>
			<td valign="top"><p>


			</p></td>
		</tr>
	
		
   </table>	
</body>
</html>