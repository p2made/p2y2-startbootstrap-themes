<?php
/**
 * blog-post.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package yii2-startbootstrap-themes
 * @license MIT
 */

/* @var $this yii\web\View */

use yii\bootstrap\Html;
use yii\widgets\Breadcrumbs;
use p2made\helpers\FA;

$this->title = 'Blog Post';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container">

	<!-- Page Heading/Breadcrumbs -->
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header"><?= Html::encode($this->title) ?>
				<small>Subheading</small>
			</h1>
<?= Breadcrumbs::widget([
	'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
]) ?>
		</div>
	</div>
	<!-- /.row -->

	<!-- Content Row -->
	<div class="row">

		<!-- Blog Post Content Column -->
		<div class="col-lg-8">

			<!-- Blog Post -->

			<hr>

			<!-- Date/Time -->
			<p><i class="fa fa-clock-o"></i> Posted on August 24, 2013 at 9:00 PM</p>

			<hr>

			<!-- Preview Image -->
			<img class="img-responsive" src="http://placehold.it/900x300" alt="">

			<hr>

			<!-- Post Content -->
			<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, vero, obcaecati, aut, error quam sapiente nemo saepe quibusdam sit excepturi nam quia corporis eligendi eos magni recusandae laborum minus inventore?</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, tenetur natus doloremque laborum quos iste ipsum rerum obcaecati impedit odit illo dolorum ab tempora nihil dicta earum fugiat. Temporibus, voluptatibus.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, doloribus, dolorem iusto blanditiis unde eius illum consequuntur neque dicta incidunt ullam ea hic porro optio ratione repellat perspiciatis. Enim, iure!</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, nostrum, aliquid, animi, ut quas placeat totam sunt tempora commodi nihil ullam alias modi dicta saepe minima ab quo voluptatem obcaecati?</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, dolor quis. Sunt, ut, explicabo, aliquam tenetur ratione tempore quidem voluptates cupiditate voluptas illo saepe quaerat numquam recusandae? Qui, necessitatibus, est!</p>

			<hr>

			<!-- Blog Comments -->

			<!-- Comments Form -->
			<div class="well">
				<h4>Leave a Comment:</h4>
				<form role="form">
					<div class="form-group">
						<textarea class="form-control" rows="3"></textarea>
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>

			<hr>

			<!-- Posted Comments -->

			<!-- Comment -->
			<div class="media">
				<a class="pull-left" href="#">
					<img class="media-object" src="http://placehold.it/64x64" alt="">
				</a>
				<div class="media-body">
					<h4 class="media-heading">Start Bootstrap
						<small>August 25, 2014 at 9:30 PM</small>
					</h4>
					Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
				</div>
			</div>

			<!-- Comment -->
			<div class="media">
				<a class="pull-left" href="#">
					<img class="media-object" src="http://placehold.it/64x64" alt="">
				</a>
				<div class="media-body">
					<h4 class="media-heading">Start Bootstrap
						<small>August 25, 2014 at 9:30 PM</small>
					</h4>
					Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
					<!-- Nested Comment -->
					<div class="media">
						<a class="pull-left" href="#">
							<img class="media-object" src="http://placehold.it/64x64" alt="">
						</a>
						<div class="media-body">
							<h4 class="media-heading">Nested Start Bootstrap
								<small>August 25, 2014 at 9:30 PM</small>
							</h4>
							Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
						</div>
					</div>
					<!-- End Nested Comment -->
				</div>
			</div>

		</div>

		<!-- Blog Sidebar Widgets Column -->
		<div class="col-md-4">

			<!-- Blog Search Well -->
			<div class="well">
				<h4>Blog Search</h4>
				<div class="input-group">
					<input type="text" class="form-control">
					<span class="input-group-btn">
						<button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
					</span>
				</div>
				<!-- /.input-group -->
			</div>

			<!-- Blog Categories Well -->
			<div class="well">
				<h4>Blog Categories</h4>
				<div class="row">
					<div class="col-lg-6">
						<ul class="list-unstyled">
							<li><a href="#">Category Name</a>
							</li>
							<li><a href="#">Category Name</a>
							</li>
							<li><a href="#">Category Name</a>
							</li>
							<li><a href="#">Category Name</a>
							</li>
						</ul>
					</div>
					<div class="col-lg-6">
						<ul class="list-unstyled">
							<li><a href="#">Category Name</a>
							</li>
							<li><a href="#">Category Name</a>
							</li>
							<li><a href="#">Category Name</a>
							</li>
							<li><a href="#">Category Name</a>
							</li>
						</ul>
					</div>
				</div>
				<!-- /.row -->
			</div>

			<!-- Side Widget Well -->
			<div class="well">
				<h4>Side Widget Well</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
			</div>

		</div>

	</div>
	<!-- /.row -->

	<?= $this->render('../_footer.php') ?>

	<!-- Page Code Location - remove in production -->
	<div class="row">
		<div class="col-lg-12">
			<code><?= __FILE__ ?></code>
		</div>
	</div>

</div>