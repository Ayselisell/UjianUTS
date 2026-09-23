<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'Gharafaiha Resto - Gulai Ikan Patin Khas Riau') ?></title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            50: '#f5f3ff',
                            100: '#ede9fe',
                            200: '#ddd6fe',
                            300: '#C4B5FD', // Soft Violet (per requirement #C4B5FD)
                            400: '#a78bfa',
                            500: '#8b5cf6',
                            600: '#7c3aed',
                            700: '#6D28D9', // Deep Violet (per requirement #6D28D9)
                            800: '#5b21b6',
                            900: '#4c1d95',
                        }
                    },
                    fontFamily: {
                        sans: ['Plus Jakarta Sans', 'Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .glass-card {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(196, 181, 253, 0.3);
        }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased flex flex-col min-h-screen">

    <!-- Header / Navbar -->
    <header class="sticky top-0 z-40 bg-white/90 backdrop-blur-md border-b border-purple-100 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- Logo -->
                <a href="<?= base_url('/') ?>" class="flex items-center gap-3 group">
                    <div class="w-12 h-12 rounded-2xl bg-gradient-to-tr from-[#6D28D9] to-[#C4B5FD] flex items-center justify-center text-white text-xl shadow-lg shadow-purple-500/20 group-hover:scale-105 transition-transform">
                        <i class="fa-solid fa-fish-fins"></i>
                    </div>
                    <div>
                        <span class="text-2xl font-extrabold tracking-tight bg-clip-text text-transparent bg-gradient-to-r from-[#6D28D9] to-purple-600">
                            Gharafaiha
                        </span>
                        <span class="text-2xl font-light text-slate-700">Resto</span>
                        <span class="block text-xs font-semibold text-purple-600 tracking-widest uppercase">Kuliner Patin Riau</span>
                    </div>
                </a>

                <!-- Navigation Links -->
                <nav class="hidden md:flex items-center gap-8 font-medium text-slate-600">
                    <a href="<?= base_url('/') ?>" class="hover:text-[#6D28D9] transition-colors py-2 border-b-2 border-transparent hover:border-[#6D28D9]">Beranda</a>
                    <a href="<?= base_url('/#katalog') ?>" class="hover:text-[#6D28D9] transition-colors py-2 border-b-2 border-transparent hover:border-[#6D28D9]">Menu Gulai Patin</a>
                    <a href="<?= base_url('/#tentang') ?>" class="hover:text-[#6D28D9] transition-colors py-2 border-b-2 border-transparent hover:border-[#6D28D9]">Tentang Riau</a>
                </nav>

                <!-- Action Buttons -->
                <div class="flex items-center gap-4">
                    <!-- Cart Button (Modal trigger) -->
                    <button onclick="toggleCartModal()" class="relative p-2.5 rounded-xl bg-purple-50 text-[#6D28D9] hover:bg-purple-100 transition-colors">
                        <i class="fa-solid fa-utensils text-lg"></i>
                        <span id="cartCount" class="absolute -top-1 -right-1 bg-[#6D28D9] text-white text-xs font-bold w-5 h-5 rounded-full flex items-center justify-center">0</span>
                    </button>

                    <?php if (session()->get('isLoggedIn')): ?>
                        <a href="<?= base_url('/admin/foods') ?>" class="px-5 py-2.5 rounded-xl bg-[#6D28D9] text-white font-semibold shadow-md hover:bg-purple-800 transition-all flex items-center gap-2">
                            <i class="fa-solid fa-[#6D28D9] fa-[#C4B5FD] fa-dashboard"></i> Dashboard
                        </a>
                    <?php else: ?>
                        <a href="<?= base_url('/login') ?>" class="px-5 py-2.5 rounded-xl border-2 border-[#6D28D9] text-[#6D28D9] font-semibold hover:bg-[#6D28D9] hover:text-white transition-all">
                            <i class="fa-solid fa-lock text-sm"></i> Login Admin
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow">
        <?= $this->renderSection('content') ?>
    </main>

    <!-- Footer -->
    <footer class="bg-slate-900 text-white pt-16 pb-12 border-t border-purple-900/50 mt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-10 mb-12">
                <div class="md:col-span-2">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 rounded-xl bg-[#6D28D9] flex items-center justify-center text-white font-bold text-lg">
                            <i class="fa-solid fa-fish"></i>
                        </div>
                        <span class="text-2xl font-bold">Gharafaiha Resto</span>
                    </div>
                    <p class="text-slate-400 max-w-md leading-relaxed text-sm">
                        Restoran modern pelopor masakan khas Riau dengan olahan Gulai Ikan Patin terbaik. Menyajikan kelezatan rempah-rempah Melayu asli yang otentik dan higienis.
                    </p>
                    <div class="flex gap-4 mt-6">
                        <a href="#" class="w-9 h-9 rounded-lg bg-slate-800 flex items-center justify-center text-purple-300 hover:bg-[#6D28D9] hover:text-white transition-colors"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#" class="w-9 h-9 rounded-lg bg-slate-800 flex items-center justify-center text-purple-300 hover:bg-[#6D28D9] hover:text-white transition-colors"><i class="fa-brands fa-tiktok"></i></a>
                        <a href="#" class="w-9 h-9 rounded-lg bg-slate-800 flex items-center justify-center text-purple-300 hover:bg-[#6D28D9] hover:text-white transition-colors"><i class="fa-brands fa-whatsapp"></i></a>
                    </div>
                </div>
                <div>
                    <h4 class="text-lg font-bold text-white mb-4 border-b border-purple-500/30 pb-2">Navigasi Utama</h4>
                    <ul class="space-y-2 text-sm text-slate-400">
                        <li><a href="<?= base_url('/') ?>" class="hover:text-[#C4B5FD] transition-colors">Beranda</a></li>
                        <li><a href="<?= base_url('/#katalog') ?>" class="hover:text-[#C4B5FD] transition-colors">Menu Gulai Patin</a></li>
                        <li><a href="<?= base_url('/login') ?>" class="hover:text-[#C4B5FD] transition-colors">Portal Admin</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-bold text-white mb-4 border-b border-purple-500/30 pb-2">Kontak Restoran</h4>
                    <ul class="space-y-3 text-sm text-slate-400">
                        <li class="flex items-center gap-2"><i class="fa-solid fa-location-dot text-[#C4B5FD]"></i> Jl. Sudirman No. 88, Pekanbaru, Riau</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-phone text-[#C4B5FD]"></i> (0761) 888-999</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-clock text-[#C4B5FD]"></i> Setiap Hari 09.00 - 22.00 WIB</li>
                    </ul>
                </div>
            </div>
            <div class="pt-8 border-t border-slate-800 text-center text-sm text-slate-500 flex flex-col md:flex-row justify-between items-center gap-4">
                <p>&copy; <?= date('Y') ?> Gharafaiha Resto - Ujian Praktik CodeIgniter 4 (Aysel Gharafaiha Saputra)</p>
                <p class="text-xs text-purple-400/80">Dikembangkan untuk Promosi Kuliner Khas Daerah Riau</p>
            </div>
        </div>
    </footer>

    <!-- Cart / Order Drawer Modal -->
    <div id="cartModal" class="fixed inset-0 z-50 hidden bg-slate-900/60 backdrop-blur-sm transition-opacity flex justify-end">
        <div class="w-full max-w-md bg-white h-full shadow-2xl flex flex-col p-6 overflow-y-auto">
            <div class="flex items-center justify-between border-b pb-4 mb-4">
                <h3 class="text-xl font-bold text-slate-900 flex items-center gap-2">
                    <i class="fa-solid fa-shopping-bag text-[#6D28D9]"></i> Keranjang Pesanan
                </h3>
                <button onclick="toggleCartModal()" class="text-slate-400 hover:text-slate-600 text-xl font-bold">&times;</button>
            </div>
            <div id="cartItemsList" class="flex-grow space-y-4">
                <p class="text-slate-500 text-center py-10">Keranjang Anda masih kosong.</p>
            </div>
            <div class="border-t pt-4 mt-auto">
                <div class="flex justify-between items-center text-lg font-bold mb-4">
                    <span>Total Estimasi:</span>
                    <span id="cartTotal" class="text-[#6D28D9]">Rp 0</span>
                </div>
                <button onclick="checkoutWhatsApp()" class="w-full py-3 bg-[#6D28D9] text-white font-bold rounded-xl shadow-lg hover:bg-purple-800 transition-all flex items-center justify-center gap-2">
                    <i class="fa-brands fa-whatsapp text-xl"></i> Pesan via WhatsApp
                </button>
            </div>
        </div>
    </div>

    <!-- Toast Notifications -->
    <?php if (session()->getFlashdata('success')): ?>
        <div id="toastSuccess" class="fixed bottom-5 right-5 z-50 bg-emerald-600 text-white px-6 py-4 rounded-xl shadow-2xl flex items-center gap-3 animate-bounce">
            <i class="fa-solid fa-circle-check text-xl"></i>
            <div>
                <p class="font-bold">Berhasil!</p>
                <p class="text-sm opacity-90"><?= session()->getFlashdata('success') ?></p>
            </div>
            <button onclick="this.parentElement.remove()" class="ml-4 font-bold opacity-70 hover:opacity-100">&times;</button>
        </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('error')): ?>
        <div id="toastError" class="fixed bottom-5 right-5 z-50 bg-rose-600 text-white px-6 py-4 rounded-xl shadow-2xl flex items-center gap-3">
            <i class="fa-solid fa-triangle-exclamation text-xl"></i>
            <div>
                <p class="font-bold">Perhatian!</p>
                <p class="text-sm opacity-90"><?= session()->getFlashdata('error') ?></p>
            </div>
            <button onclick="this.parentElement.remove()" class="ml-4 font-bold opacity-70 hover:opacity-100">&times;</button>
        </div>
    <?php endif; ?>

    <script>
        let cart = JSON.parse(localStorage.getItem('gharafaiha_cart')) || [];

        function updateCartUI() {
            const cartCountEl = document.getElementById('cartCount');
            const cartListEl = document.getElementById('cartItemsList');
            const cartTotalEl = document.getElementById('cartTotal');

            if (!cartCountEl) return;

            const totalCount = cart.reduce((sum, item) => sum + item.qty, 0);
            cartCountEl.innerText = totalCount;

            if (cart.length === 0) {
                cartListEl.innerHTML = '<p class="text-slate-500 text-center py-10">Keranjang Anda masih kosong.</p>';
                cartTotalEl.innerText = 'Rp 0';
                return;
            }

            let html = '';
            let total = 0;

            cart.forEach((item, index) => {
                const subtotal = item.price * item.qty;
                total += subtotal;
                html += `
                    <div class="flex items-center justify-between p-3 bg-purple-50/50 rounded-xl border border-purple-100">
                        <div>
                            <h5 class="font-bold text-slate-800 text-sm">${item.name}</h5>
                            <p class="text-xs text-[#6D28D9] font-semibold">Rp ${item.price.toLocaleString('id-ID')} x ${item.qty}</p>
                        </div>
                        <div class="flex items-center gap-2">
                            <button onclick="changeQty(${index}, -1)" class="w-7 h-7 bg-white rounded-lg shadow text-slate-700 font-bold">-</button>
                            <span class="text-sm font-bold">${item.qty}</span>
                            <button onclick="changeQty(${index}, 1)" class="w-7 h-7 bg-white rounded-lg shadow text-slate-700 font-bold">+</button>
                        </div>
                    </div>
                `;
            });

            cartListEl.innerHTML = html;
            cartTotalEl.innerText = 'Rp ' + total.toLocaleString('id-ID');
        }

        function addToCart(id, name, price) {
            const existing = cart.find(item => item.id === id);
            if (existing) {
                existing.qty += 1;
            } else {
                cart.push({ id, name, price, qty: 1 });
            }
            localStorage.setItem('gharafaiha_cart', JSON.stringify(cart));
            updateCartUI();
            alert(`"${name}" telah ditambahkan ke keranjang!`);
        }

        function changeQty(index, delta) {
            cart[index].qty += delta;
            if (cart[index].qty <= 0) {
                cart.splice(index, 1);
            }
            localStorage.setItem('gharafaiha_cart', JSON.stringify(cart));
            updateCartUI();
        }

        function toggleCartModal() {
            const modal = document.getElementById('cartModal');
            modal.classList.toggle('hidden');
        }

        function checkoutWhatsApp() {
            if (cart.length === 0) {
                alert('Keranjang Anda masih kosong.');
                return;
            }
            let text = 'Halo Gharafaiha Resto, saya ingin memesan menu Gulai Ikan Patin:\n\n';
            let total = 0;
            cart.forEach(item => {
                const sub = item.price * item.qty;
                total += sub;
                text += `- ${item.name} (${item.qty}x) = Rp ${sub.toLocaleString('id-ID')}\n`;
            });
            text += `\n*Total*: Rp ${total.toLocaleString('id-ID')}\nMohon diproses, terima kasih!`;
            window.open(`https://wa.me/6281234567890?text=${encodeURIComponent(text)}`, '_blank');
        }

        document.addEventListener('DOMContentLoaded', updateCartUI);
    </script>

    <?= $this->renderSection('scripts') ?>
</body>
</html>
