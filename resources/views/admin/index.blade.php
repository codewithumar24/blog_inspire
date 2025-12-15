@extends("layouts.dashboard")

@section("dashboard_content")

 <!-- Main Content -->
        <div class="main-content">
            <div class="header">
                <h1>Admin Dashboard</h1>
                <div style="display:flex; align-items:center; gap:1rem;">
                    <span>Welcome back, <strong>Admin</strong></span>
                    <img src="./images/boy1.jpg" alt="Admin" style="width:50px;height:50px;border-radius:50%;border:4px solid var(--primary);">
                </div>
            </div>

            <!-- Stats Cards -->
            <div class="stats-grid">
                <div class="stat-card" style="animation-delay: 0.2s;">
                    <div class="icon" style="background:var(--gradient-primary);">P</div>
                    <h3>1,248</h3>
                    <p>Total Posts Published</p>
                </div>
                <div class="stat-card" style="animation-delay: 0.4s;">
                    <div class="icon" style="background:var(--gradient-success);">U</div>
                    <h3>8,420</h3>
                    <p>Active Users This Month</p>
                </div>
                <div class="stat-card" style="animation-delay: 0.6s;">
                    <div class="icon" style="background:var(--gradient-warning);">V</div>
                    <h3>124K</h3>
                    <p>Total Views All Time</p>
                </div>
                <div class="stat-card" style="animation-delay: 0.8s;">
                    <div class="icon" style="background:var(--gradient-danger);">C</div>
                    <h3>3,892</h3>
                    <p>Comments (42 Pending)</p>
                </div>
            </div>

            <!-- Users + Activity -->
            <div class="content-grid">
                <div class="card">
                    <h2>Recent Users</h2>
                    <table>
                        <thead>
                            <tr><th>User</th><th>Email</th><th>Joined</th><th>Status</th></tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img src="./images/boy2.jpg" class="avatar"> Ahmed Khan</td>
                                <td>ahmed@example.com</td>
                                <td>2 hours ago</td>
                                <td><span class="status active">Active</span></td>
                            </tr>
                            <tr>
                                <td><img src="./images/boy3.jpg" class="avatar"> Sara Ali</td>
                                <td>sara@gmail.com</td>
                                <td>5 hours ago</td>
                                <td><span class="status active">Active</span></td>
                            </tr>
                            <tr>
                                <td><img src="./images/boy4.jpg" class="avatar"> Usman Raza</td>
                                <td>usman@blog.com</td>
                                <td>1 day ago</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>
                            <tr>
                                <td><img src="./images/boy2.jpg" class="avatar"> Fatima Noor</td>
                                <td>fatima@yahoo.com</td>
                                <td>2 days ago</td>
                                <td><span class="status active">Active</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="card">
                    <h2>Recent Activity</h2>
                    <div class="activity-item">
                        <div class="activity-icon" style="background:var(--primary);">N</div>
                        <div><h4>Ahmed Khan joined</h4><p>2 hours ago</p></div>
                    </div>
                    <div class="activity-item">
                        <div class="activity-icon" style="background:#4cc9f0;">C</div>
                        <div><h4>New comment on "Blog Tips"</h4><p>by Sara Ali • 4 hours ago</p></div>
                    </div>
                    <div class="activity-item">
                        <div class="activity-icon" style="background:#f8961e;">P</div>
                        <div><h4>New post published</h4><p>"How to Grow Your Blog" • 1 day ago</p></div>
                    </div>
                </div>
            </div>

            <!-- Recent Posts -->
            <div class="card">
                <h2>Recent Posts</h2>
                <div class="posts-grid">
                    <div class="post-card" style="animation-delay: 1.6s;">
                        <img src="./images/business consulting.jpeg" alt="post">
                        <div class="post-content">
                            <h4>How to Start a Successful Blog in 2025</h4>
                            <div class="post-meta">
                                <span>Ahmed Khan</span>
                                <span>2 days ago • 1.2K views</span>
                            </div>
                        </div>
                    </div>
                    <div class="post-card" style="animation-delay: 1.8s;">
                        <img src="./images/e-commerce.png" alt="post">
                        <div class="post-content">
                            <h4>10 Writing Tools Every Blogger Needs</h4>
                            <div class="post-meta">
                                <span>Sara Ali</span>
                                <span>5 days ago • 892 views</span>
                            </div>
                        </div>
                    </div>
                    <div class="post-card" style="animation-delay: 2s;">
                        <img src="./images/ghrafic design.jpeg" alt="post">
                        <div class="post-content">
                            <h4>Why Consistency is Key in Blogging</h4>
                            <div class="post-meta">
                                <span>Usman Raza</span>
                                <span>1 week ago • 2.1K views</span>
                            </div>
                        </div>
                    </div>
                     <div class="post-card" style="animation-delay: 2s;">
                        <img src="./images/seo optomize.jpeg" alt="post">
                        <div class="post-content">
                            <h4>Why Consistency is Key in Blogging</h4>
                            <div class="post-meta">
                                <span>Usman Raza</span>
                                <span>1 week ago • 2.1K views</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
@endsection