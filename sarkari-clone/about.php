<?php include 'header.php'; ?>

<main class="container mx-auto px-4 py-8">
    <!-- Page Header -->
    <div class="mb-8">
        <h1 class="text-2xl md:text-3xl font-bold mb-2">About SarkariResult</h1>
        <div class="flex items-center text-sm text-gray-600">
            <a href="index.php" class="text-blue-600 hover:underline">Home</a>
            <span class="mx-2">/</span>
            <span>About Us</span>
        </div>
    </div>

    <!-- About Section -->
    <div class="bg-white rounded-lg shadow-md p-6 mb-8">
        <div class="flex flex-col md:flex-row gap-8">
            <div class="md:w-1/3">
                <img src="https://images.pexels.com/photos/3184465/pexels-photo-3184465.jpeg" 
                     alt="About SarkariResult" 
                     class="w-full h-auto rounded-lg shadow-sm">
            </div>
            <div class="md:w-2/3">
                <h2 class="text-xl font-semibold mb-4">Our Mission</h2>
                <p class="text-gray-700 mb-4">
                    SarkariResult is dedicated to providing the most accurate and up-to-date information about government jobs, exam results, admit cards, and other employment-related notifications across India. Our mission is to bridge the gap between job seekers and government employment opportunities.
                </p>
                <p class="text-gray-700 mb-6">
                    With millions of visitors every month, we have become one of the most trusted sources for Sarkari Naukri information. Our team works tirelessly to ensure that you get the latest updates directly from official sources.
                </p>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                    <div class="flex items-start">
                        <div class="bg-blue-100 text-blue-800 p-2 rounded-full mr-3">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        <div>
                            <h3 class="font-medium mb-1">Accuracy</h3>
                            <p class="text-sm text-gray-600">Verified information from official sources</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="bg-green-100 text-green-800 p-2 rounded-full mr-3">
                            <i class="fas fa-bolt"></i>
                        </div>
                        <div>
                            <h3 class="font-medium mb-1">Speed</h3>
                            <p class="text-sm text-gray-600">Instant updates as soon as notifications are released</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="bg-purple-100 text-purple-800 p-2 rounded-full mr-3">
                            <i class="fas fa-users"></i>
                        </div>
                        <div>
                            <h3 class="font-medium mb-1">User-Focused</h3>
                            <p class="text-sm text-gray-600">Designed for easy navigation and accessibility</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="bg-yellow-100 text-yellow-800 p-2 rounded-full mr-3">
                            <i class="fas fa-star"></i>
                        </div>
                        <div>
                            <h3 class="font-medium mb-1">Comprehensive</h3>
                            <p class="text-sm text-gray-600">Covering all states and central government jobs</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Team Section -->
    <div class="bg-white rounded-lg shadow-md p-6 mb-8">
        <h2 class="text-xl font-semibold mb-6">Our Team</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Team Member 1 -->
            <div class="text-center">
                <div class="w-32 h-32 mx-auto mb-4 rounded-full overflow-hidden border-4 border-blue-100">
                    <img src="https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg" 
                         alt="Team Member" 
                         class="w-full h-full object-cover">
                </div>
                <h3 class="text-lg font-medium">Rajesh Kumar</h3>
                <p class="text-blue-600 mb-2">Founder & CEO</p>
                <p class="text-sm text-gray-600">With 15+ years in the recruitment industry</p>
            </div>
            
            <!-- Team Member 2 -->
            <div class="text-center">
                <div class="w-32 h-32 mx-auto mb-4 rounded-full overflow-hidden border-4 border-blue-100">
                    <img src="https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg" 
                         alt="Team Member" 
                         class="w-full h-full object-cover">
                </div>
                <h3 class="text-lg font-medium">Priya Sharma</h3>
                <p class="text-blue-600 mb-2">Content Manager</p>
                <p class="text-sm text-gray-600">Ensuring accurate and timely updates</p>
            </div>
            
            <!-- Team Member 3 -->
            <div class="text-center">
                <div class="w-32 h-32 mx-auto mb-4 rounded-full overflow-hidden border-4 border-blue-100">
                    <img src="https://images.pexels.com/photos/1222271/pexels-photo-1222271.jpeg" 
                         alt="Team Member" 
                         class="w-full h-full object-cover">
                </div>
                <h3 class="text-lg font-medium">Amit Patel</h3>
                <p class="text-blue-600 mb-2">Technical Lead</p>
                <p class="text-sm text-gray-600">Building robust and scalable solutions</p>
            </div>
        </div>
    </div>

    <!-- Stats Section -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8">
        <div class="bg-blue-600 text-white rounded-lg p-6 text-center">
            <div class="text-3xl font-bold mb-2">10M+</div>
            <div class="text-sm">Monthly Visitors</div>
        </div>
        <div class="bg-green-600 text-white rounded-lg p-6 text-center">
            <div class="text-3xl font-bold mb-2">50K+</div>
            <div class="text-sm">Job Notifications</div>
        </div>
        <div class="bg-purple-600 text-white rounded-lg p-6 text-center">
            <div class="text-3xl font-bold mb-2">15+</div>
            <div class="text-sm">Years Experience</div>
        </div>
        <div class="bg-yellow-500 text-white rounded-lg p-6 text-center">
            <div class="text-3xl font-bold mb-2">100+</div>
            <div class="text-sm">Government Departments</div>
        </div>
    </div>

    <!-- Testimonials -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <h2 class="text-xl font-semibold mb-6">What Our Users Say</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Testimonial 1 -->
            <div class="border border-gray-200 rounded-lg p-4">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 rounded-full overflow-hidden mr-3">
                        <img src="https://images.pexels.com/photos/1681010/pexels-photo-1681010.jpeg" 
                             alt="User" 
                             class="w-full h-full object-cover">
                    </div>
                    <div>
                        <h4 class="font-medium">Anjali Singh</h4>
                        <p class="text-sm text-gray-500">SSC CGL Aspirant</p>
                    </div>
                </div>
                <p class="text-gray-700">
                    "Thanks to SarkariResult, I got timely updates about my exam date and admit card. The website is so easy to use and has all the information in one place."
                </p>
                <div class="flex mt-3 text-yellow-400">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
            
            <!-- Testimonial 2 -->
            <div class="border border-gray-200 rounded-lg p-4">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 rounded-full overflow-hidden mr-3">
                        <img src="https://images.pexels.com/photos/1516680/pexels-photo-1516680.jpeg" 
                             alt="User" 
                             class="w-full h-full object-cover">
                    </div>
                    <div>
                        <h4 class="font-medium">Rahul Verma</h4>
                        <p class="text-sm text-gray-500">IBPS PO Selected</p>
                    </div>
                </div>
                <p class="text-gray-700">
                    "I found all the banking exam notifications and results on SarkariResult. The website helped me stay updated throughout my preparation journey."
                </p>
                <div class="flex mt-3 text-yellow-400">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include 'footer.php'; ?>