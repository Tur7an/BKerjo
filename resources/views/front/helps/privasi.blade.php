@extends('front.layout')
@section('title','Kebijakan Privasi - BKerjo')

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
            <li class="font-medium text-white">Kebijakan Privasi</li>
          </ol>
        </nav>
        
        <h1 class="text-4xl md:text-5xl font-bold mb-4">
          <span class="bg-clip-text text-transparent bg-gradient-to-r from-white to-blue-200">
            Kebijakan Privasi
          </span>
        </h1>
        <p class="text-blue-100 text-lg md:text-xl max-w-3xl mx-auto">
          Melindungi privasi dan data pengguna tanpa sistem login yang rumit
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Main Content -->
<section class="max-w-4xl mx-auto px-4 sm:px-6">
  <div class="bg-white rounded-2xl shadow-lg border border-gray-200 p-6 md:p-8 mb-8">
    <!-- Simple Info -->
    <div class="text-center mb-8 pb-6 border-b border-gray-200">
      <div class="flex items-center justify-center gap-2 text-gray-600 mb-3">
        <i class="fas fa-history"></i>
        <span class="text-sm">Terakhir diperbarui: 15 Januari 2025</span>
      </div>
      <div class="inline-flex items-center gap-2 px-4 py-2 bg-blue-50 rounded-full">
        <i class="fas fa-info-circle text-[#080D70]"></i>
        <span class="text-sm font-medium">Tidak ada sistem login - Data minimalis</span>
      </div>
    </div>
    
    <!-- Introduction -->
    <div class="mb-10">
      <div class="flex flex-col md:flex-row items-start gap-6 mb-8">
        <div class="w-16 h-16 rounded-xl bg-blue-100 flex items-center justify-center flex-shrink-0">
          <i class="fas fa-user-shield text-[#080D70] text-2xl"></i>
        </div>
        <div>
          <h2 class="text-2xl font-bold text-gray-900 mb-3">Privasi Sederhana & Transparan</h2>
          <p class="text-gray-700 text-lg">
            <b>bkerjo.com</b> dirancang dengan pendekatan privasi minimalis. Tanpa sistem login yang kompleks,
            kami hanya mengumpulkan data yang benar-benar diperlukan untuk menghubungkan pencari kerja dengan perusahaan.
          </p>
        </div>
      </div>
      
      <!-- No Login Feature -->
      <div class="bg-gradient-to-r from-blue-50 to-green-50 rounded-xl p-6 border border-blue-200 mb-6">
        <div class="flex items-center gap-4">
          <div class="w-12 h-12 rounded-full bg-white border-2 border-[#080D70] flex items-center justify-center">
            <i class="fas fa-user-times text-[#080D70] text-xl"></i>
          </div>
          <div>
            <h3 class="text-lg font-bold text-gray-900">Tanpa Sistem Login</h3>
            <p class="text-gray-700">
              Kami tidak memerlukan akun login untuk melihat lowongan atau melamar pekerjaan.
              Proses yang lebih sederhana, privasi yang lebih terjaga.
            </p>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Data Collection Simplified -->
    <div class="mb-10">
      <h3 class="text-xl font-bold text-gray-900 mb-6 flex items-center gap-3">
        <div class="w-10 h-10 rounded-lg bg-green-100 flex items-center justify-center">
          <i class="fas fa-database text-[#2C7404]"></i>
        </div>
        <span>Data yang Kami Simpan</span>
      </h3>
      
      <div class="space-y-6">
        <!-- Job Seekers Data -->
        <div class="bg-white rounded-xl p-6 border border-gray-200 shadow-sm">
          <h4 class="font-bold text-gray-900 mb-4 flex items-center gap-2">
            <i class="fas fa-user-circle text-[#080D70]"></i>
            Data dari Lamaran Langsung
          </h4>
          <div class="grid grid-cols-1 gap-4">
            <div class="space-y-2">
              <div class="flex items-center gap-2 text-gray-700">
                <i class="fas fa-times-circle text-gray-400 text-sm"></i>
                <span class="text-sm">Tidak ada data pelamar</span>
              </div>
              <div class="flex items-center gap-2 text-gray-700">
                <i class="fas fa-times-circle text-gray-400 text-sm"></i>
                <span class="text-sm">Tidak ada akun pengguna</span>
              </div>
            </div>
          </div>
          <p class="text-gray-600 text-sm mt-4">
            <i class="fas fa-info-circle text-[#080D70] mr-1"></i>
            Kami tidak menyimpan data apa pun dari pelamar.
          </p>
        </div>
        
        <!-- Company Data -->
        <div class="bg-white rounded-xl p-6 border border-gray-200 shadow-sm">
          <h4 class="font-bold text-gray-900 mb-4 flex items-center gap-2">
            <i class="fas fa-building text-[#2C7404]"></i>
            Data dari Form Pasang Lowongan
          </h4>
          <div class="space-y-3">
            <div class="flex items-start gap-3">
              <div class="w-8 h-8 rounded-full bg-blue-100 flex items-center justify-center flex-shrink-0">
                <i class="fas fa-id-card text-[#080D70] text-sm"></i>
              </div>
              <div>
                <div class="font-medium text-gray-900">Data Perusahaan</div>
                <p class="text-gray-600 text-sm">Nama perusahaan, alamat, kontak untuk verifikasi</p>
              </div>
            </div>
            <div class="flex items-start gap-3">
              <div class="w-8 h-8 rounded-full bg-green-100 flex items-center justify-center flex-shrink-0">
                <i class="fas fa-file-alt text-[#2C7404] text-sm"></i>
              </div>
              <div>
                <div class="font-medium text-gray-900">Detail Lowongan</div>
                <p class="text-gray-600 text-sm">Posisi, deskripsi, gaji, dan kontak untuk lamaran</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="mt-6 p-4 bg-blue-50 rounded-lg border border-blue-100">
        <p class="text-gray-700">
          <span class="font-medium text-[#080D70]">Kami mengumpulkan data untuk keperluan layanan</span> - 
          Semua data dikumpulkan secara transparan hanya untuk menghubungkan pencari kerja dengan perusahaan.
          Setelah lowongan selesai atau tidak aktif, data akan dihapus secara berkala.
        </p>
      </div>
    </div>
    
    <!-- Data Protection -->
    <div class="mb-10">
      <h3 class="text-xl font-bold text-gray-900 mb-6 flex items-center gap-3">
        <div class="w-10 h-10 rounded-lg bg-red-100 flex items-center justify-center">
          <i class="fas fa-shield-alt text-red-600"></i>
        </div>
        <span>Perlindungan Data</span>
      </h3>
      
      <div class="bg-gradient-to-r from-red-50 to-orange-50 rounded-xl p-6 border border-red-200">
        <div class="flex items-start gap-4">
          <div class="w-12 h-12 rounded-full bg-white border-2 border-red-300 flex items-center justify-center flex-shrink-0">
            <i class="fas fa-handshake-slash text-red-600 text-lg"></i>
          </div>
          <div>
            <h4 class="text-lg font-bold text-gray-900 mb-3">Data Tidak Dijual ke Pihak Ketiga</h4>
            <p class="text-gray-700 mb-4">
              Kami tidak memperjualbelikan data pengguna kepada siapapun. 
              Informasi kontak dan data pribadi hanya digunakan untuk tujuan:
            </p>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
              <div class="bg-white rounded-lg p-4">
                <div class="flex items-center gap-2 mb-2">
                  <i class="fas fa-check text-green-500"></i>
                  <span class="font-medium text-gray-900">Verifikasi lowongan</span>
                </div>
                <p class="text-gray-600 text-sm">Memastikan lowongan berasal dari perusahaan valid</p>
              </div>
              <div class="bg-white rounded-lg p-4">
                <div class="flex items-center gap-2 mb-2">
                  <i class="fas fa-check text-green-500"></i>
                  <span class="font-medium text-gray-900">Menghubungkan pelamar</span>
                </div>
                <p class="text-gray-600 text-sm">Mengarahkan lamaran ke kontak perusahaan yang benar</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- User Rights Simplified -->
    <div class="mb-10">
      <h3 class="text-xl font-bold text-gray-900 mb-6 flex items-center gap-3">
        <div class="w-10 h-10 rounded-lg bg-purple-100 flex items-center justify-center">
          <i class="fas fa-user-cog text-purple-600"></i>
        </div>
        <span>Hak Pengguna</span>
      </h3>
      
      <div class="space-y-6">
        <!-- Right to Delete -->
        <div class="bg-white rounded-xl p-6 border border-gray-200 shadow-sm">
          <div class="flex items-start gap-4">
            <div class="w-14 h-14 rounded-full bg-blue-100 flex items-center justify-center flex-shrink-0">
              <i class="fas fa-trash-alt text-[#080D70] text-xl"></i>
            </div>
            <div>
              <h4 class="text-lg font-bold text-gray-900 mb-2">Pengguna Berhak Meminta Penghapusan Data</h4>
              <p class="text-gray-700 mb-4">
                Jika Anda telah mengirim lamaran melalui bkerjo.com dan ingin data Anda dihapus,
                atau perusahaan ingin menghapus lowongan yang sudah dipasang.
              </p>
              
              <div class="p-4 bg-gray-50 rounded-lg border border-gray-200">
                <h5 class="font-semibold text-gray-900 mb-2 flex items-center gap-2">
                  <i class="fas fa-envelope text-[#080D70]"></i>
                  Cara Meminta Penghapusan:
                </h5>
                <ol class="space-y-2 text-gray-700 text-sm ml-6 list-decimal">
                  <li>Kirim email ke <a href="mailto:admin@bkerjo.com" class="font-medium text-[#080D70] hover:underline">admin@bkerjo.com</a></li>
                  <li>Sebutkan nama/email/nomor yang digunakan</li>
                  <li>Jelaskan data apa yang ingin dihapus</li>
                  <li>Konfirmasi akan diproses dalam 1-3 hari kerja</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        
        
    
    <!-- Direct Communication -->
    <div class="mb-10">
      <h3 class="text-xl font-bold text-gray-900 mb-6 flex items-center gap-3">
        <div class="w-10 h-10 rounded-lg bg-yellow-100 flex items-center justify-center">
          <i class="fas fa-comments text-yellow-600"></i>
        </div>
        <span>Komunikasi Langsung</span>
      </h3>
      
      <div class="bg-white rounded-xl p-6 border border-gray-200">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <div class="space-y-4">
            <h4 class="font-bold text-gray-900">Pelamar ke Perusahaan</h4>
            <div class="space-y-3">
              <div class="flex items-start gap-2">
                <i class="fab fa-whatsapp text-green-500 mt-1"></i>
                <div>
                  <div class="font-medium text-gray-900">Via WhatsApp</div>
                  <p class="text-gray-600 text-sm">Langsung chat nomor Perusahaan atau UMKM yang tercantum</p>
                </div>
              </div>
              <div class="flex items-start gap-2">
                <i class="fas fa-envelope text-blue-500 mt-1"></i>
                <div>
                  <div class="font-medium text-gray-900">Via Email</div>
                  <p class="text-gray-600 text-sm">Kirim Lamaran ke email perusahaan atau UMKM langsung</p>
                </div>
              </div>
            </div>
            <div class="text-sm text-gray-500 mt-4">
              <i class="fas fa-info-circle text-[#080D70] mr-1"></i>
              bkerjo.com hanya menyediakan informasi kontak, komunikasi langsung antara pelamar dan perusahaan
            </div>
          </div>
          
          <div class="space-y-4">
            <h4 class="font-bold text-gray-900">Perusahaan ke Admin</h4>
            <div class="space-y-3">
              <div class="flex items-start gap-2">
                <i class="fas fa-clipboard-check text-[#2C7404] mt-1"></i>
                <div>
                  <div class="font-medium text-gray-900">Verifikasi Lowongan</div>
                  <p class="text-gray-600 text-sm">Admin verifikasi sebelum lowongan dipublikasi</p>
                </div>
              </div>
              <div class="flex items-start gap-2">
                <i class="fas fa-phone-alt text-[#080D70] mt-1"></i>
                <div>
                  <div class="font-medium text-gray-900">Kontak Admin</div>
                  <p class="text-gray-600 text-sm">Untuk pertanyaan atau bantuan teknis</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Contact & Support -->
    <div class="pt-8 border-t border-gray-200">
      <div class="text-center">
        <h3 class="text-xl font-bold text-gray-900 mb-4">Butuh Bantuan Privasi?</h3>
        <p class="text-gray-700 mb-6 max-w-2xl mx-auto">
          Untuk pertanyaan tentang kebijakan privasi, permintaan penghapusan data, atau laporan penyalahgunaan
        </p>
        
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
          <a href="mailto:admin@bkerjo.com" 
             class="inline-flex items-center gap-2 bg-[#080D70] hover:bg-[#05084d] text-white font-bold px-6 py-3 rounded-full transition-colors">
            <i class="fas fa-envelope"></i>
            Email: admin@bkerjo.com
          </a>
          <a href="/hubungi-kami" 
             class="inline-flex items-center gap-2 border-2 border-[#080D70] text-[#080D70] hover:bg-[#080D70] hover:text-white font-bold px-6 py-3 rounded-full transition-colors">
            <i class="fas fa-headset"></i>
            Halaman Hubungi Kami
          </a>
        </div>
        
        <div class="mt-8 pt-6 border-t border-gray-200">
          <div class="inline-flex items-center gap-2 text-gray-600 text-sm">
            <i class="fas fa-exclamation-circle"></i>
            <span>Kebijakan ini dapat diperbarui. Perubahan akan diumumkan di halaman ini.</span>
          </div>
        </div>
      </div>
    </div>
    
  </div>
</section>

<!-- Simple Privacy Notice -->
<section class="max-w-4xl mx-auto px-4 sm:px-6 mt-8 mb-12">
  <div class="bg-gradient-to-r from-green-50 to-blue-50 rounded-2xl p-8 border border-green-200">
    <div class="flex flex-col md:flex-row items-center gap-6">
      <div class="w-20 h-20 rounded-full bg-white border-4 border-green-300 flex items-center justify-center">
        <i class="fas fa-lock text-green-600 text-2xl"></i>
      </div>
      <div class="text-center md:text-left">
        <h3 class="text-2xl font-bold text-gray-900 mb-2">Privasi Sederhana, Proses Mudah</h3>
        <p class="text-gray-700">
          bkerjo.com menghormati privasi Anda dengan sistem minimalis. Tanpa login yang rumit, 
          tanpa data berlebihan. Fokus pada menghubungkan Anda dengan peluang kerja terbaik di Bengkulu.
        </p>
      </div>
    </div>
  </div>
</section>

@endsection