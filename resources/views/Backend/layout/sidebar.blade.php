<aside id="sidebar" 
       class="w-72 bg-white border-r border-gray-200 h-full flex flex-col 
              fixed lg:relative inset-y-0 left-0 z-50 lg:z-auto
              -translate-x-full lg:translate-x-0 transition-all duration-300">

    <!-- Logo -->
    <div class="p-6 border-b">
        <div class="flex items-center gap-3">
            <h1 class="text-3xl font-extrabold text-[#003366]">TK<span class="text-[#CC0000]">&</span>D</h1>
        </div>
        <p class="text-xs text-gray-500 mt-1">Admin Panel</p>
    </div>

    <nav class="flex-1 overflow-y-auto py-6 px-5">
        <ul class="space-y-1">

            <!-- Dashboard -->
            <li>
                <a href="{{ route('admin.dashboard') }}"
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
                <a href="{{ route('admin.products.index') }}"
                    class="flex items-center gap-3 px-5 py-3.5 rounded-2xl hover:bg-gray-100 transition 
                   {{ request()->routeIs('admin.products.*') ? 'bg-blue-50 text-blue-700 font-medium' : 'text-gray-700' }}">
                    <i class="fas fa-boxes w-5"></i>
                    <span>Products</span>
                </a>
            </li>

            <!-- Team Members -->
            <li>
                <a href="{{ route('admin.team-members.index') }}"
                    class="flex items-center gap-3 px-5 py-3.5 rounded-2xl hover:bg-gray-100 transition 
                   {{ request()->routeIs('admin.team-members.*') ? 'bg-blue-50 text-blue-700 font-medium' : 'text-gray-700' }}">
                    <i class="fas fa-users w-5"></i>
                    <span>Team Members</span>
                </a>
            </li>

            <!-- Certificates -->
            <li>
                <a href="{{ route('admin.certificates.index') }}"
                    class="flex items-center gap-3 px-5 py-3.5 rounded-2xl hover:bg-gray-100 transition 
                   {{ request()->routeIs('admin.certificates.*') ? 'bg-blue-50 text-blue-700 font-medium' : 'text-gray-700' }}">
                    <i class="fas fa-award w-5"></i>
                    <span>Certificates</span>
                </a>
            </li>

            <li class="mt-8">
                <div class="px-5 text-xs font-semibold uppercase tracking-widest text-gray-400 mb-3">Content</div>
            </li>

            <!-- Activities -->
            <li>
                <a href="{{ route('admin.activities.index') }}"
                    class="flex items-center gap-3 px-5 py-3.5 rounded-2xl hover:bg-gray-100 transition 
                   {{ request()->routeIs('admin.activities.*') ? 'bg-blue-50 text-blue-700 font-medium' : 'text-gray-700' }}">
                    <i class="fas fa-industry w-5"></i>
                    <span>Activities</span>
                </a>
            </li>

            <!-- Blog -->
            <li>
                <a href="{{ route('admin.blogs.index') }}"
                    class="flex items-center gap-3 px-5 py-3.5 rounded-2xl hover:bg-gray-100 transition 
                   {{ request()->routeIs('admin.blogs.*') ? 'bg-blue-50 text-blue-700 font-medium' : 'text-gray-700' }}">
                    <i class="fas fa-blog w-5"></i>
                    <span>Blog Posts</span>
                </a>
            </li>

            <!-- FAQs -->
            <li>
                <a href="{{ route('admin.faqs.index') }}"
                    class="flex items-center gap-3 px-5 py-3.5 rounded-2xl hover:bg-gray-100 transition 
                   {{ request()->routeIs('admin.faqs.*') ? 'bg-blue-50 text-blue-700 font-medium' : 'text-gray-700' }}">
                    <i class="fas fa-question-circle w-5"></i>
                    <span>FAQs</span>
                </a>
            </li>

            <li class="mt-8">
                <div class="px-5 text-xs font-semibold uppercase tracking-widest text-gray-400 mb-3">Customer</div>
            </li>

            <!-- Contacts -->
            <li>
                <a href="{{ route('admin.contacts.index') }}"
                    class="flex items-center gap-3 px-5 py-3.5 rounded-2xl hover:bg-gray-100 transition 
                   {{ request()->routeIs('admin.contacts.*') ? 'bg-blue-50 text-blue-700 font-medium' : 'text-gray-700' }}">
                    <i class="fas fa-envelope w-5"></i>
                    <span>Contacts</span>
                </a>
            </li>

        </ul>
    </nav>

    <!-- Logout -->
    <div class="p-5 border-t mt-auto">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit"
                class="flex items-center gap-3 w-full px-5 py-3 text-red-600 hover:bg-red-50 rounded-2xl transition">
                <i class="fas fa-sign-out-alt w-5"></i>
                <span class="font-medium">Logout</span>
            </button>
        </form>
    </div>
</aside>