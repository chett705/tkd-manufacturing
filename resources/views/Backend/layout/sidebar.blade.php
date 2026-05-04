<aside id="sidebar"
    class="admin-sidebar w-72 h-full flex flex-col 
              fixed lg:relative inset-y-0 left-0 z-50 lg:z-auto
              -translate-x-full lg:translate-x-0 transition-all duration-300">

    <!-- Logo -->
    <div class="p-6 border-b border-white/10">
        <div class="flex items-center gap-3">
            <h1 class="text-3xl font-extrabold text-white">TK<span class="text-[#ED1C24]">&</span>D</h1>
        </div>
        <p class="mt-1 text-xs text-white/55">Admin Panel</p>
    </div>

    <nav class="flex-1 overflow-y-auto py-6 px-5">
        <ul class="space-y-1">

            <!-- Dashboard -->
            <li>
                <a href="{{ route('admin.dashboard') }}"
                    class="admin-sidebar-link flex items-center gap-3 px-5 py-3.5 rounded-2xl transition 
                   {{ request()->routeIs('admin.dashboard') ? 'admin-sidebar-link-active font-medium' : '' }}">
                    <i class="fas fa-home w-5"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="mt-8">
                <div class="admin-section-label mb-3 px-5 text-xs font-semibold uppercase tracking-widest">Management</div>
            </li>

            <!-- Products -->
            <li>
                <a href="{{ route('admin.products.index') }}"
                    class="admin-sidebar-link flex items-center gap-3 px-5 py-3.5 rounded-2xl transition 
                   {{ request()->routeIs('admin.products.*') ? 'admin-sidebar-link-active font-medium' : '' }}">
                    <i class="fas fa-boxes w-5"></i>
                    <span>Products</span>
                </a>
            </li>

            <!-- Team Members -->
            <li>
                <a href="{{ route('admin.team-members.index') }}"
                    class="admin-sidebar-link flex items-center gap-3 px-5 py-3.5 rounded-2xl transition 
                   {{ request()->routeIs('admin.team-members.*') ? 'admin-sidebar-link-active font-medium' : '' }}">
                    <i class="fas fa-users w-5"></i>
                    <span>Team Members</span>
                </a>
            </li>

            <!-- Certificates -->
            <li>
                <a href="{{ route('admin.certificates.index') }}"
                    class="admin-sidebar-link flex items-center gap-3 px-5 py-3.5 rounded-2xl transition 
                   {{ request()->routeIs('admin.certificates.*') ? 'admin-sidebar-link-active font-medium' : '' }}">
                    <i class="fas fa-award w-5"></i>
                    <span>Certificates</span>
                </a>
            </li>

            <!-- ==================== CONTENT MANAGEMENT ==================== -->
            <li class="mt-10">
                <div class="admin-section-label mb-3 px-5 text-xs font-semibold uppercase tracking-widest">Content Management</div>
            </li>

            <!-- Activities -->
            <li>
                <a href="{{ route('admin.activities.index') }}"
                    class="admin-sidebar-link flex items-center gap-3 px-5 py-3.5 rounded-2xl transition 
                   {{ request()->routeIs('admin.activities.*') ? 'admin-sidebar-link-active font-medium' : '' }}">
                    <i class="fas fa-industry w-5"></i>
                    <span>Activities</span>
                </a>
            </li>

            <!-- Blog -->
            <li>
                <a href="{{ route('admin.blogs.index') }}"
                    class="admin-sidebar-link flex items-center gap-3 px-5 py-3.5 rounded-2xl transition 
                   {{ request()->routeIs('admin.blogs.*') ? 'admin-sidebar-link-active font-medium' : '' }}">
                    <i class="fas fa-blog w-5"></i>
                    <span>Blog Posts</span>
                </a>
            </li>

            <!-- FAQs -->
            <li>
                <a href="{{ route('admin.faqs.index') }}"
                    class="admin-sidebar-link flex items-center gap-3 px-5 py-3.5 rounded-2xl transition 
                   {{ request()->routeIs('admin.faqs.*') ? 'admin-sidebar-link-active font-medium' : '' }}">
                    <i class="fas fa-question-circle w-5"></i>
                    <span>FAQs</span>
                </a>
            </li>

            <li>
                <a href="{{ route('admin.users.index') }}"
                    class="admin-sidebar-link flex items-center gap-3 px-5 py-3.5 rounded-2xl transition 
                   {{ request()->routeIs('admin.users.*') ? 'admin-sidebar-link-active font-medium' : '' }}">
                    <i class="fas fa-users w-5"></i>
                    <span>Users</span>
                </a>
            </li>
           
            <li class="mt-10">
                <div class="admin-section-label mb-3 px-5 text-xs font-semibold uppercase tracking-widest">Section</div>
            </li>
            <li>
                <a href="{{ route('admin.home-sections.index') }}"
                    class="admin-sidebar-link flex items-center gap-3 px-5 py-3.5 rounded-2xl transition 
               {{ request()->routeIs('admin.home-sections.*') ? 'admin-sidebar-link-active font-medium' : '' }}">
                    <i class="fas fa-layer-group w-5"></i> <!-- ប្តូរអាយខនឱ្យសមស្រប -->
                    <span>Home Page Sections</span>
                </a>
            </li>

            



            <!-- ==================== CUSTOMER SECTION ==================== -->
            <li class="mt-10">
                <div class="admin-section-label mb-3 px-5 text-xs font-semibold uppercase tracking-widest">Customer</div>
            </li>

            <!-- Contacts -->
            <li>
                <a href="{{ route('admin.contacts.index') }}"
                    class="admin-sidebar-link flex items-center gap-3 px-5 py-3.5 rounded-2xl transition 
                   {{ request()->routeIs('admin.contacts.*') ? 'admin-sidebar-link-active font-medium' : '' }}">
                    <i class="fas fa-envelope w-5"></i>
                    <span>Contacts</span>
                </a>
            </li>

        </ul>
    </nav>

    <!-- Logout -->
    <div class="mt-auto border-t border-white/10 p-5">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit"
                class="flex w-full items-center gap-3 rounded-2xl px-5 py-3 text-[#ffb4b8] transition hover:bg-white/8 hover:text-white">
                <i class="fas fa-sign-out-alt w-5"></i>
                <span class="font-medium">Logout</span>
            </button>
        </form>
    </div>
</aside>
