<?php include "modules/common/_header.php";?>

<section class="section sec-subpage-banner">
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<h2 class="page-title">Blog</h2>
			</div>
			<div class="col-sm-4">
				<nav aria-label="breadcrumb" class="text-right">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">
							<a href="#">Home</a>
						</li>
						<li class="breadcrumb-item active" aria-current="page">Blog</li>
					</ol>
				</nav>
			</div>
		</div>
	</div>
</section>

<div class="container blog-list">
	<div class="row">
		<main class="col-sm-8">
			<?php
include "modules/blog/_blog-list.php";
?>
		</main>
		<aside class="col-sm-4">
			<?php
			//include("modules/blog/_blog-widget-aboutus.php");
			include "modules/blog/_blog-widget-latest-post.php";
			include "modules/blog/_blog-widget-category-list.php";
			include "modules/blog/_blog-widget-archives.php";
			?>
		</aside>
	</div>
</div>


<div id="move-top" class="move-top">
	<span class="fa fa-angle-double-up"></span>
</div>
<?php include "modules/common/_footer.php";