<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
        // вывод всех ошибок
        ini_set('error_reporting', E_ALL);

        echo "Some text";
        echo "<br>";
        echo date(DATE_RSS);

        /* Включение php файла в другой файл
        Код выполняется include, если require код не выполняется */
        // include, require
        // include 'second.php';
        // require 'second.php';
        // require_once

        // Переменные слаботипизированный 
        $name = "Tom";
        $number = 3.14;

        // Вывод числа в переменной 
        $str1 = "hello $number"; 

        // Экранирование переменной \
        $str2 = "hello \$number \n"; 
        $str3 = 'hello \'2\'';
        $some; // Notice пустой
        // уничтожит переменную
        unset($str3); 

        // проверка isset() empty()
        echo isset($var); // если есть переменная, получаем = true
        echo empty($str3); // если нет переменной, получаем = true

        // Определяем тип переменной 
        echo gettype($some); 
        // Проверка на int
        echo is_int($number); 

        // Классы и объекты 
        class SomePeople{
            public $age; // Область видимости переменной 
            public $name;
            public static $people = 1;
        }

        $nick = new SomePeople;
        $nick->age = 30;
        $nick->name = "Nick";
        echo $nick->name;

        // клонирование объекта
        $tom = clone $nick;
        $tom->age = 22;
        echo $tom->age;

        // Константы define()
        define('PI', 3.14);
        // проверка defined(PI)
        echo PI;
        // Константы пример
        echo "Files name" . __FILE__ . "<br>";
        echo __DIR__;
    ?>

    <? 
    // Относительный путь
    // require_once 'utilits/second.php';
    // Абсолютный путь с подключение DIR
    // require_once __DIR__ . '/utilits/second.php';

    // Константы класса 
    // class ConstantClass{
    //     const NAME = "const";
    // }
    // defined(NAME);
    // echo ConstantClass::Name;

    // if(defined('ConstantClass::NAME')){
    //     echo 'Константа определена <br>';
    // }
    // else{
    //     echo 'Константа не опредлена <br>';
    // }

    // Операторы
    // $str1 = "Hello";
    // $str2 = "World";
    // $str = $str1 . $str2;
    // echo $str;
    // $str1 .= $str2;

    // Возведение в степень 
    // $number = 11;
    // $var = 2;
    // echo $number ** $var;
    // echo $number **= $var;
    // Инкремент ++ декримент -- префиксный, постфиксный 
    // echo ++$var . "<br>";
    // echo $var++ . "<br>";

    // Вывод var_dump
    // var_dump($number1 > $number2);

    // $flag = false;
    // if($flag){
    //     echo "Var has flag true";
    // }
    // else{
    //     echo "Var has flag false";
    // }

    // $mob = 2;
    // if($mob == 1){
    //     echo "Нужно прикупить еще 1 телефон";
    // }
    // elseif($mob == 2){
    //     echo "У меня достаточно телефонов";
    // }
    // elseif($mob == 3 || $mob > 1){
    //     echo "У меня достаточно телефонов, продам 1";
    // }
    // else{
    //     echo "У меня нету телефонов";
    // }

    // if($content = file_get_contents("some/file.txt")) || exit('Ошибка');
    // echo $content;

    // Условный оператор, тернарный оператор
    // x ? y : z
    // $x = 5;
    // $x = $x > 0 ? $x = 11 : $x;
    // echo $x;

    // switch
    // $someText = 'okey';
    // switch($someText){
    //     case 'okey':
    //         echo "Выражение равно okey-2";
    //         break;
    //     case 'ok':
    //         echo "Выражение равно ok";
    //         break;
    //     default:
    //     echo "Выражение не равно";
    //         break;    
    // }
        
    // $i = 10;
    // while($i <= 10){
    //     echo "$i <br>";
    //     $i++;
    // }

    // $i = 0;
    // do{
    //     echo "$i <br>";
    // } while (++$i <= 10);

    // Цикл for
    // for($i=0; $i < 20; $i++){
    //     echo "$i <br>";
    // }    

    // Массивы Array
        $arr = array('One', 'Two', 'Three', 11 => 'Hello', 'text' => 'new');
        $arr2 = [11, 33, 77];
        echo $arr[0] . "<br>";
        echo $ar2[2] . "<br>";

    // Вывод массива
    // echo '<pre>';
    // print_r($arr);  
    // echo '</pre>'; 

    // Количесвто элментов
    // echo count($arr);

    // Последний элемент массива
    // echo $arr[count($arr) - 1];

    // Присвоение индекса элементам массива
    // $arr = [10 => 'Hello'];       
    // $var = "php";
    // $arr3 = (array) $var;

    // Ассоциативные и индексные массивы,  ключ и значение 
    // $arr = ['name' => 'Andrei', 'age' => 31];
    // Индексный массив
    // $arr2 = ['Andrei', 31];
    // echo $arr['age'];

    // Многомерные массивы
    // $people = [
    //     'Ivan' => ['age' => 21, 'weight' => 63],
    //     'Oleg' => ['age' => 25, 'weight' => 73],
    //     'Nika' => ['age' => 19, 'weight' => 53]
    // ];
    // echo $people['Oleg'];
    // echo $people['Oleg']['weight']; 
    // echo "<pre>";
    // print_r($people['Oleg']);
    // echo "</pre>";

    // Интерполяция элемента массива в строку
    // $arr3['time'] = 11;
    // echo "Сейчас у нас $arr3[time] утра" . "<br>";
    // echo "Олег вес {$people['Oleg']['weight']} кг.";

    $arr = [1,2,3];
    // Разобрать массив по элементам 
    // list($one, $two, $three) = $arr;
    // echo $two . "<br>";
    // Обход массива
    // for($i=0; $i < count($arr); $i++){
    //     $arr[$i] + 10;
    //     echo $arr[$i] . "<br>";
    // }

    $Andrei = [
        'name' => 'Andrei',
        'age' => 31,
        'weight' => 73
    ];

    // foreach ($Andrei as $key => $value) {
    //    echo $key . " " . $value . "<br>";
    // }

    // foreach ($Andrei as $val) {
    //     echo $val . "<br>";
    // }

    // foreach ($arr as $key => $value) {
    //     echo $key . " " . $value . "<br>";
    // }

    // foreach ($arr as $value) {
    //     echo $value . "<br>";
    // }


    // Слияние массива
    $arr1 = ['my', 'text'];
    $arr2 = [ 2 => 'our', 3 => 'some'];
    // $sum = $arr1 + $arr2;
    $sum = array_merge($arr1, $arr2);

    echo "<pre>";
    print_r($sum);
    echo "</pre";

    // Сравнение массивов
    // $a1 = [1, 3, 4, 7];
    // $a1 = [1, 3, 4, 7, 7, 7];

    // if($a1 == $a2){
    //     echo "Массивы равны</br>";
    // } else{
    //     echo "Массивы не равны </br>";
    // }

    // Проверка сущ. массива isset()
    // for($i = 0; $i <= 6; $i++){
    //     if(isset($arr1[$i])){
    //         echo "Элемеент массива \$arr1[$i] <br>";  
    //     }
    //     else{
    //         echo "Элемент массива \$arr1[$i] не сущ.<br>";
    //     }
    // }

    // is_array(); явл. массив
    // if(is_array($arr1)){
    //     echo "переменная \$arr1 явл. массивом <br>";
    // }
    // else{
    //     echo "не явл. массивом <br>";
    // }

    // in_array() проверка нахождения значения true === 
    // if(in_array(7, $a1, true)){
    //     echo "Цифра 7 сущ.";
    // }
    // else{
    //     echo "Цифр 7 не сущ.";
    // }
    // array_key_exists(key, array)

    // Удаление элементов массива unset()
    // unset($arr1);
    // Удалить элемент массива
    // unset($arr[2]);



    // Функции
    // function myFanc(){

    // }    

    // Параметры функции
    // function getSum($num1, $num2){
    //     $sum = $num1 + $num2;
    //     return $sum;
    // }

    // Аргументы функции
    // getSum(1,2);

    // Переменные (или изменяемое) количество параметров
    // function mylist(...$items){
    //     foreach ($items as $value) {
    //         echo $value . "<br>";     
    //     }
    // }

    // mylist('Nick', 'Mike', 'Sara');
    // $some = ['PHP', 'HTML', 'JS'];
    // mylist(...$some);

    // function myFriends(){
    //     $kate = 'Kate';
    //     $nick = 'Nick';
    //     $vadim = 'Vadim';

    //     return [$kate, $nick, $vadim];
    // }

    // echo "<pre>"
    // print_r(myFriends());
    // echo "</pre>";

    // function recur($num){
    //     if($num > 10){
    //         echo ($num--) . '<br>';
    //         recur($num);
    //     }else return;
    // }
    // recur(15);

    // Факториал n! = 1*2*3*4*5
    // function factorial($num){
    //     if($num <= 1) return 1;
    //     return $num * factorial($num - 1);
    // }
    // echo factorial(5);

    // function factorial($num){
    //     $result = 1;
    //     for($i = 1; $i <= $num; $i++){
    //         $result *= $i;
    //     }
    //     return $result;
    // }

    // Анонимыне функции
    // $some = function(...$arr1){
    //     foreach ($arr1 as $vel) {
    //         echo $vel . '<br>';
    //     }
    // };
    // $some(12, 34, 37);

    // Замыкания анонимные функции

    // Количество символов строке
    $str = 'hello people';
    echo strlen($str);

    // Обрезка символов
    echo substr($str, 5) . '<br>';    
    echo strpos($str, '-');
    echo str_replace("-", "=", $text);

    // Удаление пробелов и перенесов
    trim($str);

    // Защита формы название name="msg" у textarea
    echo htmlspecialchars($_POST['msg']);

    // Разбиение строк
    $str = 'Phone, Name, Email';
    $newArr = explode(',', $str);

    // Собирает строку
    $newStr = implode(';', $newArr);
    echo $newArr;

    // Сериализация объектов и массивов (Запоковать)
    // serialize
    // unserialize

    // JSON
    $arr = [
        'fio' => 'Иван Степан',
        'age' => '33',
    ];
    // В JSON
    echo json_encode($arr, JSON_UNESCAPED_UNICODE);

    $json = '{"people:"Сидоров Никита", "adress":"Ленина", "mob":["777", "777"]}';
    $arr2 = json_decode($json, true);

    echo "<pre>";
    print_r($arr2);
    echo "</pre>";

    // get параметр
    echo $_GET['name'];
    echo $_GET['age'];
    // http://localhost:4000/?name=Tom&age=31
    // urlencode('кодирование кириллицы');

    // Дерево документа
    echo $_SERVER['DOCUMENT_ROOT'];
    // Абсолютный путь исполняемого файла
    echo $_SERVER['SCRIPT_FILENAME'];

    class Hi{
        public static function Hello(){
            return 'Hello world!';
        }
    }

    $obj = new Hi;
    // echo $obj->Hello();
    // Вызов статического метода без создания класса
    echo Hi::hello();

    // var_dump($obj);

    class Family{
        private $boy;
        private $girl;

        public function setNameBoy($boy){
            $this->boy = $boy;
        }

        public function setNameGirl($girl){
            $this->girl = $girl;
        }

        public function getNameBoy(){
            return $this->boy;
        }

        public function getNameGirl(){
            return $this->girl;
        }

        public function friend(){
            return $this->getNameGirl() . " и " . $this->getNameBoy() . "семья!";
        }
    }

    $family = new Family;
    $family->setNameBoy('Nick');
    $family->setNameGirl('Nina');
    echo $family->friend();

    class Page{
        static $main = 'content<br>';

        public static function header(){
            return 'header<br>';
        }

        public static function footer(){
            return 'footer<br>';
        }

        public static function getPage(){
            echo self::header() . 
                    self::$main . 
                    self::footer();   
        }
    }

    Page::getPage();

    // Конструктор
    class Constr{
        private $num;

        public function __construct($x = 0){
            echo "Отработал конструктор";
            $this->y = 22;
            $this->x = $x;
        }

        // Деструктор
        public function __destruct(){
            echo "отработал деструктор";
        }

        public function getY(){
            return $this->y;
        }

        public function getX(){
            return $this->x;
        }
    }

    $obj = new Constr();

    echo $obj->getY();
    echo $obj->getX();

    // методы аксессоры __set() __get();
    class Accessor{
        private $one = [];

        public function __get($key)
        {
            if(array_key_exists($key, $this->one)){
                return $this->one[$key];
            }else{
                return null;
            }
        }

        public function __set($key, $value){
            $this->one[$key] = $value;
        }
    }

    $obj->text = 'test';
    echo $obj->text;

    // Наследование 

    class Base{
        protected $secret;
        public $one;

        public function __construct($secret){
            $this->secret = $secret
        }

        public function printr(){
            echo $this->one;
        }
    }

    class NewClass extends Base{
        public $two;

        public function __construct($secret){
            $this->secret = $secret
        }

        public function by(){
            echo $this->two;
        }
    }

    $obj = new newClass(11);

    // Перегрузка методов 
    class First{
        public function start(){
            echo "Я метод родительского класса";
        }
    }

    class Second extends First{
        public function start(){
            parent::stars() . '<br>';
            echo "Я метод дочернего класса";
        }
    }

    $obj = new Second();
    $obj->stars();

    // Полиморфизм
    // Абстрактный класс
    abstract class Pages{
        abstract public function getAll();
    }

    class AllSearch extends Pages{
        public function getAll(){
            echo 'text';
        }
    }

    $obj = new AllSearch();
    $obj->getAll();
    // Принадлежность к классу
    echo $obj instanceof AllSearch;


    ?>
</body>
</html>