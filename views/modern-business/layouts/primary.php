<?php
/**
 * primary.php
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
use common\widgets\Alert;
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
	<title><?= Html::encode($this->title) ?> | P2 Modern Business</title>
	<?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<?= Alert::widget() ?>

<?= $this->render('_navigation.php') ?>

<?= $content ?>

<?php $this->endBody() ?>

<!-- Script to Activate the Carousel -->
<script>
$(document).ready(function(){
	$('.carousel').carousel({
		interval: 5000 //changes the speed
	})
});
</script>
</body>
</html>
<?php $this->endPage() ?>
