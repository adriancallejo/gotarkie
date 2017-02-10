<!DOCTYPE html>
<html>
<head>
	<meta http-equiv = "Content-Type" content = "text/html; charset=utf-8" />
	<title><?php echo SITE_NAME; ?></title>

	<!-- CSS -->
	<link rel = "stylesheet" type = "text/css" href = "<?php echo SITE_URL ?>main/css/default.css">
	<link rel = "stylesheet" type = "text/css" href = "<?php echo SITE_URL ?>main/css/style.css.php">

	<!-- JS -->

	<!-- PLUGINS -->

	<link rel = "canonical" href = "<?php echo $moUri->current(); ?>"/>
</head>
<body>
	<h1 class = "siteName"><?php echo SITE_NAME ?></h1>

	<?php
	include $viewPage;
	?>
</body>
</html>