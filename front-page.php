<?php
get_header();
?>

    <article class="content px-3 py-5 p-md-5">
        <?php
            if (have_posts()):
                while(have_posts()):the_post();?>
                    <hr>
                    <small>Posted on: <?php the_time('F j, Y'); ?> <?php the_category(); ?></small>
                    <?php
                    the_post_thumbnail();
                    ?>
                    <h1><?php the_title();?></h1>
                    <p><?php the_excerpt(); ?></p>

                <?php endwhile;
            endif;
        ?>
    </article>
<?php
get_footer();
?>

