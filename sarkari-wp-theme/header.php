<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?> SarkariResult</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class('bg-gray-50'); ?>>
    <header class="sticky top-0 z-50 bg-white shadow-md">
        <div class="container mx-auto px-4 py-3">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <!-- Logo Section -->
                <div class="flex items-center mb-4 md:mb-0">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" 
                         alt="Government Building Logo" 
                         class="h-12 w-12 rounded-full object-cover">
                    <div class="ml-3">
                        <h1 class="text-xl font-bold text-blue-800">SarkariResult</h1>
                        <p class="text-xs text-gray-600">Government Jobs Portal</p>
                    </div>
                </div>

                <!-- Search Bar -->
                <div class="w-full md:w-1/3 relative">
                    <form role="search" method="get" class="relative" action="<?php echo home_url('/'); ?>">
                        <input type="search" 
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                               placeholder="Search Jobs, Exams, Results..." 
                               value="<?php echo get_search_query(); ?>"
                               name="s">
                        <button type="submit" class="absolute right-2 top-1/2 transform -translate-y-1/2 text-gray-500">
                            <i class="fas fa-search"></i>
                        </button>
                    </form>
                </div>
            </div>

            <!-- Main Navigation -->
            <nav class="mt-4">
                <?php 
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_class' => 'flex flex-wrap justify-center md:justify-start space-x-1 md:space-x-6',
                    'container' => false,
                    'items_wrap' => '<ul class="%2$s">%3$s</ul>'
                ));
                ?>
            </nav>
        </div>
    </header>
    <main class="container mx-auto px-4 py-8">