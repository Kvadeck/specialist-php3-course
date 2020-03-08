<?php
	/*
	ЗАДАНИЕ 1
	- Создайте класс User со свойствами name, login и password
	- Создайте три объекта, экземпляра класса User
	- Задайте произвольные значения свойств name, login и password для каждого из объектов
	*/

/*    class zadanie1 {
        public $name;
        public $login;
        public $password;
    }

    $copyzadanie = new zadanie1();
    $copyzadanie->name = 'Vasya';
    $copyzadanie->login = 'Terminator';
    $copyzadanie->password = '1234';

    $copyzadanie2 = new zadanie1();
    $copyzadanie2->name = 'Vasya';
    $copyzadanie2->login = 'Terminator';
    $copyzadanie2->password = '1234';

    $copyzadanie3 = new zadanie1();
    $copyzadanie3->name = 'Vasya';
    $copyzadanie3->login = 'Terminator';
    $copyzadanie3->password = '1234';*/


	/*
	ЗАДАНИЕ 2
	- В классе User опишите метод showInfo()
	- Метод showInfo() должен выводить значения свойств объектов
	- Вызовите метод showInfo() для каждого объекта
	*/

/*    class zadanie2 {
    public $name;
    public $login;
    public $password;

    function showInfo() {
        echo $this->name.'<br>';
        echo $this->login.'<br>';
        echo $this->password.'<br>';
    }
}
	$exempZadanie2 = new zadanie2();
    $exempZadanie2->name='Petya';
    $exempZadanie2->login='Terminator';
    $exempZadanie2->password='1234';

    $exempZadanie2->showInfo();*/

	/*
	ЗАДАНИЕ 3
	- В классе User опишите конструктор
	- Конструктор должен задавать начальные значения свойств name, login и password
	- Создайте заново три объекта, экземпляра класса User
	*/

	/*class User {

	    public $name;
        public $login;
        public $password;

        function __construct($n,$l,$p)
        {
            echo $this->name = $n.'<br>';
            echo $this->login = $l.'<br>';
            echo $this->password = $p.'<br>';
        }

        function showInfo() {
            echo $this->name.'<br>';
            echo $this->login.'<br>';
            echo $this->password.'<br>';
        }

    }*/

//    $exempZadanie3 = new User('Vasya', 'Terminator', '1234');

	/*
	ЗАДАНИЕ 4
	- В классе User опишите метод __clone()
	- Метод __clone() должен задавать начальные значения свойств по умолчанию при копировании объектов
	- Значения свойств по умолчанию: name = "Guest", login = "guest", password = "qwerty" 
	- Создайте четвёртый объект скопировав один из имеющихся объектов
	*/

    /*class zadanie4 {

        public $name;
        public $login;
        public $password;

        function __construct($n,$l,$p)
        {
            echo $this->name = $name.'<br>';
            echo $this->login = $login.'<br>';
            echo $this->password = $password.'<br>';
        }
        function __clone ()
        {
            echo $this->name = 'Guest'.'<br>';
            echo $this->login = 'guest'.'<br>';
            echo $this->password = 'qwerty'.'<br>';
        }
    }

    $exampZad4 = new zadanie4();
    $cloneZad4 = clone $exampZad4;*/

	/*
	ЗАДАНИЕ 5
	- Опишите класс SuperUser наследованный от класса User
	- В классе SuperUser опишите свойство role и создайте объект, экземпляр класса SuperUser
	- Задайте значение свойству role = "admin"
	- Вызовите метод showInfo() для созданного объекта 
	- Отдельно от метода showInfo() выведите значение свойства role
	*/

	/*class SuperUser extends User {
	    public $role;
    }
    $exempZadanie5 = new SuperUser('Vasya', 'Terminator', '1234');
    $exempZadanie5->role = 'Super Admin';
    $exempZadanie5->showInfo();
    echo $exempZadanie5->role;

	$role = $exempZadanie5->role = 'admin';
	$exempZadanie5->showInfo();
	echo $role;*/

	/*
	ЗАДАНИЕ 6
	- Опишите конструктор класса SuperUser, который будет задавать начальные значения свойств
	- В классе SuperUser опишите метод showInfo(), который будет выводить на экран значения всех свойств
	- Создайте заново объект класса SuperUser и вызовите метод showInfo().
	*/

    /*class User {

        public $name;
        public $login;
        public $password;

        function __construct($n,$l,$p)
        {
            echo $this->name = $n.'<br>';
            echo $this->login = $l.'<br>';
            echo $this->password = $p.'<br>';
        }

        function showInfo() {
            echo $this->name.'<br>';
            echo $this->login.'<br>';
            echo $this->password.'<br>';
        }
    }
	class Superuser extends User {

        public $role;

        function __construct($n,$l,$p,$r)
        {
            $this->name = $n;
            $this->login = $l;
            $this->password =$p;
            $this->role =$r;
        }

        function showInfo() {
            echo $this->name.'<br>';
            echo $this->login.'<br>';
            echo $this->password.'<br>';
            echo $this->role.'<br>';
        }

    }

    $zad6 = new Superuser('Vasya', 'Terminator', '1234','Super User');
    $zad6->showInfo();*/



	/*
	ЗАДАНИЕ 7
	- Измените конструктор класса SuperUser, вызвав родительский конструктор
	- Передайте родительскому конструктору необходимые значения
	- Измените метод showInfo() класса SuperUser, вызвав родительский метод showInfo()
	- Передайте родительскому методу необходимые значения
	*/

/*class User {

    public $name;
    public $login;
    public $password;

    function __construct($n,$l,$p)
    {
        $this->name = $n.'<br>';
        $this->login = $l.'<br>';
        $this->password = $p.'<br>';
    }

    function showInfo() {
        echo $this->name.'<br>';
        echo $this->login.'<br>';
        echo $this->password.'<br>';
    }
}
class Superuser extends User {

    public $role;

    function __construct($n,$l,$p,$r)
    {
       parent::__construct($n,$l,$p);
       $this->role =$r;
    }
    function showInfo() {
        parent::showInfo();
        echo $this->role.'<br>';
    }
}

$zad6 = new Superuser('Vasya', 'Terminator', '1234','Super User');
$zad6->showInfo();*/


	/*
	ЗАДАНИЕ 8
	- Сделайте все параметры конструктора класса User параметрами по умолчанию со значениями "пустая строка"("")
	- В конструкторе класса User генерируйте исключение, если введены не все данные
	- Опишите перехват исключения и выводите в браузер сообщение об ошибке
	- Попробуйте создать экземпляр класса User без какого-либо параметра(-ов)
	*/

/*    class User {

public $name;
public $login;
public $password;

function __construct($n='',$l='',$p='')
{
    try {
        $this->name = $n.'<br>';
        $this->login = $l.'<br>';
        $this->password = $p.'<br>';

        if ($n == '' || $l == '' || $p == ''){
            throw new Exception('Need all parameters');
        }
    } catch (exception $e){
        $e->getMessage();
    }
}

function showInfo() {
    echo $this->name.'<br>';
    echo $this->login.'<br>';
    echo $this->password.'<br>';
    }
}

    class Superuser extends User {

public $role;

function __construct($n,$l,$p,$r)
{
   parent::__construct($n,$l,$p);
   $this->role =$r;
}
function showInfo() {
    parent::showInfo();
    echo $this->role.'<br>';
    }
}

$zad6 = new User('Vasya', 'Terminator', '1234');
$zad6->showInfo();*/




	/*
	ЗАДАНИЕ 9
	- Создайте константу класса User INFO_TITLE
	- Присвойте константе INFO_TITLE строковое значение "Данные пользователя:"
	- Обратитесь к константе INFO_TITLE перед вызовами метода showInfo()
	- Запустите код и проверьте его работоспособность

	- Создайте метод showTitle() в классе User
	- Опишите метод showTitle(), чтобы он выводил в браузер значение константы INFO_TITLE
	- Обратитесь к метод showTitle() перед вызовами метода showInfo()
	*/
/*    class User {

    const INFO_TITLE = "<h1>User details:<br></h1>";

    public $name;
    public $login;
    public $password;

    function __construct($n,$l,$p)
    {
        $this->name = $n;
        $this->login = $l;
        $this->password = $p;
    }

    function showInfo() {
        echo $this->name.'<br>';
        echo $this->login.'<br>';
        echo $this->password.'<br>';
    }
    function showTitle() {
        echo self::INFO_TITLE;
    }
}
	$exemUser = new User('Vasya','terminator','qwerty');
    $exemUser->showTitle();
    $exemUser->showInfo();*/



	/*
	ЗАДАНИЕ 10
	- Создайте абстрактный класс AUser
	- В абстрактном классе AUser объявите абстрактный метод showInfo()
	- Обновите класс User, унаследовав его от абстрактного класса AUser
	- Внесите в класс User необходимые изменения
	- Запустите код и проверьте его работоспособность
	*/

/*	abstract class AUser {
      abstract function showInfo();
    }

class User extends AUser {

    const INFO_TITLE = "<h1>User details:<br></h1>";

    public $name;
    public $login;
    public $password;

    function __construct($n,$l,$p)
    {
        $this->name = $n;
        $this->login = $l;
        $this->password = $p;
    }

    function showInfo() {
        echo $this->name.'<br>';
        echo $this->login.'<br>';
        echo $this->password.'<br>';
    }
    function showTitle() {
        echo self::INFO_TITLE;
    }
}
    $exemUser = new User('Vasya','terminator','qwerty');
    $exemUser->showTitle();
    $exemUser->showInfo();*/

	/*
	ЗАДАНИЕ 11
	- Создайте интерфейс ISuperUser
	- В интерфейс ISuperUser объявите метод getInfo()
	- Опишите метод getInfo() в классе SuperUser
	- Метод getInfo() должен возвращать ассоциативный массив, в котором 
	  именами ячеек являются имена свойств объекта, а значениями ячеек - значения свойств объекта
	- Вызовите метод getInfo() для экземпляра класса SuperUser
	- В цикле выведите данные, полученные с помощью метода getInfo()
	*/

/*interface ISuperUser {
	   function getInfo();
}

class User {

    public $name;
    public $login;
    public $password;

    function __construct($n,$l,$p)
    {
        $this->name = $n;
        $this->login = $l;
        $this->password = $p;
    }

    function showInfo() {
        echo $this->name.'<br>';
        echo $this->login.'<br>';
        echo $this->password.'<br>';
    }
}
class Superuser extends User implements ISuperUser {

    public $role;

    function __construct($n,$l,$p,$r)
    {
       parent::__construct($n,$l,$p);
       $this->role =$r;
    }
    function showInfo() {
        parent::showInfo();
        echo $this->role.'<br>';
    }
    function getInfo()
    {
        // TODO: Implement getInfo() method.
        $arr = array();
        foreach ($this as $key=>$value){
            $arr[$key] = $value;
        }
        return $arr;
    }
}

$exemSuperUser = new Superuser('Vasya','Terminator','qwerty','Super Admin');
print_r($exemSuperUser->getInfo());*/


/*
ЗАДАНИЕ 12
- Опишите в классах User и SuperUser статические свойства для подсчета количества созданных объектов
- Присвойте этим свойствам начальные значения (0)
- В конструкторах инкрементируйте значения данных свойств
- После создания экземпляров классов User и SuperUser выведите в браузер количество тех и других объектов
*/
function __autoload($name) {
    include $name.'.php';
}

$exemUser = new User('Vasya','Terminator','qwerty');
$exemUser = new User('Petya','Terminator','qwerty');

$exemClone = clone $exemUser;

$exemSuperUser = new Superuser('Vasya','Terminator','qwerty','Super Admin');
$exemSuperUser = new Superuser('Petya','Terminator','qwerty','Super Admin');
$exemSuperUser = new Superuser('Fedya','Terminator','qwerty','Super Admin');

echo 'Users='.Superuser::$countUsers.'<br>';
echo 'Superusers='.Superuser::$countSuperUsers.'<br>';

/*
ЗАДАНИЕ 13
- Опишите функцию checkObject(), которая принимает в качестве входящего параметра объект
- Проверьте Ваш объект, используя следующие условия:
  Если объект является экземпляром класса SuperUser, выводите сообщение,
    что данный пользователь обладает правами администратора
  Если объект является экземпляром класса User, выводите сообщение,
    что данный пользователь является обычным пользователем
  Если объект не является ни тем, ни другим, выводите сообщение,
    что данный пользователь - неизвестный пользователь
*/

function checkObject($class) {
    if ($class instanceof User){
        if ($class instanceof Superuser)
            echo 'This is Superuser object';
        else
            echo 'This is User object';
    } else {
        echo 'Unknown object';
    }
}
checkObject($exemSuperUser);

/*
ЗАДАНИЕ 14
- В директории "oop" создайте файл "User.class.php"
- Перенесите описание класса User из файла "users.php" в файл "User.class.php"
- В директории "oop" создайте файл "SuperUser.class.php"
- Перенесите описание класса SuperUser из файла "users.php" в файл "SuperUser.class.php"
- Посторите те же действия для класса AUser и интерфейса ISuperUser
- В файле "users.php"(данный файл) опишите функцию __autoload(),
    которая автоматически присоединяет файлы с описанием классов к файлу "users.php"
*/
/*
ЗАДАНИЕ 15
- Создайте свойство objNum, которое будет хранить порядковый номер объекта.
  Подумайте, где лучше его создать?
- Внесите изменения в классе User (а может и в SuperUser?), которые будут присваивать свойству objNum,
  порядковый номер объекта.
  Подумайте, где и как лучше это сделать?
- В классе User (а может и в SuperUser?) опишите метод __toString()
- Данный метод должен возвращать строку в формате "Объект #objNum: name".
  Например: "Объект #3: Василий Пупкин"
- Попробуйте преобразовать один из созданных Вами объектов в строку
*/
?>