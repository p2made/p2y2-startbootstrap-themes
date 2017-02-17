<?php
/**
 * _footer.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package yii2-startbootstrap-themes
 * @license MIT
 */

use yii\helpers\Html;
use p2made\helpers\FA;
?>
<footer>
	<div class="container">
		<p><?= FA::i('copyright') . ' ' . date("Y") ?> Your Website. All Rights Reserved.</p>
		<ul class="list-inline">
			<li>
				<a href="#">Privacy</a>
			</li>
			<li>
				<a href="#">Terms</a>
			</li>
			<li>
				<a href="#">FAQ</a>
			</li>
		</ul>
		<p><?= Yii::powered() ?></p>
	</div>
</footer>


