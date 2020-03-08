<?php
    session_start();
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);

/*
	ЗАДАНИЕ 1
	- Запустите сессию
	- Создайте переменную nChars(количество выводимых на картинке символов)
		и присвойте ей произвольное значение(рекомендуемое: 5)
	- Сгенерируйте случайную строку длиной nChars символов
	- Создайте сессионную переменную randStr и присвойте ей сгенерированную строку
	*/

	$nChars = 5;
    function getName($nChars) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';

    for ($i = 0; $i < $nChars; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }
    return $randomString;
}
    $rndStr = getName($nChars);
    $_SESSION['randStr'] = $rndStr;
/*
ЗАДАНИЕ 2
- Создайте изображение на основе файла "images/noise.jpg"
- Создайте цвет для рисования
- Включите сглаживание
- Задайте начальные координаты x и y для отрисовки строки(рекомендуемые: 20 и 30)
- Используя цикл for отрисуйте строку посимвольно
- Для каждого символа используйте случайные значение размера и угла наклона
- Отдайте полученный результат как jpeg-изображение с 10% сжатием
*/
//	$img = imagecreatefromjpeg('images/noise.jpg');
//	imageantialias($img,true);
//	$blue = imagecolorallocate($img,'0','0','255');
//	$text = imagettftext($img, 20,30,300,150,$blue,'fonts/bellb.ttf',$rndStr);
// Создаём пустое изображение и добавляем текст

$img = imagecreatefromjpeg('images/noise.jpg');
$text_color = imagecolorallocate($img, 0, 0, 0);

$str = $rndStr;
$arrString = str_split($str);
$i=50;
foreach ($arrString as $s) {
    $i = $i+15;
    imagettftext($img, rand(23, 28),rand(0, 30),$i,30,$text_color,'fonts/bellb.ttf',$s);
}

//imagettftext($img, 24,0,55,30,$text_color,'fonts/bellb.ttf',$rndStr);
// Устанавливаем тип содержимого в заголовок, в данном случае image/jpeg
header('Content-Type: image/jpeg');

// Выводим изображение
imagejpeg($img);

// Освобождаем память
imagedestroy($img);
