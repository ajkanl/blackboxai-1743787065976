<?php include 'header.php'; ?>

<main class="container mx-auto px-4 py-8">
    <!-- Page Header -->
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8">
        <div>
            <h1 class="text-2xl md:text-3xl font-bold mb-2">Admit Cards</h1>
            <div class="flex items-center text-sm text-gray-600">
                <a href="index.php" class="text-blue-600 hover:underline">Home</a>
                <span class="mx-2">/</span>
                <span>Admit Cards</span>
            </div>
        </div>
        <div class="mt-4 md:mt-0">
            <div class="relative">
                <input type="text" placeholder="Search Admit Cards..." class="border border-gray-300 rounded-md pl-10 pr-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 w-full md:w-64">
                <div class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400">
                    <i class="fas fa-search"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Admit Cards Section -->
    <div class="bg-white rounded-lg shadow-md p-6 mb-8">
        <h2 class="text-xl font-semibold mb-6 pb-2 border-b border-gray-200">Latest Admit Cards</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Admit Card 1 -->
            <div class="border border-gray-200 rounded-lg overflow-hidden hover:shadow-md transition">
                <div class="bg-blue-50 p-4">
                    <div class="flex justify-between items-center mb-2">
                        <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded">New</span>
                        <span class="text-xs text-gray-500">Released: 2 days ago</span>
                    </div>
                    <h3 class="text-lg font-bold mb-1">UPSC Civil Services (Prelims)</h3>
                    <p class="text-sm text-gray-600 mb-3">Union Public Service Commission</p>
                    <div class="flex items-center text-sm text-gray-500">
                        <i class="fas fa-calendar-alt mr-2"></i>
                        <span>Exam Date: 28/08/2023</span>
                    </div>
                </div>
                <div class="p-4 bg-white">
                    <div class="flex justify-between items-center">
                        <div>
                            <p class="text-sm text-gray-500">Download Before:</p>
                            <p class="text-red-600 font-medium">25/08/2023</p>
                        </div>
                        <a href="#" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition flex items-center">
                            Download <i class="fas fa-download ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Admit Card 2 -->
            <div class="border border-gray-200 rounded-lg overflow-hidden hover:shadow-md transition">
                <div class="bg-blue-50 p-4">
                    <div class="flex justify-between items-center mb-2">
                        <span class="bg-green-100 text-green-800 text-xs font-semibold px-2.5 py-0.5 rounded">Active</span>
                        <span class="text-xs text-gray-500">Released: 1 week ago</span>
                    </div>
                    <h3 class="text-lg font-bold mb-1">SSC CGL Tier-I 2023</h3>
                    <p class="text-sm text-gray-600 mb-3">Staff Selection Commission</p>
                    <div class="flex items-center text-sm text-gray-500">
                        <i class="fas fa-calendar-alt mr-2"></i>
                        <span>Exam Date: 05/09/2023</span>
                    </div>
                </div>
                <div class="p-4 bg-white">
                    <div class="flex justify-between items-center">
                        <div>
                            <p class="text-sm text-gray-500">Download Before:</p>
                            <p class="text-red-600 font-medium">02/09/2023</p>
                        </div>
                        <a href="#" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition flex items-center">
                            Download <i class="fas fa-download ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Admit Card 3 -->
            <div class="border border-gray-200 rounded-lg overflow-hidden hover:shadow-md transition">
                <div class="bg-blue-50 p-4">
                    <div class="flex justify-between items-center mb-2">
                        <span class="bg-yellow-100 text-yellow-800 text-xs font-semibold px-2.5 py-0.5 rounded">Last Week</span>
                        <span class="text-xs text-gray-500">Released: 10 days ago</span>
                    </div>
                    <h3 class="text-lg font-bold mb-1">IBPS PO Prelims 2023</h3>
                    <p class="text-sm text-gray-600 mb-3">Institute of Banking Personnel</p>
                    <div class="flex items-center text-sm text-gray-500">
                        <i class="fas fa-calendar-alt mr-2"></i>
                        <span>Exam Date: 12/09/2023</span>
                    </div>
                </div>
                <div class="p-4 bg-white">
                    <div class="flex justify-between items-center">
                        <div>
                            <p class="text-sm text-gray-500">Download Before:</p>
                            <p class="text-red-600 font-medium">09/09/2023</p>
                        </div>
                        <a href="#" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition flex items-center">
                            Download <i class="fas fa-download ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Admit Card 4 -->
            <div class="border border-gray-200 rounded-lg overflow-hidden hover:shadow-md transition">
                <div class="bg-blue-50 p-4">
                    <div class="flex justify-between items-center mb-2">
                        <span class="bg-purple-100 text-purple-800 text-xs font-semibold px-2.5 py-0.5 rounded">Today</span>
                        <span class="text-xs text-gray-500">Released: Today</span>
                    </div>
                    <h3 class="text-lg font-bold mb-1">Railway Group D CBT</h3>
                    <p class="text-sm text-gray-600 mb-3">Indian Railways</p>
                    <div class="flex items-center text-sm text-gray-500">
                        <i class="fas fa-calendar-alt mr-2"></i>
                        <span>Exam Date: 20/09/2023</span>
                    </div>
                </div>
                <div class="p-4 bg-white">
                    <div class="flex justify-between items-center">
                        <div>
                            <p class="text-sm text-gray-500">Download Before:</p>
                            <p class="text-red-600 font-medium">17/09/2023</p>
                        </div>
                        <a href="#" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition flex items-center">
                            Download <i class="fas fa-download ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Admit Card 5 -->
            <div class="border border-gray-200 rounded-lg overflow-hidden hover:shadow-md transition">
                <div class="bg-blue-50 p-4">
                    <div class="flex justify-between items-center mb-2">
                        <span class="bg-red-100 text-red-800 text-xs font-semibold px-2.5 py-0.5 rounded">Urgent</span>
                        <span class="text-xs text-gray-500">Released: Yesterday</span>
                    </div>
                    <h3 class="text-lg font-bold mb-1">UPPSC PCS 2023</h3>
                    <p class="text-sm text-gray-600 mb-3">Uttar Pradesh Public Service</p>
                    <div class="flex items-center text-sm text-gray-500">
                        <i class="fas fa-calendar-alt mr-2"></i>
                        <span>Exam Date: 15/09/2023</span>
                    </div>
                </div>
                <div class="p-4 bg-white">
                    <div class="flex justify-between items-center">
                        <div>
                            <p class="text-sm text-gray-500">Download Before:</p>
                            <p class="text-red-600 font-medium">12/09/2023</p>
                        </div>
                        <a href="#" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition flex items-center">
                            Download <i class="fas fa-download ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Admit Card 6 -->
            <div class="border border-gray-200 rounded-lg overflow-hidden hover:shadow-md transition">
                <div class="bg-blue-50 p-4">
                    <div class="flex justify-between items-center mb-2">
                        <span class="bg-gray-100 text-gray-800 text-xs font-semibold px-2.5 py-0.5 rounded">Last Call</span>
                        <span class="text-xs text-gray-500">Released: 2 weeks ago</span>
                    </div>
                    <h3 class="text-lg font-bold mb-1">SSC GD Constable 2023</h3>
                    <p class="text-sm text-gray-600 mb-3">Staff Selection Commission</p>
                    <div class="flex items-center text-sm text-gray-500">
                        <i class="fas fa-calendar-alt mr-2"></i>
                        <span>Exam Date: 10/09/2023</span>
                    </div>
                </div>
                <div class="p-4 bg-white">
                    <div class="flex justify-between items-center">
                        <div>
                            <p class="text-sm text-gray-500">Download Before:</p>
                            <p class="text-red-600 font-medium">07/09/2023</p>
                        </div>
                        <a href="#" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition flex items-center">
                            Download <i class="fas fa-download ml-2"></i>
                        </a>
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