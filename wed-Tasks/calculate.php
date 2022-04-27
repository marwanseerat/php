<!DOCTYPE html>

<head>
	<title>Simple Calculator Program in PHP - Tutorials Class</title>
</head>

<?php
$first_number = $_POST['first_number'];
$second_number = $_POST['second_number'];
$operator = $_POST['operator'];
$result = '';
if (is_numeric($first_number) && is_numeric($second_number)) {
    switch ($operator) {
        case "Add":
           $result = $first_number + $second_number;
            break;
        case "Subtract":
           $result = $first_number - $second_number;
            break;
        case "Multiply":
            $result = $first_number * $second_number;
            break;
        case "Divide":
            $result = $first_number / $second_number;
    }
}

?>

<body>
    <div id="calc-cart">
	<h2>PHP - Simple Calculator Program</h2>
	  <form action="" method="post" id="calc-form">
            <p>
                <input type="number" name="first_number" id="first_number" required="required" value="<?php echo $first_number; ?>" /> <b>First Number</b>
            </p>
            <p>
                <input type="number" name="second_number" id="second_number" required="required" value="<?php echo $second_number; ?>" /> <b>Second Number</b>
            </p>
            <p>
                <input readonly="readonly" name="result" value="<?php echo $result; ?>"> <b>Result</b>
            </p>
            <input type="submit" name="operator" value="Sum" />
            <input type="submit" name="operator" value="Subtract" />
            <input type="submit" name="operator" value="Multiply" />
            <input type="submit" name="operator" value="Divide" />
	  </form>
    </div>
</body>
</html>