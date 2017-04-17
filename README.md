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
 		width: 717px;
 		height: 538px;
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
		border-radius: 50px;
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
		.close{
 		margin-left: 647px;
 		margin-top: 4px;
		width: 30px;
 		height: 30px;
 		cursor: pointer;
 	}
	
	class="myButton2"
	{  display: inline-block;
  font-size: 12px;
  color: none;
  text-decoration: none;
  padding: none;
  outline: none;
  border-right: 0px;
  border-top: 0px;
  background-color:none;
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
			function show2(state){
 
 					document.getElementById('window2').style.display = state;					
 			}
 			
 		</script>
 					<!-- Задний прозрачный фон-->
 		<div onclick="show('none')" id="wrap"></div>
 
 					<!-- Само окно-->
 			<div id="window">
			<left><button class="myButton2" onclick="show('none');show2('block')">АВТФ</button></left>
 						
 						 <!-- Картинка крестика-->
 				<img class="close" onclick="show('none')" src="https://image.flaticon.com/icons/svg/159/159691.svg">
 			</div>	
			<div id="window2">
			123
			</div>
    <meta charset="utf-8">
<p>Выберите тип сортировки компаний:</p>
	<left><button class="myButton" onclick="show2('none');show('block')">По наименованию факультета</button></left>
 <left><button class="myButton" onclick="show2('none');show('block')">По наименованию направления обучения</button></left>	
  </body>
  </html>
