<head>
	<meta charset="utf-8" />
    <title>Таблица Шульте</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<ul>
<li><a href="/">Игра</a></li>
<li><a href="/top.php?getlast=1">Последние 10 игр</a></li>
<li><a href="/top.php?getrecords=1">Рекорды</a></li>
</ul>
</body>
<?php

if (!empty($_GET['times'])) {
  	$times = trim($_GET['times']);
	$times = stripslashes($times);
	$times = htmlspecialchars($times);
	$typeg = trim($_GET['type']);
	$typeg = stripslashes($typeg);
	$typeg = htmlspecialchars($typeg);
	$timeg = trim($_GET['timeg']);
	$timeg = stripslashes($timeg);
	$timeg = htmlspecialchars($timeg);
	$host = 'localhost'; // адрес сервера
	$database = 'shulte'; // имя базы данных
	$user = 'root'; // имя пользователя
	$password = 'z39S7i1Yg80Ser'; // пароль
	// подключаемся к серверу
	$link = mysqli_connect($host, $user, $password, $database) 
	    or die("Ошибка " . mysqli_error($link));
	$timeb = strval(intval(time()));
	$query ="INSERT INTO top (timeg,timescore,type) VALUES ('$timeg','$times','$typeg')";
	$result = mysqli_query($link, $query); 
	// закрываем подключение
	mysqli_close($link);

	}
if (!empty($_GET['getlast'])) {
	$host = 'localhost'; // адрес сервера
	$database = 'shulte'; // имя базы данных
	$user = 'root'; // имя пользователя
	$password = 'z39S7i1Yg80Ser'; // пароль
	// подключаемся к серверу
	$link = mysqli_connect($host, $user, $password, $database) 
	    or die("Ошибка " . mysqli_error($link));
	$timeb = strval(intval(time()));
	$query ="SELECT * FROM top ORDER BY id DESC LIMIT 10";
	$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
	echo "<div style=\"padding-top:40px;\"><center><h1>Последние 10 игр</h1><table><tr><th>Дата</th><th>Время игры</th><th>Тип игры</th></tr>";
	if($result)
	{
	    while($row = mysqli_fetch_array($result)){
	    $name=$row['timeg'];
	    $name = date("d/m/Y",$name);
	    $country_code=$row['timescore'];
	    $population=$row['type'];
	    echo "<tr><td><center>".$name."</center></td><td><center>".$country_code."</center></td><td><center>".sqrt($population)."x".sqrt($population)."</center></td></tr>";
    }
    echo "</table></center></div>";
	}

	}
if (!empty($_GET['getrecords'])) {
	$host = 'localhost'; // адрес сервера
	$database = 'shulte'; // имя базы данных
	$user = 'root'; // имя пользователя
	$password = 'z39S7i1Yg80Ser'; // пароль
	// подключаемся к серверу
	$link = mysqli_connect($host, $user, $password, $database) 
	    or die("Ошибка " . mysqli_error($link));
	$timeb = strval(intval(time()));
	$query ="SELECT * FROM top WHERE type='9' ORDER BY timescore*(-1) DESC LIMIT 10";
	$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
	echo "<div style=\"padding-top:40px;\"><center><h1>ТОП 10 игр 3х3</h1><table><tr><th>Дата</th><th>Время игры</th><th>Тип игры</th></tr>";
	if($result)
	{
	    while($row = mysqli_fetch_array($result)){
	    $name=$row['timeg'];
	    $name = date("d/m/Y",$name);
	    $country_code=$row['timescore'];
	    $population=$row['type'];
	    echo "<tr><td><center>".$name."</center></td><td><center>".$country_code."</center></td><td><center>".sqrt($population)."x".sqrt($population)."</center></td></tr>";
    }
    echo "</table></center></div>";
	}
	$query ="SELECT * FROM top WHERE type='16' ORDER BY timescore*(-1) DESC LIMIT 10";
	$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
	echo "<div style=\"padding-top:40px;\"><center><h1>ТОП 10 игр 4х4</h1><table><tr><th>Дата</th><th>Время игры</th><th>Тип игры</th></tr>";
	if($result)
	{
	    while($row = mysqli_fetch_array($result)){
	    $name=$row['timeg'];
	    $name = date("d/m/Y",$name);
	    $country_code=$row['timescore'];
	    $population=$row['type'];
	    echo "<tr><td><center>".$name."</center></td><td><center>".$country_code."</center></td><td><center>".sqrt($population)."x".sqrt($population)."</center></td></tr>";
    }
    echo "</table></center></div>";
	}
	$query ="SELECT * FROM top WHERE type='25' ORDER BY timescore*(-1) DESC LIMIT 10";
	$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
	echo "<div style=\"padding-top:40px;\"><center><h1>ТОП 10 игр 5х5</h1><table><tr><th>Дата</th><th>Время игры</th><th>Тип игры</th></tr>";
	if($result)
	{
	    while($row = mysqli_fetch_array($result)){
	    $name=$row['timeg'];
	    $name = date("d/m/Y",$name);
	    $country_code=$row['timescore'];
	    $population=$row['type'];
	    echo "<tr><td><center>".$name."</center></td><td><center>".$country_code."</center></td><td><center>".sqrt($population)."x".sqrt($population)."</center></td></tr>";
    }
    echo "</table></center></div>";
	}
	$query ="SELECT * FROM top WHERE type='36' ORDER BY timescore*(-1) DESC LIMIT 10";
	$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
	echo "<div style=\"padding-top:40px;\"><center><h1>ТОП 10 игр 6х6</h1><table><tr><th>Дата</th><th>Время игры</th><th>Тип игры</th></tr>";
	if($result)
	{
	    while($row = mysqli_fetch_array($result)){
	    $name=$row['timeg'];
	    $name = date("d/m/Y",$name);
	    $country_code=$row['timescore'];
	    $population=$row['type'];
	    echo "<tr><td><center>".$name."</center></td><td><center>".$country_code."</center></td><td><center>".sqrt($population)."x".sqrt($population)."</center></td></tr>";
    }
    echo "</table></center></div>";
	}

	}

?>