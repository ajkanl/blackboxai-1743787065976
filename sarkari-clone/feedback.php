<?php include 'header.php'; ?>

<main class="container mx-auto px-4 py-8">
    <!-- Page Header -->
    <div class="mb-8">
        <h1 class="text-2xl md:text-3xl font-bold mb-2">Feedback & Complaints</h1>
        <div class="flex items-center text-sm text-gray-600">
            <a href="index.php" class="text-blue-600 hover:underline">Home</a>
            <span class="mx-2">/</span>
            <span>Feedback</span>
        </div>
    </div>

    <!-- Feedback Form -->
    <div class="bg-white rounded-lg shadow-md p-6 mb-8 max-w-3xl mx-auto">
        <form id="feedbackForm">
            <div class="mb-6">
                <h2 class="text-xl font-semibold mb-4">Share Your Feedback</h2>
                <p class="text-gray-600 mb-6">We value your opinion. Please help us improve by sharing your experience with our website.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name*</label>
                    <input type="text" id="name" name="name" required 
                           class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email*</label>
                    <input type="email" id="email" name="email" required 
                           class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
            </div>

            <div class="mb-6">
                <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">Subject*</label>
                <input type="text" id="subject" name="subject" required 
                       class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700 mb-1">Feedback Type*</label>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                    <label class="inline-flex items-center">
                        <input type="radio" name="feedbackType" value="suggestion" class="text-blue-600 focus:ring-blue-500" checked>
                        <span class="ml-2">Suggestion</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="radio" name="feedbackType" value="complaint" class="text-blue-600 focus:ring-blue-500">
                        <span class="ml-2">Complaint</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="radio" name="feedbackType" value="bug" class="text-blue-600 focus:ring-blue-500">
                        <span class="ml-2">Bug Report</span>
                    </label>
                </div>
            </div>

            <div class="mb-6">
                <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Your Message*</label>
                <textarea id="message" name="message" rows="5" required
                          class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
            </div>

            <div class="mb-6">
                <label for="screenshot" class="block text-sm font-medium text-gray-700 mb-1">Attach Screenshot (if any)</label>
                <input type="file" id="screenshot" name="screenshot" 
                       class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                <p class="text-xs text-gray-500 mt-1">Maximum file size: 5MB (JPG, PNG, GIF)</p>
            </div>

            <div class="flex items-center mb-6">
                <input type="checkbox" id="contactBack" name="contactBack" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                <label for="contactBack" class="ml-2 block text-sm text-gray-700">
                    You may contact me back regarding this feedback
                </label>
            </div>

            <div class="flex justify-end">
                <button type="submit" class="bg-blue-600 text-white px-6 py-3 rounded-md hover:bg-blue-700 transition flex items-center">
                    <i class="fas fa-paper-plane mr-2"></i> Submit Feedback
                </button>
            </div>
        </form>
    </div>

    <!-- Contact Information -->
    <div class="bg-blue-50 rounded-lg p-6 max-w-3xl mx-auto">
        <h3 class="text-lg font-semibold mb-4 flex items-center">
            <i class="fas fa-headset text-blue-600 mr-2"></i>
            Other Ways to Contact Us
        </h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <h4 class="font-medium mb-2">Email Support</h4>
                <p class="text-gray-700">
                    <i class="fas fa-envelope mr-2 text-blue-600"></i>
                    support@sarkariresult.com
                </p>
            </div>
            <div>
                <h4 class="font-medium mb-2">Helpline Number</h4>
                <p class="text-gray-700">
                    <i class="fas fa-phone-alt mr-2 text-blue-600"></i>
                    1800-123-4567 (9AM-6PM, Mon-Sat)
                </p>
            </div>
        </div>
    </div>
</main>

<script>
document.getElementById('feedbackForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Simple validation
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const subject = document.getElementById('subject').value;
    const message = document.getElementById('message').value;
    
    if (!name || !email || !subject || !message) {
        alert('Please fill all required fields');
        return;
    }
    
    // In a real implementation, you would send this data to a server
    alert('Thank you for your feedback! We have received your submission.');
    this.reset();
});
</script>

<?php include 'footer.php'; ?>