

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
<table align="center" border="4" bordercolor="#000000" width="70%" height="4450px" bgcolor="#FFF5EE" cellpadding="25px">
        <tr>
			<td valign="top">
			<button type="button"name="Run" onclick="QWE()">������ ������� </button>
			<p>
			
			<div>

<script type="text/javascript">
  /* ������ ������� ������ ��������������� ������ XMLHTTP */
  function getXmlHttp() {
    var xmlhttp;
    try { xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");} catch (e) {
		try { xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");} catch (E) { xmlhttp = false; }
    }
    if (!xmlhttp && typeof XMLHttpRequest!='undefined') { xmlhttp = new XMLHttpRequest();}
    return xmlhttp;
  }
  function summa(_a,_b,insertHtmlId) {
    var xmlhttp = getXmlHttp(); // ������ ������ XMLHTTP
    xmlhttp.open('POST', '_Post_1.php', true); // ��������� ����������� ����������
    xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded'); // ���������� ���������
    xmlhttp.send("a=" + encodeURIComponent(_a) + "&b=" + encodeURIComponent(_b)); // ���������� POST-������
	console.log(xmlhttp); 
    xmlhttp.onreadystatechange = function() { // ��� ������ �� �������
      if (xmlhttp.readyState == 4) { // ����� ������
        if(xmlhttp.status == 200) { // ������ ������ ��� 200 (��� ������)
          document.getElementById(insertHtmlId).innerHTML = xmlhttp.responseText; // ������� ����� �������
        }
      }
    };
  }
  function summa_1(_a,_b,insertHtmlId) {
    var xmlhttp = getXmlHttp(); // ������ ������ XMLHTTP
    xmlhttp.open('POST', 'GetTXT_FromBd_By_Post_1.php', true); // ��������� ����������� ����������
    xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded'); // ���������� ���������
	xmlhttp.send(); // ���������� POST-������
	console.log(xmlhttp); 
    xmlhttp.onreadystatechange = function() { // ��� ������ �� �������
      if (xmlhttp.readyState == 4) { // ����� ������
        if(xmlhttp.status == 200) { // ������ ������ ��� 200 (��� ������)
          document.getElementById(insertHtmlId).innerHTML = xmlhttp.responseText; // ������� ����� �������
        }
      }
    };
  }
  function summa_2(_a,_b,insertHtmlId) {
    var xmlhttp = getXmlHttp(); // ������ ������ XMLHTTP
    xmlhttp.open('POST', 'GetTXT_FromBd_By_Post_2.php', true); // ��������� ����������� ����������
    xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded'); // ���������� ���������
    xmlhttp.send("a=id_160923052022" + "&b=" + encodeURIComponent(5)); // ���������� POST-������
	console.log(xmlhttp); 
    xmlhttp.onreadystatechange = function() { // ��� ������ �� �������
      if (xmlhttp.readyState == 4) { // ����� ������
        if(xmlhttp.status == 200) { // ������ ������ ��� 200 (��� ������)
          document.getElementById(insertHtmlId).innerHTML = xmlhttp.responseText; // ������� ����� �������
        }
      }
    };
  }
////////////////////////////////////////////////////////  
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
	xmlhttp.send(_Send_Params); // ���������� POST-������
    xmlhttp.onreadystatechange = function() { // ��� ������ �� �������
      if (xmlhttp.readyState == 4) { // ����� ������
        if(xmlhttp.status == 200) { // ������ ������ ��� 200 (��� ������)
          document.getElementById(insertHtmlId).innerHTML = xmlhttp.responseText; // ������� ����� �������
        }
      }
    };
}
function Test_Post() {
	Post('GetTXT_FromBd_By_Post_2.php',"a=id_160923052022" + "&b=" + encodeURIComponent(5),'summa');
}
</script>
<div>
  <input type="text" name="a" id="a" />
  <br/>
  <input type="text" name="b" id="b" />
  <br/>
  <!--
  <input type="button" value="�����" onclick="summa_2(document.getElementById('a').value,document.getElementById('b').value,'summa')" />
  -->
  <script defer>
	Test_Post();
	//summa_2(document.getElementById('a').value,document.getElementById('b').value,'summa');
  </script>
  <p><!--����� �����:--><span id="summa"></span></p>
</div>
</div>
<br>
			</p></td>
		</tr>
   </table>	
</body>
</html>