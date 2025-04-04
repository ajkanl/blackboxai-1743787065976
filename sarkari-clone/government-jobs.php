<?php include 'header.php'; ?>

<main class="container mx-auto px-4 py-8">
    <!-- Page Header -->
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8">
        <div>
            <h1 class="text-2xl md:text-3xl font-bold mb-2">Government Jobs</h1>
            <div class="flex items-center text-sm text-gray-600">
                <a href="index.php" class="text-blue-600 hover:underline">Home</a>
                <span class="mx-2">/</span>
                <span>Government Jobs</span>
            </div>
        </div>
        <div class="mt-4 md:mt-0">
            <button class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition flex items-center">
                <i class="fas fa-filter mr-2"></i> Filter Jobs
            </button>
        </div>
    </div>

    <!-- Filters Section -->
    <div class="bg-white rounded-lg shadow-md p-4 mb-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Job Category</label>
                <select class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option>All Categories</option>
                    <option>Banking</option>
                    <option>Railway</option>
                    <option>Defense</option>
                    <option>Teaching</option>
                    <option>Medical</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">State/UT</label>
                <select class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option>All India</option>
                    <option>Delhi</option>
                    <option>Maharashtra</option>
                    <option>Uttar Pradesh</option>
                    <option>West Bengal</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Job Type</label>
                <select class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option>All Types</option>
                    <option>Permanent</option>
                    <option>Contractual</option>
                    <option>Temporary</option>
                </select>
            </div>
            <div class="flex items-end">
                <button class="w-full bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition">
                    Apply Filters
                </button>
            </div>
        </div>
    </div>

    <!-- Jobs Listing -->
    <div class="mb-8">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-semibold">Showing 24 Jobs</h2>
            <div class="flex items-center">
                <span class="text-sm text-gray-600 mr-2">Sort by:</span>
                <select class="border border-gray-300 rounded-md px-3 py-1 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option>Newest First</option>
                    <option>Last Date</option>
                    <option>Alphabetical</option>
                </select>
            </div>
        </div>

        <!-- Job Listing Items -->
        <div class="space-y-4">
            <!-- Job 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden border border-gray-200 hover:shadow-lg transition">
                <div class="p-5">
                    <div class="flex flex-col md:flex-row md:justify-between md:items-start">
                        <div class="mb-4 md:mb-0">
                            <div class="flex items-center mb-2">
                                <span class="bg-green-100 text-green-800 text-xs font-semibold px-2.5 py-0.5 rounded mr-3">New</span>
                                <span class="text-gray-500 text-sm">Posted: 1 day ago</span>
                            </div>
                            <h3 class="text-xl font-bold mb-1">IBPS PO Recruitment 2023</h3>
                            <p class="text-gray-600 mb-2">Institute of Banking Personnel Selection</p>
                            <div class="flex flex-wrap gap-2 mt-2">
                                <span class="bg-gray-100 text-gray-800 text-xs px-2.5 py-0.5 rounded">Banking</span>
                                <span class="bg-gray-100 text-gray-800 text-xs px-2.5 py-0.5 rounded">All India</span>
                                <span class="bg-gray-100 text-gray-800 text-xs px-2.5 py-0.5 rounded">Probationary Officer</span>
                            </div>
                        </div>
                        <div class="flex flex-col items-end">
                            <div class="text-right mb-3">
                                <p class="text-sm text-gray-500">Last Date:</p>
                                <p class="text-red-600 font-medium">30/09/2023</p>
                            </div>
                            <div class="flex space-x-2">
                                <a href="#" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition">
                                    Apply Now
                                </a>
                                <a href="#" class="border border-blue-600 text-blue-600 px-4 py-2 rounded-md hover:bg-blue-50 transition">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Job 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden border border-gray-200 hover:shadow-lg transition">
                <div class="p-5">
                    <div class="flex flex-col md:flex-row md:justify-between md:items-start">
                        <div class="mb-4 md:mb-0">
                            <div class="flex items-center mb-2">
                                <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded mr-3">Urgent</span>
                                <span class="text-gray-500 text-sm">Posted: 3 days ago</span>
                            </div>
                            <h3 class="text-xl font-bold mb-1">SSC CHSL 2023</h3>
                            <p class="text-gray-600 mb-2">Staff Selection Commission</p>
                            <div class="flex flex-wrap gap-2 mt-2">
                                <span class="bg-gray-100 text-gray-800 text-xs px-2.5 py-0.5 rounded">Central Govt</span>
                                <span class="bg-gray-100 text-gray-800 text-xs px-2.5 py-0.5 rounded">All India</span>
                                <span class="bg-gray-100 text-gray-800 text-xs px-2.5 py-0.5 rounded">10+2 Level</span>
                            </div>
                        </div>
                        <div class="flex flex-col items-end">
                            <div class="text-right mb-3">
                                <p class="text-sm text-gray-500">Last Date:</p>
                                <p class="text-red-600 font-medium">15/08/2023</p>
                            </div>
                            <div class="flex space-x-2">
                                <a href="#" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition">
                                    Apply Now
                                </a>
                                <a href="#" class="border border-blue-600 text-blue-600 px-4 py-2 rounded-md hover:bg-blue-50 transition">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Job 3 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden border border-gray-200 hover:shadow-lg transition">
                <div class="p-5">
                    <div class="flex flex-col md:flex-row md:justify-between md:items-start">
                        <div class="mb-4 md:mb-0">
                            <div class="flex items-center mb-2">
                                <span class="bg-yellow-100 text-yellow-800 text-xs font-semibold px-2.5 py-0.5 rounded mr-3">Last Week</span>
                                <span class="text-gray-500 text-sm">Posted: 5 days ago</span>
                            </div>
                            <h3 class="text-xl font-bold mb-1">Railway Group D Recruitment</h3>
                            <p class="text-gray-600 mb-2">Indian Railways</p>
                            <div class="flex flex-wrap gap-2 mt-2">
                                <span class="bg-gray-100 text-gray-800 text-xs px-2.5 py-0.5 rounded">Railway</span>
                                <span class="bg-gray-100 text-gray-800 text-xs px-2.5 py-0.5 rounded">Multiple States</span>
                                <span class="bg-gray-100 text-gray-800 text-xs px-2.5 py-0.5 rounded">10th Pass</span>
                            </div>
                        </div>
                        <div class="flex flex-col items-end">
                            <div class="text-right mb-3">
                                <p class="text-sm text-gray-500">Last Date:</p>
                                <p class="text-red-600 font-medium">20/08/2023</p>
                            </div>
                            <div class="flex space-x-2">
                                <a href="#" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition">
                                    Apply Now
                                </a>
                                <a href="#" class="border border-blue-600 text-blue-600 px-4 py-2 rounded-md hover:bg-blue-50 transition">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="flex justify-center mt-8">
            <nav class="inline-flex rounded-md shadow">
                <a href="#" class="px-3 py-2 rounded-l-md border border-gray-300 bg-white text-gray-500 hover:bg-gray-50">
                    <i class="fas fa-chevron-left"></i>
                </a>
                <a href="#" class="px-4 py-2 border-t border-b border-gray-300 bg-white text-blue-600 font-medium hover:bg-blue-50">1</a>
                <a href="#" class="px-4 py-2 border-t border-b border-gray-300 bg-white text-gray-500 hover:bg-gray-50">2</a>
                <a href="#" class="px-4 py-2 border-t border-b border-gray-300 bg-white text-gray-500 hover:bg-gray-50">3</a>
                <a href="#" class="px-3 py-2 rounded-r-md border border-gray-300 bg-white text-gray-500 hover:bg-gray-50">
                    <i class="fas fa-chevron-right"></i>
                </a>
            </nav>
        </div>
    </div>
</main>

<?php include 'footer.php'; ?>