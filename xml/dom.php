<?php
	/*
	ЗАДАНИЕ 1
	- Создайте объект DOM
	- Загрузите XML-документ в объект
	- Получите корневой элемент
	*/

	$dom = new DOMDocument(1.0);
	$dom->load('catalog.xml');
	$root = $dom->documentElement;

	$bookDOM = $dom->createElement('book');
    $titleDOM = $dom->createElement('title','Кевин Митник');

    $bookDOM->appendChild($titleDOM);
    $root->appendChild($bookDOM);

//    $dom->save("newcatalog.xml");
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

foreach ($root->childNodes as $book){
    if($book->nodeType == 1){
        echo '<tr>';
        foreach ($book->childNodes as $item) {
            if ($item->nodeType == 1){
                echo '<td>';
                echo $item->textContent;
                echo '</td>';
            }
        }
        echo '</tr>';
    }
}

	/*
	ЗАДАНИЕ 2
	- Заполните таблицу необходимыми данными
	*/
?>
	</table>
</body>
</html>





