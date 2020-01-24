<div class="comments mt-5">
    <h4 class="section-title">Comments</h4>
    <div class="">
        <div class="list-group">
            <?php for($i=0; $i<=10; $i++) { 
                
                if($i == 2 || $i==3){
                    $replyclass="reply-comment";
                } else {
                    $replyclass="";
                }
                $comment = "We have no regrets! We were treated like royalty. I would be lost without web design.";
                if( $i % 2 == 0) {
                    $comment = "It's exactly what I've been looking for. Really good. Web design should be nominated for service of the year. The very best";
                } else ($i % 2 == 1) {
                    $comment = "If you want real marketing that works and effective implementation - web design's got you covered. It's the perfect solution for our business."
                }
            ?>
            <div class="list-group-item align-items-start d-flex comment-body <?php echo $replyclass;  ?> mb-3">
                <div class="d-flex avatar">
                    <img class="rounded-circle" src="https://picsum.photos/80/80?image=<?php echo $i+100; ?>"
                    alt="name">
                </div>
                <div class="comment-txt">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="comment-author">Name</h5>
                        <small>3 days ago</small>
                    </div>
                    <p class="mb-1"><?php echo $comment; ?></p>
                    
                </div>

            </div>
            <?php } ?>
        </div>
    </div>
</div>