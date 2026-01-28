<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', config('app.name', 'AYE Sickle Cell Foundation'))</title>
    <meta name="description" content="@yield('meta_description', 'Aye Sickle Cell Foundation is dedicated to improving the quality of life for individuals living with sickle cell disease.')">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <!-- Navigation -->
    <nav class="bg-white shadow-md sticky top-0 z-50">
        <div class="container-custom">
            <div class="flex items-center justify-between h-20">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="{{ route('home') }}" class="flex items-center space-x-3">
                        <div class="w-12 h-12 bg-gradient-to-br from-primary to-secondary rounded-full flex items-center justify-center">
                            <span class="text-white font-bold text-xl">A</span>
                        </div>
                        <div>
                            <div class="text-primary font-heading font-bold text-xl">AYE</div>
                            <div class="text-xs text-gray-600">Sickle Cell Foundation</div>
                        </div>
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                    <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About Us</a>
                    <a href="{{ route('education') }}" class="nav-link {{ request()->routeIs('education') ? 'active' : '' }}">Education</a>
                    <a href="{{ route('support') }}" class="nav-link {{ request()->routeIs('support') ? 'active' : '' }}">Support</a>
                    <a href="{{ route('advocacy') }}" class="nav-link {{ request()->routeIs('advocacy') ? 'active' : '' }}">Advocacy</a>
                    <a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
                </div>

                <!-- CTA Button -->
                <div class="hidden md:block">
                    <a href="{{ route('get-involved') }}" class="btn btn-primary">Get Involved</a>
                </div>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-button" class="md:hidden text-gray-700 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden md:hidden pb-4">
                <div class="flex flex-col space-y-3">
                    <a href="{{ route('home') }}" class="nav-link-mobile {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                    <a href="{{ route('about') }}" class="nav-link-mobile {{ request()->routeIs('about') ? 'active' : '' }}">About Us</a>
                    <a href="{{ route('education') }}" class="nav-link-mobile {{ request()->routeIs('education') ? 'active' : '' }}">Education</a>
                    <a href="{{ route('support') }}" class="nav-link-mobile {{ request()->routeIs('support') ? 'active' : '' }}">Support</a>
                    <a href="{{ route('advocacy') }}" class="nav-link-mobile {{ request()->routeIs('advocacy') ? 'active' : '' }}">Advocacy</a>
                    <a href="{{ route('contact') }}" class="nav-link-mobile {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
                    <a href="{{ route('get-involved') }}" class="btn btn-primary w-full text-center">Get Involved</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    @include('partials.footer')

    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });

        // Scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.animate-on-scroll').forEach((el) => {
            observer.observe(el);
        });
    </script>

    <style>
        .nav-link {
            @apply text-gray-700 hover:text-primary font-medium transition-colors duration-200 relative;
        }

        .nav-link.active {
            @apply text-primary;
        }

        .nav-link.active::after {
            content: '';
            @apply absolute bottom-0 left-0 right-0 h-0.5 bg-primary;
        }

        .nav-link-mobile {
            @apply text-gray-700 hover:text-primary font-medium py-2 px-4 rounded-lg hover:bg-primary-50 transition-all duration-200;
        }

        .nav-link-mobile.active {
            @apply text-primary bg-primary-50;
        }
    </style>
</body>
</html>
