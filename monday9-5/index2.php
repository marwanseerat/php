<?php
if (isset($_POST['submit']) == TRUE && (($_POST['f_city']) != "")) {
 
	$f_city = $_POST['f_city'];
	echo "<p>Your favorite city is " . $f_city . "." . "</p>";
 
} else {
 
	?>
	<h2>Favorite City</h2>
	<p>What city is your favorite?</p>
<form action="" method="post"/>
	<input type="text" name="f_city" />
	<input type="submit" name="submit"/>
</form>
 
<?php 
 
} 	 
 
 
?>