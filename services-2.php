<?php include("modules/common/_header.php"); ?>

<section class="section sec-subpage-banner">
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

<section class="m-content-wrapper sec-subpage-content sec-services clearfix">
	<div class="container">
		<div class="row">
			<div class="col-sm-4 col-lg-3">
				<div class="panel panel-default">
					<div class="panel-heading">
						<a data-toggle="collapse" href="#servicemenu">
						Our Services <b class="caret"></b>
						</a>
					</div>
					<!-- <div class="panel-body"></div> -->
					<div class="list-group collapse" id="servicemenu">
						<a href="#" class="list-group-item">Dapibus </a>
						<a href="#" class="list-group-item">Cras sit</a>
						<a href="#" class="list-group-item">Porta ac consectetur</a>
						<a href="#" class="list-group-item">Vestibulum at eros</a>
					</div>
				</div>	
			</div>

		<div class="col-sm-8 col-lg-9">
			<div class="section sec-services__content sec-divider clearfix">
				<div class="sec-services__text">	
					<h3>Porta ac consectetur</h3>
					<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non neque egestas, cursus tortor quis, imperdiet magna. Quisque nulla velit, gravida nec pulvinar non, malesuada non erat. Nam ut scelerisque tellus. Nam placerat purus ligula, a ornare mi iaculis eget. Ut gravida sem eu metus feugiat porttitor. Vestibulum orci magna, iaculis sed pretium vel, maximus eget massa. Etiam placerat egestas justo a auctor. Curabitur purus tellus, dignissim porta risus at, interdum volutpat dui.</p>
					<p><img alt="inkowly" class="full-size" src="images/work/web3.jpg" /></p>
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
			
			<?php
				include("modules/_tab-content.php");
				include("modules/_testimonial.php") ;
			?>

			<div class="section sec-divider clearfix">
				<h2>What we do?</h2>
				<p>Aenean ac sagittis massa, id laoreet diam. Phasellus sit amet iaculis velit, non tincidunt sapien. Fusce euismod urna ut lorem laoreet, in suscipit quam euismod. Cras laoreet odio non felis rhoncus vulputate. Sed luctus justo sit amet cursus consequat. Cras facilisis nibh ullamcorper consequat posuere. Nam efficitur eros sem, eu semper lacus dictum sed. Aenean efficitur porttitor sapien et imperdiet. Nulla sed faucibus tortor, id dapibus sem.</p>
			</div>

		</div>
		</div>
	</div>
</section>
	<div id="move-top" class="move-top"><span class="fa fa-angle-double-up"></span></div>
<?php include("modules/common/_footer.php"); ?>