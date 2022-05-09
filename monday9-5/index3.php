<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Days of the Week</h2>
 
 <?php
 //If form not submitted, display form.
 if (!isset($_POST['submit'])){
 ?>
  
 <form method="post" action="yourscript.php">
 Please enter a day of the week:  <br />
 <input type="text" name="day" />
 <p />
 <input type="submit" name="submit" value="Go" />
 </form>
  
 <?php

 }else{
 
 $day = $_POST["day"];
 if ($day == 'Monday'){
   echo "Laugh on Monday, laugh for danger.";
 } elseif ($day == 'Tuesday'){
   echo "Laugh on Tuesday, kiss a stranger.";
 } elseif ($day == 'Wednesday'){
   echo "Laugh on Wednesday, laugh for a letter.";
 } elseif ($day == 'Thursday'){
   echo "Laugh on Thursday, something better.";
 } elseif ($day == 'Friday'){
   echo "Laugh on Friday, laugh for sorrow.";
 } elseif ($day == 'Saturday'){
   echo "Laugh on Saturday, joy tomorrow.";
 } else {
   echo "No information for that day.";
 }
  
 }
 ?>
</body>
</html>