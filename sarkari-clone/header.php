<?php
/**
 * Header component for SarkariResult clone
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SarkariResult - Government Jobs Portal</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .nav-link:hover {
            color: #2563eb;
            border-bottom: 2px solid #2563eb;
        }
        .search-btn:hover {
            background-color: #1d4ed8;
        }
    </style>
</head>
<body class="bg-gray-50">
    <header class="sticky top-0 z-50 bg-white shadow-md">
        <div class="container mx-auto px-4 py-3">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <!-- Logo Section -->
                <div class="flex items-center mb-4 md:mb-0">
                    <img src="https://images.pexels.com/photos/164336/pexels-photo-164336.jpeg" 
                         alt="Government Building Logo" 
                         class="h-12 w-12 rounded-full object-cover">
                    <div class="ml-3">
                        <h1 class="text-xl font-bold text-blue-800">SarkariResult</h1>
                        <p class="text-xs text-gray-600">Government Jobs Portal</p>
                    </div>
                </div>

                <!-- Search Bar -->
                <div class="w-full md:w-1/3 relative">
                    <input type="text" 
                           placeholder="Search Jobs, Exams, Results..." 
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <button class="absolute right-2 top-1/2 transform -translate-y-1/2 text-gray-500">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>

            <!-- Main Navigation -->
            <nav class="mt-4">
                <ul class="flex flex-wrap justify-center md:justify-start space-x-1 md:space-x-6">
                    <li><a href="index.php" class="nav-link px-2 py-1 text-gray-700 hover:text-blue-600 transition">Home</a></li>
                    <li><a href="government-jobs.php" class="nav-link px-2 py-1 text-gray-700 hover:text-blue-600 transition">Government Jobs</a></li>
                    <li><a href="admit-cards.php" class="nav-link px-2 py-1 text-gray-700 hover:text-blue-600 transition">Admit Cards</a></li>
                    <li><a href="results.php" class="nav-link px-2 py-1 text-gray-700 hover:text-blue-600 transition">Results</a></li>
                    <li><a href="exam-dates.php" class="nav-link px-2 py-1 text-gray-700 hover:text-blue-600 transition">Exam Dates</a></li>
                    <li><a href="about.php" class="nav-link px-2 py-1 text-gray-700 hover:text-blue-600 transition">About Us</a></li>
                    <li><a href="feedback.php" class="nav-link px-2 py-1 text-gray-700 hover:text-blue-600 transition">Feedback</a></li>
                </ul>
            </nav>
        </div>
    </header>