<?php get_header(); ?>


<div class="container py-4 py-xl-5">
    <div class="row mb-5">
        <div class="col-md-8 col-xl-6 text-center mx-auto">
            <h2><?php bloginfo('name') ?></h2>
            <p><?php bloginfo('description') ?></p>
        </div>
    </div>
    <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
        <div class="col">
            <div class="card">
                <?php if (is_active_sidebar('card1')) : ?>
                    <?php dynamic_sidebar('card1') ?>
                <?php endif; ?>

            </div>
        </div>
        <div class="col">
            <div class="card">
                <?php if (is_active_sidebar('card2')) : ?>
                    <?php dynamic_sidebar('card2') ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <?php if (is_active_sidebar('card3')) : ?>
                    <?php dynamic_sidebar('card3') ?>
                <?php endif; ?>
                
            </div>
        </div>
    </div>
</div>
<section class="py-4 py-xl-5">
    <div class="container">

        <div class="bg-dark border rounded border-0 border-dark overflow-hidden"> 
            <div class="row g-0 justify-content-between" >


            <?php $page_id = 42; 
            $page = get_post($page_id);?>
                
                <div class="col-md-4">
                    <?php if($page) : ?>
                        
                    <div class="text-white p-4 p-md-5">
                        <h2 class="fw-bold text-white mb-3"><?php echo $page->post_title ?></h2>
                        <p class="mb-4"><?php echo $page->post_content ?></p>
                        <div class="my-3"><a class="btn btn-primary btn-lg me-2" role="button" href="#">Button</a></div>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="col-md-4 text-end" >
                    <?php if (has_post_thumbnail($page_id)) : ?>
                        <?php $thumbnail = get_the_post_thumbnail($page_id, 'medium'); ?>
                            <?php echo $thumbnail ;?>
                    <?php endif; ?>
                    
                </div>
                <?php ?>
            </div>
        </div>
</section>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class=" col-lg-10">
            <div class="post-preview">
                <div class="post-preview">

                    <?php if (have_posts()) : ?>

                        <?php while (have_posts()) : the_post(); ?>
                            <?php get_template_part('content'); ?>
                            </p>
                        <?php endwhile; ?>

                    <?php else : ?>
                        <?php echo 'sorry no posts found' ?>
                    <?php endif; ?>
                </div>
            </div>

        </div>
    </div>
</div>



<footer>
    <section class="py-4 py-xl-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2>Contact us</h2>
                    <p>Curae hendrerit donec commodo hendrerit egestas tempus, turpis facilisis nostra nunc. Vestibulum dui eget ultrices.</p>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 col-lg-5 col-xl-4">
                    <div>
                        <form class="p-3 p-xl-4" method="post">
                            <div class="mb-3"><input class="form-control" type="text" id="name-1" name="name" placeholder="Name"></div>
                            <div class="mb-3"><input class="form-control" type="email" id="email-1" name="email" placeholder="Email"></div>
                            <div class="mb-3"><textarea class="form-control" id="message-1" name="message" rows="6" placeholder="Message"></textarea></div>
                            <div><button class="btn btn-primary d-block w-100" type="submit">Send </button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php get_footer(); ?>

    </body>

    </html>