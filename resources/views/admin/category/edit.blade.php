@extends("layouts.dashboard")

@section("dashboard_content")

<div class="main-content">
    <div class="header">
        <h1>Edit Category</h1>
        <div style="display:flex; align-items:center; gap:1rem;">
            <a href="categories-index.html" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Back to List
            </a>
        </div>
    </div>

    <div class="card">
        <h2><i class="fas fa-edit"></i> Update Category Information</h2>
        
        <form action="{{route('category.update',$category->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
           
            
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="name" class="form-label">Category Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{$category->name}}" required>
                </div>
                
                <div class="col-md-6 mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{$category->title}}" required>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="icon" class="form-label">Icon (Font Awesome class)</label>
                    <input type="file" class="form-control" id="icon" name="icon" value="fas fa-blog" placeholder="fas fa-tag">
                    <small class="form-text text-muted">Enter Font Awesome icon class (e.g., fas fa-tag, fas fa-blog)</small>
                </div>
                
                <div class="col-md-6 mb-3">
                    <label for="icon_preview" class="form-label">Icon Preview</label>
                    <div id="icon_preview" style="font-size: 2rem; color: var(--primary);">
                       <img width="50px" src="{{asset('storage/'. $category->icon)}}" alt="">
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="4" required>{{$category->description}}</textarea>
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> Update Category
                </button>
                <a href="categories-index.html" class="btn btn-secondary">
                    <i class="fas fa-times"></i> Cancel
                </a>
            </div>
        </form>
    </div>
</div>



@endsection