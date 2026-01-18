@extends('front.layout')
@section('title','Pelatihan & Event Gratis | bkerjo.com')

@section('content')

<!-- Hero Section -->
<section class="relative py-12 md:py-16 overflow-hidden">
    <!-- Background Effects -->
    <div class="absolute inset-0 z-0">
        <div class="absolute top-0 left-0 w-72 h-72 bg-gradient-to-br from-[#080D70]/10 to-transparent rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-80 h-80 bg-gradient-to-tl from-[#2C7404]/10 to-transparent rounded-full blur-3xl"></div>
    </div>

    <div class="relative z-10 max-w-6xl mx-auto px-4 sm:px-6">
        <div class="text-center">
            <!-- Badge -->
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-gradient-to-r from-[#080D70]/10 to-[#2C7404]/10 rounded-full border border-[#080D70]/20 mb-6">
                <i class="fas fa-graduation-cap text-[#080D70]"></i>
                <span class="font-semibold text-[#080D70]">Upgrade Skill Anda</span>
            </div>
            
            <!-- Title -->
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-4">
                <span class="bg-gradient-to-r from-[#080D70] via-blue-700 to-[#2C7404] bg-clip-text text-transparent">
                    Pelatihan & Event Gratis
                </span>
            </h1>
            
            <!-- Description -->
            <p class="text-lg text-gray-600 max-w-3xl mx-auto mb-8 leading-relaxed">
                Akses berbagai pelatihan dan event gratis untuk meningkatkan kompetensi dan daya saing Anda di dunia kerja.
                <span class="block mt-2 font-semibold text-[#2C7404]">100% Gratis • Bersertifikat • Diakui Perusahaan</span>
            </p>
        </div>
    </div>
</section>

<!-- Main Content -->
<section class="py-8 md:py-12">
    <div class="max-w-6xl mx-auto px-2 sm:px-6">
        
        <!-- Section Header -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 mb-8">
            <div>
                <h2 class="text-2xl font-bold text-gray-900">
                    Pelatihan <span class="text-[#080D70]">Tersedia</span>
                </h2>
                <p class="text-gray-600">Pilih pelatihan yang sesuai dengan minat dan tujuan karir Anda</p>
            </div>
        </div>

        <!-- Training Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
            @for($i = 0; $i < 6; $i++)
                @include('front.components.training-card')
            @endfor
        </div>
        
        <!-- Pagination (Dummy) -->
        <div class="flex justify-center items-center gap-2 mb-16">
            <button class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-300 text-gray-600 hover:bg-gray-50">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button class="w-10 h-10 flex items-center justify-center rounded-lg bg-gradient-to-r from-[#080D70] to-[#2C7404] text-white font-semibold">
                1
            </button>
            <button class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-300 text-gray-600 hover:bg-gray-50">
                2
            </button>
            <button class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-300 text-gray-600 hover:bg-gray-50">
                3
            </button>
            <span class="px-2 text-gray-400">...</span>
            <button class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-300 text-gray-600 hover:bg-gray-50">
                5
            </button>
            <button class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-300 text-gray-600 hover:bg-gray-50">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
        
        <!-- CTA Section -->
        <div class="bg-gradient-to-r from-[#080D70] to-[#2C7404] rounded-2xl p-8 text-white text-center">
            <div class="max-w-2xl mx-auto">
                <div class="w-20 h-20 mx-auto mb-6 bg-white/20 rounded-full flex items-center justify-center">
                    <i class="fas fa-handshake text-3xl"></i>
                </div>
                <h2 class="text-2xl font-bold mb-4">Ingin Jadi Partner Pelatihan?</h2>
                <p class="text-white/90 mb-6">
                    Bekerjasama dengan bkerjo.com untuk menyelenggarakan pelatihan gratis bagi masyarakat Bengkulu.
                    Hubungi kami untuk informasi partnership.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="mailto:admin@bkerjo.com" 
                       class="inline-flex items-center justify-center gap-2 bg-white text-[#080D70] font-semibold px-6 py-3 rounded-lg hover:bg-gray-100 transition-colors">
                        <i class="fas fa-envelope"></i>
                        Email Kami
                    </a>
                    <a href="https://wa.me/628xxxxxxxxxx" 
                       class="inline-flex items-center justify-center gap-2 bg-white/10 hover:bg-white/20 text-white font-semibold px-6 py-3 rounded-lg border border-white/30 transition-colors">
                        <i class="fab fa-whatsapp"></i>
                        WhatsApp
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection