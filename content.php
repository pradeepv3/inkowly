<div class="section sec-content-intro">
	<div class="container text-center">
		
		<h2 class="sec-title text-center">Our Services</h2>
		
		<div class="col-sm-6 col-lg-3 wow fadeInRight" >
			<div class="sec-content-intro__icon"><span class="fa fa-coffee"></span></div>
			<h3>Industrial Chemicals</h3>
			<p>We market and sell all self-manufactured products as stated and buy or import and sell ...</p>
			<a href="" class="btn btn-default">Read more</a>
		</div>
		
		<div class="col-sm-6 col-lg-3 wow fadeIn" >
			<div class="sec-content-intro__icon"><span class="fa fa-rocket"></span></div>
			<h3>Pest Control</h3>
			<p>Pest Control is under taken as per the requirements of the Environmental Impact Assessment Act  ...</p>
			<a href="" class="btn btn-default">Read more</a>
		</div>

		<div class="col-sm-6 col-lg-3 wow fadeIn" >
			<div class="sec-content-intro__icon"><span class="fa fa-umbrella"></span></div>
			<h3>Protective Equipments</h3>
			<p>Personal Protective Equipment (PPE), environmental equipment and safety accessories are supplied to clients.</p>
			<a href="" class="btn btn-default">Read more</a>
		</div>

		<div class="col-sm-6 col-lg-3 wow fadeInLeft" >
			<div class="sec-content-intro__icon"><span class="fa fa-hourglass"></span></div>
			<h3>Agro-Chemicals</h3>
			<p>We supply all kinds of Agro-chemicals for Industrial, Arable and Pastoral applications.</p>
			<a href="" class="btn btn-default">Read more</a>
		</div>

	</div>
</div>

<div class="section parallax sec-our-company clearfix">
	<div class="container wow slideInUp">
		<h2 class="sec-title">Our Company</h2>
		<p>Established in 1988 and incorporated in 1988 Chemdol (Pty) Ltd is a 100% citizen owned company. It has vast experience in cleaning chemicals manufacturing and supply across the country. It was set up in order to assist, Corporations, Enterprises, Individuals and Government Ministries and departments with supply of quality cleaning and Industrial chemicals within the legal framework and compliance with the regulations of the Department of Environmental Aairs.</p>
		<div class="sec-our-company_footer">
			<a href="javascript:void(0)" class="btn btn-custom pull-right">Read more</a> 
			<span><span class="sec-our-company__phone"><span class="fa fa-phone-square"></span>+2323 2222 2222</span></span>
		</div>
	</div>
</div>

<div class="section sec-our-team clearfix">
	<div class="container multi-carousel">
		<h2 class="sec-title">Meet Team</h2>
		
			<div class="row col-md-12">
			<div class="carousel slide" data-ride="carousel" data-interval="false" data-type="multi" id="myCarousel">
			  <div class="carousel-inner">
			  	<?php for($i=0; $i<=10; $i++ ) { if($i==0) {$activeClass= "active";}else {$activeClass= "";} ?>
			    <div class="item <?php echo $activeClass; ?>">
					<div class="col-xs-6 col-sm-3 col-md-2  ">
						<div class="sec-profile">
							<div class="sec-profile__pic">
								<span class="fa fa-user"></span>
							</div>
							<p class="sec-profile__name">Name <?php echo $i ?></p>
							<p class="sec-profile__designation">Designation</p>
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




<div class="section parallax sec-request-call clearfix">
	<div class="container clearfix">
		<div class="col-md-6 wow fadeInLeft" > 
			<h2 class="sec-title">Request a Call</h2>
			<p>For Business inquiry fill our short contact form or you can also sehd us an email and we will get in touch shortly, or call us - (+249 99999 00000)</p>
		</div>
		<div class="col-md-6 wow fadeInRight" >
			<form class="">
				<div class="row">
					<div class="col-md-6"><input type="text" name="" value="" placeholder="First Name" /></div>
					<div class="col-md-6"><input type="text" name="" value="" placeholder="Last Name" /></div>
				</div>
				<div class="row">
					<div class="col-md-6"><input type="text" name="" value="" placeholder="Email" /></div>
					<div class="col-md-6"><input type="text" name="" value="" placeholder="Phone Number" /></div>
				</div>
				<div class="row">
					<div class="col-md-12"><textarea name="" value="" placeholder="Message"></textarea></div>
				</div>
				<div class="row">
					<div class="col-md-12"><input type="submit" name="Submit" value="Submit" class="btn pull-right" /></div>
				</div>
			</form>
		</div>
	</div>
</div>




<div class="section sec-our-client clearfix">
	<div class="container">
		<h2 class="sec-title">Our Client</h2>
		<div class="sec-our-client__inner">
			
			  	<?php for($i=0; $i<=10; $i++ ) { if($i==0) {$activeClass= "active";}else {$activeClass= "";} ?>
			    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 ">
			      <div class="sec-our-client__logo"><span class="fa fa-photo"></span></div>
			    </div>
			    <?php } ?>

		</div>



	</div>
</div>


<div class="section sec-countdown clearfix">
	<div class="container text-center" id="counter">
		<h2 class="sec-title text-center">Our Works</h2>
		<div class="col-xs-6 col-sm-3">
			<div class="fa fa-leanpub "></div>
			<div class="sec-countdown_count" data-count="0">0</div>
			<h3>Title</h3>
		</div>
		<div class="col-xs-6 col-sm-3">
			<div class="fa fa-camera-retro "></div>
			<div class="sec-countdown_count" data-count="345">0</div>
			<h3>Title</h3>
		</div>
		<div class="col-xs-6 col-sm-3">
			<div class="fa fa-image "></div>
			<div class="sec-countdown_count" data-count="2465">0</div>
			<h3>Title</h3>
		</div>
		<div class="col-xs-6 col-sm-3">
			<div class="fa fa-simplybuilt "></div>
			<div class="sec-countdown_count" data-count="236">0</div>
			<h3>Title</h3>
		</div>
	</div>
</div>

<div class="section sec-progressbar clearfix">
	<div class="container " id="progress_bar">
		<div class="col-md-4 col-lg-4">

		</div>
		<div class="col-md-4 col-lg-4">
			<h3 class="sec-title">Recent post</h3>
			<div class="row">
				<img scr="" />
				<h4>Title One witht short text</h4>
				<p><span></span></p>
			</div>
		</div>
		<div class="col-md-4 col-lg-4" id="progress_bar">
			<div class="progress" >
				<div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
					<span class="pull-left">HTML</span>
					<span class="pull-right">60% Complete</span>
				</div>
			</div>
			<div class="progress">
				<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" >
					<span class="pull-left">CSS</span>
					<span class="pull-right">40% Complete</span>
				</div>
			</div>
			<div class="progress">
				<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" >
					<span class="pull-left">PHP</span>
					<span class="pull-right">20% Complete</span>
				</div>
			</div>
		</div>
	</div>
</div>