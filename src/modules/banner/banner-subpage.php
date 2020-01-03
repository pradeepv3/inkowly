<div class="m-banner-subpage">
    <div class="container">
        <div class="col-sm-8">
            <?php 
                $pageName = $_GET['page'];
                $pageName = str_replace('-',' ', $pageName);
            ?>
            <h1><?php echo $pageName; ?></h1>
        </div>
        <div class="col-sm-4 hidden-xs hidden-sm text-right">
            <a href="index.php">Home</a> <span class="fa fa-caret-right"></span> <a href="#"><?php echo $pageName; ?></a>
        </div>
    </div>
</div>