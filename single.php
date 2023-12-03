<?Php get_header(); ?>
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

							<?php the_content();?>
						</div>
					</div>
				<?php endwhile; ?>


				<div style="clear: both;">&nbsp;</div>
			</div>
			<?php get_sidebar();?>
			<div style="clear: both;">&nbsp;</div>
		</div>
	</div>
</div>
<!-- end #page -->
</div>
<?php get_footer()?>