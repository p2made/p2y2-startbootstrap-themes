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

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
	<?= $this->render('_head.php', []) ?>
</head>
<body>
<?php $this->beginBody() ?>

<?= $this->render('_header.php') ?>

<?php
NavBar::begin([
	'brandLabel' => 'P2 Modern Business',
	'brandUrl' => Yii::$app->homeUrl,
	'options' => [
		'class' => 'navbar navbar-default',
	],
]);

$menuItems = [
	['label' => 'Home', 'url' => ['/site/index']],
];
if (Yii::$app->controller->action->id === 'signup') {
	$menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
} else {
	$menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
}

echo Nav::widget([
	'options' => ['class' => 'nav navbar-nav'],
	'items' => $menuItems,
]);
NavBar::end();
?>

<?= $content ?>

<?= $this->render('_footer.php') ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
