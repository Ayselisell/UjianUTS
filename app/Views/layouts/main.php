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
                        // Warna Utama (Primary): #C4B5FD
                        primary: {
                            DEFAULT: '#C4B5FD',
                            50: '#FAF8FF',
                            100: '#F3EFFF',
                            200: '#E6DCFF',
                            300: '#C4B5FD',
                            400: '#A78BFA',
                        },
                        // Warna Aksen (Accent): #6D28D9
                        accent: {
                            DEFAULT: '#6D28D9',
                            600: '#7C3AED',
                            700: '#6D28D9',
                            800: '#5B21B6',
                            900: '#4C1D95',
                        }
                    },
                    fontFamily: {
                        sans: ['Plus Jakarta Sans', 'system-ui', 'sans-serif'],
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
        .bg-primary-light { background-color: #C4B5FD; }
        .text-accent-deep { color: #6D28D9; }
        .bg-accent-deep { background-color: #6D28D9; }
        .border-primary-soft { border-color: #C4B5FD; }
    </style>
</head>
<body class="bg-slate-50 text-slate-900 antialiased flex flex-col min-h-screen">

    <!-- Header / Navigation Bar -->
    <header class="sticky top-0 z-40 bg-white/95 backdrop-blur-md border-b border-purple-100 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- Logo Restoran -->
                <a href="<?= base_url('/') ?>" class="flex items-center gap-3.5 group">
                    <div class="w-12 h-12 rounded-2xl bg-gradient-to-tr from-[#6D28D9] to-[#C4B5FD] flex items-center justify-center text-white text-xl shadow-lg shadow-[#6D28D9]/25 group-hover:scale-105 transition-all">
                        <i class="fa-solid fa-fish"></i>
                    </div>
                    <div>
                        <div class="flex items-baseline gap-1">
                            <span class="text-2xl font-black text-slate-900 tracking-tight">Gharafaiha</span>
                            <span class="text-2xl font-light text-[#6D28D9]">Resto</span>
                        </div>
                        <span class="block text-[11px] font-bold text-slate-600 tracking-wider uppercase">Spesialis Patin Khas Riau</span>
                    </div>
                </a>

                <!-- Navigation Links -->
                <nav class="hidden md:flex items-center gap-8 font-semibold text-sm text-slate-700">
                    <a href="<?= base_url('/') ?>" class="hover:text-[#6D28D9] transition-colors py-1">Beranda</a>
                    <a href="<?= base_url('/#katalog') ?>" class="hover:text-[#6D28D9] transition-colors py-1">Menu Patin</a>
                    <a href="<?= base_url('/#tentang') ?>" class="hover:text-[#6D28D9] transition-colors py-1">Warisan Kuliner</a>
                </nav>

                <!-- Actions -->
                <div class="flex items-center gap-4">
                    <!-- Cart Button -->
                    <button onclick="toggleCartModal()" class="relative p-2.5 rounded-xl bg-purple-50 text-[#6D28D9] hover:bg-[#C4B5FD]/40 transition-colors border border-purple-200/50">
                        <i class="fa-solid fa-shopping-basket text-lg"></i>
                        <span id="cartCount" class="absolute -top-1.5 -right-1.5 bg-[#6D28D9] text-white text-xs font-bold w-5 h-5 rounded-full flex items-center justify-center shadow-md">0</span>
                    </button>

                    <?php if (session()->get('isLoggedIn')): ?>
                        <a href="<?= base_url('/admin/foods') ?>" class="px-5 py-2.5 rounded-xl bg-[#6D28D9] text-white font-bold text-sm shadow-md hover:bg-purple-800 transition-all flex items-center gap-2">
                            <i class="fa-solid fa-dashboard"></i> Dashboard Admin
                        </a>
                    <?php else: ?>
                        <a href="<?= base_url('/login') ?>" class="px-5 py-2.5 rounded-xl bg-[#C4B5FD] text-[#6D28D9] font-bold text-sm hover:bg-purple-300 transition-all border border-purple-300 shadow-sm flex items-center gap-2">
                            <i class="fa-solid fa-[#6D28D9] fa-user-lock"></i> Login Admin
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Body -->
    <main class="flex-grow">
        <?= $this->renderSection('content') ?>
    </main>

    <!-- Footer -->
    <footer class="bg-slate-950 text-white pt-16 pb-12 border-t border-purple-900/30 mt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-10 mb-12">
                <div class="md:col-span-2 space-y-4">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-[#6D28D9] flex items-center justify-center text-white font-bold">
                            <i class="fa-solid fa-fish"></i>
                        </div>
                        <span class="text-2xl font-extrabold text-white">Gharafaiha Resto</span>
                    </div>
                    <p class="text-slate-400 max-w-md text-sm leading-relaxed">
                        Restoran otentik pelopor olahan Gulai Ikan Patin Khas Riau. Menghadirkan kenikmatan rempah-rempah Melayu asli dalam suasana hangat nan elegan.
                    </p>
                    <div class="flex gap-3 pt-2">
                        <span class="px-3 py-1 bg-[#C4B5FD]/10 border border-[#C4B5FD]/30 text-[#C4B5FD] text-xs font-bold rounded-lg">Warna Utama: #C4B5FD</span>
                        <span class="px-3 py-1 bg-[#6D28D9]/20 border border-[#6D28D9]/40 text-purple-200 text-xs font-bold rounded-lg">Aksen: #6D28D9</span>
                    </div>
                </div>
                <div>
                    <h4 class="text-base font-bold text-[#C4B5FD] mb-4 border-b border-purple-900/50 pb-2">Navigasi Halaman</h4>
                    <ul class="space-y-2.5 text-sm text-slate-400">
                        <li><a href="<?= base_url('/') ?>" class="hover:text-[#C4B5FD] transition-colors">Beranda Utama</a></li>
                        <li><a href="<?= base_url('/#katalog') ?>" class="hover:text-[#C4B5FD] transition-colors">Menu Gulai Patin</a></li>
                        <li><a href="<?= base_url('/login') ?>" class="hover:text-[#C4B5FD] transition-colors">Portal Login Admin</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-base font-bold text-[#C4B5FD] mb-4 border-b border-purple-900/50 pb-2">Lokasi & Kontak</h4>
                    <ul class="space-y-3 text-sm text-slate-400">
                        <li class="flex items-center gap-2.5"><i class="fa-solid fa-location-dot text-[#C4B5FD]"></i> Jl. Jend. Sudirman No. 88, Pekanbaru</li>
                        <li class="flex items-center gap-2.5"><i class="fa-solid fa-phone text-[#C4B5FD]"></i> (0761) 888-999</li>
                        <li class="flex items-center gap-2.5"><i class="fa-solid fa-clock text-[#C4B5FD]"></i> Buka Setiap Hari 09.00 - 22.00 WIB</li>
                    </ul>
                </div>
            </div>
            <div class="pt-8 border-t border-slate-900 text-center text-xs text-slate-500 flex flex-col sm:flex-row justify-between items-center gap-4">
                <p>&copy; <?= date('Y') ?> Gharafaiha Resto — Disusun oleh <strong>Aysel Gharafaiha Saputra</strong> (Riau)</p>
                <p class="text-[#C4B5FD]/80 font-semibold">Ujian Praktik On The Spot Coding CodeIgniter 4</p>
            </div>
        </div>
    </footer>

    <!-- Cart Drawer Modal -->
    <div id="cartModal" class="fixed inset-0 z-50 hidden bg-slate-950/60 backdrop-blur-sm transition-opacity flex justify-end">
        <div class="w-full max-w-md bg-white h-full shadow-2xl flex flex-col p-6 overflow-y-auto">
            <div class="flex items-center justify-between border-b pb-4 mb-4">
                <h3 class="text-lg font-bold text-slate-900 flex items-center gap-2">
                    <i class="fa-solid fa-shopping-bag text-[#6D28D9]"></i> Keranjang Pesanan
                </h3>
                <button onclick="toggleCartModal()" class="text-slate-400 hover:text-slate-700 text-2xl font-bold">&times;</button>
            </div>
            <div id="cartItemsList" class="flex-grow space-y-4">
                <p class="text-slate-500 text-center py-12 text-sm">Keranjang Anda masih kosong.</p>
            </div>
            <div class="border-t pt-4 mt-auto">
                <div class="flex justify-between items-center text-base font-extrabold mb-4">
                    <span>Total Estimasi:</span>
                    <span id="cartTotal" class="text-[#6D28D9] text-xl">Rp 0</span>
                </div>
                <button onclick="checkoutWhatsApp()" class="w-full py-3.5 bg-[#6D28D9] text-white font-bold rounded-2xl shadow-lg hover:bg-purple-800 transition-all flex items-center justify-center gap-2 text-sm">
                    <i class="fa-brands fa-whatsapp text-lg"></i> Kirim Pesanan via WhatsApp
                </button>
            </div>
        </div>
    </div>

    <!-- Toast Notifications -->
    <?php if (session()->getFlashdata('success')): ?>
        <div id="toastSuccess" class="fixed bottom-6 right-6 z-50 bg-emerald-600 text-white px-6 py-4 rounded-2xl shadow-2xl flex items-center gap-3">
            <i class="fa-solid fa-circle-check text-xl"></i>
            <div>
                <p class="font-bold text-sm">Berhasil!</p>
                <p class="text-xs opacity-90"><?= session()->getFlashdata('success') ?></p>
            </div>
            <button onclick="this.parentElement.remove()" class="ml-4 text-white font-bold text-lg">&times;</button>
        </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('error')): ?>
        <div id="toastError" class="fixed bottom-6 right-6 z-50 bg-rose-600 text-white px-6 py-4 rounded-2xl shadow-2xl flex items-center gap-3">
            <i class="fa-solid fa-triangle-exclamation text-xl"></i>
            <div>
                <p class="font-bold text-sm">Perhatian!</p>
                <p class="text-xs opacity-90"><?= session()->getFlashdata('error') ?></p>
            </div>
            <button onclick="this.parentElement.remove()" class="ml-4 text-white font-bold text-lg">&times;</button>
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
                cartListEl.innerHTML = '<p class="text-slate-500 text-center py-12 text-sm">Keranjang Anda masih kosong.</p>';
                cartTotalEl.innerText = 'Rp 0';
                return;
            }

            let html = '';
            let total = 0;

            cart.forEach((item, index) => {
                const subtotal = item.price * item.qty;
                total += subtotal;
                html += `
                    <div class="flex items-center justify-between p-3.5 bg-purple-50/70 rounded-2xl border border-purple-100">
                        <div>
                            <h5 class="font-bold text-slate-800 text-sm">${item.name}</h5>
                            <p class="text-xs text-[#6D28D9] font-bold">Rp ${item.price.toLocaleString('id-ID')} x ${item.qty}</p>
                        </div>
                        <div class="flex items-center gap-2">
                            <button onclick="changeQty(${index}, -1)" class="w-7 h-7 bg-white border border-purple-200 rounded-lg font-bold text-slate-700 shadow-sm">-</button>
                            <span class="text-xs font-bold px-1">${item.qty}</span>
                            <button onclick="changeQty(${index}, 1)" class="w-7 h-7 bg-white border border-purple-200 rounded-lg font-bold text-slate-700 shadow-sm">+</button>
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
            alert(`"${name}" telah ditambahkan ke keranjang pesanan!`);
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
            let text = 'Halo Gharafaiha Resto, saya ingin memesan menu Gulai Patin Khas Riau:\n\n';
            let total = 0;
            cart.forEach(item => {
                const sub = item.price * item.qty;
                total += sub;
                text += `- ${item.name} (${item.qty}x) = Rp ${sub.toLocaleString('id-ID')}\n`;
            });
            text += `\n*Total Estimasi*: Rp ${total.toLocaleString('id-ID')}\nMohon segera diproses, terima kasih!`;
            window.open(`https://wa.me/6281234567890?text=${encodeURIComponent(text)}`, '_blank');
        }

        document.addEventListener('DOMContentLoaded', updateCartUI);
    </script>

    <?= $this->renderSection('scripts') ?>
</body>
</html>
