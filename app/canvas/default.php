<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<base href="<?php echo BASE_PATH; ?>" />

		<title><?php echo StdUtils::getPageTitle(); ?></title>
			
		<link rel="stylesheet" href="assets/css/screen.css" media="screen" />
	</head>
	<body>
		<h1>Hello from canvas</h1>
		<?php echo $view->renderTemplate(); ?>
	</body>
</html>