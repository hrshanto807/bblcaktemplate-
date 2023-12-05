<div id="page">
	<div id="page-bgtop">
		<div id="page-bgbtm">
			<div id="content">
				<?Php
				while (have_posts()) :
					the_post();
				?>
					<div class="post">
						<h2 class="title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
						<h4><?php //echo get_post_meta(get_the_ID(),'Bblack_Subtitle',true)
							?></h4>

						<h4><?php //echo get_post_meta(get_the_ID(),'bblack_our_Subtitle',true)
							?></h4>

						<!-- <h4>subtitle:<?php
											// $amar_subtitle =  get_post_meta(get_the_ID(), 'amar_subtitle', true);
											// if (!empty($amar_subtitle)) {
											// 	foreach ($amar_subtitle as $amar) {
											// 		echo '<h2>'." " . $amar.'</h2>'.'<br>';
											// 	}
											// } ?></h4>

						<h4>email: <?php // echo get_post_meta(get_the_ID(), 'amar_email', true) ?></h4>
						<h4>textsmall: <?php // echo get_post_meta(get_the_ID(), 'bblack_textsmall', true) ?></h4>
						<h4>textmedium: <?php // echo get_post_meta(get_the_ID(), 'bblack_textmedium', true) ?></h4>
						<h4>text url: <?php // echo get_post_meta(get_the_ID(), 'bblack_url', true) ?></h4>
						<h4>time: <?php // echo get_post_meta(get_the_ID(), 'bblack_time', true) ?></h4>
						<h4>date: <?php // echo get_post_meta(get_the_ID(), 'bblack_textdate', true) ?></h4>
						<h4>money: <?php // echo get_post_meta(get_the_ID(), 'bblack_textmoney', true) ?></h4>
						<p>textarea: <?php // echo get_post_meta(get_the_ID(), 'bblack_textarea', true) ?></p> -->



						<p class="meta">Posted by <a href="#"><?php the_author(); ?></a>
							on <?php echo get_the_date(); ?>
							&nbsp;&bull;&nbsp; <a href="#" class="comments">Comments (<?php echo get_comments_number(); ?>)</a> &nbsp;&bull;&nbsp; <a href="<?php the_permalink() ?>" class="permalink">Full Airtcle</a></p>
						<div class="entry">

							<?php the_post_thumbnail('bblock-post-thumbnails', array(
								'class' => 'alignleft border',
							)); ?>

							<?php //the_content();
							?>

							<p><?php //the_excerpt();
								?></p>

							<?php echo wp_trim_words(get_the_content(), 50, ' <a href="' . get_the_permalink() . '"class="view-more">View More</a>'); ?>
						</div>
					</div>
				<?php endwhile; ?>


				<div style="clear: both;">&nbsp;</div>
			</div>
			<?php get_sidebar(); ?>
			<div style="clear: both;">&nbsp;</div>
		</div>
	</div>
</div>
<!-- end #page -->
</div>