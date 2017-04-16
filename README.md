# Места прохождения практики для студентов НГТУ
<html>
<head>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<!--
<link rel="stylesheet" type="text/css" href="tmp.css" />
-->
<style type="text/css">
.info {
display: none;
}
.info.on {
display: block;
}
</style>
<script type="text/javascript">
$(function (){
    $('#map > a').click(function (){
        var id=$(this).data('info');
        $('#info > .on').removeClass('on');
        $('#'+id).addClass('on');
    });
});
</script>
</head>
<body>
<div id='map'>
    <a href='#' data-info='itm1'>1</a>
    <a href='#' data-info='itm2'>2</a>
    <a href='#' data-info='itm3'>3</a>
</div>
<div id='info'>
    <div class='info' id='itm1'>один</div>
    <div class='info' id='itm2'>два</div>
    <div class='info' id='itm3'>три</div>
</div>
  <meta charset="utf-8">
	<select><option selected> Выберите тип сортировки компаний:</option>
	<option>По наименованию факультета</option>
	<option>По наименованию направления обучения</option>
</select>
</body>
</html>
