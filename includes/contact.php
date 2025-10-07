<section id="contact" class="section contact">
    <div class="container">
        <h2 class="section-title">Get in Touch</h2>
        <p class="section-subtitle">Contact us today to book your premium companion experience. We're available 24/7 for your convenience.</p>
        
        <div class="contact-grid">
            <div class="contact-info">
                <h3 style="color: var(--primary-pink); margin-bottom: 20px;">Contact Information</h3>
                
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <div>
                            <strong>Phone:</strong><br>
                            +91 9867564994
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <strong>Email:</strong><br>
                            sanjanadotsingh@gmail.com
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <i class="fas fa-clock"></i>
                        <div>
                            <strong>Availability:</strong><br>
                            24/7 - Always available
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <strong>Service Areas:</strong><br>
                            Mumbai and surrounding areas
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <i class="fas fa-whatsapp"></i>
                        <div>
                            <strong>WhatsApp:</strong><br>
                            +91 9867564994
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <i class="fas fa-building"></i>
                        <div>
                            <strong>Office:</strong><br>
                            Shop no 14, A1 Vidyadani CHS, Om Nagar Circle, Kanti Nagar, J B Nagar, Andheri East
                        </div>
                    </div>                <div style="margin-top: 30px; padding: 20px; background: var(--light-pink); border-radius: 10px;">
                    <h4 style="color: var(--dark-pink); margin-bottom: 10px;">
                        <i class="fas fa-info-circle"></i> Important Notice
                    </h4>
                    <p style="color: var(--text-dark); font-size: 0.9rem;">
                        All services are for adults 18+ only. We maintain strict confidentiality and professional standards.
                    </p>
                </div>
            </div>
            
            <div class="contact-form">
                <h3 style="color: var(--primary-pink); margin-bottom: 20px;">Send us a Message</h3>
                
                <form action="contact_handler.php" method="POST">
                    <div class="form-group">
                        <label for="name">Full Name *</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email Address *</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone">
                    </div>
                    
                    <div class="form-group">
                        <label for="location">Preferred Location</label>
                        <select id="location" name="location" style="width: 100%; padding: 12px; border: 2px solid #ddd; border-radius: 8px;">
                            <option value="">Select a location</option>
                            <option value="mumbai-central">Mumbai Central</option>
                            <option value="andheri">Andheri</option>
                            <option value="bandra">Bandra</option>
                            <option value="powai">Powai</option>
                            <option value="juhu">Juhu</option>
                            <option value="navi-mumbai">Navi Mumbai</option>
                            <option value="thane">Thane</option>
                            <option value="other">Other Mumbai Area</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="service">Service Type</label>
                        <select id="service" name="service" style="width: 100%; padding: 12px; border: 2px solid #ddd; border-radius: 8px;">
                            <option value="">Select a service</option>
                            <option value="vip-escorts">VIP Escorts</option>
                            <option value="girlfriend-experience">Girlfriend Experience</option>
                            <option value="mature-companions">Mature Companions</option>
                            <option value="travel-companions">Travel Companions</option>
                            <option value="young-companions">Young Companions</option>
                            <option value="independent-escorts">Independent Escorts</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Message *</label>
                        <textarea id="message" name="message" placeholder="Please provide details about your requirements, preferred date/time, and any special requests..." required></textarea>
                    </div>
                    
                    <button type="submit" class="submit-btn">
                        <i class="fas fa-paper-plane"></i> Send Message
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
