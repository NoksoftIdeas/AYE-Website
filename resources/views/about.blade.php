@extends('layouts.app')

@section('title', 'About Us - Aye Sickle Cell Foundation')
@section('meta_description', 'Learn about Aye Sickle Cell Foundation, our mission, vision, values, and our commitment to improving lives affected by sickle cell disease.')

@section('content')
<!-- Page Header -->
<div class="page-header">
    <div class="container-custom text-center">
        <h1 class="animate-on-scroll">About Us</h1>
        <p class="text-xl mt-4 animate-on-scroll">Our Story, Mission, and Commitment</p>
    </div>
</div>

<!-- Our Story -->
<section class="section-padding">
    <div class="container-custom">
        <div class="max-w-4xl mx-auto">
            <div class="animate-on-scroll mb-12">
                <h2 class="text-primary mb-6">Our Story</h2>
                <p class="text-lg text-gray-700 leading-relaxed mb-4">
                    Aye Sickle Cell Foundation was born out of a deep passion to address the challenges faced by individuals living with sickle cell disease in our communities. We recognized that despite being one of the most common genetic disorders, sickle cell disease remains widely misunderstood, underdiagnosed, and stigmatized.
                </p>
                <p class="text-lg text-gray-700 leading-relaxed mb-4">
                    Our journey began with a simple but powerful vision: to create a world where every person affected by sickle cell disease has access to accurate information, quality healthcare, emotional support, and a community that understands their struggles.
                </p>
                <p class="text-lg text-gray-700 leading-relaxed">
                    Today, we stand as a beacon of hope, working tirelessly to educate, advocate, and support those impacted by this condition.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Mission, Vision, Values -->
<section class="section-padding bg-gray-50">
    <div class="container-custom">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Mission -->
            <div class="card animate-on-scroll">
                <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl mb-4 text-primary">Our Mission</h3>
                <p class="text-gray-700 leading-relaxed">
                    To improve the quality of life for individuals living with sickle cell disease through comprehensive education, tireless advocacy, accessible support services, and community empowerment.
                </p>
            </div>
            
            <!-- Vision -->
            <div class="card animate-on-scroll">
                <div class="w-16 h-16 bg-secondary rounded-full flex items-center justify-center mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl mb-4 text-secondary">Our Vision</h3>
                <p class="text-gray-700 leading-relaxed">
                    A future where sickle cell disease is diagnosed early, treated effectively, and where every affected individual lives a full, healthy, and dignified life free from stigma and discrimination.
                </p>
            </div>
            
            <!-- Values -->
            <div class="card animate-on-scroll">
                <div class="w-16 h-16 bg-accent rounded-full flex items-center justify-center mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl mb-4 text-accent-700">Our Values</h3>
                <ul class="text-gray-700 space-y-2">
                    <li class="flex items-start">
                        <span class="text-accent-700 mr-2">•</span>
                        <span><strong>Compassion:</strong> Empathy in all we do</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-accent-700 mr-2">•</span>
                        <span><strong>Integrity:</strong> Transparency and honesty</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-accent-700 mr-2">•</span>
                        <span><strong>Advocacy:</strong> Voice for the voiceless</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-accent-700 mr-2">•</span>
                        <span><strong>Community:</strong> Together we are stronger</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Core Focus Areas -->
<section class="section-padding">
    <div class="container-custom">
        <div class="text-center mb-12 animate-on-scroll">
            <h2 class="text-primary mb-4">Our Core Focus Areas</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                We work across multiple dimensions to create comprehensive impact
            </p>
        </div>
        
        <div class="max-w-4xl mx-auto space-y-8">
            <div class="flex items-start animate-on-scroll">
                <div class="w-12 h-12 bg-primary-100 rounded-lg flex items-center justify-center flex-shrink-0 mr-4">
                    <span class="text-primary font-bold text-xl">1</span>
                </div>
                <div>
                    <h3 class="text-xl font-semibold mb-2">Public Awareness & Education</h3>
                    <p class="text-gray-600">
                        We create and disseminate accurate, culturally relevant information about sickle cell disease to communities, schools, and healthcare facilities.
                    </p>
                </div>
            </div>
            
            <div class="flex items-start animate-on-scroll">
                <div class="w-12 h-12 bg-secondary-100 rounded-lg flex items-center justify-center flex-shrink-0 mr-4">
                    <span class="text-secondary font-bold text-xl">2</span>
                </div>
                <div>
                    <h3 class="text-xl font-semibold mb-2">Advocacy & Policy Engagement</h3>
                    <p class="text-gray-600">
                        We engage with policymakers, healthcare institutions, and stakeholders to advocate for better treatment access, affordable care, and supportive policies.
                    </p>
                </div>
            </div>
            
            <div class="flex items-start animate-on-scroll">
                <div class="w-12 h-12 bg-accent-100 rounded-lg flex items-center justify-center flex-shrink-0 mr-4">
                    <span class="text-accent-700 font-bold text-xl">3</span>
                </div>
                <div>
                    <h3 class="text-xl font-semibold mb-2">Support Services & Resources</h3>
                    <p class="text-gray-600">
                        We provide practical support, educational materials, referrals, and emotional support to patients, families, and caregivers.
                    </p>
                </div>
            </div>
            
            <div class="flex items-start animate-on-scroll">
                <div class="w-12 h-12 bg-primary-100 rounded-lg flex items-center justify-center flex-shrink-0 mr-4">
                    <span class="text-primary font-bold text-xl">4</span>
                </div>
                <div>
                    <h3 class="text-xl font-semibold mb-2">Early Diagnosis & Screening</h3>
                    <p class="text-gray-600">
                        We promote and facilitate early diagnosis through newborn screening programs and genetic counseling initiatives.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="section-padding bg-gradient-to-r from-primary to-secondary text-white">
    <div class="container-custom text-center">
        <div class="max-w-3xl mx-auto animate-on-scroll">
            <h2 class="text-white mb-6">Be Part of Our Journey</h2>
            <p class="text-xl mb-8 text-white/90">
                Join us in creating lasting change and hope for individuals living with sickle cell disease.
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="{{ route('get-involved') }}" class="btn btn-accent">Get Involved</a>
                <a href="{{ route('contact') }}" class="btn bg-white text-primary hover:bg-gray-100">Contact Us</a>
            </div>
        </div>
    </div>
</section>
@endsection
