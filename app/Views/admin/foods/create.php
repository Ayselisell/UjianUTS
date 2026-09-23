<?= $this->extend('admin/layout') ?>

<?= $this->section('admin_content') ?>

<div class="max-w-4xl mx-auto">
    <!-- Header -->
    <div class="flex items-center justify-between mb-8">
        <div>
            <h2 class="text-xl font-bold text-slate-900">Tambah Menu Makanan Baru</h2>
            <p class="text-sm text-slate-500">Lengkapi formulir di bawah ini untuk menambahkan menu Gulai Patin atau hidangan Melayu Riau.</p>
        </div>
        <a href="<?= base_url('/admin/foods') ?>" class="px-4 py-2 bg-slate-200 text-slate-700 font-semibold rounded-xl hover:bg-slate-300 transition-colors flex items-center gap-2 text-sm">
            <i class="fa-solid fa-arrow-left"></i> Kembali ke Daftar
        </a>
    </div>

    <!-- Validation Errors -->
    <?php if (session()->getFlashdata('errors')): ?>
        <div class="mb-6 p-4 bg-rose-50 border border-rose-200 text-rose-700 rounded-2xl">
            <h4 class="font-bold mb-2 text-sm flex items-center gap-2">
                <i class="fa-solid fa-triangle-exclamation"></i> Terdapat Kesalahan Input:
            </h4>
            <ul class="list-disc list-inside text-xs space-y-1">
                <?php foreach (session()->getFlashdata('errors') as $error): ?>
                    <li><?= esc($error) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <!-- Form Card -->
    <form action="<?= base_url('/admin/foods/create') ?>" method="POST" enctype="multipart/form-data" class="bg-white rounded-3xl border border-slate-200 p-8 shadow-xl space-y-6">
        <?= csrf_field() ?>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Nama Makanan -->
            <div class="md:col-span-2">
                <label class="block text-xs font-bold uppercase text-slate-600 mb-2">Nama Menu Makanan *</label>
                <input type="text" name="name" value="<?= old('name') ?>" required
                       class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-[#6D28D9] focus:ring-2 focus:ring-purple-200 focus:outline-none transition-all text-sm"
                       placeholder="Contoh: Gulai Ikan Patin Khas Riau">
            </div>

            <!-- Kategori -->
            <div>
                <label class="block text-xs font-bold uppercase text-slate-600 mb-2">Kategori Menu *</label>
                <select name="category" required class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-[#6D28D9] focus:ring-2 focus:ring-purple-200 focus:outline-none transition-all text-sm">
                    <option value="">-- Pilih Kategori --</option>
                    <option value="Gulai Utama" <?= old('category') == 'Gulai Utama' ? 'selected' : '' ?>>Gulai Utama</option>
                    <option value="Gulai Spesial" <?= old('category') == 'Gulai Spesial' ? 'selected' : '' ?>>Gulai Spesial</option>
                    <option value="Olahan Patin" <?= old('category') == 'Olahan Patin' ? 'selected' : '' ?>>Olahan Patin</option>
                    <option value="Bakar & Panggang" <?= old('category') == 'Bakar & Panggang' ? 'selected' : '' ?>>Bakar & Panggang</option>
                    <option value="Goreng & Sambal" <?= old('category') == 'Goreng & Sambal' ? 'selected' : '' ?>>Goreng & Sambal</option>
                    <option value="Sup & Pindang" <?= old('category') == 'Sup & Pindang' ? 'selected' : '' ?>>Sup & Pindang</option>
                    <option value="Hidangan Khas Melayu" <?= old('category') == 'Hidangan Khas Melayu' ? 'selected' : '' ?>>Hidangan Khas Melayu</option>
                </select>
            </div>

            <!-- Harga -->
            <div>
                <label class="block text-xs font-bold uppercase text-slate-600 mb-2">Harga (Rupiah) *</label>
                <input type="number" name="price" value="<?= old('price') ?>" required min="0"
                       class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-[#6D28D9] focus:ring-2 focus:ring-purple-200 focus:outline-none transition-all text-sm"
                       placeholder="45000">
            </div>

            <!-- Asal Daerah -->
            <div>
                <label class="block text-xs font-bold uppercase text-slate-600 mb-2">Asal Daerah *</label>
                <input type="text" name="origin" value="<?= old('origin', 'Pekanbaru, Riau') ?>" required
                       class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-[#6D28D9] focus:ring-2 focus:ring-purple-200 focus:outline-none transition-all text-sm"
                       placeholder="Pekanbaru, Riau">
            </div>

            <!-- Tingkat Kepedasan -->
            <div>
                <label class="block text-xs font-bold uppercase text-slate-600 mb-2">Level Pedas / Cita Rasa *</label>
                <select name="spice_level" required class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-[#6D28D9] focus:ring-2 focus:ring-purple-200 focus:outline-none transition-all text-sm">
                    <option value="Pedas Asam Gurih" <?= old('spice_level') == 'Pedas Asam Gurih' ? 'selected' : '' ?>>Pedas Asam Gurih</option>
                    <option value="Pedas Asam Segar" <?= old('spice_level') == 'Pedas Asam Segar' ? 'selected' : '' ?>>Pedas Asam Segar</option>
                    <option value="Pedas Sedang" <?= old('spice_level') == 'Pedas Sedang' ? 'selected' : '' ?>>Pedas Sedang</option>
                    <option value="Sangat Pedas" <?= old('spice_level') == 'Sangat Pedas' ? 'selected' : '' ?>>Sangat Pedas</option>
                    <option value="Pedas Asap Gurih" <?= old('spice_level') == 'Pedas Asap Gurih' ? 'selected' : '' ?>>Pedas Asap Gurih</option>
                </select>
            </div>

            <!-- Rating & Featured -->
            <div>
                <label class="block text-xs font-bold uppercase text-slate-600 mb-2">Rating (0 - 5.0)</label>
                <input type="number" step="0.1" name="rating" value="<?= old('rating', '4.8') ?>" max="5" min="0"
                       class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-[#6D28D9] focus:ring-2 focus:ring-purple-200 focus:outline-none transition-all text-sm">
            </div>

            <div class="flex items-center pt-6">
                <label class="inline-flex items-center gap-3 cursor-pointer">
                    <input type="checkbox" name="is_featured" value="1" <?= old('is_featured') ? 'checked' : '' ?> class="w-5 h-5 text-[#6D28D9] rounded focus:ring-[#6D28D9]">
                    <span class="text-sm font-bold text-slate-700">Tampilkan di Beranda (Featured Dish)</span>
                </label>
            </div>

            <!-- Deskripsi -->
            <div class="md:col-span-2">
                <label class="block text-xs font-bold uppercase text-slate-600 mb-2">Deskripsi Lengkap *</label>
                <textarea name="description" rows="4" required
                          class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-[#6D28D9] focus:ring-2 focus:ring-purple-200 focus:outline-none transition-all text-sm"
                          placeholder="Jelaskan bahan-bahan utama, aroma, dan cita rasa masakan ini..."><?= old('description') ?></textarea>
            </div>

            <!-- Gambar -->
            <div class="md:col-span-2">
                <label class="block text-xs font-bold uppercase text-slate-600 mb-2">Foto Menu Makanan (Format JPG/PNG/WebP, max 2MB)</label>
                <input type="file" name="image" accept="image/*"
                       class="w-full text-sm text-slate-500 file:mr-4 file:py-3 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-bold file:bg-purple-100 file:text-[#6D28D9] hover:file:bg-purple-200">
            </div>
        </div>

        <div class="pt-6 border-t flex justify-end gap-4">
            <a href="<?= base_url('/admin/foods') ?>" class="px-6 py-3 bg-slate-100 text-slate-700 font-bold rounded-xl hover:bg-slate-200 transition-colors text-sm">Batal</a>
            <button type="submit" class="px-8 py-3 bg-[#6D28D9] text-white font-bold rounded-xl shadow-lg hover:bg-purple-800 transition-all text-sm flex items-center gap-2">
                <i class="fa-solid fa-save"></i> Simpan Menu Makanan
            </button>
        </div>
    </form>
</div>

<?= $this->endSection() ?>
