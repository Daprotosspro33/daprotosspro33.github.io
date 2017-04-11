<html>
<body>
<h1>hi</h1>
<?php echo "Hi!"; ?>
<?php $line = date('Y-m-d H:i:s') . " - $_SERVER[REMOTE_ADDR]";
file_put_contents('kekistan.txt', $line . PHP_EOL, FILE_APPEND);
?>
</body>
</html>