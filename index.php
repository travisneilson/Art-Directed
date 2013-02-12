<?php get_header(); ?>

<div class="overlay overlay-post-folder"></div>
<div class="overlay overlay-post-screen"></div>


<a href="<?php echo get_option('home'); ?>" class="logo"><span>HOME</span></a>

<h1><?php $blog_title = get_bloginfo('name'); echo $blog_title;?></h1>

  <p>A list of your posts:</p>
  
  <ul class="loop">

    <?php if(have_posts()) : ?> <?php while(have_posts()) : the_post(); ?>
    
      <li>
      
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        
      </li>
      
    <?php endwhile; ?> <?php else : ?> <?php endif; ?>

  </ul><!-- /.loop-->
  
  <div class="instructions">
  
<p><span style="font-size: 30px; line-height: 0;">Hello,</span> It looks like you want to use this fantastic wordpress theme. What's that? You don't want to give me money? Well, hell. I'm cool with that. I just want your babies. Nah, just kidding. I got my own.</p>

<p>Use this "theme" however you like, I don't give a crap. Let me know if you like it, or have any helpful suggestions.</p>

<p><a href="mailto:travisneilson@gmail.com" style="font-size: 18px;">travisnelison@gmail.com</a></p>  
  
  <p><a href="" class="download">Download from github.com</a></p>
  
  <h2>HOW TO USE THIS:</h2>
  <ol>
    <li>Place this folder in your <code>/wp-content/themes/</code> folder, and turn the theme on in the Wordpress backend.</li>
    <li><div class="screen-shot new-post-folder" data-shot="overlay-post-folder"></div>Place Art-Directed post files in the <code>/custom-posts/</code> folder. See an example or two already there.</li>
    <li><div class="screen-shot add-post-screen" data-shot="overlay-post-screen"></div>You need to link up the post files to the WordPress database for each post. To do that, start a new post and create a Custom Field named <code>custom-file</code> the value of that field needs to be the location of the new post files relative to the theme folder. (e.g. <code>001-if-i-were-a-ninja/if-i-were-a-ninja.php</code>)</li>
    <li>Now you can use your own code editor to create a custom post and share your awesomeness with the universe.</li>  
  </ol>
  
  <h2>A FEW TIPS:</h2>
  <ul>
    <li>In the post files (<code>if-i-were-a-ninja.php</code>) you should refer to the posts assets by using the template_url WordPress code to make your post relative to the theme folder. (Example: <code>&lt;link rel="stylesheet" href="&lt;?php bloginfo('template_url'); ?&gt;/custom-posts/001-if-i-were-a-ninja/css/ninja.css"&gt;)</code></li>
    <li>Just to emphasize the above, it's a good idea to keep ALL the assets that the post needs in it's post folder. Put all the css, js, images, fonts and so forth in that folder. It will help in the long run.</li>
    <li>Just to make sure this is clear, this theme isn't about any specific style. It's about the process I use to do Art-Directed posts. You need to use your own styles.</li>
  </ul>
</div>

<div style="clear: both;"></div>


<script type="text/javascript">
  $(function() {
    $('.screen-shot').click(function() {
      var $data = $(this).data('shot');
      $('.overlay').filter('.' + $data).fadeIn();
    });
    $('.overlay').click(function() {
      $(this).fadeOut();
    });
  });
</script>

<?php get_footer(); ?>