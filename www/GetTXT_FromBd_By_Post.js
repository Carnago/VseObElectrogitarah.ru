function getXmlHttp() {
    var xmlhttp;
    try {xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");} catch (e) {
		try {xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");} catch (E) {xmlhttp = false;}
    }
    if (!xmlhttp && typeof XMLHttpRequest!='undefined') {xmlhttp = new XMLHttpRequest();}
    return xmlhttp;
  }
  function GetTXT_FromBd_By_Post(_id) {
	var a = 75; // Считываем значение a
    var b = 25; // Считываем значение b
    var xmlhttp = getXmlHttp(); // Создаём объект XMLHTTP
    xmlhttp.open('POST', '_Post_1.php', true); // Открываем асинхронное соединение
    xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded'); // Отправляем кодировку
    xmlhttp.send("a=" + encodeURIComponent(a) + "&b=" + encodeURIComponent(b)); // Отправляем POST-запрос
	xmlhttp.onreadystatechange = function() { // Ждём ответа от сервера
      if (xmlhttp.readyState == 4) { // Ответ пришёл
        if(xmlhttp.status == 200) { // Сервер вернул код 200 (что хорошо)
			//alert(xmlhttp.responseText);
          return xmlhttp.responseText; // Выводим ответ сервера
        }
      }
    };
  }