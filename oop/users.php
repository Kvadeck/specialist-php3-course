<?php
	/*
	������� 1
	- �������� ����� User �� ���������� name, login � password
	- �������� ��� �������, ���������� ������ User
	- ������� ������������ �������� ������� name, login � password ��� ������� �� ��������
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
	������� 2
	- � ������ User ������� ����� showInfo()
	- ����� showInfo() ������ �������� �������� ������� ��������
	- �������� ����� showInfo() ��� ������� �������
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
	������� 3
	- � ������ User ������� �����������
	- ����������� ������ �������� ��������� �������� ������� name, login � password
	- �������� ������ ��� �������, ���������� ������ User
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
	������� 4
	- � ������ User ������� ����� __clone()
	- ����� __clone() ������ �������� ��������� �������� ������� �� ��������� ��� ����������� ��������
	- �������� ������� �� ���������: name = "Guest", login = "guest", password = "qwerty" 
	- �������� �������� ������ ���������� ���� �� ��������� ��������
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
	������� 5
	- ������� ����� SuperUser ������������� �� ������ User
	- � ������ SuperUser ������� �������� role � �������� ������, ��������� ������ SuperUser
	- ������� �������� �������� role = "admin"
	- �������� ����� showInfo() ��� ���������� ������� 
	- �������� �� ������ showInfo() �������� �������� �������� role
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
	������� 6
	- ������� ����������� ������ SuperUser, ������� ����� �������� ��������� �������� �������
	- � ������ SuperUser ������� ����� showInfo(), ������� ����� �������� �� ����� �������� ���� �������
	- �������� ������ ������ ������ SuperUser � �������� ����� showInfo().
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
	������� 7
	- �������� ����������� ������ SuperUser, ������ ������������ �����������
	- ��������� ������������� ������������ ����������� ��������
	- �������� ����� showInfo() ������ SuperUser, ������ ������������ ����� showInfo()
	- ��������� ������������� ������ ����������� ��������
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
	������� 8
	- �������� ��� ��������� ������������ ������ User ����������� �� ��������� �� ���������� "������ ������"("")
	- � ������������ ������ User ����������� ����������, ���� ������� �� ��� ������
	- ������� �������� ���������� � �������� � ������� ��������� �� ������
	- ���������� ������� ��������� ������ User ��� ������-���� ���������(-��)
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
	������� 9
	- �������� ��������� ������ User INFO_TITLE
	- ��������� ��������� INFO_TITLE ��������� �������� "������ ������������:"
	- ���������� � ��������� INFO_TITLE ����� �������� ������ showInfo()
	- ��������� ��� � ��������� ��� �����������������

	- �������� ����� showTitle() � ������ User
	- ������� ����� showTitle(), ����� �� ������� � ������� �������� ��������� INFO_TITLE
	- ���������� � ����� showTitle() ����� �������� ������ showInfo()
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
	������� 10
	- �������� ����������� ����� AUser
	- � ����������� ������ AUser �������� ����������� ����� showInfo()
	- �������� ����� User, ����������� ��� �� ������������ ������ AUser
	- ������� � ����� User ����������� ���������
	- ��������� ��� � ��������� ��� �����������������
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
	������� 11
	- �������� ��������� ISuperUser
	- � ��������� ISuperUser �������� ����� getInfo()
	- ������� ����� getInfo() � ������ SuperUser
	- ����� getInfo() ������ ���������� ������������� ������, � ������� 
	  ������� ����� �������� ����� ������� �������, � ���������� ����� - �������� ������� �������
	- �������� ����� getInfo() ��� ���������� ������ SuperUser
	- � ����� �������� ������, ���������� � ������� ������ getInfo()
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
������� 12
- ������� � ������� User � SuperUser ����������� �������� ��� �������� ���������� ��������� ��������
- ��������� ���� ��������� ��������� �������� (0)
- � ������������� ��������������� �������� ������ �������
- ����� �������� ����������� ������� User � SuperUser �������� � ������� ���������� ��� � ������ ��������
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
������� 13
- ������� ������� checkObject(), ������� ��������� � �������� ��������� ��������� ������
- ��������� ��� ������, ��������� ��������� �������:
  ���� ������ �������� ����������� ������ SuperUser, �������� ���������,
    ��� ������ ������������ �������� ������� ��������������
  ���� ������ �������� ����������� ������ User, �������� ���������,
    ��� ������ ������������ �������� ������� �������������
  ���� ������ �� �������� �� ���, �� ������, �������� ���������,
    ��� ������ ������������ - ����������� ������������
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
������� 14
- � ���������� "oop" �������� ���� "User.class.php"
- ���������� �������� ������ User �� ����� "users.php" � ���� "User.class.php"
- � ���������� "oop" �������� ���� "SuperUser.class.php"
- ���������� �������� ������ SuperUser �� ����� "users.php" � ���� "SuperUser.class.php"
- ��������� �� �� �������� ��� ������ AUser � ���������� ISuperUser
- � ����� "users.php"(������ ����) ������� ������� __autoload(),
    ������� ������������� ������������ ����� � ��������� ������� � ����� "users.php"
*/
/*
������� 15
- �������� �������� objNum, ������� ����� ������� ���������� ����� �������.
  ���������, ��� ����� ��� �������?
- ������� ��������� � ������ User (� ����� � � SuperUser?), ������� ����� ����������� �������� objNum,
  ���������� ����� �������.
  ���������, ��� � ��� ����� ��� �������?
- � ������ User (� ����� � � SuperUser?) ������� ����� __toString()
- ������ ����� ������ ���������� ������ � ������� "������ #objNum: name".
  ��������: "������ #3: ������� ������"
- ���������� ������������� ���� �� ��������� ���� �������� � ������
*/
?>