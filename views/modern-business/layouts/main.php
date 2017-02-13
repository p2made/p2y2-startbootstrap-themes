<?php
/**
 * main.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package yii2-startbootstrap-themes
 * @license MIT
 */

/* @var $this \yii\web\View */
/* @var $content string */

use yii\bootstrap\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\ArrayHelper;
use p2made\helpers\FA;

p2made\SB\assets\ModernBusinessAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
	<meta charset="<?= Yii::$app->charset ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?= Html::csrfMetaTags() ?>
	<title><?= Html::encode($this->title) ?></title>
	<?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

	<!-- Navigation -->
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.html">Start Bootstrap</a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="about.html">About</a>
					</li>
					<li>
						<a href="services.html">Services</a>
					</li>
					<li>
						<a href="contact.html">Contact</a>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li>
								<a href="portfolio-1-col.html">1 Column Portfolio</a>
							</li>
							<li>
								<a href="portfolio-2-col.html">2 Column Portfolio</a>
							</li>
							<li>
								<a href="portfolio-3-col.html">3 Column Portfolio</a>
							</li>
							<li>
								<a href="portfolio-4-col.html">4 Column Portfolio</a>
							</li>
							<li>
								<a href="portfolio-item.html">Single Portfolio Item</a>
							</li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li>
								<a href="blog-home-1.html">Blog Home 1</a>
							</li>
							<li>
								<a href="blog-home-2.html">Blog Home 2</a>
							</li>
							<li>
								<a href="blog-post.html">Blog Post</a>
							</li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Other Pages <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li>
								<a href="full-width.html">Full Width Page</a>
							</li>
							<li>
								<a href="sidebar.html">Sidebar Page</a>
							</li>
							<li>
								<a href="faq.html">FAQ</a>
							</li>
							<li>
								<a href="404.html">404</a>
							</li>
							<li>
								<a href="pricing.html">Pricing Table</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container -->
	</nav>

<?= $content ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
