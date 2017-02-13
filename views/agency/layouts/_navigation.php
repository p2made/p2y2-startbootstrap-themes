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
?>
<nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
	<div class="container">
		<div class="navbar-header page-scroll">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
			</button>
			<a class="navbar-brand page-scroll" href="#page-top">P2 Agency</a>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<?php
echo Nav::widget([
	'options' => ['class' => 'navbar-nav navbar-right'],
	'items' => $menuItems,
]);
?>
		</div>
	</div>
</nav>
