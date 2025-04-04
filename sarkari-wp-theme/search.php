<?php
/**
 * Search results template
 */

get_header();
?>

<main class="container mx-auto px-4 py-8">
    <header class="mb-8">
        <h1 class="text-3xl font-bold text-gray-900">
            <?php
            printf(
                esc_html__('Search Results for: %s', 'textdomain'),
                '<span>' . get_search_query() . '</span>'
            );
            ?>
        </h1>
    </header>

    <?php if (have_posts()) : ?>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php while (have_posts()) : the_post(); ?>
                <article <?php post_class('bg-white rounded-lg shadow-md overflow-hidden border border-gray-200 hover:shadow-lg transition'); ?>>
                    <div class="p-5">
                        <header class="mb-4">
                            <h2 class="text-xl font-bold mb-2">
                                <a href="<?php the_permalink(); ?>" class="hover:text-blue-600">
                                    <?php the_title(); ?>
                                </a>
                            </h2>
                            <div class="text-sm text-gray-500">
                                <time datetime="<?php echo get_the_date('c'); ?>">
                                    <?php echo get_the_date(); ?>
                                </time>
                            </div>
                        </header>
                        <div class="prose">
                            <?php the_excerpt(); ?>
                        </div>
                    </div>
                </article>
            <?php endwhile; ?>
        </div>

        <div class="mt-8">
            <?php the_posts_pagination(array(
                'mid_size'  => 2,
                'prev_text' => __('&larr; Previous', 'textdomain'),
                'next_text' => __('Next &rarr;', 'textdomain'),
            )); ?>
        </div>
    <?php else : ?>
        <div class="bg-white p-8 rounded-lg shadow-md text-center">
            <h2 class="text-2xl font-bold mb-4"><?php _e('Nothing Found', 'textdomain'); ?></h2>
            <p><?php _e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'textdomain'); ?></p>
            <div class="mt-6">
                <?php get_search_form(); ?>
            </div>
        </div>
    <?php endif; ?>
</main>

<?php
get_footer();