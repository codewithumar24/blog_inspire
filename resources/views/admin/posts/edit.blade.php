@extends("layouts.dashboard")

@section("dashboard_content")

<div class="main-content">
    <div class="header">
        <h1>Edit Post</h1>
        <div style="display:flex; align-items:center; gap:1rem;">
            <a href="posts-index.html" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Back to List
            </a>
        </div>
    </div>

    <div class="card">
        <h2><i class="fas fa-edit"></i> Update Post Information</h2>

        <form action="posts-index.html" method="POST"
            onsubmit="alert('Post updated successfully! (This is dummy data)'); return false;"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="title" class="form-label">Post Title</label>
                    <input type="text" class="form-control" id="title" name="title"
                        value="How to Start a Successful Blog in 2025" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="category" class="form-label">Category</label>
                    <select class="form-control" id="category" name="category" required>
                        <option value="">Select Category</option>
                        <option value="1" selected>Technology</option>
                        <option value="2">Design</option>
                        <option value="3">Education</option>
                        <option value="4">Lifestyle</option>
                        <option value="5">SEO</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="author" class="form-label">Author</label>
                    <input type="text" class="form-control" id="author" name="author" value="Ahmed Khan" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select class="form-control" id="status" name="status" required>
                        <option value="published" selected>Published</option>
                        <option value="draft">Draft</option>
                        <option value="pending">Pending</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="image" class="form-label">Featured Image</label>
                    <input type="file" class="form-control" id="image" name="image" accept="image/*">
                    <small class="form-text text-muted">Upload a new image to replace current one</small>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="image_preview" class="form-label">Current Image</label>
                    <div id="image_preview"
                        style="max-width: 200px; max-height: 150px; border: 2px solid var(--primary); border-radius: 8px; padding: 10px; text-align: center;">
                        <img src="https://via.placeholder.com/200x150/4361ee/ffffff?text=Tech+Blog"
                            style="max-width: 100%; max-height: 130px; border-radius: 4px;">
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Short Description</label>
                <textarea class="form-control" id="description" name="description" rows="3"
                    required>Learn the essential steps to launch a successful blog in 2025 with our comprehensive guide.</textarea>
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Post Content</label>
                <textarea class="form-control" id="content" name="content" rows="10" required>Starting a blog in 2025 requires careful planning and execution. This comprehensive guide will walk you through the essential steps to create a successful blog that attracts readers and generates income.

## Choose Your Niche
Select a topic you're passionate about and that has potential audience interest.

## Set Up Your Platform
Choose the right blogging platform and hosting solution for your needs.

## Create Quality Content
Focus on creating valuable, engaging content that resonates with your target audience.

## Promote Your Blog
Use social media, SEO, and other marketing strategies to grow your readership.</textarea>
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> Update Post
                </button>
                <a href="posts-index.html" class="btn btn-secondary">
                    <i class="fas fa-times"></i> Cancel
                </a>
            </div>
        </form>
    </div>
</div>

<script>
    document.getElementById('image').addEventListener('change', function (event) {
        const file = event.target.files[0];
        const preview = document.getElementById('image_preview');

        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                preview.innerHTML = `<img src="${e.target.result}" style="max-width: 100%; max-height: 130px; border-radius: 4px;">`;
            }
            reader.readAsDataURL(file);
        } else {
            preview.innerHTML = `<img src="https://via.placeholder.com/200x150/4361ee/ffffff?text=Tech+Blog" 
                                   style="max-width: 100%; max-height: 130px; border-radius: 4px;">`;
        }
    });
</script>

@endsection