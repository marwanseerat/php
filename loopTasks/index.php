<?php

////////////////////////////// TASK 1 //////////////////////
echo "<h1>TASK 1</h1>";

for($x=1; $x<=10; $x++)
{
 if($x< 10)
 {
 echo "$x-";
 }
 else
  {
 echo "$x"."\n";
  }
}

////////////////////////////// TASK 2 //////////////////////
echo "<hr><h1>TASK 2</h1>";
$sum=0;
for ($i=1; $i<=30 ; $i++){

    $sum+=$x;
   
}
echo $sum;

////////////////////////////// TASK 3 //////////////////////
echo "<hr><h1>TASK 3</h1>";
$x='A';
for($i=1; $i<=5; $i++){
    for($j=5-$i; $j>0; $j--)
        echo 'A';


    for($b=1; $b<=$i;$b++)
        echo "$x";
     
        $x++;

 

    echo ' <br>';
}


////////////////////////////// TASK 4 //////////////////////
echo "<hr><h1>TASK 4</h1>";

$x=1;
for($i=1; $i<=5; $i++){
    for($j=5-$i; $j>0; $j--)
        echo 1;


    for($b=1; $b<=$i;$b++)
        echo "$x";
     
        $x++;

 

    echo ' <br>';
}

////////////////////////////// TASK 5 //////////////////////
echo "<hr><h1>TASK 5</h1>";


for ($i = 1; $i <=5; $i++)
{
    for ($j = 1; $j <=5; $j++)
    {
        if($i == $j)
        {
           echo $i;
        }
        else
        {
            echo 0;
        }

    }

    echo ' <br>';
}


////////////////////////////// TASK 6 //////////////////////
echo "<hr><h1>TASK 6</h1>";

function fact($n){
$x = 1;
for($i=1;$i<=$n-1;$i++)
{
 $x*=($i+1); 
}
echo $x;
}

echo fact(5);



////////////////////////////// TASK 7 //////////////////////
echo "<hr><h1>TASK 7</h1>";


echo "0".",";
echo "1".",";
$x=0;
$y=1;
for($i=0; $i<7; $i++){
    $z=$x+$y;
    echo $z.",";
    $x=$y;
    $y=$z;
}
echo "<br> <br>";

////////////////////////////// TASK 8 //////////////////////
echo "<hr><h1>TASK 8</h1>";

$text="Orange Coding Academy";
$search_char="c";
$count="0";
for($x="0"; $x< strlen($text); $x++)
  { 
    if(strtolower($text[$x])==$search_char)
    {
    $count=$count+1;
	 }
  }
echo $count."\n";


////////////////////////////// TASK 9 //////////////////////
echo "<hr><h1>TASK 9</h1>";

echo "<table style='border :1px;cellpadding:3px; cellspacing:0px'><br/>";

for($i=1;$i<7;$i++)
{
echo "<tr>";
for ($j=1;$j<6;$j++)
  {
 
  echo "<td style='padding: 3px;  border: 1px solid black;'>$i * $j = ".$i*$j."</td>";

  }
  echo "</tr>";
  
  }
echo"</table>";
echo "<br> <br>";


////////////////////////////// TASK 10 //////////////////////
echo "<hr><h1>TASK 10</h1>";

for ($i = 1; $i <= 50; $i++){
    if($i / 3 == round($i / 3) && $i / 5 == round($i / 5)){
       echo  " FizzBuzz<br />";
    }
    else if($i / 3 == round($i / 3)){
       echo  " Fizz<br />";
    }
    else if($i / 5 == round($i / 5)){
       echo  " Buzz<br />";
    }
    else {
       echo $i."<br />";
    }
 }

////////////////////////////// TASK 11 //////////////////////
echo "<hr><h1>TASK 11</h1>";

$n = 5; 

$count = 1;
for ($i = $n; $i > 0; $i--) 
{
  for ($j = $i; $j < $n + 1; $j++) 
   {

    echo $count." ";
     $count++;
   } 
	echo "<br>";
   }

   ////////////////////////////// TASK 12 //////////////////////
echo "<hr><h1>TASK 12</h1>";

$n = 4;
for($i=1; $i<=$n; $i++) {
for($j=1;$j<=(2*$n)-1; $j++) {
if($j>=$n-($i-1) && $j<=$n+($i-1)) {
echo " A ";
} else {
echo "&nbsp;&nbsp;&nbsp;";
}
}
echo "<br/>";
}

for($i=($n-1); $i>=1; $i--) {
for($j=1;$j<=(2*$n)-1; $j++) {
if($j>=$n-($i-1) && $j<=$n+($i-1)) {
echo " A ";
} else {
echo "&nbsp;&nbsp;&nbsp;";
}
}
echo "<br/>";
}

?>