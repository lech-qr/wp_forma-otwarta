<?php get_header(); ?>

<div class="row">
    <div class="col-md-12">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <h1 class="tytul"><?php the_title(); ?></h1>
                <?php the_content(); ?>

            <?php endwhile;
        else: ?>
            <p><?php _e('Przykro mi, ale strony której szukasz tu nie ma.'); ?></p>
        <?php endif; ?>

    </div>

</div>

<?php get_footer(); ?>