
<?php
    /*
    * Single Post Termplate File
    * @package Ukemi Theme
    */
    get_header(); ?>
    
    <!-- Start Our Latest News
    ================================================== -->
    <section class="section bg-grey">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 pr-lg-5 mb-5 mb-lg-0">
                    <div class="blog">
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <div class="post-box">
                                <div class="main-post mb-100">
                                    <div class="post-img">
                                        <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail( array(1200, 734), ['class' => 'img-fluid mx-auto d-block'] ); ?>
                                        </a>
                                    </div>
                                    <div class="post-content mt-30 mr-20 ml-20 mb-30">
                                        <div class="post-meta">
                                            <h4 class="text-black fw-4 mb-3"><?php the_title(); ?></h4>
                                            <ul class="blog-meta list-unstyled mt-10">
                                                <li><a href="#0"><i class="fa fa-user mr-1" aria-hidden="true"></i><?php the_author(); ?></a></li>
                                                <li><a href="#0"><i class="fa fa-folder-open mr-1" aria-hidden="true"></i><?php the_category(',');?></a></li>
                                                <li><a href="#0"><i class="fa fa-calendar mr-1" aria-hidden="true"></i><?php the_date(); ?></a></li>
                                                <li><a href="#0"><i class="fa fa-comments mr-1" aria-hidden="true"></i><?php comments_number('0','1','%'); ?> Comments</a></li>
                                            </ul>
                                        </div>
                                        <div class="post-content">
                                        <?php the_content(); ?>
                                        </div>
                                        <ul class="blog-meta list-unstyled mt-10"> 
                                        <li><a href="#0"><i class="fa fa-tags mr-1" aria-hidden="true"></i><?php the_tags( '', ', ', '<br />' ); ?></a></li>
                                        </ul>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; else : ?>
                            <article>
                                <p>Sorry, no post was found!</p>
                            </article>
                        <?php endif; ?>
                    </div>
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