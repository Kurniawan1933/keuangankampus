<!DOCTYPE html>

<html class="light" lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Catat Transaksi - Klola</title>
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
        body { font-family: 'Inter', sans-serif; }
        h1, h2, h3 { font-family: 'Manrope', sans-serif; }
    </style>
<style>
    body {
      min-height: max(884px, 100dvh);
    }
  </style>
  </head>
<body class="bg-surface text-on-surface min-h-screen flex flex-col items-center">
<!-- TopAppBar -->
<header class="fixed top-0 w-full z-50 bg-slate-50/80 backdrop-blur-xl shadow-sm">
<div class="flex justify-between items-center px-6 py-4 w-full max-w-2xl mx-auto">
<div class="flex items-center gap-4">
<button class="w-10 h-10 flex items-center justify-center rounded-full hover:bg-slate-100 transition-colors active:scale-95 duration-150">
<span class="material-symbols-outlined text-slate-500">arrow_back</span>
</button>
<h1 class="font-['Manrope'] font-bold tracking-tight text-2xl text-blue-700">Klola</h1>
</div>
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-blue-700">notifications</span>
<div class="w-10 h-10 rounded-full bg-slate-200 overflow-hidden">
<img alt="Avatar" class="w-full h-full object-cover" data-alt="close-up portrait of a professional man with a kind expression in soft studio lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDXYlOz_NpA9oQM4dxSsApFmog7NJhL7IYmw6JXgf92C7nUnfso726p62FwYkAt6moFSDJ4wcv8IQLGanJVaAK29e-qzuy_d7OVlQ5XYgEXdqsRrhiiYH7SqiMAdqZMdwpLd6iJdN-9ZTlbcInt46izdvXPeqOAKALLXsWoFsCyWQJXFf11wos87tAQQJGuseCzBrPA5Wcj8YuZxxMfHH1t9uzm94-sJGylV9xQ4iIKkoeBZ82Ppp4nyEO07dBbkgi4h7dOORwqhLAj"/>
</div>
</div>
</div>
</header>
<main class="w-full max-w-2xl pt-24 pb-32 px-6 flex flex-col gap-8">
<!-- Transaction Type Switcher -->
<section class="flex flex-col gap-4">
<div class="flex p-1.5 bg-surface-container-high rounded-2xl w-full">
<button class="flex-1 py-3 px-6 rounded-xl font-headline font-bold text-sm transition-all duration-200 bg-surface-container-lowest text-primary shadow-sm">
                    Pemasukan
                </button>
<button class="flex-1 py-3 px-6 rounded-xl font-headline font-semibold text-sm transition-all duration-200 text-on-surface-variant hover:bg-white/50">
                    Pengeluaran
                </button>
</div>
</section>
<!-- Big Amount Input -->
<section class="flex flex-col items-center justify-center py-8">
<label class="font-label text-xs font-semibold uppercase tracking-widest text-outline mb-2">NOMINAL TRANSAKSI</label>
<div class="relative flex items-baseline gap-2">
<span class="text-3xl font-headline font-extrabold text-primary/40">Rp</span>
<input class="bg-transparent border-none focus:ring-0 text-6xl md:text-7xl font-headline font-extrabold text-on-surface text-center tracking-tighter w-full max-w-[320px]" placeholder="0" type="text" value="0"/>
</div>
<div class="h-1 w-24 bg-primary-container/20 rounded-full mt-4"></div>
</section>
<!-- Category Grid (Bento Style) -->
<section class="flex flex-col gap-4">
<h2 class="font-headline font-bold text-lg px-1">Pilih Kategori</h2>
<div class="grid grid-cols-2 md:grid-cols-4 gap-3">
<!-- Gaji -->
<button class="group flex flex-col items-center justify-center p-5 bg-surface-container-lowest rounded-2xl shadow-sm border border-outline-variant/15 hover:border-primary/40 transition-all duration-200 active:scale-95">
<div class="w-12 h-12 rounded-full bg-secondary-container flex items-center justify-center mb-3 group-hover:bg-primary-fixed transition-colors">
<span class="material-symbols-outlined text-primary" data-icon="payments">payments</span>
</div>
<span class="font-body text-sm font-semibold text-on-secondary-fixed-variant">Gaji</span>
</button>
<!-- Freelance -->
<button class="group flex flex-col items-center justify-center p-5 bg-surface-container-lowest rounded-2xl shadow-sm border border-outline-variant/15 hover:border-primary/40 transition-all duration-200 active:scale-95">
<div class="w-12 h-12 rounded-full bg-secondary-container flex items-center justify-center mb-3 group-hover:bg-primary-fixed transition-colors">
<span class="material-symbols-outlined text-primary" data-icon="work">work</span>
</div>
<span class="font-body text-sm font-semibold text-on-secondary-fixed-variant">Freelance</span>
</button>
<!-- Passive Income -->
<button class="group flex flex-col items-center justify-center p-5 bg-surface-container-lowest rounded-2xl shadow-sm border border-outline-variant/15 hover:border-primary/40 transition-all duration-200 active:scale-95">
<div class="w-12 h-12 rounded-full bg-secondary-container flex items-center justify-center mb-3 group-hover:bg-primary-fixed transition-colors">
<span class="material-symbols-outlined text-primary" data-icon="trending_up">trending_up</span>
</div>
<span class="font-body text-sm font-semibold text-on-secondary-fixed-variant text-center leading-tight">Passive Income</span>
</button>
<!-- Komisi -->
<button class="group flex flex-col items-center justify-center p-5 bg-surface-container-lowest rounded-2xl shadow-sm border border-outline-variant/15 hover:border-primary/40 transition-all duration-200 active:scale-95">
<div class="w-12 h-12 rounded-full bg-secondary-container flex items-center justify-center mb-3 group-hover:bg-primary-fixed transition-colors">
<span class="material-symbols-outlined text-primary" data-icon="card_giftcard">card_giftcard</span>
</div>
<span class="font-body text-sm font-semibold text-on-secondary-fixed-variant">Komisi</span>
</button>
</div>
</section>
<!-- Additional Info Form -->
<section class="flex flex-col gap-5">
<div class="flex flex-col gap-2">
<label class="font-label text-sm font-medium text-on-surface-variant px-1">Catatan Tambahan (Opsional)</label>
<div class="bg-surface-container-low rounded-xl px-4 py-3 focus-within:ring-2 focus-within:ring-primary/20 transition-all">
<input class="bg-transparent border-none focus:ring-0 w-full font-body text-on-surface" placeholder="Contoh: Bonus proyek A" type="text"/>
</div>
</div>
<div class="flex flex-col gap-2">
<label class="font-label text-sm font-medium text-on-surface-variant px-1">Tanggal Transaksi</label>
<div class="flex items-center gap-3 bg-surface-container-low rounded-xl px-4 py-3">
<span class="material-symbols-outlined text-outline text-xl">calendar_today</span>
<input class="bg-transparent border-none focus:ring-0 w-full font-body text-on-surface" type="text" value="Hari ini, 24 Mei 2024"/>
</div>
</div>
</section>
<!-- Save Button -->
<section class="mt-4">
<button class="w-full py-5 bg-gradient-to-r from-primary to-primary-container text-on-primary font-headline font-bold text-lg rounded-2xl shadow-lg shadow-primary/20 hover:scale-[1.02] active:scale-95 transition-all duration-200">
                Simpan Transaksi
            </button>
</section>
</main>
<!-- Transaction Illustration (Subtle Background Detail) -->
<div class="fixed top-1/2 -right-24 -z-10 opacity-10 pointer-events-none hidden lg:block">
<div class="w-96 h-96 rounded-full bg-gradient-to-br from-primary to-transparent blur-3xl"></div>
</div>
<!-- BottomNavBar -->
<nav class="fixed bottom-0 w-full z-50 bg-white/80 backdrop-blur-2xl rounded-t-3xl shadow-[0_-8px_24px_rgba(25,28,29,0.06)] md:hidden">
<div class="flex justify-around items-center w-full px-4 pb-6 pt-3">
<div class="flex flex-col items-center justify-center text-slate-400 px-5 py-2">
<span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
<span class="font-['Inter'] text-[11px] font-semibold">Beranda</span>
</div>
<div class="flex flex-col items-center justify-center bg-blue-50 text-blue-700 rounded-2xl px-5 py-2">
<span class="material-symbols-outlined" data-icon="receipt_long">receipt_long</span>
<span class="font-['Inter'] text-[11px] font-semibold">Transaksi</span>
</div>
<div class="flex flex-col items-center justify-center text-slate-400 px-5 py-2">
<span class="material-symbols-outlined" data-icon="analytics">analytics</span>
<span class="font-['Inter'] text-[11px] font-semibold">Laporan</span>
</div>
<div class="flex flex-col items-center justify-center text-slate-400 px-5 py-2">
<span class="material-symbols-outlined" data-icon="person">person</span>
<span class="font-['Inter'] text-[11px] font-semibold">Profil</span>
</div>
</div>
</nav>
</body></html>
