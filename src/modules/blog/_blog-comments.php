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
					<p class="mb-1">Donec id elit non mi porta gravida at eget metusDonec id elit non mi porta gravida at eget metusDonec id elit non mi
						porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
					<small>Donec id elit non mi porta.</small>
				</div>

			</div>
			<?php } ?>
		</div>
	</div>
</div>