<!DOCTYPE html>

<html lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
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
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f9fa;
        }
        h1, h2, h3 {
            font-family: 'Manrope', sans-serif;
        }
        .bento-grid {
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            gap: 1.5rem;
        }
        .chart-area-gradient {
            background: linear-gradient(180deg, rgba(0, 86, 210, 0.1) 0%, rgba(0, 86, 210, 0) 100%);
        }
    </style>
<style>
    body {
      min-height: max(884px, 100dvh);
    }
  </style>
  </head>
<body class="bg-surface text-on-surface pb-24">
<!-- TopAppBar -->
<header class="fixed top-0 w-full z-50 bg-slate-50/80 dark:bg-slate-900/80 backdrop-blur-xl shadow-sm dark:shadow-none flex justify-between items-center px-6 py-4">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-full overflow-hidden bg-primary-fixed">
<img alt="User Profile" data-alt="portrait of a professional man in a blue shirt with a friendly smile, clean studio background, modern lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDf5TDrXpgRfWrn2MZXfar_yO-bct1dTfmhWaOcg5FEziQgCeZLk3Q-RN0xG_Iw4bCGxBGVKD_7tC-we4QdbPp2p3AhjKFjtB_eMLRQWBQDKOpixn32eX9jtj1toGMA1oWFtGBwLO-yaIGxENu41KACP4BWq39dsOQukDFYLMn5hECsez_OMe_eY1l6bYfH8k2oqr6CCcqSHEHOkg_7ap12E0hkuBw5AvJVM72TlJ4fI7GgluHgAGTo2u6NF8cfttA3MtBwxqdFb0Ok"/>
</div>
<span class="text-2xl font-extrabold text-blue-700 dark:text-blue-400 font-['Manrope'] tracking-tight">Klola</span>
</div>
<button class="p-2 rounded-full hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors active:scale-95 duration-150">
<span class="material-symbols-outlined text-blue-700 dark:text-blue-400" data-icon="notifications">notifications</span>
</button>
</header>
<main class="max-w-7xl mx-auto px-6 pt-24 pb-12">
<!-- Dashboard Header -->
<div class="mb-10 flex flex-col md:flex-row md:items-end justify-between gap-4">
<div>
<h1 class="text-3xl font-extrabold tracking-tight mb-2">Laporan Analitik</h1>
<p class="text-secondary font-medium">Pemantauan kesehatan keuangan Anda bulan ini.</p>
</div>
<div class="flex gap-3">
<button class="px-5 py-2.5 rounded-full bg-surface-container-high text-on-secondary-fixed-variant font-semibold text-sm flex items-center gap-2 hover:bg-surface-variant transition-colors">
<span class="material-symbols-outlined text-lg" data-icon="calendar_today">calendar_today</span>
                    Bulan Ini
                </button>
<button class="px-5 py-2.5 rounded-full bg-primary text-on-primary font-semibold text-sm flex items-center gap-2 shadow-lg shadow-primary/20 hover:opacity-90 transition-opacity">
<span class="material-symbols-outlined text-lg" data-icon="file_download">file_download</span>
                    Unduh PDF
                </button>
</div>
</div>
<!-- Bento Layout -->
<div class="bento-grid">
<!-- Main Trend Chart -->
<div class="col-span-12 lg:col-span-8 bg-surface-container-lowest rounded-3xl p-8 shadow-sm">
<div class="flex justify-between items-start mb-8">
<div>
<h3 class="text-xl font-bold mb-1">Tren Arus Kas</h3>
<p class="text-sm text-secondary font-medium">Oktober 2023 - Maret 2024</p>
</div>
<div class="flex gap-4">
<div class="flex items-center gap-2">
<span class="w-3 h-3 rounded-full bg-primary"></span>
<span class="text-xs font-semibold text-secondary">Pemasukan</span>
</div>
<div class="flex items-center gap-2">
<span class="w-3 h-3 rounded-full bg-tertiary"></span>
<span class="text-xs font-semibold text-secondary">Pengeluaran</span>
</div>
</div>
</div>
<!-- Mock Area Chart -->
<div class="relative h-[300px] w-full mt-4 flex items-end justify-between px-2">
<!-- Grid Lines -->
<div class="absolute inset-0 flex flex-col justify-between py-2 border-b border-outline-variant/20">
<div class="w-full border-t border-outline-variant/10"></div>
<div class="w-full border-t border-outline-variant/10"></div>
<div class="w-full border-t border-outline-variant/10"></div>
<div class="w-full border-t border-outline-variant/10"></div>
</div>
<!-- Bars/Lines visualization -->
<div class="relative flex-1 h-full flex items-end justify-around group">
<div class="flex flex-col items-center gap-1 w-full max-w-[40px]">
<div class="w-full bg-primary-fixed-dim rounded-t-lg" style="height: 60%;"></div>
<div class="w-full bg-tertiary-fixed rounded-t-lg" style="height: 40%;"></div>
<span class="mt-4 text-[11px] font-bold text-secondary">Okt</span>
</div>
<div class="flex flex-col items-center gap-1 w-full max-w-[40px]">
<div class="w-full bg-primary-fixed-dim rounded-t-lg" style="height: 75%;"></div>
<div class="w-full bg-tertiary-fixed rounded-t-lg" style="height: 35%;"></div>
<span class="mt-4 text-[11px] font-bold text-secondary">Nov</span>
</div>
<div class="flex flex-col items-center gap-1 w-full max-w-[40px]">
<div class="w-full bg-primary-fixed-dim rounded-t-lg" style="height: 65%;"></div>
<div class="w-full bg-tertiary-fixed rounded-t-lg" style="height: 50%;"></div>
<span class="mt-4 text-[11px] font-bold text-secondary">Des</span>
</div>
<div class="flex flex-col items-center gap-1 w-full max-w-[40px]">
<div class="w-full bg-primary-fixed-dim rounded-t-lg" style="height: 90%;"></div>
<div class="w-full bg-tertiary-fixed rounded-t-lg" style="height: 45%;"></div>
<span class="mt-4 text-[11px] font-bold text-secondary">Jan</span>
</div>
<div class="flex flex-col items-center gap-1 w-full max-w-[40px]">
<div class="w-full bg-primary-fixed-dim rounded-t-lg" style="height: 80%;"></div>
<div class="w-full bg-tertiary-fixed rounded-t-lg" style="height: 55%;"></div>
<span class="mt-4 text-[11px] font-bold text-secondary">Feb</span>
</div>
<div class="flex flex-col items-center gap-1 w-full max-w-[40px]">
<div class="w-full bg-primary rounded-t-lg shadow-lg shadow-primary/20" style="height: 95%;"></div>
<div class="w-full bg-tertiary rounded-t-lg" style="height: 42%;"></div>
<span class="mt-4 text-[11px] font-bold text-primary">Mar</span>
</div>
</div>
</div>
</div>
<!-- Spending Distribution -->
<div class="col-span-12 lg:col-span-4 bg-primary text-on-primary rounded-3xl p-8 relative overflow-hidden flex flex-col justify-between">
<!-- Background texture -->
<div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full -mr-16 -mt-16 blur-3xl"></div>
<div>
<h3 class="text-xl font-bold mb-6">Alokasi Dana</h3>
<div class="space-y-6">
<div class="flex items-center gap-4">
<div class="w-12 h-12 rounded-2xl bg-white/10 flex items-center justify-center">
<span class="material-symbols-outlined" data-icon="restaurant">restaurant</span>
</div>
<div class="flex-1">
<div class="flex justify-between text-sm font-bold mb-2">
<span>Konsumsi</span>
<span>35%</span>
</div>
<div class="h-1.5 w-full bg-white/20 rounded-full overflow-hidden">
<div class="h-full bg-white rounded-full" style="width: 35%"></div>
</div>
</div>
</div>
<div class="flex items-center gap-4">
<div class="w-12 h-12 rounded-2xl bg-white/10 flex items-center justify-center">
<span class="material-symbols-outlined" data-icon="directions_car">directions_car</span>
</div>
<div class="flex-1">
<div class="flex justify-between text-sm font-bold mb-2">
<span>Transportasi</span>
<span>20%</span>
</div>
<div class="h-1.5 w-full bg-white/20 rounded-full overflow-hidden">
<div class="h-full bg-white rounded-full" style="width: 20%"></div>
</div>
</div>
</div>
<div class="flex items-center gap-4">
<div class="w-12 h-12 rounded-2xl bg-white/10 flex items-center justify-center">
<span class="material-symbols-outlined" data-icon="movie">movie</span>
</div>
<div class="flex-1">
<div class="flex justify-between text-sm font-bold mb-2">
<span>Hiburan</span>
<span>15%</span>
</div>
<div class="h-1.5 w-full bg-white/20 rounded-full overflow-hidden">
<div class="h-full bg-white rounded-full" style="width: 15%"></div>
</div>
</div>
</div>
</div>
</div>
<div class="mt-10 pt-6 border-t border-white/10">
<p class="text-white/60 text-xs font-medium mb-1">Total Pengeluaran</p>
<p class="text-2xl font-extrabold tracking-tight">Rp 12.450.000</p>
</div>
</div>
<!-- Insights Card -->
<div class="col-span-12 md:col-span-6 lg:col-span-4 bg-surface-container-low rounded-3xl p-6 flex flex-col gap-4">
<div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center">
<span class="material-symbols-outlined text-blue-700" data-icon="lightbulb">lightbulb</span>
</div>
<div>
<h4 class="font-bold text-lg mb-2">Insight Cerdas</h4>
<p class="text-sm text-secondary leading-relaxed">Pengeluaran hiburan Anda turun <span class="text-blue-700 font-bold">12%</span> dari bulan lalu. Anda berada di jalur yang tepat untuk target tabungan!</p>
</div>
<button class="mt-2 text-primary font-bold text-sm flex items-center gap-1 hover:gap-2 transition-all">
                    Lihat Analisis Lengkap <span class="material-symbols-outlined text-sm" data-icon="arrow_forward">arrow_forward</span>
</button>
</div>
<!-- Savings Goal -->
<div class="col-span-12 md:col-span-6 lg:col-span-4 bg-surface-container-lowest rounded-3xl p-6 flex items-center gap-6 shadow-sm">
<div class="relative w-24 h-24 flex items-center justify-center">
<svg class="w-full h-full -rotate-90">
<circle class="text-surface-container-high" cx="48" cy="48" fill="transparent" r="40" stroke="currentColor" stroke-width="8"></circle>
<circle class="text-blue-700" cx="48" cy="48" fill="transparent" r="40" stroke="currentColor" stroke-dasharray="251.2" stroke-dashoffset="62.8" stroke-linecap="round" stroke-width="8"></circle>
</svg>
<span class="absolute font-extrabold text-lg">75%</span>
</div>
<div>
<p class="text-xs font-bold text-secondary uppercase tracking-wider mb-1">Target Dana Darurat</p>
<h4 class="font-extrabold text-xl mb-1">Rp 45.000.000</h4>
<p class="text-[11px] font-medium text-secondary">Tersisa Rp 15jt lagi</p>
</div>
</div>
<!-- Quick Action Card -->
<div class="col-span-12 lg:col-span-4 bg-tertiary-fixed rounded-3xl p-6 relative overflow-hidden group hover:shadow-lg transition-shadow cursor-pointer">
<div class="relative z-10 flex flex-col h-full justify-between">
<div>
<h4 class="font-bold text-lg text-on-tertiary-fixed-variant">Kelola Utang</h4>
<p class="text-sm text-on-tertiary-fixed-variant/70">Optimalkan pembayaran cicilan Anda</p>
</div>
<div class="mt-6 flex items-center justify-between">
<span class="material-symbols-outlined text-4xl text-on-tertiary-fixed-variant/40" data-icon="account_balance_wallet">account_balance_wallet</span>
<div class="w-10 h-10 rounded-full bg-white flex items-center justify-center shadow-sm group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-on-tertiary-fixed-variant" data-icon="add">add</span>
</div>
</div>
</div>
<!-- Decorative element -->
<div class="absolute bottom-0 right-0 w-32 h-32 bg-on-tertiary-fixed-variant/5 rounded-full -mb-16 -mr-8"></div>
</div>
</div>
</main>
<!-- BottomNavBar -->
<nav class="fixed bottom-0 w-full z-50 rounded-t-3xl bg-white/80 dark:bg-slate-950/80 backdrop-blur-2xl shadow-[0_-8px_24px_rgba(25,28,29,0.06)] flex justify-around items-center px-4 pb-6 pt-3">
<a class="flex flex-col items-center justify-center text-slate-400 dark:text-slate-500 px-5 py-2 hover:text-blue-600 transition-colors active:scale-90 duration-200 ease-out" href="#">
<span class="material-symbols-outlined mb-1" data-icon="dashboard">dashboard</span>
<span class="font-['Inter'] text-[11px] font-semibold">Beranda</span>
</a>
<a class="flex flex-col items-center justify-center text-slate-400 dark:text-slate-500 px-5 py-2 hover:text-blue-600 transition-colors active:scale-90 duration-200 ease-out" href="#">
<span class="material-symbols-outlined mb-1" data-icon="receipt_long">receipt_long</span>
<span class="font-['Inter'] text-[11px] font-semibold">Transaksi</span>
</a>
<a class="flex flex-col items-center justify-center bg-blue-50 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-2xl px-5 py-2 active:scale-90 duration-200 ease-out" href="#">
<span class="material-symbols-outlined mb-1" data-icon="analytics" style="font-variation-settings: 'FILL' 1;">analytics</span>
<span class="font-['Inter'] text-[11px] font-semibold">Laporan</span>
</a>
<a class="flex flex-col items-center justify-center text-slate-400 dark:text-slate-500 px-5 py-2 hover:text-blue-600 transition-colors active:scale-90 duration-200 ease-out" href="#">
<span class="material-symbols-outlined mb-1" data-icon="person">person</span>
<span class="font-['Inter'] text-[11px] font-semibold">Profil</span>
</a>
</nav>
</body></html>
