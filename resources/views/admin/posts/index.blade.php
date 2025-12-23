@extends("layouts.dashboard")

@section("dashboard_content")

<div class="main-content">
    <div class="header">
        <h1>Posts Management</h1>
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
                        <th>Author</th>
                        <th>Status</th>
                        <th>Created</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="background: rgba(255,255,255,0.5); border-radius: 12px;">
                        <td>1</td>
                        <td>
                            <img src="https://via.placeholder.com/50x50/4361ee/ffffff?text=Tech" 
                                 alt="Post Image" style="width: 50px; height: 50px; border-radius: 8px; object-fit: cover;">
                        </td>
                        <td>How to Start a Successful Blog in 2025</td>
                        <td><span class="badge" style="background: var(--gradient-primary);">Technology</span></td>
                        <td>Ahmed Khan</td>
                        <td><span class="badge bg-success">Published</span></td>
                        <td>2 days ago</td>
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
                    <tr style="background: rgba(255,255,255,0.5); border-radius: 12px;">
                        <td>2</td>
                        <td>
                            <img src="https://via.placeholder.com/50x50/f8961e/ffffff?text=Design" 
                                 alt="Post Image" style="width: 50px; height: 50px; border-radius: 8px; object-fit: cover;">
                        </td>
                        <td>10 Writing Tools Every Blogger Needs</td>
                        <td><span class="badge" style="background: var(--gradient-warning);">Design</span></td>
                        <td>Sara Ali</td>
                        <td><span class="badge bg-success">Published</span></td>
                        <td>5 days ago</td>
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
                    <tr style="background: rgba(255,255,255,0.5); border-radius: 12px;">
                        <td>3</td>
                        <td>
                            <img src="https://via.placeholder.com/50x50/4cc9f0/ffffff?text=Life" 
                                 alt="Post Image" style="width: 50px; height: 50px; border-radius: 8px; object-fit: cover;">
                        </td>
                        <td>Why Consistency is Key in Blogging</td>
                        <td><span class="badge" style="background: var(--gradient-success);">Lifestyle</span></td>
                        <td>Usman Raza</td>
                        <td><span class="badge bg-warning">Draft</span></td>
                        <td>1 week ago</td>
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
                    <tr style="background: rgba(255,255,255,0.5); border-radius: 12px;">
                        <td>4</td>
                        <td>
                            <img src="https://via.placeholder.com/50x50/f72585/ffffff?text=SEO" 
                                 alt="Post Image" style="width: 50px; height: 50px; border-radius: 8px; object-fit: cover;">
                        </td>
                        <td>SEO Optimization Tips for 2025</td>
                        <td><span class="badge" style="background: var(--gradient-accent);">SEO</span></td>
                        <td>Fatima Noor</td>
                        <td><span class="badge bg-success">Published</span></td>
                        <td>2 weeks ago</td>
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
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection