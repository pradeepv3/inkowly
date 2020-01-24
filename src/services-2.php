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
                        <a href="#" class="list-group-item"><span class="fa fa-plane"></span>Web Design</a>
                        <a href="#" class="list-group-item"><span class="fa fa-lock"></span>Web Developement</a>
                        <a href="#" class="list-group-item"><span class="fa fa-leaf"></span>Hosting Service</a>
                        <a href="#" class="list-group-item"><span class="fa fa-user"></span>APP Development</a>
                        <a href="#" class="list-group-item"><span class="fa fa-video-camera"></span>PDF to HTML</a>
                        <a href="#" class="list-group-item"><span class="fa fa-tags"></span>Wordpress Development</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-8 col-lg-9">
                <div class="section sec-services__content sec-divider clearfix">

                    <h3>What we do?</h3>
                    <p>PradeepUI templates are created with the latest version of Bootstap. 100% responsive design and is beautifully displayed on all devices. All the files are clearly organized and it’s easy to use and edit them for your needs.</p>
                    <p>
                        <img alt="inkowly" class="full-size" src="images/work/web3.jpg" />
                    </p>
                    <div class="row">
                        <div class="col-xws-6 col-sm-6">
                            <ul class="list-unstyled icon-list icon-check-circle">
                                <li>Why You Must Experience Free Template At Least Once In Your Lifetime.</li>
                                <li>Why Free Template Had Been So Popular Till Now?</li>
                                <li>5 Quick Tips Regarding Free Template.</li>
                                <li>10 Things You Need To Know About Free Template Today.</li>
                            </ul>
                        </div>
                        <div class="col-xws-6 col-sm-6">
                            <ul class="list-unstyled icon-list icon-check-circle">
                                <li>5 Factors That Affect Free Template's Longevity.</li>
                                <li>Quiz: How Much Do You Know about Free Template?</li>
                                <li>Learn All About Free Template From This Politician.</li>
                                <li>10 Awesome Things You Can Learn From Studying Free Template.</li>
                            </ul>
                        </div>
                    </div>

                </div>

                <?php
                    include("modules/_tab-content.php");
                    include("modules/_testimonial.php") ;
                ?>
            </div>
        </div>
    </div>
</section>
<div id="move-top" class="move-top">
    <span class="fa fa-angle-double-up"></span>
</div>
<?php include("modules/common/_footer.php"); 