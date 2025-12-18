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
        
        <form action="categories-index.html" method="POST" onsubmit="alert('Category updated successfully! (This is dummy data)'); return false;">
            @csrf
            @method('PUT')
            
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="name" class="form-label">Category Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="Technology" required>
                </div>
                
                <div class="col-md-6 mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="Tech Updates" required>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="icon" class="form-label">Icon (Font Awesome class)</label>
                    <input type="text" class="form-control" id="icon" name="icon" value="fas fa-blog" placeholder="fas fa-tag">
                    <small class="form-text text-muted">Enter Font Awesome icon class (e.g., fas fa-tag, fas fa-blog)</small>
                </div>
                
                <div class="col-md-6 mb-3">
                    <label for="icon_preview" class="form-label">Icon Preview</label>
                    <div id="icon_preview" style="font-size: 2rem; color: var(--primary);">
                        <i class="fas fa-blog"></i>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="4" required>Latest technology news and updates</textarea>
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

<script>
document.getElementById('icon').addEventListener('input', function() {
    const iconClass = this.value || 'fas fa-tag';
    document.getElementById('icon_preview').innerHTML = `<i class="${iconClass}"></i>`;
});
</script>

@endsection