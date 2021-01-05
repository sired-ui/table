<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Таблица Шульте</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script>
    	function shuffle(arr) {
		    return arr.sort(function() {return 0.5 - Math.random()});
		}
   		function CreateTable(argс) {
   			var element=document.getElementById('game');
   			var newdiv = document.getElementById("find");
   			var timeu = document.getElementById("timer");
			if(!element){
			var arr = [];
			arg = Math.pow(argс,2);
			for (var i = 1; i <= arg; i++) {
				arr.push(i);
			}
			var alltr = Math.sqrt(Number(arr[arr.length-1]));
			shuffle(arr);
			var num = 0;
			var table = document.createElement("TABLE");
			table.setAttribute("id","game");
			document.querySelectorAll("center")[0].appendChild(table);
			for (var i=0; i<alltr;i++){
				var tr = document.createElement("TR");
				for (var j=0; j<alltr;j++){
					var td = document.createElement("TD");
					td.appendChild(document.createTextNode(arr[num]));
					td.setAttribute("id", arr[num]);
					td.setAttribute("class", "number");
					tr.appendChild(td);
					table.appendChild(tr);
					num++;
				}
			}
			StartGame(arg);
			}else {
				element.parentNode.removeChild(element);
				if (newdiv) newdiv.parentNode.removeChild(newdiv);
				if (timeu) timeu.parentNode.removeChild(timeu);
					var arr = [];
				arg = Math.pow(argс,2);
				for (var i = 1; i <= arg; i++) {
					arr.push(i);
				}
				var alltr = Math.sqrt(Number(arr[arr.length-1]));
				shuffle(arr);
				var num = 0;
				var table = document.createElement("TABLE");
				table.setAttribute("id","game");
				document.querySelectorAll("center")[0].appendChild(table);
				for (var i=0; i<alltr;i++){
					var tr = document.createElement("TR");
					for (var j=0; j<alltr;j++){
						var td = document.createElement("TD");
						td.appendChild(document.createTextNode(arr[num]));
						td.setAttribute("id", arr[num]);
						td.setAttribute("class", "number");
						tr.appendChild(td);
						table.appendChild(tr);
						num++;
					}
				}
				StartGame(arg);
			}
        }
        function StartGame(arg){
        	var time1 = Date.now();
        	newdiv = document.createElement("DIV");
        	newdiv.setAttribute("id","find")
        	newdiv.appendChild(document.createTextNode("Найдите цифру 1"));
        	document.querySelectorAll("center")[0].appendChild(newdiv);
			check = 1;
			table = document.getElementById("game");
			table.onclick = function(event) {
	            t=event.target||event.srcElement; 
	         	if (Number(t.getAttribute("id")) == check){
	         		check++;
	         		if (check!=arg+1){
	         			t.setAttribute("style","color:black;");
	         			var newdiv = document.getElementById("find");
	         			newdiv.innerHTML = "Найдите цифру "+String(check);
	         			t.setAttribute("style","color:white;");
	         		}else{
	         			var newdiv = document.getElementById("find");
	         			newdiv.innerHTML = "Игра завершена";
	         			var time2 = Date.now();
	         			var timeg = Math.round((time2-time1)/1000);
	         			var time3 = Math.round((time2-time1)/1000);
						var h = time3/3600 ^ 0 ;
						var m = (time3-h*3600)/60 ^ 0 ;
						var s = time3-h*3600-m*60 ;
						time3 = (h<10?"0"+h:h)+" ч. "+(m<10?"0"+m:m)+" мин. "+(s<10?"0"+s:s)+" сек.";
	         			timeu = document.createElement("DIV");
			        	timeu.setAttribute("id","timer")
			        	timeu.appendChild(document.createTextNode("Ваше время: "+time3));
			        	document.querySelectorAll("center")[0].appendChild(timeu);
						var xhr = new XMLHttpRequest();
						  xhr.open('GET', '/top.php?times='+timeg+'&type='+arg+'&timeg='+Math.round(Date.now()/1000), true); // url = нужный вам адрес
						  xhr.send(null);

						  xhr.onreadystatechange = function(){
						    if (xhr.readyState != 4) return; // если нет ошибок возвращаем нужный текст
						   }
	         		}
	         	}
    		}
        	}
    </script>
</head>
<body>
	<center>
<ul>
<li><a href="/">Игра</a></li>
<li><a href="/top.php?getlast=1">Последние 10 игр</a></li>
<li><a href="/top.php?getrecords=1">Рекорды</a></li>
</ul>
<br>
<div style="padding-top: 40px;">
<a onclick="CreateTable(3)" class="select">3x3</a>
<a onclick="CreateTable(4)" class="select">4x4</a>
<a onclick="CreateTable(5)" class="select">5x5</a>
<a onclick="CreateTable(6)" class="select">6x6</a>
</div>
</center>
</body>
</html>