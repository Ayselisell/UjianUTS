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
                        brand: {
                            300: '#C4B5FD',
                            700: '#6D28D9',
                        }
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
    <aside class="w-64 bg-slate-900 text-white flex flex-col border-r border-purple-900/40">
        <!-- Brand logo -->
        <div class="p-6 border-b border-slate-800 flex items-center gap-3">
            <div class="w-10 h-10 rounded-xl bg-[#6D28D9] flex items-center justify-center text-white text-lg font-bold">
                <i class="fa-solid fa-fish"></i>
            </div>
            <div>
                <h2 class="font-bold text-lg leading-tight">Gharafaiha</h2>
                <span class="text-xs text-purple-300">Admin Dashboard</span>
            </div>
        </div>

        <!-- Navigation -->
        <nav class="flex-grow p-4 space-y-2">
            <div class="text-xs font-bold text-slate-400 uppercase px-3 mb-2 tracking-wider">Menu Utama</div>
            <a href="<?= base_url('/admin/foods') ?>" class="flex items-center gap-3 px-4 py-3 rounded-xl bg-[#6D28D9] text-white font-semibold shadow-lg shadow-purple-900/40">
                <i class="fa-solid fa-utensils"></i> Kelola Menu Makanan
            </a>
            <a href="<?= base_url('/admin/foods/new') ?>" class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-300 hover:bg-slate-800 hover:text-white transition-colors">
                <i class="fa-solid fa-plus"></i> Tambah Menu Baru
            </a>
            <a href="<?= base_url('/') ?>" target="_blank" class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-300 hover:bg-slate-800 hover:text-white transition-colors">
                <i class="fa-solid fa-globe"></i> Lihat Website Publik
            </a>
        </nav>

        <!-- User Info / Logout -->
        <div class="p-4 border-t border-slate-800">
            <div class="flex items-center gap-3 mb-3 px-2">
                <div class="w-8 h-8 rounded-full bg-purple-500/20 text-[#C4B5FD] flex items-center justify-center font-bold">
                    A
                </div>
                <div class="overflow-hidden">
                    <p class="text-sm font-bold text-white truncate"><?= session()->get('userName') ?? 'Admin' ?></p>
                    <p class="text-xs text-slate-400 truncate"><?= session()->get('userEmail') ?? 'admin@gharafaiha.com' ?></p>
                </div>
            </div>
            <a href="<?= base_url('/logout') ?>" class="w-full py-2 bg-rose-500/10 text-rose-300 hover:bg-rose-500 hover:text-white rounded-lg text-sm font-semibold transition-colors flex items-center justify-center gap-2">
                <i class="fa-solid fa-right-from-bracket"></i> Logout Admin
            </a>
        </div>
    </aside>

    <!-- Main Content Container -->
    <div class="flex-grow flex flex-col overflow-y-auto">
        <!-- Top Bar -->
        <header class="bg-white border-b border-slate-200 px-8 py-4 flex items-center justify-between shadow-sm">
            <div>
                <h1 class="text-2xl font-bold text-slate-900"><?= esc($title ?? 'Dashboard Admin') ?></h1>
                <p class="text-xs text-slate-500">Sistem Pengelolaan Menu Restoran Gharafaiha - Gulai Ikan Patin Riau</p>
            </div>
            <div class="flex items-center gap-4">
                <span class="px-3 py-1 bg-purple-100 text-[#6D28D9] font-bold text-xs rounded-full">
                    <i class="fa-solid fa-circle text-[8px] mr-1 text-emerald-500"></i> Admin Session Active
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
