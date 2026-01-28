<header class="bg-white shadow-md sticky top-0 z-40">
    <!-- Top Bar -->
    <div class="bg-primary text-white">
        <div class="container-custom py-2">
            <div class="flex flex-wrap justify-between items-center text-sm">
                <div class="flex items-center space-x-4">
                    <a href="tel:{{ env('CONTACT_PHONE_1') }}" class="hover:text-accent transition">
                        <svg class="w-4 h-4 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        {{ env('CONTACT_PHONE_1') }}
                    </a>
                    <span class="hidden md:inline">|</span>
                    <a href="mailto:{{ env('CONTACT_EMAIL') }}" class="hover:text-accent transition hidden md:inline">
                        <svg class="w-4 h-4 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        {{ env('CONTACT_EMAIL') }}
                    </a>
                </div>
                <div>
                    <a href="{{ route('get-involved') }}" class="hover:text-accent transition font-semibold">
                        Get Involved →
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Main Navigation -->
    <nav class="container-custom py-4">
        <div class="flex justify-between items-center">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="flex items-center space-x-2">
                <div class="w-12 h-12 bg-gradient-to-br from-primary to-secondary rounded-full flex items-center justify-center">
                    <span class="text-white font-bold text-xl">AYE</span>
                </div>
                <div class="hidden md:block">
                    <div class="font-heading font-bold text-xl text-primary">Aye Sickle Cell Foundation</div>
                    <div class="text-xs text-gray-600">Creating Awareness, Saving Lives</div>
                </div>
            </a>
            
            <!-- Desktop Navigation -->
            <div class="hidden lg:flex items-center space-x-6">
                <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About Us</a>
                <a href="{{ route('education') }}" class="nav-link {{ request()->routeIs('education*') ? 'active' : '' }}">Education</a>
                <a href="{{ route('support') }}" class="nav-link {{ request()->routeIs('support') ? 'active' : '' }}">Support & Resources</a>
                <a href="{{ route('advocacy') }}" class="nav-link {{ request()->routeIs('advocacy') ? 'active' : '' }}">Advocacy</a>
                <a href="{{ route('get-involved') }}" class="nav-link {{ request()->routeIs('get-involved') ? 'active' : '' }}">Get Involved</a>
                <a href="{{ route('contact') }}" class="btn btn-primary">Contact Us</a>
            </div>
            
            <!-- Mobile Menu Button -->
            <button id="mobile-menu-button" class="lg:hidden text-primary p-2">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
        
        <!-- Mobile Navigation -->
        <div id="mobile-menu" class="hidden lg:hidden mt-4 pb-4 space-y-2">
            <a href="{{ route('home') }}" class="block py-2 px-4 hover:bg-gray-100 rounded {{ request()->routeIs('home') ? 'bg-primary-50' : '' }}">Home</a>
            <a href="{{ route('about') }}" class="block py-2 px-4 hover:bg-gray-100 rounded {{ request()->routeIs('about') ? 'bg-primary-50' : '' }}">About Us</a>
            <a href="{{ route('education') }}" class="block py-2 px-4 hover:bg-gray-100 rounded {{ request()->routeIs('education*') ? 'bg-primary-50' : '' }}">Education</a>
            <a href="{{ route('support') }}" class="block py-2 px-4 hover:bg-gray-100 rounded {{ request()->routeIs('support') ? 'bg-primary-50' : '' }}">Support & Resources</a>
            <a href="{{ route('advocacy') }}" class="block py-2 px-4 hover:bg-gray-100 rounded {{ request()->routeIs('advocacy') ? 'bg-primary-50' : '' }}">Advocacy</a>
            <a href="{{ route('get-involved') }}" class="block py-2 px-4 hover:bg-gray-100 rounded {{ request()->routeIs('get-involved') ? 'bg-primary-50' : '' }}">Get Involved</a>
            <a href="{{ route('contact') }}" class="block py-2 px-4 bg-primary text-white rounded text-center mt-2">Contact Us</a>
        </div>
    </nav>
</header>

<style>
.nav-link {
    @apply text-gray-700 hover:text-primary transition font-medium relative pb-1;
}

.nav-link.active {
    @apply text-primary;
}

.nav-link.active::after {
    content: '';
    @apply absolute bottom-0 left-0 right-0 h-0.5 bg-primary;
}
</style>
