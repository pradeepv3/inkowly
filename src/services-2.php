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

<section class="m-content-wrapper sec-subpage-content sec-services clearfix">
	<div class="container">
		<div class="row">
			<div class="col-sm-4 col-lg-3 sidebar">
				<div class="card card-default sidebar_menu">
					<div class="card-header sidebar_menu-title">
						<a data-toggle="collapse" href="#servicemenu" class="dropdown-toggle">
							Our Services
						</a>
					</div>
					<!-- <div class="panel-body"></div> -->
					<div class="list-group collapse sidebar_menu-list" id="servicemenu">
						<a href="#" class="list-group-item">
							<span class="fa fa-plane"></span>Vestibulum Dapibus </a>
						<a href="#" class="list-group-item">
							<span class="fa fa-lock"></span>Curabitur Cras sit</a>
						<a href="#" class="list-group-item">
							<span class="fa fa-leaf"></span>Porta ac consectetur</a>
						<a href="#" class="list-group-item">
							<span class="fa fa-user"></span>Vestibulum at eros</a>
						<a href="#" class="list-group-item">
							<span class="fa fa-video-camera"></span>Quisque sit</a>
						<a href="#" class="list-group-item">
							<span class="fa fa-tags"></span>Etiamac consectetur</a>
						<a href="#" class="list-group-item">
							<span class="fa fa-link"></span>Aenean at eros</a>
					</div>
				</div>
			</div>

			<div class="col-sm-8 col-lg-9">
				<div class="section sec-services__content sec-divider clearfix">

					<h3>Porta ac consectetur</h3>
					<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non neque egestas, cursus tortor quis, imperdiet magna.
						Quisque nulla velit, gravida nec pulvinar non, malesuada non erat. Nam ut scelerisque tellus. Nam placerat purus ligula,
						a ornare mi iaculis eget. Ut gravida sem eu metus feugiat porttitor. Vestibulum orci magna, iaculis sed pretium vel,
						maximus eget massa. Etiam placerat egestas justo a auctor. Curabitur purus tellus, dignissim porta risus at, interdum
						volutpat dui.</p>
					<p>
						<img alt="inkowly" class="full-size" src="images/work/web3.jpg" />
					</p>
					<div class="row">
						<div class="col-xws-6 col-sm-6">
							<ul class="list-unstyled icon-list icon-check-circle">
								<li>Nullam id massa consequat, rutrum ex eget,</li>
								<li>Nullam mattis sapien ut consequat interdum.</li>
								<li>Quisque lacinia odio id lacus dictum, et maximus</li>
								<li>Nulla nec risus at diam porttitor egestas.</li>
							</ul>
						</div>
						<div class="col-xws-6 col-sm-6">
							<ul class="list-unstyled icon-list icon-check-circle">
								<li>Phasellus non sapien vitae justo vulputate consequat quis eu lorem.</li>
								<li>Ut fermentum eros et purus vulputate placerat.</li>
								<li>Integer venenatis lorem non malesuada volutpat.</li>
								<li>Sed iaculis leo vitae augue porttitor, quis aliquam urna ullamcorper.</li>
							</ul>
						</div>
					</div>

				</div>

				<?php
				include("modules/_tab-content.php");
				include("modules/_testimonial.php") ;
			?>
				<hr>
				<div class="section clearfix">
					<h2>What we do?</h2>
					<p>Aenean ac sagittis massa, id laoreet diam. Phasellus sit amet iaculis velit, non tincidunt sapien. Fusce euismod urna
						ut lorem laoreet, in suscipit quam euismod. Cras laoreet odio non felis rhoncus vulputate. Sed luctus justo sit amet
						cursus consequat. Cras facilisis nibh ullamcorper consequat posuere. Nam efficitur eros sem, eu semper lacus dictum
						sed. Aenean efficitur porttitor sapien et imperdiet. Nulla sed faucibus tortor, id dapibus sem.</p>
				</div>

			</div>
		</div>
	</div>
</section>
<div id="move-top" class="move-top">
	<span class="fa fa-angle-double-up"></span>
</div>
<?php include("modules/common/_footer.php"); 