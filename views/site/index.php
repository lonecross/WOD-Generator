<?php
/* @var $this yii\web\View */
$this->title = 'WOD Generator';
?>

		<section id="site-jumbotron">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
		
						<div class="jumbotron">
							
							<div class="row">
								<div class="col-sm-8">
									<h1>Custom Workouts</h1>

									<p class="lead">"The number of reps you can do is directly proportional to the number of people you think are watching."</p>

									<p><a class="btn btn-lg btn-success" href="/custom">Generate Now</a></p>
								</div>
								<div class="col-sm-4">
									<?php if(!YII_DEBUG) { ?>
										<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
										<!-- WOD Block -->
										<ins class="adsbygoogle"
											 style="display:inline-block;width:300px;height:250px"
											 data-ad-client="ca-pub-5089214589271094"
											 data-ad-slot="8148576908"></ins>
										<script>
										(adsbygoogle = window.adsbygoogle || []).push({});
										</script>
									<?php }else{ ?>
										<img src="http://placehold.it/300x250&text=Ad" alt="Ad" />
									<?php } ?>
								</div>
							</div>
							
						</div>
			
					</div>
				</div>
			</div>
		</section>
							

		<section id="site-content">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
		
						
						<div class="site-index">

							<div class="row">
								<a href="/do-a-girl" class="a-content">
									<div class="col-lg-4 text-center">
										<i class="fa fa-female fa-5x"></i>
										<h2>Do a Girl</h2>
										<p>Donec eget viverra risus, nec sagittis libero. Nulla leo tellus, ultricies vulputate fringilla id, pellentesque nec risus. Fusce non varius est. Ut erat lorem, porta sit amet enim at, molestie iaculis orci.</p>
									</div>
								</a>
								<a href="/be-a-hero" class="a-content">
									<div class="col-lg-4 text-center">
										<i class="fa fa-trophy fa-5x"></i>
										<h2>Be a Hero</h2>
										<p>Donec eget viverra risus, nec sagittis libero. Nulla leo tellus, ultricies vulputate fringilla id, pellentesque nec risus. Fusce non varius est. Ut erat lorem, porta sit amet enim at, molestie iaculis orci.</p>
									</div>
								</a>
								<a href="/custom" class="a-content">
									<div class="col-lg-4 text-center">
										<i class="fa fa-cogs fa-5x"></i>
										<h2>Custom</h2>
										<p>Donec eget viverra risus, nec sagittis libero. Nulla leo tellus, ultricies vulputate fringilla id, pellentesque nec risus. Fusce non varius est. Ut erat lorem, porta sit amet enim at, molestie iaculis orci.</p>
									</div>
								</a>
							</div>

						</div>

			
					</div>
				</div>
			</div>
		</section>	
