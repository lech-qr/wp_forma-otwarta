<?php 

/* Template name: Lista rzeźb*/

get_header(); ?>

<div class="row">
    <div class="col-md-12">
        <h1><?php the_title(); ?></h1>

                    <?php
                            $show_posts = '3';
                            $cat_name = 'Galeria';
                            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                            $my_query = new WP_Query( array(
                               'category_name' => $cat_name,
                               'posts_per_page' => $show_posts,
                               'paged' => $paged,
                               'orderby' => 'date'
                            ) );

                            while ($my_query->have_posts()) : $my_query->the_post();
                            $do_not_duplicate = $post->ID;?>

                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <?php if ( has_post_thumbnail() ) : ?>
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                            <?php the_post_thumbnail(); ?>
                                        </a>
                                    <?php endif; ?>  
                                    <h2><a href="<?php the_permalink(); ?>">                                    
                                        <?php the_title(); ?>                                        
                                    </a></h2>
                                </div>

                    <?php endwhile; ?>

    </div>
</div>

<?php get_footer(); ?>