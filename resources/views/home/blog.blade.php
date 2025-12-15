@extends("layouts.main")


@section("page-css")
    <link rel="stylesheet" href="{{asset('css/blog.css')}}">
@endsection

@section("content")
    

    <!-- Theme Toggle -->
    <button class="theme-toggle" id="themeToggle"></button>

    <!-- Page Header -->
    <section class="page-header" data-aos="fade-down">
        <div class="container">
            <h1 class="page-title">All Blogs</h1>
            <p class="page-subtitle">Discover thought-provoking articles across technology, business, lifestyle, and more. Filter by category or search for specific topics.</p>
        </div>
    </section>

    <!-- Filter Section -->
    <section class="filter-section" data-aos="fade-up">
        <div class="container">
            <div class="row g-3">
                <!-- Search Bar -->
                <div class="col-md-6">
                    <div class="input-group search-box">
                        <input type="text" class="form-control" placeholder="Search blogs...">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search"></i> Search
                        </button>
                    </div>
                </div>

                <!-- Category Filter -->
                <div class="col-md-3">
                    <select class="form-select">
                        <option value="">All Categories</option>
                        <option value="technology">Technology</option>
                        <option value="business">Business</option>
                        <option value="lifestyle">Lifestyle</option>
                        <option value="health">Health & Wellness</option>
                        <option value="creative">Creative Arts</option>
                        <option value="science">Science</option>
                    </select>
                </div>

                <!-- Sort By -->
                <div class="col-md-3">
                    <select class="form-select">
                        <option value="newest">Newest First</option>
                        <option value="oldest">Oldest First</option>
                        <option value="popular">Most Popular</option>
                    </select>
                </div>
            </div>
        </div>
    </section>

    <!-- Blogs Section -->
    <section class="blogs-section">
        <div class="container">
            <!-- Results Count -->
            <div class="results-count" data-aos="fade-up">
                Showing <strong>6</strong> of <strong>86</strong> blogs
            </div>

            <!-- Blogs Grid -->
            <div class="row g-4">
                <!-- Blog 1 -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up">
                    <div class="blog-card">
                        <div class="card-img-container">
                            <img src="./images/animation.jpeg" class="card-img-top" alt="Future of AI">
                            <span class="category-badge">Technology</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">The Future of Artificial Intelligence in Everyday Life</h5>
                            <p class="card-text">Exploring how AI is transforming our daily routines and what to expect in the coming years with revolutionary changes in technology.</p>
                            
                            <div class="blog-stats">
                                <div class="stat-item">
                                    <i class="far fa-clock"></i>
                                    <span>5 min read</span>
                                </div>
                                <div class="stat-item">
                                    <i class="far fa-eye"></i>
                                    <span>1,245 views</span>
                                </div>
                                <div class="stat-item">
                                    <i class="far fa-calendar"></i>
                                    <span>May 15, 2023</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="author-info">
                                <div class="author-avatar">AJ</div>
                                <div class="author-name">Alex Johnson</div>
                            </div>
                            <a href="blog-detail.html" class="read-more-btn">
                                Read More <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Blog 2 -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="blog-card">
                        <div class="card-img-container">
                            <img src="./images/brand identify.jpeg" class="card-img-top" alt="Sustainable Business">
                            <span class="category-badge">Business</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Building a Sustainable Business in 2023</h5>
                            <p class="card-text">Key strategies for creating a business that not only profits but also contributes positively to society and environment.</p>
                            
                            <div class="blog-stats">
                                <div class="stat-item">
                                    <i class="far fa-clock"></i>
                                    <span>7 min read</span>
                                </div>
                                <div class="stat-item">
                                    <i class="far fa-eye"></i>
                                    <span>892 views</span>
                                </div>
                                <div class="stat-item">
                                    <i class="far fa-calendar"></i>
                                    <span>May 10, 2023</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="author-info">
                                <div class="author-avatar">SW</div>
                                <div class="author-name">Sarah Williams</div>
                            </div>
                            <a href="blog-detail.html" class="read-more-btn">
                                Read More <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Blog 3 -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="blog-card">
                        <div class="card-img-container">
                            <img src="./images/data analytic.jpeg" class="card-img-top" alt="Mindfulness Techniques">
                            <span class="category-badge">Lifestyle</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Mindfulness Techniques for a Productive Workday</h5>
                            <p class="card-text">Practical mindfulness exercises that can help improve focus, reduce stress at work, and enhance overall productivity.</p>
                            
                            <div class="blog-stats">
                                <div class="stat-item">
                                    <i class="far fa-clock"></i>
                                    <span>4 min read</span>
                                </div>
                                <div class="stat-item">
                                    <i class="far fa-eye"></i>
                                    <span>1,567 views</span>
                                </div>
                                <div class="stat-item">
                                    <i class="far fa-calendar"></i>
                                    <span>May 5, 2023</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="author-info">
                                <div class="author-avatar">MC</div>
                                <div class="author-name">Michael Chen</div>
                            </div>
                            <a href="blog-detail.html" class="read-more-btn">
                                Read More <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Blog 4 -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="blog-card">
                        <div class="card-img-container">
                            <img src="./images/e-commerce.png" class="card-img-top" alt="Web Development Trends">
                            <span class="category-badge">Technology</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Web Development Trends to Watch in 2023</h5>
                            <p class="card-text">A comprehensive look at the most impactful web development trends shaping the digital landscape this year.</p>
                            
                            <div class="blog-stats">
                                <div class="stat-item">
                                    <i class="far fa-clock"></i>
                                    <span>6 min read</span>
                                </div>
                                <div class="stat-item">
                                    <i class="far fa-eye"></i>
                                    <span>2,310 views</span>
                                </div>
                                <div class="stat-item">
                                    <i class="far fa-calendar"></i>
                                    <span>May 20, 2023</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="author-info">
                                <div class="author-avatar">DL</div>
                                <div class="author-name">David Lee</div>
                            </div>
                            <a href="blog-detail.html" class="read-more-btn">
                                Read More <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Blog 5 -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="blog-card">
                        <div class="card-img-container">
                            <img src="./images/ghrafic design.jpeg" class="card-img-top" alt="Remote Work Culture">
                            <span class="category-badge">Business</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">The Rise of Remote Work Culture</h5>
                            <p class="card-text">How remote work is reshaping company cultures and what it means for the future of employment and work-life balance.</p>
                            
                            <div class="blog-stats">
                                <div class="stat-item">
                                    <i class="far fa-clock"></i>
                                    <span>8 min read</span>
                                </div>
                                <div class="stat-item">
                                    <i class="far fa-eye"></i>
                                    <span>1,876 views</span>
                                </div>
                                <div class="stat-item">
                                    <i class="far fa-calendar"></i>
                                    <span>May 18, 2023</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="author-info">
                                <div class="author-avatar">ER</div>
                                <div class="author-name">Emma Rodriguez</div>
                            </div>
                            <a href="blog-detail.html" class="read-more-btn">
                                Read More <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Blog 6 -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="blog-card">
                        <div class="card-img-container">
                            <img src="./images/virtual assistant.jpeg" class="card-img-top" alt="Nutrition Hacks">
                            <span class="category-badge">Health</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Nutrition Hacks for Busy Professionals</h5>
                            <p class="card-text">Simple yet effective nutrition strategies for maintaining energy and focus throughout a demanding workday.</p>
                            
                            <div class="blog-stats">
                                <div class="stat-item">
                                    <i class="far fa-clock"></i>
                                    <span>5 min read</span>
                                </div>
                                <div class="stat-item">
                                    <i class="far fa-eye"></i>
                                    <span>1,342 views</span>
                                </div>
                                <div class="stat-item">
                                    <i class="far fa-calendar"></i>
                                    <span>May 12, 2023</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="author-info">
                                <div class="author-avatar">LP</div>
                                <div class="author-name">Dr. Lisa Park</div>
                            </div>
                            <a href="blog-detail.html" class="read-more-btn">
                                Read More <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <div class="pagination-section" data-aos="fade-up">
                <nav aria-label="Blog pagination">
                    <ul class="pagination custom-pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" aria-label="Previous">
                                <i class="fas fa-chevron-left"></i>
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>

    <!-- JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <script>
        // Initialize AOS for animations
        AOS.init({
            duration: 1000,
            once: false,
            mirror: true
        });

        // Theme Toggle
        const themeToggle = document.getElementById('themeToggle');
        const body = document.body;
        
        // Check for saved theme or prefer-color-scheme
        const prefersDarkScheme = window.matchMedia('(prefers-color-scheme: dark)');
        const currentTheme = localStorage.getItem('theme');
        
        if (currentTheme === 'dark' || (!currentTheme && prefersDarkScheme.matches)) {
            body.classList.add('theme-dark');
        }
        
        themeToggle.addEventListener('click', function() {
            body.classList.toggle('theme-dark');
            this.style.animation = 'pulse 0.5s ease';
            
            let theme = 'light';
            if (body.classList.contains('theme-dark')) {
                theme = 'dark';
            }
            
            localStorage.setItem('theme', theme);
            
            setTimeout(() => {
                this.style.animation = '';
            }, 500);
        });

        // Active navigation
        document.addEventListener('DOMContentLoaded', function() {
            const currentPage = window.location.pathname.split('/').pop() || 'index.html';
            const navLinks = document.querySelectorAll('.nav-link');
            
            navLinks.forEach(link => {
                const linkHref = link.getAttribute('href');
                if (currentPage === linkHref) {
                    link.classList.add('active');
                } else {
                    link.classList.remove('active');
                }
            });
        });

        // Filter functionality
        document.querySelectorAll('.form-select').forEach(select => {
            select.addEventListener('change', function() {
                // Simulate filter application
                const category = document.querySelector('select[name="category"]')?.value || '';
                const sort = document.querySelector('select[name="sort"]')?.value || 'newest';
                
                if (category || sort !== 'newest') {
                    // Show loading state
                    const resultsCount = document.querySelector('.results-count');
                    const originalText = resultsCount.innerHTML;
                    resultsCount.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Applying filters...';
                    
                    setTimeout(() => {
                        resultsCount.innerHTML = 'Showing <strong>6</strong> of <strong>86</strong> blogs (Filtered)';
                    }, 800);
                }
            });
        });

        // Search functionality
        document.querySelector('.search-box .btn').addEventListener('click', function() {
            const searchInput = document.querySelector('.search-box .form-control');
            if (searchInput.value.trim()) {
                // Show loading state
                const resultsCount = document.querySelector('.results-count');
                const originalText = resultsCount.innerHTML;
                resultsCount.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Searching...';
                
                setTimeout(() => {
                    resultsCount.innerHTML = 'Showing <strong>4</strong> of <strong>86</strong> blogs (Search results for "' + searchInput.value + '")';
                }, 800);
            }
        });

        // Add enter key support for search
        document.querySelector('.search-box .form-control').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                document.querySelector('.search-box .btn').click();
            }
        });

        // Add hover effect to blog cards
        document.querySelectorAll('.blog-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px) scale(1.02)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });

        // Pagination click handler
        document.querySelectorAll('.page-link').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const pageNum = this.textContent;
                
                if (!this.parentElement.classList.contains('disabled') && 
                    !this.parentElement.classList.contains('active')) {
                    
                    // Show loading state
                    const resultsCount = document.querySelector('.results-count');
                    const originalText = resultsCount.innerHTML;
                    resultsCount.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Loading page ' + pageNum + '...';
                    
                    // Update active page
                    document.querySelectorAll('.page-item').forEach(item => {
                        item.classList.remove('active');
                    });
                    this.parentElement.classList.add('active');
                    
                    setTimeout(() => {
                        resultsCount.innerHTML = 'Showing <strong>6</strong> of <strong>86</strong> blogs';
                    }, 800);
                }
            });
        });
    </script>
@endsection