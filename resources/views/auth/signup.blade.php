@extends("layouts.main")


@section("page-css")
    <link rel="stylesheet" href="{{asset('css/signup.css')}}">
@endsection

@section("content")
    


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
                <p class="tagline">Share your thoughts, inspire the world</p>
                <ul class="features-list">
                    <li><div class="feature-icon"><i class="fas fa-pen-fancy"></i></div> Beautiful rich editor</li>
                    <li><div class="feature-icon"><i class="fas fa-users"></i></div> Join passionate writers</li>
                    <li><div class="feature-icon"><i class="fas fa-chart-line"></i></div> Track analytics</li>
                    <li><div class="feature-icon"><i class="fas fa-shield-alt"></i></div> Secure & private</li>
                </ul>
            </div>
        </section>

        <!-- Register Form -->
        <section class="auth-section">
            <div class="auth-card">
                <div class="text-center mb-4">
                    <h1 class="auth-title fw-bold" style="font-size:2.4rem;">Create Account</h1>
                    <p class="text-muted">Start your blogging journey with us</p>
                </div>

                <form method="POST" action="/register">
                    @csrf
                    <!-- First & Last Name -->
                    <div class="d-flex gap-3 mb-3">
                        <div class="form-group floating-label flex-fill">
                            <i class="fas fa-user input-icon"></i>
                            <input type="text" class="form-control" id="first_name" name="first_name" placeholder=" " required>
                            <label for="first_name">First Name</label>
                        </div>
                        <div class="form-group floating-label flex-fill">
                            <i class="fas fa-user input-icon"></i>
                            <input type="text" class="form-control" id="last_name" name="last_name" placeholder=" " required>
                            <label for="last_name">Last Name</label>
                        </div>
                    </div>

                    <!-- Username
                    <div class="form-group floating-label mb-3">
                        <i class="fas fa-at input-icon"></i>
                        <input type="text" class="form-control" id="username" name="username" placeholder=" " required>
                        <label for="username">Username</label>
                    </div> -->

                    <!-- Email -->
                    <div class="form-group floating-label mb-3">
                        <i class="fas fa-envelope input-icon"></i>
                        <input type="email" class="form-control" id="email" name="email" placeholder=" " required>
                        <label for="email">Email Address</label>
                    </div>

                    <!-- Passwords -->
                    <div class="d-flex gap-3 mb-3">
                        <div class="form-group floating-label flex-fill">
                            <i class="fas fa-lock input-icon"></i>
                            <input type="password" class="form-control" id="password" name="password" placeholder=" " required>
                            <label for="password">Password</label>
                            <button type="button" class="password-toggle" onclick="togglePass('password')"><i class="fas fa-eye"></i></button>
                        </div>
                        <div class="form-group floating-label flex-fill">
                            <i class="fas fa-lock input-icon"></i>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder=" " required>
                            <label for="password_confirmation">Confirm Password</label>
                            <button type="button" class="password-toggle" onclick="togglePass('password_confirmation')"><i class="fas fa-eye"></i></button>
                        </div>
                    </div>

                    <!-- Terms -->
                    <div class="form-check mb-4">
                        <input class="form-check-input" type="checkbox" id="terms" required>
                        <label class="form-check-label" for="terms">
                            I agree to the <a href="#" style="color:var(--primary)">Terms of Service</a> and <a href="#" style="color:var(--primary)">Privacy Policy</a>
                        </label>
                    </div>

                    <button type="submit" class="auth-btn">
                        <i class="fas fa-user-plus"></i> Create Account
                    </button>
                </form>

                <!-- Social Login -->
                <div class="text-center mt-4">
                    <p class="text-muted">Or sign up with</p>
                    <div class="d-flex justify-content-center gap-3 mt-3">
                        <button type="button" class="social-btn google"><i class="fab fa-google"></i></button>
                        <button type="button" class="social-btn github"><i class="fab fa-github"></i></button>
                        <button type="button" class="social-btn twitter"><i class="fab fa-twitter"></i></button>
                        <button type="button" class="social-btn facebook"><i class="fab fa-facebook-f"></i></button>
                    </div>
                </div>

                <div class="text-center mt-4">
                    <p>Already have an account? <a href="login.html" style="color:var(--primary); font-weight:600">Sign In</a></p>
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
            const btn = input.parentElement.querySelector('.password-toggle i');
            if (input.type === 'password') {
                input.type = 'text';
                btn.classList.replace('fa-eye', 'fa-eye-slash');
            } else {
                input.type = 'password';
                btn.classList.replace('fa-eye-slash', 'fa-eye');
            }
        }
    </script>
    @endsection
