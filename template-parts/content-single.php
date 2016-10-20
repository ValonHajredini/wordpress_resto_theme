<?php
/**
 * Created by PhpStorm.
 * User: hajre
 * Date: 10/20/2016
 * Time: 11:14 PM
 */
?>
<article id="post-<?php the_ID()?>" <?php post_class();?>>
    <header class="hetry-header">
        <?php the_title('<h1 class="entry-title">', '</h1>')?>
        <div class="entry-meta">
            <?php resto_theme_posted_on()?>
        </div>
    </header>
    <div class="entry-content">
        <?php the_content(); ?>
        <?php
            wp_link_pages(array(
                'before'    => '<div class="page-link">'.esc_html__('Pages:','resto'),
                'after'     => '</div>'
            ));
        ?>
    </div>
    <footer>
        <?php resto_theme_entry_footer(); ?>
    </footer>
</article>
