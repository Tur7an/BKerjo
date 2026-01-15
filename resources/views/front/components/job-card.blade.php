<!-- Single Enhanced Job Card -->
<div class="max-w-md mx-auto">
  <div class="group bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden border border-gray-200">
    
    <!-- Job Card Header -->
    <div class="relative bg-gradient-to-r from-[#080D70] to-[#2C7404] p-5">
      <div class="flex items-start gap-4">
        <!-- Company Logo -->
        <div class="w-14 h-14 rounded-xl bg-white/20 backdrop-blur-sm border border-white/30 flex items-center justify-center shadow-md">
          <i class="fas fa-building text-xl text-white"></i>
        </div>
        
        <!-- Job Info -->
        <div class="flex-1 min-w-0">
          <div class="flex justify-between items-start mb-1">
            <h3 class="text-xl font-bold text-white truncate group-hover:text-blue-100 transition-colors">
              Frontend Developer
            </h3>
            <span class="text-xs font-semibold bg-white/20 px-2.5 py-1 rounded-full text-white">
              Full Time
            </span>
          </div>
          
          <div class="flex items-center gap-2 text-white/90 mb-3">
            <i class="fas fa-building text-xs"></i>
            <span class="font-semibold text-sm truncate">PT. Bengkulu Kerjo</span>
          </div>
          
          <!-- Quick Info -->
          <div class="flex items-center gap-4">
            <div class="flex items-center gap-1.5 text-white/80">
              <i class="fas fa-map-marker-alt text-xs"></i>
              <span class="text-xs font-medium">Kota Bengkulu</span>
            </div>
            <div class="flex items-center gap-1.5 text-white/80">
              <i class="fas fa-clock text-xs"></i>
              <span class="text-xs font-medium">2 hari lalu</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Job Card Body -->
    <div class="p-5">
      <!-- Salary Section -->
      <div class="mb-6 p-4 bg-gradient-to-r from-blue-50 to-gray-50 rounded-xl border border-gray-200">
        <div class="flex items-center justify-between mb-2">
          <div class="flex items-center gap-2">
            <i class="fas fa-money-bill-wave text-[#080D70]"></i>
            <span class="font-semibold text-gray-700">Gaji</span>
          </div>
        </div>
        <div class="flex items-baseline gap-2">
          <span class="text-2xl font-bold text-gray-900">Rp 8-12 Jt</span>
          <span class="text-gray-600 text-sm">/ bulan</span>
        </div>
      </div>
      
      <!-- Pendidikan Section -->
      <div class="mb-6">
        <div class="flex items-start gap-3 p-3 bg-blue-50 rounded-lg border border-blue-100">
          <div class="w-10 h-10 rounded-lg bg-white border border-blue-200 flex items-center justify-center flex-shrink-0">
            <i class="fas fa-graduation-cap text-[#080D70]"></i>
          </div>
          <div>
            <h4 class="font-semibold text-gray-900 text-sm mb-1">Kualifikasi Pendidikan</h4>
            <p class="text-gray-700 text-sm leading-relaxed">
              D3/S1 Teknik Informatika, Ilmu Komputer, atau bidang sejenis
            </p>
          </div>
        </div>
      </div>
      
      <!-- Stats & Date Footer -->
      <div class="pt-5 border-t border-gray-100">
        <div class="flex justify-between items-center">
          <div class="flex items-center gap-3">
            <div class="flex items-center gap-2 text-gray-600">
              <div class="relative">
                <i class="fas fa-eye text-[#2C7404] text-sm"></i>
              </div>
              <div>
                <div class="text-sm font-semibold">245</div>
                <div class="text-xs text-gray-500">Dilihat</div>
              </div>
            </div>
          </div>
          
          <div class="text-xs text-gray-500">
            <i class="far fa-calendar mr-1.5"></i>
            Diposting: 12 Jan 2025
          </div>
        </div>
      </div>
    </div>
    
    <!-- Action Button -->
    <div class="px-5 pb-5">
      <a href="{{ route('jobs.detail', 'frontend-developer') }}" 
         class="block w-full bg-gradient-to-r from-[#080D70] to-[#2C7404] hover:from-[#05084d] hover:to-[#1e5a03] text-white font-bold py-3.5 rounded-xl text-center transition-all duration-300 hover:shadow-md flex items-center justify-center gap-2 group/apply">
        Lihat Detail
      </a>
    </div>
  </div>
</div>