<?php get_header(); ?>

    <header class="masthead" style="background-image: url('assets/img/post-bg.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row ">
                <div class="col-md-10  col-lg-8 mx-auto position-relative">
                    <div class="post-heading">
                        <?php if (have_posts()) : ?>

                            <?php while (have_posts()) : the_post(); ?>



                             <?php get_template_part('content'); ?>
                            <?php endwhile; ?>
                    </div>
                </div>

            <?php else : ?>
                <?php echo 'sorry no posts found' ?>
            <?php endif; ?>
            </div>
        </div>
        </div>
        </div>

      
    </header>



    <?php get_footer(); ?>