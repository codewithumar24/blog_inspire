@extends('layouts.main')
@section('page-css')

<link rel="stylesheet" href="{{asset('css/contact.css')}}">
    
@endsection
 
@section('content')
    

    <!-- Page Header -->
    <section class="page-header">
        <div class="container text-center">
            <h1 class="page-title">Get In Touch</h1>
            <p class="page-subtitle">Have questions, feedback, or collaboration ideas? We'd love to hear from you. Reach out and let's start a conversation.</p>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="container">
            <div class="row">
                <!-- Contact Form -->
                <div class="col-lg-7 mb-4 mb-lg-0">
                    <div class="contact-form">
                        <h2 class="mb-4">Send Us a Message</h2>
                        <form id="contactForm" action="" method="">
                           
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="fullName" class="form-label">Full Name *</label>
                                        <input type="text" class="form-control" id="fullName" name="name" required>
                                        <div class="error-message" id="nameError">Please enter your full name</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email" class="form-label">Email Address *</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                        <div class="error-message" id="emailError">Please enter a valid email address</div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="subject" class="form-label">Subject *</label>
                                <input type="text" class="form-control" id="subject" name="subject" required>
                                <div class="error-message" id="subjectError">Please enter a subject</div>
                            </div>

                            <div class="form-group">
                                <label for="message" class="form-label">Your Message *</label>
                                <textarea class="form-control" id="message" name="message" placeholder="Type your message here..." rows="5" required></textarea>
                                <div class="error-message" id="messageError">Please enter your message</div>
                            </div>

                            <div class="success-message" id="successMessage">
                                <i class="fas fa-check-circle me-2"></i> Thank you! Your message has been sent successfully.
                            </div>

                            <button type="submit" class="btn btn-primary w-100 py-3" id="submitBtn">
                                <i class="fas fa-paper-plane me-2"></i> Send Message
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Contact Information -->
                <div class="col-lg-5">
                    <div class="contact-info">
                        <div class="info-card">
                            <div class="info-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <h3 class="info-title">Visit Our Office</h3>
                            <p class="info-text">
                                123 Inspiration Street<br>
                                San Francisco, CA 94107<br>
                                United States
                            </p>
                        </div>

                        <div class="info-card">
                            <div class="info-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <h3 class="info-title">Call Us</h3>
                            <p class="info-text">
                                <strong>General Inquiries:</strong> +1 (555) 123-4567<br>
                                <strong>Support:</strong> +1 (555) 987-6543<br>
                                <strong>Business:</strong> +1 (555) 456-7890
                            </p>
                            <p class="info-text mt-2">
                                <small>Mon-Fri: 9:00 AM - 6:00 PM PST</small>
                            </p>
                        </div>

                        <div class="info-card">
                            <div class="info-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <h3 class="info-title">Email Us</h3>
                            <p class="info-text">
                                <strong>General:</strong> contact@inspireblog.com<br>
                                <strong>Support:</strong> support@inspireblog.com<br>
                                <strong>Editorial:</strong> editorial@inspireblog.com<br>
                                <strong>Advertising:</strong> ads@inspireblog.com
                            </p>
                        </div>

                        <div class="info-card">
                            <div class="info-icon">
                                <i class="fas fa-share-alt"></i>
                            </div>
                            <h3 class="info-title">Follow Us</h3>
                            <p class="info-text mb-3">Stay connected and get the latest updates:</p>
                            <div class="social-links">
                                <a href="#" class="social-link" title="Facebook">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="social-link" title="Twitter">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" class="social-link" title="Instagram">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="#" class="social-link" title="LinkedIn">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="#" class="social-link" title="YouTube">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section">
        <div class="container">
            <div class="section-header">
                <h2>Find Our Location</h2>
                <p class="text-muted">Visit our headquarters or connect with our global team</p>
            </div>

            <div class="map-container">
                <!-- Google Maps Embed -->
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.6821940587325!2d-122.41941648468247!3d37.77492977975942!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085808c9d3b3b3d%3A0x1c3a3b3b3b3b3b3b!2sSan%20Francisco%2C%20CA!5e0!3m2!1sen!2sus!4v1617145156146!5m2!1sen!2sus" 
                    width="100%" 
                    height="400" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy">
                </iframe>
            </div>

            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="text-center p-3">
                        <i class="fas fa-clock fa-2x text-primary mb-3"></i>
                        <h5>Business Hours</h5>
                        <p class="text-muted mb-0">Mon-Fri: 9:00 AM - 6:00 PM PST</p>
                        <p class="text-muted">Weekends: By Appointment</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center p-3">
                        <i class="fas fa-car fa-2x text-primary mb-3"></i>
                        <h5>Parking</h5>
                        <p class="text-muted mb-0">Street parking available</p>
                        <p class="text-muted">Nearby parking garage: 123 Garage St</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center p-3">
                        <i class="fas fa-subway fa-2x text-primary mb-3"></i>
                        <h5>Public Transport</h5>
                        <p class="text-muted mb-0">BART: Montgomery Station</p>
                        <p class="text-muted">Muni: Lines 5, 30, 45</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header">
                <h2>Frequently Asked Questions</h2>
                <p class="text-muted">Find quick answers to common questions</p>
            </div>

            <div class="accordion" id="faqAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                            How long does it take to get a response?
                        </button>
                    </h2>
                    <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            We strive to respond to all inquiries within 24-48 hours during business days. For urgent matters, please call our support line for immediate assistance.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                            Can I write for InspireBlog?
                        </button>
                    </h2>
                    <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Absolutely! We're always looking for talented writers. Please send your portfolio and writing samples to editorial@inspireblog.com. Include your areas of expertise and why you'd like to write for us.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                            Do you offer advertising opportunities?
                        </button>
                    </h2>
                    <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Yes, we offer various advertising options including sponsored content, banner ads, and newsletter sponsorships. Contact our advertising team at ads@inspireblog.com for our media kit and rates.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                            How can I suggest article topics?
                        </button>
                    </h2>
                    <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            We welcome topic suggestions from our readers! Email your ideas to editorial@inspireblog.com with "Topic Suggestion" in the subject line. Please include why you think this topic would be valuable to our community.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                            Do you have a newsletter I can subscribe to?
                        </button>
                    </h2>
                    <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Yes! We have a weekly newsletter that features our best articles, exclusive content, and curated reading recommendations. You can subscribe via the form on our homepage or by emailing subscribe@inspireblog.com.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Banner -->
    <section class="cta-banner">
        <div class="container">
            <div class="section-header white">
                <h2>Ready to Collaborate?</h2>
                <p>Whether you have a project in mind or just want to chat about ideas, we're here to listen.</p>
            </div>

            <div class="mt-4">
                <a href="#contactForm" class="btn btn-light btn-lg rounded-pill px-5 py-3 me-3">
                    <i class="fas fa-envelope me-2"></i> Send a Message
                </a>
                <a href="tel:+15551234567" class="btn btn-outline-light btn-lg rounded-pill px-5 py-3">
                    <i class="fas fa-phone me-2"></i> Call Us Now
                </a>
            </div>

            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="text-center p-3">
                        <div class="fs-4 fw-bold">24/7</div>
                        <div>Email Support</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center p-3">
                        <div class="fs-4 fw-bold">24h</div>
                        <div>Response Time</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center p-3">
                        <div class="fs-4 fw-bold">100%</div>
                        <div>Client Satisfaction</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Simple JavaScript for form validation -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Add active class to current page in navbar
            const currentPage = window.location.pathname;
            const navLinks = document.querySelectorAll('.nav-link');
            
            navLinks.forEach(link => {
                const linkHref = link.getAttribute('href');
                if (currentPage === linkHref) {
                    link.classList.add('active');
                } else {
                    link.classList.remove('active');
                }
            });
            
            // Form Validation and Submission
            const contactForm = document.getElementById('contactForm');
            const submitBtn = document.getElementById('submitBtn');
            const successMessage = document.getElementById('successMessage');

            // Form validation function
            function validateForm() {
                let isValid = true;
                
                // Reset error states
                document.querySelectorAll('.form-control').forEach(input => {
                    input.classList.remove('error');
                });
                document.querySelectorAll('.error-message').forEach(error => {
                    error.style.display = 'none';
                });
                
                // Validate name
                const nameInput = document.getElementById('fullName');
                const nameError = document.getElementById('nameError');
                if (!nameInput.value.trim()) {
                    nameInput.classList.add('error');
                    nameError.style.display = 'block';
                    isValid = false;
                }
                
                // Validate email
                const emailInput = document.getElementById('email');
                const emailError = document.getElementById('emailError');
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailInput.value.trim() || !emailRegex.test(emailInput.value)) {
                    emailInput.classList.add('error');
                    emailError.style.display = 'block';
                    isValid = false;
                }
                
                // Validate subject
                const subjectInput = document.getElementById('subject');
                const subjectError = document.getElementById('subjectError');
                if (!subjectInput.value.trim()) {
                    subjectInput.classList.add('error');
                    subjectError.style.display = 'block';
                    isValid = false;
                }
                
                // Validate message
                const messageInput = document.getElementById('message');
                const messageError = document.getElementById('messageError');
                if (!messageInput.value.trim()) {
                    messageInput.classList.add('error');
                    messageError.style.display = 'block';
                    isValid = false;
                }
                
                return isValid;
            }

            // Form submission handler
            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                if (!validateForm()) {
                    return;
                }
                
                // Show loading state
                const originalText = submitBtn.innerHTML;
                submitBtn.innerHTML = 'Sending...';
                submitBtn.disabled = true;
                
                // Simulate API call (in real implementation, this would be an actual form submission)
                setTimeout(() => {
                    // Reset button state
                    submitBtn.innerHTML = originalText;
                    submitBtn.disabled = false;
                    
                    // Show success message
                    successMessage.style.display = 'block';
                    contactForm.reset();
                    
                    // Hide success message after 5 seconds
                    setTimeout(() => {
                        successMessage.style.display = 'none';
                    }, 5000);
                    
                    // Scroll to success message
                    successMessage.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                }, 1500);
            });

            // Real-time validation on input
            document.querySelectorAll('.form-control').forEach(input => {
                input.addEventListener('input', function() {
                    this.classList.remove('error');
                    const errorId = this.id + 'Error';
                    const errorElement = document.getElementById(errorId);
                    if (errorElement) {
                        errorElement.style.display = 'none';
                    }
                });
            });

            // Smooth scroll for CTA buttons
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    const href = this.getAttribute('href');
                    
                    if (href !== '#' && href.startsWith('#')) {
                        e.preventDefault();
                        const targetId = href.substring(1);
                        const targetElement = document.getElementById(targetId);
                        
                        if (targetElement) {
                            window.scrollTo({
                                top: targetElement.offsetTop - 100,
                                behavior: 'smooth'
                            });
                        }
                    }
                });
            });
        });
    </script>
@endsection