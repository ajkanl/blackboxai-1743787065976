<?php
/**
 * Footer component for SarkariResult clone
 */
?>
<footer class="bg-gray-800 text-white py-8">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Quick Links -->
            <div>
                <h3 class="text-lg font-semibold mb-4 border-b border-gray-600 pb-2">Quick Links</h3>
                <ul class="space-y-2">
                    <li><a href="index.php" class="hover:text-blue-300 transition">Home</a></li>
                    <li><a href="government-jobs.php" class="hover:text-blue-300 transition">Latest Jobs</a></li>
                    <li><a href="admit-cards.php" class="hover:text-blue-300 transition">Admit Cards</a></li>
                    <li><a href="results.php" class="hover:text-blue-300 transition">Results</a></li>
                    <li><a href="about.php" class="hover:text-blue-300 transition">About Us</a></li>
                </ul>
            </div>

            <!-- Important Links -->
            <div>
                <h3 class="text-lg font-semibold mb-4 border-b border-gray-600 pb-2">Important Links</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-blue-300 transition">Privacy Policy</a></li>
                    <li><a href="#" class="hover:text-blue-300 transition">Terms & Conditions</a></li>
                    <li><a href="#" class="hover:text-blue-300 transition">Disclaimer</a></li>
                    <li><a href="#" class="hover:text-blue-300 transition">Contact Us</a></li>
                </ul>
            </div>

            <!-- Job Categories -->
            <div>
                <h3 class="text-lg font-semibold mb-4 border-b border-gray-600 pb-2">Job Categories</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-blue-300 transition">Bank Jobs</a></li>
                    <li><a href="#" class="hover:text-blue-300 transition">Railway Jobs</a></li>
                    <li><a href="#" class="hover:text-blue-300 transition">SSC Jobs</a></li>
                    <li><a href="#" class="hover:text-blue-300 transition">UPSC Jobs</a></li>
                    <li><a href="#" class="hover:text-blue-300 transition">Police Jobs</a></li>
                </ul>
            </div>

            <!-- Newsletter -->
            <div>
                <h3 class="text-lg font-semibold mb-4 border-b border-gray-600 pb-2">Subscribe</h3>
                <p class="mb-4 text-gray-400">Get latest job updates directly to your email</p>
                <form class="flex">
                    <input type="email" placeholder="Your Email" class="px-3 py-2 text-gray-800 rounded-l focus:outline-none w-full">
                    <button class="bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded-r transition">
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </form>
                <div class="mt-4 flex space-x-4">
                    <a href="#" class="text-2xl hover:text-blue-300"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="text-2xl hover:text-blue-300"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-2xl hover:text-blue-300"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-2xl hover:text-blue-300"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>
        <div class="border-t border-gray-700 mt-8 pt-6 text-center text-gray-400">
            <p>&copy; <?php echo date('Y'); ?> SarkariResult Clone. All rights reserved.</p>
        </div>
    </div>
</footer>
</body>
</html>