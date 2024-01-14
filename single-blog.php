<?php get_header(); ?>

<div class="row">
    <div class="col-md-6 col-sm-12 col-xs-12 wpis">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <h1 class="tytul"><?php the_title(); ?></h1>
                <?php the_date('Y-m-d', '<span class="data">', '</span>'); ?>
                <?php the_content(); ?>
                
                <ul class="container nawigacja">
                    <li class="col-md-1"><?php previous_post_link( '%link', '<', TRUE ); ?></li>
                    <li class="col-md-1 col-md-offset-10"><?php next_post_link( '%link', '>', TRUE ); ?></li>
                </ul>

            <?php endwhile;
        else: ?>
            <p><?php _e('Przykro mi, ale strony której szukasz tu nie ma.'); ?></p>
        <?php endif; ?>

    </div>

</div>

<?php get_footer(); ?>