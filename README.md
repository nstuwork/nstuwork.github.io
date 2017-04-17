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
 			
 		</script>
 			<div id="window1">
			123
			</div>		
			<div id="window2">
			123
			</div>
    <meta charset="utf-8">
<p>Выберите тип сортировки компаний:</p>
	<left><button class="myButton" onclick="show2('none');show2('block')">По наименованию факультета</button></left>
 <left><button class="myButton" onclick="show2('none');show2('block')">По наименованию направления обучения</button></left>	
  </body>
  </html>
