<div class="container">
    <header class="content-header">
        <div class="meta mb-3">

            <span class="date">Posted on: <?php the_time('F j, Y'); ?></span>
            <?php
                if (has_tag()):
            ?>
                <?php the_tags('<span class="tag"><i class="fa fa-tag"></i>', '</span><span class="tag"><i class="fa fa-tag"></i>','<span>');?>
            <?php
                endif;
            ?>

            <span class="tag"><i class='fa fa-tag'></i> <?php the_category(', '); ?></span>

            <span class="comment">
                <a href="#comments"><i class='fa fa-comment'></i> <?php comments_number(); ?></a>
            </span>
        </div>
    </header>
</div>

<?php

the_content();