<?php
    /*
    * Main Termplate File
    * @package Ukemi Theme
    */
    get_header(); ?>

    <!-- Start Home
    ================================================== -->
    <!-- <section id="home" class="d-flex align-items-center section text-white half-home" data-parallax data-speed="0" data-src="/images/banner/img-1.jpg">
        <div class="overlay-black"></div>
        <div class="container">
            <div class="row text-center mt-80">
                <div class="col-lg-12">
                    <h3 class="mb-3 fw-6 text-white">Here is Our Latest Blog</h3>
                    <nav class="d-inline-block fw-5" aria-label="breadcrumb">
                      <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section> -->
    <!-- End Home
    ================================================== -->

<!-- Start Blog posts
    ================================================== -->
    <section class="section bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 pr-lg-5 mb-5 mb-lg-0">
                    <div class="row justify-content-center">
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <div class="col-lg-6 mb-30">
                                <div class="blog">
                                    <div class="blog-img">
                                        <a class="d-block" href="<?php the_permalink(); ?>">
                                            <?php the_post_thumbnail( array(1200, 734), ['class' => 'img-fluid mx-auto d-block'] ); ?>
                                        </a>
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-content-top">
                                            <span class="text-blue"><?php the_date(); ?></span> / <?php the_category(','); ?>
                                        </div>
                                        <h5><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h5>
                                        <p><?php the_excerpt(); ?></p>
                                        <div class="blog-content-bottom clearfix">
                                            <div class="float-left">
                                                <a class="blog-read-more" href="<?php the_permalink(); ?>">Read Post<span class="fas fa-chevron-right"></span></a>
                                            </div>
                                            <div class="float-right">
                                                <ul class="list-unstyled mb-0 blog-social-share">
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <?php if (has_category('Parks')) { ?>
                                                        <div class="blog-bottom-border bg-yellow"></div>
                                                <?php }
                                                      elseif (has_category('Cards')) { ?>
                                                        <div class="blog-bottom-border bg-orange"></div>
                                                <?php }
                                                      elseif (has_category('Books')) { ?>
                                                        <div class="blog-bottom-border bg-blue"></div>
                                                <?php }
                                                      else { ?>
                                                        <div class="blog-bottom-border bg-green"></div>
                                                <?php } ?>
                                </div>
                            </div>
                        <?php endwhile; else : ?>
                        <p>Sorry, no posts were found!</p>
                        <?php endif; ?>
                    </div>
                    <!-- pagination -->
                </div>
            <div class="col-lg-4">
                <?php get_sidebar(); ?>
            </div>
            </div>
        </div>
    </section>
    <!-- End Blog Posts
    ================================================== -->
<?php get_footer(); ?>