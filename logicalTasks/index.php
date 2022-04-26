<!-- ////////////////task1///////////////////////// -->

<?php
echo  "<h1>TASK 1</h1>";
$year = 2013;
if((0 == $year % 4) & (0 !== $year % 100 ) || (0 == $year % 400)){
    echo "$year is a leap year";
}else{
    echo "$year is not a leap year"; 
}

// <!-- ////////////////task2///////////////////////// -->

echo  "<hr><h1>TASK 2</h1>";
$temp = 27;
if($temp<=20){
    echo "it is winter ";
}else {
    echo " it is summertime";
};

// <!-- ////////////////task3///////////////////////// -->

echo  "<hr><h1>TASK 3</h1>";

function sum($x , $y){
    return $x == $y ? ($x + $y)*3 :  $x + $y;
}

echo sum( 2 , 3 )."<br>";
echo sum( 2 , 2 )."<br>";
echo sum( 2 , 4 )."<br>";

// <!-- ////////////////task4///////////////////////// -->
echo  "<hr><h1>TASK 4</h1>";
function check($z , $a){
    return ($z == 30) || ($a == 30) || ($z + $a == 30);

};

var_dump(check(15 , 15));
var_dump(check(10 , 10)); 


// <!-- ////////////////task5///////////////////////// -->
echo  "<hr><h1>TASK 5</h1>";
function  multiple($v){
    return $v % 3 == 0 ;
} 
var_dump(multiple(3));
var_dump(multiple(4));



// <!-- ////////////////task6///////////////////////// -->
echo  "<hr><h1>TASK 6</h1>";

function test($x, $y, $z) 
{
    return ($x >= 20 && $x <= 50) || ($y >= 20 && $y <= 50) || ($z >= 20 && $z <= 50);
}

var_dump(test(11, 20, 12));
var_dump(test(30, 30, 17));
var_dump(test(25, 35, 50));
var_dump(test(15, 12, 8));

// <!-- ////////////////task7///////////////////////// -->
echo  "<hr><h1>TASK 7</h1>";

function larg($x, $y, $z) {
    $max = $x;
  
    if ($x >= $y && $x >= $z)
      $max = $x;
    if ($y >= $x && $y >= $z)
      $max = $y;
    if ($z >= $x && $z >= $y)
      $max = $z;
    
    echo "Largest number among $x, $y and $z is: $max\n";
  }
  
  larg(1, 5, 2);
  larg(3, 5, 10);


// <!-- ////////////////task8///////////////////////// -->
echo  "<hr><h1>TASK 8</h1>";
function bill($x){
    if($x>0 && $x<=50){
        echo($x*2.5);
    }

    elseif ($x>50 && $x<=100){
        echo($x*5);
    }

    elseif ($x> 100 && $x<=200){
        echo($x*6.2);
    }

    elseif ($x>200 && $x<=250){
        echo($x*7.5);
    }
};

echo(bill(50)."<br>");
echo(bill(100)."<br>");
echo(bill(200)."<br>");
echo(bill(250)."<br>");

// <!-- ////////////////task9///////////////////////// -->
echo "<hr><h1>TASK 9</h1>";


function calculator($x, $y, $z){
    if ($z == "+"){
        echo($x+$y);
    }
    elseif ($z == "-"){
        echo($x-$y);
    }
    elseif ($z == "*"){
        echo($x*$y);
    }
    elseif ($z == "/"){
        echo($x/$y);
    }
};


echo calculator(3,9,"+")."<br>";
echo calculator(6,5,"-")."<br>";
echo calculator(8,5,"*")."<br>";
echo calculator(10,7,"/")."<br>";

// <!-- ////////////////task10///////////////////////// -->
echo "<hr><h1>TASK 10</h1>";

function age($x){
    if($x>=18){
        echo "is eligible to vote";
    }

    else {
        echo "is no eligible to vote";
    }
}

echo(age(15));
// <!-- ////////////////task11///////////////////////// -->
echo "<hr><h1>TASK 11</h1>";

function num($x){
    if ($x < 0){
        echo "Negative";
    }
    elseif ($x > 0){
        echo "Positive";
    }
    else{
        echo "Zero";
    }
}

echo(num(-60));

// <!-- ////////////////task12///////////////////////// -->

echo "<hr><h1>TASK 12</h1>";

$score=array(60,86,95,63,55,74,79,62,50);
$array1=array_sum($score);
$array2=count($score);
$avg=$array1/$array2;

function grade($x){
    if($x<60){
        echo "F";
    }
    elseif ($x<70){
        echo "D";
    }
    elseif ($x<80){
        echo "C";
    }
    elseif ($x<90){
        echo "B";
    }
    elseif ($x<100){
        echo "A";
    }
}

echo grade($avg);



?>