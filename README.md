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
 	
 	#window{
 		width: 400px;
 		height: 400px;
 		margin: 50px auto;
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
 	
 	.close{
 		margin-left: 364px;
 		margin-top: 4px;
 		cursor: pointer;
 	}
 	
 </style>
 </head>
 <body>
 		<script type="text/javascript">
 
 					//Функция показа
 			function show(state){
 
 					document.getElementById('window').style.display = state;			
 					document.getElementById('wrap').style.display = state; 			
 			}
 			
 		</script>
 					<!-- Задний прозрачный фон-->
 		<div onclick="show('none')" id="wrap"></div>
 
 					<!-- Само окно-->
 			<div id="window">
 						
 						 <!-- Картинка крестика-->
 				<img class="close" onclick="show('none')" src="http://sergey-oganesyan.ru/wp-content/uploads/2014/01/close.png">
 					
 						<!-- Картинка ipad'a-->
 				<img  style="margin: 20px 0 0 50px;" src="http://sergey-oganesyan.ru/wp-content/uploads/2014/01/ipad.png">
 				
 			</div>
 
 		<center><button class="myButton" onclick="show('block')">Показать окно</button></center>	
    <meta charset="utf-8">
  <select><option selected> Выберите тип сортировки компаний:</option>
  <option>По наименованию факультета</option>
  <option>По наименованию направления обучения</option></select>
  <option class="myButton" onclick="show('block')">Показать окно</option></select>
  </body>
  </html>
