<?php
/**
 * 404 template
 */

get_header();
?>

<main class="container mx-auto px-4 py-8">
    <div class="bg-white p-8 rounded-lg shadow-md text-center max-w-2xl mx-auto">
        <h1 class="text-4xl font-bold text-gray-900 mb-4">404</h1>
        <h2 class="text-2xl font-bold mb-4"><?php _e('Page Not Found', 'textdomain'); ?></h2>
        <p class="mb-6"><?php _e('The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.', 'textdomain'); ?></p>
        <a href="<?php echo home_url(); ?>" 
           class="inline-block bg-blue-600 text-white font-semibold px-6 py-3 rounded-lg hover:bg-blue-800 transition">
            <?php _e('Return to Homepage', 'textdomain'); ?>
        </a>
    </div>
</main>

<?php
get_footer();