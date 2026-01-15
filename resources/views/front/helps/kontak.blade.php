@extends('front.layout')
@section('content')

<!-- Hero Section -->
<section class="mb-8">
    <div class="bg-gradient-to-r from-[#080D70] to-[#2C7404] rounded-3xl p-8 text-white relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute top-0 right-0 w-64 h-64 bg-gradient-to-bl from-white/10 to-transparent rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 left-0 w-80 h-80 bg-gradient-to-tr from-green-500/10 to-transparent rounded-full blur-3xl"></div>
        </div>
        
        <div class="relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <!-- Breadcrumb -->
                <nav class="mb-6">
                    <ol class="flex items-center justify-center gap-2 text-sm text-blue-200">
                        <li>
                            <a href="/" class="hover:text-white transition-colors">Home</a>
                        </li>
                        <li><i class="fas fa-chevron-right text-xs"></i></li>
                        <li class="font-medium text-white">Hubungi Kami</li>
                    </ol>
                </nav>
                
                <h1 class="text-4xl md:text-5xl font-bold mb-4">
                    <span class="bg-clip-text text-transparent bg-gradient-to-r from-white to-blue-200">
                        Hubungi Kami
                    </span>
                </h1>
                <p class="text-blue-100 text-lg md:text-xl max-w-3xl mx-auto">
                    Tim support kami siap membantu Anda. Hubungi kami untuk pertanyaan, bantuan, atau kerja sama.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Main Content -->
<section class="max-w-6xl mx-auto px-4 sm:px-6 py-8">
    <!-- Top Row: 2 Cards Side by Side -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
        
        <!-- Left Card: Kontak Langsung -->
        <div class="bg-white rounded-2xl shadow-lg border border-gray-200 p-6">
            <h3 class="text-xl font-bold text-gray-900 mb-6 flex items-center gap-2">
                <i class="fas fa-address-book text-[#080D70]"></i>
                Kontak Langsung
            </h3>
            
            <div class="space-y-6">
                <!-- Email -->
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-xl bg-blue-100 flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-envelope text-[#080D70] text-lg"></i>
                    </div>
                    <div>
                        <div class="font-bold text-gray-900 mb-1">Email</div>
                        <a href="mailto:admin@bkerjo.com" 
                           class="text-[#080D70] hover:text-[#05084d] font-medium break-all">
                            admin@bkerjo.com
                        </a>
                    </div>
                </div>
                
                <!-- WhatsApp -->
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-xl bg-green-100 flex items-center justify-center flex-shrink-0">
                        <i class="fab fa-whatsapp text-green-600 text-lg"></i>
                    </div>
                    <div>
                        <div class="font-bold text-gray-900 mb-1">WhatsApp</div>
                        <a href="https://wa.me/628123456789" 
                           target="_blank"
                           class="text-[#080D70] hover:text-[#05084d] font-medium">
                            08xx xxxx xxxx
                        </a>
                    </div>
                </div>
                
                <!-- Address -->
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-xl bg-purple-100 flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-map-marker-alt text-purple-600 text-lg"></i>
                    </div>
                    <div>
                        <div class="font-bold text-gray-900 mb-1">Lokasi</div>
                        <div class="text-gray-700">Bengkulu, Indonesia</div>
                    </div>
                </div>
            </div>
            
            <!-- Quick Actions -->
            <div class="mt-8 pt-6 border-t border-gray-200 space-y-3">
                <a href="mailto:admin@bkerjo.com" 
                   class="block w-full bg-blue-50 hover:bg-blue-100 text-[#080D70] font-semibold py-3 rounded-lg text-center transition-colors flex items-center justify-center gap-2">
                    <i class="fas fa-envelope"></i>
                    Kirim Email Sekarang
                </a>
                <a href="https://wa.me/628123456789" 
                   target="_blank"
                   class="block w-full bg-green-50 hover:bg-green-100 text-green-700 font-semibold py-3 rounded-lg text-center transition-colors flex items-center justify-center gap-2">
                    <i class="fab fa-whatsapp"></i>
                    Chat via WhatsApp
                </a>
            </div>
        </div>
        
        <!-- Right Card: Kontak Kami Untuk -->
        <div class="bg-white rounded-2xl shadow-lg border border-gray-200 p-6">
            <h3 class="text-xl font-bold text-gray-900 mb-6 flex items-center gap-2">
                <i class="fas fa-bullseye text-[#2C7404]"></i>
                Kontak Kami Untuk
            </h3>
            
            <div class="space-y-4">
                <div class="flex items-center gap-3 p-3 hover:bg-gray-50 rounded-lg transition-colors">
                    <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-briefcase text-[#080D70]"></i>
                    </div>
                    <div>
                        <div class="font-medium text-gray-900">Pasang lowongan gratis</div>
                        <p class="text-gray-600 text-sm">Promosikan lowongan kerja Anda</p>
                    </div>
                </div>
                
                <div class="flex items-center gap-3 p-3 hover:bg-gray-50 rounded-lg transition-colors">
                    <div class="w-10 h-10 rounded-full bg-green-100 flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-question-circle text-[#2C7404]"></i>
                    </div>
                    <div>
                        <div class="font-medium text-gray-900">Pertanyaan tentang lowongan</div>
                        <p class="text-gray-600 text-sm">Klarifikasi informasi lowongan</p>
                    </div>
                </div>
                
                <div class="flex items-center gap-3 p-3 hover:bg-gray-50 rounded-lg transition-colors">
                    <div class="w-10 h-10 rounded-full bg-red-100 flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-flag text-red-600"></i>
                    </div>
                    <div>
                        <div class="font-medium text-gray-900">Lapor lowongan mencurigakan</div>
                        <p class="text-gray-600 text-sm">Laporkan lowongan tidak sesuai</p>
                    </div>
                </div>
                
                <div class="flex items-center gap-3 p-3 hover:bg-gray-50 rounded-lg transition-colors">
                    <div class="w-10 h-10 rounded-full bg-purple-100 flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-handshake text-purple-600"></i>
                    </div>
                    <div>
                        <div class="font-medium text-gray-900">Kerja sama & partnership</div>
                        <p class="text-gray-600 text-sm">Kolaborasi dengan BKERJO.COM</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bottom Row: Social Media Full Width -->
    <div class="bg-white rounded-2xl shadow-lg border border-gray-200 p-6">
        <h3 class="text-xl font-bold text-gray-900 mb-6 flex items-center gap-2">
            <i class="fas fa-hashtag text-[#080D70]"></i>
            Ikuti Media Sosial Kami
        </h3>
        
        <div class="flex flex-wrap gap-4">
            <a href="#" class="flex items-center gap-3 px-4 py-3 bg-pink-50 hover:bg-pink-100 text-pink-700 rounded-lg transition-colors">
                <i class="fab fa-instagram text-pink-600"></i>
                <span>Instagram</span>
            </a>
        </div>
    </div>
</section>

@endsection