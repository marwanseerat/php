<?php
///////////////////////////// TASK 1 //////////////////////////

echo  "<h1>TASK 1</h1>";
echo "<h4>Convert the entered string to uppercase.</h4>";
echo(strtoupper("hello world!"))."<br>";
echo "<h4>Convert the entered string to lowercase.</h4>";
echo(strtolower("hello world!"))."<br>";
echo "<h4>Make the first letter of the string uppercase.</h4>";
echo(ucfirst("hello world!"))."<br>";
echo "<h4>Make the first letter of each word capitalized.</h4>";
echo(ucwords("hello world!"))."<br>";
?>

<!-- ///////////////////////////// TASK 2 ////////////////////////// -->

<?php 

echo  "<hr><h1>TASK 2</h1>";

$DATE = '085119';

echo date(" H:i:s",(strtotime($DATE)))

?>

<!-- ///////////////////////////// TASK 3 ////////////////////////// -->

<?php
echo  "<hr><h1>TASK 3</h1>";
$str1 = 'I am a full stack developer at orange coding academy.';
if (strpos($str1,'orange') !== false) 
 {
    echo 'The specific word is present.';
 }
else
 {
    echo 'The specific word is not present.';
 }
?>


<!-- ///////////////////////////// TASK 4 ////////////////////////// -->

<?php
echo  "<hr><h1>TASK 4</h1>";
$path = 'www.orange.com/index.php';
$file_name = substr(strrchr($path, "/"), 1);
echo $file_name."\n"; // "index.php"
?>

<!-- ///////////////////////////// TASK 5 ////////////////////////// -->
<?php
echo  "<hr><h1>TASK 5</h1>";
$mailid  =  'info@orange.com';
$user = strstr($mailid, '@', true);
echo $user."\n";
?>

<!-- ///////////////////////////// TASK 6 ////////////////////////// -->
<?php
echo  "<hr><h1>TASK 6</h1>";
$str1 = 'info@orange.com';
echo substr($str1, -3)."\n";
?>

<!-- !-- ///////////////////////////// TASK 7 ////////////////////////// --> 

<?php
echo  "<hr><h1>TASK 7</h1>";
function password_generate($chars) 
{
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($data), 0, $chars);
}
  echo password_generate(7)."\n";
?>


<!-- !-- ///////////////////////////// TASK 8 ////////////////////////// --> 

<?php

echo  "<hr><h1>TASK 8</h1>";

$str = 'That new trainee is so genius.';
echo preg_replace('/That/', 'The', $str, 1)."\n"; 
?>

<!-- !-- ///////////////////////////// TASK 9 ////////////////////////// --> 

<?php

echo  "<hr><h1>TASK 9</h1>";
$str1 = 'dragonball';
$str2 = 'dragonboll';
$str_pos = strspn($str1 ^ $str2, "\0");
printf('First difference between two strings at position %d: "%s" vs "%s"',
$str_pos, $str1[$str_pos], $str2[$str_pos]);

?>

<!-- !-- ///////////////////////////// TASK 10 ////////////////////////// --> 

<?php
echo  "<hr><h1>TASK 10</h1>";
$str = ["Twinkle", "twinkle", "little star","Twinkle", "twinkle", "little star"];

var_dump($str);
?>

<!-- !-- ///////////////////////////// TASK 11 ////////////////////////// -->
<?php
echo  "<hr><h1>TASK 11</h1>";
$ch = 'a';
$next_ch = ++$ch; 
if (strlen($next_ch) > 1) { // if you go beyond z or Z reset to a or A
 $next_ch = $next_ch[0];
 
}

echo $next_ch;

echo "<br>";
$ch = 'z';
$next_ch = ++$ch; 
if (strlen($next_ch) > 1) { // if you go beyond z or Z reset to a or A
 $next_ch = $next_ch[0];
 
}
echo $next_ch
?>


<!-- !-- ///////////////////////////// TASK 12 ////////////////////////// -->

<?php
echo  "<hr><h1>TASK 14</h1>";
$original_string = 'The brown fox';
$string_to_insert ='quick';
$insert_pos = 4;
$new_string = substr_replace($original_string, $string_to_insert.' ', $insert_pos, 0);
echo $new_string."\n";
?>

<!-- !-- ///////////////////////////// TASK 13 ////////////////////////// -->

<?php
echo  "<hr><h1>TASK 13</h1>";
$x = '0000657022.24';
$str1 = ltrim($x, '0');
echo $str1."\n";
?>


<!-- !-- ///////////////////////////// TASK 14 ////////////////////////// -->

<?php
echo  "<hr><h1>TASK 14</h1>";
$my_str = 'The quick brown fox jumps over the lazy dog';
echo str_replace("fox", " ", $my_str)."\n";
?>


<!-- !-- ///////////////////////////// TASK 15 ////////////////////////// -->
<?php
echo  "<hr><h1>TASK 15</h1>";
$my_str = 'The quick brown fox jumps over the lazy dog///';
echo rtrim($my_str, '/')."\n";
?>

<!-- !-- ///////////////////////////// TASK 16 ////////////////////////// -->

<?php
echo  "<hr><h1>TASK 16</h1>";

$my_str = '\"\1+2/3*2:2-3/4*3';
echo str_replace(str_split('\\/:*?"<>|+-'), ' ', $my_str)."\n";
?>

<!-- !-- ///////////////////////////// TASK 17 ////////////////////////// -->

<?php

echo  "<hr><h1>TASK 17</h1>";

$my_string = 'The quick brown fox jumps over the lazy dog';
echo implode(' ', array_slice(explode(' ', $my_string), 0, 5))."\n";
?>

<!-- !-- ///////////////////////////// TASK 18 ////////////////////////// -->

<?php

echo  "<hr><h1>TASK 18</h1>";

$str1 = "2,543.12";
$x = str_replace( ',', '', $str1);
if( is_numeric($x))
  {
  echo $x."\n";
  }
?>

<!-- !-- ///////////////////////////// TASK 19 ////////////////////////// -->


<?php
echo  "<hr><h1>TASK 19</h1>";
for ($x = ord('a'); $x <= ord('z'); $x++)
 echo chr($x);
 echo "\n"
?>