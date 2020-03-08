<?php
	/*
	ЗАДАНИЕ 1
	- Опишите функцию-обработчик начальных тегов
	- Опишите функцию-обработчик закрывающих тегов
	- Опишите функцию-обработчик текстового содержимого
	- Создайте парсер
	- Зарегистрируйте функцию-обработчики начальных и конечных тегов
	- Зарегистрируйте функцию-обработчик текстового содержимого
	*/
    function ErrorOutput() {
        ini_set('error_reporting', E_ALL);
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
    }

    ErrorOutput();

	function onStart($parser, $tag, $attributes){
        if ($tag !== 'CATALOG' and $tag != 'BOOK')
            echo '<td>';

        if ($tag=='BOOK')
            echo '<tr>';
    }
    function onEnd($parser, $tag){
        if  ($tag != 'CATALOG' and $tag != 'BOOK')
            echo '</td>';
        if ($tag=='BOOK')
            echo '</tr>';
    }
    function onText($parser, $data){
        echo $data;
    }
    $parser = xml_parser_create('utf-8');
    xml_set_element_handler($parser,'onStart','OnEnd');
    xml_set_character_data_handler($parser,'onText');
?>
<html>
	<head>
		<title>Каталог</title>
	</head>
	<body>
	<h1>Каталог книг</h1>
	<table border="1" width="100%">
		<tr>
			<th>Автор</th>
			<th>Название</th>
			<th>Год издания</th>
			<th>Цена, руб</th>
		</tr>
	<?php
		/*
		ЗАДАНИЕ 2
		- Запустите парсер
		*/
    xml_parse($parser,file_get_contents("catalog.xml"));
	?>
	</table>
	</body>
</html>