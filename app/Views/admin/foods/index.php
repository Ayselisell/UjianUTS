<?= $this->extend('admin/layout') ?>

<?= $this->section('admin_content') ?>

<!-- Action Header -->
<div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-8">
    <div>
        <h2 class="text-xl font-bold text-slate-800">Daftar Menu Makanan</h2>
        <p class="text-sm text-slate-500">Total <?= count($foods) ?> variasi makanan terdaftar di sistem.</p>
    </div>
    <a href="<?= base_url('/admin/foods/new') ?>" class="px-5 py-3 bg-[#6D28D9] text-white font-bold rounded-xl shadow-lg hover:bg-purple-800 transition-all flex items-center gap-2">
        <i class="fa-solid fa-plus"></i> Tambah Menu Makanan Baru
    </a>
</div>

<!-- Flash Alerts -->
<?php if (session()->getFlashdata('success')): ?>
    <div class="mb-6 p-4 bg-emerald-500/10 border border-emerald-500/30 text-emerald-700 rounded-2xl flex items-center gap-3">
        <i class="fa-solid fa-circle-check text-emerald-600 text-xl"></i>
        <span><?= session()->getFlashdata('success') ?></span>
    </div>
<?php endif; ?>

<?php if (session()->getFlashdata('error')): ?>
    <div class="mb-6 p-4 bg-rose-500/10 border border-rose-500/30 text-rose-700 rounded-2xl flex items-center gap-3">
        <i class="fa-solid fa-triangle-exclamation text-rose-600 text-xl"></i>
        <span><?= session()->getFlashdata('error') ?></span>
    </div>
<?php endif; ?>

<!-- Data Table Card -->
<div class="bg-white rounded-3xl border border-slate-200 shadow-xl overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-slate-50 border-b border-slate-200 text-xs font-bold text-slate-500 uppercase tracking-wider">
                    <th class="py-4 px-6">#</th>
                    <th class="py-4 px-6">Gambar</th>
                    <th class="py-4 px-6">Nama Menu</th>
                    <th class="py-4 px-6">Kategori</th>
                    <th class="py-4 px-6">Harga</th>
                    <th class="py-4 px-6">Asal Daerah</th>
                    <th class="py-4 px-6 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100 text-sm">
                <?php if (empty($foods)): ?>
                    <tr>
                        <td colspan="7" class="text-center py-10 text-slate-400">Belum ada data menu makanan. Silakan tambahkan menu baru.</td>
                    </tr>
                <?php else: ?>
                    <?php foreach ($foods as $index => $food): ?>
                        <tr class="hover:bg-purple-50/40 transition-colors">
                            <td class="py-4 px-6 font-bold text-slate-400"><?= $index + 1 ?></td>
                            <td class="py-4 px-6">
                                <div class="w-14 h-14 rounded-xl overflow-hidden bg-purple-100 border border-purple-200 flex items-center justify-center">
                                    <?php if ($food['image'] && file_exists(FCPATH . 'uploads/foods/' . $food['image'])): ?>
                                        <img src="<?= base_url('uploads/foods/' . $food['image']) ?>" alt="<?= esc($food['name']) ?>" class="w-full h-full object-cover">
                                    <?php else: ?>
                                        <i class="fa-solid fa-utensils text-purple-400 text-xl"></i>
                                    <?php endif; ?>
                                </div>
                            </td>
                            <td class="py-4 px-6">
                                <p class="font-bold text-slate-900"><?= esc($food['name']) ?></p>
                                <span class="text-xs text-purple-600 font-semibold flex items-center gap-1">
                                    <i class="fa-solid fa-pepper-hot"></i> <?= esc($food['spice_level']) ?>
                                    <?php if ($food['is_featured']): ?>
                                        <span class="ml-2 px-2 py-0.5 bg-amber-100 text-amber-700 text-[10px] font-bold rounded-md">Featured</span>
                                    <?php endif; ?>
                                </span>
                            </td>
                            <td class="py-4 px-6">
                                <span class="px-3 py-1 bg-purple-100 text-[#6D28D9] font-bold text-xs rounded-full">
                                    <?= esc($food['category']) ?>
                                </span>
                            </td>
                            <td class="py-4 px-6 font-extrabold text-[#6D28D9]">
                                Rp <?= number_format($food['price'], 0, ',', '.') ?>
                            </td>
                            <td class="py-4 px-6 text-slate-600">
                                <i class="fa-solid fa-location-dot text-rose-500 text-xs"></i> <?= esc($food['origin']) ?>
                            </td>
                            <td class="py-4 px-6 text-center">
                                <div class="flex items-center justify-center gap-2">
                                    <a href="<?= base_url('/food/' . $food['id']) ?>" target="_blank" class="w-9 h-9 rounded-xl bg-slate-100 text-slate-600 hover:bg-slate-200 flex items-center justify-center" title="Lihat Detail">
                                        <i class="fa-solid fa-eye text-xs"></i>
                                    </a>
                                    <a href="<?= base_url('/admin/foods/edit/' . $food['id']) ?>" class="w-9 h-9 rounded-xl bg-amber-100 text-amber-700 hover:bg-amber-200 flex items-center justify-center" title="Edit">
                                        <i class="fa-solid fa-pen text-xs"></i>
                                    </a>
                                    <a href="<?= base_url('/admin/foods/delete/' . $food['id']) ?>" onclick="return confirm('Yakin ingin menghapus menu ini?')" class="w-9 h-9 rounded-xl bg-rose-100 text-rose-700 hover:bg-rose-200 flex items-center justify-center" title="Hapus">
                                        <i class="fa-solid fa-trash text-xs"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection() ?>
