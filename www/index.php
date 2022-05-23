

<!doctype html>
<html lang="ru">
<head>
	<link rel="shortcut icon" href="icon.ico" type="image/x-icon">
	<meta charset="UTF-8">
	<!--<script src="GetTXT_FromBd_By_Post.js"></script>-->
	<link rel="stylesheet" href="css/font-awesome.css" type="text/css">
	<link rel="stylesheet" href="style.css" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Cuprum" rel="stylesheet">
	<title>Все о электрогитарах</title>
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
			<li><a href="http://vseobelectrogitarah.ru/index.php"><i class="g-main">Главная</i></a></li>
			<li><a href="#"><i class="g-guitar">Электрогитары</i></a>
				<ul>
					<li><a href="#">Формфактор</a>
						<ul>
							<a href="Stratocaster.php">Stratocaster</a>
							<a href="Tele.php">Telecaster</a>
							<a href="SG.php">SG</a>
							<a href="FlyingV.php">Flying V</a>
							

						</ul>
					</li>
					<li><a href="#">Струны</a></li>
					<li><a href="#">Как устроена</a></li>
				</ul>	
			</li>

			<li><a href="#"><i class="g-guitarists">Гитаристы</i></a></li>
			<li><a href="#"><i class="g-history">История</i></a>
				<ul>
					<li><a href="#">Производители гитар</a>
						<ul>
							<a href="#">Fender</a>
							<a href="#">Gibson</a>
							<a href="#">Ibanez</a>
							<a href="epiphone.php">Epiphone</a>
							

						</ul>
					</li>
					<li><a href="#">Производители струн</a></li>
					
				</ul>
			</li>
			<li><a href="#"><i class="g-style">Техники игры</i></a></li>
		</ul>			
	</nav>
</header>
<table align="center" border="4" bordercolor="#000000" width="70%" height="4450px" bgcolor="#FFF5EE" cellpadding="25px">
        <tr>
			<td valign="top">
			<button type="button"name="Run" onclick="QWE()">Запуск скрипта </button>
			<p>
			
			
			
			
			
			
			
			<div>

<script type="text/javascript">
  /* Данная функция создаёт кроссбраузерный объект XMLHTTP */
  function getXmlHttp() {
    var xmlhttp;
    try { xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");} catch (e) {
		try { xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");} catch (E) { xmlhttp = false; }
    }
    if (!xmlhttp && typeof XMLHttpRequest!='undefined') { xmlhttp = new XMLHttpRequest();}
    return xmlhttp;
  }
  function summa(_a,_b,insertHtmlId) {
    var xmlhttp = getXmlHttp(); // Создаём объект XMLHTTP
    xmlhttp.open('POST', '_Post_1.php', true); // Открываем асинхронное соединение
    xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded'); // Отправляем кодировку
    xmlhttp.send("a=" + encodeURIComponent(_a) + "&b=" + encodeURIComponent(_b)); // Отправляем POST-запрос
	console.log(xmlhttp); 
    xmlhttp.onreadystatechange = function() { // Ждём ответа от сервера
      if (xmlhttp.readyState == 4) { // Ответ пришёл
        if(xmlhttp.status == 200) { // Сервер вернул код 200 (что хорошо)
          document.getElementById(insertHtmlId).innerHTML = xmlhttp.responseText; // Выводим ответ сервера
        }
      }
    };
  }
  function summa__(_a,_b,insertHtmlId) {
    var a = _a; // Считываем значение a
    var b = _b; // Считываем значение b
    var xmlhttp = getXmlHttp(); // Создаём объект XMLHTTP
    xmlhttp.open('POST', '_Post_1.php', true); // Открываем асинхронное соединение
    xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded'); // Отправляем кодировку
    xmlhttp.send("a=" + encodeURIComponent(a) + "&b=" + encodeURIComponent(b)); // Отправляем POST-запрос
	console.log(xmlhttp); 
    xmlhttp.onreadystatechange = function() { // Ждём ответа от сервера
      if (xmlhttp.readyState == 4) { // Ответ пришёл
        if(xmlhttp.status == 200) { // Сервер вернул код 200 (что хорошо)
          document.getElementById(insertHtmlId).innerHTML = xmlhttp.responseText; // Выводим ответ сервера
        }
      }
    };
  }
</script>
<div>
  <input type="text" name="a" id="a" />
  <br />
  <input type="text" name="b" id="b" />
  <br />
  <input type="button" value="Сумма" onclick="summa(document.getElementById('a').value,document.getElementById('b').value,'summa')" />
  <p>Сумма равна: <span id="summa"></span></p>
</div>
</div>
			

			
			
			
			
			
			
			
			
			
			<br>
<?php		
$conn = new mysqli("localhost", "Moderator", "270380","VseOElectroGitarah");
if($conn->connect_error){die("Ошибка: " . $conn->connect_error);}
$sql = 'SELECT * FROM first';
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result))
{
	print($row['text1']);
}
$conn->close();
?>



			</p></td>
		</tr>
	
		
   </table>	
</body>
</html>