@extends("layouts.dashboard")

@section("dashboard_content")

<div class="main-content">
    <div class="header">
        <h1>Create New Post</h1>
        <div style="display:flex; align-items:center; gap:1rem;">
            <a href="posts-index.html" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Back to List
            </a>
        </div>
    </div>

 @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <div class="card">
        <h2><i class="fas fa-plus-circle"></i> Post Information</h2>
        
        <form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data" >
            @csrf
            
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="title" class="form-label">Post Title</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>
                
                <div class="col-md-6 mb-3">
                    <label for="category" class="form-label">Category</label>
                    <select class="form-control" id="category" name="category_id" required>
                        <option value="">Select Category</option>
                       @foreach ($categories as $category)
                             <option value="{{$category->id}}">{{$category->name}}</option>
                       @endforeach
                    </select>
                </div>
            </div>

           

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="image" class="form-label">Featured Image</label>
                    <input type="file" class="form-control" id="image" name="image" accept="image/*">
                    <small class="form-text text-muted">Upload an image for your post (JPG, PNG, GIF)</small>
                </div>
                
                
            </div>

           
            <div class="mb-3">
                <label for="content" class="form-label">Post Content</label>
                <textarea class="form-control" id="content" name="description" rows="10" required></textarea>
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> Create Post
                </button>
                <a href="posts-index.html" class="btn btn-secondary">
                    <i class="fas fa-times"></i> Cancel
                </a>
            </div>
        </form>
    </div>
</div>

<!-- <script>
document.getElementById('image').addEventListener('change', function(event) {
    const file = event.target.files[0];
    const preview = document.getElementById('image_preview');
    
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            preview.innerHTML = `<img src="${e.target.result}" style="max-width: 100%; max-height: 130px; border-radius: 4px;">`;
        }
        reader.readAsDataURL(file);
    } else {
        preview.innerHTML = '<p style="color: #999; margin: 0;">No image selected</p>';
    }
});
</script> -->

@endsection