@extends('layouts.app')

@section('title', 'Home - Aye Sickle Cell Foundation')
@section('meta_description', 'Aye Sickle Cell Foundation is dedicated to improving the quality of life for individuals living with sickle cell disease through awareness, advocacy, and support services.')

@section('content')
<!-- Hero Section -->
<section class="hero-section">
    <div class="container-custom">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="animate-on-scroll">
                <h1 class="text-white mb-6">Creating Awareness, Saving Lives</h1>
                <p class="text-xl text-white/90 mb-8 leading-relaxed">
                    Aye Sickle Cell Foundation is dedicated to improving the quality of life for individuals living with sickle cell disease through education, advocacy, and compassionate support.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="{{ route('education') }}" class="btn btn-accent">Learn About Sickle Cell</a>
                    <a href="{{ route('support') }}" class="btn btn-outline bg-white/10 text-white border-white hover:bg-white hover:text-primary">Get Support</a>
                </div>
            </div>
            <div class="hidden lg:block animate-on-scroll">
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8">
                    <div class="grid grid-cols-2 gap-6 text-white text-center">
                        <div class="bg-white/10 rounded-lg p-6">
                            <div class="text-4xl font-bold text-accent">1000+</div>
                            <div class="text-sm mt-2">Lives Impacted</div>
                        </div>
                        <div class="bg-white/10 rounded-lg p-6">
                            <div class="text-4xl font-bold text-accent">50+</div>
                            <div class="text-sm mt-2">Communities Reached</div>
                        </div>
                        <div class="bg-white/10 rounded-lg p-6">
                            <div class="text-4xl font-bold text-accent">20+</div>
                            <div class="text-sm mt-2">Awareness Campaigns</div>
                        </div>
                        <div class="bg-white/10 rounded-lg p-6">
                            <div class="text-4xl font-bold text-accent">100%</div>
                            <div class="text-sm mt-2">Committed</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- What is Sickle Cell Section -->
<section class="section-padding bg-gray-50">
    <div class="container-custom">
        <div class="max-w-4xl mx-auto text-center mb-12 animate-on-scroll">
            <h2 class="text-primary mb-4">Understanding Sickle Cell Disease</h2>
            <p class="text-lg text-gray-600">
                Sickle cell disease is a genetic blood disorder that affects millions worldwide. Early diagnosis and proper care can significantly improve quality of life.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="card animate-on-scroll">
                <div class="w-16 h-16 bg-primary-50 rounded-full flex items-center justify-center mb-4">
                    <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                </div>
                <h3 class="text-xl mb-3">What It Is</h3>
                <p class="text-gray-600 mb-4">
                    A genetic condition where red blood cells become sickle-shaped, affecting oxygen delivery throughout the body.
                </p>
                <a href="{{ route('education') }}" class="text-primary font-semibold hover:text-primary-700 transition">
                    Learn More →
                </a>
            </div>
            
            <div class="card animate-on-scroll">
                <div class="w-16 h-16 bg-secondary-50 rounded-full flex items-center justify-center mb-4">
                    <svg class="w-8 h-8 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                    </svg>
                </div>
                <h3 class="text-xl mb-3">Early Diagnosis</h3>
                <p class="text-gray-600 mb-4">
                    Newborn screening and genetic testing can identify sickle cell disease early, enabling timely intervention.
                </p>
                <a href="{{ route('education') }}" class="text-secondary font-semibold hover:text-secondary-700 transition">
                    Learn More →
                </a>
            </div>
            
            <div class="card animate-on-scroll">
                <div class="w-16 h-16 bg-accent-50 rounded-full flex items-center justify-center mb-4">
                    <svg class="w-8 h-8 text-accent-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl mb-3">Living Well</h3>
                <p class="text-gray-600 mb-4">
                    With proper management, people with sickle cell disease can lead fulfilling lives and achieve their dreams.
                </p>
                <a href="{{ route('support') }}" class="text-accent-700 font-semibold hover:text-accent-800 transition">
                    Get Support →
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Our Focus Areas -->
<section class="section-padding">
    <div class="container-custom">
        <div class="text-center mb-12 animate-on-scroll">
            <h2 class="text-primary mb-4">Our Focus Areas</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                We work across multiple fronts to create lasting impact in the fight against sickle cell disease
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center animate-on-scroll">
                <div class="w-20 h-20 bg-gradient-to-br from-primary to-primary-700 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                    </svg>
                </div>
                <h3 class="text-xl mb-3">Awareness</h3>
                <p class="text-gray-600">
                    Educating communities about sickle cell disease, its causes, symptoms, and the importance of early detection.
                </p>
            </div>
            
            <div class="text-center animate-on-scroll">
                <div class="w-20 h-20 bg-gradient-to-br from-secondary to-secondary-700 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"></path>
                    </svg>
                </div>
                <h3 class="text-xl mb-3">Advocacy</h3>
                <p class="text-gray-600">
                    Championing policy changes and healthcare improvements to ensure better access to treatment and care.
                </p>
            </div>
            
            <div class="text-center animate-on-scroll">
                <div class="w-20 h-20 bg-gradient-to-br from-accent to-accent-700 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl mb-3">Support & Resources</h3>
                <p class="text-gray-600">
                    Providing practical support, resources, and guidance to patients, families, and caregivers.
                </p>
            </div>
        </div>
    </div>
</section>

@if($testimonials->count() > 0)
<!-- Testimonials -->
<section class="section-padding bg-gradient-to-r from-primary-50 to-secondary-50">
    <div class="container-custom">
        <div class="text-center mb-12 animate-on-scroll">
            <h2 class="text-primary mb-4">Impact Stories</h2>
            <p class="text-lg text-gray-600">Hear from those whose lives have been touched by our work</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($testimonials as $testimonial)
            <div class="bg-white rounded-xl p-6 shadow-lg animate-on-scroll">
                <div class="flex items-center mb-4">
                    @if($testimonial->image)
                    <img src="{{ asset('storage/' . $testimonial->image) }}" alt="{{ $testimonial->name }}" class="w-16 h-16 rounded-full object-cover mr-4">
                    @else
                    <div class="w-16 h-16 rounded-full bg-gradient-to-br from-primary to-secondary flex items-center justify-center text-white font-bold text-xl mr-4">
                        {{ substr($testimonial->name, 0, 1) }}
                    </div>
                    @endif
                    <div>
                        <div class="font-semibold">{{ $testimonial->name }}</div>
                        @if($testimonial->role)
                        <div class="text-sm text-gray-600">{{ $testimonial->role }}</div>
                        @endif
                    </div>
                </div>
                <p class="text-gray-600 italic">"{{ $testimonial->content }}"</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- Call to Action -->
<section class="section-padding bg-gradient-to-r from-primary to-primary-700 text-white">
    <div class="container-custom text-center">
        <div class="max-w-3xl mx-auto animate-on-scroll">
            <h2 class="text-white mb-6">Join Us in Making a Difference</h2>
            <p class="text-xl mb-8 text-white/90">
                Together, we can create a world where sickle cell disease is better understood, diagnosed early, and managed effectively.
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="{{ route('get-involved') }}" class="btn btn-accent">Volunteer With Us</a>
                <a href="{{ route('contact') }}" class="btn bg-white text-primary hover:bg-gray-100">Contact Us</a>
            </div>
        </div>
    </div>
</section>
@endsection
