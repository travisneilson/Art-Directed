<!--you may want to use an include like this to have post-to-post nav and a home link-->

<div class="consistent-stuff">
    
    <!--  this first link is the little home link in the top left corner. Delete it.  -->
		<a href="<?php echo get_option('home'); ?>" class="logo"><span>HOME</span></a>
		
		
    <a href="" style="display: none;">
      <?php $blog_title = get_bloginfo('name'); ?>
    </a>

		<ul class="next-prev-btn" style="display: none;">
			<li class="next-post-link"><?php next_post_link(); ?></li>
			<li class="prev-post-link"><?php previous_post_link(); ?> </li>
		</ul>
		
</div>
