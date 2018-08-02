<?php

get_header(); ?>

<?php if ( have_posts() ) :  while ( have_posts() ) : the_post(); ?>
    <section class="section-color section-color-left single_post"
             style="border-left-color: <?php the_field('news_color'); ?>; background: <?php the_field('news_color'); ?>">

        <div class="container null_p">
            <div class="row">
                <div class="col-12">
                    <div class="section-color__text">
                        <p>
                            <?php
                            the_content()

                            ?>
                        </p>
                    </div>


                </div>
            </div>
        </div>
    </section>
<?php endwhile; ?>
<?php endif; ?>



<?php get_footer();

