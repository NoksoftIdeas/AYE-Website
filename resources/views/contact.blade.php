@extends('layouts.app')

@section('title', 'Contact Us - Aye Sickle Cell Foundation')
@section('meta_description', 'Get in touch with Aye Sickle Cell Foundation. We are here to answer your questions and provide support.')

@section('content')
<!-- Page Header -->
<div class="page-header">
    <div class="container-custom text-center">
        <h1 class="animate-on-scroll">Contact Us</h1>
        <p class="text-xl mt-4 animate-on-scroll">We're Here to Help and Support You</p>
    </div>
</div>

<!-- Contact Section -->
<section class="section-padding">
    <div class="container-custom">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Contact Form -->
            <div class="animate-on-scroll">
                <h2 class="text-primary mb-6">Send Us a Message</h2>
                
                @if(session('success'))
                <div class="bg-green-50 border border-green-200 text-green-800 px-4 py-3 rounded-lg mb-6">
                    {{ session('success') }}
                </div>
                @endif
                
                @if($errors->any())
                <div class="bg-red-50 border border-red-200 text-red-800 px-4 py-3 rounded-lg mb-6">
                    <ul class="list-disc list-inside">
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                
                <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                    @csrf
                    
                    <div>
                        <label for="name" class="label">Full Name <span class="text-red-500">*</span></label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}" required class="input-field" placeholder="Enter your full name">
                    </div>
                    
                    <div>
                        <label for="email" class="label">Email Address <span class="text-red-500">*</span></label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" required class="input-field" placeholder="your.email@example.com">
                    </div>
                    
                    <div>
                        <label for="phone" class="label">Phone Number</label>
                        <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" class="input-field" placeholder="+234 XXX XXX XXXX">
                    </div>
                    
                    <div>
                        <label for="subject" class="label">Subject</label>
                        <input type="text" id="subject" name="subject" value="{{ old('subject') }}" class="input-field" placeholder="What is this regarding?">
                    </div>
                    
                    <div>
                        <label for="message" class="label">Message <span class="text-red-500">*</span></label>
                        <textarea id="message" name="message" rows="6" required class="input-field" placeholder="Tell us how we can help you...">{{ old('message') }}</textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary w-full">
                        Send Message
                    </button>
                </form>
            </div>
            
            <!-- Contact Information -->
            <div class="animate-on-scroll">
                <h2 class="text-primary mb-6">Get In Touch</h2>
                <p class="text-gray-600 mb-8">
                    Have questions or need support? We're here for you. Reach out to us through any of the following channels:
                </p>
                
                <div class="space-y-6">
                    <!-- Phone -->
                    <div class="card flex items-start">
                        <div class="w-12 h-12 bg-primary-100 rounded-lg flex items-center justify-center flex-shrink-0 mr-4">
                            <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold mb-2">Phone</h3>
                            <a href="tel:{{ env('CONTACT_PHONE_1') }}" class="text-gray-600 hover:text-primary transition block">
                                {{ env('CONTACT_PHONE_1') }}
                            </a>
                            <a href="tel:{{ env('CONTACT_PHONE_2') }}" class="text-gray-600 hover:text-primary transition block">
                                {{ env('CONTACT_PHONE_2') }}
                            </a>
                        </div>
                    </div>
                    
                    <!-- Email -->
                    <div class="card flex items-start">
                        <div class="w-12 h-12 bg-secondary-100 rounded-lg flex items-center justify-center flex-shrink-0 mr-4">
                            <svg class="w-6 h-6 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold mb-2">Email</h3>
                            <a href="mailto:{{ env('CONTACT_EMAIL') }}" class="text-gray-600 hover:text-secondary transition">
                                {{ env('CONTACT_EMAIL') }}
                            </a>
                        </div>
                    </div>
                    
                    <!-- Office Hours -->
                    <div class="card flex items-start">
                        <div class="w-12 h-12 bg-accent-100 rounded-lg flex items-center justify-center flex-shrink-0 mr-4">
                            <svg class="w-6 h-6 text-accent-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold mb-2">Office Hours</h3>
                            <p class="text-gray-600">Monday - Friday: 9:00 AM - 5:00 PM</p>
                            <p class="text-gray-600">Saturday: 10:00 AM - 2:00 PM</p>
                            <p class="text-gray-600">Sunday: Closed</p>
                        </div>
                    </div>
                </div>
                
                <!-- Quick Actions -->
                <div class="mt-8 p-6 bg-gradient-to-r from-primary-50 to-secondary-50 rounded-lg">
                    <h3 class="font-semibold mb-4">Looking for Something Specific?</h3>
                    <div class="space-y-2">
                        <a href="{{ route('education') }}" class="block text-primary hover:text-primary-700 transition">
                            → Learn about Sickle Cell Disease
                        </a>
                        <a href="{{ route('support') }}" class="block text-primary hover:text-primary-700 transition">
                            → Access Support & Resources
                        </a>
                        <a href="{{ route('get-involved') }}" class="block text-primary hover:text-primary-700 transition">
                            → Volunteer Opportunities
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
