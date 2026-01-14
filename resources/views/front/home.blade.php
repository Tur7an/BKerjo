@extends('front.layout')

@section('content')

<!-- HERO SECTION -->
<section aria-label="Hero" class="bg-gradient-to-br from-[#080D70] via-[#1a4e91] to-[#2C7404] rounded-3xl md:rounded-[2rem] px-6 md:px-10 py-10 md:py-14 text-white relative overflow-hidden">
  
  <!-- Background Elements -->
  <div class="absolute inset-0 overflow-hidden">
    <div class="absolute -top-10 -left-10 w-40 h-40 bg-gradient-to-r from-blue-500/15 to-green-500/15 rounded-full blur-2xl"></div>
    <div class="absolute -bottom-10 -right-10 w-48 h-48 bg-gradient-to-r from-green-500/10 to-blue-500/10 rounded-full blur-2xl"></div>
  </div>

  <div class="relative z-10 max-w-6xl mx-auto">
    
    <!-- Main Heading - Single Line -->
    <div class="text-center mb-8 md:mb-10">
      <div class="inline-flex items-center gap-2 mb-4 px-3 py-1 bg-white/10 backdrop-blur-sm rounded-full border border-white/20">
        <span class="w-1.5 h-1.5 bg-green-400 rounded-full animate-pulse"></span>
        <span class="text-xs font-medium">#1 Job Portal di Bengkulu</span>
      </div>
      
      <!-- Heading -->
      <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight">
        <span class="bg-clip-text text-transparent bg-gradient-to-r from-white via-blue-100 to-green-100">
          Portal Nyari Lokak di Bengkulu
        </span>
      </h1>
      
      <!-- Tagline -->
      <p class="text-lg md:text-xl text-blue-100 max-w-2xl mx-auto mt-4 mb-6">
        Cari Lokak sampai dapek
      </p>
    </div>

    <!-- Search Panel -->
    <div class="bg-white/10 backdrop-blur-xl rounded-2xl p-4 md:p-6 shadow-2xl shadow-black/20 border border-white/20">
      
      <!-- Row Search Form -->
      <div class="flex flex-col md:flex-row gap-3 md:gap-4 items-stretch">
        
        <!-- Search Input -->
        <div class="flex-1">
          <div class="relative h-full">
            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
              <i class="fas fa-search text-gray-400"></i>
            </div>
            <input 
              type="text" 
              placeholder="Cari Lokak..." 
              class="w-full h-full pl-12 pr-4 py-4 bg-white/95 border border-white/30 rounded-xl text-gray-800 placeholder-gray-600 focus:outline-none focus:ring-2 focus:ring-white/50 focus:border-transparent transition-all shadow-sm"
            >
          </div>
        </div>
        
        <!-- Location Select -->
        <div class="flex-1">
          <div class="relative h-full">
            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
              <i class="fas fa-map-marker-alt text-gray-400"></i>
            </div>
            <select 
              class="w-full h-full pl-12 pr-10 py-4 bg-white/95 border border-white/30 rounded-xl text-gray-800 appearance-none focus:outline-none focus:ring-2 focus:ring-white/50 focus:border-transparent transition-all shadow-sm cursor-pointer"
            >
              <option value="">Semua Lokasi Bengkulu</option>
              <option value="Bengkulu Kota">Kota Bengkulu</option>
              <option value="Bengkulu Utara">Bengkulu Utara</option>
              <option value="Bengkulu Selatan">Bengkulu Selatan</option>
              <option value="Bengkulu Tengah">Bengkulu Tengah</option>
              <option value="Rejang Lebong">Rejang Lebong</option>
              <option value="Kepahiang">Kepahiang</option>
              <option value="Lebong">Lebong</option>
              <option value="Muko Muko">Muko Muko</option>
              <option value="Seluma">Seluma</option>
              <option value="Kaur">Kaur</option>
            </select>
            <div class="absolute inset-y-0 right-0 pr-4 flex items-center pointer-events-none">
              <i class="fas fa-chevron-down text-gray-400"></i>
            </div>
          </div>
        </div>
        
        <!-- Job Type Select -->
        <div class="flex-1">
          <div class="relative h-full">
            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
              <i class="fas fa-briefcase text-gray-400"></i>
            </div>
            <select 
              class="w-full h-full pl-12 pr-10 py-4 bg-white/95 border border-white/30 rounded-xl text-gray-800 appearance-none focus:outline-none focus:ring-2 focus:ring-white/50 focus:border-transparent transition-all shadow-sm cursor-pointer"
            >
              <option value="">Semua Tipe Pekerjaan</option>
              <option value="penuhWaktu">Penuh Waktu</option>
              <option value="paruhWaktu">Paruh Waktu</option>
              <option value="kontrak">Kontrak</option>
              <option value="magang">Magang</option>
              <option value="pekerjaLepas">Pekerja Lepas</option>
              <option value="jarakJauh">Jarak Jauh</option>
            </select>
            <div class="absolute inset-y-0 right-0 pr-4 flex items-center pointer-events-none">
              <i class="fas fa-chevron-down text-gray-400"></i>
            </div>
          </div>
        </div>
        
        <!-- Search Button -->
        <div class="md:w-auto">
          <button 
            class="w-full md:w-auto h-full min-w-[180px] bg-gradient-to-r from-white-300 to-blue-600 hover:from-white-400 hover:to-blue-700 text-[#080D70] font-bold py-4 px-6 rounded-xl transition-all duration-300 transform hover:scale-[1.02] hover:shadow-lg active:scale-95 shadow-md flex items-center justify-center gap-3 group"
          >
            <i class="fas fa-search group-hover:rotate-12 transition-transform"></i>
            <span class="text-lg font-semibold text-white">Cari Lowongan</span>
          </button>
        </div>
        
      </div>
      
      <!-- Quick Filters -->
      <div class="mt-6 pt-6 border-t border-white/20">
        <div class="flex flex-wrap items-center justify-center gap-3">
          <span class="text-white/80 text-sm font-medium">Pilihan cepat:</span>
          <a href="#" class="px-4 py-2 bg-white/20 hover:bg-white/30 text-white rounded-full text-sm font-medium transition-all backdrop-blur-sm border border-white/30 hover:border-white/50">
            IT & Programmer
          </a>
          <a href="#" class="px-4 py-2 bg-white/20 hover:bg-white/30 text-white rounded-full text-sm font-medium transition-all backdrop-blur-sm border border-white/30 hover:border-white/50">
            Marketing
          </a>
          <a href="#" class="px-4 py-2 bg-white/20 hover:bg-white/30 text-white rounded-full text-sm font-medium transition-all backdrop-blur-sm border border-white/30 hover:border-white/50">
            Admin & Keuangan
          </a>
          <a href="#" class="px-4 py-2 bg-white/20 hover:bg-white/30 text-white rounded-full text-sm font-medium transition-all backdrop-blur-sm border border-white/30 hover:border-white/50">
            Teknik & Produksi
          </a>
        </div>
      </div>
    </div>
    
  </div>
</section>

<!-- END SECTION HERO -->

<!-- SECTION FEATURED JOBS -->

<section aria-label="Featured Jobs">
  <div class="flex justify-between items-center mt-20 mb-6">
    <h2 class="text-xl font-bold text-gray-800">Rekomendasi Lowongan</h2>
    <a href="{{ route('jobs.index') }}" class="text-[#080D70] font-semibold hover:underline">
        Lihat Semua Lowongan →
    </a>
</div>

<div class="grid md:grid-cols-3 gap-6">
  @for($i=0; $i<3; $i++)
  @include('front.components.job-card')
  @endfor
</div>

</section>

<!-- END SECTION FEATURED JOBS -->

<!-- SECTION TRAINING -->

<section aria-label="Training" class="mt-16 md:mt-24 bg-gradient-to-br from-[#080D70] via-[#1a4e91] to-[#2C7404] rounded-3xl p-6 md:p-10 text-white relative overflow-hidden">
  
  <!-- Background Elements -->
  <div class="absolute inset-0 overflow-hidden">
    <div class="absolute top-0 right-0 w-64 h-64 bg-gradient-to-br from-white/10 to-transparent rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 left-0 w-80 h-80 bg-gradient-to-tr from-green-500/10 to-transparent rounded-full blur-3xl"></div>
  </div>

  <div class="relative z-10">
    <!-- Section Header -->
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 md:mb-12 gap-4">
      <div>
        <h2 class="text-3xl md:text-4xl font-bold mb-2">
          Temukan Pelatihan dari
          <span class="bg-gradient-to-r from-white to-blue-200 bg-clip-text text-transparent">
            bkerjo.com
          </span>
        </h2>
        <p class="text-blue-100 text-lg hidden md:block">
          Tingkatkan skillmu dengan pelatihan GRATIS
        </p>
      </div>

      <a href="{{ route('pelatihan') }}"
         class="bg-white hover:bg-gray-50 text-[#080D70] px-6 py-3 rounded-full font-bold transition-all duration-300 transform hover:scale-105 hover:shadow-lg shadow-md flex items-center gap-2">
         Lihat Semua Pelatihan
         <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
      </a>
    </div>

    <!-- Training Cards Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      
      <!-- Training Card 1 - From dicoding.com -->
      <div class="group bg-white/10 backdrop-blur-lg rounded-2xl p-6 border border-white/20 hover:border-white/40 transition-all duration-300 hover:bg-white/15">
        <div class="flex gap-5">
          <!-- Image Container -->
          <div class="relative flex-shrink-0">
            <div class="w-24 h-24 rounded-xl bg-gradient-to-br from-blue-500 to-green-500 flex items-center justify-center overflow-hidden shadow-lg">
              <i class="fas fa-file-excel text-3xl text-white"></i>
            </div>
            <!-- Free Badge -->
            <div class="absolute -top-2 -right-2 bg-gradient-to-r from-[#2C7404] to-green-500 text-white text-xs font-bold px-3 py-1 rounded-full shadow-md">
              <i class="fas fa-gift mr-1"></i>GRATIS
            </div>
          </div>
          
          <!-- Content -->
          <div class="flex-1">
            <div class="flex justify-between items-start mb-2">
              <h3 class="text-xl font-bold text-white group-hover:text-blue-100 transition-colors">
                Ms. Excel Mastery
              </h3>
              <span class="text-xs font-semibold bg-white/20 px-3 py-1 rounded-full text-white">
                Online
              </span>
            </div>
            
            <!-- Provider Info -->
            <div class="flex items-center gap-2 text-blue-100 text-sm mb-3">
              <div class="flex items-center gap-1.5 px-3 py-1 bg-white/10 rounded-full">
                <i class="fas fa-building text-xs"></i>
                <span class="font-semibold text-white">dicoding.com</span>
              </div>
            </div>
            
            <p class="text-blue-100 text-sm leading-relaxed mb-4">
              Pelajari Excel dari dasar hingga mahir. Kuasai formula, pivot table, dan data analysis untuk meningkatkan produktivitas kerja.
            </p>
            
            <!-- Features -->
            <div class="flex flex-wrap items-center gap-4 text-sm text-blue-100 mb-4">
              <div class="flex items-center gap-2">
                <i class="fas fa-certificate text-xs text-green-300"></i>
                <span>Sertifikat</span>
              </div>
            </div>
            
            <!-- CTA Button -->
            <a href="#" class="inline-flex items-center gap-2 bg-white hover:bg-gray-100 text-[#080D70] font-semibold px-5 py-2.5 rounded-lg transition-all duration-300 group/cta shadow-md hover:shadow-lg">
              Daftar Sekarang
              <i class="fas fa-arrow-right group-hover/cta:translate-x-1 transition-transform"></i>
            </a>
          </div>
        </div>
      </div>
      
      <!-- Training Card 2 - From skillacademy.com -->
      <div class="group bg-white/10 backdrop-blur-lg rounded-2xl p-6 border border-white/20 hover:border-white/40 transition-all duration-300 hover:bg-white/15">
        <div class="flex gap-5">
          <!-- Image Container -->
          <div class="relative flex-shrink-0">
            <div class="w-24 h-24 rounded-xl bg-gradient-to-br from-purple-500 to-pink-500 flex items-center justify-center overflow-hidden shadow-lg">
              <i class="fas fa-chart-line text-3xl text-white"></i>
            </div>
            <!-- Free Badge -->
            <div class="absolute -top-2 -right-2 bg-gradient-to-r from-[#2C7404] to-green-500 text-white text-xs font-bold px-3 py-1 rounded-full shadow-md">
              <i class="fas fa-gift mr-1"></i>GRATIS
            </div>
          </div>
          
          <!-- Content -->
          <div class="flex-1">
            <div class="flex justify-between items-start mb-2">
              <h3 class="text-xl font-bold text-white group-hover:text-blue-100 transition-colors">
                Data Analysis Fundamentals
              </h3>
              <span class="text-xs font-semibold bg-white/20 px-3 py-1 rounded-full text-white">
                Online
              </span>
            </div>
            
            <!-- Provider Info -->
            <div class="flex items-center gap-2 text-blue-100 text-sm mb-3">
              <div class="flex items-center gap-1.5 px-3 py-1 bg-white/10 rounded-full">
                <i class="fas fa-graduation-cap text-xs"></i>
                <span class="font-semibold text-white">skillacademy.com</span>
              </div>
            </div>
            
            <p class="text-blue-100 text-sm leading-relaxed mb-4">
              Pelatihan dasar analisis data menggunakan tools populer. Cocok untuk pemula yang ingin memulai karir di bidang data.
            </p>
            
            <!-- Features -->
            <div class="flex flex-wrap items-center gap-4 text-sm text-blue-100 mb-4">
              <div class="flex items-center gap-2">
                <i class="fas fa-certificate text-xs text-green-300"></i>
                <span>Sertifikat</span>
              </div>
            </div>
            
            <!-- CTA Button -->
            <a href="#" class="inline-flex items-center gap-2 bg-white hover:bg-gray-100 text-[#080D70] font-semibold px-5 py-2.5 rounded-lg transition-all duration-300 group/cta shadow-md hover:shadow-lg">
              Daftar Sekarang
              <i class="fas fa-arrow-right group-hover/cta:translate-x-1 transition-transform"></i>
            </a>
          </div>
        </div>
      </div>
      
    </div>
    
    <!-- All Free Benefits -->
    <div class="mt-12 pt-10 border-t border-white/20">
      <div class="text-center mb-8">
        <h3 class="text-2xl font-bold text-white mb-3">Semua Pelatihan <span class="text-green-300">100% GRATIS</span></h3>
        <p class="text-blue-100 max-w-2xl mx-auto">
          Kami membantu anda menemukan pelatihan dari platform terbaik menyediakan pelatihan berkualitas tanpa biaya
        </p>
      </div>
      </div>
    </div>
  </div>
</section>

<!-- END SECTION TRAINING -->

<!-- SECTION PROMO & SERVICES -->

<section class="mt-16 md:mt-24">
  <div class="max-w-6xl mx-auto px-4 sm:px-6">
    
    <!-- Promo Card - Pasang Lowongan Gratis -->
    <div class="mb-16 md:mb-20">
      <div class="group bg-gradient-to-br from-white via-white to-blue-50 rounded-3xl p-8 md:p-10 shadow-2xl shadow-blue-200/30 border-2 border-[#080D70] relative overflow-hidden">
        <!-- Animated Background -->
        <div class="absolute inset-0">
          <div class="absolute top-0 left-0 w-64 h-64 bg-gradient-to-br from-[#080D70]/5 to-[#2C7404]/5 rounded-full blur-3xl"></div>
          <div class="absolute bottom-0 right-0 w-80 h-80 bg-gradient-to-tl from-[#2C7404]/5 to-[#080D70]/5 rounded-full blur-3xl"></div>
        </div>
        
        <div class="relative z-10">
          <div class="flex flex-col lg:flex-row items-center gap-8 md:gap-10">
            <!-- Icon/Badge -->
            <div class="relative flex-shrink-0">
              <div class="absolute -inset-4 bg-gradient-to-r from-[#080D70]/20 to-[#2C7404]/20 rounded-2xl blur-xl animate-pulse"></div>
              <div class="relative w-24 h-24 md:w-28 md:h-28 bg-white border-3 border-[#080D70] rounded-2xl flex flex-col items-center justify-center shadow-xl">
                <div class="text-4xl font-bold text-[#080D70]">+</div>
                <div class="text-center font-bold text-[#080D70] text-sm mt-1 leading-tight">
                  Pasang<br>Loker
                </div>
              </div>
              <!-- Floating Badge -->
              <div class="absolute -top-3 -right-3 bg-gradient-to-r from-[#2C7404] to-green-600 text-white text-xs font-bold px-3 py-1.5 rounded-full shadow-lg animate-bounce">
                GRATIS
              </div>
            </div>
            
            <!-- Content -->
            <div class="flex-1 text-center lg:text-left">
              <!-- Badge -->
              <div class="inline-flex items-center gap-2 px-4 py-1.5 bg-gradient-to-r from-[#080D70] to-[#2C7404] rounded-full mb-4 shadow-md">
                <span class="w-2 h-2 bg-white rounded-full animate-pulse"></span>
                <span class="text-white text-sm font-bold">PROMO BKERJO.COM</span>
              </div>
              
              <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4 leading-tight">
                Pasang Lowongan Kerja 
                <span class="bg-gradient-to-r from-[#080D70] to-[#2C7404] bg-clip-text text-transparent">
                  GRATIS
                </span>
                di bkerjo.com
              </h3>
              
              <p class="text-gray-700 mb-6 max-w-2xl text-lg">
                Rekrut talenta terbaik di Bengkulu tanpa biaya. Akses pencari kerja berkualitas langsung ke perusahaan Anda.
              </p>
              
              <!-- Stats -->
              <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-8">
                <div class="bg-white/80 backdrop-blur-sm rounded-xl p-4 border border-gray-200 shadow-sm">
                  <div class="text-2xl font-bold text-[#080D70] mb-1">1.000+</div>
                  <div class="text-sm text-gray-600">Pencari Kerja</div>
                </div>
                <div class="bg-white/80 backdrop-blur-sm rounded-xl p-4 border border-gray-200 shadow-sm">
                  <div class="text-2xl font-bold text-[#2C7404] mb-1">30+ Hari</div>
                  <div class="text-sm text-gray-600">Masa Tayang</div>
                </div>
                <div class="bg-white/80 backdrop-blur-sm rounded-xl p-4 border border-gray-200 shadow-sm">
                  <div class="text-2xl font-bold text-purple-600 mb-1">100%</div>
                  <div class="text-sm text-gray-600">Gratis</div>
                </div>
              </div>
              
              <!-- CTA Button -->
              <div class="flex flex-col sm:flex-row gap-4 items-center">
                <a href="/company/submit"
                   class="inline-flex items-center gap-3 bg-gradient-to-r from-[#080D70] to-[#2C7404] hover:from-[#05084d] hover:to-[#1e5a03] text-white px-8 py-4 rounded-full font-bold text-lg transition-all duration-300 transform hover:scale-105 hover:shadow-xl shadow-lg group/cta">
                  <i class="fas fa-plus-circle text-xl group-hover/cta:rotate-90 transition-transform"></i>
                  Pasang Lowongan Sekarang
                </a>
                <div class="text-gray-600 text-sm flex items-center gap-2">
                  <i class="fas fa-shield-alt text-[#2C7404]"></i>
                  <span>Aman & terverifikasi</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Services Grid - 3 Horizontal Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      
      <!-- Card 1: Layanan CV Profesional -->
      <div class="group bg-gradient-to-br from-[#080D70] via-[#1a4e91] to-[#080D70] rounded-2xl p-6 text-white overflow-hidden relative h-full">
        <!-- Background Effects -->
        <div class="absolute inset-0">
          <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-bl from-white/10 to-transparent rounded-full blur-2xl"></div>
        </div>
        
        <div class="relative z-10 h-full flex flex-col">
          <!-- Header -->
          <div class="mb-6">
            <div class="flex items-start justify-between">
              <div class="flex-1">
                <div class="inline-flex items-center gap-2 px-3 py-1 bg-white/20 backdrop-blur-sm rounded-full mb-3">
                  <span class="w-2 h-2 bg-yellow-400 rounded-full animate-pulse"></span>
                  <span class="text-sm font-bold">Coming Soon</span>
                </div>
                <h3 class="text-xl font-bold mb-2">Layanan CV Profesional</h3>
              </div>
              <div class="w-12 h-12 rounded-lg bg-white/10 backdrop-blur-sm border border-white/20 flex items-center justify-center flex-shrink-0">
                <i class="fas fa-file-alt text-lg"></i>
              </div>
            </div>
            <p class="text-blue-100 text-sm">
              bkerjo.com akan menghadirkan layanan pembuatan dan review CV untuk meningkatkan peluang karir Anda.
            </p>
          </div>
          
          <!-- Services Icons -->
          <div class="grid grid-cols-3 gap-3 mb-6">
            <div class="text-center">
              <div class="w-12 h-12 rounded-lg bg-white/10 mx-auto mb-2 flex items-center justify-center border border-white/20">
                <i class="fas fa-robot"></i>
              </div>
              <div class="text-xs font-medium">CV ATS</div>
            </div>
            <div class="text-center">
              <div class="w-12 h-12 rounded-lg bg-white/10 mx-auto mb-2 flex items-center justify-center border border-white/20">
                <i class="fas fa-palette"></i>
              </div>
              <div class="text-xs font-medium">CV Kreatif</div>
            </div>
            <div class="text-center">
              <div class="w-12 h-12 rounded-lg bg-white/10 mx-auto mb-2 flex items-center justify-center border border-white/20">
                <i class="fas fa-search"></i>
              </div>
              <div class="text-xs font-medium">Review CV</div>
            </div>
          </div>
          
          <!-- CTA Button - Sticky to Bottom -->
          <div class="mt-auto">
            <button class="w-full bg-white/20 hover:bg-white/30 text-white font-medium py-3 rounded-lg transition-all duration-300 border border-white/30 hover:border-white/50 backdrop-blur-sm flex items-center justify-center gap-2 text-sm group/btn">
              <i class="far fa-clock"></i>
              Coming Soon
            </button>
          </div>
        </div>
      </div>
      
      <!-- Card 2: Jasa Pembuatan Website -->
      <div class="group bg-gradient-to-br from-[#2C7404] via-green-600 to-[#2C7404] rounded-2xl p-6 text-white overflow-hidden relative h-full">
        <!-- Background Effects -->
        <div class="absolute inset-0">
          <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-bl from-white/10 to-transparent rounded-full blur-2xl"></div>
        </div>
        
        <div class="relative z-10 h-full flex flex-col">
          <!-- Header -->
          <div class="mb-6">
            <div class="flex items-start justify-between">
              <div class="flex-1">
                <h3 class="text-xl font-bold mb-2">Jasa Pembuatan Website</h3>
                <p class="text-green-100 text-sm">
                  Butuh website atau aplikasi untuk bisnis Anda? Tim kami siap membantu.
                </p>
              </div>
              <div class="w-12 h-12 rounded-lg bg-white/10 backdrop-blur-sm border border-white/20 flex items-center justify-center flex-shrink-0">
                <i class="fas fa-code text-lg"></i>
              </div>
            </div>
          </div>
          
          <!-- Services List -->
          <div class="space-y-3 mb-6">
            <div class="flex items-center gap-3">
              <div class="w-10 h-10 rounded-lg bg-white/10 flex items-center justify-center flex-shrink-0">
                <i class="fas fa-laptop-code text-sm"></i>
              </div>
              <div>
                <div class="font-medium text-sm">Website Perusahaan</div>
                <div class="text-green-100 text-xs">Profesional & Responsif</div>
              </div>
            </div>
            <div class="flex items-center gap-3">
              <div class="w-10 h-10 rounded-lg bg-white/10 flex items-center justify-center flex-shrink-0">
                <i class="fas fa-mobile-alt text-sm"></i>
              </div>
              <div>
                <div class="font-medium text-sm">Aplikasi</div>
                <div class="text-green-100 text-xs">Mobile & Desktop</div>
              </div>
            </div>
            <div class="flex items-center gap-3">
              <div class="w-10 h-10 rounded-lg bg-white/10 flex items-center justify-center flex-shrink-0">
                <i class="fas fa-store text-sm"></i>
              </div>
              <div>
                <div class="font-medium text-sm">E-commerce</div>
                <div class="text-green-100 text-xs">Toko Online</div>
              </div>
            </div>
          </div>
          
          <!-- CTA Button - Sticky to Bottom -->
          <div class="mt-auto">
            <a href="#" 
               class="w-full bg-white hover:bg-gray-100 text-[#2C7404] font-medium py-3 rounded-lg transition-all duration-300 transform hover:scale-[1.02] shadow-md flex items-center justify-center gap-2 text-sm">
              <i class="fas fa-comment-dots"></i>
              Konsultasi Gratis
            </a>
          </div>
        </div>
      </div>
      
      <!-- Card 3: Waspada Penipuan! -->
      <div class="group bg-gradient-to-br from-red-600 via-red-500 to-red-600 rounded-2xl p-6 text-white overflow-hidden relative h-full">
        <!-- Background Effects -->
        <div class="absolute inset-0">
          <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-bl from-white/10 to-transparent rounded-full blur-2xl"></div>
        </div>
        
        <div class="relative z-10 h-full flex flex-col">
          <!-- Header -->
          <div class="mb-6">
            <div class="flex items-start gap-3">
              <div class="w-12 h-12 rounded-lg bg-white/10 backdrop-blur-sm border border-white/20 flex items-center justify-center flex-shrink-0">
                <i class="fas fa-shield-alt text-lg"></i>
              </div>
              <div class="flex-1">
                <h3 class="text-xl font-bold mb-2">Waspada Penipuan!</h3>
                <p class="text-red-100 text-sm">
                  bkerjo.com <span class="font-bold text-white">TIDAK PERNAH</span> memungut biaya dari pencari kerja di setiap lowongan kerja.
                </p>
              </div>
            </div>
          </div>
          
          <!-- Warning Points -->
          <div class="space-y-3 mb-6">
            <div class="flex items-center gap-2">
              <i class="fas fa-ban text-yellow-300 text-sm"></i>
              <span class="text-sm">Tidak ada biaya administrasi</span>
            </div>
            <div class="flex items-center gap-2">
              <i class="fas fa-ban text-yellow-300 text-sm"></i>
              <span class="text-sm">Tidak meminta transfer uang</span>
            </div>
            <div class="flex items-center gap-2">
              <i class="fas fa-check-circle text-green-300 text-sm"></i>
              <span class="text-sm">Verifikasi perusahaan</span>
            </div>
          </div>
          
          <!-- CTA Button & Contact - Sticky to Bottom -->
          <div class="mt-auto space-y-3">
            <a href="mailto:admin@bkerjo.com" 
               class="w-full bg-white/20 hover:bg-white/30 text-white font-medium py-3 rounded-lg transition-all duration-300 border border-white/30 hover:border-white/50 backdrop-blur-sm flex items-center justify-center gap-2 text-sm">
              <i class="fas fa-flag"></i>
              Laporkan
            </a>
            <div class="text-center">
              <p class="text-red-100 text-xs">
                <i class="fas fa-envelope mr-1"></i>
                admin@bkerjo.com
              </p>
            </div>
          </div>
        </div>
      </div>
      
    </div>
    
    <!-- Info Section Below Cards -->
    <div class="mt-12 p-6 bg-gradient-to-r from-gray-50 to-blue-50 rounded-2xl border border-gray-200">
      <div class="flex flex-col md:flex-row items-center gap-6">
        <div class="w-14 h-14 rounded-full bg-[#080D70]/10 flex items-center justify-center flex-shrink-0">
          <i class="fas fa-handshake text-[#080D70] text-2xl"></i>
        </div>
        <div class="flex-1 text-center md:text-left">
          <h4 class="font-bold text-gray-900 mb-2 text-lg">Komitmen Kami</h4>
          <p class="text-gray-700">
            bkerjo.com berkomitmen untuk menyediakan platform pencarian kerja yang aman, 
            transparan, dan bermanfaat bagi seluruh masyarakat Bengkulu. 
            Kami terus berinovasi untuk memberikan layanan terbaik.
          </p>
        </div>
        <div class="flex-shrink-0">
          <a href="{{ route('tentang') }}" 
             class="bg-[#080D70] hover:bg-[#05084d] text-white font-semibold px-6 py-3 rounded-xl transition-all duration-300 transform hover:scale-105 inline-flex items-center gap-2">
            <i class="fas fa-info-circle"></i>
            Tentang Kami
          </a>
        </div>
      </div>
    </div>
    
  </div>
</section>

@endsection
