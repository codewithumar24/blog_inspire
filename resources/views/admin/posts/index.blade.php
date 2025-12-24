@extends("layouts.dashboard")

@section("dashboard_content")

<div class="main-content">
    <div class="header">
        <h1>Posts Management</h1>

         @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div style="display:flex; align-items:center; gap:1rem;">
            <a href="{{route('post.create')}}" class="btn btn-primary">
                <i class="fas fa-plus"></i> Add New Post
            </a>
        </div>
    </div>

    <div class="card">
        <h2><i class="fas fa-blog"></i> Posts List</h2>
        <div class="table-responsive">
            <table class="table" style="width: 100%; border-collapse: separate; border-spacing: 0 10px;">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Created</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($posts as $post)
                       <tr style="background: rgba(255,255,255,0.5); border-radius: 12px;">
                        <td>1</td>
                        <td>
                            <img src="{{asset('storage/'.$post->image)}}" 
                                 alt="Post Image" style="width: 50px; height: 50px; border-radius: 8px; object-fit: cover;">
                        </td>
                        <td>{{$post->title}}</td>
                        <td><span class="badge" style="background: var(--gradient-primary);">{{$post->category->name}}</span></td>
                       
                       
                        <td>{{$post->created_at}}</td>
                        <td>
                            <div class="d-flex gap-2">
                                <a href="posts-show.html" class="btn btn-sm" 
                                   style="background: var(--gradient-success); color: white; border: none;">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="posts-edit.html" class="btn btn-sm" 
                                   style="background: var(--gradient-warning); color: white; border: none;">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <button class="btn btn-sm" 
                                        style="background: var(--gradient-danger); color: white; border: none;"
                                        onclick="return confirm('Are you sure you want to delete this post?')">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr> 
                  @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection