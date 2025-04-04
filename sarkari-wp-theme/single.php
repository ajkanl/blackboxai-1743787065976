<?php
/**
 * Single post template
 */

get_header();
?>

<main class="container mx-auto px-4 py-8">
    <article <?php post_class('bg-white rounded-lg shadow-md p-8'); ?>>
        <header class="mb-6">
            <h1 class="text-3xl font-bold text-gray-900"><?php the_title(); ?></h1>
            <div class="flex items-center text-sm text-gray-500 mt-2">
                <span class="mr-4">
                    <i class="fas fa-calendar-alt mr-1"></i>
                    <?php echo get_the_date(); ?>
                </span>
                <span>
                    <i class="fas fa-user mr-1"></i>
                    <?php the_author(); ?>
                </span>
            </div>
            <?php if (has_post_thumbnail()) : ?>
                <div class="mt-4 mb-6">
                    <?php the_post_thumbnail('large', ['class' => 'rounded-lg']); ?>
                </div>
            <?php endif; ?>
        </header>

        <div class="prose max-w-none">
            <?php the_content(); ?>
        </div>

        <footer class="mt-8 pt-6 border-t border-gray-200">
            <?php
            wp_link_pages(array(
                'before' => '<div class="page-links">' . esc_html__('Pages:', 'textdomain'),
                'after'  => '</div>',
            ));

            the_tags('<div class="tags-links"><span class="font-medium">Tags:</span> ', ', ', '</div>');
            ?>
        </footer>
    </article>

    <?php
    // If comments are open or we have at least one comment, load up the comment template.
    if (comments_open() || get_comments_number()) :
        comments_template();
    endif;
    ?>
</main>

<?php
get_footer();