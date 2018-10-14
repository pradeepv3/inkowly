<?php include("modules/common/_header.php"); ?>

<section class="section sec-subpage-banner">

	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<h2 class="page-title">Gallery</h2>
			</div>
			<div class="col-sm-4">
				<nav aria-label="breadcrumb" class="text-right">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">
							<a href="#">Home</a>
						</li>
						<li class="breadcrumb-item active" aria-current="page">Gallery</li>
					</ol>
				</nav>
			</div>
		</div>
	</div>
</section>
<section class="m-content-wrapper sec-gallery clearfix">
	<div class="section clearfix">
		<div class="row">
			<?php for($i=1; $i<=20; $i++ ) { ?>
			<div class="col-4 col-md-3 col-lg-2">
				<a class="grouped_elements" data-fancybox-group="group1" href="images/gallery/pic<?php echo $i; ?>.jpg">
					<img class="" src="images/gallery/pic<?php echo $i; ?>-s.jpg" alt="Aliquam non enim"
					/>
				</a>
			</div>
			<?php } ?>
		</div>
	</div>
</section>
<div id="move-top" class="move-top">
	<span class="fa fa-angle-double-up"></span>
</div>
<?php include("modules/common/_footer.php"); 