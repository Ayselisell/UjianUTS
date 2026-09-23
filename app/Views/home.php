<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<section class="relative bg-slate-950 text-white overflow-hidden py-24 border-b border-purple-900/40">
    <!-- Subtle Gradient background glow with #C4B5FD & #6D28D9 -->
    <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-[#6D28D9]/25 rounded-full blur-[120px] pointer-events-none"></div>
    <div class="absolute bottom-0 left-0 w-[450px] h-[450px] bg-[#C4B5FD]/20 rounded-full blur-[100px] pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <div class="lg:col-span-7 space-y-6">
                <div class="inline-flex items-center gap-2.5 px-4 py-2 rounded-full bg-[#C4B5FD]/15 border border-[#C4B5FD]/40 text-[#C4B5FD] text-xs font-bold uppercase tracking-wider">
                    <i class="fa-solid fa-utensils text-amber-400"></i> Restoran Khas Riau — Aysel Gharafaiha Saputra
                </div>
                
                <h1 class="text-4xl sm:text-6xl font-black tracking-tight leading-none text-white">
                    Kelezatan Hakiki <br>
                    <span class="bg-clip-text text-transparent bg-gradient-to-r from-[#C4B5FD] via-purple-200 to-[#C4B5FD]">Gulai Ikan Patin</span> Riau
                </h1>
                
                <p class="text-slate-300 text-base sm:text-lg leading-relaxed max-w-2xl font-normal">
                    Warisan resep masakan Melayu Riau otentik. Menggunakan potongan ikan patin segar Sungai Siak pilihan yang dipadu dalam kuah gulai santan kuning melimpah rempah asli Pekanbaru.
                </p>

                <div class="flex flex-wrap gap-4 pt-4">
                    <a href="#katalog" class="px-8 py-4 rounded-2xl bg-[#6D28D9] hover:bg-purple-700 text-white font-extrabold shadow-xl shadow-[#6D28D9]/40 hover:scale-105 transition-all flex items-center gap-3 text-sm">
                        <i class="fa-solid fa-list-check"></i> Jelajahi 9 Menu Patin
                    </a>
                    <a href="#tentang" class="px-8 py-4 rounded-2xl bg-[#C4B5FD] text-[#6D28D9] font-extrabold hover:bg-purple-200 transition-all border border-purple-300 shadow-md flex items-center gap-3 text-sm">
                        <i class="fa-solid fa-book-open"></i> Sejarah Resep Riau
                    </a>
                </div>

                <!-- Stats Badges -->
                <div class="grid grid-cols-3 gap-6 pt-8 border-t border-slate-800/80 max-w-lg">
                    <div class="p-3 bg-slate-900/60 rounded-2xl border border-purple-900/30">
                        <span class="block text-2xl font-black text-[#C4B5FD]">100%</span>
                        <span class="text-xs text-slate-400 font-medium">Bumbu Alami Melayu</span>
                    </div>
                    <div class="p-3 bg-slate-900/60 rounded-2xl border border-purple-900/30">
                        <span class="block text-2xl font-black text-[#C4B5FD]">9 Menu</span>
                        <span class="text-xs text-slate-400 font-medium">Variasi Patin Khas</span>
                    </div>
                    <div class="p-3 bg-slate-900/60 rounded-2xl border border-purple-900/30">
                        <span class="block text-2xl font-black text-[#C4B5FD]">4.9 / 5</span>
                        <span class="text-xs text-slate-400 font-medium">Rating Pelanggan</span>
                    </div>
                </div>
            </div>

            <!-- Hero Image Banner -->
            <div class="lg:col-span-5 flex justify-center">
                <div class="relative w-full max-w-md">
                    <div class="absolute inset-0 bg-[#6D28D9] rounded-3xl transform rotate-3 scale-95 opacity-40 blur-xl"></div>
                    <div class="relative bg-slate-900 border border-[#C4B5FD]/30 rounded-3xl p-3 shadow-2xl overflow-hidden">
                        <img src="<?= \App\Models\FoodModel::getImageUrl(['id' => 1, 'image' => 'gulai-ikan-patin-khas-riau.jpg']) ?>" 
                             alt="Gulai Ikan Patin Khas Riau" 
                             class="w-full h-80 object-cover rounded-2xl">
                        <div class="mt-3 p-4 bg-slate-950 rounded-2xl border border-purple-900/50 flex justify-between items-center">
                            <div>
                                <h4 class="font-extrabold text-white text-sm">Gulai Ikan Patin Khas Riau</h4>
                                <p class="text-xs text-[#C4B5FD]"><i class="fa-solid fa-location-dot text-rose-400"></i> Pekanbaru, Riau</p>
                            </div>
                            <span class="text-base font-black text-[#C4B5FD] bg-[#6D28D9]/40 px-3 py-1 rounded-xl border border-purple-500/30">Rp 45.000</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Filter & Sorting Section (#katalog) -->
<section id="katalog" class="py-20 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-12">
            <span class="px-4 py-1.5 rounded-full bg-[#C4B5FD] text-[#6D28D9] font-extrabold text-xs uppercase tracking-wider">
                Katalog Menu Kuliner Riau
            </span>
            <h2 class="text-3xl sm:text-4xl font-black text-slate-900 mt-3 tracking-tight">
                Pilih Menu Gulai Patin Favorit Anda
            </h2>
            <p class="text-slate-600 text-sm mt-2">
                Gunakan fitur <strong>Filter Kategori</strong> dan <strong>Sorting</strong> untuk menyaring 9 variasi hidangan khas Riau.
            </p>
        </div>

        <!-- Filter & Search Bar Form -->
        <form action="<?= base_url('/#katalog') ?>" method="GET" class="bg-white p-6 rounded-3xl border border-purple-200/80 shadow-xl mb-12">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-4 items-center">
                
                <!-- Search Input -->
                <div class="md:col-span-4 relative">
                    <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-[#6D28D9]">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </span>
                    <input type="text" name="search" value="<?= esc($searchKeyword ?? '') ?>" 
                           placeholder="Cari hidangan (misal: Patin, Asam Pedas)..." 
                           class="w-full pl-11 pr-4 py-3 bg-slate-50 border border-slate-200 rounded-2xl text-sm focus:outline-none focus:border-[#6D28D9] focus:ring-2 focus:ring-[#C4B5FD]/50 transition-all font-medium">
                </div>

                <!-- Filter Dropdown -->
                <div class="md:col-span-3">
                    <label class="block text-[11px] font-bold text-slate-500 uppercase tracking-wider mb-1">Filter Kategori</label>
                    <select name="category" onchange="this.form.submit()" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-2xl text-sm font-semibold text-slate-800 focus:outline-none focus:border-[#6D28D9]">
                        <option value="all">Semua Kategori Menu</option>
                        <?php foreach ($categories as $cat): ?>
                            <option value="<?= esc($cat) ?>" <?= ($selectedCat ?? '') == $cat ? 'selected' : '' ?>>
                                <?= esc($cat) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <!-- Sorting Dropdown -->
                <div class="md:col-span-3">
                    <label class="block text-[11px] font-bold text-slate-500 uppercase tracking-wider mb-1">Urutkan (Sorting)</label>
                    <select name="sort" onchange="this.form.submit()" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-2xl text-sm font-semibold text-slate-800 focus:outline-none focus:border-[#6D28D9]">
                        <option value="default" <?= ($selectedSort ?? '') == 'default' ? 'selected' : '' ?>>Rekomendasi Utama</option>
                        <option value="price_asc" <?= ($selectedSort ?? '') == 'price_asc' ? 'selected' : '' ?>>Harga: Termurah → Termahal</option>
                        <option value="price_desc" <?= ($selectedSort ?? '') == 'price_desc' ? 'selected' : '' ?>>Harga: Termahal → Termurah</option>
                        <option value="rating_desc" <?= ($selectedSort ?? '') == 'rating_desc' ? 'selected' : '' ?>>Rating Tertinggi</option>
                        <option value="name_asc" <?= ($selectedSort ?? '') == 'name_asc' ? 'selected' : '' ?>>Nama (A - Z)</option>
                    </select>
                </div>

                <!-- Action Button -->
                <div class="md:col-span-2 flex gap-2 pt-4 md:pt-0">
                    <button type="submit" class="w-full py-3 bg-[#6D28D9] text-white font-bold rounded-2xl hover:bg-purple-800 transition-colors text-sm flex items-center justify-center gap-2 shadow-md">
                        <i class="fa-solid fa-filter"></i> Filter
                    </button>
                    <?php if (!empty($selectedCat) || !empty($selectedSort) || !empty($searchKeyword)): ?>
                        <a href="<?= base_url('/') ?>" class="p-3 bg-[#C4B5FD] text-[#6D28D9] rounded-2xl hover:bg-purple-300 transition-colors flex items-center justify-center font-bold" title="Reset Filter">
                            <i class="fa-solid fa-rotate-left"></i>
                        </a>
                    <?php endif; ?>
                </div>

            </div>
        </form>

        <!-- Product Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php if (empty($foods)): ?>
                <div class="col-span-full text-center py-16 bg-white rounded-3xl border border-slate-200 p-8 shadow-sm">
                    <i class="fa-solid fa-fish text-5xl text-[#C4B5FD] mb-4"></i>
                    <h3 class="text-xl font-bold text-slate-800">Tidak ada menu yang sesuai saringan</h3>
                    <p class="text-slate-500 text-sm mt-1">Coba atur ulang kata kunci atau filter kategori Anda.</p>
                    <a href="<?= base_url('/') ?>" class="inline-block mt-4 px-6 py-2.5 bg-[#6D28D9] text-white font-bold rounded-xl text-sm">Lihat Semua Menu</a>
                </div>
            <?php else: ?>
                <?php foreach ($foods as $food): ?>
                    <div class="group bg-white rounded-3xl border border-purple-200/60 shadow-lg hover:shadow-2xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col overflow-hidden">
                        
                        <!-- Distinct Realistic Product Image -->
                        <div class="relative h-60 bg-purple-100 overflow-hidden">
                            <img src="<?= \App\Models\FoodModel::getImageUrl($food) ?>" 
                                 alt="<?= esc($food['name']) ?>" 
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            
                            <!-- Origin Badge -->
                            <span class="absolute top-4 left-4 px-3.5 py-1 bg-slate-950/80 backdrop-blur-md text-white font-bold text-xs rounded-full flex items-center gap-1.5 border border-white/10">
                                <i class="fa-solid fa-location-dot text-[#C4B5FD]"></i> <?= esc($food['origin']) ?>
                            </span>

                            <!-- Rating Badge -->
                            <span class="absolute top-4 right-4 px-3 py-1 bg-[#C4B5FD] text-[#6D28D9] font-black text-xs rounded-full shadow-md border border-purple-300 flex items-center gap-1">
                                <i class="fa-solid fa-star text-amber-500"></i> <?= number_format($food['rating'], 1) ?>
                            </span>
                        </div>

                        <!-- Card Content -->
                        <div class="p-6 flex-grow flex flex-col justify-between space-y-4">
                            <div>
                                <div class="flex items-center justify-between gap-2 mb-2">
                                    <span class="px-3 py-1 bg-[#C4B5FD]/30 text-[#6D28D9] text-xs font-bold rounded-full border border-purple-200">
                                        <?= esc($food['category']) ?>
                                    </span>
                                    <span class="text-xs font-bold text-rose-600 flex items-center gap-1">
                                        <i class="fa-solid fa-pepper-hot"></i> <?= esc($food['spice_level']) ?>
                                    </span>
                                </div>

                                <h3 class="text-lg font-black text-slate-900 group-hover:text-[#6D28D9] transition-colors line-clamp-1">
                                    <?= esc($food['name']) ?>
                                </h3>

                                <p class="text-slate-600 text-xs mt-2 line-clamp-2 leading-relaxed">
                                    <?= esc($food['description']) ?>
                                </p>
                            </div>

                            <!-- Bottom Price & Actions -->
                            <div class="pt-4 border-t border-slate-100 flex items-center justify-between gap-2">
                                <div>
                                    <span class="text-[10px] text-slate-400 uppercase font-bold block">Harga Porsi</span>
                                    <span class="text-lg font-black text-[#6D28D9]">
                                        Rp <?= number_format($food['price'], 0, ',', '.') ?>
                                    </span>
                                </div>

                                <div class="flex items-center gap-2">
                                    <a href="<?= base_url('/food/' . $food['id']) ?>" 
                                       class="px-3.5 py-2 rounded-xl bg-[#C4B5FD]/30 text-[#6D28D9] font-bold text-xs hover:bg-[#C4B5FD] transition-colors">
                                        Detail
                                    </a>
                                    <button onclick="addToCart(<?= $food['id'] ?>, '<?= esc($food['name']) ?>', <?= $food['price'] ?>)" 
                                            class="px-4 py-2 rounded-xl bg-[#6D28D9] text-white font-bold text-xs hover:bg-purple-800 shadow-md shadow-[#6D28D9]/30 transition-all flex items-center gap-1.5">
                                        <i class="fa-solid fa-plus"></i> Pesan
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

    </div>
</section>

<!-- About Riau Heritage Section (#tentang) -->
<section id="tentang" class="py-20 bg-white border-t border-purple-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            
            <div class="space-y-6">
                <span class="px-4 py-1.5 rounded-full bg-[#C4B5FD] text-[#6D28D9] font-extrabold text-xs uppercase tracking-wider">
                    Khas Melayu Riau
                </span>
                <h2 class="text-3xl sm:text-4xl font-black text-slate-900 tracking-tight">
                    Tradisi Gulai Ikan Patin Khas Sungai Siak & Kampar
                </h2>
                <p class="text-slate-600 leading-relaxed text-sm">
                    Sungai Siak dan Kampar di Riau sejak zaman kerajaan Melayu terkenal menghasilkan ikan patin bertekstur lembut dengan gurih lemak alami. 
                </p>
                <p class="text-slate-600 leading-relaxed text-sm">
                    Di <strong>Gharafaiha Resto</strong>, resep gulai patin diolah dengan bumbu rimbang, kecombrang, kunyit tua, dan asam kandis yang dimasak perlahan hingga menghasilkan aroma rempah Melayu Riau sejati.
                </p>
                
                <div class="grid grid-cols-2 gap-4 pt-4">
                    <div class="p-4 bg-purple-50 rounded-2xl border border-purple-200/60">
                        <i class="fa-solid fa-seedling text-[#6D28D9] text-xl mb-2"></i>
                        <h4 class="font-bold text-slate-900 text-sm">Bumbu Alami 100%</h4>
                        <p class="text-xs text-slate-500 mt-1">Tanpa bahan pengawet sintesis.</p>
                    </div>
                    <div class="p-4 bg-purple-50 rounded-2xl border border-purple-200/60">
                        <i class="fa-solid fa-fish text-[#6D28D9] text-xl mb-2"></i>
                        <h4 class="font-bold text-slate-900 text-sm">Patin Segar Harian</h4>
                        <p class="text-xs text-slate-500 mt-1">Dipasok langsung dari nelayan lokal Riau.</p>
                    </div>
                </div>
            </div>

            <div class="relative">
                <div class="aspect-video rounded-3xl overflow-hidden shadow-2xl border-4 border-[#C4B5FD] bg-slate-900">
                    <img src="<?= \App\Models\FoodModel::getImageUrl(['id' => 2, 'image' => 'gulai-patin-asam-pedas-kampar.jpg']) ?>" 
                         alt="Gulai Patin Asam Pedas Riau" 
                         class="w-full h-full object-cover">
                </div>
                <div class="absolute -bottom-6 -left-6 bg-white p-6 rounded-3xl shadow-xl border border-purple-200 max-w-xs">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 rounded-2xl bg-[#6D28D9] text-white flex items-center justify-center font-bold text-xl">
                            <i class="fa-solid fa-award"></i>
                        </div>
                        <div>
                            <p class="font-extrabold text-slate-900 text-sm">Resep Otentik</p>
                            <p class="text-xs text-[#6D28D9] font-bold">Aysel Gharafaiha Saputra</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<?= $this->endSection() ?>
