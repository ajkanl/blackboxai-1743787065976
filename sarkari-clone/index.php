<?php include 'header.php'; ?>

<main class="container mx-auto px-4 py-8">
    <!-- Hero Section -->
    <section class="bg-blue-700 text-white rounded-xl p-8 mb-8">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Find Your Dream Government Job</h2>
            <p class="text-lg mb-6">Latest updates on Sarkari Naukri, Results, Admit Cards and Exam Dates</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="government-jobs.php" class="bg-white text-blue-700 font-semibold px-6 py-3 rounded-lg hover:bg-gray-100 transition">
                    Browse Jobs <i class="fas fa-arrow-right ml-2"></i>
                </a>
                <a href="results.php" class="bg-blue-600 text-white font-semibold px-6 py-3 rounded-lg hover:bg-blue-800 transition">
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
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Job Card 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden border border-gray-200 hover:shadow-lg transition">
                <div class="p-5">
                    <div class="flex justify-between items-start mb-3">
                        <span class="bg-green-100 text-green-800 text-xs font-semibold px-2.5 py-0.5 rounded">New</span>
                        <span class="text-gray-500 text-sm">Posted: 2 days ago</span>
                    </div>
                    <h3 class="text-xl font-bold mb-2">SSC Junior Engineer</h3>
                    <p class="text-gray-600 mb-4">Staff Selection Commission</p>
                    <div class="flex items-center text-sm text-gray-500 mb-4">
                        <i class="fas fa-map-marker-alt mr-2"></i>
                        <span>All India</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-red-600 font-medium">Last Date: 15/08/2023</span>
                        <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">
                            Apply Now <i class="fas fa-external-link-alt ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Job Card 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden border border-gray-200 hover:shadow-lg transition">
                <div class="p-5">
                    <div class="flex justify-between items-start mb-3">
                        <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded">Admit Card</span>
                        <span class="text-gray-500 text-sm">Posted: 1 week ago</span>
                    </div>
                    <h3 class="text-xl font-bold mb-2">UPSC Civil Services Prelims</h3>
                    <p class="text-gray-600 mb-4">Union Public Service Commission</p>
                    <div class="flex items-center text-sm text-gray-500 mb-4">
                        <i class="fas fa-map-marker-alt mr-2"></i>
                        <span>All India</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-green-600 font-medium">Available Now</span>
                        <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">
                            Download <i class="fas fa-download ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Job Card 3 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden border border-gray-200 hover:shadow-lg transition">
                <div class="p-5">
                    <div class="flex justify-between items-start mb-3">
                        <span class="bg-yellow-100 text-yellow-800 text-xs font-semibold px-2.5 py-0.5 rounded">Result</span>
                        <span class="text-gray-500 text-sm">Posted: 3 days ago</span>
                    </div>
                    <h3 class="text-xl font-bold mb-2">IBPS Clerk Final Result</h3>
                    <p class="text-gray-600 mb-4">Institute of Banking Personnel Selection</p>
                    <div class="flex items-center text-sm text-gray-500 mb-4">
                        <i class="fas fa-map-marker-alt mr-2"></i>
                        <span>All India</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-green-600 font-medium">Declared</span>
                        <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">
                            Check Result <i class="fas fa-poll ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick Links Section -->
    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 flex items-center">
            <span class="bg-blue-100 text-blue-800 p-2 rounded mr-3">
                <i class="fas fa-bolt"></i>
            </span>
            Quick Links
        </h2>
        
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <a href="admit-cards.php" class="bg-white p-4 rounded-lg shadow-sm border border-gray-200 hover:bg-blue-50 hover:border-blue-200 transition flex flex-col items-center">
                <div class="bg-blue-100 text-blue-800 p-3 rounded-full mb-2">
                    <i class="fas fa-id-card text-xl"></i>
                </div>
                <span class="font-medium text-center">Admit Cards</span>
            </a>
            
            <a href="results.php" class="bg-white p-4 rounded-lg shadow-sm border border-gray-200 hover:bg-blue-50 hover:border-blue-200 transition flex flex-col items-center">
                <div class="bg-green-100 text-green-800 p-3 rounded-full mb-2">
                    <i class="fas fa-poll text-xl"></i>
                </div>
                <span class="font-medium text-center">Results</span>
            </a>
            
            <a href="government-jobs.php" class="bg-white p-4 rounded-lg shadow-sm border border-gray-200 hover:bg-blue-50 hover:border-blue-200 transition flex flex-col items-center">
                <div class="bg-purple-100 text-purple-800 p-3 rounded-full mb-2">
                    <i class="fas fa-briefcase text-xl"></i>
                </div>
                <span class="font-medium text-center">Government Jobs</span>
            </a>
            
            <a href="exam-dates.php" class="bg-white p-4 rounded-lg shadow-sm border border-gray-200 hover:bg-blue-50 hover:border-blue-200 transition flex flex-col items-center">
                <div class="bg-yellow-100 text-yellow-800 p-3 rounded-full mb-2">
                    <i class="fas fa-calendar-alt text-xl"></i>
                </div>
                <span class="font-medium text-center">Exam Dates</span>
            </a>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>