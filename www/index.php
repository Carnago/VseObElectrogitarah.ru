<?php
$PageId = "id_160923052022";
?>
<?php
//Вывод на экран параметра Get запроса
function Print_GET_Param($var_1){if($_GET[$var_1]==null){echo $var_1;echo "=null<br>";}else{echo $var_1;echo "=";echo  iconv( "UTF-8","windows-1251", $_GET[$var_1]);echo "<br>";}};
//Print_GET_Param("LogInn");
//Print_GET_Param("PassWord");
//Print_GET_Param("text");
//echo "!!!!!!!!!!!!!!!!!!!!";echo "<br>";


/*
//здесь была куча ошибок самого языка,
//Не удалять до лучших времен
if($_GET["text"]==null)echo 'if($_GET["text"]==null)<br>';
if($_GET["text"]<>null)echo 'if($_GET["text"]<>null)<br>';
if($_GET["LogInn"]==null)echo 'if($_GET["LogInn"]==null)<br>';
if($_GET["LogInn"]<>null)echo 'if($_GET["LogInn"]<>null)<br>';
if($_GET["PassWord"]==null)echo 'if($_GET["PassWord"]==null)<br>';
if($_GET["PassWord"]<>null)echo 'if($_GET["PassWord"]<>null)<br>';
$var_1="LogInn";
$Flag=iconv( "UTF-8","windows-1251", $_GET[$var_1]);
if($Flag=="Log"){echo 'if(iconv( "UTF-8","windows-1251", $_GET[$var_1])=="Log")';echo "<br>";}
$var_1="PassWord";
$Flag=iconv( "UTF-8","windows-1251", $_GET[$var_1]);
if($Flag=="Pass"){echo 'if(iconv( "UTF-8","windows-1251", $_GET[$var_1])=="Pass")';echo "<br>";}
*/
//При подстановке всех значений в строку где они применяются, строка переставала интерпритироваться
//После плясок вокруг программного кода получилось следующее

$var_1="LogInn";
$Flag_LogInn=iconv( "UTF-8","windows-1251", $_GET[$var_1]);
$var_1="PassWord";
$Flag_PassWord=iconv( "UTF-8","windows-1251", $_GET[$var_1]);
//При подстановке всех значений в строку где они применяются, строка переставала интерпритироваться
//После плясок вокруг программного кода получилось следующее
//Это фильтр при запуске
//Либо мы отображаем контент
//Либо мы его изменяем и потом отображаем
if($_GET["text"]<>null)if($_GET["LogInn"]<>null)if($_GET["PassWord"]<>null)
	if($Flag_LogInn=="Log")
		if($Flag_PassWord=="Pass")
{
	//Подключение к базе данных
	$conn = new mysqli("localhost", "Moderator", "270380","VseOElectroGitarah");
	//Исправление проблем с кодировкой PHP при передачи знаничений через через Get параметры
	$BHJFGUDSGFKJD=iconv( "UTF-8","windows-1251", $_GET["text"]);
	if($conn->connect_error){die("Ошибка: " . $conn->connect_error);}
//SQL код на обновление записи в базе данных в многострочной переменной
//Многострочная переменная использовалась
// по причине того что в интернете был пример с подстановкой в нее переменной PHP
$sql = <<<SQL
UPDATE `SecondText` SET `text`='$BHJFGUDSGFKJD' WHERE `ID_html`='$PageId';
SQL;//теперь - Выполнение самого запроса
	mysqli_query($conn, $sql);
	//Закрытие подключения к базе данных.//Закрывать нужно обязательно,
//	иначе открытые подключения будут висеть и оттягивать рессурсы.
	$conn->close();
}
?>
<script>
//JS функция Past запроса к PHP серверу.
//Ныне не используется , нами ...
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
	xmlhttp.open('POST', _PHP, true); // Открываем асинхронное соединение
	xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded'); // Отправляем кодировку
    xmlhttp.onload = function() { // Ждём ответа от сервера
		document.getElementById(insertHtmlId).innerHTML = xmlhttp.responseText; // Выводим ответ сервера
		xhr.abort();
    };
	xmlhttp.send(_Send_Params); // Отправляем POST-запрос
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
	button[name="function_120927052022"]
	{
		
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
					<li><a href="Str.php">Струны</a></li>
					<li><a href="Ust.php">Как устроена</a></li>
				</ul>	
			</li>

			<li><a href="Guit.php"><i class="g-guitarists">Гитаристы</i></a></li>
			<li><a href="#"><i class="g-history">История</i></a>
				<ul>
					<li><a href="#">Производители гитар</a>
						<ul>
							<a href="Fen.php">Fender</a>
							<a href="Gib.php">Gibson</a>
							<a href="Iba.php">Ibanez</a>
							<a href="epiphone.php">Epiphone</a>
							

						</ul>
					</li>
					<li><a href="PrStr.php">Производители струн</a></li>
					
				</ul>
			</li>
			<li><a href="Tec.php"><i class="g-style">Техники игры</i></a></li>
		</ul>			
	</nav>
</header>
<table align="center" border="4" bordercolor="#000000" width="70%" height="auto " bgcolor="#FFF5EE" cellpadding="25px">
        <tr>
			<td valign="top" >
				<div id="id_160923052022" >
<?php
//Получение контента из базы данных
//Из за особенностей языка кусок программного кода не работает будучи размещенным в теле функции
//Из за особенностей языка кусок програмного кода присутствует в файле целых 2 раза.
$conn = new mysqli("localhost", "Moderator", "270380","VseOElectroGitarah");
if($conn->connect_error){die("Ошибка: " . $conn->connect_error);}
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
				<button onclick='function_120927052022();'>ИзменитьКонтент</button>
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
			<td valign="top" id="id_120827052022" >
				<center>
					<form action="handler.php">
						<p><strong>Логин:</strong> 
						<input maxlength="25" size="40" name="login" id="LogInn" value="Log"></p>
						<p><strong>Пароль:</strong> 
						<input type="password" maxlength="25" size="40" name="password" id="PassWord" value="Pass"></p>
				<textarea id="id_160923052022_textarea" onchange="onchange_78452387478234();" id="skjfhgkdfgksdgjk">
<?php
//Получение контента из базы данных
//Из за особенностей языка кусок программного кода не работает будучи размещенным в теле функции
//Из за особенностей языка кусок програмного кода присутствует в файле целых 2 раза.
	$conn = new mysqli("localhost", "Moderator", "270380","VseOElectroGitarah");
	if($conn->connect_error){die("Ошибка: " . $conn->connect_error);}
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
<script defer>
console.log(document.getElementById("LogInn"));
console.log(document.getElementById("LogInn").value);
console.log(document.getElementById("PassWord"));
console.log(document.getElementById("PassWord").value);
</script>
<script>
	function onchange_78452387478234()
	{
		//JavaScript Get запрос к PHP файлу на открытие в новой вкладке
		//С шифрованием передааемых параметров через encodeURI
		alert("Вы уверены?");
		window.open("http://vseobelectrogitarah.ru/index.php"
			+"?"
			+"LogInn="+encodeURIComponent(document.getElementById("LogInn").value)
			+"&"
			+"PassWord="+encodeURIComponent(document.getElementById("PassWord").value)
			+"&"
			+"text="+encodeURIComponent(document.getElementById("id_160923052022_textarea").value)
		);
		var wegfdhfdfhfbhn="?a="+encodeURIComponent(document.getElementById("skjfhgkdfgksdgjk").value);
		console.log("werwerw");
		window.close();
	}
</script>						
						
					</form>
				</center>
			</td>
		</tr>
		<script defer>
			//php Post Запрос который выдерает контент
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