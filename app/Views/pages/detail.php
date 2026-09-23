<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="py-12 bg-slate-50 min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Breadcrumb Navigation -->
        <nav class="flex items-center gap-2 text-xs font-semibold text-slate-500 mb-8">
            <a href="<?= base_url('/') ?>" class="hover:text-[#6D28D9]">Beranda</a>
            <i class="fa-solid fa-chevron-right text-[10px] text-slate-400"></i>
            <a href="<?= base_url('/#katalog') ?>" class="hover:text-[#6D28D9]">Katalog Menu</a>
            <i class="fa-solid fa-chevron-right text-[10px] text-slate-400"></i>
            <span class="text-slate-900 font-bold"><?= esc($food['name']) ?></span>
        </nav>

        <!-- Main Detail Card -->
        <div class="bg-white rounded-3xl border border-purple-200/80 shadow-2xl overflow-hidden mb-16">
            <div class="grid grid-cols-1 lg:grid-cols-12">
                
                <!-- Distinct Product Image -->
                <div class="lg:col-span-6 relative bg-purple-100 min-h-[380px] lg:min-h-[500px]">
                    <img src="<?= \App\Models\FoodModel::getImageUrl($food) ?>" 
                         alt="<?= esc($food['name']) ?>" 
                         class="w-full h-full object-cover">
                    
                    <span class="absolute top-6 left-6 px-4 py-2 bg-slate-950/80 backdrop-blur-md text-white font-bold text-xs rounded-full flex items-center gap-2 border border-white/10">
                        <i class="fa-solid fa-location-dot text-[#C4B5FD]"></i> Asal: <?= esc($food['origin']) ?>
                    </span>

                    <span class="absolute top-6 right-6 px-4 py-2 bg-[#C4B5FD] text-[#6D28D9] font-black text-sm rounded-full shadow-lg border border-purple-300 flex items-center gap-1.5">
                        <i class="fa-solid fa-star text-amber-500"></i> <?= number_format($food['rating'], 1) ?>
                    </span>
                </div>

                <!-- Info Column -->
                <div class="lg:col-span-6 p-8 lg:p-12 flex flex-col justify-between space-y-6">
                    <div>
                        <div class="flex items-center gap-3 mb-3">
                            <span class="px-3.5 py-1 bg-[#C4B5FD]/30 text-[#6D28D9] text-xs font-bold rounded-full border border-purple-200">
                                <?= esc($food['category']) ?>
                            </span>
                            <span class="text-xs font-bold text-rose-600 flex items-center gap-1">
                                <i class="fa-solid fa-pepper-hot"></i> <?= esc($food['spice_level']) ?>
                            </span>
                        </div>

                        <h1 class="text-3xl lg:text-4xl font-black text-slate-900 tracking-tight leading-tight">
                            <?= esc($food['name']) ?>
                        </h1>

                        <div class="mt-4 mb-6">
                            <span class="text-xs text-slate-400 uppercase font-bold block">Harga Porsi</span>
                            <span class="text-3xl font-black text-[#6D28D9]">
                                Rp <?= number_format($food['price'], 0, ',', '.') ?>
                            </span>
                        </div>

                        <h4 class="font-extrabold text-slate-900 text-sm mb-2">Deskripsi & Keistimewaan Rasa:</h4>
                        <p class="text-slate-600 text-sm leading-relaxed">
                            <?= esc($food['description']) ?>
                        </p>

                        <!-- Highlights Grid -->
                        <div class="grid grid-cols-2 gap-4 mt-6 pt-6 border-t border-slate-100">
                            <div class="flex items-center gap-3">
                                <div class="w-9 h-9 rounded-xl bg-[#C4B5FD]/30 text-[#6D28D9] flex items-center justify-center font-bold">
                                    <i class="fa-solid fa-fish text-sm"></i>
                                </div>
                                <span class="text-xs font-bold text-slate-700">Patin Sungai Siak</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="w-9 h-9 rounded-xl bg-[#C4B5FD]/30 text-[#6D28D9] flex items-center justify-center font-bold">
                                    <i class="fa-solid fa-leaf text-sm"></i>
                                </div>
                                <span class="text-xs font-bold text-slate-700">Rempah Melayu Riau</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="w-9 h-9 rounded-xl bg-[#C4B5FD]/30 text-[#6D28D9] flex items-center justify-center font-bold">
                                    <i class="fa-solid fa-fire text-sm"></i>
                                </div>
                                <span class="text-xs font-bold text-slate-700">Dimasak Perlahan</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="w-9 h-9 rounded-xl bg-[#C4B5FD]/30 text-[#6D28D9] flex items-center justify-center font-bold">
                                    <i class="fa-solid fa-shield-heart text-sm"></i>
                                </div>
                                <span class="text-xs font-bold text-slate-700">100% Halal & Resep Asli</span>
                            </div>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="pt-6 border-t border-slate-100 flex flex-col sm:flex-row gap-4">
                        <button onclick="addToCart(<?= $food['id'] ?>, '<?= esc($food['name']) ?>', <?= $food['price'] ?>)" 
                                class="flex-1 py-4 bg-[#6D28D9] text-white font-extrabold rounded-2xl shadow-xl hover:bg-purple-800 transition-all flex items-center justify-center gap-2 text-sm">
                            <i class="fa-solid fa-cart-plus text-base"></i> Tambah Ke Keranjang
                        </button>
                        <button onclick="checkoutDirect('<?= esc($food['name']) ?>', <?= $food['price'] ?>)" 
                                class="py-4 px-6 bg-[#C4B5FD] text-[#6D28D9] font-extrabold rounded-2xl hover:bg-purple-300 transition-all flex items-center justify-center gap-2 text-sm border border-purple-300">
                            <i class="fa-brands fa-whatsapp text-lg"></i> Beli Langsung
                        </button>
                    </div>

                </div>

            </div>
        </div>

        <!-- Related Foods Grid -->
        <?php if (!empty($relatedFoods)): ?>
            <div>
                <h3 class="text-2xl font-black text-slate-900 mb-6">Menu Patin Terkait Lainnya</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <?php foreach ($relatedFoods as $rel): ?>
                        <div class="bg-white rounded-2xl p-4 border border-purple-200/60 shadow-md hover:shadow-xl transition-all flex items-center gap-4">
                            <div class="w-20 h-20 rounded-xl bg-purple-100 overflow-hidden flex-shrink-0">
                                <img src="<?= \App\Models\FoodModel::getImageUrl($rel) ?>" 
                                     alt="<?= esc($rel['name']) ?>" 
                                     class="w-full h-full object-cover">
                            </div>
                            <div class="flex-grow">
                                <h4 class="font-extrabold text-slate-900 text-sm line-clamp-1"><?= esc($rel['name']) ?></h4>
                                <span class="text-xs font-black text-[#6D28D9] block mt-1">Rp <?= number_format($rel['price'], 0, ',', '.') ?></span>
                                <a href="<?= base_url('/food/' . $rel['id']) ?>" class="text-[11px] font-bold text-purple-700 hover:underline mt-1 inline-block">Lihat Detail →</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>

    </div>
</div>

<script>
    function checkoutDirect(name, price) {
        const text = `Halo Gharafaiha Resto, saya ingin memesan langsung: *${name}* seharga Rp ${price.toLocaleString('id-ID')}. Mohon segera diproses, terima kasih!`;
        window.open(`https://wa.me/6281234567890?text=${encodeURIComponent(text)}`, '_blank');
    }
</script>

<?= $this->endSection() ?>
