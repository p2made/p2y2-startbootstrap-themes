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

use p2made\helpers\FA;
?>
	<!-- Footer -->
	<footer class="text-center">
		<div class="footer-above">
			<div class="container">
				<div class="row">
					<div class="footer-col col-md-4">
						<h3>Location</h3>
						<p>3481 Melrose Place
							<br>Beverly Hills, CA 90210</p>
					</div>
					<div class="footer-col col-md-4">
						<h3>Around the Web</h3>
						<ul class="list-inline">
							<li>
								<a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
							</li>
							<li>
								<a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
							</li>
							<li>
								<a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
							</li>
							<li>
								<a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
							</li>
							<li>
								<a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>
							</li>
						</ul>
					</div>
					<div class="footer-col col-md-4">
						<h3>About Freelancer</h3>
						<p>Freelance is a free to use, open source Bootstrap theme created by <a href="http://startbootstrap.com">Start Bootstrap</a>.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-below">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						Copyright &copy; Your Website <?= date("Y") ?>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
	<div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
		<a class="btn btn-primary" href="#page-top">
			<i class="fa fa-chevron-up"></i>
		</a>
	</div>


<footer class="footer">
	<div class="container">
		<p class="pull-left">
			Crafted with <?= FA::icon('heart') ?> by Pedro fp, on the
			<a href="https://en.wikipedia.org/wiki/Sunshine_Coast,_Queensland" target="_blank">
				Sunshine Coast <?= FA::icon(FA::_EXTERNAL_LINK) ?>
			</a> of
			<a href="https://en.wikipedia.org/wiki/Queensland" target="_blank">
				Queensland <?= FA::icon(FA::_EXTERNAL_LINK) ?>
			</a>,
			<a href="https://en.wikipedia.org/wiki/Australia" target="_blank">
				Australia <?= FA::icon(FA::_EXTERNAL_LINK) ?>
			</a>
			<?= FA::icon('copyright') ?> <?= date('Y') ?>
		</p>

		<p class="pull-right"><?= Yii::powered() ?></p>
	</div>
</footer>


