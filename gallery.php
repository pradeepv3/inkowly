<?php include("modules/common/_header.php"); ?>

	<section class="section sec-subpage-banner">
		
		<div class="container">
			
			<div class="col-sm-8">
				<h2 class="page-title">Gallery</h2>
			</div>
			<div class="col-sm-4">
				<ul class="breadcrumb">
					<li><a href="">Home</a></li>
					<li class="active">Gallery</li>
				</ul>
			</div>
		</div>
	</section>
	<section class="m-content-wrapper sec-gallery clearfix">
        <div class="section clearfix">
            <div class="">
            <?php for($i=0; $i<=20; $i++ ) { if($i==0) {$activeClass= "active";}else {$activeClass= "";} ?>
                <div class="col-xs-6 col-xws-4 col-md-2">
                    <a class="grouped_elements" data-fancybox-group="group1" href="https://picsum.photos/200/200/">
                        <img class="" src="https://picsum.photos/200/200/?<?php echo $i; ?>" alt="Aliquam non enim" />
                    </a>
                </div>
            <?php } ?>
            </div>
        </div>
	</section>
	<div id="move-top" class="move-top"><span class="fa fa-angle-double-up"></span></div>
<?php include("modules/common/_footer.php"); ?>