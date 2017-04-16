# Места прохождения практики для студентов НГТУ
<html>
<head>
</head>
<body>
  <meta charset="utf-8">
<select><option selected> Выберите тип сортировки компаний:</option>
<option>По наименованию факультета</option>
<option>По наименованию направления обучения</option></select>
<div class="b-container">
    Sample Text
    <a href="javascript:PopUpShow()">Show popup</a>
</div>
<div class="b-popup" id="popup1">
    <div class="b-popup-content">
        Text in Popup
    <a href="javascript:PopUpHide()">Hide popup</a>
    </div>
</div>
<script src="http://code.jquery.com/jquery-2.0.2.min.js"></script>
<script>
    $(document).ready(function(){
        //Скрыть PopUp при загрузке страницы    
        PopUpHide();
    });
    //Функция отображения PopUp
    function PopUpShow(){
        $("#popup1").show();
    }
    //Функция скрытия PopUp
    function PopUpHide(){
        $("#popup1").hide();
    }
</script>
<style>{
    font-family: Areal;
}
.b-container{
    width:200px;
    height:150px;
    background-color: #ccc;
    margin:0px auto;
    padding:10px;
    font-size:30px;
    color: #fff;
}
.b-popup{
    width:100%;
    min-height:100%;
    background-color: rgba(0,0,0,0.5);
    overflow:hidden;
    position:fixed;
    top:0px;
}
.b-popup .b-popup-content{
    margin:40px auto 0px auto;
    width:100px;
    height: 40px;
    padding:10px;
    background-color: #c5c5c5;
    border-radius:5px;
    box-shadow: 0px 0px 10px #000;
}
</style>
</body>
</html>
