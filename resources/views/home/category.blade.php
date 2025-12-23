@extends("layouts.main")

@section("page-css")
    <link rel="stylesheet" href="{{asset('css/category.css')}}">
@endsection
@section("content")
    


    <!-- Page Header -->
    <section class="page-header">
        <div class="container text-center">
            <h1 class="page-title">Explore Categories</h1>
            <p class="page-subtitle">Discover articles organized by topics. Browse through our categories to find content that matches your interests and expertise.</p>
        </div>
    </section>

    <!-- Category Search -->
    <section class="py-4">
        <div class="container">
            <div class="category-search">
                <div class="search-container">
                    <input type="text" class="search-input" id="categorySearch" placeholder="Search categories...">
                    <i class="fas fa-search search-icon"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Grid -->
    <section class="categories-grid">
        <div class="container">
            <div class="section-header">
                <h2>Browse All Categories</h2>
                <p class="text-muted">Explore our comprehensive collection of categories</p>
            </div>

            <div class="row g-4">
                <!-- Technology -->
@foreach ($category as $category)
                    <div class="col-md-6 col-lg-4">
                    <div class="category-card category-tech h-100">
                        <div class="category-icon">
                           <img width="40px" src="{{ asset('storage/' . $category->icon) }}">
                        </div>
                        <h3 class="category-name">{{$category->name}}</h3>
                        <div class="category-count">42 posts</div>
                        <p class="category-description">{{$category->description}}</p>
                        <div class="mb-3">
                            <strong>Popular:</strong> {{$category->title}}
                        </div>
                        <a href="" class="category-link">
                            View Articles <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
@endforeach
                
              
            </div>
        </div>
    </section>

    <!-- Category Stats -->
    <section class="category-stats">
        <div class="container">
            <div class="section-header">
                <h2>Category Statistics</h2>
                <p class="text-muted">Overview of our content distribution across categories</p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="stat-card h-100">
                        <div class="mb-3">
                            <i class="fas fa-folder fa-2x" style="color: var(--primary);"></i>
                        </div>
                        <div class="stat-number">12</div>
                        <div class="stat-label">Total Categories</div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="stat-card h-100">
                        <div class="mb-3">
                            <i class="fas fa-file-alt fa-2x" style="color: var(--accent);"></i>
                        </div>
                        <div class="stat-number">272</div>
                        <div class="stat-label">Total Articles</div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="stat-card h-100">
                        <div class="mb-3">
                            <i class="fas fa-chart-bar fa-2x" style="color: var(--success);"></i>
                        </div>
                        <div class="stat-number">23</div>
                        <div class="stat-label">Average Articles per Category</div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="stat-card h-100">
                        <div class="mb-3">
                            <i class="fas fa-fire fa-2x" style="color: var(--warning);"></i>
                        </div>
                        <div class="stat-number">Technology</div>
                        <div class="stat-label">Most Popular Category</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular Tags -->
    <section class="popular-tags">
        <div class="container">
            <div class="section-header">
                <h2>Popular Tags</h2>
                <p class="text-muted">Explore content through popular tags across all categories</p>
            </div>

            <div class="tag-cloud">
                <a href="" class="tag-item">
                    Artificial Intelligence
                    <span class="tag-count">24</span>
                </a>
                <a href="" class="tag-item">
                    Web Development
                    <span class="tag-count">32</span>
                </a>
                <a href="" class="tag-item">
                    Startups
                    <span class="tag-count">18</span>
                </a>
                <a href="" class="tag-item">
                    Mental Health
                    <span class="tag-count">22</span>
                </a>
                <a href="" class="tag-item">
                    Productivity
                    <span class="tag-count">28</span>
                </a>
                <a href="" class="tag-item">
                    Sustainability
                    <span class="tag-count">16</span>
                </a>
                <a href="" class="tag-item">
                    Digital Marketing
                    <span class="tag-count">21</span>
                </a>
                <a href="" class="tag-item">
                    Photography
                    <span class="tag-count">14</span>
                </a>
                <a href="" class="tag-item">
                    Healthy Living
                    <span class="tag-count">19</span>
                </a>
                <a href="" class="tag-item">
                    Finance Tips
                    <span class="tag-count">17</span>
                </a>
                <a href="" class="tag-item">
                    Travel Guides
                    <span class="tag-count">15</span>
                </a>
                <a href="" class="tag-item">
                    Creative Writing
                    <span class="tag-count">13</span>
                </a>
                <a href="" class="tag-item">
                    Technology Trends
                    <span class="tag-count">26</span>
                </a>
                <a href="" class="tag-item">
                    Business Growth
                    <span class="tag-count">20</span>
                </a>
                <a href="" class="tag-item">
                    Fitness
                    <span class="tag-count">18</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Featured Category -->
    <section class="featured-category">
        <div class="container text-center">
            <div class="section-header white">
                <div class="featured-icon">
                    <i class="fas fa-star"></i>
                </div>
                <h2>Featured Category</h2>
                <p>This month's most popular category with exclusive content</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card bg-transparent text-white border-light">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center gap-4 mb-4">
                                <div class="category-icon" style="background: white; color: var(--primary);">
                                    <i class="fas fa-laptop-code"></i>
                                </div>
                                <div class="text-start">
                                    <h3 class="featured-title">Technology</h3>
                                    <p class="mb-0">The most comprehensive tech content with 42 articles and counting</p>
                                </div>
                            </div>
                            <p class="mb-4">Stay updated with the latest trends in artificial intelligence, web development, cybersecurity, and emerging technologies. Our tech category features in-depth tutorials, expert analysis, and practical guides.</p>
                            <a href="" class="btn btn-light rounded-pill px-5 py-3">
                                Explore Technology <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

  

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Simple JavaScript for search functionality -->
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
            
            // Simple search functionality
            const categorySearch = document.getElementById('categorySearch');
            const categoryCards = document.querySelectorAll('.category-card');
            
            categorySearch.addEventListener('input', function() {
                const searchTerm = this.value.toLowerCase().trim();
                
                categoryCards.forEach(card => {
                    const categoryName = card.querySelector('.category-name').textContent.toLowerCase();
                    const categoryDesc = card.querySelector('.category-description').textContent.toLowerCase();
                    
                    if (categoryName.includes(searchTerm) || categoryDesc.includes(searchTerm)) {
                        card.parentElement.style.display = 'block';
                    } else {
                        card.parentElement.style.display = 'none';
                    }
                });
            });
        });
    </script>
@endsection