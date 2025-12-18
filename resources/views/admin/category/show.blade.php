@extends("layouts.dashboard")

@section("dashboard_content")

<div class="main-content">
    <div class="header">
        <h1>Category Details</h1>
        <div style="display:flex; align-items:center; gap:1rem;">
            <a href="categories-index.html" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Back to List
            </a>
        </div>
    </div>

    <div class="card">
        <h2><i class="fas fa-info-circle"></i> Category Information</h2>
        
        <div class="row">
            <div class="col-md-6">
                <div class="mb-4">
                    <h5 style="color: var(--primary);">ID</h5>
                    <p class="fs-5">{{$category->id}}</p>
                </div>
                
                <div class="mb-4">
                    <h5 style="color: var(--primary);">Name</h5>
                    <p class="fs-5">{{$category->name}}</p>
                </div>
                
                <div class="mb-4">
                    <h5 style="color: var(--primary);">Title</h5>
                    <p class="fs-5">{{$category->title}}</p>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="mb-4">
                    <h5 style="color: var(--primary);">Icon</h5>
                    <div class="fs-1" style="color: var(--primary);">
                        <img width="70px" src="{{asset('storage/'.$category->icon)}}" alt="">
                    </div>
                </div>
                
                <div class="mb-4">
                    <h5 style="color: var(--primary);">Created At</h5>
                    <p class="fs-5">{{$category->created_at->format('d,M,Y, h: i,A')}}</p>
                </div>
                
                <div class="mb-4">
                    <h5 style="color: var(--primary);">Updated At</h5>
                    <p class="fs-5">{{$category->updated_at->format('d,Y,M')}}</p>
                </div>
            </div>
        </div>
        
        <div class="mb-4">
            <h5 style="color: var(--primary);">Description</h5>
            <p class="fs-5">{{$category->description}}</p>
        </div>

        <div class="d-flex gap-2 mt-4">
            <a href="categories-edit.html" class="btn btn-warning">
                <i class="fas fa-edit"></i> Edit
            </a>
            <button class="btn btn-danger"
                    onclick="return confirm('Are you sure you want to delete this category?')">
                <i class="fas fa-trash"></i> Delete
            </button>
        </div>
    </div>
</div>

@endsection