<?php get_header(); ?>

<?php
while(have_posts()){
    the_post();
}
?>
<a href="<?php the_permalink(); ?>">
<?php

the_title();?>
</a>
<h3><?php

the_title();?>
<?php the_excerpt();?>
</h3>
<?php


?>
<?php get_footer(); ?>