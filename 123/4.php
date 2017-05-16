<!DOCTYPE html>
<html>
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf8'>
    <title>TABLE FILTER</title>
    <style>
        body {
            font-family: "Helvetica";
            font-size: medium;
        }
        table {
            border-collapse: collapse;
            text-align: center;
            margin: auto;
        }
        table td, table th {
            border: solid 1px #aaa;
            padding: 10px;
        }
        table tbody tr:nth-child(2n) {
            background: #a8d7ff;
        }
        table tbody tr:hover {
            background: #fffcb6;
        }
    </style>
</head>
<body>

<h1>Фильтр данных в таблицах.</h1>

<table>
    <thead>
    <tr>
        <th>Символы</th>
        <th>Текст</th>
        <th>Цифры</th>
        <th>Цифры</th>
        <th>Текст</th>
    </tr>
    <tr>
        <td>
            <input type="checkbox" id="charA" value="A" />A
            <input type="checkbox" id="charB" value="B" />B
            <input type="checkbox" id="charC" value="C" />C
        </td>
        <td>
            <input id="text" />
        </td>
        <td>
            <select id="digits">
                <option value="">---</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
        </td>
        <td>
            <input type="radio" name="digit" id="radioZ" value="" checked="true" />-
            <input type="radio" name="digit" id="radioA" value="1" />1
            <input type="radio" name="digit" id="radioB" value="2" />2
            <input type="radio" name="digit" id="radioC" value="3" />3
        </td>
        <td>
            <input id="regexp" />
        </td>
    </tr>
    </thead>
    <tbody id="target">
    <tr>
        <td>B</td><td>Арбуз</td><td>2</td><td>3</td><td>Фанат</td>
    </tr>
    <tr>
        <td>B</td><td>Стрелок</td><td>1</td><td>2</td><td>Арба</td>
    </tr>
    <tr>
        <td>C</td><td>Фанат</td><td>3</td><td>1</td><td>Стрелок</td>
    </tr>
    <tr>
        <td>C</td><td>Стрелок</td><td>2</td><td>1</td><td>Фантомас</td>
    </tr>
    <tr>
        <td>B</td><td>Стрелок</td><td>1</td><td>2</td><td>Арбуз</td>
    </tr>
    <tr>
        <td>C</td><td>Фанат</td><td>3</td><td>3</td><td>Стрелок</td>
    </tr>
    <tr>
        <td>A</td><td>Арбуз</td><td>2</td><td>2</td><td>Арбуз</td>
    </tr>
    <tr>
        <td>A</td><td>Фанат</td><td>1</td><td>1</td><td>Стрелочник</td>
    </tr>
    <tr>
        <td>C</td><td>Фанат</td><td>3</td><td>3</td><td>Арбуз</td>
    </tr>
    <tr>
        <td>B</td><td>Фанат</td><td>2</td><td>3</td><td>Фантик</td>
    </tr>
    <tr>
        <td>C</td><td>Стрелок</td><td>1</td><td>1</td><td>Арбуз</td>
    </tr>
    <tr>
        <td>C</td><td>Фанат</td><td>3</td><td>2</td><td>Стрелка</td>
    </tr>
    </tbody>
</table>
<script src="http://php-zametki.ru/js/sh/scripts/shCore.js"></script>
<script src="http://php-zametki.ru/js/sh/scripts/shBrushXml.js"></script>
<script src="http://php-zametki.ru/js/sh/scripts/shBrushJScript.js"></script>
<script>SyntaxHighlighter.all();</script>
<script src="filterTable.v1.0.min.js"></script>
<script>
    filterTable( document.getElementById("target"), {
            /* Фильтр для первого столбца чекбоксы: */
            0: new filterTable.Filter([ /* Элементы фильтра */
                    document.getElementById("charA"),
                    document.getElementById("charB"),
                    document.getElementById("charC")
                ],
                /* Коллбэк ф-ция валидации */
                function (value, filters, i) {
                    /* Если чекбокс не отмечен - его значение не учавствует
                       в валидации поэтому мы обязаны вернуть true */
                    if (false === filters[i].checked) return true;
                    /* Далее, при проверке, мы должны одновременно проверять
                       значения всех элементов набора при условии чекбокс
                       отмечен */
                    return filters[0].checked && filters[0].value === value ||
                            filters[1].checked && filters[1].value === value ||
                            filters[2].checked && filters[2].value === value;
                }
            ),
            /* Фильтр для второго столбца текстовое поле - только точное совпадение: */
            1: document.getElementById("text"),
            /* Фильтр для третьего столбца выпадающий список: */
            2: document.getElementById("digits"),
            /* Фильтр для четвертого столбца радио кнопки: */
            3: new filterTable.Filter([/* Элеменеты фильтра */
                    document.getElementById("radioZ"),
                    document.getElementById("radioA"),
                    document.getElementById("radioB"),
                    document.getElementById("radioC")
                ],
                /* Коллбэк ф-ция валидации */
                function (value, filters, i) {
                    /* В filters[0] - у нас радио кнопка "Не выбрано", если она
                       установлена фильтр не участвует в валидации и мы
                       обязаны вернуть true */
                    if (true === filters[0].checked) return true;
                    /* Если какая то радиокнопка отмечена и содержимое проверяемой
                      ячейки совпало то вернем true */
                    return filters[1].checked && filters[1].value === value ||
                           filters[2].checked && filters[2].value === value ||
                           filters[3].checked && filters[3].value === value;
                }
            ),
            /* Фильтр для пятого столбца Постепенный ввод слова: */
            4: new filterTable.Filter(document.getElementById("regexp"),
                /* Коллбэк ф-ция валидации */
                function (value, filters, i) {
                    return value.indexOf(filters[i].value) === 0;
                },
                /* Будем вызывать валидацию по событию onkeyup фильтра */
                "onkeyup"
            )
        }
    );
</script>

<!--
var jcomments=new JComments(130, 'com_content','/index.php?option=com_jcomments&amp;tmpl=component');
jcomments.setList('comments-list');
//-->

</body>
