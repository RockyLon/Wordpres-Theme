<?php get_header(); ?>

    <header class="masthead" style="background-image: url('assets/img/post-bg.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8  col-lg-8  position-relative">

                    <div class="post-heading">
                        <?php if (have_posts()) : ?>
                            <?php while (have_posts()) : the_post(); ?>
                            
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail(); ?>
                            <?php endif; ?>
                            
                                <h2><?php the_title(); ?></h2>
                              <?php the_content(); ?>
                            <?php endwhile; ?>


                </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                    <?php 
                    
                    wp_list_pages(array(
                        'title_li' => '',
                        'child_of' => $post->ID,
                        'sort_column' => 'menu_order',
                      ));
                      
                    
                    ?>
                    </div>
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
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