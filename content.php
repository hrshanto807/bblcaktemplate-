<div id="page">
	<div id="page-bgtop">
		<div id="page-bgbtm">
			<div id="content">
				<?Php
				while (have_posts()) :
					the_post();
				?>
				<div class="post">
						<h2 class="title"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h2>
						<p class="meta">Posted by <a href="#"><?php the_author();?></a> 
						on <?php echo get_the_date();?>
							&nbsp;&bull;&nbsp; <a href="#" class="comments">Comments (<?php echo get_comments_number();?>)</a> &nbsp;&bull;&nbsp; <a href="<?php the_permalink()?>" class="permalink">Full Airtcle</a></p>
						<div class="entry">

							<?php the_post_thumbnail('bblock-post-thumbnails',array(
								'class' => 'alignleft border',
							));?>

							<?php //the_content();?>

							<p><?php //the_excerpt();?></p>

							<?php echo  wp_trim_words( get_the_content(), 50, ' <a href="'.get_the_permalink().'">View More</a>');?>
						</div>
					</div>
				<?php endwhile; ?>


				<div style="clear: both;">&nbsp;</div>
			</div>
			<!-- end #content -->
			<div id="sidebar">
				<ul>
					<li>
						<h2>Aliquam tempus</h2>
						<p>Mauris vitae nisl nec metus placerat perdiet est. Phasellus dapibus semper consectetuer hendrerit.</p>
					</li>
					<li>
						<h2>Categories</h2>
						<ul>
							<li><a href="#">Aliquam libero</a></li>
							<li><a href="#">Consectetuer adipiscing elit</a></li>
							<li><a href="#">Metus aliquam pellentesque</a></li>
							<li><a href="#">Suspendisse iaculis mauris</a></li>
							<li><a href="#">Urnanet non molestie semper</a></li>
							<li><a href="#">Proin gravida orci porttitor</a></li>
						</ul>
					</li>
					<li>
						<h2>Blogroll</h2>
						<ul>
							<li><a href="#">Aliquam libero</a></li>
							<li><a href="#">Consectetuer adipiscing elit</a></li>
							<li><a href="#">Metus aliquam pellentesque</a></li>
							<li><a href="#">Suspendisse iaculis mauris</a></li>
							<li><a href="#">Urnanet non molestie semper</a></li>
							<li><a href="#">Proin gravida orci porttitor</a></li>
						</ul>
					</li>
					<li>
						<h2>Archives</h2>
						<ul>
							<li><a href="#">Aliquam libero</a></li>
							<li><a href="#">Consectetuer adipiscing elit</a></li>
							<li><a href="#">Metus aliquam pellentesque</a></li>
							<li><a href="#">Suspendisse iaculis mauris</a></li>
							<li><a href="#">Urnanet non molestie semper</a></li>
							<li><a href="#">Proin gravida orci porttitor</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<!-- end #sidebar -->
			<div style="clear: both;">&nbsp;</div>
		</div>
	</div>
</div>
<!-- end #page -->
</div>