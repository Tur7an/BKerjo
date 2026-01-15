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
            <li class="font-medium text-white">Syarat & Ketentuan</li>
          </ol>
        </nav>
        
        <h1 class="text-4xl md:text-5xl font-bold mb-4">
          <span class="bg-clip-text text-transparent bg-gradient-to-r from-white to-blue-200">
            Syarat & Ketentuan
          </span>
        </h1>
        <p class="text-blue-100 text-lg md:text-xl max-w-3xl mx-auto">
          Ketentuan penggunaan layanan bkerjo.com untuk pencari kerja dan perusahaan
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Main Content -->
<section class="max-w-4xl mx-auto px-4 sm:px-6">
  <div class="bg-white rounded-2xl shadow-lg border border-gray-200 p-6 md:p-8 mb-8">
    <!-- Last Updated -->
    <div class="flex items-center justify-between mb-8 pb-6 border-b border-gray-200">
      <div class="flex items-center gap-2 text-gray-600">
        <i class="fas fa-history"></i>
        <span class="text-sm">Terakhir diperbarui: 15 Januari 2025</span>
      </div>
    </div>
    
    <!-- Introduction -->
    <div class="mb-10">
      <div class="flex items-start gap-4 mb-6">
        <div class="w-14 h-14 rounded-xl bg-blue-100 flex items-center justify-center flex-shrink-0">
          <i class="fas fa-file-contract text-[#080D70] text-xl"></i>
        </div>
        <div>
          <h2 class="text-2xl font-bold text-gray-900 mb-3">Syarat & Ketentuan Penggunaan</h2>
          <p class="text-gray-700 text-lg">
            <b>bkerjo.com</b> adalah platform penghubung antara pencari kerja dan perusahaan atau UMKM di wilayah Bengkulu.
            Dengan mengakses dan menggunakan layanan kami, Anda menyetujui syarat dan ketentuan berikut.
          </p>
        </div>
      </div>
    </div>
    
    <!-- Terms Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-10">
      <!-- For Job Seekers -->
      <div class="bg-blue-50 rounded-xl p-6 border border-blue-100">
        <div class="flex items-center gap-3 mb-4">
          <div class="w-12 h-12 rounded-lg bg-white border border-blue-200 flex items-center justify-center">
            <i class="fas fa-user-tie text-[#080D70] text-lg"></i>
          </div>
          <h3 class="text-xl font-bold text-gray-900">Untuk Pencari Kerja</h3>
        </div>
        <ul class="space-y-4">
          <li class="flex items-start gap-3">
            <div class="w-6 h-6 rounded-full bg-green-100 flex items-center justify-center flex-shrink-0 mt-0.5">
              <i class="fas fa-check text-green-600 text-xs"></i>
            </div>
            <div>
              <span class="font-medium text-gray-900">Data Valid</span>
              <p class="text-gray-700 text-sm mt-1">Gunakan data diri yang valid dan dapat dipertanggungjawabkan</p>
            </div>
          </li>
          <li class="flex items-start gap-3">
            <div class="w-6 h-6 rounded-full bg-green-100 flex items-center justify-center flex-shrink-0 mt-0.5">
              <i class="fas fa-check text-green-600 text-xs"></i>
            </div>
            <div>
              <span class="font-medium text-gray-900">Tanpa Biaya</span>
              <p class="text-gray-700 text-sm mt-1">Tidak ada biaya apapun untuk melamar pekerjaan melalui bkerjo.com</p>
            </div>
          </li>
          <li class="flex items-start gap-3">
            <div class="w-6 h-6 rounded-full bg-green-100 flex items-center justify-center flex-shrink-0 mt-0.5">
              <i class="fas fa-check text-green-600 text-xs"></i>
            </div>
            <div>
              <span class="font-medium text-gray-900">CV & Data Pribadi</span>
              <p class="text-gray-700 text-sm mt-1">Pastikan informasi CV dan profil Anda akurat dan terkini</p>
            </div>
          </li>
        </ul>
      </div>
      
      <!-- For Companies -->
      <div class="bg-green-50 rounded-xl p-6 border border-green-100">
        <div class="flex items-center gap-3 mb-4">
          <div class="w-12 h-12 rounded-lg bg-white border border-green-200 flex items-center justify-center">
            <i class="fas fa-building text-[#2C7404] text-lg"></i>
          </div>
          <h3 class="text-xl font-bold text-gray-900">Untuk Perusahaan</h3>
        </div>
        <ul class="space-y-4">
          <li class="flex items-start gap-3">
            <div class="w-6 h-6 rounded-full bg-green-100 flex items-center justify-center flex-shrink-0 mt-0.5">
              <i class="fas fa-check text-green-600 text-xs"></i>
            </div>
            <div>
              <span class="font-medium text-gray-900">Verifikasi Perusahaan</span>
              <p class="text-gray-700 text-sm mt-1">Perusahaan harus terverifikasi sebelum mempublikasikan lowongan</p>
            </div>
          </li>
          <li class="flex items-start gap-3">
            <div class="w-6 h-6 rounded-full bg-green-100 flex items-center justify-center flex-shrink-0 mt-0.5">
              <i class="fas fa-check text-green-600 text-xs"></i>
            </div>
            <div>
              <span class="font-medium text-gray-900">Lowongan Valid</span>
              <p class="text-gray-700 text-sm mt-1">Hanya lowongan pekerjaan yang valid dan sesuai hukum yang diperbolehkan</p>
            </div>
          </li>
          <li class="flex items-start gap-3">
            <div class="w-6 h-6 rounded-full bg-green-100 flex items-center justify-center flex-shrink-0 mt-0.5">
              <i class="fas fa-check text-green-600 text-xs"></i>
            </div>
            <div>
              <span class="font-medium text-gray-900">Tanggung Jawab Rekrutmen</span>
              <p class="text-gray-700 text-sm mt-1">Perusahaan bertanggung jawab penuh atas proses rekrutmen</p>
            </div>
          </li>
        </ul>
      </div>
    </div>
    
    <!-- Important Sections -->
    <div class="space-y-8">
      
      <!-- Platform Role -->
      <div class="p-6 bg-gray-50 rounded-xl border border-gray-200">
        <h3 class="text-xl font-bold text-gray-900 mb-4 flex items-center gap-2">
          <i class="fas fa-handshake text-[#080D70]"></i>
          Peran Platform
        </h3>
        <div class="space-y-3">
          <div class="flex items-start gap-3">
            <div class="w-8 h-8 rounded-full bg-blue-100 flex items-center justify-center flex-shrink-0 mt-0.5">
              <i class="fas fa-info-circle text-[#080D70] text-sm"></i>
            </div>
            <div>
              <p class="text-gray-700">
                <span class="font-medium text-gray-900">bkerjo.com adalah platform penghubung</span> antara pencari kerja dan perusahaan. 
                Kami menyediakan infrastruktur dan teknologi untuk mempertemukan kedua belah pihak.
              </p>
            </div>
          </div>
          <div class="flex items-start gap-3">
            <div class="w-8 h-8 rounded-full bg-red-100 flex items-center justify-center flex-shrink-0 mt-0.5">
              <i class="fas fa-exclamation-triangle text-red-600 text-sm"></i>
            </div>
            <div>
              <p class="text-gray-700">
                <span class="font-medium text-gray-900">Kami tidak bertanggung jawab</span> atas isi lowongan, proses rekrutmen, 
                atau interaksi antara pencari kerja dan perusahaan atau UMKM setelah terhubung melalui platform kami.
              </p>
            </div>
          </div>
        </div>
      </div>
      
      <!-- No Fees Policy -->
      <div class="p-6 bg-gradient-to-r from-blue-50 to-green-50 rounded-xl border border-blue-200">
        <h3 class="text-xl font-bold text-gray-900 mb-4 flex items-center gap-2">
          <i class="fas fa-ban text-red-600"></i>
          Kebijakan Tanpa Biaya
        </h3>
        <div class="flex items-start gap-3">
          <div class="w-10 h-10 rounded-full bg-white border border-red-200 flex items-center justify-center flex-shrink-0">
            <i class="fas fa-money-bill-wave text-red-600"></i>
          </div>
          <div>
            <p class="text-gray-700 text-lg font-medium">
              <span class="text-red-600">Tidak ada pungutan biaya</span> dalam proses melamar pekerjaan melalui bkerjo.com.
            </p>
            <p class="text-gray-600 mt-2">
              Segala bentuk permintaan biaya administrasi, pelatihan, atau lainnya dari perusahaan atau UMKM
              harus diverifikasi kebenarannya. Laporkan segera jika menemukan kecurigaan.
            </p>
          </div>
        </div>
      </div>
      
      <!-- Content Moderation -->
      <div class="p-6 bg-white rounded-xl border border-gray-200 shadow-sm">
        <h3 class="text-xl font-bold text-gray-900 mb-4 flex items-center gap-2">
          <i class="fas fa-shield-alt text-[#080D70]"></i>
          Moderasi Konten
        </h3>
        <div class="flex items-start gap-3">
          <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center flex-shrink-0">
            <i class="fas fa-gavel text-[#080D70]"></i>
          </div>
          <div>
            <p class="text-gray-700">
              <span class="font-medium text-gray-900">Admin berhak menghapus lowongan</span> yang melanggar hukum, 
              mengandung unsur penipuan, diskriminasi, atau tidak sesuai dengan norma yang berlaku.
            </p>
            <div class="mt-3 space-y-2">
              <div class="flex items-center gap-2 text-gray-600">
                <i class="fas fa-times-circle text-red-500"></i>
                <span class="text-sm">Lowongan palsu atau misleading</span>
              </div>
              <div class="flex items-center gap-2 text-gray-600">
                <i class="fas fa-times-circle text-red-500"></i>
                <span class="text-sm">Diskriminasi gender, agama, atau suku</span>
              </div>
              <div class="flex items-center gap-2 text-gray-600">
                <i class="fas fa-times-circle text-red-500"></i>
                <span class="text-sm">Serta pelanggaran lainnya.</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
    
    <!-- Agreement Section -->
    <div class="mt-12 pt-8 border-t border-gray-200">
      <div class="bg-gradient-to-r from-gray-50 to-blue-50 rounded-xl p-6 border border-gray-300">
        <div class="flex items-start gap-4">
          <div class="w-12 h-12 rounded-full bg-[#080D70] flex items-center justify-center flex-shrink-0">
            <i class="fas fa-check text-white text-lg"></i>
          </div>
          <div>
            <h4 class="text-lg font-bold text-gray-900 mb-2">Persetujuan Pengguna</h4>
            <p class="text-gray-700">
              Dengan melanjutkan penggunaan layanan bkerjo.com, Anda dianggap telah membaca, 
              memahami, dan menyetujui seluruh syarat dan ketentuan yang tercantum di atas.
            </p>
          </div>
        </div>
      </div>
    </div>
    
  </div>
</section>

@endsection