<?php
  // PHP code goes here
?>

<html>
    <head>
        <title>Ecopetrol</title>
    <head>
        <body>
        <?php
        echo " Hello Wordl!";
        ?>
        </body>
</html>

?
echo " Hello!";
?>

<?php
echo "I love ecopetrol!";
?>

<?php
echo "A"
echo "B"
echo "C"
?>

<?php
echo "<strong>This is a blod text.</strong>";
?>

<php
echo "<p>Hello Wordl!</p>";
// This is a <single-Line> comment
    echo "<p>I am learning PHP!</P>";
    echo "<p>This is my first program!</p>";
?>

<?php 
echo <"p>Hello Wordl!</P>";
/*
This is a multi-line comment block
that spans over
multiple lines
*/
echo "<p I am learning PHP!</p>";
echo "<p>This is my first program!</p>";
?>

$variable_name = value;
<?php
$name = " Jhon";
$age = 25;
echo $name "Jhon"
?>

define(name, value, case-insensitive) 
<?php
define ("MSG" , "Hi Sololearners!");
echo MSG;
// Outputs "Hi Sololearners!"
?>

<?php
define ("MSG" , "Hi Sololearners!" , true);
echo msg;
// Outputs "Hi Sololearnes!"
?>

<?php
  $string1 = "Hello world!"; //double quotes
  $string2 = 'Hello world!';  //single quotes
?>

<?php
  $int1 = 42; // positive number
  $int2 = -42; // negative number
?>

<?php
  $x = 42.168;
?> 

<?php
  $x = true; $y = false;
?>

<?php
$str = "10";
$int = 20;
$sum = $str + $int;
echo (sum);
// Outpunts 30
?>

<?php 
$name = "David";
function getName () {
}
getName();
// Error : Undefined variable: nmae
?>

<?php
$name "David";
function getName (){
    global $name
    echo $variable_name
}
getName();
//Outputs  'David'
?>

<?php
$a = 'hello';
$ hello = "Hi";
echo $$a;
// Outputs 'Hi!'
?>

<?php
$num = 8;
$num = 6;
//Addiction 
echo $num1 + $num2; //14

//subtraction
echo $num1 - $num2; //2

//Multiplication
echo $num1 * $num2; //48

//Division 
echo $num1 / $num2; //1.33333333333
?>

<?php
$x = 14;
$Y = 3;
echo $x % $y; // 2
?>

$x++; // equivalent to $x = $x+1;
$x--; // equivalent to $x = $x-1; 

$x++; // post-increment 
$x--; // post-decrement 
++$x; // pre-increment 
--$x; // pre-decrement

$a  = 2; $b = $a++; // $a=3,  $b=2
$a  = 2; $b = ++$a; // $a=3,  $b=3
PHP

$num1 = 5;
$num2 = $num1;

<?php
$x = 50;
$< += 100;
echo $x;
// Outputs: 150
?>

$name1 = "David"; 
$name2 = "Amy"; 
$name3 = "John"; 

$names = array("David", "Amy", "John");

$names[0] = "David";
$names[1] = "Amy";
$names[2] = "John";

echo $names[1]; // Outputs "Amy"

<?php
$myArray [0] = "john";
myArray[1] = "<strong>PHP</strong>";
$myArray[1]";
// Outputs "Jhon is 21 and Knows PHP"
?>

$people = array("David"=>"27", "Amy"=>"21", "John"=>"42");
// or
$people['David'] = "27";
$people['Amy'] = "21";
$people['John'] = "42";

$people = array ("David" =>"27" , "Amy" =>"21"
"Jhon" => "42");

echo $people['Amy']; // Outputs 21"

$people = array(
    'online'=>array('David', 'Amy'),
    'offline'=>array('John', 'Rob', 'Jack'),
    'away'=>array('Arthur', 'Daniel')
 );

 echo $people['online'][0]; //Outputs "David"
 echo $people['away'][1]; //Outputs "Daniel"

 if (condition) {
    code to be executed if condition is true;
 } else {
    code to be executed if condition is false;
 }

<?php
$x =10;
$Y =20;
if $x >=$y) {
    echo $x;
}else{
    echo $y;
}
// Outputs "20"
?>

if (condition) {
    code to be executed if condition is true;
  } elseif (condition) {
    code to be executed if condition is true;
  } else {
     code to be executed if condition is false;
  }

  <?php
  $age = 21;

  if ($age<=13) {
      echo "Child.";
  }elseif ($age>13 && $age<19) {
      echo "teenager"
  }

  <?php
  $age = 21;
  if (age<=13) {
      echo "Child.";
  } elseif ($age>13 && $age<19){
      echo "tranger";
  } else {
      echo "Adult";
  }

  //Outputs "Adult"
  ?>

  while (condition is true) {
    code to be executed;
 }

 $i = 1;
 while ($i < 7) {
   echo "The value is $i <br />";
   $i++;
 }

 do {
  code to be executed;
} while (condition is true); 
PHP

$i = 5;
do {
  echo "The number is " .  $i . "<br/>";
  $i++;
} while($i <= 7);

// Output
// The number is 5
// The number is 6
// The number is 7

for (init; test; increment) {
  code to be executed;
}

for ($a = 0;  $a < 6; $a++) {
  echo "Value of a :". $a. "<br />";
}

foreach (array as $value) {
  code to be executed;
}
//or
foreach (array as $key => $value) {
   code to be executed;
}

$names = array( "John", "David" , "Amy");
foreach ($names as $name) {
  echo $name.'<br />;
}

// John
// David
// Amy

switch (n) {
  case value1:
    //code to be executed if n=value1
    break;
  case value2:
     //code to be executed if n=value2
     break;
  ...
  default:
    // code to be executed if n is different from all labels
}

$today = 'Tue';

Switch ($today) {
  case "Mon":
    echo "Today is Monday.";
    break
  case "Tue":
    echo "today is Tuesday.";
  case "Wed":
    echo "Today is Wesnesady.";
  case "Thu":
    echo "Today is Thursday.";
  case "Fri":
    echo "Today is friday.";
  case "Sat":
    echo "Today is Saturday.";
    break;
  case "Sun":
    echo "Today is Sunday.";
    brak;
  default:
    echo "Invalid day.";
}
//Outputs "Today is Tuesday."

$=5;
switch ($x) {
  case 1:
    echo "One"
    break;
  case 2:
    echo "Two"
    break;
  default:
  echo "No match";
}

// Outpunts "No match"  
  
$day = 'Wed';

Switch ($day) {
  case 'Mon':
    echo 'First day of the Week';
    break;
  case 'Tue':
  case 'Wed':
  case 'Thu':
    echo 'Working day';
    break;
    echo 'Friday!';
    break;
  default:
  echo 'Weekend!';
}

//Outputs "Working day"

$x=1;
switch ($x) {
  case 1:
    echo "One";
  case 2:
      echo "Two";
  case 3:
      echo "Three"
  default:
      echo "No match";
}

//Outputs "OneTwoThreeNo match"    

for ($i=0; $i<10; $i++) {
  if ($i%2==0) {
    continue;
  }
    echo $i . '';
}

//Output: 1 3 5 7 9

<?php
  echo '<h1>Welcome</h1>';
?>

<html>
  <body>

  <?php include 'header.php'; ?>

  <p>Some text.</p>
  <p>Some text.</p>
  </body>
</html>

<html>
  <body>

  <?php include 'header.php'; ?>

  <p>This is a paragraph</p>
  </body>
</html>

function functionName() {    
  //code to be executed
}

fuction sayHello() {
  echo "Hello!";

sayHello(); //calll the function

//Outputs "Hello!"

function multiplyByTwo($number) {
  $answer = $number * 2;
  echo $answer;
}
multiplyByTwo(3);
//Outpust 6

function Multiply($numq, $num2) {
  echo $num1 * $num2;
}
multiply(3, 6);
//Outputs 18

function setCounter($num=10) {
  echo "Counter is ".$num;
}
setCounter(42);  //Counter is 42
setCounter();  //Counter is 10

function mult($num1, $num2) {
  $res = $numq * $num2;
  return $res;
}

echo mult(8, 3);
//Outpust 24

<?php
echo $_SERVER['SCRIPT_NAME];
//Outputs "//somefile.php"
?>

<?php
echo $_SERVER['HTTP_HOST'];
//Outputs "localhost"
?>

<?php
$host = $_SERVER['HTTP_HOST'];
$image_path = $host.'/images/';
?>

<?php
require 'config.php';
echo '<img src="'.$image_path.'header.png" />';
?>

<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br />
Your age: <?php echo $_POST["age"]; ?>

</body>
</html>

<?php
echo "Hi ".$_GET['name'].". ";
echo "You are ".$_GET['age']." years old.";
?>

<?php
// Start the session
session_start();

$_SESSION['color'] = "red";
$_SESSION['name'] = "John";
?>

<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
echo "Your name is " . $_SESSION['name'];
// Outputs "Your name is John"
?>
</body>
</html>

setcookie(name, value, expire, path, domain, secure, httponly);

<?php
$value = "John";
setcookie("user", $value, time() + (86400 * 30), '/'); 

if(isset($_COOKIE['user'])) {
  echo "Value is: ". $_COOKIE['user'];
}
//Outputs "Value is: John"
?>

$myfile = fopen("file.txt", "w");

<?php
$myfile = fopen("names.txt", "w");

$txt = "John\n";
fwrite($myfile, $txt);
$txt = "David\n";
fwrite($myfile, $txt);

fclose($myfile);

/* File contains:
John
David
*/
?>

$myFile = "test.txt";
$fh = fopen($myFile, 'a');
fwrite($fh, "Some text");
fclose($fh);

<?php
if(isset($_POST['text'])) {
  $name = $_POST['text'];
  $handle = fopen('names.txt', 'a');
  fwrite($handle, $name."\n");
  fclose($handle); 
}
?>
<form method="post">
  Name: <input type="text" name="text" /> 
  <input type="submit" name="submit" />
</form>

$read = file('names.txt');
foreach ($read as $line){
  echo $line . ", ";
}

$read = file( 'names.txt');
$count = count($read);
$i = 1;
foreach ($read as $line) {
  if($i < $count) {
    echo ', ';
  }
  $i++;
}

class Person {
  public $age; //property
  public function speak() { //method
    echo "Hi!"
  }
}

$bob = new Person();

echo $bob->age;

class person {
  public $agefunction speak (){
    echo "Hi!";
  }
}
$p1 = new person (); //instantiate an object
$p1->age =23; // assignment
echo $p1->age; // 23
$p1 ->speak(); // Hi!

class Dog {
  public $legs=4;
  public function display () {
    echo $this ->legs;
  }
}
$d1 = new Dog();
$d1->display(); //4

$s2 = new Dog();
$d2->legs = 2;
d2->display(); //2

class person
public function__construct(){
  echo "object created";
}
}
$p = new person ();

class peron {
  public $name;
  public $age;
  public function __construct($name, $age) {
    $this->name = $name;
    $this->age = $age;
  }
}
$p = new person ("David, 41");

class person {
  public function __destruct (){
    echo "object destroyed";
  }
}
$p = mew person ();

class Animal {
  public $name;
  public function hi () {
    echo "Hi from Animal";
  }
}
class Dog extends Animal {
}

$d = new Dog();
$d->hi();

<?php
interface AnimalInterface {
  public function makeSound();
}

class Dog implements AnimalInterface {
  public function makeSound(){
    echo "Meow! <br />";
  }
}

$myobj1 = new Dog();
$myobj2 -> makesound();

$myobj2 = new Cat();
$myobj2->makeSound();
?>

class Demo implements AInterface, BInterface, CInterface {
  // Functions declared in interfaces must be defined here
}

<?php
abastrac class Fruit {
  private $color;

  abstract public  function eat ();
  this -> color = $c;
 }
}

class Apple extends Fruit {
  public function eat () {
    echo "Omnomnom"
  }
}

$obj = new Apple ();
$obj-> eat ();
?>

<?php
class myclass {
  static $myproperty = 42;
  static function myMethod() {
    echo self::$myProperty;
    }
  }

  myclass::myMethod();
  ?>

  <?php
  class myclass {
    final function myfunction() {
      echo "parent";
    }
  }
  // ERROR because a final method cannot be oveeidden inm child classes.
  function myfunction() {
    echo "child"
  }
}
?>

<?php
final class myFinalclass {
}

//ERROR because a final class cannot be inherited.
class myClass extends myFinalclass {
}
?>

interface implements play()
