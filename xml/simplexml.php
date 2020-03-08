<?php
	/*
	ЗАДАНИЕ 1
	- Создайте объект и загрузите в него документ
	*/
	$sxml = simplexml_load_file('catalog.xml');
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
$i=0;
for ($i=0; $i<=count($sxml); $i++){
    if ($sxml->book[$i]){
       echo '<tr>';
        echo '<td>'. $sxml->book[$i]->author.'</td>';
        echo '<td>'. $sxml->book[$i]->title.'</td>';
        echo '<td>'. $sxml->book[$i]->pubyear.'</td>';
        echo '<td>'. $sxml->book[$i]->price.'</td>';
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