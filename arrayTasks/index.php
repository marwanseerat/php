
<!-- ///////////Task1/////////// -->

<?php

echo "<hr><h1>TASK 1</h1>";

$color = array('white', 'green', 'red');
echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the $color[2] carpet, the $color[1] lawn, the $color[0] house, the leaden sky. The new president and his first lady. - Richard M. Nixon"."\n";
?>

<!-- ///////////Task2/////////// -->
<?php
echo "<hr><h1>TASK2</h1>";

$color = array('white', 'green', 'red');
foreach ($color as $c)
{
echo "$c, ";
}
sort($color);
echo "<ul>";
foreach ($color as $y)
{
echo "<li>$y</li>";
}
echo "</ul>";
?>

<!-- ///////////Task3/////////// -->

<?php
echo "<hr><h1>TASK 3</h1>";

	$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 
    
    $country=array_keys($cities);

    echo "The Capital of $country[11] is $cities[Netherlands]<br>";
    echo "The Capital of $country[9] is $cities[Greece]<br>";
    echo "The Capital of $country[8] is $cities[Germany]<br>";

?>
<!-- ///////////Task4/////////// -->

<?php

echo "<hr><h1>TASK 4</h1>";

$color = array(4=>'white',6=> 'green', 11=>'red');
echo $color[4]
?>

<!-- ///////////Task5/////////// -->
<?php
echo "<hr><h1>TASK 5</h1>";

$original = array('1','2','3');

$inserted =array('$') ;

array_splice( $original, 3, 0, $inserted ); 

print_r($original);
?>

<!-- ///////////Task6/////////// -->

<?php
echo "<hr><h1>TASK 6</h1>";

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple"); asort($fruits);
foreach($fruits as $y=>$y_value)
{
echo $y." = ".$y_value."
";
}?>

<!-- ///////////Task7/////////// -->
<?php
echo "<hr><h1>TASK 7</h1>";

$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";

$temp_array = explode(',', $month_temp);
$tot_temp = 0;
$temp_array_length = count($temp_array);
foreach($temp_array as $temp)
{
 $tot_temp += $temp;
}
 $avg_high_temp = $tot_temp/$temp_array_length;
 echo "Average Temperature is : ".$avg_high_temp."
"; 
sort($temp_array);
echo " List of five lowest temperatures :";
for ($i=0; $i< 5; $i++)
{ 
echo $temp_array[$i].", ";
}

echo "List of five highest temperatures :";
for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
{
echo $temp_array[$i].", ";
}
?>
<!-- ///////////Task8/////////// -->
<?php
echo "<hr><h1>TASK 8</h1>";

$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);
?>


<!-- ///////////Task9/////////// -->
<?php
echo "<hr><h1>TASK 9</h1>";
$colors = array("red","blue", "white","yellow");
$colors =array_flip($colors);
$colors =array_change_key_case($colors, CASE_UPPER);
$colors =array_flip($colors);
print_r($colors)
?>

<!-- ///////////Task10/////////// -->

<?php
echo "<hr><h1>TASK 10</h1>";
$colors = array("RED","BLUE", "WHITE","YELLOW");
$colors = array_map('strtolower',$colors);
print_r($colors);

?>

<!-- ///////////Task 11/////////// -->
<?php
echo "<hr><h1>TASK 11</h1>";
echo implode(",",range(200,250,4));
?>

<!-- ///////////Task 12/////////// -->

<?php
echo "<hr><h1>TASK 12</h1>";

$words =  array("abcd","abc","de","hjjj","g","wer");
$new_array = array_map('strlen', $words);

echo "The shortest array length is ". min($new_array)."<br>". 
" The longest array length is " . max($new_array).'.'; 

?>

<!-- ///////////Task 13/////////// -->
<?php

echo "<hr><h1>TASK 13</h1>";

$n=range(11,20);
shuffle($n);
for ($x=0; $x< 10; $x++)
{
echo $n[$x].' ';
}
echo "\n"
?>

<!-- ///////////Task 14/////////// -->
<?php
echo "<hr><h1>TASK 14</h1>";
function min_values_not_zero(Array $values) 
{
return min(array_diff(array_map('intval', $values), array(0)));
}
print_r(min_values_not_zero(array( 2, 0, 10, 12, 6) )."\n");

?>










