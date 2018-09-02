<div class="section sec-multicarousel clearfix">
	<div class="container multi-carousel">
		<h2 class="sec-title br-line text-center">Our Clients</h2>
			<div class="col-md-12">
			<div class="carousel slide" data-ride="carousel" data-interval="2000000" data-type="multi" id="myCarousel">
			  <div class="carousel-inner">
			  	<?php for($i=0; $i<=9; $i++ ) { if($i==0) {$activeClass= "active";}else {$activeClass= "";} ?>
			    <div class="carousel-item <?php echo $activeClass; ?>">
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 client-logo">
						
						<img src="images/logo/logo<?php echo $i; ?>.png" alt="logo<?php echo $i; ?>" />
						
					</div>
			    </div>
			    <?php } ?>

			  </div>
			  <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
				  <i class="carousel-control-prev-icon"></i>
				</a>
			  <a class="carousel-control-next" href="#myCarousel" data-slide="next"><i class="carousel-control-next-icon"></i></a>
			</div>
		</div>
	</div>
</div>