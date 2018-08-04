<div class="section sec-multicarousel clearfix">
	<div class="container multi-carousel">
		<h2 class="sec-title br-line text-center">Our Clients</h2>
			<div class="row col-md-12">
			<div class="carousel slide" data-ride="carousel" data-interval="2000" data-type="multi" id="myCarousel">
			  <div class="carousel-inner">
			  	<?php for($i=0; $i<=9; $i++ ) { if($i==0) {$activeClass= "active";}else {$activeClass= "";} ?>
			    <div class="item <?php echo $activeClass; ?>">
					<div class="col-xs-6 col-sm-3 col-md-2  ">
						<div class="sec-profile">
							<div class="sec-profile__pic">
								<img src="images/logo/logo<?php echo $i; ?>.png" alt="logo<?php echo $i; ?>" />
							</div>
						</div>
					</div>
			    </div>
			    <?php } ?>

			  </div>
			  <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
			  <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
			</div>
		</div>
	</div>
</div>