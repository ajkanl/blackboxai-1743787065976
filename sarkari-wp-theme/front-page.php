<?php
/**
 * Front page template
 */

get_header();
?>

<main class="container mx-auto px-4 py-8">
    <!-- Hero Section -->
    <section class="bg-blue-700 text-white rounded-xl p-8 mb-8">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Find Your Dream Government Job</h2>
            <p class="text-lg mb-6">Latest updates on Sarkari Naukri, Results, Admit Cards and Exam Dates</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="<?php echo get_post_type_archive_link('job_listing'); ?>" 
                   class="bg-white text-blue-700 font-semibold px-6 py-3 rounded-lg hover:bg-gray-100 transition">
                    Browse Jobs <i class="fas fa-arrow-right ml-2"></i>
                </a>
                <a href="<?php echo get_post_type_archive_link('exam_result'); ?>" 
                   class="bg-blue-600 text-white font-semibold px-6 py-3 rounded-lg hover:bg-blue-800 transition">
                    Check Results <i class="fas fa-poll ml-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Latest Updates Section -->
    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 flex items-center">
            <span class="bg-blue-100 text-blue-800 p-2 rounded mr-3">
                <i class="fas fa-bell"></i>
            </span>
            Latest Updates
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <?php 
            $args = array(
                'post_type' => array('job_listing', 'exam_result', 'admit_card'),
                'posts_per_page' => 3,
                'orderby' => 'date',
                'order' => 'DESC'
            );
            $query = new WP_Query($args);
            while ($query->have_posts()) : $query->the_post();
            ?>
            <div class="bg-white rounded-lg shadow-md overflow-hidden border border-gray-200 hover:shadow-lg transition">
                <div class="p-5">
                    <div class="flex justify-between items-start mb-3">
                        <span class="bg-green-100 text-green-800 text-xs font-semibold px-2.5 py-0.5 rounded">New</span>
                        <span class="text-gray-500 text-sm"><?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ago'; ?></span>
                    </div>
                    <h3 class="text-xl font-bold mb-2"><?php the_title(); ?></h3>
                    <p class="text-gray-600 mb-4"><?php the_field('organization'); ?></p>
                    <div class="flex items-center text-sm text-gray-500 mb-4">
                        <i class="fas fa-map-marker-alt mr-2"></i>
                        <span><?php the_field('location'); ?></span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-red-600 font-medium"><?php the_field('last_date'); ?></span>
                        <a href="<?php the_permalink(); ?>" class="text-blue-600 hover:text-blue-800 font-medium">
                            View Details <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </section>
</main>

<?php
get_footer();