@extends("layouts.main")


@section("content")
     <section class="hero-section" id="home">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 mx-auto text-center">
                        <h1 class="hero-tagline">Ideas That Inspire.</h1>
                        <p class="lead mb-4">Discover thought-provoking articles, tutorials, and insights across technology, business, lifestyle, and more. Join our community of curious minds.</p>
                        
                        <div class="search-container">
                            <form action="" method="">
                                <div class="input-group">
                                    <input type="text" class="form-control search-input" name="search" placeholder="Search for articles, tutorials, insights...">
                                    <button class="btn btn-light rounded-pill px-4 ms-2" type="submit">
                                        <i class="fas fa-search"></i> Search
                                    </button>
                                </div>
                            </form>
                        </div>
                        
                        <div class="mt-4">
                            <a href="#featured" class="btn btn-light rounded-pill px-5 py-3 me-3">Explore Blogs</a>
                            <a href="#newsletter" class="btn btn-outline-light rounded-pill px-5 py-3">Subscribe</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Featured Posts -->
        <section class="py-5" id="featured">
            <div class="container">
                <div class="section-header">
                    <h2>Featured Posts</h2>
                    <p class="text-muted">Handpicked articles to inspire your day</p>
                </div>
                
                <div class="row">
                    <!-- Featured Post 1 -->
                    <div class="col-lg-4">
                        <div class="blog-card h-100">
                            <img src="/animation.jpeg" class="card-img-top" alt="The Future of Artificial Intelligence">
                            <div class="card-body">
                                <div class="category-badge">Technology</div>
                                <h5 class="card-title">The Future of Artificial Intelligence in Everyday Life</h5>
                                <p class="card-text text-muted">Exploring how AI is transforming our daily routines and what to expect in the coming years.</p>
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <small class="text-muted">May 15, 2023</small>
                                    <a href="" class="btn btn-outline-primary btn-sm rounded-pill">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Featured Post 2 -->
                    <div class="col-lg-4">
                        <div class="blog-card h-100">
                            <img src="{{asset('images/animation.jpeg')}}" class="card-img-top" alt="Sustainable Business">
                            <div class="card-body">
                                <div class="category-badge">Business</div>
                                <h5 class="card-title">Building a Sustainable Business in 2023</h5>
                                <p class="card-text text-muted">Key strategies for creating a business that not only profits but also contributes positively to society.</p>
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <small class="text-muted">May 10, 2023</small>
                                    <a href="" class="btn btn-outline-primary btn-sm rounded-pill">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Featured Post 3 -->
                    <div class="col-lg-4">
                        <div class="blog-card h-100">
                            <img src="brand identify.jpeg" class="card-img-top" alt="Mindfulness Techniques">
                            <div class="card-body">
                                <div class="category-badge">Lifestyle</div>
                                <h5 class="card-title">Mindfulness Techniques for a Productive Workday</h5>
                                <p class="card-text text-muted">Practical mindfulness exercises that can help improve focus and reduce stress at work.</p>
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <small class="text-muted">May 5, 2023</small>
                                    <a href="" class="btn btn-outline-primary btn-sm rounded-pill">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Latest Blogs -->
        <section class="py-5 bg-light">
            <div class="container">
                <div class="section-header">
                    <h2>Latest Blogs</h2>
                    <p class="text-muted">Fresh content published daily</p>
                </div>
                
                <div class="row g-4">
                    <!-- Blog 1 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="blog-card h-100">
                            <img src="/business consulting.jpeg" class="card-img-top" alt="Web Development Trends">
                            <div class="card-body">
                                <div class="category-badge">Technology</div>
                                <h5 class="card-title">Web Development Trends to Watch in 2023</h5>
                                <p class="card-text text-muted">A comprehensive look at the most impactful web development trends.</p>
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <small class="text-muted">5 min read</small>
                                    <a href="" class="btn btn-outline-primary btn-sm rounded-pill">Read</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Blog 2 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="blog-card h-100">
                            <img src="/data analytic.jpeg" class="card-img-top" alt="Remote Work Culture">
                            <div class="card-body">
                                <div class="category-badge">Business</div>
                                <h5 class="card-title">The Rise of Remote Work Culture</h5>
                                <p class="card-text text-muted">How remote work is reshaping company cultures and employment.</p>
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <small class="text-muted">7 min read</small>
                                    <a href="" class="btn btn-outline-primary btn-sm rounded-pill">Read</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Blog 3 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="blog-card h-100">
                            <img src="/digital marketing.jpeg" class="card-img-top" alt="Nutrition Hacks">
                            <div class="card-body">
                                <div class="category-badge">Health</div>
                                <h5 class="card-title">Nutrition Hacks for Busy Professionals</h5>
                                <p class="card-text text-muted">Simple nutrition strategies for maintaining energy and focus.</p>
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <small class="text-muted">4 min read</small>
                                    <a href="" class="btn btn-outline-primary btn-sm rounded-pill">Read</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Blog 4 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="blog-card h-100">
                            <img src="/download (6).jpeg" class="card-img-top" alt="Smartphone Photography">
                            <div class="card-body">
                                <div class="category-badge">Creative</div>
                                <h5 class="card-title">Creative Photography with Smartphone Cameras</h5>
                                <p class="card-text text-muted">Unlocking the full potential of your smartphone camera.</p>
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <small class="text-muted">6 min read</small>
                                    <a href="" class="btn btn-outline-primary btn-sm rounded-pill">Read</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="text-center mt-5">
                    <a href="" class="btn btn-primary rounded-pill px-5 py-3">View All Blogs <i class="fas fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </section>

        <!-- Popular Categories -->
        <section class="py-5">
            <div class="container">
                <div class="section-header">
                    <h2>Popular Categories</h2>
                    <p class="text-muted">Explore content by topics</p>
                </div>
                
                <div class="row g-4">
                    <!-- Category 1 -->
                    <div class="col-md-4 col-lg-2">
                        <div class="blog-card text-center p-4 h-100">
                            <div class="mb-3">
                                <i class="fas fa-laptop-code fs-1" style="color: var(--primary);"></i>
                            </div>
                            <h5>Technology</h5>
                            <p class="text-muted mb-0">42 posts</p>
                            <a href="" class="stretched-link"></a>
                        </div>
                    </div>
                    
                    <!-- Category 2 -->
                    <div class="col-md-4 col-lg-2">
                        <div class="blog-card text-center p-4 h-100">
                            <div class="mb-3">
                                <i class="fas fa-chart-line fs-1" style="color: var(--primary);"></i>
                            </div>
                            <h5>Business</h5>
                            <p class="text-muted mb-0">28 posts</p>
                            <a href="" class="stretched-link"></a>
                        </div>
                    </div>
                    
                    <!-- Category 3 -->
                    <div class="col-md-4 col-lg-2">
                        <div class="blog-card text-center p-4 h-100">
                            <div class="mb-3">
                                <i class="fas fa-heart fs-1" style="color: var(--primary);"></i>
                            </div>
                            <h5>Lifestyle</h5>
                            <p class="text-muted mb-0">35 posts</p>
                            <a href="" class="stretched-link"></a>
                        </div>
                    </div>
                    
                    <!-- Category 4 -->
                    <div class="col-md-4 col-lg-2">
                        <div class="blog-card text-center p-4 h-100">
                            <div class="mb-3">
                                <i class="fas fa-spa fs-1" style="color: var(--primary);"></i>
                            </div>
                            <h5>Health & Wellness</h5>
                            <p class="text-muted mb-0">19 posts</p>
                            <a href="" class="stretched-link"></a>
                        </div>
                    </div>
                    
                    <!-- Category 5 -->
                    <div class="col-md-4 col-lg-2">
                        <div class="blog-card text-center p-4 h-100">
                            <div class="mb-3">
                                <i class="fas fa-palette fs-1" style="color: var(--primary);"></i>
                            </div>
                            <h5>Creative Arts</h5>
                            <p class="text-muted mb-0">23 posts</p>
                            <a href="" class="stretched-link"></a>
                        </div>
                    </div>
                    
                    <!-- Category 6 -->
                    <div class="col-md-4 col-lg-2">
                        <div class="blog-card text-center p-4 h-100">
                            <div class="mb-3">
                                <i class="fas fa-flask fs-1" style="color: var(--primary);"></i>
                            </div>
                            <h5>Science</h5>
                            <p class="text-muted mb-0">16 posts</p>
                            <a href="" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Newsletter -->
        <section class="py-5 bg-light" id="newsletter">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h2 class="mb-3">Stay Inspired</h2>
                        <p class="mb-4">Subscribe to our newsletter and get the latest posts delivered directly to your inbox. No spam, just inspiration.</p>
                        <div class="d-flex">
                            <div class="me-3">
                                <i class="fas fa-check-circle text-success fs-4"></i>
                            </div>
                            <div>
                                <h5>Weekly Digest</h5>
                                <p class="text-muted">Curated selection of the best articles</p>
                            </div>
                        </div>
                        <div class="d-flex mt-3">
                            <div class="me-3">
                                <i class="fas fa-check-circle text-success fs-4"></i>
                            </div>
                            <div>
                                <h5>Exclusive Content</h5>
                                <p class="text-muted">Access to subscriber-only posts</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-6">
                        <div class="card blog-card">
                            <div class="card-body p-4">
                                <h4 class="mb-4">Join Our Community</h4>
                                <form action="" method="">
                                  
                                    <div class="mb-3">
                                        <input type="email" name="email" class="form-control" placeholder="Your email address" required>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" id="newsletterCheck" required>
                                        <label class="form-check-label" for="newsletterCheck">
                                            I agree to receive newsletter and updates
                                        </label>
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100 rounded-pill py-3">Subscribe Now</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



@endsection