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
	<section class="m-content-wrapper sec-services">

		<?php 
			include("modules/_what-we-do.php");
			$_GET['classname']="sec-divider";
			include("modules/_services.php");
			include("modules/_tab-content.php");
			include("modules/_testimonial.php") ;
		?>

		<!-- <div class="section sec-divider clearfix">
			<div class="container">
				<div class="col-sm-12">
					<h2>What we do?</h2>
					<p>Aenean ac sagittis massa, id laoreet diam. Phasellus sit amet iaculis velit, non tincidunt sapien. Fusce euismod urna ut lorem laoreet, in suscipit quam euismod. Cras laoreet odio non felis rhoncus vulputate. Sed luctus justo sit amet cursus consequat. Cras facilisis nibh ullamcorper consequat posuere. Nam efficitur eros sem, eu semper lacus dictum sed. Aenean efficitur porttitor sapien et imperdiet. Nulla sed faucibus tortor, id dapibus sem.</p>
				</div>
			</div>
		</div> -->

		

		
		
	</section>
	<div id="move-top" class="move-top"><span class="fa fa-angle-double-up"></span></div>
<?php include("modules/common/_footer.php"); ?>