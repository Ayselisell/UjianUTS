<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - Gharafaiha Resto</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style> body { font-family: 'Plus Jakarta Sans', sans-serif; } </style>
</head>
<body class="bg-slate-950 min-h-screen flex items-center justify-center p-4 relative overflow-hidden">

    <!-- Subtle Background Glow with #C4B5FD & #6D28D9 -->
    <div class="absolute -top-32 -left-32 w-96 h-96 bg-[#6D28D9]/30 rounded-full blur-[100px]"></div>
    <div class="absolute -bottom-32 -right-32 w-96 h-96 bg-[#C4B5FD]/20 rounded-full blur-[100px]"></div>

    <div class="w-full max-w-md bg-slate-900/90 backdrop-blur-2xl border border-[#C4B5FD]/30 rounded-3xl p-8 shadow-2xl relative z-10">
        
        <!-- Header -->
        <div class="text-center mb-8">
            <div class="w-16 h-16 bg-[#6D28D9] text-[#C4B5FD] rounded-2xl flex items-center justify-center text-3xl mx-auto shadow-lg shadow-[#6D28D9]/50 mb-3 border border-[#C4B5FD]/40">
                <i class="fa-solid fa-user-shield"></i>
            </div>
            <h2 class="text-2xl font-black text-white tracking-tight">Portal Admin Restoran</h2>
            <p class="text-xs text-[#C4B5FD] mt-1 font-bold">Gharafaiha Resto — Gulai Ikan Patin Riau</p>
        </div>

        <!-- Flash Messages -->
        <?php if (session()->getFlashdata('error')): ?>
            <div class="mb-6 p-4 bg-rose-500/20 border border-rose-400/40 text-rose-200 rounded-2xl text-xs flex items-center gap-3">
                <i class="fa-solid fa-triangle-exclamation text-rose-400 text-lg"></i>
                <span><?= session()->getFlashdata('error') ?></span>
            </div>
        <?php endif; ?>

        <?php if (session()->getFlashdata('success')): ?>
            <div class="mb-6 p-4 bg-emerald-500/20 border border-emerald-400/40 text-emerald-200 rounded-2xl text-xs flex items-center gap-3">
                <i class="fa-solid fa-circle-check text-emerald-400 text-lg"></i>
                <span><?= session()->getFlashdata('success') ?></span>
            </div>
        <?php endif; ?>

        <!-- Form -->
        <form action="<?= base_url('/login') ?>" method="POST" class="space-y-5">
            <?= csrf_field() ?>

            <div>
                <label class="block text-xs font-bold text-[#C4B5FD] uppercase tracking-wider mb-2">Email Admin</label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-[#C4B5FD]">
                        <i class="fa-solid fa-envelope"></i>
                    </span>
                    <input type="email" name="email" value="<?= old('email', 'admin@gharafaiha.com') ?>" required
                           class="w-full pl-11 pr-4 py-3 bg-slate-950 border border-purple-500/40 rounded-2xl text-white placeholder-slate-500 focus:outline-none focus:border-[#C4B5FD] focus:ring-2 focus:ring-[#C4B5FD]/40 transition-all text-sm font-medium"
                           placeholder="admin@gharafaiha.com">
                </div>
            </div>

            <div>
                <label class="block text-xs font-bold text-[#C4B5FD] uppercase tracking-wider mb-2">Password</label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-[#C4B5FD]">
                        <i class="fa-solid fa-key"></i>
                    </span>
                    <input type="password" name="password" required value="admin123"
                           class="w-full pl-11 pr-4 py-3 bg-slate-950 border border-purple-500/40 rounded-2xl text-white placeholder-slate-500 focus:outline-none focus:border-[#C4B5FD] focus:ring-2 focus:ring-[#C4B5FD]/40 transition-all text-sm font-medium"
                           placeholder="••••••••">
                </div>
            </div>

            <div class="pt-2">
                <button type="submit" 
                        class="w-full py-3.5 bg-[#6D28D9] hover:bg-purple-700 text-white font-extrabold rounded-2xl shadow-lg shadow-[#6D28D9]/40 transition-all flex items-center justify-center gap-2 text-sm border border-purple-400/30">
                    <i class="fa-solid fa-right-to-bracket"></i> Masuk Ke Dashboard
                </button>
            </div>
        </form>

        <div class="mt-6 text-center border-t border-slate-800 pt-4">
            <a href="<?= base_url('/') ?>" class="text-xs text-[#C4B5FD] hover:text-white transition-colors flex items-center justify-center gap-2 font-semibold">
                <i class="fa-solid fa-arrow-left"></i> Kembali ke Beranda Restoran
            </a>
        </div>
    </div>

</body>
</html>
