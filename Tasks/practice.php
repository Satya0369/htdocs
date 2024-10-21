<?php
echo "satya", "  sai"," king", "<br>";  // Adding line break
$name="King of Ap";
echo $name, "<br>";  # Correcting syntax and adding line break
$name1=123;
$kk = print_r($name1,true);  // Storing print_r output as string
print_r($kk);
print_r("<br>");  // Adding line break after print_r

$name = "Alice";
echo "Hello, $name!<br>";  // Adding line break

$link = "https://www.example.com";
echo "<a href='$link'>Visit Example</a><br>";  // Adding line break after link
print_r("<a href='$link'>Visit Example</a>");
echo "<br>";  // Adding final line break


// print:

// Similar to echo, but returns a value of 1, so it can be used in expressions.
// Slightly slower than echo because of the return value.

$kk=print_r("Hello World!<br>");

print_r($kk);
print $kk;
echo $kk;
printf ($kk);
echo "<br>";


$name = "Satya";
$age = 23;
printf("Name: %s, Age: %d, Msg:%s<br>", $name, $age,$kk);

// %f: Represents a floating-point number.
// %c: Represents a character.
// %b: Represents a binary number.
// %o: Represents an octal number.
// %x: Represents a hexadecimal number.


$output = sprintf("Name: %s, Age: %d", $name, $age);
echo "Satya  ". $output . "<br>";


$var = array("apple", "banana", "cherry");
var_dump($var);
echo $var;
echo "<br>";

$var = array("apple", "banana", "cherry");

foreach ($var as $value) {
    echo $value . "<br>";
}

// die("Script terminated.<br>");

$var = array("apple", "banana", "cherry");
var_export($var);
echo "<br>";


error_log("An error occurred", 3, "/path/to/error.log");
// Variables are used to store data that may change during the execution of the script.
// Constants store fixed values that do not change throughout the script's execution

function myFunction() {
    static $counter = 0;
    $counter++;
    echo $counter . "<br>";
}

myFunction();  // Outputs: 1
myFunction();  // Outputs: 2
myFunction();  // Outputs: 3


$x = 10;

function myyFunction() {
    global $x;
    echo $x;  // Accesses the global variable $x
}

myyFunction();  // Outputs: 10


$languages = array("PHP", "JavaScript", "Python");
$student = array("name" => "John", "age" => 22, "grade" => "A");
print_r($student);

// phpinfo();
$varr = 25.5;
if (is_float($varr)) {
    echo "The variable is a float.";
}

echo "<br>";

echo "<br>";

echo "<br>";


echo "<br>";
// foreach(1,10){

// }

?>
