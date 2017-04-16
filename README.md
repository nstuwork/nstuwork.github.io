# Места прохождения практики для студентов НГТУ
<html>
 <head>
  <meta charset="utf-8">
  <title>Тег SELECT</title>
 </head>
<body>
	
	
	<select><option selected> Выберите тип сортировки компаний:</option>
	<option>По наименованию факультета</option>
	<option>По наименованию направления обучения</option>
	       <div id="dialog" title="Basic dialog">
	       <form method='post' action='test.php'>
	       <input type='text' name='renameFile'>
                <input type='submit' value='Ok'>
            </form>
        </div>
        <div><input type='button' value='форма'></div>
        <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
        <script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
        <script>
            var dialog = $("#dialog").dialog({autoOpen: false});
            $("input[type=button]").click(function ()
                {
                dialog.dialog( "open" );
                });
        </script>

	
</select>
</body>
</html>
