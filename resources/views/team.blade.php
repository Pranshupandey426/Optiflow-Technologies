@extends('layouts.app')

@section('title', 'Our Team')

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/team.css') }}">
@endpush

@section('content')

<section class="team-hero">
    <div class="team-hero-overlay"></div>
    <div class="team-hero-content">
        <h1>Meet Our <span class="highlight">Team</span></h1>
        <p>The visionaries and creators turning digital goals into reality.</p>
    </div>
</section>

<section class="team-scroll-container">
    @php
    $team = [
        ['name' => 'Rishi Shukla', 'role' => 'Founder & CEO', 'img' => 'mamber4.webp'],
        ['name' => 'Raj Sharma', 'role' => 'CTO', 'img' => 'mamber6.webp'],
        ['name' => 'Ameesha Gupta', 'role' => 'Android Developer', 'img' => 'WhatsApp Image 2026-02-06 at 3.23.42 PM.jpeg'],
        ['name' => 'Shashank Shukla', 'role' => 'Software Developer', 'img' => 'Gemini_Generated_Image_f9axxf9axxf9axxf.png'],
        ['name' => 'Yashi Mishra', 'role' => 'Product Lister', 'img' => 'mamber5.webp'],
        ['name' => 'Pranshu Pandey', 'role' => 'Software Developer', 'img' => 'mamber1.png'],
        ['name' => 'Anjali Sharma', 'role' => 'Sales Head', 'img' => 'mamber3.webp'],
        ['name' => 'Kartik Gupta', 'role' => 'Manager', 'img' => 'mamber2.webp'],
    ];
@endphp


    <div class="team-wrapper">
        @foreach($team as $index => $member)
        <div class="team-card-section">
            <div class="team-card-inner">
                <div class="team-image-box">
                    <div class="polaroid-frame" style="transform: rotate({{ ($index % 2 == 0) ? '-3' : '3' }}deg);">
                        <img src="{{ asset('assets/images/team/' . $member['img']) }}" alt="{{ $member['name'] }}">
                        <div class="polaroid-caption">{{ $member['name'] }}</div>
                    </div>
                </div>

                <div class="team-text-box">
                    <h2>{{ $member['name'] }}</h2>
                    <h3 class="yellow-text">{{ $member['role'] }}</h3>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

<script>
    gsap.registerPlugin(ScrollTrigger);

    const cards = gsap.utils.toArray(".team-card-section");
    
    cards.forEach((card, i) => {
        if (i !== cards.length - 1) {
            gsap.to(card, {
                scale: 0.9,
                opacity: 0,
                filter: "blur(8px)",
                scrollTrigger: {
                    trigger: card,
                    start: "top top", 
                    end: "bottom top",
                    scrub: true,
                    pin: true,
                    pinSpacing: false
                }
            });
        }
    });
</script>
@endsection