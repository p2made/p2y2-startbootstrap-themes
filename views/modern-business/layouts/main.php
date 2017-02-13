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

$layout = 'primary';

if (Yii::$app->controller->action->id === 'login') {
	$layout = 'user-entry';
}
if (Yii::$app->controller->action->id === 'signup') {
	$layout = 'user-entry';
}

echo $this->render(
	$layout, ['content' => $content]
);
