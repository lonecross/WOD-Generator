<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
  <head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<meta name="author" content="" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<?= Html::csrfMetaTags() ?>
	
    <title><?= Html::encode($this->title) ?></title>
    
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
	
	<?php $this->head() ?>

  </head>
  <body>
  <?php $this->beginBody() ?>
  
    <div id="site-wrapper">
	
		<header id="site-header">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						
						<nav class="navbar navbar-default" role="navigation">
						  <div class="container-fluid">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
							  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							  </button>
							  <a class="navbar-brand" href="./index.html"><span class="label label-danger">WOD</span> Generator</a>
							</div>

							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							  <ul class="nav navbar-nav navbar-right">
								<li><a href="./girl.html">Do a Girl</a></li>
								<li><a href="./hero.html">Be a Hero</a></li>
								<li><a href="./custom.html">Custom</a></li>
							  </ul>
							</div><!-- /.navbar-collapse -->
						  </div><!-- /.container-fluid -->
						</nav>
				
					</div>
				</div>
			</div>
		</header>
		
		<?= $content ?>
		
	</div>
	
	<footer id="site-footer">
		<div class="container">
			<div class="row footer-info">
				<div class="col-md-6">
					<p class="footer-copyright">Copyright &copy; 2014 Lone Cross LLC. All rights reserved.</p>
				</div>
				<div class="col-md-6 text-right">
					<p>Powered by <a href="https://www.nihil.co" alt="The NIHIL Corporation">NIHIL</a>.</p>
				</div>
			</div>
		</div>
	</footer>
	
  <?php $this->endBody() ?>
  </body>
</html>
<?php $this->endPage() ?>