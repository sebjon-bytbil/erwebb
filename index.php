<!DOCTYPE html>
<html lang="">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>BytBil : Bootstrap Template</title>

	<!-- Shortcut Icons -->
	<link rel="shortcut icon" href="">
	<link rel="icon" type="image/x-icon" href="./img/icons/favicon.ico" />
	<link rel="icon" type="image/png" href="./img/icons/favicon.png" />
	<link rel="icon" type="image/gif" href="./img/icons/favicon.gif" />

	<!-- Touch Icons -->
	<link href="#" rel="apple-touch-icon" />
	<link href="./img/icons/apple-touch-icon-76x76.png" rel="apple-touch-icon" sizes="76x76" />
	<link href="./img/icons/apple-touch-icon-120x120.png" rel="apple-touch-icon" sizes="120x120" />
	<link href="./img/icons/apple-touch-icon-152x152.png" rel="apple-touch-icon" sizes="152x152" />

	<!-- Iconlibraries -->
	<link href="fonts/entypo.css" rel="stylesheet">
	<link href="fonts/fontawesome.css" rel="stylesheet">

	<!-- Webfonts -->
	<link href="fonts/opensans-light.css" rel="stylesheet">
	<link href="fonts/opensans-regular.css" rel="stylesheet">
	<link href="fonts/opensans-bold.css" rel="stylesheet">

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet">

	<!-- Flexslider -->
	<link href="css/flexslider.css" rel="stylesheet">

	<!-- Main -->
	<link href="style.css" rel="stylesheet">


	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body>

	<header>

	<nav class="navbar" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<i class="fa fa-2x fa-bars"></i>
				</button>
				<a class="navbar-brand" href="#">
					<img src="./images/bytbil-logotype.png" alt="Logotype" title="Logotype">
				</a>
			</div>

			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-left">
					<li class="active">
						<a href="#">Start</a>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown</a>
						<ul class="dropdown-menu">
							<li><a href="#">Menylänk</a></li>
							<li><a href="#">Menylänk</a></li>
							<li class="divider"></li>
							<li><a href="#">Separerad länk</a></li>
						</ul>
					</li>
					<li>
						<a href="#">Menylänk</a>
					</li>
					<li>
						<a href="#">Menylänk</a>
					</li>
					<li>
						<a href="#">Menylänk</a>
					</li>
				</ul>
				<form class="navbar-form navbar-right" role="search">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search">
					</div>
					<button type="submit" class="btn btn-default"><i class="entypo search"></i></button>
				</form>
			</div><!--.nav-collapse -->
		</div>
	</nav>

	</header>

	<main>

		<section id="main-slider">
			<div class="container">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<img src="./images/slides/1.jpg" />
						</li>
						<li>
							<img src="./images/slides/2.jpg" />
						</li>
						<li>
							<img src="./images/slides/3.jpg" />
						</li>
					</ul>
				</div>
			</div>
		</section>

		<div class="container">
			<div class="col-xs-12 col-sm-8 col-lg-9 no-child-padding">
				<h1>Kom igång!</h1>
				<p>Nu är det bara att påbörja ditt HTML-tema. Gå noggrant igenom källkoden för att se vad för något som är utbytbart och inkluderat.</p>
				<p>Nedan finner du exempel på olika kodkomponenter.</p>

				<div class="col-xs-12">
					<h3>Knappar</h3>
					<div class="btn-group">
						<button class="btn btn-default">Default</button>
						<button class="btn btn-danger">Danger</button>
						<button class="btn btn-warning">Warning</button>
						<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
							Dropdown
							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu pull-right" role="menu" aria-labelledby="dropdownMenu1">
							<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
						</ul>
					</div>
				</div>

				<div class="col-xs-12">
					<h3>Varningar</h3>
					<div class="alert alert-success" role="alert">Well done! You successfully read this important alert message.</div>
					<div class="alert alert-info" role="alert">Heads up! This alert needs your attention, but it's not super important.</div>
					<div class="alert alert-warning" role="alert">Warning! Better check yourself, you're not looking too good.</div>
					<div class="alert alert-danger" role="alert">Oh snap! Change a few things up and try submitting again.</div>
				</div>

				<div class="col-xs-12">
					<h3>Ihoppfällningsbara fält</h3>
					<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingOne">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										Ihopfällningsbar #1
									</a>
								</h4>
							</div>
							<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
								<div class="panel-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingTwo">
								<h4 class="panel-title">
									<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
										Ihopfällningsbar #2
									</a>
								</h4>
							</div>
							<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
								<div class="panel-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingThree">
								<h4 class="panel-title">
									<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
										Ihopfällningsbar #3
									</a>
								</h4>
							</div>
							<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
								<div class="panel-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
								</div>
							</div>
						</div>
					</div>
				</div>


			</div>
			<div class="col-xs-12 col-sm-4 col-lg-3">
				<h2>En annan rubrik</h2>
				<blockquote>
					Det här blir supernice!
				</blockquote>
				<ul>
				</ul>
			</div>
		</div>
	</main>

	<footer>
		<div class="container">
			<div class="starter-template">
				<h3>Footer Area</h3>
			</div>
		</div>
	</footer>

	<!-- jQuery -->
	<script src="./js/jquery-1.11.1.min.js"></script>

	<!-- Bootstrap -->
	<script src="./js/bootstrap.min.js"></script>

	<!-- Flexslider -->
	<script src="./js/jquery.flexslider-min.js"></script>

	<!-- Custom files -->

	<!-- OnLoad -->
	<script type="text/javascript" charset="utf-8">
		$(window).load(function() {
			$('.flexslider').flexslider();
		});
	</script>

</body>
</html>
