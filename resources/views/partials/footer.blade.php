<footer class="bg-gray-900 text-gray-300">
    <div class="container-custom py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- About Section -->
            <div>
                <div class="flex items-center space-x-2 mb-4">
                    <div class="w-10 h-10 bg-gradient-to-br from-primary to-secondary rounded-full flex items-center justify-center">
                        <span class="text-white font-bold">AYE</span>
                    </div>
                    <div class="font-heading font-bold text-lg text-white">Aye Sickle Cell</div>
                </div>
                <p class="text-sm leading-relaxed">
                    Dedicated to improving the quality of life for individuals living with sickle cell disease through awareness, advocacy, and support.
                </p>
            </div>
            
            <!-- Quick Links -->
            <div>
                <h3 class="font-heading font-semibold text-white mb-4">Quick Links</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ route('home') }}" class="hover:text-accent transition">Home</a></li>
                    <li><a href="{{ route('about') }}" class="hover:text-accent transition">About Us</a></li>
                    <li><a href="{{ route('education') }}" class="hover:text-accent transition">Education</a></li>
                    <li><a href="{{ route('support') }}" class="hover:text-accent transition">Support & Resources</a></li>
                    <li><a href="{{ route('advocacy') }}" class="hover:text-accent transition">Advocacy</a></li>
                </ul>
            </div>
            
            <!-- Get Involved -->
            <div>
                <h3 class="font-heading font-semibold text-white mb-4">Get Involved</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ route('get-involved') }}" class="hover:text-accent transition">Volunteer</a></li>
                    <li><a href="{{ route('get-involved') }}" class="hover:text-accent transition">Partner With Us</a></li>
                    <li><a href="{{ route('advocacy') }}" class="hover:text-accent transition">Become an Advocate</a></li>
                    <li><a href="{{ route('contact') }}" class="hover:text-accent transition">Contact Us</a></li>
                </ul>
            </div>
            
            <!-- Contact Info -->
            <div>
                <h3 class="font-heading font-semibold text-white mb-4">Contact Us</h3>
                <ul class="space-y-3 text-sm">
                    <li class="flex items-start">
                        <svg class="w-5 h-5 mr-2 text-accent flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        <div>
                            <a href="tel:{{ env('CONTACT_PHONE_1') }}" class="hover:text-accent transition block">{{ env('CONTACT_PHONE_1') }}</a>
                            <a href="tel:{{ env('CONTACT_PHONE_2') }}" class="hover:text-accent transition block">{{ env('CONTACT_PHONE_2') }}</a>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 mr-2 text-accent flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        <a href="mailto:{{ env('CONTACT_EMAIL') }}" class="hover:text-accent transition">{{ env('CONTACT_EMAIL') }}</a>
                    </li>
                </ul>
            </div>
        </div>
        
        <hr class="my-8 border-gray-700">
        
        <!-- Bottom Bar -->
        <div class="flex flex-col md:flex-row justify-between items-center text-sm">
            <p>&copy; {{ date('Y') }} Aye Sickle Cell Foundation. All rights reserved.</p>
            <p class="mt-2 md:mt-0">
                Powered by Noksoft Ideas
            </p>
        </div>
    </div>
</footer>
