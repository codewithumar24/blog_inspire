@extends("layouts.main")

@section("page-css")
    <link rel="stylesheet" href="{{asset('css/about.css')}}">
@endsection
   @section("content")
       
 

    <!-- Page Header -->
    <section class="page-header">
        <div class="container text-center">
            <h1 class="page-title">About InspireBlog</h1>
            <p class="page-subtitle">We're on a mission to inspire, educate, and connect curious minds through thought-provoking content across technology, business, lifestyle, and beyond.</p>
        </div>
    </section>

    <!-- Stats Counter -->
    <section class="py-5">
        <div class="container">
            <div class="stats-counter">
                <div class="stat-item">
                    <div class="stat-number">500+</div>
                    <div class="stat-label">Published Articles</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">50+</div>
                    <div class="stat-label">Expert Writers</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">100K+</div>
                    <div class="stat-label">Monthly Readers</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">12</div>
                    <div class="stat-label">Content Categories</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision -->
    <section class="about-hero py-5">
        <div class="container">
            <div class="section-header">
                <h2>Our Mission & Vision</h2>
                <p class="text-muted">Driving our commitment to quality content and community building</p>
            </div>

            <div class="mission-vision-grid">
                <div class="mission-card">
                    <div class="mission-icon">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3 class="mb-3">Our Mission</h3>
                    <p>To democratize knowledge by making high-quality, insightful content accessible to everyone. We believe that everyone deserves access to information that can transform their personal and professional lives.</p>
                    <p class="mt-3">Through carefully curated articles, expert insights, and practical guides, we aim to bridge the gap between complex topics and everyday understanding.</p>
                </div>

                <div class="vision-card">
                    <div class="vision-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3 class="mb-3">Our Vision</h3>
                    <p>To become the world's most trusted platform for lifelong learners and curious minds. We envision a future where knowledge flows freely, and inspiration is just a click away.</p>
                    <p class="mt-3">We're building a global community of thinkers, creators, and innovators who believe in the power of shared knowledge to create positive change.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Story -->
    <section class="our-story">
        <div class="container">
            <div class="section-header">
                <h2>Our Story</h2>
                <p class="text-muted">From humble beginnings to a thriving community of learners</p>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="story-content">
                        <h3 class="mb-4">Who We Are & Why We Exist</h3>
                        <p>InspireBlog was founded in 2018 by a group of passionate writers, technologists, and educators who believed that quality content should be accessible to everyone, not just experts.</p>
                        <p class="mt-3">What started as a small blog about technology trends has evolved into a comprehensive platform covering diverse topics from artificial intelligence to wellness practices.</p>
                        <p class="mt-3">Our team consists of industry professionals, academic researchers, and skilled communicators who are dedicated to breaking down complex topics into engaging, understandable content.</p>
                        <div class="mt-4">
                            <a href="#team" class="btn btn-primary rounded-pill px-4 py-2">Meet Our Team</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="story-timeline">
                        <div class="timeline-item">
                            <div class="timeline-year">2018</div>
                            <h4>Inception</h4>
                            <p>Founded as a tech blog with 3 writers and a vision to make complex topics accessible.</p>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-year">2019</div>
                            <h4>Expansion</h4>
                            <p>Expanded to include business and lifestyle categories, reaching 10,000 monthly readers.</p>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-year">2020</div>
                            <h4>Community Growth</h4>
                            <p>Launched community features and grew our writer network to 25 experts across fields.</p>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-year">2023</div>
                            <h4>Today</h4>
                            <p>Serving 100,000+ monthly readers with content across 12 major categories.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Topics Covered -->
    <section class="topics-covered">
        <div class="container">
            <div class="section-header">
                <h2>Topics We Cover</h2>
                <p class="text-muted">Comprehensive coverage across diverse domains of knowledge</p>
            </div>

            <div class="topics-grid">
                <div class="topic-item">
                    <div class="topic-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h4>Technology</h4>
                    <p class="text-muted">AI, Web Dev, Cybersecurity, Blockchain</p>
                </div>
                <div class="topic-item">
                    <div class="topic-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h4>Business</h4>
                    <p class="text-muted">Entrepreneurship, Marketing, Finance</p>
                </div>
                <div class="topic-item">
                    <div class="topic-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h4>Lifestyle</h4>
                    <p class="text-muted">Travel, Fashion, Productivity, Wellness</p>
                </div>
                <div class="topic-item">
                    <div class="topic-icon">
                        <i class="fas fa-spa"></i>
                    </div>
                    <h4>Health</h4>
                    <p class="text-muted">Nutrition, Fitness, Mental Health</p>
                </div>
                <div class="topic-item">
                    <div class="topic-icon">
                        <i class="fas fa-palette"></i>
                    </div>
                    <h4>Creative Arts</h4>
                    <p class="text-muted">Design, Photography, Writing, Music</p>
                </div>
                <div class="topic-item">
                    <div class="topic-icon">
                        <i class="fas fa-flask"></i>
                    </div>
                    <h4>Science</h4>
                    <p class="text-muted">Research, Discoveries, Innovations</p>
                </div>
                <div class="topic-item">
                    <div class="topic-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h4>Education</h4>
                    <p class="text-muted">Learning Methods, Skills Development</p>
                </div>
                <div class="topic-item">
                    <div class="topic-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h4>Sustainability</h4>
                    <p class="text-muted">Eco-friendly Living, Green Tech</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="values-section">
        <div class="container">
            <div class="section-header">
                <h2>Our Core Values</h2>
                <p class="text-muted">The principles that guide everything we do</p>
            </div>

            <div class="values-grid">
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-medal"></i>
                    </div>
                    <h4>Quality First</h4>
                    <p class="text-muted">We never compromise on content quality. Every article is thoroughly researched and carefully crafted.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h4>Community Focus</h4>
                    <p class="text-muted">Our readers are at the heart of everything we do. We build with and for our community.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h4>Innovation</h4>
                    <p class="text-muted">We constantly evolve our platform and content to stay ahead of trends and reader needs.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h4>Integrity</h4>
                    <p class="text-muted">We maintain transparency, cite sources properly, and uphold ethical standards in all our content.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Members -->
    <section class="team-section" id="team">
        <div class="container">
            <div class="section-header">
                <h2>Meet Our Team</h2>
                <p class="text-muted">The passionate individuals behind InspireBlog</p>
            </div>

            <div class="team-grid">
                <div class="team-card">
                    <img src="./images/writting and translate.jpeg" alt="Alex Johnson" class="team-img">
                    <div class="team-info">
                        <h3 class="team-name">Alex Johnson</h3>
                        <div class="team-role">Founder & Editor-in-Chief</div>
                        <p class="text-muted">Former tech journalist with 10+ years of experience. Passionate about making complex topics accessible.</p>
                        <div class="team-social">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                </div>

                <div class="team-card">
                    <img src="./images/web development.jpeg" alt="Sarah Williams" class="team-img">
                    <div class="team-info">
                        <h3 class="team-name">Sarah Williams</h3>
                        <div class="team-role">Content Director</div>
                        <p class="text-muted">PhD in Communications, specializes in content strategy and editorial excellence across diverse topics.</p>
                        <div class="team-social">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>

                <div class="team-card">
                    <img src="./images/virtual assistant.jpeg" alt="Michael Chen" class="team-img">
                    <div class="team-info">
                        <h3 class="team-name">Michael Chen</h3>
                        <div class="team-role">Lead Technology Writer</div>
                        <p class="text-muted">Software engineer turned writer. Breaks down complex tech concepts into practical, actionable insights.</p>
                        <div class="team-social">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5">
                <p class="text-muted">Plus 47+ expert contributors across various fields</p>
                <a href="" class="btn btn-outline-primary rounded-pill px-4 py-2 mt-2">Become a Contributor</a>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="section-header white">
                <h2>Join Our Community</h2>
                <p>Be part of a growing community of curious minds, lifelong learners, and passionate writers.</p>
            </div>

            <div class="mt-4">
                <a href="" class="btn btn-light btn-lg rounded-pill px-5 py-3">
                    <i class="fas fa-book-open me-2"></i> Start Reading Blogs
                </a>
                <a href="" class="btn btn-outline-light btn-lg rounded-pill px-5 py-3 ms-3">
                    <i class="fas fa-pen-fancy me-2"></i> Write for Us
                </a>
            </div>

            <div class="mt-5">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="d-flex flex-wrap justify-content-center gap-4">
                            <div class="text-center">
                                <div class="fs-4 fw-bold">500+</div>
                                <div>Articles Published</div>
                            </div>
                            <div class="text-center">
                                <div class="fs-4 fw-bold">100K+</div>
                                <div>Monthly Readers</div>
                            </div>
                            <div class="text-center">
                                <div class="fs-4 fw-bold">50+</div>
                                <div>Expert Contributors</div>
                            </div>
                            <div class="text-center">
                                <div class="fs-4 fw-bold">12</div>
                                <div>Content Categories</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Simple JavaScript for active navigation and smooth scrolling -->
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
            
            // Smooth scrolling for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    const href = this.getAttribute('href');
                    
                    if (href !== '#' && href.startsWith('#')) {
                        e.preventDefault();
                        const targetId = href.substring(1);
                        const targetElement = document.getElementById(targetId);
                        
                        if (targetElement) {
                            window.scrollTo({
                                top: targetElement.offsetTop - 80,
                                behavior: 'smooth'
                            });
                        }
                    }
                });
            });
        });
    </script>
  @endsection