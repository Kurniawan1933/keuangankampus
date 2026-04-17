<!DOCTYPE html>

<html lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "secondary": "#525f73",
                    "on-primary-fixed-variant": "#0040a1",
                    "primary-container": "#0056d2",
                    "surface-container-lowest": "#ffffff",
                    "on-secondary-container": "#586579",
                    "tertiary-container": "#a93802",
                    "surface": "#f8f9fa",
                    "inverse-primary": "#b2c5ff",
                    "surface-variant": "#e1e3e4",
                    "surface-container": "#edeeef",
                    "on-secondary-fixed-variant": "#3b485a",
                    "surface-container-low": "#f3f4f5",
                    "error": "#ba1a1a",
                    "tertiary-fixed": "#ffdbcf",
                    "on-primary": "#ffffff",
                    "on-primary-fixed": "#001847",
                    "outline-variant": "#c3c6d6",
                    "background": "#f8f9fa",
                    "inverse-surface": "#2e3132",
                    "on-tertiary-fixed-variant": "#812800",
                    "on-tertiary": "#ffffff",
                    "on-tertiary-container": "#ffcebd",
                    "surface-container-highest": "#e1e3e4",
                    "tertiary": "#822800",
                    "surface-dim": "#d9dadb",
                    "on-surface-variant": "#424654",
                    "secondary-fixed": "#d6e3fb",
                    "on-secondary": "#ffffff",
                    "outline": "#737785",
                    "surface-container-high": "#e7e8e9",
                    "on-error": "#ffffff",
                    "on-tertiary-fixed": "#380d00",
                    "on-primary-container": "#ccd8ff",
                    "on-error-container": "#93000a",
                    "surface-tint": "#0056d2",
                    "surface-bright": "#f8f9fa",
                    "primary-fixed": "#dae2ff",
                    "on-background": "#191c1d",
                    "on-surface": "#191c1d",
                    "primary": "#0040a1",
                    "tertiary-fixed-dim": "#ffb59b",
                    "secondary-fixed-dim": "#bac7de",
                    "error-container": "#ffdad6",
                    "primary-fixed-dim": "#b2c5ff",
                    "secondary-container": "#d6e3fb",
                    "on-secondary-fixed": "#0f1c2d",
                    "inverse-on-surface": "#f0f1f2"
            },
            "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
            },
            "fontFamily": {
                    "headline": ["Manrope"],
                    "body": ["Inter"],
                    "label": ["Inter"]
            }
          },
        },
      }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        body { font-family: 'Inter', sans-serif; }
        .headline-font { font-family: 'Manrope', sans-serif; }
        .glass-header { backdrop-filter: blur(20px); }
    </style>
<style>
    body {
      min-height: max(884px, 100dvh);
    }
  </style>
  </head>
<body class="bg-surface text-on-surface min-h-screen pb-32">
<!-- TopAppBar -->
<header class="fixed top-0 w-full z-50 bg-slate-50/80 dark:bg-slate-900/80 backdrop-blur-xl shadow-sm dark:shadow-none">
<div class="flex justify-between items-center px-6 py-4 w-full">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-full overflow-hidden border border-outline-variant/15">
<img alt="User profile avatar" class="w-full h-full object-cover" data-alt="close-up portrait of a professional man in a bright office with soft natural lighting and minimalist aesthetic" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCFwmxHquX6y1NFUGPAtzs9K9C3XpD8Djf1a9sHnHPI8xGNCNYUdllecCZKPQN9ur-SVyQK0265aOfgxfrN8NygVtUNhlYKdRaae59YIuXe-hG3J0-aNQw6KPgDtTHdQgt7iQZWcVa_v8bm_1BLLaNPqp6ausYDa3P9t95LxlGrCd0SAleuL7x-0b1id5D1RN9skRcmj74n0TqipLtten_9SyvEqgrxFJCoF9AH8pQoDLjeS0eeRuiQ3DNDpO1irCPTu5Dj0lvyTj6S"/>
</div>
<div class="flex flex-col">
<span class="text-2xl font-extrabold text-blue-700 dark:text-blue-400 font-['Manrope'] tracking-tight">Klola</span>
</div>
</div>
<button class="w-10 h-10 flex items-center justify-center rounded-full hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors active:scale-95 duration-150 text-blue-700 dark:text-blue-400">
<span class="material-symbols-outlined" data-icon="notifications">notifications</span>
</button>
</div>
</header>
<main class="pt-24 px-6 space-y-8 max-w-2xl mx-auto">
<!-- Hero Balance Section -->
<section class="relative group">
<div class="bg-gradient-to-br from-primary to-primary-container p-8 rounded-[2rem] text-on-primary shadow-2xl overflow-hidden min-h-[220px] flex flex-col justify-between">
<!-- Abstract Texture Overlay -->
<div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full -mr-20 -mt-20 blur-3xl"></div>
<div class="relative z-10">
<p class="font-label text-sm font-medium opacity-80 mb-1">Total Saldo Anda</p>
<div class="flex items-baseline gap-2">
<span class="text-lg font-headline font-bold opacity-70">Rp</span>
<h1 class="text-4xl font-headline font-extrabold tracking-tight">142.850.000</h1>
</div>
</div>
<div class="relative z-10 flex justify-between items-end">
<div class="flex gap-4">
<div class="flex flex-col">
<span class="text-[10px] uppercase tracking-wider opacity-60">Pemasukan</span>
<span class="font-headline font-bold text-base">Rp 12.4M</span>
</div>
<div class="w-px h-8 bg-white/20 self-center"></div>
<div class="flex flex-col">
<span class="text-[10px] uppercase tracking-wider opacity-60">Pengeluaran</span>
<span class="font-headline font-bold text-base">Rp 4.2M</span>
</div>
</div>
<button class="bg-white/20 backdrop-blur-md px-4 py-2 rounded-xl text-xs font-bold hover:bg-white/30 transition-all active:scale-95">
                        Detail Akun
                    </button>
</div>
</div>
</section>
<!-- Stats Grid (Asymmetric) -->
<section class="grid grid-cols-12 gap-4">
<!-- Summary Chart Card -->
<div class="col-span-12 md:col-span-8 bg-surface-container-lowest p-6 rounded-[2rem] shadow-sm flex flex-col justify-between h-[280px]">
<div>
<h3 class="font-headline font-bold text-lg text-on-surface mb-1">Alokasi Dana</h3>
<p class="text-sm text-secondary font-body">Pengeluaran bulan ini</p>
</div>
<!-- Simple Custom Visual Chart representation -->
<div class="flex items-end justify-between h-32 gap-2 mt-4 px-2">
<div class="flex-1 bg-primary/10 rounded-t-xl relative group h-full">
<div class="absolute bottom-0 w-full bg-primary-container rounded-t-xl transition-all duration-500 h-[65%]"></div>
<span class="absolute -bottom-6 left-1/2 -translate-x-1/2 text-[10px] font-bold text-secondary">Sen</span>
</div>
<div class="flex-1 bg-primary/10 rounded-t-xl relative h-full">
<div class="absolute bottom-0 w-full bg-primary-container rounded-t-xl h-[45%]"></div>
<span class="absolute -bottom-6 left-1/2 -translate-x-1/2 text-[10px] font-bold text-secondary">Sel</span>
</div>
<div class="flex-1 bg-primary/10 rounded-t-xl relative h-full">
<div class="absolute bottom-0 w-full bg-primary-container rounded-t-xl h-[85%]"></div>
<span class="absolute -bottom-6 left-1/2 -translate-x-1/2 text-[10px] font-bold text-secondary">Rab</span>
</div>
<div class="flex-1 bg-primary/10 rounded-t-xl relative h-full">
<div class="absolute bottom-0 w-full bg-primary-container rounded-t-xl h-[30%]"></div>
<span class="absolute -bottom-6 left-1/2 -translate-x-1/2 text-[10px] font-bold text-secondary">Kam</span>
</div>
<div class="flex-1 bg-primary/10 rounded-t-xl relative h-full">
<div class="absolute bottom-0 w-full bg-primary-container rounded-t-xl h-[95%]"></div>
<span class="absolute -bottom-6 left-1/2 -translate-x-1/2 text-[10px] font-bold text-secondary">Jum</span>
</div>
</div>
<div class="mt-8 flex justify-end">
<span class="text-xs font-bold text-primary flex items-center gap-1">
                        Analisis Lengkap <span class="material-symbols-outlined text-sm" data-icon="trending_up">trending_up</span>
</span>
</div>
</div>
<!-- Quick Action Card -->
<div class="col-span-12 md:col-span-4 bg-tertiary-fixed p-6 rounded-[2rem] shadow-sm flex flex-col justify-between">
<div class="w-12 h-12 bg-on-tertiary-fixed-variant rounded-2xl flex items-center justify-center text-white mb-4">
<span class="material-symbols-outlined" data-icon="savings">savings</span>
</div>
<div>
<h4 class="font-headline font-bold text-on-tertiary-fixed text-lg">Tabungan Masa Depan</h4>
<p class="text-xs text-on-tertiary-fixed-variant font-medium mt-1">75% dari target tercapai</p>
</div>
<div class="mt-4 bg-white/30 rounded-full h-1.5 overflow-hidden">
<div class="bg-on-tertiary-fixed-variant h-full w-3/4"></div>
</div>
</div>
</section>
<!-- Transaction Section -->
<section class="space-y-4">
<div class="flex justify-between items-center">
<h3 class="font-headline font-bold text-xl text-on-surface">Transaksi Terakhir</h3>
<button class="text-primary font-bold text-sm px-2 py-1">Lihat Semua</button>
</div>
<div class="space-y-3">
<!-- Transaction Item 1 -->
<div class="flex items-center justify-between p-4 bg-surface-container-lowest rounded-2xl hover:bg-surface-container transition-colors">
<div class="flex items-center gap-4">
<div class="w-12 h-12 bg-secondary-container rounded-full flex items-center justify-center text-on-secondary-container">
<span class="material-symbols-outlined" data-icon="shopping_bag">shopping_bag</span>
</div>
<div>
<p class="font-bold text-on-surface font-body">Belanja Bulanan</p>
<p class="text-xs text-secondary">Supermarket Raya • 14:20</p>
</div>
</div>
<div class="text-right">
<p class="font-headline font-bold text-error">-Rp 850.000</p>
<p class="text-[10px] text-secondary font-medium uppercase">Kebutuhan</p>
</div>
</div>
<!-- Transaction Item 2 -->
<div class="flex items-center justify-between p-4 bg-surface-container-lowest rounded-2xl hover:bg-surface-container transition-colors">
<div class="flex items-center gap-4">
<div class="w-12 h-12 bg-primary-fixed rounded-full flex items-center justify-center text-primary">
<span class="material-symbols-outlined" data-icon="payments" style="font-variation-settings: 'FILL' 1;">payments</span>
</div>
<div>
<p class="font-bold text-on-surface font-body">Gaji Bulanan</p>
<p class="text-xs text-secondary">PT. Teknologi Maju • Kemarin</p>
</div>
</div>
<div class="text-right">
<p class="font-headline font-bold text-on-primary-fixed-variant">+Rp 25.000.000</p>
<p class="text-[10px] text-secondary font-medium uppercase">Pendapatan</p>
</div>
</div>
<!-- Transaction Item 3 -->
<div class="flex items-center justify-between p-4 bg-surface-container-lowest rounded-2xl hover:bg-surface-container transition-colors">
<div class="flex items-center gap-4">
<div class="w-12 h-12 bg-tertiary-fixed rounded-full flex items-center justify-center text-on-tertiary-fixed-variant">
<span class="material-symbols-outlined" data-icon="restaurant">restaurant</span>
</div>
<div>
<p class="font-bold text-on-surface font-body">Makan Malam</p>
<p class="text-xs text-secondary">Kedai Kopi Senja • 20 Feb</p>
</div>
</div>
<div class="text-right">
<p class="font-headline font-bold text-error">-Rp 125.000</p>
<p class="text-[10px] text-secondary font-medium uppercase">Hiburan</p>
</div>
</div>
</div>
</section>
</main>
<!-- BottomNavBar -->
<nav class="fixed bottom-0 w-full z-50 rounded-t-3xl bg-white/80 dark:bg-slate-950/80 backdrop-blur-2xl shadow-[0_-8px_24px_rgba(25,28,29,0.06)]">
<div class="flex justify-around items-center w-full px-4 pb-6 pt-3">
<!-- Active Tab: Beranda -->
<a class="flex flex-col items-center justify-center bg-blue-50 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-2xl px-5 py-2 group active:scale-90 duration-200 ease-out" href="#">
<span class="material-symbols-outlined mb-1" data-icon="dashboard" style="font-variation-settings: 'FILL' 1;">dashboard</span>
<span class="font-['Inter'] text-[11px] font-semibold">Beranda</span>
</a>
<!-- Inactive Tab: Transaksi -->
<a class="flex flex-col items-center justify-center text-slate-400 dark:text-slate-500 px-5 py-2 group hover:text-blue-600 dark:hover:text-blue-300 active:scale-90 duration-200 ease-out" href="#">
<span class="material-symbols-outlined mb-1" data-icon="receipt_long">receipt_long</span>
<span class="font-['Inter'] text-[11px] font-semibold text-slate-400 dark:text-slate-500">Transaksi</span>
</a>
<!-- Inactive Tab: Laporan -->
<a class="flex flex-col items-center justify-center text-slate-400 dark:text-slate-500 px-5 py-2 group hover:text-blue-600 dark:hover:text-blue-300 active:scale-90 duration-200 ease-out" href="#">
<span class="material-symbols-outlined mb-1" data-icon="analytics">analytics</span>
<span class="font-['Inter'] text-[11px] font-semibold text-slate-400 dark:text-slate-500">Laporan</span>
</a>
<!-- Inactive Tab: Profil -->
<a class="flex flex-col items-center justify-center text-slate-400 dark:text-slate-500 px-5 py-2 group hover:text-blue-600 dark:hover:text-blue-300 active:scale-90 duration-200 ease-out" href="#">
<span class="material-symbols-outlined mb-1" data-icon="person">person</span>
<span class="font-['Inter'] text-[11px] font-semibold text-slate-400 dark:text-slate-500">Profil</span>
</a>
</div>
</nav>
<!-- Floating Action Button (Supressed based on "Main Content" rule but often present in Dashboards, kept for functional visual anchor if needed, otherwise removed as per suppression mandate for Details screens, but this is a HOME screen) -->
<div class="fixed bottom-28 right-6">
<button class="w-14 h-14 bg-gradient-to-tr from-primary to-primary-container rounded-2xl shadow-xl flex items-center justify-center text-white active:scale-95 transition-transform duration-150">
<span class="material-symbols-outlined text-3xl" data-icon="add">add</span>
</button>
</div>
</body></html>
