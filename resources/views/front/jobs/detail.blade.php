@extends('front.layout')
@section('title','Detail Lowongan - BKerjo')

@section('content')

<!-- Hero Section -->
<section class="mb-8">
  <div class="max-w-6xl mx-auto px-4 sm:px-6">
    <!-- Breadcrumb -->
    <nav class="mb-6">
      <ol class="flex items-center gap-2 text-sm text-gray-600">
        <li>
          <a href="/" class="hover:text-[#080D70] transition-colors">Beranda</a>
        </li>
        <li><i class="fas fa-chevron-right text-xs"></i></li>
        <li>
          <a href="{{ route('jobs.index') }}" class="hover:text-[#080D70] transition-colors">Lowongan Kerja</a>
        </li>
        <li><i class="fas fa-chevron-right text-xs"></i></li>
        <li class="text-[#080D70] font-medium">Detail Lowongan</li>
      </ol>
    </nav>
    
    <!-- Job Header -->
    <div class="bg-gradient-to-r from-[#080D70] to-[#2C7404] rounded-3xl p-8 text-white relative overflow-hidden">
      <!-- Background Pattern -->
      <div class="absolute inset-0 overflow-hidden">
        <div class="absolute top-0 right-0 w-64 h-64 bg-gradient-to-bl from-white/10 to-transparent rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-80 h-80 bg-gradient-to-tr from-green-500/10 to-transparent rounded-full blur-3xl"></div>
      </div>
      
      <div class="relative z-10">
        <!-- Badge & Action -->
        <div class="flex justify-between items-center mb-6">
          <div class="inline-flex items-center gap-2 px-4 py-1.5 bg-white/20 backdrop-blur-sm rounded-full">
            <span class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></span>
            <span class="text-sm font-medium">Lowongan Aktif</span>
          </div>
          
          <button class="flex items-center gap-2 px-4 py-2 bg-white/20 hover:bg-white/30 backdrop-blur-sm rounded-lg border border-white/30 transition-all">
            <i class="fas fa-share-alt"></i>
            <span class="text-sm">Bagikan</span>
          </button>
        </div>
        
        <!-- Job Title & Company -->
        <div class="mb-8">
          <h1 class="text-3xl md:text-4xl font-bold mb-4">
            Frontend Developer
          </h1>
          
          <div class="flex items-center gap-3 mb-6">
            <div class="w-12 h-12 rounded-xl bg-white/10 backdrop-blur-sm border border-white/20 flex items-center justify-center">
              <i class="fas fa-building text-xl"></i>
            </div>
            <div>
              <div class="font-bold text-lg">PT Bengkulu Kerjo</div>
              <div class="text-blue-100 flex items-center gap-2 text-sm">
                <i class="fas fa-map-marker-alt"></i>
                <span>Kota Bengkulu, Bengkulu</span>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Quick Info -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
          <div class="bg-white/10 backdrop-blur-sm rounded-xl p-4 border border-white/20">
            <div class="flex items-center gap-3 mb-2">
              <div class="w-8 h-8 rounded-lg bg-white/10 flex items-center justify-center">
                <i class="fas fa-money-bill-wave"></i>
              </div>
              <div>
                <div class="text-sm text-blue-200">Gaji</div>
                <div class="text-lg font-bold">Rp 3 - 5 Juta</div>
              </div>
            </div>
          </div>
          
          <div class="bg-white/10 backdrop-blur-sm rounded-xl p-4 border border-white/20">
            <div class="flex items-center gap-3 mb-2">
              <div class="w-8 h-8 rounded-lg bg-white/10 flex items-center justify-center">
                <i class="fas fa-briefcase"></i>
              </div>
              <div>
                <div class="text-sm text-blue-200">Tipe Pekerjaan</div>
                <div class="text-lg font-bold">Full Time</div>
              </div>
            </div>
          </div>
          
          <div class="bg-white/10 backdrop-blur-sm rounded-xl p-4 border border-white/20">
            <div class="flex items-center gap-3 mb-2">
              <div class="w-8 h-8 rounded-lg bg-white/10 flex items-center justify-center">
                <i class="fas fa-calendar-alt"></i>
              </div>
              <div>
                <div class="text-sm text-blue-200">Diposting</div>
                <div class="text-lg font-bold">10 Jan 2025</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Main Content -->
<section class="max-w-6xl mx-auto px-4 sm:px-6">
  <div class="flex flex-col lg:flex-row gap-8">
    
    <!-- Left Content -->
    <div class="lg:w-2/3">
      <div class="bg-white rounded-2xl shadow-lg border border-gray-200 p-6">
        
        <!-- Tab Navigation -->
        <div class="border-b border-gray-200 mb-6">
          <div class="flex space-x-6">
            <div class="pb-3 border-b-2 border-[#080D70] text-[#080D70] font-semibold flex items-center gap-2">
              <i class="fas fa-file-alt"></i>
              <span>Deskripsi Pekerjaan</span>
            </div>
          </div>
        </div>
        
        <!-- Job Description Content -->
        <div class="space-y-6">
          <!-- Tanggung Jawab Utama -->
          <div class="bg-blue-50 rounded-xl p-6 border border-blue-100">
            <h3 class="font-bold text-gray-900 mb-4 flex items-center gap-2">
              <i class="fas fa-bullseye text-[#080D70]"></i>
              Tanggung Jawab Utama
            </h3>
            <ul class="space-y-3">
              <li class="flex items-start gap-3">
                <i class="fas fa-check-circle text-green-500 mt-1 flex-shrink-0"></i>
                <span>Mengembangkan aplikasi web modern menggunakan React.js dan Tailwind CSS</span>
              </li>
              <li class="flex items-start gap-3">
                <i class="fas fa-check-circle text-green-500 mt-1 flex-shrink-0"></i>
                <span>Implementasi UI/UX design dari tim desain menjadi code yang clean dan maintainable</span>
              </li>
              <li class="flex items-start gap-3">
                <i class="fas fa-check-circle text-green-500 mt-1 flex-shrink-0"></i>
                <span>Optimasi performa aplikasi untuk kecepatan loading dan user experience terbaik</span>
              </li>
              <li class="flex items-start gap-3">
                <i class="fas fa-check-circle text-green-500 mt-1 flex-shrink-0"></i>
                <span>Kolaborasi dengan tim backend untuk integrasi API dan sistem yang solid</span>
              </li>
              <li class="flex items-start gap-3">
                <i class="fas fa-check-circle text-green-500 mt-1 flex-shrink-0"></i>
                <span>Melakukan testing dan debugging untuk memastikan kualitas kode</span>
              </li>
            </ul>
          </div>
          
          <!-- Kualifikasi Pendidikan -->
          <div class="bg-gray-50 rounded-xl p-6 border border-gray-200">
            <h3 class="font-bold text-gray-900 mb-4 flex items-center gap-2">
              <i class="fas fa-graduation-cap text-[#080D70]"></i>
              Kualifikasi Pendidikan
            </h3>
            <ul class="space-y-2">
              <li class="flex items-center gap-2">
                <i class="fas fa-check text-green-500"></i>
                <span>D3/S1 Teknik Informatika, Ilmu Komputer, atau bidang terkait</span>
              </li>
            </ul>
          </div>
          
          <!-- Stats -->
          <div class="bg-gradient-to-r from-blue-50 to-gray-50 rounded-xl p-6 border border-gray-200">
            <h4 class="font-bold text-gray-900 mb-4">Status Lamaran</h4>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
              <div class="text-center">
                <div class="text-2xl font-bold text-[#080D70] mb-1">245</div>
                <div class="text-sm text-gray-600">Dilihat</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Right Sidebar -->
    <div class="lg:w-1/3">
      <div class="space-y-6">
        
        <!-- Apply Box -->
        <div class="bg-white rounded-2xl shadow-lg border border-gray-200 overflow-hidden">
          <div class="bg-gradient-to-r from-[#080D70] to-[#2C7404] p-6 text-white text-center">
            <h3 class="text-xl font-bold mb-2">Lamar Pekerjaan Ini</h3>
          </div>
          
          <div class="p-6 space-y-4">
            <!-- WhatsApp Button -->
            <a href="https://wa.me/628123456789" 
               target="_blank"
               class="block w-full bg-gradient-to-r from-green-500 to-green-600 hover:from-green-600 hover:to-green-700 text-white font-bold py-3.5 rounded-xl transition-all transform hover:scale-[1.02] shadow-md hover:shadow-lg flex items-center justify-center gap-3">
              <i class="fab fa-whatsapp text-xl"></i>
              <div class="text-left">
                <div class="font-bold">Lamar via WhatsApp</div>
              </div>
            </a>
            
            <!-- Email Button -->
            <a href="mailto:hrd@bkerjo.com" 
               class="block w-full bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white font-bold py-3.5 rounded-xl transition-all transform hover:scale-[1.02] shadow-md hover:shadow-lg flex items-center justify-center gap-3">
              <i class="fas fa-envelope text-xl"></i>
              <div class="text-left">
                <div class="font-bold">Lamar via Email</div>
              </div>
            </a>
            
            <!-- Security Note -->
            <div class="text-center text-sm text-gray-600 pt-4 border-t border-gray-200">
              <i class="fas fa-shield-alt text-[#2C7404] mr-1"></i>
              Data Anda aman & terproteksi
            </div>
          </div>
        </div>
        
        <!-- Company Info -->
        <div class="bg-white rounded-2xl shadow-lg border border-gray-200 p-6">
          <h4 class="font-bold text-gray-900 mb-4 flex items-center gap-2">
            <i class="fas fa-building text-[#080D70]"></i>
            Tentang Perusahaan
          </h4>
          <div class="pt-4 border-t border-gray-200">
            <a href="#" class="text-[#080D70] hover:text-[#05084d] font-medium flex items-center gap-2">
              <i class="fas fa-external-link-alt"></i>
              Kunjungi Website Perusahaan
            </a>
          </div>
        </div>
        
        <!-- Share Job -->
        <div class="bg-white rounded-2xl shadow-lg border border-gray-200 p-6">
          <h4 class="font-bold text-gray-900 mb-4">Bagikan Lowongan</h4>
          <div class="flex gap-3">
            <a href="#" class="w-10 h-10 rounded-lg bg-blue-100 hover:bg-blue-200 text-blue-600 flex items-center justify-center transition-colors">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="w-10 h-10 rounded-lg bg-pink-100 hover:bg-pink-200 text-pink-600 flex items-center justify-center transition-colors">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="#" class="w-10 h-10 rounded-lg bg-green-100 hover:bg-green-200 text-green-600 flex items-center justify-center transition-colors">
              <i class="fab fa-whatsapp"></i>
            </a>
            <a href="#" class="w-10 h-10 rounded-lg bg-gray-100 hover:bg-gray-200 text-gray-600 flex items-center justify-center transition-colors">
              <i class="fas fa-link"></i>
            </a>
          </div>
        </div>
        
      </div>
    </div>
    
  </div>
</section>

<!-- Similar Jobs Section -->
<section class="max-w-6xl mx-auto px-4 sm:px-6 mt-12">
  <div class="bg-gradient-to-r from-blue-50 to-gray-50 rounded-2xl p-6">
    <div class="flex justify-between items-center mb-6">
      <h2 class="text-xl font-bold text-gray-900">
        Lowongan Lainnya
      </h2>
      <a href="{{ route('jobs.index') }}" class="text-[#080D70] hover:text-[#05084d] font-semibold flex items-center gap-2">
        Lihat Semua
        <i class="fas fa-arrow-right"></i>
      </a>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
      @for($i = 0; $i < 3; $i++)
      <div class="bg-white rounded-lg p-4 shadow border border-gray-200 hover:shadow-md transition-shadow">
        <div class="flex justify-between items-start mb-3">
          <div>
            <h4 class="font-bold text-gray-900 mb-1">Backend Developer</h4>
            <p class="text-gray-600 text-sm">PT. Bengkulu Kerjo</p>
          </div>
          <span class="text-xs font-semibold bg-green-100 text-green-800 px-2 py-1 rounded">Full Time</span>
        </div>
        <div class="space-y-2 mb-4">
          <div class="flex items-center gap-2 text-gray-600 text-sm">
            <i class="fas fa-map-marker-alt"></i>
            <span>Kota Bengkulu</span>
          </div>
          <div class="flex items-center gap-2 text-gray-600 text-sm">
            <i class="fas fa-money-bill-wave"></i>
            <span>Rp 4 - 6 Juta</span>
          </div>
        </div>
        <a href="#" class="block text-center bg-[#080D70] hover:bg-[#05084d] text-white py-2 rounded-lg font-medium transition-colors text-sm">
          Lihat Detail
        </a>
      </div>
      @endfor
    </div>
  </div>
</section>

@endsection