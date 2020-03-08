<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

define("USERS_LOG","users.xml");

if ($_SERVER["REQUEST_METHOD"]=="POST"){

    $name = stripcslashes(trim(strip_tags($_POST["name"])));
    $email = stripcslashes(trim(strip_tags($_POST["email"])));
    $msg = stripcslashes(trim(strip_tags($_POST["msg"])));
    $ip = $_SERVER["REMOTE_ADDR"];
    $dt = time();

    $dom = new DOMDocument('1.0','utf8');
    $dom->formatOutput = true;
    $dom->preserveWhiteSpace=false;

    if (!file_exists(USERS_LOG)){
        $root = $dom ->createElement('users');
        $dom->appendChild($root);
    } else {
        $dom->load(USERS_LOG);
        $root=$dom->documentElement;
    }
    $n = $dom->createElement("name",$name);
    $e = $dom->createElement("email",$email);
    $m = $dom->createElement("msg",$msg);
    $i = $dom->createElement("ip",$ip);
    $d = $dom->createElement("datetime",$dt);

    $user = $dom->createElement("user");

    $user->appendChild($n);
    $user->appendChild($e);
    $user->appendChild($m);
    $user->appendChild($i);
    $user->appendChild($d);

    $root->appendChild($user);
    $dom->save(USERS_LOG);
    header("Location: gbook.php");exit;
}
/* 
ЗАДАНИЕ 1
- Создайте константу для хранения имени XML-файла
- Проверьте, была ли отправлена HTML-форма?
	Если она была отправлена: отфильтруйте полученные данные
- Получите данные об IP-адресе пользователя	
- Получите данные о текущих дате и времени
*/

/*
ЗАДАНИЕ 2
- Создайте объект DOMDocument
- Проверьте, существует ли xml-документ с данными
	Если существует, загрузите его в созданный объект
	и получите корневой элемент
	Если не существует, создайте корневой элемент "users"
	и привяжите его к объекту
*/

/*
ЗАДАНИЕ 3
- Cоздайте новый XML-элемент "user" для очередной записи
- Cоздайте XML-элементы для всех данных Гостевой книги:
	name, email, msg, IP, datetime
- Cоздайте текстовые узлы для всех указанных элементов
- Привяжите текстовые узлы к соответствующим XML-элементам
- Привяжите XML-элементы с данными заказа к XML-элементу "user"
- Привяжите XML-элемент "user" к корневому элементу "users"
- Сохраните файл
- Перезапросите страницу для избавления от посланных данных
*/	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<title>Гостевая книга</title>
	<meta http-equiv="Content-Type" content="text/html;"/>
    <style>
        .guest-inner {
            display: block;
            width: 50%;
        }
    </style>
</head>
<body>

<h1>Гостевая книга</h1>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

Ваше имя:<br />
<input type="text" name="name" /><br />
Ваш E-mail:<br />
<input type="text" name="email" /><br />
Сообщение:<br />
<textarea name="msg" cols="50" rows="5"></textarea><br />
<br />
<input type="submit" value="Добавить!" />

</form>

<?php
/*
ЗАДАНИЕ 4
- Создайте объект SimpleXML и загрузите в него XML-документ
- Выведите в браузер все сообщения, а также информацию
  об авторе каждого сообщения в произвольной форме
  в обратном порядке
*/
if (file_exists(USERS_LOG)){

    $sxml = simplexml_load_file('users.xml');
    $users= (array)$sxml;

    if (is_array($users['user'])) {
        $users = array_reverse($users['user']);
    } else {
        $users = (array)$users['user'];
    }

    foreach ($users as $user){
        $dt = date('d-m-Y H:i:s',$user->datetime*1);
        $msg = nl2br($user->msg);
        echo <<<LABEL
    <div class="guest-inner">
    <hr>
    <p>
        <a href="mailto:$user->email">{$user->name}</a> from [{$user->ip}] @ {$dt}
        <br><p>{$msg}</p>
    </p>
    </div>
LABEL;

    }
}




?>

</body>
</html>