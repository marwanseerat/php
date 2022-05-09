<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<body >
<h2>Pick a Day</h2>
<?php
//If form not submitted, show form.
if (!isset($_POST['submit'])){
?>
 
<form method="post" action="yourfile.php">
Please choose a day:<p>
<select name="day">
   <option value="Monday">Monday</option>
   <option value="Tuesday">Tuesday</option>
   <option value="Wednesday">Wednesday</option>
   <option value="Thursday">Thursday</option>
   <option value="Friday">Friday</option>
   <option value="Saturday">Saturday</option>
   <option value="Sunday">Sunday</option>
</select> 
</p >
<input type="submit" name="submit" value="Go"/>
</form>
 
<?php
//If form submitted, process input.
}else{
$day = $_POST['day'];
switch($day){
  case 'Monday':
    echo 'Laugh on Monday, laugh for danger.';
    break;
    /*Did you remember your break statements for each option? 
    If not, once started, the script will continue to execute
    the instructions to the end of the switch statement.*/
  case 'Tuesday':
    echo 'Laugh on Tuesday, kiss a stranger.';
    break;
  case 'Wednesday':
    echo 'Laugh on Wednesday, laugh for a letter.';
    break;
  case 'Thursday':
    echo 'Laugh on Thursday, something better.';
    break;
  case 'Friday':
    echo 'Laugh on Friday, laugh for sorrow.';
    break;
  case 'Saturday':
    echo 'Laugh on Saturday, joy tomorrow.';
    break;
  default:
    echo 'No information for that day.';
    break; 
}
?>
<p>
<form action="yourfile.php">
<input type="submit" name="submit" value="Back" onclick="self.location='yourfile.php'" />
</form>
<?php
}
?>
</body>
</html>