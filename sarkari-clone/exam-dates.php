<?php include 'header.php'; ?>

<main class="container mx-auto px-4 py-8">
    <!-- Page Header -->
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8">
        <div>
            <h1 class="text-2xl md:text-3xl font-bold mb-2">Exam Dates</h1>
            <div class="flex items-center text-sm text-gray-600">
                <a href="index.php" class="text-blue-600 hover:underline">Home</a>
                <span class="mx-2">/</span>
                <span>Exam Dates</span>
            </div>
        </div>
        <div class="mt-4 md:mt-0">
            <div class="flex items-center space-x-4">
                <div class="relative">
                    <input type="text" placeholder="Search Exams..." class="border border-gray-300 rounded-md pl-10 pr-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 w-full md:w-64">
                    <div class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400">
                        <i class="fas fa-search"></i>
                    </div>
                </div>
                <button class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition flex items-center">
                    <i class="fas fa-calendar-alt mr-2"></i> Calendar View
                </button>
            </div>
        </div>
    </div>

    <!-- Exam Dates Section -->
    <div class="bg-white rounded-lg shadow-md p-6 mb-8">
        <h2 class="text-xl font-semibold mb-6 pb-2 border-b border-gray-200">Upcoming Exam Schedule</h2>
        
        <!-- Month Selector -->
        <div class="flex justify-between items-center mb-6">
            <button class="text-blue-600 hover:text-blue-800">
                <i class="fas fa-chevron-left mr-1"></i> Previous Month
            </button>
            <h3 class="text-lg font-semibold">August 2023</h3>
            <button class="text-blue-600 hover:text-blue-800">
                Next Month <i class="fas fa-chevron-right ml-1"></i>
            </button>
        </div>

        <!-- Calendar View -->
        <div class="grid grid-cols-7 gap-1 mb-8">
            <!-- Weekday Headers -->
            <div class="text-center font-medium text-gray-500 py-2">Sun</div>
            <div class="text-center font-medium text-gray-500 py-2">Mon</div>
            <div class="text-center font-medium text-gray-500 py-2">Tue</div>
            <div class="text-center font-medium text-gray-500 py-2">Wed</div>
            <div class="text-center font-medium text-gray-500 py-2">Thu</div>
            <div class="text-center font-medium text-gray-500 py-2">Fri</div>
            <div class="text-center font-medium text-gray-500 py-2">Sat</div>

            <!-- Calendar Days -->
            <!-- Week 1 -->
            <div class="h-24 border border-gray-100 p-1"></div>
            <div class="h-24 border border-gray-100 p-1"></div>
            <div class="h-24 border border-gray-100 p-1 bg-blue-50">
                <div class="text-right text-sm">1</div>
                <div class="text-xs mt-1 truncate">SSC CHSL Tier-I</div>
            </div>
            <div class="h-24 border border-gray-100 p-1">
                <div class="text-right text-sm">2</div>
            </div>
            <div class="h-24 border border-gray-100 p-1">
                <div class="text-right text-sm">3</div>
            </div>
            <div class="h-24 border border-gray-100 p-1">
                <div class="text-right text-sm">4</div>
            </div>
            <div class="h-24 border border-gray-100 p-1">
                <div class="text-right text-sm">5</div>
            </div>

            <!-- Week 2 -->
            <div class="h-24 border border-gray-100 p-1">
                <div class="text-right text-sm">6</div>
            </div>
            <div class="h-24 border border-gray-100 p-1">
                <div class="text-right text-sm">7</div>
            </div>
            <div class="h-24 border border-gray-100 p-1">
                <div class="text-right text-sm">8</div>
            </div>
            <div class="h-24 border border-gray-100 p-1">
                <div class="text-right text-sm">9</div>
            </div>
            <div class="h-24 border border-gray-100 p-1">
                <div class="text-right text-sm">10</div>
            </div>
            <div class="h-24 border border-gray-100 p-1 bg-blue-50">
                <div class="text-right text-sm">11</div>
                <div class="text-xs mt-1 truncate">IBPS RRB PO Prelims</div>
            </div>
            <div class="h-24 border border-gray-100 p-1 bg-blue-50">
                <div class="text-right text-sm">12</div>
                <div class="text-xs mt-1 truncate">IBPS RRB PO Prelims</div>
            </div>

            <!-- Week 3 -->
            <div class="h-24 border border-gray-100 p-1">
                <div class="text-right text-sm">13</div>
            </div>
            <div class="h-24 border border-gray-100 p-1">
                <div class="text-right text-sm">14</div>
            </div>
            <div class="h-24 border border-gray-100 p-1">
                <div class="text-right text-sm">15</div>
            </div>
            <div class="h-24 border border-gray-100 p-1">
                <div class="text-right text-sm">16</div>
            </div>
            <div class="h-24 border border-gray-100 p-1">
                <div class="text-right text-sm">17</div>
            </div>
            <div class="h-24 border border-gray-100 p-1">
                <div class="text-right text-sm">18</div>
            </div>
            <div class="h-24 border border-gray-100 p-1">
                <div class="text-right text-sm">19</div>
            </div>

            <!-- Week 4 -->
            <div class="h-24 border border-gray-100 p-1">
                <div class="text-right text-sm">20</div>
            </div>
            <div class="h-24 border border-gray-100 p-1 bg-blue-50">
                <div class="text-right text-sm">21</div>
                <div class="text-xs mt-1 truncate">SSC GD Constable</div>
            </div>
            <div class="h-24 border border-gray-100 p-1 bg-blue-50">
                <div class="text-right text-sm">22</div>
                <div class="text-xs mt-1 truncate">SSC GD Constable</div>
            </div>
            <div class="h-24 border border-gray-100 p-1">
                <div class="text-right text-sm">23</div>
            </div>
            <div class="h-24 border border-gray-100 p-1">
                <div class="text-right text-sm">24</div>
            </div>
            <div class="h-24 border border-gray-100 p-1">
                <div class="text-right text-sm">25</div>
            </div>
            <div class="h-24 border border-gray-100 p-1">
                <div class="text-right text-sm">26</div>
            </div>

            <!-- Week 5 -->
            <div class="h-24 border border-gray-100 p-1 bg-blue-50">
                <div class="text-right text-sm">27</div>
                <div class="text-xs mt-1 truncate">UPSC Civil Services</div>
            </div>
            <div class="h-24 border border-gray-100 p-1 bg-blue-50">
                <div class="text-right text-sm">28</div>
                <div class="text-xs mt-1 truncate">UPSC Civil Services</div>
            </div>
            <div class="h-24 border border-gray-100 p-1">
                <div class="text-right text-sm">29</div>
            </div>
            <div class="h-24 border border-gray-100 p-1">
                <div class="text-right text-sm">30</div>
            </div>
            <div class="h-24 border border-gray-100 p-1">
                <div class="text-right text-sm">31</div>
            </div>
            <div class="h-24 border border-gray-100 p-1"></div>
            <div class="h-24 border border-gray-100 p-1"></div>
        </div>

        <!-- List View -->
        <h3 class="text-lg font-semibold mb-4">Detailed Schedule</h3>
        <div class="space-y-4">
            <!-- Exam 1 -->
            <div class="border border-gray-200 rounded-lg p-4 hover:shadow-md transition">
                <div class="flex flex-col md:flex-row md:justify-between md:items-center">
                    <div class="mb-4 md:mb-0">
                        <div class="flex items-center mb-2">
                            <span class="bg-red-100 text-red-800 text-xs font-semibold px-2.5 py-0.5 rounded mr-3">Urgent</span>
                            <span class="text-gray-500 text-sm">Last Date: 10/08/2023</span>
                        </div>
                        <h3 class="text-xl font-bold mb-1">UPSC Civil Services (Prelims) 2023</h3>
                        <p class="text-gray-600 mb-2">Union Public Service Commission</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <i class="fas fa-map-marker-alt mr-2"></i>
                            <span>All India</span>
                        </div>
                    </div>
                    <div class="flex flex-col items-end">
                        <div class="text-right mb-3">
                            <p class="text-sm text-gray-500">Exam Date:</p>
                            <p class="text-blue-600 font-medium">27-28 August 2023</p>
                        </div>
                        <div class="flex space-x-2">
                            <a href="#" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition">
                                View Details
                            </a>
                            <a href="#" class="border border-blue-600 text-blue-600 px-4 py-2 rounded-md hover:bg-blue-50 transition">
                                Download Syllabus
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Exam 2 -->
            <div class="border border-gray-200 rounded-lg p-4 hover:shadow-md transition">
                <div class="flex flex-col md:flex-row md:justify-between md:items-center">
                    <div class="mb-4 md:mb-0">
                        <div class="flex items-center mb-2">
                            <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded mr-3">New</span>
                            <span class="text-gray-500 text-sm">Last Date: 05/08/2023</span>
                        </div>
                        <h3 class="text-xl font-bold mb-1">SSC GD Constable 2023</h3>
                        <p class="text-gray-600 mb-2">Staff Selection Commission</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <i class="fas fa-map-marker-alt mr-2"></i>
                            <span>Multiple States</span>
                        </div>
                    </div>
                    <div class="flex flex-col items-end">
                        <div class="text-right mb-3">
                            <p class="text-sm text-gray-500">Exam Date:</p>
                            <p class="text-blue-600 font-medium">21-22 August 2023</p>
                        </div>
                        <div class="flex space-x-2">
                            <a href="#" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition">
                                View Details
                            </a>
                            <a href="#" class="border border-blue-600 text-blue-600 px-4 py-2 rounded-md hover:bg-blue-50 transition">
                                Download Syllabus
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Exam 3 -->
            <div class="border border-gray-200 rounded-lg p-4 hover:shadow-md transition">
                <div class="flex flex-col md:flex-row md:justify-between md:items-center">
                    <div class="mb-4 md:mb-0">
                        <div class="flex items-center mb-2">
                            <span class="bg-green-100 text-green-800 text-xs font-semibold px-2.5 py-0.5 rounded mr-3">Active</span>
                            <span class="text-gray-500 text-sm">Last Date: 01/08/2023</span>
                        </div>
                        <h3 class="text-xl font-bold mb-1">IBPS RRB PO Prelims 2023</h3>
                        <p class="text-gray-600 mb-2">Institute of Banking Personnel</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <i class="fas fa-map-marker-alt mr-2"></i>
                            <span>All India</span>
                        </div>
                    </div>
                    <div class="flex flex-col items-end">
                        <div class="text-right mb-3">
                            <p class="text-sm text-gray-500">Exam Date:</p>
                            <p class="text-blue-600 font-medium">11-12 August 2023</p>
                        </div>
                        <div class="flex space-x-2">
                            <a href="#" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition">
                                View Details
                            </a>
                            <a href="#" class="border border-blue-600 text-blue-600 px-4 py-2 rounded-md hover:bg-blue-50 transition">
                                Download Syllabus
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Exam Statistics -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h3 class="text-lg font-semibold mb-4">Upcoming Exams by Month</h3>
            <div class="space-y-3">
                <div>
                    <div class="flex justify-between text-sm mb-1">
                        <span>August 2023</span>
                        <span class="font-medium">5 Exams</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5">
                        <div class="bg-blue-600 h-2.5 rounded-full" style="width: 70%"></div>
                    </div>
                </div>
                <div>
                    <div class="flex justify-between text-sm mb-1">
                        <span>September 2023</span>
                        <span class="font-medium">3 Exams</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5">
                        <div class="bg-blue-600 h-2.5 rounded-full" style="width: 40%"></div>
                    </div>
                </div>
                <div>
                    <div class="flex justify-between text-sm mb-1">
                        <span>October 2023</span>
                        <span class="font-medium">2 Exams</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5">
                        <div class="bg-blue-600 h-2.5 rounded-full" style="width: 30%"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-md p-6">
            <h3 class="text-lg font-semibold mb-4">Exam Categories</h3>
            <div class="grid grid-cols-2 gap-4">
                <div class="flex items-center">
                    <div class="w-3 h-3 bg-blue-600 rounded-full mr-2"></div>
                    <span class="text-sm">Banking</span>
                </div>
                <div class="flex items-center">
                    <div class="w-3 h-3 bg-green-600 rounded-full mr-2"></div>
                    <span class="text-sm">Civil Services</span>
                </div>
                <div class="flex items-center">
                    <div class="w-3 h-3 bg-yellow-500 rounded-full mr-2"></div>
                    <span class="text-sm">Defense</span>
                </div>
                <div class="flex items-center">
                    <div class="w-3 h-3 bg-purple-600 rounded-full mr-2"></div>
                    <span class="text-sm">Teaching</span>
                </div>
                <div class="flex items-center">
                    <div class="w-3 h-3 bg-red-500 rounded-full mr-2"></div>
                    <span class="text-sm">Railway</span>
                </div>
                <div class="flex items-center">
                    <div class="w-3 h-3 bg-indigo-600 rounded-full mr-2"></div>
                    <span class="text-sm">Police</span>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include 'footer.php'; ?>