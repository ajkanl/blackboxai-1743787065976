<?php include 'header.php'; ?>

<main class="container mx-auto px-4 py-8">
    <!-- Search Header -->
    <div class="mb-8">
        <h1 class="text-2xl md:text-3xl font-bold mb-2">Search Government Jobs</h1>
        <div class="flex items-center text-sm text-gray-600">
            <a href="index.php" class="text-blue-600 hover:underline">Home</a>
            <span class="mx-2">/</span>
            <span>Search</span>
        </div>
    </div>

    <!-- Search Form -->
    <div class="bg-white rounded-lg shadow-md p-6 mb-8">
        <form>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Keywords</label>
                    <input type="text" placeholder="Job title, exam name..." class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Category</label>
                    <select class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="">All Categories</option>
                        <option>Banking</option>
                        <option>Railway</option>
                        <option>Defense</option>
                        <option>Teaching</option>
                        <option>Medical</option>
                        <option>Engineering</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Location</label>
                    <select class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="">All India</option>
                        <option>Andhra Pradesh</option>
                        <option>Bihar</option>
                        <option>Delhi</option>
                        <option>Gujarat</option>
                        <option>Maharashtra</option>
                        <option>Tamil Nadu</option>
                        <option>Uttar Pradesh</option>
                        <option>West Bengal</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Job Type</label>
                    <select class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="">All Types</option>
                        <option>Permanent</option>
                        <option>Contractual</option>
                        <option>Temporary</option>
                        <option>Internship</option>
                    </select>
                </div>
            </div>
            <div class="flex justify-center">
                <button type="submit" class="bg-blue-600 text-white px-6 py-3 rounded-md hover:bg-blue-700 transition flex items-center">
                    <i class="fas fa-search mr-2"></i> Search Jobs
                </button>
            </div>
        </form>
    </div>

    <!-- Search Results -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-xl font-semibold">Search Results for "Banking"</h2>
            <div class="flex items-center">
                <span class="text-sm text-gray-600 mr-2">Sort by:</span>
                <select class="border border-gray-300 rounded-md px-3 py-1 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option>Relevance</option>
                    <option>Newest First</option>
                    <option>Last Date</option>
                </select>
            </div>
        </div>

        <!-- Results List -->
        <div class="space-y-4">
            <!-- Result 1 -->
            <div class="border border-gray-200 rounded-lg p-4 hover:shadow-md transition">
                <div class="flex flex-col md:flex-row md:justify-between md:items-center">
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

            <!-- Result 2 -->
            <div class="border border-gray-200 rounded-lg p-4 hover:shadow-md transition">
                <div class="flex flex-col md:flex-row md:justify-between md:items-center">
                    <div class="mb-4 md:mb-0">
                        <div class="flex items-center mb-2">
                            <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded mr-3">Urgent</span>
                            <span class="text-gray-500 text-sm">Posted: 3 days ago</span>
                        </div>
                        <h3 class="text-xl font-bold mb-1">SBI Clerk Recruitment 2023</h3>
                        <p class="text-gray-600 mb-2">State Bank of India</p>
                        <div class="flex flex-wrap gap-2 mt-2">
                            <span class="bg-gray-100 text-gray-800 text-xs px-2.5 py-0.5 rounded">Banking</span>
                            <span class="bg-gray-100 text-gray-800 text-xs px-2.5 py-0.5 rounded">Multiple States</span>
                            <span class="bg-gray-100 text-gray-800 text-xs px-2.5 py-0.5 rounded">Junior Associate</span>
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

            <!-- Result 3 -->
            <div class="border border-gray-200 rounded-lg p-4 hover:shadow-md transition">
                <div class="flex flex-col md:flex-row md:justify-between md:items-center">
                    <div class="mb-4 md:mb-0">
                        <div class="flex items-center mb-2">
                            <span class="bg-yellow-100 text-yellow-800 text-xs font-semibold px-2.5 py-0.5 rounded mr-3">Last Week</span>
                            <span class="text-gray-500 text-sm">Posted: 5 days ago</span>
                        </div>
                        <h3 class="text-xl font-bold mb-1">RBI Grade B Officer 2023</h3>
                        <p class="text-gray-600 mb-2">Reserve Bank of India</p>
                        <div class="flex flex-wrap gap-2 mt-2">
                            <span class="bg-gray-100 text-gray-800 text-xs px-2.5 py-0.5 rounded">Banking</span>
                            <span class="bg-gray-100 text-gray-800 text-xs px-2.5 py-0.5 rounded">All India</span>
                            <span class="bg-gray-100 text-gray-800 text-xs px-2.5 py-0.5 rounded">Officer Grade B</span>
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

        <!-- Pagination -->
        <div class="flex justify-between items-center mt-6">
            <div class="text-sm text-gray-500">
                Showing <span class="font-medium">1</span> to <span class="font-medium">3</span> of <span class="font-medium">12</span> results
            </div>
            <div class="flex space-x-2">
                <button class="px-4 py-2 border border-gray-300 rounded-md bg-white text-gray-700 hover:bg-gray-50">
                    Previous
                </button>
                <button class="px-4 py-2 border border-gray-300 rounded-md bg-white text-gray-700 hover:bg-gray-50">
                    Next
                </button>
            </div>
        </div>
    </div>

    <!-- Search Tips -->
    <div class="bg-blue-50 rounded-lg p-6 mt-8">
        <h3 class="text-lg font-semibold mb-4 flex items-center">
            <i class="fas fa-lightbulb text-yellow-500 mr-2"></i>
            Search Tips
        </h3>
        <ul class="list-disc pl-5 space-y-2 text-gray-700">
            <li>Use specific keywords like "Bank PO" or "SSC CGL" for better results</li>
            <li>Filter by location to find jobs in your preferred state</li>
            <li>Check the "New" tag for recently posted opportunities</li>
            <li>Sort by "Last Date" to see upcoming deadlines first</li>
        </ul>
    </div>
</main>

<?php include 'footer.php'; ?>