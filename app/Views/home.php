<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-slate-950 via-purple-950 to-slate-900 text-white overflow-hidden py-24">
    <!-- Decorative background elements -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-[#6D28D9]/30 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-[#C4B5FD]/20 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <div class="lg:col-span-7 space-y-6">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-purple-500/20 border border-[#C4B5FD]/40 text-[#C4B5FD] text-xs font-bold uppercase tracking-wider">
                    <i class="fa-solid fa-crown text-amber-400"></i> Restoran Khas Daerah Riau - Gharafaiha Resto
                </div>
                
                <h1 class="text-4xl sm:text-6xl font-extrabold tracking-tight leading-tight">
                    Cita Rasa Khas <span class="bg-clip-text text-transparent bg-gradient-to-r from-[#C4B5FD] via-purple-300 to-amber-300">Gulai Ikan Patin</span> Sungai Siak
                </h1>
                
                <p class="text-slate-300 text-lg leading-relaxed max-w-2xl">
                    Nikmati kelezatan warisan kuliner Melayu Riau sejati. Daging ikan patin segar berpadu sempurna dalam racikan gulai santan kuning khas Pekanbaru dengan rempah-rempah pilihan pilihan keluarga Aysel Gharafaiha Saputra.
                </p>

                <div class="flex flex-wrap gap-4 pt-4">
                    <a href="#katalog" class="px-8 py-4 rounded-2xl bg-gradient-to-r from-[#6D28D9] to-purple-600 hover:from-purple-700 hover:to-purple-500 text-white font-extrabold shadow-xl shadow-purple-600/30 hover:scale-105 transition-all flex items-center gap-3">
                        <i class="fa-solid fa-utensils"></i> Jelajahi Menu Patin
                    </a>
                    <a href="#tentang" class="px-8 py-4 rounded-2xl bg-white/10 hover:bg-white/20 border border-white/20 text-white font-bold backdrop-blur-md transition-all flex items-center gap-3">
                        <i class="fa-solid fa-circle-info"></i> Sejarah Kuliner Riau
                    </a>
                </div>

                <!-- Stats Badges -->
                <div class="grid grid-cols-3 gap-6 pt-8 border-t border-purple-800/40 max-w-lg">
                    <div>
                        <span class="block text-3xl font-extrabold text-[#C4B5FD]">100%</span>
                        <span class="text-xs text-slate-400 font-medium">Resep Melayu Asli</span>
                    </div>
                    <div>
                        <span class="block text-3xl font-extrabold text-[#C4B5FD]">9+</span>
                        <span class="text-xs text-slate-400 font-medium">Variasi Patin Khas</span>
                    </div>
                    <div>
                        <span class="block text-3xl font-extrabold text-[#C4B5FD]">4.9★</span>
                        <span class="text-xs text-slate-400 font-medium">Rating Kepuasan</span>
                    </div>
                </div>
            </div>

            <!-- Hero Image Banner -->
            <div class="lg:col-span-5 flex justify-center">
                <div class="relative w-full max-w-md">
                    <div class="absolute inset-0 bg-gradient-to-tr from-[#6D28D9] to-[#C4B5FD] rounded-3xl transform rotate-6 scale-95 opacity-50 blur-lg"></div>
                    <div class="relative bg-slate-900 border border-purple-400/30 rounded-3xl p-4 shadow-2xl overflow-hidden">
                        <img src="<?= base_url('uploads/foods/gulai-ikan-patin-khas-riau.jpg') ?>" 
                             onerror="this.src='https://images.unsplash.com/photo-1546069901-ba9599a7e63c?auto=format&fit=crop&w=800&q=80'" 
                             alt="Gulai Ikan Patin Khas Riau" 
                             class="w-full h-80 object-cover rounded-2xl">
                        <div class="mt-4 p-4 bg-purple-950/80 rounded-2xl border border-purple-500/20 backdrop-blur-md">
                            <div class="flex justify-between items-center">
                                <div>
                                    <h4 class="font-bold text-white text-base">Gulai Ikan Patin Khas Riau</h4>
                                    <p class="text-xs text-purple-300"><i class="fa-solid fa-location-dot text-rose-400"></i> Pekanbaru, Riau</p>
                                </div>
                                <span class="text-lg font-extrabold text-[#C4B5FD]">Rp 45.000</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Filter & Sorting Controls Section (#katalog) -->
<section id="katalog" class="py-16 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-12">
            <span class="px-4 py-1.5 rounded-full bg-purple-100 text-[#6D28D9] font-bold text-xs uppercase tracking-wider">
                Katalog Menu Spesial
            </span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-3 tracking-tight">
                Pilihan Menu Gulai Patin & Kuliner Riau
            </h2>
            <p class="text-slate-600 mt-2">
                Gunakan filter kategori dan pengurutan (sorting) di bawah untuk menemukan hidangan favorit Anda.
            </p>
        </div>

        <!-- Filter & Search Controls Form -->
        <form action="<?= base_url('/#katalog') ?>" method="GET" class="bg-white p-6 rounded-3xl border border-purple-100 shadow-xl mb-12">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-4 items-center">
                
                <!-- Search Field -->
                <div class="md:col-span-4 relative">
                    <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-purple-400">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </span>
                    <input type="text" name="search" value="<?= esc($searchKeyword ?? '') ?>" 
                           placeholder="Cari masakan (misal: Patin, Asam Pedas)..." 
                           class="w-full pl-11 pr-4 py-3 bg-slate-50 border border-slate-200 rounded-2xl text-sm focus:outline-none focus:border-[#6D28D9] focus:ring-2 focus:ring-purple-200 transition-all">
                </div>

                <!-- Filter Category Dropdown -->
                <div class="md:col-span-3">
                    <label class="block text-[11px] font-bold text-slate-400 uppercase tracking-wider mb-1">Filter Kategori</label>
                    <select name="category" onchange="this.form.submit()" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-2xl text-sm font-medium focus:outline-none focus:border-[#6D28D9]">
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
                    <label class="block text-[11px] font-bold text-slate-400 uppercase tracking-wider mb-1">Urutkan Berdasarkan (Sorting)</label>
                    <select name="sort" onchange="this.form.submit()" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-2xl text-sm font-medium focus:outline-none focus:border-[#6D28D9]">
                        <option value="default" <?= ($selectedSort ?? '') == 'default' ? 'selected' : '' ?>>Rekomendasi Utama</option>
                        <option value="price_asc" <?= ($selectedSort ?? '') == 'price_asc' ? 'selected' : '' ?>>Harga: Termurah ke Termahal</option>
                        <option value="price_desc" <?= ($selectedSort ?? '') == 'price_desc' ? 'selected' : '' ?>>Harga: Termahal ke Termurah</option>
                        <option value="rating_desc" <?= ($selectedSort ?? '') == 'rating_desc' ? 'selected' : '' ?>>Rating Tertinggi (Popularitas)</option>
                        <option value="name_asc" <?= ($selectedSort ?? '') == 'name_asc' ? 'selected' : '' ?>>Nama (A - Z)</option>
                    </select>
                </div>

                <!-- Submit / Reset Buttons -->
                <div class="md:col-span-2 flex gap-2 pt-4 md:pt-0">
                    <button type="submit" class="w-full py-3 bg-[#6D28D9] text-white font-bold rounded-2xl hover:bg-purple-800 transition-colors text-sm flex items-center justify-center gap-2">
                        <i class="fa-solid fa-filter"></i> Terapkan
                    </button>
                    <?php if (!empty($selectedCat) || !empty($selectedSort) || !empty($searchKeyword)): ?>
                        <a href="<?= base_url('/') ?>" class="p-3 bg-slate-100 text-slate-600 rounded-2xl hover:bg-slate-200 transition-colors" title="Reset Filter">
                            <i class="fa-solid fa-rotate-left"></i>
                        </a>
                    <?php endif; ?>
                </div>

            </div>
        </form>

        <!-- Food Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php if (empty($foods)): ?>
                <div class="col-span-full text-center py-16 bg-white rounded-3xl border border-slate-200 p-8 shadow-sm">
                    <i class="fa-solid fa-fish-fins text-5xl text-purple-300 mb-4"></i>
                    <h3 class="text-xl font-bold text-slate-800">Tidak ada menu yang sesuai filter</h3>
                    <p class="text-slate-500 text-sm mt-1">Coba atur ulang kata kunci pencarian atau kategori filter Anda.</p>
                    <a href="<?= base_url('/') ?>" class="inline-block mt-4 px-6 py-2.5 bg-[#6D28D9] text-white font-bold rounded-xl text-sm">Lihat Semua Menu</a>
                </div>
            <?php else: ?>
                <?php foreach ($foods as $food): ?>
                    <div class="group bg-white rounded-3xl border border-purple-100/80 shadow-lg hover:shadow-2xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col overflow-hidden">
                        
                        <!-- Image Container -->
                        <div class="relative h-56 bg-purple-100 overflow-hidden">
                            <img src="<?= base_url('uploads/foods/' . $food['image']) ?>" 
                                 onerror="this.src='https://images.unsplash.com/photo-1546069901-ba9599a7e63c?auto=format&fit=crop&w=800&q=80'" 
                                 alt="<?= esc($food['name']) ?>" 
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            
                            <!-- Origin Badge -->
                            <span class="absolute top-4 left-4 px-3 py-1 bg-slate-900/80 backdrop-blur-md text-white font-semibold text-xs rounded-full flex items-center gap-1">
                                <i class="fa-solid fa-location-dot text-rose-400"></i> <?= esc($food['origin']) ?>
                            </span>

                            <!-- Rating Badge -->
                            <span class="absolute top-4 right-4 px-3 py-1 bg-amber-400 text-slate-900 font-extrabold text-xs rounded-full flex items-center gap-1 shadow-md">
                                <i class="fa-solid fa-star"></i> <?= number_format($food['rating'], 1) ?>
                            </span>
                        </div>

                        <!-- Content -->
                        <div class="p-6 flex-grow flex flex-col justify-between space-y-4">
                            <div>
                                <div class="flex items-center justify-between gap-2 mb-2">
                                    <span class="px-3 py-1 bg-purple-100 text-[#6D28D9] text-xs font-bold rounded-full">
                                        <?= esc($food['category']) ?>
                                    </span>
                                    <span class="text-xs font-semibold text-rose-600 flex items-center gap-1">
                                        <i class="fa-solid fa-pepper-hot"></i> <?= esc($food['spice_level']) ?>
                                    </span>
                                </div>

                                <h3 class="text-xl font-extrabold text-slate-900 group-hover:text-[#6D28D9] transition-colors line-clamp-1">
                                    <?= esc($food['name']) ?>
                                </h3>

                                <p class="text-slate-500 text-xs mt-2 line-clamp-2 leading-relaxed">
                                    <?= esc($food['description']) ?>
                                </p>
                            </div>

                            <!-- Bottom Price & Buttons -->
                            <div class="pt-4 border-t border-slate-100 flex items-center justify-between gap-2">
                                <div>
                                    <span class="text-[10px] text-slate-400 uppercase font-bold block">Harga Porsi</span>
                                    <span class="text-xl font-extrabold text-[#6D28D9]">
                                        Rp <?= number_format($food['price'], 0, ',', '.') ?>
                                    </span>
                                </div>

                                <div class="flex items-center gap-2">
                                    <a href="<?= base_url('/food/' . $food['id']) ?>" 
                                       class="px-4 py-2.5 rounded-xl bg-purple-50 text-[#6D28D9] font-bold text-xs hover:bg-purple-100 transition-colors">
                                        Detail
                                    </a>
                                    <button onclick="addToCart(<?= $food['id'] ?>, '<?= esc($food['name']) ?>', <?= $food['price'] ?>)" 
                                            class="px-4 py-2.5 rounded-xl bg-[#6D28D9] text-white font-bold text-xs hover:bg-purple-800 shadow-md shadow-purple-600/30 transition-all flex items-center gap-1">
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

<!-- About Riau Culinary Section (#tentang) -->
<section id="tentang" class="py-20 bg-white border-t border-purple-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            
            <div class="space-y-6">
                <span class="px-4 py-1.5 rounded-full bg-purple-100 text-[#6D28D9] font-bold text-xs uppercase tracking-wider">
                    Warisan Khas Melayu Riau
                </span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
                    Mengapa Gulai Ikan Patin Sangat Melegenda di Riau?
                </h2>
                <p class="text-slate-600 leading-relaxed text-sm">
                    Sungai Siak dan Kampar di Riau sejak ratusan tahun terkenal menghasilkan Ikan Patin segar berkualitas tinggi dengan tekstur daging lembut dan lemak alami yang gurih.
                </p>
                <p class="text-slate-600 leading-relaxed text-sm">
                    Di <strong>Gharafaiha Resto</strong>, resep gulai patin diolah menggunakan bumbu kunyit tua, asam kandis, serai wangi, dan pucuk daun ubi. Proses memasak yang presisi menghasilkan kuah gulai yang gurih meresap tanpa amis.
                </p>
                
                <div class="grid grid-cols-2 gap-4 pt-4">
                    <div class="p-4 bg-purple-50 rounded-2xl border border-purple-100">
                        <i class="fa-solid fa-seedling text-[#6D28D9] text-xl mb-2"></i>
                        <h4 class="font-bold text-slate-800 text-sm">Bumbu Alami 100%</h4>
                        <p class="text-xs text-slate-500 mt-1">Tanpa pengawet dan perasa buatan.</p>
                    </div>
                    <div class="p-4 bg-purple-50 rounded-2xl border border-purple-100">
                        <i class="fa-solid fa-hand-holding-heart text-[#6D28D9] text-xl mb-2"></i>
                        <h4 class="font-bold text-slate-800 text-sm">Daging Harian Segar</h4>
                        <p class="text-xs text-slate-500 mt-1">Dipasok segar langsung dari nelayan Riau.</p>
                    </div>
                </div>
            </div>

            <div class="relative">
                <div class="aspect-video rounded-3xl overflow-hidden shadow-2xl border-4 border-white bg-slate-900">
                    <img src="<?= base_url('uploads/foods/gulai-patin-asam-pedas-kampar.jpg') ?>" 
                         onerror="this.src='https://images.unsplash.com/photo-1546069901-ba9599a7e63c?auto=format&fit=crop&w=800&q=80'" 
                         alt="Gulai Patin Asam Pedas Riau" 
                         class="w-full h-full object-cover">
                </div>
                <div class="absolute -bottom-6 -left-6 bg-white p-6 rounded-3xl shadow-xl border border-purple-100 max-w-xs">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 rounded-2xl bg-[#6D28D9] text-white flex items-center justify-center font-bold text-xl">
                            <i class="fa-solid fa-award"></i>
                        </div>
                        <div>
                            <p class="font-extrabold text-slate-900 text-sm">Resep Otentik</p>
                            <p class="text-xs text-slate-500">Aysel Gharafaiha Saputra</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<?= $this->endSection() ?>
