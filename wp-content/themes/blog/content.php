<div class="row justify-content-center ">
    <div class="col-md-3">
        <!-- feature image  -->
        <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('thumbnail'); ?>
        <?php endif; ?>

        
    </div>
    <div class="col-md-7">

        <a href="<?php the_permalink(); ?>">
            <h2 class="post-title "><?php the_title(); ?></h2>
            <p class="post-meta text-muted">Posted by&nbsp;
            <?php the_time(get_option('date_format')); ?>
            by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>

            Posted In
            <?php
            $categories = get_the_category();
            if (!empty($categories)) {
                echo '<a href="' . esc_url(get_category_link($categories[0]->term_id)) . '">' . esc_html($categories[0]->name) . '</a>';
            }
            ?>

            <?php if(is_single()) : ?>
                <p><?php the_content(); ?></p>
            <?php elseif(is_page()) : ?>
                <p><?php the_content(); ?></p>
            <?php else : ?>
                <p><?php the_excerpt(); ?></p>
            <?php endif; ?>

        </a>
    
    </div>
</div>