 <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="">InspireBlog</a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('blog')}}">Blogs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('category')}}">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('about')}}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contact')}}">Contact</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{route('dashboard')}}">dashboard</a>
                    </li>
                    <li class="nav-item ms-2">
                        <a href="{{route('login')}}" class="btn btn-outline-primary rounded-pill px-4">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>