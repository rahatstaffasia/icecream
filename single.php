<?php
get_header();
?>



<article class="content px-3 py-5 p-md-5">



    <?php
    if (have_posts()):
        while(have_posts()):the_post();?>

            <?php
            the_post_thumbnail();
            ?>
            <h1><?php the_title();?></h1>
            <?php get_template_part('/template-parts/content', 'article') ?>

        <?php endwhile;
    endif;
    ?>
</article>
<?php
get_footer();
?>

