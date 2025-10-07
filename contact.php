<?php include 'includes/header.php'; ?>

<!-- Contact Page -->
<main class="min-h-screen bg-gradient-to-br from-gray-50 to-pink-50">
    <!-- Hero Section -->
    <section class="relative py-20 overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-pink-600/90 to-rose-500/90"></div>
        <div class="absolute inset-0">
            <img src="images/services/default-escort.webp" alt="Contact Us Background" class="w-full h-full object-cover opacity-30">
        </div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
            <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                Contact Us
                <span class="block text-2xl md:text-3xl font-normal mt-2 opacity-90">
                    Get in Touch for Premium Escort Services
                </span>
            </h1>
            <p class="text-xl md:text-2xl mb-8 max-w-4xl mx-auto leading-relaxed opacity-90">
                We're available 24/7 to help you find the perfect companion for any occasion in Mumbai.
            </p>
        </div>
    </section>

    <!-- Contact Information Section -->
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Contact Details -->
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-8">
                        Get in Touch
                    </h2>
                    
                    <div class="space-y-6">
                        <div class="flex items-start space-x-4">
                            <div class="bg-pink-500 text-white p-3 rounded-lg">
                                <i class="fas fa-phone text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-800 mb-2">Phone</h3>
                                <p class="text-gray-600 mb-2">Call us directly for instant booking and inquiries</p>
                                <a href="tel:+919867564994" class="text-pink-500 font-semibold text-lg hover:text-pink-600">
                                    +91 9867564994
                                </a>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="bg-green-500 text-white p-3 rounded-lg">
                                <i class="fab fa-whatsapp text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-800 mb-2">WhatsApp</h3>
                                <p class="text-gray-600 mb-2">Quick and easy booking through WhatsApp</p>
                                <a href="https://api.whatsapp.com/send?phone=919867564994" class="text-green-500 font-semibold text-lg hover:text-green-600">
                                    +91 9867564994
                                </a>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="bg-blue-500 text-white p-3 rounded-lg">
                                <i class="fas fa-envelope text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-800 mb-2">Email</h3>
                                <p class="text-gray-600 mb-2">For detailed inquiries and special requests</p>
                                <a href="mailto:info@pinkbraescort.in" class="text-blue-500 font-semibold text-lg hover:text-blue-600">
                                    info@pinkbraescort.in
                                </a>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="bg-purple-500 text-white p-3 rounded-lg">
                                <i class="fas fa-map-marker-alt text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-800 mb-2">Service Areas</h3>
                                <p class="text-gray-600">We provide escort services across all areas of Mumbai including:</p>
                                <ul class="text-gray-600 mt-2">
                                    <li>• South Mumbai (Colaba, Fort, Churchgate)</li>
                                    <li>• Central Mumbai (Bandra, Andheri, Juhu)</li>
                                    <li>• North Mumbai (Borivali, Malad, Kandivali)</li>
                                    <li>• Navi Mumbai (Vashi, Nerul, Kharghar)</li>
                                    <li>• Extended Mumbai (Thane, Kalyan, Dombivli)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="bg-white rounded-xl shadow-lg p-8">
                    <h3 class="text-2xl font-bold text-gray-800 mb-6">Send us a Message</h3>
                    
                    <form action="contact_handler.php" method="POST" class="space-y-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Full Name</label>
                            <input type="text" id="name" name="name" required 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-transparent">
                        </div>

                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                            <input type="tel" id="phone" name="phone" required 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-transparent">
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                            <input type="email" id="email" name="email" 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-transparent">
                        </div>

                        <div>
                            <label for="service" class="block text-sm font-medium text-gray-700 mb-2">Service Type</label>
                            <select id="service" name="service" required 
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-transparent">
                                <option value="">Select Service Type</option>
                                <option value="vip-escorts">VIP Escorts</option>
                                <option value="celebrity-escorts">Celebrity Escorts</option>
                                <option value="high-class-models">High Class Models</option>
                                <option value="college-girls">College Girls</option>
                                <option value="housewife-escorts">Housewife Escorts</option>
                                <option value="independent-escorts">Independent Escorts</option>
                                <option value="travel-companions">Travel Companions</option>
                                <option value="event-companions">Event Companions</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div>
                            <label for="location" class="block text-sm font-medium text-gray-700 mb-2">Preferred Location</label>
                            <select id="location" name="location" required 
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-transparent">
                                <option value="">Select Location</option>
                                <option value="south-mumbai">South Mumbai</option>
                                <option value="central-mumbai">Central Mumbai</option>
                                <option value="north-mumbai">North Mumbai</option>
                                <option value="navi-mumbai">Navi Mumbai</option>
                                <option value="extended-mumbai">Extended Mumbai</option>
                                <option value="hotel-visit">Hotel Visit</option>
                                <option value="outcall">Outcall Service</option>
                            </select>
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                            <textarea id="message" name="message" rows="4" 
                                      class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-transparent"
                                      placeholder="Please provide details about your requirements, preferred time, duration, and any special requests..."></textarea>
                        </div>

                        <button type="submit" 
                                class="w-full bg-pink-500 text-white py-3 px-6 rounded-lg font-semibold hover:bg-pink-600 transform hover:scale-105 transition-all duration-300">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick Contact Section -->
    <section class="py-16 bg-gradient-to-r from-pink-500 to-rose-500">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center text-white">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">
                    Need Immediate Assistance?
                </h2>
                <p class="text-xl mb-8 opacity-90">
                    Our customer service team is available 24/7 for urgent bookings and inquiries.
                </p>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="text-center">
                        <div class="bg-white bg-opacity-20 rounded-full p-4 w-16 h-16 mx-auto mb-4 flex items-center justify-center">
                            <i class="fas fa-clock text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-2">24/7 Available</h3>
                        <p class="opacity-90">Round the clock service for your convenience</p>
                    </div>
                    
                    <div class="text-center">
                        <div class="bg-white bg-opacity-20 rounded-full p-4 w-16 h-16 mx-auto mb-4 flex items-center justify-center">
                            <i class="fas fa-bolt text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-2">Quick Response</h3>
                        <p class="opacity-90">Fast response within 15 minutes</p>
                    </div>
                    
                    <div class="text-center">
                        <div class="bg-white bg-opacity-20 rounded-full p-4 w-16 h-16 mx-auto mb-4 flex items-center justify-center">
                            <i class="fas fa-shield-alt text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-2">100% Discreet</h3>
                        <p class="opacity-90">Complete confidentiality guaranteed</p>
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row gap-4 justify-center mt-8">
                    <a href="tel:+919867564994" class="bg-white text-pink-600 px-8 py-4 rounded-xl font-bold text-lg hover:bg-gray-100 transform hover:scale-105 transition-all duration-300 flex items-center justify-center gap-2">
                        <i class="fas fa-phone"></i> Call Now
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=919867564994" class="bg-green-500 text-white px-8 py-4 rounded-xl font-bold text-lg hover:bg-green-600 transform hover:scale-105 transition-all duration-300 flex items-center justify-center gap-2">
                        <i class="fab fa-whatsapp"></i> WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
