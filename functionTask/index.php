///////////////////////////////task1///////////////////////////
<?php
echo "<hr><h1>TASK 1</h1>";
function primeCheck($number){
    if ($number == 1)
    return 0;
    for ($i = 2; $i <= $number/2; $i++){
        if ($number % $i == 0)
            return 0;
    }
    return 1;
}
 

$number = 3;
$flag = primeCheck($number);
if ($flag == 1)
    echo "Prime";
else
    echo "Not Prime"
?>

///////////////////////////////task2///////////////////////////
<?php
echo "<hr><h1>TASK 2</h1>";

function Reverse($str){
    return strrev($str);
}
  

$str = " remove";
echo Reverse($str);
?>
///////////////////////////////task3///////////////////////////

<?php

echo "<hr><h1>TASK 3</h1>";
$strings = array('remove');
 

foreach ($strings as $testcase) {
    if (ctype_lower($testcase)) {
        echo "Yes\n";
    } else {
        echo "No\n";
    }
}
?>

///////////////////////////////task4///////////////////////////
<?php
echo "<hr><h1>TASK 4</h1>";

function swap( $x, $y) 
{
    $x=  $x+$y;
   $y = $x - $y;
   $x =  $x- $y;
   echo "X:".  $x . "<br>";
   echo "Y:". $y;
 }

 $x=12;
 $y= 10;

 echo (swap($x, $y));
?>
///////////////////////////////task5///////////////////////////
<?php
echo "<hr><h1>TASK 5</h1>";
function armstrongCheck($number){
    $sum = 0; 
    $x = $number; 
    while($x != 0) 
    { 
        $rem = $x % 10; 
        $sum = $sum + $rem*$rem*$rem; 
        $x = $x / 10; 
    } 
    
    if ($number == $sum)
        return 1;
     

    return 0;   
}
 

$number = 407;
$flag = armstrongCheck($number);
if ($flag == 1)
    echo "$number is Armstrong Number ";
else
    echo "$number is not an Armstrong Number ";
?>

///////////////////////////////task6///////////////////////////
<?php
echo "<hr><h1>TASK 6</h1>";

function check_plaindrome($string) {
    //remove all spaces
    $string = str_replace(' ', '', $string);

    //remove special characters
    $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string);

    //change case to lower
    $string = strtolower($string);

    //reverse the string
    $reverse = strrev($string);

    if ($string == $reverse) {
        echo " Yes it is a palindrome ";
    } 
    else {
        echo " No it is not a palindrome ";
    }
}

$string = " Eva, can I see bees in a cave?";
check_plaindrome($string);
?>
///////////////////////////////task7///////////////////////////
<?php

echo "<hr><h1>TASK 7</h1>";

$array1 = array(2, 4, 7, 4, 8, 4);
$result = array_unique($array1);
print_r($result);
?>

