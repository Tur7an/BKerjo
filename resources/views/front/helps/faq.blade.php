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
            <li class="font-medium text-white">FAQ - Pertanyaan Umum</li>
          </ol>
        </nav>
        
        <h1 class="text-4xl md:text-5xl font-bold mb-4">
          <span class="bg-clip-text text-transparent bg-gradient-to-r from-white to-blue-200">
            FAQ - Pertanyaan Umum
          </span>
        </h1>
        <p class="text-blue-100 text-lg md:text-xl max-w-3xl mx-auto">
          Jawaban untuk pertanyaan paling sering diajukan tentang bkerjo.com
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Main Content -->
<section class="max-w-4xl mx-auto px-4 sm:px-6">
  <div class="mb-10">
    
    <!-- FAQ Categories -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-10">
      <div class="text-center p-6 bg-blue-50 rounded-xl border border-blue-100 hover:border-blue-300 transition-colors cursor-pointer" data-category="general">
        <div class="w-12 h-12 rounded-full bg-blue-100 mx-auto mb-3 flex items-center justify-center">
          <i class="fas fa-info-circle text-[#080D70] text-xl"></i>
        </div>
        <h3 class="font-bold text-gray-900 mb-2">Umum</h3>
        <p class="text-gray-600 text-sm">Pertanyaan dasar tentang platform</p>
      </div>
      
      <div class="text-center p-6 bg-green-50 rounded-xl border border-green-100 hover:border-green-300 transition-colors cursor-pointer" data-category="application">
        <div class="w-12 h-12 rounded-full bg-green-100 mx-auto mb-3 flex items-center justify-center">
          <i class="fas fa-briefcase text-[#2C7404] text-xl"></i>
        </div>
        <h3 class="font-bold text-gray-900 mb-2">Melamar</h3>
        <p class="text-gray-600 text-sm">Proses & cara melamar kerja</p>
      </div>
      
      <div class="text-center p-6 bg-purple-50 rounded-xl border border-purple-100 hover:border-purple-300 transition-colors cursor-pointer" data-category="company">
        <div class="w-12 h-12 rounded-full bg-purple-100 mx-auto mb-3 flex items-center justify-center">
          <i class="fas fa-building text-purple-600 text-xl"></i>
        </div>
        <h3 class="font-bold text-gray-900 mb-2">Perusahaan</h3>
        <p class="text-gray-600 text-sm">Untuk pemasang lowongan</p>
      </div>
    </div>
    
    <!-- FAQ List -->
    <div class="space-y-4">
      
      <!-- General Questions -->
      <div class="faq-category" data-category="general">
        <h3 class="text-xl font-bold text-gray-900 mb-6 flex items-center gap-2">
          <div class="w-8 h-8 rounded-lg bg-blue-100 flex items-center justify-center">
            <i class="fas fa-info-circle text-[#080D70]"></i>
          </div>
          Pertanyaan Umum
        </h3>
        
        <div class="space-y-4">
          <!-- Question 1 -->
          <div class="faq-item bg-white rounded-xl border border-gray-200 overflow-hidden hover:border-[#080D70] transition-colors">
            <button class="w-full flex justify-between items-center p-6 text-left hover:bg-gray-50 transition-colors" onclick="toggleFAQ(this)">
              <div class="flex items-start gap-4">
                <div class="w-10 h-10 rounded-lg bg-blue-50 flex items-center justify-center flex-shrink-0">
                  <i class="fas fa-money-bill-wave text-[#080D70]"></i>
                </div>
                <div>
                  <h4 class="font-bold text-gray-900 mb-1">Apakah bkerjo.com benar-benar gratis?</h4>
                  <p class="text-gray-600 text-sm">Biaya penggunaan platform</p>
                </div>
              </div>
              <i class="fas fa-chevron-down text-gray-400 transition-transform duration-300"></i>
            </button>
            <div class="px-6 pb-6 hidden">
              <div class="pl-14">
                <div class="p-4 bg-green-50 rounded-lg border border-green-100 mb-3">
                  <div class="flex items-center gap-2 mb-2">
                    <i class="fas fa-check-circle text-green-600"></i>
                    <span class="font-bold text-green-800">YA, 100% GRATIS</span>
                  </div>
                  <p class="text-gray-700">
                    bkerjo.com sepenuhnya gratis untuk pencari kerja dan perusahaan. Tidak ada biaya pendaftaran, 
                    tidak ada biaya pasang lowongan, dan tidak ada biaya untuk melamar pekerjaan.
                  </p>
                </div>
                <div class="space-y-2 text-gray-700">
                  <div class="flex items-center gap-2">
                    <i class="fas fa-check text-green-500"></i>
                    <span>Gratis melihat lowongan</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <i class="fas fa-check text-green-500"></i>
                    <span>Gratis melamar pekerjaan</span>
                  </div>
                  <div class="flex items-center gap-2">
                    <i class="fas fa-check text-green-500"></i>
                    <span>Gratis pasang lowongan (setelah verifikasi)</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Question 2 -->
          <div class="faq-item bg-white rounded-xl border border-gray-200 overflow-hidden hover:border-[#080D70] transition-colors">
            <button class="w-full flex justify-between items-center p-6 text-left hover:bg-gray-50 transition-colors" onclick="toggleFAQ(this)">
              <div class="flex items-start gap-4">
                <div class="w-10 h-10 rounded-lg bg-green-50 flex items-center justify-center flex-shrink-0">
                  <i class="fas fa-shield-alt text-[#2C7404]"></i>
                </div>
                <div>
                  <h4 class="font-bold text-gray-900 mb-1">Apakah lowongan di bkerjo.com aman dan terverifikasi?</h4>
                  <p class="text-gray-600 text-sm">Keamanan dan validitas lowongan</p>
                </div>
              </div>
              <i class="fas fa-chevron-down text-gray-400 transition-transform duration-300"></i>
            </button>
            <div class="px-6 pb-6 hidden">
              <div class="pl-14">
                <div class="flex items-start gap-3 mb-4">
                  <div class="w-8 h-8 rounded-full bg-green-100 flex items-center justify-center flex-shrink-0">
                    <i class="fas fa-check text-green-600 text-sm"></i>
                  </div>
                  <p class="text-gray-700">
                    <span class="font-bold text-gray-900">Kami moderasi sebelum publish</span> - 
                    Setiap lowongan yang masuk melalui form pasang lowongan akan diverifikasi oleh admin 
                    sebelum ditampilkan di website.
                  </p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                  <div class="bg-blue-50 rounded-lg p-4">
                    <h5 class="font-semibold text-gray-900 mb-2 flex items-center gap-2">
                      <i class="fas fa-user-check text-blue-600"></i>
                      Verifikasi Perusahaan
                    </h5>
                    <ul class="space-y-1 text-sm text-gray-700">
                      <li class="flex items-center gap-2">
                        <i class="fas fa-check-circle text-green-500 text-xs"></i>
                        <span>Cek data perusahaan</span>
                      </li>
                      <li class="flex items-center gap-2">
                        <i class="fas fa-check-circle text-green-500 text-xs"></i>
                        <span>Konfirmasi kontak HRD</span>
                      </li>
                      <li class="flex items-center gap-2">
                        <i class="fas fa-check-circle text-green-500 text-xs"></i>
                        <span>Validasi lowongan</span>
                      </li>
                    </ul>
                  </div>
                  <div class="bg-red-50 rounded-lg p-4">
                    <h5 class="font-semibold text-gray-900 mb-2 flex items-center gap-2">
                      <i class="fas fa-ban text-red-600"></i>
                      Filter Konten
                    </h5>
                    <ul class="space-y-1 text-sm text-gray-700">
                      <li class="flex items-center gap-2">
                        <i class="fas fa-times-circle text-red-500 text-xs"></i>
                        <span>Blokir lowongan mencurigakan</span>
                      </li>
                      <li class="flex items-center gap-2">
                        <i class="fas fa-times-circle text-red-500 text-xs"></i>
                        <span>Tolak yang meminta biaya</span>
                      </li>
                      <li class="flex items-center gap-2">
                        <i class="fas fa-times-circle text-red-500 text-xs"></i>
                        <span>Hapus konten tidak pantas</span>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="text-sm text-gray-600">
                  <i class="fas fa-exclamation-triangle text-yellow-500 mr-1"></i>
                  Tetap waspada dan laporkan jika menemukan lowongan yang mencurigakan
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Application Questions -->
      <div class="faq-category" data-category="application">
        <h3 class="text-xl font-bold text-gray-900 mb-6 mt-10 flex items-center gap-2">
          <div class="w-8 h-8 rounded-lg bg-green-100 flex items-center justify-center">
            <i class="fas fa-briefcase text-[#2C7404]"></i>
          </div>
          Melamar Pekerjaan
        </h3>
        
        <div class="space-y-4">
          <!-- Question 3 -->
          <div class="faq-item bg-white rounded-xl border border-gray-200 overflow-hidden hover:border-[#080D70] transition-colors">
            <button class="w-full flex justify-between items-center p-6 text-left hover:bg-gray-50 transition-colors" onclick="toggleFAQ(this)">
              <div class="flex items-start gap-4">
                <div class="w-10 h-10 rounded-lg bg-purple-50 flex items-center justify-center flex-shrink-0">
                  <i class="fas fa-paper-plane text-purple-600"></i>
                </div>
                <div>
                  <h4 class="font-bold text-gray-900 mb-1">Bagaimana cara melamar pekerjaan di bkerjo.com?</h4>
                  <p class="text-gray-600 text-sm">Proses dan metode lamaran</p>
                </div>
              </div>
              <i class="fas fa-chevron-down text-gray-400 transition-transform duration-300"></i>
            </button>
            <div class="px-6 pb-6 hidden">
              <div class="pl-14">
                <div class="mb-4">
                  <p class="text-gray-700">
                    <span class="font-bold text-gray-900">Via WhatsApp dan Email perusahaan</span> atau jalur lain yang disediakan perusahaan terkait.
                  </p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                  <div class="bg-white rounded-lg p-4 border border-green-200 shadow-sm">
                    <div class="flex items-center gap-3 mb-3">
                      <div class="w-10 h-10 rounded-full bg-green-100 flex items-center justify-center">
                        <i class="fab fa-whatsapp text-green-600"></i>
                      </div>
                      <div>
                        <h5 class="font-bold text-gray-900">WhatsApp</h5>
                        <p class="text-sm text-gray-600">Cara tercepat</p>
                      </div>
                    </div>
                    <ol class="space-y-2 text-sm text-gray-700 ml-2">
                      <li class="flex items-start gap-2">
                        <span class="bg-green-100 text-green-800 rounded-full w-5 h-5 flex items-center justify-center text-xs flex-shrink-0">1</span>
                        <span>Klik tombol "Lamar via WhatsApp"</span>
                      </li>
                      <li class="flex items-start gap-2">
                        <span class="bg-green-100 text-green-800 rounded-full w-5 h-5 flex items-center justify-center text-xs flex-shrink-0">2</span>
                        <span>Otomatis terhubung ke chat HRD</span>
                      </li>
                      <li class="flex items-start gap-2">
                        <span class="bg-green-100 text-green-800 rounded-full w-5 h-5 flex items-center justify-center text-xs flex-shrink-0">3</span>
                        <span>Kirim CV dan perkenalkan diri</span>
                      </li>
                    </ol>
                  </div>
                  
                  <div class="bg-white rounded-lg p-4 border border-blue-200 shadow-sm">
                    <div class="flex items-center gap-3 mb-3">
                      <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center">
                        <i class="fas fa-envelope text-blue-600"></i>
                      </div>
                      <div>
                        <h5 class="font-bold text-gray-900">Email</h5>
                        <p class="text-sm text-gray-600">Formal & terlacak</p>
                      </div>
                    </div>
                    <ol class="space-y-2 text-sm text-gray-700 ml-2">
                      <li class="flex items-start gap-2">
                        <span class="bg-blue-100 text-blue-800 rounded-full w-5 h-5 flex items-center justify-center text-xs flex-shrink-0">1</span>
                        <span>Klik tombol "Lamar via Email"</span>
                      </li>
                      <li class="flex items-start gap-2">
                        <span class="bg-blue-100 text-blue-800 rounded-full w-5 h-5 flex items-center justify-center text-xs flex-shrink-0">2</span>
                        <span>Buka aplikasi email Anda</span>
                      </li>
                      <li class="flex items-start gap-2">
                        <span class="bg-blue-100 text-blue-800 rounded-full w-5 h-5 flex items-center justify-center text-xs flex-shrink-0">3</span>
                        <span>Kirim CV dengan subject yang jelas</span>
                      </li>
                    </ol>
                  </div>
                </div>
                
                <div class="bg-yellow-50 rounded-lg p-4 border border-yellow-200">
                  <div class="flex items-start gap-2">
                    <i class="fas fa-lightbulb text-yellow-500 mt-0.5"></i>
                    <div>
                      <h5 class="font-medium text-gray-900 mb-1">Tips Melamar:</h5>
                      <ul class="text-sm text-gray-700 space-y-1">
                        <li>• Siapkan CV dalam format PDF atau DOC</li>
                        <li>• Perkenalkan diri dengan sopan</li>
                        <li>• Sertakan nomor kontak yang aktif</li>
                        <li>• Follow up jika tidak ada respon dalam 3-5 hari</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Question 4 -->
          <div class="faq-item bg-white rounded-xl border border-gray-200 overflow-hidden hover:border-[#080D70] transition-colors">
            <button class="w-full flex justify-between items-center p-6 text-left hover:bg-gray-50 transition-colors" onclick="toggleFAQ(this)">
              <div class="flex items-start gap-4">
                <div class="w-10 h-10 rounded-lg bg-blue-50 flex items-center justify-center flex-shrink-0">
                  <i class="fas fa-user-plus text-[#080D70]"></i>
                </div>
                <div>
                  <h4 class="font-bold text-gray-900 mb-1">Apakah perlu membuat akun untuk melamar?</h4>
                  <p class="text-gray-600 text-sm">Sistem tanpa login</p>
                </div>
              </div>
              <i class="fas fa-chevron-down text-gray-400 transition-transform duration-300"></i>
            </button>
            <div class="px-6 pb-6 hidden">
              <div class="pl-14">
                <div class="flex items-start gap-3 mb-4">
                  <div class="w-10 h-10 rounded-full bg-green-100 flex items-center justify-center flex-shrink-0">
                    <i class="fas fa-times text-green-600"></i>
                  </div>
                  <div>
                    <p class="text-gray-700 font-bold text-lg">TIDAK PERLU AKUN</p>
                    <p class="text-gray-700 mt-1">
                      bkerjo.com dirancang tanpa sistem login yang rumit. Anda bisa langsung melamar 
                      melalui kontak yang disediakan perusahaan tanpa perlu registrasi akun.
                    </p>
                  </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                  <div class="p-3 bg-gray-50 rounded-lg">
                    <div class="flex items-center gap-2 text-green-600 font-medium mb-1">
                      <i class="fas fa-check"></i>
                      <span>Tanpa Registrasi</span>
                    </div>
                    <p class="text-sm text-gray-600">Langsung lamar tanpa buat akun</p>
                  </div>
                  <div class="p-3 bg-gray-50 rounded-lg">
                    <div class="flex items-center gap-2 text-green-600 font-medium mb-1">
                      <i class="fas fa-check"></i>
                      <span>Tanpa Password</span>
                    </div>
                    <p class="text-sm text-gray-600">Tidak perlu ingat password</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Company Questions -->
      <div class="faq-category" data-category="company">
        <h3 class="text-xl font-bold text-gray-900 mb-6 mt-10 flex items-center gap-2">
          <div class="w-8 h-8 rounded-lg bg-purple-100 flex items-center justify-center">
            <i class="fas fa-building text-purple-600"></i>
          </div>
          Untuk Perusahaan & UMKM
        </h3>
        
        <div class="space-y-4">
          <!-- Question 5 -->
          <div class="faq-item bg-white rounded-xl border border-gray-200 overflow-hidden hover:border-[#080D70] transition-colors">
            <button class="w-full flex justify-between items-center p-6 text-left hover:bg-gray-50 transition-colors" onclick="toggleFAQ(this)">
              <div class="flex items-start gap-4">
                <div class="w-10 h-10 rounded-lg bg-orange-50 flex items-center justify-center flex-shrink-0">
                  <i class="fas fa-plus-circle text-orange-600"></i>
                </div>
                <div>
                  <h4 class="font-bold text-gray-900 mb-1">Bagaimana cara pasang lowongan di bkerjo.com?</h4>
                  <p class="text-gray-600 text-sm">Proses untuk perusahaan/UMKM</p>
                </div>
              </div>
              <i class="fas fa-chevron-down text-gray-400 transition-transform duration-300"></i>
            </button>
            <div class="px-6 pb-6 hidden">
              <div class="pl-14">
                <div class="mb-6">
                  <p class="text-gray-700">
                    Pasang lowongan di bkerjo.com sangat mudah dan gratis. Berikut langkah-langkahnya:
                  </p>
                </div>
                
                <div class="space-y-4 mb-6">
                  <div class="flex items-start gap-4">
                    <div class="w-8 h-8 rounded-full bg-blue-100 flex items-center justify-center flex-shrink-0">
                      <span class="font-bold text-[#080D70]">1</span>
                    </div>
                    <div>
                      <h5 class="font-bold text-gray-900 mb-1">Isi Form Pasang Lowongan</h5>
                      <p class="text-gray-700 text-sm">
                        Kunjungi halaman "Pasang Loker" dan isi form dengan data perusahaan dan detail lowongan
                      </p>
                    </div>
                  </div>
                  
                  <div class="flex items-start gap-4">
                    <div class="w-8 h-8 rounded-full bg-green-100 flex items-center justify-center flex-shrink-0">
                      <span class="font-bold text-[#2C7404]">2</span>
                    </div>
                    <div>
                      <h5 class="font-bold text-gray-900 mb-1">Verifikasi oleh Admin</h5>
                      <p class="text-gray-700 text-sm">
                        Tim admin akan memverifikasi data perusahaan dan lowongan (biasanya 1-2 hari kerja)
                      </p>
                    </div>
                  </div>
                  
                  <div class="flex items-start gap-4">
                    <div class="w-8 h-8 rounded-full bg-purple-100 flex items-center justify-center flex-shrink-0">
                      <span class="font-bold text-purple-600">3</span>
                    </div>
                    <div>
                      <h5 class="font-bold text-gray-900 mb-1">Lowongan Dipublikasikan</h5>
                      <p class="text-gray-700 text-sm">
                        Setelah diverifikasi, lowongan akan tampil di website dan dapat dilihat oleh pencari kerja
                      </p>
                    </div>
                  </div>
                </div>
                
                <div class="bg-blue-50 rounded-lg p-4 border border-blue-200">
                  <div class="flex items-start gap-2">
                    <i class="fas fa-clock text-blue-600 mt-0.5"></i>
                    <div>
                      <h5 class="font-medium text-gray-900 mb-1">Waktu Proses:</h5>
                      <p class="text-sm text-gray-700">
                        Verifikasi biasanya selesai dalam <span class="font-bold">1-2 hari kerja</span>. 
                        Pastikan data yang diisi valid agar proses lebih cepat.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Question 6 -->
          <div class="faq-item bg-white rounded-xl border border-gray-200 overflow-hidden hover:border-[#080D70] transition-colors">
            <button class="w-full flex justify-between items-center p-6 text-left hover:bg-gray-50 transition-colors" onclick="toggleFAQ(this)">
              <div class="flex items-start gap-4">
                <div class="w-10 h-10 rounded-lg bg-red-50 flex items-center justify-center flex-shrink-0">
                  <i class="fas fa-exclamation-triangle text-red-600"></i>
                </div>
                <div>
                  <h4 class="font-bold text-gray-900 mb-1">Bagaimana jika ada pelamar yang mencurigakan?</h4>
                  <p class="text-gray-600 text-sm">Laporan & penanganan masalah</p>
                </div>
              </div>
              <i class="fas fa-chevron-down text-gray-400 transition-transform duration-300"></i>
            </button>
            <div class="px-6 pb-6 hidden">
              <div class="pl-14">
                <div class="mb-4">
                  <p class="text-gray-700">
                    Jika Anda menerima lamaran yang mencurigakan atau tidak pantas dari pelamar:
                  </p>
                </div>
                
                <div class="space-y-4 mb-6">
                  <div class="bg-white rounded-lg p-4 border border-gray-200">
                    <h5 class="font-bold text-gray-900 mb-2 flex items-center gap-2">
                      <i class="fas fa-flag text-[#080D70]"></i>
                      Laporkan ke Admin
                    </h5>
                    <p class="text-gray-700 text-sm mb-3">
                      Kirim laporan ke email admin dengan detail:
                    </p>
                    <ul class="space-y-1 text-sm text-gray-700">
                      <li class="flex items-center gap-2">
                        <i class="fas fa-circle text-[#080D70] text-xs"></i>
                        <span>Nama pelamar yang mencurigakan</span>
                      </li>
                      <li class="flex items-center gap-2">
                        <i class="fas fa-circle text-[#080D70] text-xs"></i>
                        <span>Waktu dan cara pelamar menghubungi</span>
                      </li>
                      <li class="flex items-center gap-2">
                        <i class="fas fa-circle text-[#080D70] text-xs"></i>
                        <span>Alasan kenapa mencurigakan</span>
                      </li>
                    </ul>
                  </div>
                </div>
                
                <div class="bg-red-50 rounded-lg p-4 border border-red-200">
                  <h5 class="font-bold text-gray-900 mb-2 flex items-center gap-2">
                    <i class="fas fa-ban text-red-600"></i>
                    Yang Bisa Dilakukan Perusahaan
                  </h5>
                  <ul class="space-y-2 text-sm text-gray-700">
                    <li class="flex items-center gap-2">
                      <i class="fas fa-check-circle text-red-500"></i>
                      <span>Blokir nomor WhatsApp pelamar</span>
                    </li>
                    <li class="flex items-center gap-2">
                      <i class="fas fa-check-circle text-red-500"></i>
                      <span>Filter email pelamar sebagai spam</span>
                    </li>
                    <li class="flex items-center gap-2">
                      <i class="fas fa-check-circle text-red-500"></i>
                      <span>Laporkan ke admin untuk ditindaklanjuti</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
  
  <!-- Contact Section -->
  <div class="bg-gradient-to-r from-[#080D70] to-[#2C7404] rounded-2xl p-8 text-white text-center">
    <div class="max-w-2xl mx-auto">
      <h3 class="text-2xl font-bold mb-4">Masih Ada Pertanyaan?</h3>
      <p class="text-blue-100 mb-6">
        Tidak menemukan jawaban yang Anda cari? Hubungi tim support kami untuk bantuan lebih lanjut.
      </p>
      <div class="flex flex-col sm:flex-row gap-4 justify-center">
        <a href="/hubungi-kami" 
           class="inline-flex items-center gap-2 bg-white hover:bg-gray-100 text-[#080D70] font-bold px-6 py-3 rounded-full transition-all duration-300 transform hover:scale-105">
          <i class="fas fa-headset"></i>
          Hubungi Kami
        </a>
        <a href="mailto:support@bkerjo.com" 
           class="inline-flex items-center gap-2 border-2 border-white hover:bg-white/20 text-white font-bold px-6 py-3 rounded-full transition-all duration-300">
          <i class="fas fa-envelope"></i>
          Email Support
        </a>
      </div>
    </div>
  </div>
</section>

<!-- FAQ JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function() {
  // FAQ Toggle Function
  window.toggleFAQ = function(button) {
    const content = button.nextElementSibling;
    const icon = button.querySelector('.fa-chevron-down');
    
    // Toggle content
    content.classList.toggle('hidden');
    
    // Rotate icon
    icon.classList.toggle('rotate-180');
    
    // Close other FAQs in same category
    const faqItem = button.closest('.faq-item');
    const category = faqItem.closest('.faq-category');
    const allFaqs = category.querySelectorAll('.faq-item');
    
    allFaqs.forEach(item => {
      if (item !== faqItem) {
        const otherContent = item.querySelector('.hidden');
        const otherIcon = item.querySelector('.fa-chevron-down');
        if (otherContent && !otherContent.classList.contains('hidden')) {
          otherContent.classList.add('hidden');
          otherIcon.classList.remove('rotate-180');
        }
      }
    });
  };
  
  
  // Category Filter
  const categoryButtons = document.querySelectorAll('[data-category]');
  const categories = document.querySelectorAll('.faq-category');
  
  categoryButtons.forEach(button => {
    button.addEventListener('click', function() {
      const category = this.getAttribute('data-category');
      
      // Show selected category, hide others
      categories.forEach(cat => {
        if (cat.getAttribute('data-category') === category) {
          cat.style.display = 'block';
        } else {
          cat.style.display = 'none';
        }
      });
      
      // Update active state
      categoryButtons.forEach(btn => {
        btn.classList.remove('border-[#080D70]', 'border-[#2C7404]', 'border-purple-300');
        btn.classList.add('border-blue-100', 'border-green-100', 'border-purple-100');
      });
      
      // Add active border based on category
      if (category === 'general') {
        this.classList.add('border-[#080D70]');
        this.classList.remove('border-blue-100');
      } else if (category === 'application') {
        this.classList.add('border-[#2C7404]');
        this.classList.remove('border-green-100');
      } else if (category === 'company') {
        this.classList.add('border-purple-300');
        this.classList.remove('border-purple-100');
      }
    });
  });
  
  // Add rotate class to CSS
  const style = document.createElement('style');
  style.textContent = `
    .rotate-180 {
      transform: rotate(180deg);
    }
    mark {
      background-color: #fef3c7;
      padding: 0 2px;
      border-radius: 2px;
    }
  `;
  document.head.appendChild(style);
});
</script>

@endsection