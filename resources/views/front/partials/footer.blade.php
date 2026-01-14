<footer class="mt-24 bg-gradient-to-b from-[#080D70] to-[#05084d] text-white">
  <div class="max-w-7xl mx-auto px-6 py-16">
    
    <!-- Main Footer Content -->
    <div class="grid md:grid-cols-2 lg:grid-cols-5 gap-10 mb-12">
      
      <!-- Brand & Description -->
      <div class="lg:col-span-2">
        <div class="flex items-center gap-3 mb-6">
          <div class="w-12 h-12 rounded-full bg-white/10 backdrop-blur-sm border border-white/20 flex items-center justify-center">
            <i class="fas fa-briefcase text-xl"></i>
          </div>
          <div>
            <h3 class="text-2xl font-bold bg-gradient-to-r from-white to-blue-200 bg-clip-text text-transparent">
              bkerjo.com
            </h3>
            <p class="text-xs text-blue-200">Portal Cari Lokak</p>
          </div>
        </div>
        
        <p class="text-blue-200 mb-6 leading-relaxed max-w-md">
          Portal lowongan kerja & pelatihan terpercaya untuk wilayah Bengkulu dan sekitarnya. 
          Temukan pekerjaan impianmu atau rekrut talenta terbaik bersama kami.
        </p>
        
        <!-- Ask -->
        <div class="mb-6">
          <h4 class="font-semibold mb-3 text-white">Tanya admin ?</h4>
          <div class="flex gap-2">
            <input 
              type="text" 
              placeholder="Pesan anda" 
              class="flex-1 px-4 py-3 bg-white/10 border border-white/20 rounded-lg text-white placeholder-blue-300 focus:outline-none focus:ring-2 focus:ring-[#2C7404] focus:border-transparent"
            >
            <button class="bg-gradient-to-r from-[#2C7404] to-green-600 hover:from-green-600 hover:to-[#2C7404] text-white px-5 rounded-lg font-semibold transition-all duration-300 transform hover:scale-105">
              <i class="fas fa-paper-plane"></i>
            </button>
          </div>
          <p class="text-xs text-blue-300 mt-2">
            Kirimkan pesan anda langsung ke admin kami.
          </p>
        </div>
      </div>
      
      <!-- Quick Links -->
      <div>
        <h4 class="font-bold text-lg mb-6 pb-2 border-b border-white/20 flex items-center gap-2">
          <i class="fas fa-link text-sm"></i>
          Menu Cepat
        </h4>
        <ul class="space-y-4">
          <li>
            <a href="{{ route('jobs.index') }}" class="text-blue-200 hover:text-white transition-colors flex items-center gap-2 group">
              <i class="fas fa-search text-xs group-hover:text-[#2C7404] transition-colors"></i>
              <span>Cari Lowongan</span>
            </a>
          </li>
          <li>
            <a href="{{ route('pasangloker') }}" class="text-blue-200 hover:text-white transition-colors flex items-center gap-2 group">
              <i class="fas fa-plus-circle text-xs group-hover:text-[#2C7404] transition-colors"></i>
              <span>Pasang Lowongan</span>
            </a>
          </li>
          <li>
            <a href="{{ route('pelatihan') }}" class="text-blue-200 hover:text-white transition-colors flex items-center gap-2 group">
              <i class="fas fa-graduation-cap text-xs group-hover:text-[#2C7404] transition-colors"></i>
              <span>Pelatihan Gratis</span>
            </a>
          </li>
        </ul>
      </div>
      
      <!-- Support -->
      <div>
        <h4 class="font-bold text-lg mb-6 pb-2 border-b border-white/20 flex items-center gap-2">
          <i class="fas fa-question-circle text-sm"></i>
          Bantuan
        </h4>
        <ul class="space-y-4">
          <li>
            <a href="#" class="text-blue-200 hover:text-white transition-colors flex items-center gap-2 group">
              <i class="fas fa-file-contract text-xs group-hover:text-[#2C7404] transition-colors"></i>
              <span>Syarat & Ketentuan</span>
            </a>
          </li>
          <li>
            <a href="#" class="text-blue-200 hover:text-white transition-colors flex items-center gap-2 group">
              <i class="fas fa-shield-alt text-xs group-hover:text-[#2C7404] transition-colors"></i>
              <span>Kebijakan Privasi</span>
            </a>
          </li>
          <li>
            <a href="#" class="text-blue-200 hover:text-white transition-colors flex items-center gap-2 group">
              <i class="fas fa-question text-xs group-hover:text-[#2C7404] transition-colors"></i>
              <span>FAQ</span>
            </a>
          </li>
          <li>
            <a href="#" class="text-blue-200 hover:text-white transition-colors flex items-center gap-2 group">
              <i class="fas fa-headset text-xs group-hover:text-[#2C7404] transition-colors"></i>
              <span>Hubungi Kami</span>
            </a>
          </li>
        </ul>
      </div>
      
      <!-- Contact & Social -->
      <div>
        <h4 class="font-bold text-lg mb-6 pb-2 border-b border-white/20 flex items-center gap-2">
          <i class="fas fa-address-book text-sm"></i>
          Hubungi Kami
        </h4>
        
        <div class="space-y-4 mb-6">
          <div class="flex items-start gap-3">
            <div class="w-10 h-10 rounded-lg bg-white/10 flex items-center justify-center flex-shrink-0">
              <i class="fas fa-envelope text-sm"></i>
            </div>
            <div>
              <div class="font-medium text-white">Email</div>
              <a href="mailto:admin@bkerjo.com" class="text-blue-200 hover:text-white transition-colors text-sm">
                admin@bkerjo.com
              </a>
            </div>
          </div>
          
          <div class="flex items-start gap-3">
            <div class="w-10 h-10 rounded-lg bg-white/10 flex items-center justify-center flex-shrink-0">
              <i class="fab fa-whatsapp text-sm"></i>
            </div>
            <div>
              <div class="font-medium text-white">WhatsApp</div>
              <a href="https://wa.me/628xxxxxxxxxx" class="text-blue-200 hover:text-white transition-colors text-sm">
                +62 8xx xxxx xxxx
              </a>
            </div>
          </div>
          
          <div class="flex items-start gap-3">
            <div class="w-10 h-10 rounded-lg bg-white/10 flex items-center justify-center flex-shrink-0">
              <i class="fas fa-map-marker-alt text-sm"></i>
            </div>
            <div>
              <div class="font-medium text-white">Lokasi</div>
              <div class="text-blue-200 text-sm">Bengkulu, Indonesia</div>
            </div>
          </div>
        </div>
        
        <!-- Social Media -->
        <div>
          <h5 class="font-medium mb-3 text-white">Ikuti Kami</h5>
          <div class="flex gap-3">
            <a href="#" class="w-10 h-10 rounded-lg bg-white/10 hover:bg-white/20 border border-white/20 flex items-center justify-center transition-all duration-300 hover:scale-110 hover:text-[#E4405F]">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="#" class="w-10 h-10 rounded-lg bg-white/10 hover:bg-white/20 border border-white/20 flex items-center justify-center transition-all duration-300 hover:scale-110 hover:text-[#25D366]">
              <i class="fab fa-whatsapp"></i>
            </a>
          </div>
        </div>
      </div>
      
    </div>
    
  </div>
  
  <!-- Copyright -->
  <div class="bg-[#04062e]">
    <div class="max-w-7xl mx-auto px-6 py-5">
      <div class="flex flex-col md:flex-row justify-between items-center gap-4 text-center md:text-left">
        <div class="text-blue-300 text-sm">
          © {{ date('Y') }} <span class="font-semibold text-white">bkerjo.com</span> — All rights reserved.
        </div>
        
        <div class="flex flex-wrap justify-center gap-6 text-blue-300 text-sm">
          <a href="#" class="hover:text-white transition-colors">Syarat Layanan</a>
          <a href="#" class="hover:text-white transition-colors">Kebijakan Privasi</a>
          <a href="#" class="hover:text-white transition-colors">Peta Situs</a>
          <a href="#" class="hover:text-white transition-colors">Cookie Policy</a>
        </div>
      
      </div>
    </div>
  </div>
</footer>