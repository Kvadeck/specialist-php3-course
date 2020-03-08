<?php
/* ЗАДАНИЕ 1
- Подключите файл с описанием класса GbookDB
- Создайте объект gbook, экземпляр класса GbookDB
- Создайте переменную $errMsg со строковым значением "" (пустая строка)
*/

include 'GbookDB.class.php';
$gbook = new GbookDB();
$gbook->ErrorOutput();
$errMsg = '';

/* ЗАДАНИЕ 3
- Проверьте, была ли отправлена HTML-форма?
- Если ДА, то подключите файл с кодом для обработки HTML-формы
*/
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    include 'savepost.inc.php';
}
if (isset($_GET["del"]))
    include 'deletepost.inc.php';
/*
ЗАДАНИЕ 5
- Проверьте, был ли запрос методом GET на удаление записи
- Если ДА, то подключите файл с кодом для удаления записи
*/
?>

<!doctype>
<html>
<head>
	<title>Гостевая книга</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
</head>
<style>
    html{
        background: #464646;
        color: white;
        padding: 15px;
    }
    input {
        margin-bottom: 15px;
    }
     .guest-inner {
         display: block;
         width: 50%;
     }
</style>
<body>

<h1>Гостевая книга</h1>
<?php
/* ЗАДАНИЕ 2
- Проверьте, не является ли переменная $errMsg пустой строкой?
- Если НЕТ, то выведите значение переменной $errMsg
*/
if ($errMsg){
    echo $errMsg;
}
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
Ваше имя:<br />
<input type="text" name="name" /><br />
Ваш e-mail:<br />
<input type="text" name="email" /><br />
Сообщение:<br />
<textarea name="msg" cols="50" rows="5"></textarea><br />
<br />
<input type="submit" name="submit" value="Добавить!" />

</form>

<?php
/*
ЗАДАНИЕ 4
- Подключите файл с кодом для обработки полученных записей Гостевой книги
*/
include 'getall.inc.php';
?>

</body>
</html>