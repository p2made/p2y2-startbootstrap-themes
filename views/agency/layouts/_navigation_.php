<?php
/**
 * _navigation.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-agency-theme
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
<nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header page-scroll">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
			</button>
			<a class="navbar-brand page-scroll" href="#page-top">P2Agency</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<li class="hidden"><a href="#page-top"></a></li>
				<li><a class="page-scroll" href="#services">Services</a></li>
				<li><a class="page-scroll" href="#portfolio">Portfolio</a></li>
				<li><a class="page-scroll" href="#about">About</a></li>
				<li><a class="page-scroll" href="#team">Team</a></li>
				<li><a class="page-scroll" href="#contact">Contact</a></li>
			</ul>
		</div>
		<!-- /.navbar-collapse -->
	</div>
	<!-- /.container-fluid -->
</nav>

<nav id="w0" class="navbar navbar-default navbar-custom navbar-fixed-top" role="navigation">
	<div class="container"><div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#w0-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="page-scroll navbar-brand" href="#page-top">P2Agency</a>
	</div>
	<div id="w0-collapse" class="collapse navbar-collapse">
		<ul id="w1" class="navbar-nav navbar-right nav">
			<li class="hidden"><a href="#page-top"></a></li>
			<li><a class="page-scroll" href="#services">Services</a></li>
			<li><a class="page-scroll" href="#portfolio">Portfolio</a></li>
			<li><a class="page-scroll" href="#about">About</a></li>
			<li><a class="page-scroll" href="#team">Team</a></li>
			<li><a class="page-scroll" href="#contact">Contact</a></li>
			<li class="dropdown"><a class="page-scroll dropdown-toggle" href="#" data-toggle="dropdown">Users <b class="caret"></b></a>
				<ul id="w2" class="dropdown-menu"><li><a href="/site/signup.p2m" tabindex="-1">Signup</a></li>
					<li><a href="/site/login.p2m" tabindex="-1">Login</a></li>
				</ul>
			</li>
			</ul>
		</div>
	</div>
</nav>


<!-- yii2-agency-theme-master -->
<!-- Navigation -->
<?php
	use yii\helpers\Html;
	use yii\bootstrap\Nav;
	use yii\bootstrap\NavBar;
	use yii\helpers\ArrayHelper;
	$class = !isset($class)?'':$class;
	if(Yii::$app->layout == 'homepage'){
		$menus = [
		['label' => 'Home', 'url' => ['/site/index']],
			['label' => 'Service', 'url' =>'#services','linkOptions'=>['class'=>'page-scroll']],
			['label' => 'Portfolio', 'url' =>'#portfolio','linkOptions'=>['class'=>'page-scroll']],
			['label' => 'About', 'url' =>'#about','linkOptions'=>['class'=>'page-scroll']],
			['label' => 'Team', 'url' =>'#team','linkOptions'=>['class'=>'page-scroll']],
			['label' => 'Contact', 'url' =>'#contact','linkOptions'=>['class'=>'page-scroll']],
		];
	}else{
		$menus = [
			['label' => 'Home', 'url' => ['/site/index']],
			['label' => 'Service', 'url' => ['index', '#' => 'services'], 'linkOptions' => ['class' => 'page-scroll']],
			['label' => 'Portfolio', 'url' => ['index', '#' => 'portfolio'], 'linkOptions' => ['class' => 'page-scroll']],
			['label' => 'About', 'url' => ['index', '#' => 'about'], 'linkOptions' => ['class'=>'page-scroll']],
			['label' => 'Team', 'url' => ['index', '#' => 'team'], 'linkOptions' => ['class' => 'page-scroll']],
			['label' => 'Contact', 'url' => ['index', '#' => 'contact'], 'linkOptions' => ['class'=>'page-scroll']],
		];
	}
?>

<?php
	$options = ['navbar','navbar-default','navbar-fixed-top'];
	NavBar::begin([
		'brandLabel' => 'Yii 2 Learning',
		'brandUrl' => Yii::$app->homeUrl,
		'brandOptions'=>[
			'class'=>'navbar-header page-scroll'
		],
		'options' => [
			'class' => 'navbar navbar-default navbar-fixed-top '.$class,
		],
	]);
	echo Nav::widget([
		'options' => ['class' => 'navbar-nav navbar-right'],
		'items' =>ArrayHelper::merge($menus, [
			['label' => 'Demo', 'items'=>[
				['label' => 'About', 'url' => ['/site/about']],
				['label' => 'Contact', 'url' => ['/site/contact']],
			]],
			Yii::$app->user->isGuest ?
				['label' => 'Login', 'url' => ['/site/login']] :
				['label' => 'Logout (' . Yii::$app->user->identity->username . ')',
					'url' => ['/site/logout'],
					'linkOptions' => ['data-method' => 'post']],
		]),
	]);
	NavBar::end();
?>


<nav id="w0" class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#w0-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-header page-scroll navbar-brand" href="/">Yii 2 Learning</a>
		</div>
		<div id="w0-collapse" class="collapse navbar-collapse">
			<ul id="w1" class="navbar-nav navbar-right nav">
				<li class="active"><a href="/site/index.p2m">Home</a></li>
				<li><a class="page-scroll" href="#services">Service</a></li>
				<li><a class="page-scroll" href="#portfolio">Portfolio</a></li>
				<li><a class="page-scroll" href="#about">About</a></li>
				<li><a class="page-scroll" href="#team">Team</a></li>
				<li><a class="page-scroll" href="#contact">Contact</a></li>
				<li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Demo <b class="caret"></b></a>
					<ul id="w2" class="dropdown-menu">
						<li><a href="/site/about.p2m" tabindex="-1">About</a></li>
						<li><a href="/site/contact.p2m" tabindex="-1">Contact</a></li>
					</ul>
				</li>
				<li><a href="/site/login.p2m">Login</a></li>
			</ul>
		</div>
	</div>
</nav>


<!-- Yii2 main.php -->
<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
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

<div class="wrap">
	<?php
	NavBar::begin([
		'brandLabel' => 'My Company',
		'brandUrl' => Yii::$app->homeUrl,
		'options' => [
			'class' => 'navbar-inverse navbar-fixed-top',
		],
	]);
	$menuItems = [
		['label' => 'Home', 'url' => ['/site/index']],
		['label' => 'About', 'url' => ['/site/about']],
		['label' => 'Contact', 'url' => ['/site/contact']],
	];
	if (Yii::$app->user->isGuest) {
		$menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
		$menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
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
	echo Nav::widget([
		'options' => ['class' => 'navbar-nav navbar-right'],
		'items' => $menuItems,
	]);
	NavBar::end();
	?>

	<div class="container">
		<?= Breadcrumbs::widget([
			'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
		]) ?>
		<?= Alert::widget() ?>
		<?= $content ?>
	</div>
</div>

<footer class="footer">
	<div class="container">
		<p class="pull-left">&copy; My Company <?= date('Y') ?></p>

		<p class="pull-right"><?= Yii::powered() ?></p>
	</div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>


<nav id="w0" class="navbar-inverse navbar-fixed-top navbar" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#w0-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/">My Company</a>
		</div>
		<div id="w0-collapse" class="collapse navbar-collapse">
			<ul id="w1" class="navbar-nav navbar-right nav">
				<li class="active"><a href="/site/index.p2m">Home</a></li>
				<li><a href="/site/about.p2m">About</a></li>
				<li><a href="/site/contact.p2m">Contact</a></li>
				<li><a href="/site/signup.p2m">Signup</a></li>
				<li><a href="/site/login.p2m">Login</a></li>
			</ul>
		</div>
	</div>
</nav>
