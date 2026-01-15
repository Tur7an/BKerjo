@extends('front.layout')
@section('title','Tentang Kami - BKerjo')

@section('content')

<!-- Hero Section -->
<section class="relative py-12 md:py-16 overflow-hidden">
    <!-- Background Effects -->
    <div class="absolute inset-0 z-0">
        <div class="absolute top-10 left-10 w-72 h-72 bg-gradient-to-r from-blue-500/10 to-emerald-500/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-10 right-10 w-80 h-80 bg-gradient-to-r from-emerald-500/10 to-blue-500/10 rounded-full blur-3xl"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-gradient-to-r from-[#080D70]/5 to-[#2C7404]/5 rounded-full blur-3xl"></div>
    </div>

    <div class="relative z-10 max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10">
            <span class="inline-block px-4 py-1.5 bg-gradient-to-r from-[#080D70]/10 to-[#2C7404]/10 text-[#080D70] text-sm font-semibold rounded-full border border-[#080D70]/20 mb-4">
                Tentang Platform Kami
            </span>
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                Mengenal <span class="bg-gradient-to-r from-[#080D70] to-[#2C7404] bg-clip-text text-transparent">bkerjo.com</span>
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                Portal lowongan kerja terpercaya yang berfokus pada pengembangan karir dan peningkatan skill di wilayah Bengkulu
            </p>
        </div>
    </div>
</section>

<!-- Main Content -->
<section class="relative py-12 md:py-16 bg-gradient-to-b from-white to-gray-50/50">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Overview Card -->
        <div class="bg-white rounded-2xl shadow-xl p-8 md:p-10 mb-12 border border-gray-100">
            <div class="flex flex-col lg:flex-row items-start gap-8">
                <div class="lg:w-2/3">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Siapa Kami?</h2>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        <span class="font-semibold text-[#080D70]">bkerjo.com</span> adalah platform digital pencarian kerja dan pelatihan yang secara khusus berfokus pada wilayah Bengkulu dan sekitarnya. Kami hadir sebagai jembatan antara pencari kerja dengan perusahaan terpercaya, menyediakan layanan yang <span class="font-semibold text-[#2C7404]">gratis, cepat, dan aman</span>.
                    </p>
                    <p class="text-gray-600 leading-relaxed">
                        Selain menyediakan berbagai lowongan kerja yang terverifikasi, bkerjo.com juga menghadirkan akses ke pelatihan gratis yang dikurasi dari berbagai platform dan sumber terpercaya. Tujuan kami adalah membantu meningkatkan keterampilan dan daya saing pencari kerja di Bengkulu.
                    </p>
                </div>
                <div class="lg:w-1/3">
                    <div class="bg-gradient-to-br from-[#080D70]/5 to-[#2C7404]/5 rounded-xl p-6 border border-gray-100">
                        <div class="flex items-center space-x-4 mb-4">
                            <div class="w-12 h-12 bg-gradient-to-r from-[#080D70] to-[#2C7404] rounded-lg flex items-center justify-center">
                                <i class="fas fa-bullseye text-white text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-900">Fokus Lokal</h3>
                                <p class="text-sm text-gray-500">Khusus untuk Bengkulu</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-4 mb-4">
                            <div class="w-12 h-12 bg-gradient-to-r from-[#080D70] to-[#2C7404] rounded-lg flex items-center justify-center">
                                <i class="fas fa-shield-alt text-white text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-900">Lowongan Terverifikasi</h3>
                                <p class="text-sm text-gray-500">Berusaha menjaga dari penipuan</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-gradient-to-r from-[#080D70] to-[#2C7404] rounded-lg flex items-center justify-center">
                                <i class="fas fa-graduation-cap text-white text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-900">Pelatihan Gratis</h3>
                                <p class="text-sm text-gray-500">Tingkatkan skill Anda</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Visi & Misi Section -->
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <!-- Visi Card -->
            <div class="bg-gradient-to-br from-[#080D70] to-[#2C7404] rounded-2xl p-8 text-white shadow-xl transform hover:-translate-y-1 transition-transform duration-300">
                <div class="flex items-center mb-6">
                    <h2 class="text-2xl font-bold">Visi Kami</h2>
                </div>
                <p class="text-lg leading-relaxed">
                    Menjadi portal lowongan kerja lokal <span class="font-bold">terbaik dan terpercaya</span>, khususnya dalam mendukung perkembangan karir dan ekonomi di wilayah Bengkulu.
                </p>
                <div class="mt-6 pt-6 border-t border-white/20">
                    <p class="text-sm opacity-90">
                        <i class="fas fa-check-circle mr-2"></i>
                        Terdepan dalam kualitas layanan
                    </p>
                    <p class="text-sm opacity-90 mt-2">
                        <i class="fas fa-check-circle mr-2"></i>
                        Dipercaya oleh perusahaan dan pencari kerja
                    </p>
                </div>
            </div>

            <!-- Misi Card -->
            <div class="bg-white rounded-2xl p-8 shadow-xl border border-gray-100 transform hover:-translate-y-1 transition-transform duration-300">
                <div class="flex items-center mb-6">
                    <h2 class="text-2xl font-bold text-gray-900">Misi Kami</h2>
                </div>
                <ul class="space-y-4">
                    <li class="flex items-start">
                        <div class="flex-shrink-0 w-8 h-8 bg-gradient-to-r from-[#080D70]/10 to-[#2C7404]/10 rounded-lg flex items-center justify-center mr-3 mt-1">
                            <i class="fas fa-check text-[#2C7404] text-sm"></i>
                        </div>
                        <span class="text-gray-700">Menyediakan lowongan kerja yang telah diverifikasi keasliannya</span>
                    </li>
                    <li class="flex items-start">
                        <div class="flex-shrink-0 w-8 h-8 bg-gradient-to-r from-[#080D70]/10 to-[#2C7404]/10 rounded-lg flex items-center justify-center mr-3 mt-1">
                            <i class="fas fa-check text-[#2C7404] text-sm"></i>
                        </div>
                        <span class="text-gray-700">Mendukung pelatihan & peningkatan skill melalui kurasi materi berkualitas</span>
                    </li>
                    <li class="flex items-start">
                        <div class="flex-shrink-0 w-8 h-8 bg-gradient-to-r from-[#080D70]/10 to-[#2C7404]/10 rounded-lg flex items-center justify-center mr-3 mt-1">
                            <i class="fas fa-check text-[#2C7404] text-sm"></i>
                        </div>
                        <span class="text-gray-700">Membantu UMKM & perusahaan lokal dalam merekrut tenaga kerja yang tepat</span>
                    </li>
                    <li class="flex items-start">
                        <div class="flex-shrink-0 w-8 h-8 bg-gradient-to-r from-[#080D70]/10 to-[#2C7404]/10 rounded-lg flex items-center justify-center mr-3 mt-1">
                            <i class="fas fa-check text-[#2C7404] text-sm"></i>
                        </div>
                        <span class="text-gray-700">Berkontribusi dalam mengurangi angka pengangguran di daerah Bengkulu</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Commitment & Values -->
        <div class="grid lg:grid-cols-3 gap-8 mb-12">
            <!-- Komitmen Utama -->
            <div class="lg:col-span-2 bg-gradient-to-r from-[#080D70] to-[#2C7404] rounded-2xl p-8 text-white shadow-xl">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center mr-4">
                        <i class="fas fa-handshake text-white text-xl"></i>
                    </div>
                    <h2 class="text-2xl font-bold">Komitmen Kami</h2>
                </div>
                <p class="text-lg mb-6">
                    bkerjo.com berkomitmen untuk <span class="font-bold">tidak memungut biaya apapun</span> kepada pencari kerja. Kami menjaga keamanan data pengguna dan memastikan setiap lowongan yang dipublikasikan telah melalui proses verifikasi.
                </p>
                <div class="grid sm:grid-cols-2 gap-4">
                    <div class="bg-white/10 rounded-xl p-4 backdrop-blur-sm">
                        <div class="flex items-center mb-2">
                            <i class="fas fa-lock text-white/80 mr-2"></i>
                            <h4 class="font-bold">Data Aman</h4>
                        </div>
                        <p class="text-sm opacity-90">Privasi pengguna adalah prioritas kami</p>
                    </div>
                    <div class="bg-white/10 rounded-xl p-4 backdrop-blur-sm">
                        <div class="flex items-center mb-2">
                            <i class="fas fa-check-circle text-white/80 mr-2"></i>
                            <h4 class="font-bold">Verifikasi Ketat</h4>
                        </div>
                        <p class="text-sm opacity-90">Lowongan diperiksa sebelum ditayangkan</p>
                    </div>
                </div>
            </div>

            <!-- Statistik -->
            <div class="bg-white rounded-2xl p-8 shadow-xl border border-gray-100">
                <h3 class="text-xl font-bold text-gray-900 mb-6">Dalam Angka</h3>
                <div class="space-y-6">
                    <div>
                        <div class="flex items-baseline mb-1">
                            <span class="text-3xl font-bold text-[#080D70]">1.000+</span>
                        </div>
                        <p class="text-gray-600 text-sm">Pencari kerja di platform</p>
                    </div>
                    <div class="pt-4 border-t border-gray-100">
                        <div class="flex items-baseline mb-1">
                            <span class="text-3xl font-bold text-[#2C7404]">100%</span>
                        </div>
                        <p class="text-gray-600 text-sm">Gratis untuk pencari kerja</p>
                    </div>
                    <div class="pt-4 border-t border-gray-100">
                        <div class="flex items-baseline mb-1">
                            <span class="text-3xl font-bold text-[#080D70]">24 Jam</span>
                        </div>
                        <p class="text-gray-600 text-sm">Lowongan diverifikasi admin</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="text-center">
            <div class="max-w-2xl mx-auto bg-gradient-to-r from-[#080D70]/5 via-white to-[#2C7404]/5 rounded-2xl p-8 border border-gray-200">
                <h2 class="text-2xl font-bold text-gray-900 mb-4">Siap Memulai Perjalanan Karir Anda?</h2>
                <p class="text-gray-600 mb-6">
                    Bergabunglah dengan ribuan pencari kerja di Bengkulu yang telah menemukan peluang melalui bkerjo.com
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#" 
                       class="px-6 py-3 bg-gradient-to-r from-[#080D70] to-[#2C7404] text-white font-semibold rounded-xl hover:shadow-lg transition-shadow duration-300">
                        <i class="fas fa-search mr-2"></i>Cari Lowongan Sekarang
                    </a>
                    <a href="#" 
                       class="px-6 py-3 bg-white text-[#080D70] font-semibold rounded-xl border border-[#080D70] hover:bg-[#080D70]/5 transition-colors duration-300">
                        <i class="fas fa-briefcase mr-2"></i>Pasang Lowongan Gratis
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection