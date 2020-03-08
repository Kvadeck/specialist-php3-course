<?php

include "IGbookDB.class.php";

/*
ЗАДАНИЕ 1
- Создайте класс GbookDB наследующий интерфейс IGbookDB
- Создайте константу класса DB_NAME и присвойте ей значение gbook.db - имя базы данных
- Создайте закрытое свойство $_db для хранения объекта соединения с базой данных
- Создайте конструктор, в котором выполняется подключение к базе данных
- Создайте деструктор, в котором выполняется закрытие соединения с базой данных
- Создайте временный объект gbook, экземпляр класса GbookDB
- Для проверки работоспособности кода запустите данный файл в браузере и убедитесь, что файл gbook.db создан
- Удалите файл gbook.db
*/

class GbookDB implements IGbookDB {

    public function ErrorOutput() {
        ini_set('error_reporting', E_ALL);
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
    }

    const DB_HOST = '127.0.0.1';
    const DB_NAME = 'my_db_test';
    const DB_USER = 'root';
    const DB_PASSWORD = '';

    protected $_db;

    public function __construct()
    {
        $this->_db = new mysqli(self::DB_HOST, self::DB_USER, self::DB_PASSWORD, self::DB_NAME);

        if ($this->_db->connect_errno) {
            die("Connect failed: ".$this->_db->connect_error);
        }
        if (!$this->_db->set_charset("utf8")) {
            printf("Ошибка при загрузке набора символов utf8: %s\n", $this->_db->error);
            exit();
        }
    }
    public function closeConnectDB() {
        $this->_db->close();
    }
    public function __destruct()
    {
       unset($this->_db);
    }
    public function clearData($data) {
        $data = stripcslashes($data);
        $data= strip_tags($data);
        $data= trim($data);
        //$data = mysqli_real_escape_string($data);
        return $data;
    }
    function savePost($name, $email, $msg) {
        $ip = $_SERVER['REMOTE_ADDR'];
        $dt = date("Y-m-d H:i:s");
        $sql = "INSERT INTO msgs (`name`, `email`, `msg`, `datetime`, `ip`) 
                VALUES ('$name', '$email', '$msg', '$dt','$ip')";
        $this->_db->query($sql);
    }
    function getAll() {
        $query = 'SELECT * FROM msgs';
        $result = $this->_db->query($query);

        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $resultArray[] = $row;
        }
        return $resultArray;
    }

    function deletePost($id){
//        $sql = 'DELETE FROM msgs WHERE id=$id';
        $sql= "DELETE FROM msgs 
                WHERE id=$id";
        $this->_db->query($sql);
    }
}



/*
ЗАДАНИЕ 2
- Измените конструктор так, чтобы в нём выполнялась проверка, существует ли база данных на следующих условиях: 
  Если базы данных не существует, создайте ее и выполните SQL-операторы для добавления таблицы (файл gbook.sql). 
  В противном случае, выполняйте подключение к существующей базе данных
- Для проверки работоспособности кода запустите данный файл в браузере и убедитесь, что файл gbook.db создан  
*/

/*
ЗАДАНИЕ 3
- Опишите метод savePost. Смотрите описание метода в интерфейсе IGbookDB
- Получите данные о текущих дате и времени
- Получите данные об IP адресе пользователя	
- Сформируйте строку запроса на добавление новой записи
- Добавьте новую запись в таблицу msgs	
*/

/*
ЗАДАНИЕ 4
- Опишите метод getAll. Смотрите описание метода в интерфейсе IGbookDB
- Сформируйте строку запроса на выборку всех данных из таблицы msgs в обратном порядке
- Получите и верните результат запроса
*/

/*
ЗАДАНИЕ 5
- Опишите метод deletePost. Смотрите описание метода в интерфейсе IGbookDB
- Сформируйте строку запроса на удаление новой записи
- Удалите запись из таблицы msgs	
*/

/*
ЗАДАНИЕ 6 (Если останется время)
- Опишите в конструкторе, а также в методах getAll, savePost и deletePost блок try-catch
- Создайте исключения на ошибки при выполнении SQL-запросов	
*/
