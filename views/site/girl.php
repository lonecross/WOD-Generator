<?php
/* @var $this yii\web\View */
$this->title = 'WOD Generator | Do A Girl';
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
									<h1>Do a Girl</h1>
									<?php 
										$g = $girls[rand(1, count($girls))];
									?>
									<h2><?php echo $g['Name']; ?></h2>
									<p><strong><?php echo $g['Rules']; ?></strong></p>
									<p><?php echo $g['Reps']; ?></p>
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

