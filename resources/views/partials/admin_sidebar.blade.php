<div class="sidebar">
            <div class="logo"><a  href="{{route('index')}}">InspireBlog</a></div>
            <ul>
                <li class="active"><i class="fas fa-home"></i> <span>Dashboard</span></li>
                <li><i class="fas fa-blog"></i> <span><a href="{{route('category.index')}}">category</a></span></li>
                <li> <a href="{{route('post.index')}}"><i class="fas fa-blog"></i> <span>Posts</span></a></li>
                <li><i class="fas fa-users"></i> <span>Users</span></li>
                <li><i class="fas fa-comments"></i> <span>Comments</span></li>
                <li><i class="fas fa-chart-bar"></i> <span>Analytics</span></li>
                <li><i class="fas fa-cog"></i> <span>Settings</span></li>
                <form action="{{route('logout')}}" method="post">
                    @csrf
                    <li><i class="fas fa-sign-out-alt"></i> <button type="submit">Logout</button></li>
                </form>
            </ul>
        </div>