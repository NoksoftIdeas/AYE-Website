@extends('layouts.app')

@section('title', 'Advocacy & Awareness - Aye Sickle Cell Foundation')
@section('meta_description', 'Join our advocacy efforts to improve policies, increase awareness, and create better outcomes for people living with sickle cell disease.')

@section('content')
<div class="page-header">
    <div class="container-custom text-center">
        <h1 class="animate-on-scroll">Advocacy & Awareness</h1>
        <p class="text-xl mt-4 animate-on-scroll">Together We Can Create Change</p>
    </div>
</div>

<section class="section-padding">
    <div class="container-custom">
        <div class="max-w-4xl mx-auto text-center mb-12 animate-on-scroll">
            <h2 class="text-primary mb-4">Why Advocacy Matters</h2>
            <p class="text-lg text-gray-700 leading-relaxed">
                Advocacy is essential in ensuring that people living with sickle cell disease have access to quality healthcare, affordable treatment, and the support they need to thrive. Through awareness campaigns, policy engagement, and community mobilization, we work to create lasting change.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center animate-on-scroll">
                <div class="w-20 h-20 bg-gradient-to-br from-primary to-primary-700 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"></path>
                    </svg>
                </div>
                <h3 class="text-xl mb-3">Raise Awareness</h3>
                <p class="text-gray-600">
                    Educating communities about sickle cell disease to reduce stigma and promote understanding
                </p>
            </div>

            <div class="text-center animate-on-scroll">
                <div class="w-20 h-20 bg-gradient-to-br from-secondary to-secondary-700 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                </div>
                <h3 class="text-xl mb-3">Policy Change</h3>
                <p class="text-gray-600">
                    Advocating for better healthcare policies and affordable access to treatment and care
                </p>
            </div>

            <div class="text-center animate-on-scroll">
                <div class="w-20 h-20 bg-gradient-to-br from-accent to-accent-700 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl mb-3">Community Action</h3>
                <p class="text-gray-600">
                    Mobilizing communities to support individuals and families affected by sickle cell disease
                </p>
            </div>
        </div>
    </div>
</section>

<section class="section-padding bg-gray-50">
    <div class="container-custom">
        <div class="text-center mb-12 animate-on-scroll">
            <h2 class="text-primary mb-4">Our Advocacy Focus Areas</h2>
        </div>

        <div class="max-w-5xl mx-auto space-y-6">
            <div class="bg-white rounded-lg shadow-lg p-8 animate-on-scroll">
                <div class="flex items-start">
                    <div class="w-12 h-12 bg-primary-100 rounded-lg flex items-center justify-center flex-shrink-0 mr-4 mt-1">
                        <span class="text-primary font-bold text-xl">1</span>
                    </div>
                    <div>
                        <h3 class="text-2xl font-semibold mb-3">Healthcare Access</h3>
                        <p class="text-gray-700 leading-relaxed">
                            We advocate for universal access to quality healthcare services, including screening, diagnosis, treatment, and specialized care for sickle cell disease. We work with healthcare institutions to ensure equitable access regardless of socioeconomic status.
                        </p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg p-8 animate-on-scroll">
                <div class="flex items-start">
                    <div class="w-12 h-12 bg-secondary-100 rounded-lg flex items-center justify-center flex-shrink-0 mr-4 mt-1">
                        <span class="text-secondary font-bold text-xl">2</span>
                    </div>
                    <div>
                        <h3 class="text-2xl font-semibold mb-3">Affordable Treatment</h3>
                        <p class="text-gray-700 leading-relaxed">
                            We push for policy changes that make medications, hospital care, and life-saving treatments more affordable and accessible to all patients. This includes advocating for insurance coverage and government subsidies.
                        </p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg p-8 animate-on-scroll">
                <div class="flex items-start">
                    <div class="w-12 h-12 bg-accent-100 rounded-lg flex items-center justify-center flex-shrink-0 mr-4 mt-1">
                        <span class="text-accent-700 font-bold text-xl">3</span>
                    </div>
                    <div>
                        <h3 class="text-2xl font-semibold mb-3">Research & Innovation</h3>
                        <p class="text-gray-700 leading-relaxed">
                            We advocate for increased funding for sickle cell disease research, development of new treatments, and implementation of innovative care models that improve patient outcomes and quality of life.
                        </p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg p-8 animate-on-scroll">
                <div class="flex items-start">
                    <div class="w-12 h-12 bg-primary-100 rounded-lg flex items-center justify-center flex-shrink-0 mr-4 mt-1">
                        <span class="text-primary font-bold text-xl">4</span>
                    </div>
                    <div>
                        <h3 class="text-2xl font-semibold mb-3">Newborn Screening</h3>
                        <p class="text-gray-700 leading-relaxed">
                            We campaign for mandatory newborn screening programs that detect sickle cell disease early, enabling prompt intervention and preventing serious complications. Early detection saves lives.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding">
    <div class="container-custom">
        <div class="text-center mb-12 animate-on-scroll">
            <h2 class="text-primary mb-4">Awareness Campaigns</h2>
            <p class="text-lg text-gray-600">Our ongoing efforts to educate and mobilize communities</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
            <div class="bg-gradient-to-br from-primary-50 to-primary-100 p-8 rounded-lg animate-on-scroll">
                <h3 class="text-xl font-semibold mb-4">Community Outreach</h3>
                <p class="text-gray-700 mb-4">
                    We organize community health talks, school programs, and public forums to educate people about sickle cell disease prevention, management, and the importance of genetic screening.
                </p>
                <ul class="space-y-2 text-gray-700">
                    <li class="flex items-start">
                        <span class="text-primary mr-2">•</span>
                        <span>School education programs</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-primary mr-2">•</span>
                        <span>Community health screenings</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-primary mr-2">•</span>
                        <span>Public awareness events</span>
                    </li>
                </ul>
            </div>

            <div class="bg-gradient-to-br from-secondary-50 to-secondary-100 p-8 rounded-lg animate-on-scroll">
                <h3 class="text-xl font-semibold mb-4">Media & Communication</h3>
                <p class="text-gray-700 mb-4">
                    We leverage traditional and social media platforms to share accurate information, patient stories, and advocacy messages that reach thousands of people.
                </p>
                <ul class="space-y-2 text-gray-700">
                    <li class="flex items-start">
                        <span class="text-secondary mr-2">•</span>
                        <span>Social media campaigns</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-secondary mr-2">•</span>
                        <span>Radio and TV appearances</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-secondary mr-2">•</span>
                        <span>Educational content creation</span>
                    </li>
                </ul>
            </div>

            <div class="bg-gradient-to-br from-accent-50 to-accent-100 p-8 rounded-lg animate-on-scroll">
                <h3 class="text-xl font-semibold mb-4">Healthcare Professional Training</h3>
                <p class="text-gray-700 mb-4">
                    We provide training and resources to healthcare workers to improve diagnosis, treatment, and patient care for sickle cell disease.
                </p>
                <ul class="space-y-2 text-gray-700">
                    <li class="flex items-start">
                        <span class="text-accent-700 mr-2">•</span>
                        <span>Medical training workshops</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-accent-700 mr-2">•</span>
                        <span>Clinical guidelines distribution</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-accent-700 mr-2">•</span>
                        <span>Continuing education programs</span>
                    </li>
                </ul>
            </div>

            <div class="bg-gradient-to-br from-primary-50 to-secondary-50 p-8 rounded-lg animate-on-scroll">
                <h3 class="text-xl font-semibold mb-4">Policy Engagement</h3>
                <p class="text-gray-700 mb-4">
                    We engage with policymakers, government agencies, and stakeholders to advocate for supportive legislation and funding for sickle cell programs.
                </p>
                <ul class="space-y-2 text-gray-700">
                    <li class="flex items-start">
                        <span class="text-primary mr-2">•</span>
                        <span>Legislative advocacy</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-primary mr-2">•</span>
                        <span>Policy briefs and reports</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-primary mr-2">•</span>
                        <span>Stakeholder meetings</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="section-padding bg-gray-50">
    <div class="container-custom">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-12 animate-on-scroll">
                <h2 class="text-primary mb-4">How You Can Advocate</h2>
                <p class="text-lg text-gray-600">Everyone can make a difference in the fight against sickle cell disease</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-white p-6 rounded-lg shadow animate-on-scroll">
                    <h3 class="text-lg font-semibold mb-3">Share Your Story</h3>
                    <p class="text-gray-600">
                        Personal stories have power. Share your experience to inspire others and raise awareness.
                    </p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow animate-on-scroll">
                    <h3 class="text-lg font-semibold mb-3">Educate Others</h3>
                    <p class="text-gray-600">
                        Talk to friends, family, and colleagues about sickle cell disease and dispel myths.
                    </p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow animate-on-scroll">
                    <h3 class="text-lg font-semibold mb-3">Support Campaigns</h3>
                    <p class="text-gray-600">
                        Participate in our awareness campaigns and help us reach more people with vital information.
                    </p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow animate-on-scroll">
                    <h3 class="text-lg font-semibold mb-3">Engage Policymakers</h3>
                    <p class="text-gray-600">
                        Contact your representatives and advocate for policies that support sickle cell patients.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding bg-gradient-to-r from-primary to-secondary text-white">
    <div class="container-custom text-center">
        <div class="max-w-3xl mx-auto animate-on-scroll">
            <h2 class="text-white mb-6">Join the Movement</h2>
            <p class="text-xl mb-8 text-white/90">
                Together, we can create a future where everyone affected by sickle cell disease receives the care, support, and dignity they deserve.
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="{{ route('get-involved') }}" class="btn btn-accent">Get Involved</a>
                <a href="{{ route('contact') }}" class="btn bg-white text-primary hover:bg-gray-100">Contact Us</a>
            </div>
        </div>
    </div>
</section>
@endsection
