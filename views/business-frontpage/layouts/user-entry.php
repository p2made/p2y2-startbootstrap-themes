<?php
/**
 * user-entry.php
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

/* @var $this \yii\web\View */
/* @var $content string */

$menuItems = [];
if (Yii::$app->controller->action->id === 'signup') {
	$menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
} else {
	$menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
}
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
	<?= $this->render('_head.php', []) ?>
</head>
<body id="page-top">
<?php $this->beginBody() ?>

<?php
NavBar::begin([
	'brandLabel' => 'P2 Business Frontpage',
	'brandUrl' => '#',
	'brandOptions'=>[
		'class'=>'page-scroll'
	],
	'options' => [
		'class' => 'navbar navbar-inverse navbar-fixed-top',
	],
]);
echo Nav::widget([
	'options' => ['class' => 'navbar-nav navbar-right'],
	'items' => $menuItems,
]);
NavBar::end();
?>

<?= $content ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
