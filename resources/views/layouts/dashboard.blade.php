<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | InspireBlog</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
   <link rel="stylesheet" href="{{asset('css/admin_dashboard.css')}}">
</head>
<body>

    <button class="theme-toggle" id="themeToggle"></button>

    <div class="dashboard">
        <!-- Sidebar -->
        @include("partials.admin_sidebar")

       @yield("dashboard_content")
    </div>

    <script src="{{asset('js/admin_main.js')}}"></script>
</body>
</html>