<?php include("modules/common/_header2.php"); ?>

	<section class="section sec-subpage-banner parallax page-banner">
		
		<div class="container">
			
			<div class="col-sm-8">
				<h2 class="page-title">Services</h2>
			</div>
			<div class="col-sm-4">
				<ul class="breadcrumb">
					<li><a href="">Home</a></li>
					<li class="active">Services</li>
				</ul>
			</div>
		</div>
	</section>
	<section class="m-content-wrapper sec-subpage-main sec-services">

		<div class="section sec-services__content sec-divider clearfix">
			<div class="container">

				<div class="col-sm-6">
					<div class="sec-services__img">
						<img alt="Inkowly" src="images/work/web3.jpg" />
					</div>
				</div>
				<div class="col-sm-6">
					<div class="sec-services__text">
						<h3>Tiorta ac consecteturtle</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non neque egestas, cursus tortor quis, imperdiet magna. Quisque nulla velit, gravida nec pulvinar non, malesuada non erat. Nam ut scelerisque tellus. Nam placerat purus ligula, a ornare mi iaculis eget. Ut gravida sem eu metus feugiat porttitor. Vestibulum orci magna, iaculis sed pretium vel, maximus eget massa. Etiam placerat egestas justo a auctor. Curabitur purus tellus, dignissim porta risus at, interdum volutpat dui.</p>
						<div>
						<div class="col-xws-6 col-sm-6">
							<ul class="list-unstyled icon-list">
								<li>Html5</li>
								<li>Responsive</li>
								<li>Bootstrap 3</li>
								<li>jQuery</li>
							</ul>
						</div>
						<div class="col-xws-6 col-sm-6">
							<ul class="list-unstyled icon-list">
								<li>Html5</li>
								<li>Responsive </li>
								<li>Bootstrap 3</li>
								<li>jQuery</li>
							</ul>
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>

		<?php
			$_GET['classname']="";
			include("modules/_services.php");
		?>

		<div class="section sec-divider clearfix">
			<div class="container">
				<h2>What we do?</h2>
				<p>Aenean ac sagittis massa, id laoreet diam. Phasellus sit amet iaculis velit, non tincidunt sapien. Fusce euismod urna ut lorem laoreet, in suscipit quam euismod. Cras laoreet odio non felis rhoncus vulputate. Sed luctus justo sit amet cursus consequat. Cras facilisis nibh ullamcorper consequat posuere. Nam efficitur eros sem, eu semper lacus dictum sed. Aenean efficitur porttitor sapien et imperdiet. Nulla sed faucibus tortor, id dapibus sem.</p>
			</div>
		</div>

		<?php
			include("modules/_tab-content.php");
			include("modules/_testimonial.php") ;
		?>
		
	</section>
	<div id="move-top" class="move-top"><span class="fa fa-angle-double-up"></span></div>
<?php include("modules/common/_footer.php"); ?>