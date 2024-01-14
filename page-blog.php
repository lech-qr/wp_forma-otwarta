<?php 

/* Template name: Blog*/

get_header(); ?>

<div class="row galeria">
    <div class="col-md-12">
        <h1 class="tytul"><?php the_title(); ?></h1>
            <div class="row">

                    <?php
                            $show_posts = '99';
                            $cat_name = 'Blog';
                            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                            $my_query = new WP_Query( array(
                               'category_name' => $cat_name,
                               'posts_per_page' => $show_posts,
                               'paged' => $paged,
                               'orderby' => 'date'
                            ) );

                            while ($my_query->have_posts()) : $my_query->the_post();
                            $do_not_duplicate = $post->ID;?>

                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <?php if ( has_post_thumbnail() ) : ?>
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                            <?php the_post_thumbnail(); ?>
                                        </a>
                                    <?php endif; ?>  
                                    <h2><a href="<?php the_permalink(); ?>">                                    
                                        <?php the_title(); ?>                                        
                                    </a></h2>
                                    <?php the_date('Y-m-d', '<span class="data">', '</span>'); ?>
                                </div>

                    <?php endwhile; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>