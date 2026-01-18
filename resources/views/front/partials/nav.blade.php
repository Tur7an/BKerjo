<nav class="sticky top-0 z-50 bg-white/90 backdrop-blur-md border-b border-gray-200 shadow-lg shadow-gray-100/50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="flex items-center justify-between h-16 md:h-20">

    <!-- Logo BKerjo -->
    <a href="/" class="flex items-center gap-3 group">
      <div class="flex-shrink-0">
          <img 
              src="{{ asset('assets/logo.png') }}" 
              alt="Logo BKerjo"
              class="w-8 h-8 md:w-10 md:h-10 object-contain transition-transform duration-300 group-hover:scale-105"
          >
      </div>
      <div class="flex flex-col">
              <span class="font-extrabold text-2xl md:text-3xl tracking-tight bg-gradient-to-r from-[#080D70] via-[#1a403a] to-[#2C7404] bg-clip-text text-transparent group-hover:saturate-150 transition-all duration-300">
                  BKerjo
              </span>
              <div class="flex items-center gap-1.5 -mt-1">
                  <span class="h-[1px] w-4 bg-gray-300 hidden sm:block"></span>
                  <span class="text-[10px] md:text-xs font-medium uppercase tracking-widest text-gray-400 hidden sm:block">
                      Portal Cari Lokak
                  </span>
              </div>
          </div>
    </a>
      <!-- Desktop Menu -->
      <ul class="hidden md:flex items-center gap-8 font-medium">
        <li>
          <a href="{{ route('jobs.index') }}" 
             class="relative px-3 py-2 text-gray-700 hover:text-[#080D70] transition-colors duration-300 group">
            <i class="fas fa-search mr-2 text-sm opacity-70 group-hover:opacity-100"></i>
            Cari Loker
            <span class="absolute -bottom-1 left-0 w-0 h-[3px] bg-gradient-to-r from-[#080D70] to-[#2C7404] group-hover:w-full transition-all duration-500 rounded-full"></span>
          </a>
        </li>
        <li>
          <a href="{{ route('pasangloker.create') }}" 
             class="relative px-3 py-2 text-gray-700 hover:text-[#080D70] transition-colors duration-300 group">
            <i class="fas fa-bullhorn mr-2 text-sm opacity-70 group-hover:opacity-100"></i>
            Pasang Loker
            <span class="absolute -bottom-1 left-0 w-0 h-[3px] bg-gradient-to-r from-[#080D70] to-[#2C7404] group-hover:w-full transition-all duration-500 rounded-full"></span>
          </a>
        </li>
        <li>
          <a href="{{ route('pelatihan') }}" 
             class="relative px-3 py-2 text-gray-700 hover:text-[#080D70] transition-colors duration-300 group">
            <i class="fas fa-graduation-cap mr-2 text-sm opacity-70 group-hover:opacity-100"></i>
            Pelatihan
            <span class="absolute -bottom-1 left-0 w-0 h-[3px] bg-gradient-to-r from-[#080D70] to-[#2C7404] group-hover:w-full transition-all duration-500 rounded-full"></span>
            <span class="absolute -top-1 -right-1 bg-green-500 text-white text-xs rounded-full px-2 py-0.5">
              Baru
            </span>
          </a>
        </li>
        <li>
          <a href="{{ route('tentang') }}" 
             class="relative px-3 py-2 text-gray-700 hover:text-[#080D70] transition-colors duration-300 group">
            <i class="fas fa-info-circle mr-2 text-sm opacity-70 group-hover:opacity-100"></i>
            Tentang Kami
            <span class="absolute -bottom-1 left-0 w-0 h-[3px] bg-gradient-to-r from-[#080D70] to-[#2C7404] group-hover:w-full transition-all duration-500 rounded-full"></span>
          </a>
        </li>
      </ul>

      <!-- Desktop CTA Button (hidden di mobile) -->
      <div class="hidden md:block">
        <a href="{{ route('pasangloker.create') }}"
           class="relative bg-gradient-to-r from-[#2C7404] via-green-600 to-[#2C7404] hover:from-green-600 hover:via-[#2C7404] hover:to-green-600 text-white px-6 py-3 rounded-full font-bold transition-all duration-500 hover:scale-105 hover:shadow-xl shadow-lg shadow-green-200 bg-[length:200%_auto]">
          <i class="fas fa-plus-circle mr-2"></i>
          Pasang Loker Gratis
        </a>
      </div>

      <!-- Mobile Menu Button -->
      <button id="mobile-menu-button" class="md:hidden flex flex-col items-center justify-center w-10 h-10 rounded-lg hover:bg-gray-100 transition-colors">
        <span class="w-6 h-0.5 bg-gray-700 mb-1.5 transition-transform duration-300"></span>
        <span class="w-6 h-0.5 bg-gray-700 mb-1.5 transition-opacity duration-300"></span>
        <span class="w-6 h-0.5 bg-gray-700 transition-transform duration-300"></span>
      </button>
    </div>

    <!-- Mobile Menu Dropdown -->
    <div id="mobile-menu" class="md:hidden bg-white rounded-xl shadow-lg border border-gray-200 overflow-hidden max-h-0 transition-all duration-300">
      <div class="p-4 space-y-2">
        <a href="{{ route('jobs.index') }}" class="flex items-center p-3 rounded-lg hover:bg-blue-50 transition-colors group">
          <div class="w-10 h-10 flex items-center justify-center bg-blue-100 rounded-lg group-hover:bg-blue-200 transition-colors mr-3">
            <i class="fas fa-search text-blue-600"></i>
          </div>
          <span class="font-semibold text-gray-800">Cari Loker</span>
        </a>
        
        <a href="{{ route('pasangloker.create') }}" class="flex items-center p-3 rounded-lg hover:bg-orange-50 transition-colors group">
          <div class="w-10 h-10 flex items-center justify-center bg-orange-100 rounded-lg group-hover:bg-orange-200 transition-colors mr-3">
            <i class="fas fa-bullhorn text-orange-600"></i>
          </div>
          <span class="font-semibold text-gray-800">Pasang Loker</span>
        </a>
        
        <a href="{{ route('pelatihan') }}" class="flex items-center p-3 rounded-lg hover:bg-green-50 transition-colors group">
          <div class="w-10 h-10 flex items-center justify-center bg-green-100 rounded-lg group-hover:bg-green-200 transition-colors mr-3">
            <i class="fas fa-graduation-cap text-green-600"></i>
          </div>
          <div class="flex-1 flex items-center justify-between">
            <span class="font-semibold text-gray-800">Pelatihan</span>
            <span class="bg-green-100 text-green-800 text-xs font-bold px-2 py-1 rounded-full">Baru</span>
          </div>
        </a>
        
        <a href="{{ route('tentang') }}" class="flex items-center p-3 rounded-lg hover:bg-purple-50 transition-colors group">
          <div class="w-10 h-10 flex items-center justify-center bg-purple-100 rounded-lg group-hover:bg-purple-200 transition-colors mr-3">
            <i class="fas fa-info-circle text-purple-600"></i>
          </div>
          <span class="font-semibold text-gray-800">Tentang Kami</span>
        </a>
        
        <!-- Mobile CTA Button di dalam dropdown -->
        <a href="{{ route('pasangloker.create') }}" 
           class="block mt-4 p-4 bg-gradient-to-r from-[#2C7404] to-green-600 text-white rounded-xl font-bold text-center transition-all duration-300 hover:shadow-lg hover:scale-[1.02]">
          <div class="flex items-center justify-center gap-2">
            <i class="fas fa-plus-circle text-lg"></i>
            <span>Pasang Loker Gratis</span>
          </div>
          <p class="text-sm font-normal mt-1 opacity-90">Mulai dari 0 Rupiah</p>
        </a>
      </div>
    </div>
  </div>
</nav>

<!-- JavaScript untuk Mobile Menu -->
<script>
document.addEventListener('DOMContentLoaded', function() {
  const mobileMenuButton = document.getElementById('mobile-menu-button');
  const mobileMenu = document.getElementById('mobile-menu');
  const menuSpans = mobileMenuButton.querySelectorAll('span');
  
  if (mobileMenuButton && mobileMenu) {
    mobileMenuButton.addEventListener('click', function() {
      const isOpen = mobileMenu.classList.contains('max-h-0');
      
      // Toggle menu
      if (isOpen) {
        mobileMenu.classList.remove('max-h-0');
        mobileMenu.classList.add('max-h-[500px]', 'mt-2', 'mb-4');
      } else {
        mobileMenu.classList.add('max-h-0');
        mobileMenu.classList.remove('max-h-[500px]', 'mt-2', 'mb-4');
      }
      
      // Animate hamburger icon
      if (!isOpen) {
        // Close icon (hamburger)
        menuSpans[0].classList.remove('rotate-45', 'translate-y-2');
        menuSpans[1].classList.remove('opacity-0');
        menuSpans[2].classList.remove('-rotate-45', '-translate-y-1');
      } else {
        // Open icon (X)
        menuSpans[0].classList.add('rotate-45', 'translate-y-2');
        menuSpans[1].classList.add('opacity-0');
        menuSpans[2].classList.add('-rotate-45', '-translate-y-1');
      }
    });
    
    // Close menu when clicking outside
    document.addEventListener('click', function(event) {
      if (!mobileMenu.contains(event.target) && !mobileMenuButton.contains(event.target)) {
        if (!mobileMenu.classList.contains('max-h-0')) {
          mobileMenu.classList.add('max-h-0');
          mobileMenu.classList.remove('max-h-[500px]', 'mt-2', 'mb-4');
          menuSpans[0].classList.remove('rotate-45', 'translate-y-2');
          menuSpans[1].classList.remove('opacity-0');
          menuSpans[2].classList.remove('-rotate-45', '-translate-y-1');
        }
      }
    });
  }
});
</script>