<aside>
<div class="sidebar-card sidebar-highlight">
<h3>Top Reports</h3>
<p>Discover trending stories, live updates and in-depth analysis.</p>
</div>
<div class="sidebar-card">
<h3>Latest Stories</h3>
<ul>
<?php
$recent_posts = wp_get_recent_posts(array(
'numberposts' => 5
));
foreach($recent_posts as $post){
echo '<li><a href="' . get_permalink($post["ID"]) . '">' . $post["post_title"] . '</a></li>';
}
?>
</ul>
</div>
</aside>