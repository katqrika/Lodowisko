<!DOCTYPE html>

<html class="dark" lang="pl"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=JetBrains+Mono:wght@500&amp;family=Metropolis:wght@600;700;800&amp;display=swap" rel="stylesheet"/>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .glass-card {
            background: rgba(243, 245, 247, 0.05);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(125, 139, 153, 0.2);
        }
        .ice-gradient {
            background: linear-gradient(135deg, rgba(15, 17, 21, 1) 0%, rgba(32, 42, 52, 1) 100%);
        }
        .glow-hover:hover {
            box-shadow: 0 0 20px rgba(243, 245, 247, 0.15);
        }
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: #0F1115; }
        ::-webkit-scrollbar-thumb { background: #2F4A63; border-radius: 10px; }
    </style>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "tertiary-fixed": "#d6e4f4",
                        "secondary-container": "#2e4962",
                        "surface-container-low": "#1a1c20",
                        "secondary": "#aec9e7",
                        "on-secondary": "#16324a",
                        "on-background": "#e2e2e8",
                        "error-container": "#93000a",
                        "on-primary": "#2d3133",
                        "on-surface-variant": "#c4c7c9",
                        "on-tertiary": "#24323e",
                        "secondary-fixed": "#cee5ff",
                        "on-primary-container": "#626567",
                        "tertiary-fixed-dim": "#bac8d7",
                        "inverse-primary": "#5c5f61",
                        "surface-tint": "#c4c7c9",
                        "primary-fixed-dim": "#c4c7c9",
                        "on-error": "#690005",
                        "inverse-surface": "#e2e2e8",
                        "on-secondary-fixed": "#001d33",
                        "surface-bright": "#37393e",
                        "on-surface": "#e2e2e8",
                        "primary": "#ffffff",
                        "inverse-on-surface": "#2f3035",
                        "primary-container": "#e0e3e5",
                        "on-error-container": "#ffdad6",
                        "surface-container": "#1e2024",
                        "on-primary-fixed": "#191c1e",
                        "surface-dim": "#111317",
                        "surface-container-highest": "#333539",
                        "surface": "#111317",
                        "surface-variant": "#333539",
                        "surface-container-high": "#282a2e",
                        "surface-container-lowest": "#0c0e12",
                        "outline-variant": "#444749",
                        "on-secondary-fixed-variant": "#2e4962",
                        "tertiary": "#ffffff",
                        "secondary-fixed-dim": "#aec9e7",
                        "error": "#ffb4ab",
                        "tertiary-container": "#d6e4f4",
                        "on-tertiary-fixed": "#0f1d28",
                        "background": "#111317",
                        "on-tertiary-container": "#586673",
                        "on-secondary-container": "#9cb8d5",
                        "primary-fixed": "#e0e3e5",
                        "outline": "#8e9193",
                        "on-tertiary-fixed-variant": "#3b4855",
                        "on-primary-fixed-variant": "#444749"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    "spacing": {
                        "section-gap": "120px",
                        "margin-mobile": "20px",
                        "container-max": "1280px",
                        "margin-desktop": "64px",
                        "gutter": "24px",
                        "unit": "8px"
                    },
                    "fontFamily": {
                        "headline-sm": ["Metropolis"],
                        "body-lg": ["Inter"],
                        "headline-lg-mobile": ["Metropolis"],
                        "display-lg": ["Metropolis"],
                        "body-md": ["Inter"],
                        "label-caps": ["JetBrains Mono"],
                        "headline-lg": ["Metropolis"],
                        "headline-md": ["Metropolis"],
                        "display-md": ["Metropolis"]
                    },
                    "fontSize": {
                        "headline-sm": ["24px", {"lineHeight": "32px", "fontWeight": "600"}],
                        "body-lg": ["18px", {"lineHeight": "28px", "fontWeight": "400"}],
                        "headline-lg-mobile": ["32px", {"lineHeight": "40px", "fontWeight": "700"}],
                        "display-lg": ["84px", {"lineHeight": "92px", "letterSpacing": "-0.02em", "fontWeight": "800"}],
                        "body-md": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                        "label-caps": ["14px", {"lineHeight": "20px", "letterSpacing": "0.1em", "fontWeight": "500"}],
                        "headline-lg": ["48px", {"lineHeight": "56px", "letterSpacing": "-0.01em", "fontWeight": "700"}],
                        "headline-md": ["32px", {"lineHeight": "40px", "fontWeight": "600"}],
                        "display-md": ["64px", {"lineHeight": "72px", "letterSpacing": "-0.02em", "fontWeight": "800"}]
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-background text-on-surface selection:bg-primary selection:text-background font-body-md">
<!-- TopNavBar -->
<nav class="fixed top-0 w-full z-50 bg-surface/80 dark:bg-surface/80 backdrop-blur-xl border-b border-outline-variant/30 h-20 px-margin-desktop">
<div class="flex justify-between items-center h-full max-w-container-max mx-auto">
<div class="font-headline-sm text-headline-sm font-bold tracking-tight text-primary dark:text-primary">
                GLACIER RINK
            </div>
<div class="hidden md:flex items-center gap-8">
<a class="font-label-caps text-label-caps text-primary border-b-2 border-primary pb-1 transition-colors duration-300" href="#">Harmonogram</a>
<a class="font-label-caps text-label-caps text-on-surface-variant hover:text-primary transition-colors duration-300" href="#">Rezerwacja</a>
<a class="font-label-caps text-label-caps text-on-surface-variant hover:text-primary transition-colors duration-300" href="#">Wypożyczalnia</a>
<a class="font-label-caps text-label-caps text-on-surface-variant hover:text-primary transition-colors duration-300" href="#">O nas</a>
</div>
<a href="{{ route('login') }}" class="bg-primary text-on-primary font-label-caps text-label-caps px-6 py-2 transition-all cursor-pointer active:opacity-70">
                Zaloguj się
</a>
</div>
</nav>
<main>
<!-- Hero Section -->
<section class="relative h-screen flex items-center pt-20 overflow-hidden">
<div class="absolute inset-0 z-0">
<img alt="Szeroki, kinowy widok na nieskazitelne, puste lodowisko pod dramatycznym oświetleniem stadionowym. Powierzchnia lodu jest idealnie gładka, odbijając górne chłodne białe światła jak lustro." class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDeMsnU9EnhAkVTMO_3oak1BGwo3IM0WcAQ-4ZfGrYVUejdDnSzQTdEIfhpsBsfBiJJQSiXYL-4q6niTsgvY3LsjOXMGAyf2Nwc4Nts3_sNkf3kCTNwEmm7BAzBMosLKZNrorE1rNo6Axe8gTts51UmFXOJ3SNCT826uJQm4tl7OkZWOXP6vfhQvDcf9yx9JQfVtfib9sFECYATRoPPElKsPAf9xpfPP0A4e4hrzaumuubiHglXI2EScnqN1XeIMey-LDR_jO0NhHcY"/>
<div class="absolute inset-0 bg-gradient-to-r from-background via-background/40 to-transparent"></div>
</div>
<div class="relative z-10 px-margin-desktop max-w-container-max mx-auto w-full">
<div class="max-w-2xl">
<span class="font-label-caps text-label-caps text-secondary mb-4 block tracking-widest">ZAŁOŻONO 2024</span>
<h1 class="font-display-md text-display-md text-primary mb-6 leading-tight">PRECYZJA <br/> NA LODZIE</h1>
<p class="font-body-lg text-body-lg text-on-surface-variant mb-10 max-w-lg">
                        Doświadcz najwyższej klasy chłodnego klimatu. Od profesjonalnych sesji hokejowych po jazdę rekreacyjną, GLACIER zapewnia światowej klasy taflę lodu.
                    </p>
<div class="flex gap-4">
<button class="bg-primary text-on-primary font-label-caps text-label-caps px-10 py-4 glow-hover transition-all">
                            Zarezerwuj teraz
                        </button>
<button class="border border-outline-variant text-primary font-label-caps text-label-caps px-10 py-4 backdrop-blur-sm hover:bg-white/10 transition-all">
                            Zobacz grafik
                        </button>
</div>
</div>
</div>
</section>
<!-- Current Conditions - Bento Grid Style -->
<section class="py-section-gap px-margin-desktop max-w-container-max mx-auto">
<div class="flex flex-col gap-12">
<div class="flex justify-between items-end">
<div>
<span class="font-label-caps text-label-caps text-secondary">DANE W CZASIE RZECZYWISTYM</span>
<h2 class="font-headline-lg text-headline-lg text-primary mt-2">Warunki na lodzie</h2>
</div>
<div class="flex items-center gap-2 px-4 py-2 glass-card rounded-full">
<span class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></span>
<span class="font-label-caps text-label-caps">STATUS: OPTYMALNY</span>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-4 gap-gutter">
<div class="glass-card p-8 col-span-1 flex flex-col justify-between aspect-square">
<span class="material-symbols-outlined text-secondary text-4xl">thermostat</span>
<div>
<div class="font-label-caps text-label-caps text-on-surface-variant mb-1">TEMP. POWIERZCHNI</div>
<div class="font-display-md text-display-sm text-primary">-4.5°C</div>
</div>
</div>
<div class="glass-card p-8 col-span-1 flex flex-col justify-between aspect-square">
<span class="material-symbols-outlined text-secondary text-4xl">opacity</span>
<div>
<div class="font-label-caps text-label-caps text-on-surface-variant mb-1">WILGOTNOŚĆ</div>
<div class="font-display-md text-display-sm text-primary">38%</div>
</div>
</div>
<div class="glass-card p-8 col-span-2 flex flex-col justify-between bg-surface-container-high relative overflow-hidden">
<div class="relative z-10">
<span class="material-symbols-outlined text-secondary text-4xl">ac_unit</span>
<div class="mt-8">
<div class="font-label-caps text-label-caps text-on-surface-variant mb-1">JAKOŚĆ LODU</div>
<div class="font-headline-md text-headline-md text-primary">Klasa Profesjonalna (A+)</div>
<p class="text-on-surface-variant mt-2 max-w-xs">Ostatnie czyszczenie: Zamboni model 526 o 09:45.</p>
</div>
</div>
<div class="absolute right-0 top-0 w-1/3 h-full opacity-10">
<span class="material-symbols-outlined text-[160px] translate-x-12 translate-y-12">ac_unit</span>
</div>
</div>
</div>
</div>
</section>
<!-- Weekly Schedule -->
<section class="py-section-gap px-margin-desktop bg-surface-dim">
<div class="max-w-container-max mx-auto">
<div class="mb-16">
<span class="font-label-caps text-label-caps text-secondary">DZIENNY HARMONOGRAM</span>
<h2 class="font-headline-lg text-headline-lg text-primary mt-2">Harmonogram</h2>
</div>
<div class="overflow-x-auto">
<div class="min-w-[1000px]">
<!-- Days Header -->
<div class="grid grid-cols-8 gap-4 mb-8">
<div class="p-4"></div>
<div class="p-4 text-center font-label-caps text-label-caps text-primary">PON</div>
<div class="p-4 text-center font-label-caps text-label-caps text-on-surface-variant">WT</div>
<div class="p-4 text-center font-label-caps text-label-caps text-on-surface-variant">ŚR</div>
<div class="p-4 text-center font-label-caps text-label-caps text-on-surface-variant">CZW</div>
<div class="p-4 text-center font-label-caps text-label-caps text-on-surface-variant">PT</div>
<div class="p-4 text-center font-label-caps text-label-caps text-on-surface-variant">SOB</div>
<div class="p-4 text-center font-label-caps text-label-caps text-on-surface-variant">ND</div>
</div>
<!-- Schedule Body -->
<div class="space-y-4">
<!-- Slot 1 -->
<div class="grid grid-cols-8 gap-4 items-center">
<div class="font-label-caps text-label-caps text-on-surface-variant text-right pr-4">08:00</div>
<div class="col-span-1 glass-card p-4 border-l-4 border-l-secondary">
<div class="font-label-caps text-[10px] text-secondary mb-1">ŁYŻWIARSTWO FIGUROWE</div>
<div class="font-headline-sm text-[16px] leading-tight">Trening Elite</div>
</div>
<div class="col-span-1 glass-card p-4 border-l-4 border-l-secondary">
<div class="font-label-caps text-[10px] text-secondary mb-1">ŁYŻWIARSTWO FIGUROWE</div>
<div class="font-headline-sm text-[16px] leading-tight">Trening Elite</div>
</div>
<div class="col-span-1 glass-card p-4 border-l-4 border-l-secondary">
<div class="font-label-caps text-[10px] text-secondary mb-1">ŁYŻWIARSTWO FIGUROWE</div>
<div class="font-headline-sm text-[16px] leading-tight">Trening Elite</div>
</div>
<div class="col-span-1 glass-card p-4 border-l-4 border-l-secondary">
<div class="font-label-caps text-[10px] text-secondary mb-1">ŁYŻWIARSTWO FIGUROWE</div>
<div class="font-headline-sm text-[16px] leading-tight">Trening Elite</div>
</div>
<div class="col-span-1 glass-card p-4 border-l-4 border-l-secondary">
<div class="font-label-caps text-[10px] text-secondary mb-1">ŁYŻWIARSTWO FIGUROWE</div>
<div class="font-headline-sm text-[16px] leading-tight">Trening Elite</div>
</div>
<div class="col-span-2 glass-card p-4 border-l-4 border-l-primary bg-primary/10">
<div class="font-label-caps text-[10px] text-primary mb-1">ŚLIZGAWKA PUBLICZNA</div>
<div class="font-headline-sm text-[16px] leading-tight">Poranny Flow</div>
</div>
</div>
<!-- Cleaning Break -->
<div class="grid grid-cols-8 gap-4 items-center py-2 opacity-50">
<div class="font-label-caps text-label-caps text-secondary text-right pr-4">12:00</div>
<div class="col-span-7 h-px bg-outline-variant relative">
<span class="absolute left-1/2 -top-3 bg-surface-dim px-4 font-label-caps text-[10px] tracking-widest text-secondary">PRZERWA TECHNICZNA - CZYSZCZENIE LODU (30 MIN)</span>
</div>
</div>
<!-- Slot 2 -->
<div class="grid grid-cols-8 gap-4 items-center">
<div class="font-label-caps text-label-caps text-on-surface-variant text-right pr-4">13:00</div>
<div class="col-span-3 glass-card p-4 border-l-4 border-l-on-surface-variant/30 opacity-40">
<div class="font-label-caps text-[10px] mb-1">KONSERWACJA</div>
<div class="font-headline-sm text-[16px] leading-tight">Przegląd systemów</div>
</div>
<div class="col-span-4 glass-card p-4 border-l-4 border-l-secondary">
<div class="font-label-caps text-[10px] text-secondary mb-1">KLINIKA HOKEJA</div>
<div class="font-headline-sm text-[16px] leading-tight">U16 Zaawansowane</div>
</div>
</div>
<!-- Cleaning Break -->
<div class="grid grid-cols-8 gap-4 items-center py-2 opacity-50">
<div class="font-label-caps text-label-caps text-secondary text-right pr-4">16:00</div>
<div class="col-span-7 h-px bg-outline-variant relative">
<span class="absolute left-1/2 -top-3 bg-surface-dim px-4 font-label-caps text-[10px] tracking-widest text-secondary">PRZERWA TECHNICZNA - CZYSZCZENIE LODU (30 MIN)</span>
</div>
</div>
<!-- Slot 3 -->
<div class="grid grid-cols-8 gap-4 items-center">
<div class="font-label-caps text-label-caps text-on-surface-variant text-right pr-4">18:00</div>
<div class="col-span-5 glass-card p-4 border-l-4 border-l-primary bg-primary/5">
<div class="font-label-caps text-[10px] text-primary mb-1">ŚLIZGAWKA PUBLICZNA</div>
<div class="font-headline-sm text-[16px] leading-tight">Wieczorna sesja rekreacyjna</div>
</div>
<div class="col-span-2 glass-card p-4 border-l-4 border-l-secondary">
<div class="font-label-caps text-[10px] text-secondary mb-1">LIGA HOKEJOWA</div>
<div class="font-headline-sm text-[16px] leading-tight">Glacier Premier Div</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Safety Rules -->
<section class="py-section-gap px-margin-desktop max-w-container-max mx-auto">
<div class="grid grid-cols-1 lg:grid-cols-2 gap-section-gap items-center">
<div class="relative group">
<img alt="Zbliżenie na naostrzoną płozę łyżwy spoczywającą na lodzie." class="w-full aspect-[4/5] object-cover rounded-lg grayscale hover:grayscale-0 transition-all duration-700" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAoU0SGeI8DpfT0-3S1h4EHs43rMbQPS59PDhO2epb8M7xbClJg4OhpS8MCoplhpBElDMDIRuZK0EPE1VfPz9tBVPX-ZbFeGgUgDRTvBTVwReF4_QCbUtqiiN2G2sTsFYc6HyNZaVJCpTfRW6UVFo1ifLxCk9IT2pq_PCOA_QyxKTkSWW-QElWuxIPLozzIhuRxyWZJuity-mt8wRmoYyVCGMGADYTMAKlZeojK_ZF8RegdXPoXDcPdv1HJMjdhBzFIvlWFazSLMrej"/>
<div class="absolute -bottom-10 -right-10 glass-card p-8 max-w-xs hidden md:block">
<div class="font-headline-sm text-headline-sm text-primary mb-4">BEZPIECZEŃSTWO PRZEDE WSZYSTKIM</div>
<p class="text-body-md text-on-surface-variant">Utrzymujemy surowe standardy, aby zapewnić bezpieczeństwo każdemu łyżwiarzowi.</p>
</div>
</div>
<div class="space-y-12">
<div>
<span class="font-label-caps text-label-caps text-secondary">PROTOKOŁY</span>
<h2 class="font-headline-lg text-headline-lg text-primary mt-2">Standardy bezpieczeństwa</h2>
</div>
<div class="space-y-8">
<div class="flex gap-6">
<span class="font-label-caps text-headline-sm text-secondary">01</span>
<div>
<h3 class="font-headline-sm text-[20px] text-primary mb-2">Wymogi dotyczące kasków</h3>
<p class="text-on-surface-variant">Wszyscy łyżwiarze poniżej 12 roku życia oraz początkujący hokeiści muszą nosić atestowane kaski ochronne przez cały czas.</p>
</div>
</div>
<div class="flex gap-6">
<span class="font-label-caps text-headline-sm text-secondary">02</span>
<div>
<h3 class="font-headline-sm text-[20px] text-primary mb-2">Zarządzanie ruchem</h3>
<p class="text-on-surface-variant">Łyżwiarze muszą przestrzegać wyznaczonego kierunku jazdy wyświetlanego na tablicach elektronicznych wokół lodowiska.</p>
</div>
</div>
<div class="flex gap-6">
<span class="font-label-caps text-headline-sm text-secondary">03</span>
<div>
<h3 class="font-headline-sm text-[20px] text-primary mb-2">Protokół Zamboni</h3>
<p class="text-on-surface-variant">Tafle lodu należy opuścić natychmiast po usłyszeniu sygnału technicznego. Powrót na lód możliwy dopiero po zapaleniu się zielonego światła.</p>
</div>
</div>
</div>
<button class="font-label-caps text-label-caps text-primary border-b border-primary pb-2 hover:opacity-70 transition-all inline-flex items-center gap-2">
                        PEŁNY REGULAMIN KORZYSTANIA
                        <span class="material-symbols-outlined text-sm">arrow_forward</span>
</button>
</div>
</div>
</section>
<!-- CTA Section -->
<section class="py-section-gap px-margin-desktop mb-24">
<div class="max-w-container-max mx-auto glass-card py-20 px-12 text-center relative overflow-hidden">
<div class="absolute inset-0 opacity-10">
<img alt="Abstrakcyjna tekstura mrożonego lodu." class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD_1DM2TJOdrW2YQgGgogFQRHEhDuaUzDnO_qRksByPueurkK_OaqcwFC2OfJeIPR1ivd0uH9FS71H6wzU5t6LJueEJMUM7LMEWjyB2j3i5Q6wTelqmdDtzGC-o11RgUqEf1_7ig5TFnuPP-2zfMVQyJp656M25qOw4rKgHOfT3B0MsejWaQ_J_pBQVTLsX2zNyrdmozgd3p0aQLgQRlTUWwL6jKaeEAgmwTS83-8dufQdRfx0AVjR86qt1kCAZxoAj9WnrWpHHVuhA"/>
</div>
<div class="relative z-10">
<h2 class="font-display-md text-headline-lg text-primary mb-8">Gotowy wejść na lód?</h2>
<p class="text-body-lg text-on-surface-variant max-w-xl mx-auto mb-12">
                        Zarezerwuj miejsce na ślizgawkę ogólnodostępną, trening figurowy lub wynajmij całą taflę na prywatne wydarzenie.
                    </p>
<div class="flex flex-col md:flex-row justify-center gap-6">
<button class="bg-primary text-on-primary font-label-caps text-label-caps px-12 py-5 glow-hover">
                            REZERWUJ SESJĘ
                        </button>
<button class="border border-outline-variant text-primary font-label-caps text-label-caps px-12 py-5 hover:bg-white/10">
                            PLANY CZŁONKOWSKIE
                        </button>
</div>
</div>
</div>
</section>
</main>
<!-- Footer -->
<footer class="bg-surface-dim border-t border-outline-variant/10">
<div class="max-w-container-max mx-auto px-margin-desktop py-12">
<div class="flex flex-col md:flex-row justify-between items-center gap-gutter">
<div class="font-headline-sm text-headline-sm text-primary">
                    GLACIER RINK
                </div>
<div class="flex flex-wrap justify-center gap-8">
<a class="font-body-md text-body-md text-on-surface-variant hover:text-primary underline transition-all" href="#">Polityka prywatności</a>
<a class="font-body-md text-body-md text-on-surface-variant hover:text-primary underline transition-all" href="#">Regulamin</a>
<a class="font-body-md text-body-md text-on-surface-variant hover:text-primary underline transition-all" href="#">Kontakt</a>
<a class="font-body-md text-body-md text-on-surface-variant hover:text-primary underline transition-all" href="#">Standardy bezpieczeństwa</a>
</div>
</div>
<div class="mt-12 text-center md:text-left font-body-md text-body-md text-on-surface-variant opacity-60">
                © 2024 GLACIER RINK MANAGEMENT. WSZELKIE PRAWA ZASTRZEŻONE.
            </div>
</div>
</footer>
</body></html>