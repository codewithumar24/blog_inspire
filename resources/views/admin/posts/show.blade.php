@extends("layouts.dashboard")

@section("dashboard_content")

<div class="main-content">
    <div class="header">
        <h1>Post Details</h1>
        <div style="display:flex; align-items:center; gap:1rem;">
            <a href="posts-index.html" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Back to List
            </a>
        </div>
    </div>

    <div class="card">
        <h2><i class="fas fa-info-circle"></i> Post Information</h2>
        
        <div class="row mb-4">
            <div class="col-md-12 text-center">
                <img src="https://via.placeholder.com/600x300/4361ee/ffffff?text=Tech+Blog+Header" 
                     alt="Post Image" style="width: 100%; max-height: 300px; object-fit: cover; border-radius: 12px;">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="mb-4">
                    <h5 style="color: var(--primary);">ID</h5>
                    <p class="fs-5">1</p>
                </div>
                
                <div class="mb-4">
                    <h5 style="color: var(--primary);">Title</h5>
                    <p class="fs-5">How to Start a Successful Blog in 2025</p>
                </div>
                
                <div class="mb-4">
                    <h5 style="color: var(--primary);">Category</h5>
                    <p class="fs-5"><span class="badge" style="background: var(--gradient-primary);">Technology</span></p>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="mb-4">
                    <h5 style="color: var(--primary);">Author</h5>
                    <p class="fs-5">Ahmed Khan</p>
                </div>
                
                <div class="mb-4">
                    <h5 style="color: var(--primary);">Status</h5>
                    <p class="fs-5"><span class="badge bg-success">Published</span></p>
                </div>
                
                <div class="mb-4">
                    <h5 style="color: var(--primary);">Created At</h5>
                    <p class="fs-5">Dec 17, 2025 10:30 AM</p>
                </div>
            </div>
        </div>
        
        <div class="mb-4">
            <h5 style="color: var(--primary);">Short Description</h5>
            <p class="fs-5">Learn the essential steps to launch a successful blog in 2025 with our comprehensive guide.</p>
        </div>

        <div class="mb-4">
            <h5 style="color: var(--primary);">Content</h5>
            <div class="fs-5" style="line-height: 1.8;">
                <p>Starting a blog in 2025 requires careful planning and execution. This comprehensive guide will walk you through the essential steps to create a successful blog that attracts readers and generates income.</p>
                
                <h6 style="color: var(--primary); margin-top: 20px;">Choose Your Niche</h6>
                <p>Select a topic you're passionate about and that has potential audience interest. Research your target market and identify gaps you can fill with your content.</p>
                
                <h6 style="color: var(--primary); margin-top: 20px;">Set Up Your Platform</h6>
                <p>Choose the right blogging platform and hosting solution for your needs. Consider factors like ease of use, customization options, and scalability.</p>
                
                <h6 style="color: var(--primary); margin-top: 20px;">Create Quality Content</h6>
                <p>Focus on creating valuable, engaging content that resonates with your target audience. Consistency is key to building a loyal readership.</p>
                
                <h6 style="color: var(--primary); margin-top: 20px;">Promote Your Blog</h6>
                <p>Use social media, SEO, and other marketing strategies to grow your readership and increase your blog's visibility.</p>
            </div>
        </div>

        <div class="d-flex gap-2 mt-4">
            <a href="posts-edit.html" class="btn btn-warning">
                <i class="fas fa-edit"></i> Edit
            </a>
            <button class="btn btn-danger"
                    onclick="return confirm('Are you sure you want to delete this post?')">
                <i class="fas fa-trash"></i> Delete
            </button>
        </div>
    </div>
</div>

@endsection