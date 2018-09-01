<?php include("modules/common/_header.php"); ?>

<section class="section sec-subpage-banner">

	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<h2 class="page-title">Services</h2>
			</div>
			<div class="col-sm-4">
				<nav aria-label="breadcrumb" class="text-right">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">
							<a href="#">Home</a>
						</li>
						<li class="breadcrumb-item active" aria-current="page">Services</li>
					</ol>
				</nav>
			</div>
		</div>
	</div>
</section>
<section class="m-content-wrapper sec-services">

	<?php 
		include("modules/_what-we-do.php");
		echo "<hr>";
		include("modules/_services.php");
		include("modules/_tab-content.php");
		include("modules/_typewrite.php");
		include("modules/_testimonial.php") ;
	?>


</section>
<div id="move-top" class="move-top">
	<span class="fa fa-angle-double-up"></span>
</div>
<?php include("modules/common/_footer.php"); 