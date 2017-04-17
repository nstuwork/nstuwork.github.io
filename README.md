# Места прохождения практики для студентов НГТУ
 <html>
 <head>
 <meta http-equiv='Content-Type' content='text/html; charset=utf8'>
 <style type="text/css">
 	
 	#wrap{
 		display: none;
 		opacity: 0.8;
 		position: fixed;
 		left: 0;
 		right: 0;
 		top: 0;
 		bottom: 0;
 		padding: 16px;
 		background-color: rgba(1, 1, 1, 0.725);
 		z-index: 100;
 		overflow: auto;
 	}
	
 	#window1{
 		width: 717px;
 		height: 538px;
 		margin: 150px auto;
 		display: none;
 		background: #fff;
 		z-index: 200;
 		position: fixed;
 		left: 0;
 		right: 0;
 		top: 0;
 		bottom: 0;
 		padding: 16px;
 	}
 	
	#window2{
 		width: 717px;
 		height: 538px;
 		margin: 150px auto;
 		display: none;
 		background: #fff;
 		z-index: 200;
 		position: fixed;
 		left: 0;
 		right: 0;
 		top: 0;
 		bottom: 0;
 		padding: 16px;
 	}
	
	#window3{
 		width: 400px;
 		height: 400px;
 		margin: 150px auto;
 		display: none;
 		background: blue;
 		z-index: 200;
 		position: fixed;
 		left: 0;
 		right: 0;
 		top: 0;
 		bottom: 0;
 		padding: 16px;
 	}
		.close{
 		margin-left: 647px;
 		margin-top: 4px;
		width: 30px;
 		height: 30px;
 		cursor: pointer;
 	}
	
 
 	
 </style>
 </head>
 <body>
 		<script type="text/javascript">
 
 					//Функция показа
 			function show1(state){
 
 					document.getElementById('window1').style.display = state;					
 			}
			function show2(state){
 
 					document.getElementById('window2').style.display = state;					
 			}
			function show3(state){
 
 					document.getElementById('window3').style.display = state;					
 			}
 			
 		</script>
 			<div id="window1">
			<p><a onclick="show3('block')">АВТФ</a></p>
			<p><a href="tip.html">ИСТР</a></p>
			<p><a href="tip.html">МТФ</a></p>
			<p><a href="tip.html">РЭФ</a></p>
			<p><a href="tip.html">ФБ</a></p>
			<p><a href="tip.html">ФЛА</a></p>
			<p><a href="tip.html">ФМА</a></p>
			<p><a href="tip.html">ФПМИ</a></p>
			<p><a href="tip.html">ФТФ</a></p>
			<p><a href="tip.html">ФЭН</a></p>
			<p><a href="tip.html">ЮФ</a></p>
			</div>		
			<div id="window2">
			<p><a href="tip.html">ИТ</a></p>
			<p><a href="tip.html">Иностранные языки</a></p>
			<p><a href="tip.html">Маркетинг</a></p>
			<p><a href="tip.html">Материаловедение</a></p>
			<p><a href="tip.html">Менеджмент</a></p>
			<p><a href="tip.html">Проектирование технологических машин</a></p>
			<p><a href="tip.html">Психология и педогогика</a></p>
			<p><a href="tip.html">Менеджмент</a></p>
			<p><a href="tip.html">Работа в социальной сфере</a></p>
			<p><a href="tip.html">Радиотехника и электроника</a></p>
			<p><a href="tip.html">Регионоведение</a></p>
			<p><a href="tip.html">Самолето- и вертолетостроение</a></p>
			<p><a href="tip.html">Системы упрвления, боеприпасы и взрыватели (ФЛА)</a></p>
			<p><a href="tip.html">Химия</a></p>
			<p><a href="tip.html">Экология</a></p>
			<p><a href="tip.html">Экономика</a></p>
			<p><a href="tip.html">Электротехнологические установки</a></p>
			<p><a href="tip.html">Электроэнергетика и теплоэнергетика</a></p>
			<p><a href="tip.html">Юриспруденция</a></p>
			</div>
    <meta charset="utf-8">
<p>Выберите тип сортировки компаний:</p>
	<left><button class="myButton" onclick="show2('none');show1('block')">По наименованию факультета</button></left>
 <left><button class="myButton" onclick="show1('none');show2('block')">По наименованию направления обучения</button></left>	
  </body>
  </html>
