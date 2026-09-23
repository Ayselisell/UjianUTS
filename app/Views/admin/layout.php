<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'Dashboard Admin - Gharafaiha Resto') ?></title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#C4B5FD',
                        accent: '#6D28D9',
                    }
                }
            }
        }
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style> body { font-family: 'Plus Jakarta Sans', sans-serif; } </style>
</head>
<body class="bg-slate-100 text-slate-800 flex h-screen overflow-hidden">

    <!-- Sidebar -->
    <aside class="w-64 bg-slate-950 text-white flex flex-col border-r border-purple-900/40">
        <!-- Brand logo -->
        <div class="p-6 border-b border-slate-900 flex items-center gap-3">
            <div class="w-10 h-10 rounded-xl bg-[#6D28D9] flex items-center justify-center text-white text-lg font-bold shadow-lg shadow-[#6D28D9]/40">
                <i class="fa-solid fa-fish"></i>
            </div>
            <div>
                <h2 class="font-extrabold text-lg leading-tight text-white">Gharafaiha</h2>
                <span class="text-xs text-[#C4B5FD] font-semibold">Admin Restoran</span>
            </div>
        </div>

        <!-- Navigation Links -->
        <nav class="flex-grow p-4 space-y-2">
            <div class="text-[11px] font-extrabold text-slate-400 uppercase px-3 mb-2 tracking-wider">Menu Manajemen</div>
            <a href="<?= base_url('/admin/foods') ?>" class="flex items-center gap-3 px-4 py-3 rounded-xl bg-[#6D28D9] text-white font-bold shadow-lg shadow-purple-900/40 text-sm">
                <i class="fa-solid fa-utensils"></i> Kelola Menu Makanan
            </a>
            <a href="<?= base_url('/admin/foods/new') ?>" class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-300 hover:bg-slate-900 hover:text-[#C4B5FD] transition-colors text-sm font-semibold">
                <i class="fa-solid fa-plus"></i> Tambah Menu Baru
            </a>
            <a href="<?= base_url('/') ?>" target="_blank" class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-300 hover:bg-slate-900 hover:text-[#C4B5FD] transition-colors text-sm font-semibold">
                <i class="fa-solid fa-globe"></i> Lihat Website Publik
            </a>
        </nav>

        <!-- User Info / Logout -->
        <div class="p-4 border-t border-slate-900">
            <div class="flex items-center gap-3 mb-3 px-2">
                <div class="w-9 h-9 rounded-full bg-[#C4B5FD] text-[#6D28D9] flex items-center justify-center font-black">
                    A
                </div>
                <div class="overflow-hidden">
                    <p class="text-sm font-bold text-white truncate"><?= session()->get('userName') ?? 'Admin Gharafaiha' ?></p>
                    <p class="text-xs text-slate-400 truncate"><?= session()->get('userEmail') ?? 'admin@gharafaiha.com' ?></p>
                </div>
            </div>
            <a href="<?= base_url('/logout') ?>" class="w-full py-2.5 bg-rose-500/10 text-rose-300 hover:bg-rose-600 hover:text-white rounded-xl text-xs font-bold transition-all flex items-center justify-center gap-2">
                <i class="fa-solid fa-right-from-bracket"></i> Logout Admin
            </a>
        </div>
    </aside>

    <!-- Main Content Container -->
    <div class="flex-grow flex flex-col overflow-y-auto">
        <!-- Top Bar -->
        <header class="bg-white border-b border-slate-200 px-8 py-4 flex items-center justify-between shadow-sm">
            <div>
                <h1 class="text-2xl font-black text-slate-900"><?= esc($title ?? 'Dashboard Admin') ?></h1>
                <p class="text-xs text-slate-500">Sistem Pengelolaan Menu Gulai Patin - Gharafaiha Resto (Riau)</p>
            </div>
            <div class="flex items-center gap-4">
                <span class="px-3 py-1 bg-[#C4B5FD]/30 text-[#6D28D9] font-extrabold text-xs rounded-full border border-purple-200">
                    <i class="fa-solid fa-circle text-[8px] mr-1 text-emerald-500"></i> Admin Active
                </span>
            </div>
        </header>

        <!-- Content Body -->
        <main class="p-8 flex-grow">
            <?= $this->renderSection('admin_content') ?>
        </main>
    </div>

</body>
</html>
