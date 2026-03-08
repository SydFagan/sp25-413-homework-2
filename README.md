# sp25-413-homework-2

**The Loop & Template Tags**

The Loop is how WordPress shows the posts from the database. It starts with have_posts(), which then checks if there are posts available. If there AREE posts, the_post() prepares the post data so it can be shown. In my theme I used template tags like the_title() to show the post title, the_excerpt() to show a short preview, and the_content() to display the full article on the single post page. I also used the_post_thumbnail() to show the featured image and get_permalink() to link to each post.

**WordPress Theme Structure & Architecture**


A WordPress theme is different template files that control how the website looks and shows content. In this project I used files such as style.css, functions.php, header.php, footer.php, index.php, single.php, and page.php. The style.css file contains the theme information and all the styling for the site. The functions.php file enables theme features like menus, featured images, and loading the stylesheet. The header.php and footer.php files handle the top and bottom structure of the site,index.php displays the posts on the homepage and single.php shows the full report.
