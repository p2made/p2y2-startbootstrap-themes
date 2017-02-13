<?php
/**
 * _navigation.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package yii2-startbootstrap-themes
 * @license MIT
 */

use yii\bootstrap\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\ArrayHelper;
use p2made\helpers\FA;

$menuItems = [
	['label' => '', 'url' =>'#page-top', 'options' => ['class' => 'hidden']],
	['label' => 'Services', 'url' =>'#services', 'linkOptions' => ['class' => 'page-scroll']],
	['label' => 'Portfolio', 'url' =>'#portfolio', 'linkOptions' => ['class' => 'page-scroll']],
	['label' => 'About', 'url' =>'#about', 'linkOptions' => ['class' => 'page-scroll']],
	['label' => 'Team', 'url' =>'#team', 'linkOptions' => ['class' => 'page-scroll']],
	['label' => 'Contact', 'url' =>'#contact', 'linkOptions' => ['class' => 'page-scroll']],
];
if (Yii::$app->user->isGuest) {
	$menuItems[] = ['label' => 'Users', 'linkOptions' => ['class' => 'page-scroll'], 'items' => [
		['label' => 'Signup', 'url' => ['/site/signup']],
		['label' => 'Login', 'url' => ['/site/login']],
	]];
} else {
	$menuItems[] = '<li>'
		. Html::beginForm(['/site/logout'], 'post')
		. Html::submitButton(
			'Logout (' . Yii::$app->user->identity->username . ')',
			['class' => 'btn btn-link logout']
		)
		. Html::endForm()
		. '</li>';
}

NavBar::begin([
	'brandLabel' => 'P2Agency',
	'brandUrl' => '#page-top',
	'brandOptions'=>[
		'class'=>'page-scroll'
	],
	'options' => [
		'class' => 'navbar navbar-default navbar-custom navbar-fixed-top',
	],
]);
echo Nav::widget([
	'options' => ['class' => 'navbar-nav navbar-right'],
	'items' => $menuItems,
]);
NavBar::end();
?>


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
