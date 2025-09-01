<?php include 'includes/header.php'; ?>

<!-- Travel Companion Mumbai Service Page -->
<main class="min-h-screen bg-gradient-to-br from-gray-50 to-pink-50">
    <!-- Hero Section -->
    <section class="relative py-20 overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-pink-600/90 to-rose-500/90"></div>
        <div class="absolute inset-0">
            <img src="images/services/travel-companion-mumbai.webp" alt="Travel Companion Mumbai Background" class="w-full h-full object-cover opacity-30">
        </div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
            <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                Travel Companions in Mumbai
                <span class="block text-2xl md:text-3xl font-normal mt-2 opacity-90">
                    Elegant Companions for Your Journey
                </span>
            </h1>
            <p class="text-xl md:text-2xl mb-8 max-w-4xl mx-auto leading-relaxed opacity-90">
                Enhance your travel experience with sophisticated companions for business trips and leisure travel.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="tel:+919372662471" class="bg-white text-pink-600 px-8 py-4 rounded-xl font-bold text-lg hover:bg-gray-100 transform hover:scale-105 transition-all duration-300 flex items-center justify-center gap-2">
                    <i class="fas fa-phone"></i> Call Now
                </a>
                <a href="https://api.whatsapp.com/send?phone=919372662471" class="bg-green-500 text-white px-8 py-4 rounded-xl font-bold text-lg hover:bg-green-600 transform hover:scale-105 transition-all duration-300 flex items-center justify-center gap-2">
                    <i class="fab fa-whatsapp"></i> WhatsApp
                </a>
            </div>
        </div>
    </section>

    <!-- Service Features Section -->
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                    Travel Companion Services
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Professional travel companions for business trips, vacations, and special occasions.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="text-pink-500 text-3xl mb-4">
                        <i class="fas fa-plane"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Business Travel</h3>
                    <p class="text-gray-600">Professional companions for business trips and corporate events.</p>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="text-pink-500 text-3xl mb-4">
                        <i class="fas fa-umbrella-beach"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Vacation Partners</h3>
                    <p class="text-gray-600">Elegant companions for leisure travel and holiday experiences.</p>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="text-pink-500 text-3xl mb-4">
                        <i class="fas fa-passport"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">International Travel</h3>
                    <p class="text-gray-600">Companions available for domestic and international journeys.</p>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="text-pink-500 text-3xl mb-4">
                        <i class="fas fa-language"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Multilingual</h3>
                    <p class="text-gray-600">Companions fluent in multiple languages for international travel.</p>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="text-pink-500 text-3xl mb-4">
                        <i class="fas fa-cocktail"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Social Events</h3>
                    <p class="text-gray-600">Perfect companions for conferences, galas, and social gatherings.</p>
                </div>
                
                <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="text-pink-500 text-3xl mb-4">
                        <i class="fas fa-concierge-bell"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Full Service</h3>
                    <p class="text-gray-600">Complete travel planning and companion services available.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Include Locations Section -->
    <?php include 'includes/locations.php'; ?>

    <!-- Include Contact Section -->
    <?php include 'includes/contact.php'; ?>
</main>

<?php include 'includes/footer.php'; ?>
