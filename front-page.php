<?php get_header(); ?>

<div class="container-fluid">
    <h5>
        <?php the_title(); ?>
    </h5>

    <?php
    if(have_posts()):while(have_posts()):the_post();
    ?>

    <?php the_content(); ?>

    <?php endwhile; endif ?>

</div>


<?php get_footer(); ?>
