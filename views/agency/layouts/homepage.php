<?php
/**
 * homepage.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-agency-theme
 * @license MIT
 */

/* @var $this \yii\web\View */
/* @var $content string */

use yii\bootstrap\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\ArrayHelper;
use p2made\helpers\FA;

p2made\theme\Agency\assets\AgencyAsset::register($this);
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
<body id="page-top" class="index">
<?php $this->beginBody() ?>

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
					<li class="hidden">
						<a href="#page-top"></a>
					</li>
					<li>
						<a class="page-scroll" href="#services">Services</a>
					</li>
					<li>
						<a class="page-scroll" href="#portfolio">Portfolio</a>
					</li>
					<li>
						<a class="page-scroll" href="#about">About</a>
					</li>
					<li>
						<a class="page-scroll" href="#team">Team</a>
					</li>
					<li>
						<a class="page-scroll" href="#contact">Contact</a>
					</li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>

<?= $content ?>

<?= $this->render('_footer.php') ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
