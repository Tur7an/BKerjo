@extends('front.layout')

@section('content')

<article>
<div class="max-w-7xl mx-auto px-4 sm:px-6">
  <div class="flex flex-col lg:flex-row gap-8">
    
    <!-- Sidebar Filter with Scroll -->
    <aside class="lg:w-1/4">
      <div class="bg-white rounded-2xl shadow-xl border border-gray-200 overflow-hidden sticky top-6">
        
        <!-- Filter Header (Fixed) -->
        <div class="bg-gradient-to-r from-[#080D70] to-[#2C7404] p-6 text-white">
          <div class="flex items-center justify-between">
            <h2 class="text-xl font-bold">
              <i class="fas fa-filter mr-2"></i>
              Filter Pencarian
            </h2>
            <button class="text-sm hover:text-blue-200 transition-colors" onclick="resetFilters()">
              <i class="fas fa-redo-alt mr-1"></i>Reset
            </button>
          </div>
        </div>
        
        <!-- Scrollable Filter Content -->
        <div class="max-h-[calc(100vh-180px)] overflow-y-auto" id="filterScroll">
          <div class="p-6 space-y-8">
            
            <!-- Search Input -->
            <div class="pb-4 border-b border-gray-200">
              <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                  <i class="fas fa-search text-gray-400"></i>
                </div>
                <input 
                  type="text" 
                  placeholder="Cari pekerjaan, perusahaan..." 
                  class="w-full pl-12 pr-4 py-3 bg-gray-50 border border-gray-300 rounded-xl text-gray-800 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-[#080D70]/30 focus:border-[#080D70] transition-all"
                  id="jobSearch"
                >
              </div>
            </div>
            
            <!-- Location Filter -->
            <div>
              <div class="flex items-center justify-between mb-4">
                <h4 class="font-semibold text-gray-900 flex items-center gap-2">
                  <i class="fas fa-map-marker-alt text-[#080D70]"></i>
                  Lokasi
                </h4>
                <button class="text-xs text-[#080D70] hover:text-[#05084d] font-medium" onclick="clearSection('location')">
                  Hapus
                </button>
              </div>
              <div class="space-y-2 max-h-48 overflow-y-auto pr-2 custom-scrollbar">
                @foreach(['Kota Bengkulu', 'Bengkulu Utara', 'Bengkulu Selatan', 'Bengkulu Tengah', 'Kaur', 'Seluma', 'Rejang Lebong', 'Kepahiang', 'Lebong', 'Mukomuko'] as $index => $location)
                <label class="flex items-center gap-3 p-2 rounded-lg hover:bg-gray-50 cursor-pointer transition-colors group">
                  <input type="checkbox" name="location" value="{{ $location }}" class="rounded text-[#080D70] focus:ring-[#080D70] peer">
                  <span class="text-gray-700 peer-checked:font-medium peer-checked:text-[#080D70] flex-1">{{ $location }}</span>
                  <span class="text-xs text-gray-500 bg-gray-100 px-2 py-1 rounded">{{ rand(10, 150) }}</span>
                </label>
                @endforeach
              </div>
            </div>
            
            <!-- Education Filter -->
            <div>
              <div class="flex items-center justify-between mb-4">
                <h4 class="font-semibold text-gray-900 flex items-center gap-2">
                  <i class="fas fa-graduation-cap text-[#080D70]"></i>
                  Pendidikan
                </h4>
                <button class="text-xs text-[#080D70] hover:text-[#05084d] font-medium" onclick="clearSection('education')">
                  Hapus
                </button>
              </div>
              <div class="space-y-2 max-h-48 overflow-y-auto pr-2 custom-scrollbar">
                @foreach(['SD', 'SMP', 'SMA/SMK', 'D1/D2', 'D3', 'D4/S1', 'S2', 'S3'] as $edu)
                <label class="flex items-center gap-3 p-2 rounded-lg hover:bg-gray-50 cursor-pointer transition-colors group">
                  <input type="checkbox" name="education" value="{{ $edu }}" class="rounded text-[#080D70] focus:ring-[#080D70] peer">
                  <span class="text-gray-700 peer-checked:font-medium peer-checked:text-[#080D70]">{{ $edu }}</span>
                  <span class="ml-auto text-xs text-gray-500">{{ rand(5, 80) }}</span>
                </label>
                @endforeach
              </div>
            </div>
            
            <!-- Job Type Filter -->
            <div>
              <div class="flex items-center justify-between mb-4">
                <h4 class="font-semibold text-gray-900 flex items-center gap-2">
                  <i class="fas fa-briefcase text-[#080D70]"></i>
                  Tipe Pekerjaan
                </h4>
                <button class="text-xs text-[#080D70] hover:text-[#05084d] font-medium" onclick="clearSection('job_type')">
                  Hapus
                </button>
              </div>
              <div class="flex flex-wrap gap-2">
                @foreach(['Penuh Waktu', 'Paruh Waktu', 'Kontrak', 'Pekerja Lepas', 'Magang', 'Jarak Jauh'] as $type)
                <label class="inline-flex items-center cursor-pointer">
                  <input type="checkbox" name="job_type" value="{{ $type }}" class="hidden peer">
                  <div class="px-4 py-2 rounded-lg bg-gray-100 text-gray-700 text-sm font-medium transition-all duration-200 peer-checked:bg-gradient-to-r peer-checked:from-[#080D70] peer-checked:to-[#2C7404] peer-checked:text-white hover:bg-gray-200 peer-checked:hover:from-[#05084d] peer-checked:hover:to-[#1e5a03]">
                    {{ $type }}
                    <span class="text-xs opacity-75 ml-1">({{ rand(20, 200) }})</span>
                  </div>
                </label>
                @endforeach
              </div>
            </div>
            
            <!-- Apply Filters Button (Fixed at bottom of scroll) -->
            <div class="sticky bottom-0 bg-white pt-4 border-t border-gray-200 -mx-6 -mb-6 px-6 pb-6">
              <button onclick="applyFilters()" class="w-full bg-gradient-to-r from-[#080D70] to-[#2C7404] hover:from-[#05084d] hover:to-[#1e5a03] text-white font-semibold py-3.5 rounded-xl transition-all duration-300 transform hover:scale-[1.02] shadow-md hover:shadow-lg flex items-center justify-center gap-2">
                <i class="fas fa-check-circle"></i>
                Terapkan Filter
              </button>
            </div>
            
          </div>
        </div>
        
      </div>
    </aside>
    
    <!-- Main Content -->
    <main class="lg:w-3/4">
      
      <!-- Job List Header -->
      <div class="mb-8">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 mb-6">
          <div>
            <h2 class="text-2xl md:text-3xl font-bold text-gray-900">
              Lowongan Kerja Tersedia
              <span class="text-[#080D70]">(1,247)</span>
            </h2>
            <p class="text-gray-600 mt-1">Temukan pekerjaan yang sesuai dengan keahlian Anda</p>
          </div>
          
          <div class="flex items-center gap-3">
            <!-- Sort Dropdown -->
            <div class="relative">
              <select class="appearance-none bg-white border border-gray-300 rounded-xl px-4 py-2.5 pr-10 text-gray-700 focus:outline-none focus:ring-2 focus:ring-[#080D70]/30 focus:border-[#080D70] cursor-pointer">
                <option>Terbaru</option>
                <option>Gaji Tertinggi</option>
                <option>Paling Banyak Dilihat</option>
              </select>
              <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                <i class="fas fa-chevron-down text-gray-400"></i>
              </div>
            </div>
            
            <!-- View Toggle -->
            <div class="hidden md:flex items-center bg-gray-100 rounded-xl p-1">
              <button class="p-2 rounded-lg hover:bg-white transition-colors active-view">
                <i class="fas fa-th-large text-[#080D70]"></i>
              </button>
              <button class="p-2 rounded-lg hover:bg-white transition-colors">
                <i class="fas fa-list text-gray-600"></i>
              </button>
            </div>
          </div>
        </div>
        
        <!-- Active Filters -->
        <div class="flex flex-wrap gap-2 mb-6" id="activeFilters">
          <span class="text-sm text-gray-600"></span>
          <!-- Active filters will be added here by JavaScript -->
        </div>
      </div>
      
      <!-- Job Listings -->
      <section aria-label="Job List" class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-12">
        @for($i = 0; $i < 6; $i++)
          @include('front.components.job-card')
        @endfor
      </section>
      
      <!-- Pagination -->
      <div class="flex justify-center">
        <nav class="flex items-center gap-2">
          <button class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-300 hover:bg-gray-50 transition-colors">
            <i class="fas fa-chevron-left text-gray-600"></i>
          </button>
          
          <button class="w-10 h-10 flex items-center justify-center rounded-lg bg-[#080D70] text-white font-semibold">
            1
          </button>
          
          <button class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-300 hover:bg-gray-50 transition-colors">
            2
          </button>
          
          <button class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-300 hover:bg-gray-50 transition-colors">
            3
          </button>
          
          <span class="px-2 text-gray-500">...</span>
          
          <button class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-300 hover:bg-gray-50 transition-colors">
            10
          </button>
          
          <button class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-300 hover:bg-gray-50 transition-colors">
            <i class="fas fa-chevron-right text-gray-600"></i>
          </button>
        </nav>
      </div>
      
      <!-- No Results State -->
      <div class="hidden text-center py-16" id="noResults">
        <div class="w-24 h-24 rounded-full bg-blue-50 mx-auto mb-6 flex items-center justify-center">
          <i class="fas fa-search text-3xl text-[#080D70]"></i>
        </div>
        <h3 class="text-2xl font-bold text-gray-900 mb-3">Tidak ada lowongan yang ditemukan</h3>
        <p class="text-gray-600 mb-6 max-w-md mx-auto">
          Coba ubah filter pencarian Anda atau cari dengan kata kunci yang berbeda
        </p>
        <button onclick="resetFilters()" class="bg-[#080D70] hover:bg-[#05084d] text-white px-6 py-3 rounded-xl font-semibold transition-colors">
          Reset Filter
        </button>
      </div>
      
    </main>
    
  </div>
</div>
</article>

<!-- Custom CSS for Scrollbar -->
<style>
.custom-scrollbar::-webkit-scrollbar {
  width: 6px;
}

.custom-scrollbar::-webkit-scrollbar-track {
  background: #f1f1f1;
  border-radius: 10px;
}

.custom-scrollbar::-webkit-scrollbar-thumb {
  background: #c1c1c1;
  border-radius: 10px;
}

.custom-scrollbar::-webkit-scrollbar-thumb:hover {
  background: #a1a1a1;
}

#filterScroll::-webkit-scrollbar {
  width: 8px;
}

#filterScroll::-webkit-scrollbar-track {
  background: #f8fafc;
}

#filterScroll::-webkit-scrollbar-thumb {
  background: #cbd5e1;
  border-radius: 10px;
}

#filterScroll::-webkit-scrollbar-thumb:hover {
  background: #94a3b8;
}

.active-view {
  background-color: white;
  box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}
</style>

<!-- JavaScript for Enhanced Filter Functionality -->
<script>
// Initialize active filters
let activeFilters = [];

// Reset all filters
function resetFilters() {
  // Uncheck all checkboxes
  document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => {
    checkbox.checked = false;
  });
  
  // Reset search input
  document.getElementById('jobSearch').value = '';
  
  // Reset selects
  document.querySelectorAll('select').forEach(select => {
    select.selectedIndex = 0;
  });
  
  // Clear active filters
  activeFilters = [];
  updateActiveFiltersDisplay();
  
  // Show all job cards
  document.querySelectorAll('.job-card').forEach(card => {
    card.style.display = 'block';
  });
  
  // Hide no results message
  document.getElementById('noResults').style.display = 'none';
  
  // Show success message
  showToast('Semua filter telah direset');
}

// Clear specific filter section
function clearSection(sectionName) {
  document.querySelectorAll(`input[name="${sectionName}"]`).forEach(checkbox => {
    checkbox.checked = false;
  });
  
  // Remove from active filters
  activeFilters = activeFilters.filter(filter => !filter.startsWith(sectionName + ':'));
  updateActiveFiltersDisplay();
  
  showToast(`Filter ${sectionName} telah dihapus`);
}

// Apply filters
function applyFilters() {
  // Collect all active filters
  activeFilters = [];
  
  // Location filters
  document.querySelectorAll('input[name="location"]:checked').forEach(checkbox => {
    activeFilters.push(`location:${checkbox.value}`);
  });
  
  // Education filters
  document.querySelectorAll('input[name="education"]:checked').forEach(checkbox => {
    activeFilters.push(`education:${checkbox.value}`);
  });
  
  // Job type filters
  document.querySelectorAll('input[name="job_type"]:checked').forEach(checkbox => {
    activeFilters.push(`job_type:${checkbox.value}`);
  });
  
  // Update display
  updateActiveFiltersDisplay();
  
  // Filter job cards
  filterJobCards();
  
  showToast('Filter diterapkan');
}

// Update active filters display
function updateActiveFiltersDisplay() {
  const container = document.getElementById('activeFilters');
  const filterElements = container.querySelectorAll('.filter-badge');
  filterElements.forEach(el => el.remove());
  
  activeFilters.forEach(filter => {
    const [type, value] = filter.split(':');
    const badge = document.createElement('div');
    badge.className = 'inline-flex items-center gap-1 px-3 py-1.5 bg-blue-100 text-blue-800 rounded-full text-sm filter-badge';
    badge.innerHTML = `
      <span>${value}</span>
      <button class="ml-1 text-blue-600 hover:text-blue-800" onclick="removeFilter('${filter}')">
        <i class="fas fa-times text-xs"></i>
      </button>
    `;
    container.appendChild(badge);
  });
  
  // Update clear all button
  const clearAllBtn = container.querySelector('.clear-all');
  if (!clearAllBtn && activeFilters.length > 0) {
    const clearBtn = document.createElement('button');
    clearBtn.className = 'text-sm text-[#080D70] hover:text-[#05084d] font-medium clear-all';
    clearBtn.innerHTML = '<i class="fas fa-times mr-1"></i>Hapus Semua';
    clearBtn.onclick = resetFilters;
    container.appendChild(clearBtn);
  } else if (clearAllBtn && activeFilters.length === 0) {
    clearAllBtn.remove();
  }
}

// Remove single filter
function removeFilter(filter) {
  const [type, value] = filter.split(':');
  
  // Uncheck corresponding checkbox
  const checkbox = document.querySelector(`input[name="${type}"][value="${value}"]`);
  if (checkbox) checkbox.checked = false;
  
  // Remove from active filters
  activeFilters = activeFilters.filter(f => f !== filter);
  updateActiveFiltersDisplay();
  filterJobCards();
}

// Filter job cards based on active filters
function filterJobCards() {
  const jobCards = document.querySelectorAll('.job-card');
  let visibleCount = 0;
  
  jobCards.forEach(card => {
    let shouldShow = true;
    
    // Check if card matches all active filters
    activeFilters.forEach(filter => {
      const [type, value] = filter.split(':');
      const cardText = card.textContent.toLowerCase();
      
      if (!cardText.includes(value.toLowerCase())) {
        shouldShow = false;
      }
    });
    
    if (shouldShow) {
      card.style.display = 'block';
      visibleCount++;
    } else {
      card.style.display = 'none';
    }
  });
  
  // Show/hide no results message
  const noResults = document.getElementById('noResults');
  if (visibleCount === 0 && activeFilters.length > 0) {
    noResults.style.display = 'block';
  } else {
    noResults.style.display = 'none';
  }
  
  // Update count in header
  const countElement = document.querySelector('main h2 .text-\\[\\#080D70\\]');
  if (countElement) {
    countElement.textContent = `(${visibleCount})`;
  }
}

// Search functionality
document.getElementById('jobSearch').addEventListener('input', function(e) {
  const searchTerm = e.target.value.toLowerCase();
  const jobCards = document.querySelectorAll('.job-card');
  let visibleCount = 0;
  
  jobCards.forEach(card => {
    const cardText = card.textContent.toLowerCase();
    if (cardText.includes(searchTerm)) {
      card.style.display = 'block';
      visibleCount++;
    } else {
      card.style.display = 'none';
    }
  });
  
  // Update count
  const countElement = document.querySelector('main h2 .text-\\[\\#080D70\\]');
  if (countElement) {
    countElement.textContent = `(${visibleCount})`;
  }
  
  // Show/hide no results message
  const noResults = document.getElementById('noResults');
  if (visibleCount === 0 && searchTerm.length > 0) {
    noResults.style.display = 'block';
  } else {
    noResults.style.display = 'none';
  }
});

// Toast notification
function showToast(message) {
  const toast = document.createElement('div');
  toast.className = 'fixed bottom-4 right-4 bg-gray-800 text-white px-4 py-2 rounded-lg shadow-lg transform transition-all duration-300 opacity-0 translate-y-4';
  toast.textContent = message;
  document.body.appendChild(toast);
  
  setTimeout(() => {
    toast.classList.remove('opacity-0', 'translate-y-4');
    toast.classList.add('opacity-100', 'translate-y-0');
  }, 10);
  
  setTimeout(() => {
    toast.classList.remove('opacity-100', 'translate-y-0');
    toast.classList.add('opacity-0', 'translate-y-4');
    setTimeout(() => toast.remove(), 300);
  }, 3000);
}

// Initialize on page load
document.addEventListener('DOMContentLoaded', function() {
  // Add initial text to active filters
  const container = document.getElementById('activeFilters');
  const span = document.createElement('span');
  span.className = 'text-sm text-gray-600';
  span.textContent = 'Filter aktif:';
  container.insertBefore(span, container.firstChild);
});
</script>

@endsection