<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Portfolio website">
	<meta name="author" content="Anna S.">
	<title><?php echo $page_title ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700' rel='stylesheet' type='text/css'>
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	
	<link rel="stylesheet" href="styles/normalize.css">
	<link rel="stylesheet" href="styles/main.css">
	<link rel="stylesheet" href="styles/mq.css">
</head>
<body>
	<!-- ======== header ========= -->
	<header>
		<div class="contain">
			<h3 id="logo">
				<a href="index.php"><span class="highlight">UI</span>Brush</a>
			</h3>

			<a id="right-panel-link" href="#menu"><i class="fa fa-bars"></i></a>

			<ul id="menu" class="panel">
				<li><a href="index.php" class="nav-items">home</a></li>
				<li><a href="about.php" class="nav-items">about us</a></li>
				<li><a href="services.php" class="nav-items">services</a></li>
				<li><a href="#" class="nav-items">portfolio</a></li>
				<li><a href="#" class="nav-items">contact us</a></li>
			</ul>
		</div>
		
	</header>