@extends('layouts.main')
    @section('page-css')
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
@endsection

@section('content')
    

    <button class="theme-toggle" id="themeToggle"></button>

    <div class="main-container">
        <!-- Hero -->
        <section class="hero-section">
            <div class="floating-shapes">
                <div class="shape shape-1"></div>
                <div class="shape shape-2"></div>
                <div class="shape shape-3"></div>
            </div>
            <div class="hero-content">
                <div class="main-logo"><i class="fas fa-blog"></i></div>
                <h1 class="logo-text">InspireBlog</h1>
                <p class="tagline">Welcome back to your creative space</p>
                <ul class="features-list">
                    <li><div class="feature-icon"><i class="fas fa-rocket"></i></div> Continue where you left off</li>
                    <li><div class="feature-icon"><i class="fas fa-chart-bar"></i></div> Check your analytics</li>
                    <li><div class="feature-icon"><i class="fas fa-comments"></i></div> Engage with readers</li>
                </ul>
            </div>
        </section>

        <!-- Login Form -->
        <section class="auth-section">
            <div class="auth-card">
                <div class="text-center mb-4">
                    <h1 class="auth-title fw-bold" style="font-size:2.4rem;">Welcome Back</h1>
                    <p class="text-muted">Sign in to continue your journey</p>
                </div>

                <form method="POST" action="{{route('auth.login')}}">
                    @csrf
                    <div class="form-group floating-label">
                        <i class="fas fa-envelope input-icon"></i>
                        <input type="email" class="form-control" id="email" name="email" placeholder=" " required>
                        <label for="email">Email Address</label>
                    </div>

                    <!-- Password -->
                    <div class="form-group floating-label">
                        <i class="fas fa-lock input-icon"></i>
                        <input type="password" class="form-control" id="password" name="password" placeholder=" " required>
                        <label for="password">Password</label>
                        <button type="button" class="password-toggle" onclick="togglePass('password')">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>

                    <!-- Remember & Forgot -->
                    <div class="form-options">
                        <div class="remember-me" onclick="toggleRemember()">
                            <div class="custom-checkbox" id="checkbox"></div>
                            <span>Remember me</span>
                        </div>
                        <a href="#" style="color:var(--primary); text-decoration:none; font-size:0.95rem;">Forgot password?</a>
                    </div>

                    <button type="submit" class="auth-btn">
                        <i class="fas fa-sign-in-alt"></i> Sign In
                    </button>
                </form>

                <!-- Social Login -->
                <div class="text-center mt-4">
                    <p class="text-muted">Or sign in with</p>
                    <div class="d-flex justify-content-center gap-3 mt-3">
                        <button type="button" class="social-btn google"><i class="fab fa-google"></i></button>
                        <button type="button" class="social-btn github"><i class="fab fa-github"></i></button>
                        <button type="button" class="social-btn twitter"><i class="fab fa-twitter"></i></button>
                        <button type="button" class="social-btn facebook"><i class="fab fa-facebook-f"></i></button>
                    </div>
                </div>

                <div class="text-center mt-4">
                    <p>Don't have an account? <a href="{{route('signup')}}" style="color:var(--primary); font-weight:600">Create Account</a></p>
                </div>
            </div>
        </section>
    </div>

    <script>
        // Theme Toggle
        const toggle = document.getElementById('themeToggle');
        if (localStorage.getItem('theme') === 'dark' || (!localStorage.getItem('theme') && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.body.classList.add('theme-dark');
        }
        toggle.addEventListener('click', () => {
            document.body.classList.toggle('theme-dark');
            localStorage.setItem('theme', document.body.classList.contains('theme-dark') ? 'dark' : 'light');
        });

        // Password Toggle
        function togglePass(id) {
            const input = document.getElementById(id);
            const icon = input.parentElement.querySelector('.password-toggle i');
            if (input.type === 'password') {
                input.type = 'text';
                icon.classList.replace('fa-eye', 'fa-eye-slash');
            } else {
                input.type = 'password';
                icon.classList.replace('fa-eye-slash', 'fa-eye');
            }
        }

        // Remember Me Toggle
        function toggleRemember() {
            document.getElementById('checkbox').classList.toggle('checked');
        }
    </script>


@endsection