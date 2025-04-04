<form role="search" method="get" class="search-form relative" action="<?php echo esc_url(home_url('/')); ?>">
    <input type="search" 
           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
           placeholder="<?php esc_attr_e('Search...', 'textdomain'); ?>" 
           value="<?php echo get_search_query(); ?>"
           name="s">
    <button type="submit" class="absolute right-2 top-1/2 transform -translate-y-1/2 text-gray-500">
        <i class="fas fa-search"></i>
    </button>
</form>