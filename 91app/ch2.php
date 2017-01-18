<?php
$name = (isset($_REQUEST["name"]))?$_REQUEST["name"]:"nobody";
?>
<html>
<head>
<title>
	<?php echo $name?>
</title>
</head>
<body>
	<?php echo $name?>
</body>
</html>

<script>
alert('<?php echo $name?>');
</script>