</main>
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Quick Links -->
                <div>
                    <h3 class="text-lg font-semibold mb-4 border-b border-gray-600 pb-2">Quick Links</h3>
                    <?php 
                    wp_nav_menu(array(
                        'theme_location' => 'footer',
                        'menu_class' => 'space-y-2',
                        'container' => false
                    ));
                    ?>
                </div>

                <!-- Newsletter -->
                <div>
                    <h3 class="text-lg font-semibold mb-4 border-b border-gray-600 pb-2">Subscribe</h3>
                    <p class="mb-4 text-gray-400">Get latest job updates directly to your email</p>
                    <?php echo do_shortcode('[newsletter_form]'); ?>
                    <div class="mt-4 flex space-x-4">
                        <a href="#" class="text-2xl hover:text-blue-300"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-2xl hover:text-blue-300"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-2xl hover:text-blue-300"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-2xl hover:text-blue-300"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-6 text-center text-gray-400">
                <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>