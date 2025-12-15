
        // Theme Toggle with localStorage
        const toggle = document.getElementById('themeToggle');
        if (localStorage.getItem('theme') === 'dark') {
            document.body.classList.add('theme-dark');
        }
        toggle.addEventListener('click', () => {
            document.body.classList.toggle('theme-dark');
            localStorage.setItem('theme', document.body.classList.contains('theme-dark') ? 'dark' : 'light');
        });

        // Animation on scroll (optional enhancement)
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = 1;
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, { threshold: 0.1 });

        document.querySelectorAll('.stat-card, .card, .post-card').forEach(el => {
            el.style.opacity = 0;
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'all 0.8s ease-out';
            observer.observe(el);
        });