<?php
$PageId = "id_160923052022";
if($_GET["text"]==null)
{
	echo "Exception";
    echo "<br>";
}
else{
	echo  iconv( "UTF-8","windows-1251", $_GET["text"]);
	echo "<br>";
}
?>				
<script defer>
alert('<?php $_GET["text"]?>');
</script>
<script>
function Post(_PHP,_Send_Params,insertHtmlId) {
	function Get_XmlHttp() {
		var xmlhttp;
		try { xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");} catch (e) {
			try { xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");} catch (E) { xmlhttp = false; }
		}
		if (!xmlhttp && typeof XMLHttpRequest!='undefined') { xmlhttp = new XMLHttpRequest();}
		return xmlhttp;
	}
	var xmlhttp = Get_XmlHttp();
	xmlhttp.open('POST', _PHP, true); // ��������� ����������� ����������
	xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded'); // ���������� ���������
	
    xmlhttp.onload = function() { // ��� ������ �� �������
		document.getElementById(insertHtmlId).innerHTML = xmlhttp.responseText; // ������� ����� �������
		xhr.abort();
    };
	xmlhttp.send(_Send_Params); // ���������� POST-������
	
}
</script>


<!doctype html>
<html lang="ru">
<head>
	<link rel="shortcut icon" href="icon.ico" type="image/x-icon">
	-
	<!--<script src="GetTXT_FromBd_By_Post.js"></script>-->
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
	<!--
	button[name="Run"]
	{
		padding: 10px 25px;
		border: none;
	}
	-->
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
<table align="center" border="4" bordercolor="#000000" width="70%" height="auto " bgcolor="#FFF5EE" cellpadding="25px">
        <tr>
			<td valign="top" >
				<div id="id_160923052022" >
<?php
$conn = new mysqli("localhost", "Moderator", "270380","VseOElectroGitarah");
if($conn->connect_error){die("������: " . $conn->connect_error);}
$sql = <<<SQL
SELECT ID_html, TEXT FROM `SecondText` WHERE ID_html='$PageId';
SQL;
$result = mysqli_query($conn, $sql);
echo('<br>');
while ($row = mysqli_fetch_array($result))
{
	echo($row['TEXT']);
}
$conn->close();
?>
				</div>
				<button onclick='function_120927052022();'>���������������</button>
				<script>
				function function_120927052022() {
					if(document.getElementById('id_120827052022').style.visibility=='visible')
					{document.getElementById('id_120827052022').style.visibility='hidden';}
					else
					{document.getElementById('id_120827052022').style.visibility='visible';}
				}
				</script>
			</td>
			
		</tr>
		<tr >
			<td valign="top" id="id_120827052022">


				<center>
					<form action="handler.php">
						<p><strong>�����:</strong> 
						<input maxlength="25" size="40" name="login" id="LogInn" value="Log"></p>
						<p><strong>������:</strong> 
						<input type="password" maxlength="25" size="40" name="password" id="PassWord" value="Pass"></p>
				<textarea id="id_160923052022_textarea" onchange="onchange_78452387478234();" id="skjfhgkdfgksdgjk">
<?php
	$conn = new mysqli("localhost", "Moderator", "270380","VseOElectroGitarah");
	if($conn->connect_error){die("������: " . $conn->connect_error);}
$sql = <<<SQL
SELECT ID_html, TEXT FROM `SecondText` WHERE ID_html='$PageId';
SQL;
	$result = mysqli_query($conn, $sql);
	echo('<br>');
	while ($row = mysqli_fetch_array($result))
	{
		echo($row['TEXT']);
	}
	$conn->close();
	
?>
</textarea>
<script>
	function onchange_78452387478234()
	{
		alert("dfkgoldfjghkjdlk");
		window.open("http://vseobelectrogitarah.ru/index.php"
			+"?text="+encodeURIComponent(document.getElementById("id_160923052022_textarea").value)
		);
		console.log("werwerw");
		window.close();
	}
</script>						
						
					</form>
				</center>
			</td>
		</tr>
		<script defer>
			//php Post ������ ������� �������� �������
			//Post('GetTXT_FromBd_By_Post_2.php',"a=id_160923052022",'id_160923052022');
			//Post('GetTXT_FromBd_By_Post_2.php',"a=id_160923052022",'id_160923052022_textarea');
			
			//
			//Post('_IAdmin_Step1.php',"",'id_160923052022');
			//var  L=document.getElementById("LogInn").value;
			//var  P=document.getElementById("PassWord").value;
			//Post('/IAdmin.php',"a=id_160923052022"+"&L="+L+"&P="+P,'id_160923052022_textarea');
			
		</script>
   </table>	
</body>
</html>