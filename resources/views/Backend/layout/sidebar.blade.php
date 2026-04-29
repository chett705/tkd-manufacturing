<aside id="sidebar" class="w-72 bg-white border-r border-gray-200 h-full flex flex-col transition-all duration-300 lg:translate-x-0 -translate-x-full">

    <!-- Logo -->
    <div class="p-6 border-b">
        <div class="flex items-center gap-3">
            <div class="w-11 h-11 bg-gradient-to-br from-blue-600 to-indigo-600 rounded-2xl flex items-center justify-center text-white text-3xl font-bold shadow">
                TK 
            </div>
            <div>
                <h1 class="text-3xl font-bold tracking-tight text-gray-900">TK & D</h1>
                <p class="text-xs text-gray-500">Admin Panel</p>
            </div>
        </div>
    </div>

    <nav class="flex-1 overflow-y-auto py-6 px-5">
        <ul class="space-y-1">
            <!-- Dashboard -->
            <li>
                <a href="" 
                   class="flex items-center gap-3 px-5 py-3.5 rounded-2xl hover:bg-gray-100 transition 
                   {{ request()->routeIs('admin.dashboard') ? 'bg-blue-50 text-blue-700 font-medium' : 'text-gray-700' }}">
                    <i class="fas fa-home w-5"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="mt-8">
                <div class="px-5 text-xs font-semibold uppercase tracking-widest text-gray-400 mb-3">Management</div>
            </li>

            <!-- Products -->
            <li>
                <a href="" 
                   class="flex items-center gap-3 px-5 py-3.5 rounded-2xl hover:bg-gray-100 transition 
                   {{ request()->routeIs('admin.products.*') ? 'bg-blue-50 text-blue-700 font-medium' : 'text-gray-700' }}">
                    <i class="fas fa-box w-5"></i>
                    <span>Products</span>
                </a>
            </li>

            <!-- Team Members -->
            <li>
                <a href="" 
                   class="flex items-center gap-3 px-5 py-3.5 rounded-2xl hover:bg-gray-100 transition 
                   {{ request()->routeIs('admin.team-members.*') ? 'bg-blue-50 text-blue-700 font-medium' : 'text-gray-700' }}">
                    <i class="fas fa-users w-5"></i>
                    <span>Team Members</span>
                </a>
            </li>

            <!-- Certificates -->
            <li>
                <a href="" 
                   class="flex items-center gap-3 px-5 py-3.5 rounded-2xl hover:bg-gray-100 transition 
                   {{ request()->routeIs('admin.certificates.*') ? 'bg-blue-50 text-blue-700 font-medium' : 'text-gray-700' }}">
                    <i class="fas fa-certificate w-5"></i>
                    <span>Certificates</span>
                </a>
            </li>

            <li class="mt-8">
                <div class="px-5 text-xs font-semibold uppercase tracking-widest text-gray-400 mb-3">Business</div>
            </li>

            <!-- Galleries / Activities -->
            <li>
                <a href="" 
                   class="flex items-center gap-3 px-5 py-3.5 rounded-2xl hover:bg-gray-100 transition 
                   {{ request()->routeIs('admin.galleries.*') ? 'bg-blue-50 text-blue-700 font-medium' : 'text-gray-700' }}">
                    <i class="fas fa-industry w-5"></i>
                    <span>Production & Gallery</span>
                </a>
            </li>

            <!-- Blog -->
            <li>
                <a href="" 
                   class="flex items-center gap-3 px-5 py-3.5 rounded-2xl hover:bg-gray-100 transition 
                   {{ request()->routeIs('admin.blog-posts.*') ? 'bg-blue-50 text-blue-700 font-medium' : 'text-gray-700' }}">
                    <i class="fas fa-blog w-5"></i>
                    <span>Blog Posts</span>
                </a>
            </li>

            <!-- Banners -->
            <li>
                <a href="" 
                   class="flex items-center gap-3 px-5 py-3.5 rounded-2xl hover:bg-gray-100 transition 
                   {{ request()->routeIs('admin.banners.*') ? 'bg-blue-50 text-blue-700 font-medium' : 'text-gray-700' }}">
                    <i class="fas fa-image w-5"></i>
                    <span>Banners</span>
                </a>
            </li>
        </ul>
    </nav>

    <!-- Logout -->
    <div class="p-5 border-t mt-auto">
        <form method="POST" action="">
            @csrf
            <button type="submit" 
                    class="flex items-center gap-3 w-full px-5 py-3 text-red-600 hover:bg-red-50 rounded-2xl transition">
                <i class="fas fa-sign-out-alt"></i>
                <span class="font-medium">Logout</span>
            </button>
        </form>
    </div>
</aside>