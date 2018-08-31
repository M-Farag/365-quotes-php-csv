<?php
require_once 'core/init.php';

$quote = Quote::getInstance();

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Daily Quotes</title>
</head>

<body>
	<div>
	<h3>Today's Quote: <?php echo $quote->getQuote()[1]; ?></h3>
	<h4>By: <?php echo $quote->getQuote()[2]; ?></h4>

	</div>
</body>
</html>