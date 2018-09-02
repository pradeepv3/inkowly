<div class="section sec-blog clearfix">


	<div class="col-xs-12 post-entry">
		<div class="post-entry__pic">
			<img src="images/web4.jpg" alt="Vestibulum eu nisi quis ipsum egestas cursus nec eget quam" />
		</div>
		<div class="post-entry-content">
			<h3 class="post-entry__title">Vestibulum eu nisi quis ipsum egestas cursus nec eget quam</h3>
			<ul class="list-inline post-entry__meta">
				<li class="list-inline-item">
					<span class="fa  fa-clock-o"></span> Jan, 12, 2018
				</li>
				<li class="float-right">
					<span class='fa fa-heart-o'></span> 32
				</li>
				<li class="float-right mr-2">
					<span class='fa fa-comment-o'></span> 23
				</li>
			</ul>
			<p class="post-entry__excrept">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non velit nec diam pretium accumsan. Proin ipsum
				augue, iaculis
				quis tempor id, dignissim ut eros. Ut tincidunt arcu ac finibus ultricies. Curabitur leo nulla, ultricies ut odio
				eget,
				faucibus faucibus sem. Suspendisse facilisis, dui ac ullamcorper maximus, justo odio aliquam massa, iaculis feugiat
				nisi
				nisl sed urna. </p>
			<p class="post-entry__excrept">Maecenas suscipit diam vitae magna placerat, non venenatis mi aliquet. Nullam id nisl
				eget tellus mollis fermentum at
				ut orci. Suspendisse at turpis nibh. Proin pharetra augue non nisl blandit consequat. Sed magna metus, pellentesque
				vel
				urna pharetra, finibus aliquet neque. Integer aliquam vestibulum magna. Pellentesque habitant morbi tristique
				senectus
				et netus et malesuada fames ac turpis egestas. Quisque at lorem non justo facilisis facilisis at quis quam. Vivamus
				facilisis
				enim vitae magna molestie laoreet. Nulla faucibus sodales massa at convallis. </p>
			<blockquote class="blockquote text-center">
				<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
				<footer class="blockquote-footer">Someone famous in
					<cite title="Source Title">Source Title</cite>
				</footer>
			</blockquote>
			<p class="post-entry__excrept">In hac habitasse platea dictumst. Mauris mi diam, accumsan a nisl ut, sagittis
				rhoncus diam. Nam id suscipit metus. Fusce
				in congue mi, eget aliquet tortor. In imperdiet porta nibh, eleifend ornare tortor dignissim in. Suspendisse
				posuere
				ipsum mi, nec hendrerit leo iaculis non. Cras odio est, pellentesque a mi non, luctus lobortis massa. Nulla
				ultricies
				magna tincidunt, sollicitudin sem vel, dictum arcu. Curabitur vitae lorem et orci fermentum vulputate. Mauris ante
				nisl,
				volutpat sed justo a, rhoncus iaculis leo. In ac purus blandit, faucibus urna eget, faucibus lectus.</p>
			<p class="post-entry__excrept">
				Cras sit amet bibendum mi, id mattis ligula. Fusce eu tincidunt risus. Interdum et malesuada fames ac ante ipsum
				primis in
				faucibus. Suspendisse nec felis eu ipsum condimentum iaculis. Curabitur vehicula ante ornare, suscipit velit in,
				molestie
				erat. Ut eget malesuada magna, sed volutpat nunc. Nunc vel posuere elit. Aenean suscipit in ligula hendrerit
				ultricies.
				Proin porta tortor eget dolor ornare molestie. Curabitur vulputate erat odio, eu interdum orci pulvinar et. Cras
				varius
				dui id nunc consequat blandit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus
				mus.
				Fusce suscipit at sem a gravida. Nullam massa nulla, cursus at diam at, aliquet laoreet erat. Aliquam mattis ut
				nisi
				sit amet aliquam. Mauris et sapien vitae metus viverra auctor non nec nisi.
			</p>
		</div>
	</div>
	<div class="row form-comments">
		<h3 class="section-title">Comments</h3>
		<form>
			<div class="form-group">
				<label for="name">Name:</label>
				<input type="name" class="form-control" id="name" placeholder="name">
			</div>

			<div class="form-group">
				<label for="email">Email:</label>
				<input type="email" class="form-control" id="email" placeholder="name@example.com">
			</div>

			<div class="form-group">
				<label for="message">Message</label>
				<textarea class="form-control" id="message" rows="3"></textarea>
			</div>

			<input type="submit" class="btn btn-primary" value="SUBMIT" name="submit">
		</form>
	</div>

	<?php include("modules/blog/_blog-comments.php"); ?>

</div>