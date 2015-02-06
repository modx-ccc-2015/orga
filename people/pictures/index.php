<html>
<head>
	<title>People Cheatsheet</title>
	
	<style type="text/css">
		.image {
			width: 250px;
			height: 250px;
			float: left;
			overflow: hidden;
		}
		.image img {
			height: 230px;
		}
	</style>
</head>

<body>


<?php

$files = scandir(dirname(__FILE__));

//var_dump($files);

foreach ($files as $file) {
	if (substr($file, 0, 1) == '.' || $file == 'index.php') continue;

	echo '<div class="image"><p>'.$file.'</p><img src="'.$file.'" alt="'.$file.'"></div>';
}
?>

</body>
</html>