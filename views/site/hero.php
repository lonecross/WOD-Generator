<?php
/* @var $this yii\web\View */
$this->title = 'WOD Generator | Be A Hero';
?>
		<section id="site-content">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
		
						
						<div class="site-hero">

							<div class="row">
								<div class="col-sm-4 text-center">
								
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
								<div class="col-sm-4 text-center">
									<h1>Be a Hero</h1>
									<?php 
										$h = $heros[rand(1, count($heros))];
									?>
									<h2><?php echo $h['Name']; ?></h2>
									<p><strong><?php echo $h['Rules']; ?></strong></p>
									<p><?php echo $h['Reps']; ?></p>
								</div>
								<div class="col-sm-4 text-center">
									
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