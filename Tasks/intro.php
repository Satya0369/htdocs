

<!-- 1.What is the $ symbol in PHP and what is its use?

In PHP, the $ symbol is used to denote variables. Every variable in PHP starts with a $ sign, followed by the variable name. This $ symbol tells PHP that what follows is a variable that stores a value. 
It distinguishes variables from other elements like functions, constants, or keywords in PHP. 


2.List all printing statements available in PHP.

1. **`print`**:
   - Similar to `echo`, but returns a value of `1`, so it can be used in expressions.
   - Slightly slower than `echo` because of the return value.
2. **`printf`**:
   - Outputs a formatted string (like C's `printf`).
   - You can include placeholders like `%s` (string), `%d` (integer), etc.
3. **`sprintf`**:
   - Similar to `printf`, but returns the formatted string instead of directly outputting it.
4. **`var_dump`**:
   - Displays structured information about variables, including their type and value.
   - Commonly used for debugging.
5. **`var_export`**:
   - Similar to `var_dump`, but outputs valid PHP code that can be used to recreate the variable.
   - Example:
6. **`die()` or `exit()`**:
   - Outputs a message and terminates the script.
7. **`error_log()`**:
   - Sends output to the error log or a specified file, instead of directly displaying it.
8.echo
-->

<?php
$link = "https://king";
echo "<a href='$link'>Visit king</a><br>"; 

print "Hello World!<br>";

$name = "Satya";
$age = 22;
printf("Name: %s, Age: %d<br>", $name, $age);

$output = sprintf("Name: %s, Age: %d", $name, $age);
echo $output . "<br>";

$var = array("apple", "banana", "cherry");
var_dump($var);
echo "<br>";

// die("Script terminated.<br>"); die() or exit():
// error_log("An error occurred", 3, "/path/to/error.log");

// 3.How do you use a PHP variable to set a default value selected in a dropdown?




$selectedValue = "apple";
$selectGen="female";

// 5.If $a equals $e, find the data type of $e when $e has a value. Also, 
// if $a = 1e, what happens when you set $a to 2.3 and use var_dump to check its value?
$e = 10;          
$e = "hello";      
$e = 3.14;     
echo $e. "<br>";    
$e = true;         
echo $e."<br>";



$e = 42;
// $e="42";
  $a = 44;
  const a=56;

echo gettype($a)."<br>";  // Outputs: integer
var_dump($a)."<br>";      // Outputs: int(42)


$a = 1e0;     // $a is equal to 1.0 
var_dump($a)."<br>";  // Outputs: float(1)

$a = 2.3;    
var_dump($a)."<br>";  // Outputs: float(2.3)

// Enable error reporting
// Enable error reporting
error_reporting(E_ALL);          // Report all types of errors
ini_set('display_errors', 1);    // Display errors on the screen


// 6.How do you find errors in PHP?


// error_reporting = E_ALL;
// display_errors = On;


// 7.Using a Boolean, how can you print an if-else statement by defining variables and using echo to display the result?
$isTrue = true;
if ($isTrue) {
    echo "The condition is TRUE.<br>";
} else {
    echo "The condition is FALSE<br>.";
}
// 8.Given an array like $car = ['volvo', 'tret', 44, 1.64785678], how do you write a function that outputs the array using var_dump?
$car = ['volvo', 'tret', 44, 1.64785678];
function fun($arr){
foreach($arr as $aa){
    var_dump($aa);
    echo "<br>";
}
};
fun($car);
$ss="satya";



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dropdown Example</title>
</head>
<body>
    <form>
        <label for="fruit">Choose a fruit:</label>
        <select name="fruit" id="fruit">
            <option value="apple" <?php if ($selectedValue == "apple") echo "selected"; ?>>Apple</option>
            <option value="banana" <?php if ($selectedValue == "banana") echo "selected"; ?>>Banana</option>
            <option value="orange" <?php if ($selectedValue == "orange") echo "selected"; ?>>Orange</option>
            <option value="grape" <?php if ($selectedValue == "grape") echo "selected"; ?>>Grape</option>
        </select><br>
        <label for="gender">Gender</label><br>

        <input type="radio" id=male  value="gen" name="gender" <?php if($selectGen=="male") echo "checked";?> >         <label for="male">Male</label><br>
     
        <input type="radio" name="gender"  value="gen" <?php if($selectGen=="female") echo "checked";?>>   <label for="female">FeMale</label><br>

        <input type="radio" id="Others" name="gender"  value="gen" <?php if($selectGen=="other") echo "checked";?>>        <label for="Others">Others</label>
       
    </form>
</body>
</html>

