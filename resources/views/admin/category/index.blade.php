@extends("layouts.dashboard")

@section("dashboard_content")

<div class="main-content">
    <div class="header">
        <h1>Categories Management</h1>
        <div style="display:flex; align-items:center; gap:1rem;">
            <a href="{{route('category.create')}}" class="btn btn-primary">
                <i class="fas fa-plus"></i> Add New Category
            </a>
        </div>
    </div>

    <div class="card">
        <h2><i class="fas fa-list"></i> Categories List</h2>

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

        @if($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div class="table-responsive">
            <table class="table" style="width: 100%; border-collapse: separate; border-spacing: 0 10px;">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Icon</th>
                        <th>Name</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                 
                   @foreach ($categories as $category)
                          <tr style="background: rgba(255,255,255,0.5); border-radius: 12px;">
                        <td>{{$category->id}}</td>
                        <td><img width="40px" src="{{ asset('storage/' . $category->icon) }}" style="font-size: 1.5rem; color: var(--primary);"></td>
                        <td>{{$category->name}}</td>
                        <td>{{$category->title}}</td>
                        <td>{{$category->description}}</td>
                        <td>
                            <div class="d-flex gap-2">
                                <a href="{{route('category.show', $category->id)}}" class="btn btn-sm" 
                                   style="background: var(--gradient-success); color: white; border: none;">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{route('category.edit',$category)}}" class="btn btn-sm" 
                                   style="background: var(--gradient-warning); color: white; border: none;">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <button class="btn btn-sm" 
                                        style="background: var(--gradient-danger); color: white; border: none;"
                                       >
                                         <a href="{{route('category.delete',$category->id)}}"><i class="fas fa-trash"></i></a>
                                    
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