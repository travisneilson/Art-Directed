# Amazing Art-Directed
============

A barebones and flexible Art-Directed Theme Framework for Wordpress

============

Use this "theme" however you like, I don't give a crap. Let me know if you like it, or have any helpful suggestions.

travisneilson@gmail.com

## What is an "Art-Directed" Theme?
- I'm actually not sure if this is the right term for what this is, but the idea of an Art-Directed blog is that each post is designed and laid-out in a custom way. Each post is visually considered to enhance its message. 
- For examples of how I use this framework see www.travisneilson.com

## How will this make your life better?
- More money
- More power
- More women

## How do you use this?
1. Place this folder in your `/wp-content/themes/` folder, and turn the theme on in the Wordpress backend.
2. Place Art-Directed post files in the /custom-posts/ folder.
3. You need to link up the post files to the WordPress database for each post. To do that, start a new post and create a Custom Field named custom-file the value of that field needs to be the location of the new post files relative to the theme folder. (`e.g. 001-if-i-were-a-ninja/if-i-were-a-ninja.php`)
4. Now you can use your own code editor to create a custom post and share your awesomeness with the universe.

## A few tips
- In the post files (`if-i-were-a-ninja.php`) you should refer to the posts assets by using the template_url WordPress code to make your post relative to the theme folder. (Example: `<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/custom-posts/001-if-i-were-a-ninja/css/ninja.css">`)
- Just to emphasize the above, it's a good idea to keep ALL the assets that the post needs in it's post folder. Put all the css, js, images, fonts and so forth in that folder. It will help in the long run.
- Just to make sure this is clear, this theme isn't about any specific style. It's about the process I use to do Art-Directed posts. You need to use your own styles.
