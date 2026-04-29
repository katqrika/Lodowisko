<!DOCTYPE html>

<html class="dark" lang="pl"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Glacier Rink - Logowanie</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=JetBrains+Mono:wght@400;500&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
          darkMode: "class",
          theme: {
            extend: {
              "colors": {
                      "on-secondary": "#24323e",
                      "inverse-on-surface": "#2f3032",
                      "outline-variant": "#43474d",
                      "on-primary-container": "#9eb9d7",
                      "on-tertiary-fixed-variant": "#5c4218",
                      "surface": "#121315",
                      "on-surface": "#e3e2e4",
                      "surface-container-highest": "#343537",
                      "on-secondary-fixed": "#0f1d28",
                      "error": "#ffb4ab",
                      "error-container": "#93000a",
                      "background": "#121315",
                      "surface-container": "#1e2021",
                      "outline": "#8d9197",
                      "primary-fixed": "#cee5ff",
                      "primary-fixed-dim": "#aec9e7",
                      "on-secondary-container": "#a8b7c6",
                      "on-error": "#690005",
                      "secondary": "#bac8d7",
                      "on-background": "#e3e2e4",
                      "inverse-surface": "#e3e2e4",
                      "surface-dim": "#121315",
                      "surface-container-low": "#1a1c1d",
                      "surface-container-high": "#292a2c",
                      "secondary-fixed-dim": "#bac8d7",
                      "on-primary-fixed": "#001d33",
                      "on-primary": "#16324a",
                      "surface-tint": "#aec9e7",
                      "primary": "#aec9e7",
                      "on-tertiary-container": "#d5b17d",
                      "on-secondary-fixed-variant": "#3b4855",
                      "surface-container-lowest": "#0d0e10",
                      "surface-bright": "#38393b",
                      "tertiary-fixed-dim": "#e6c08b",
                      "tertiary-container": "#5d4319",
                      "secondary-container": "#3b4855",
                      "on-primary-fixed-variant": "#2e4962",
                      "on-error-container": "#ffdad6",
                      "on-tertiary-fixed": "#281800",
                      "tertiary-fixed": "#ffddb0",
                      "secondary-fixed": "#d6e4f4",
                      "inverse-primary": "#46617b",
                      "tertiary": "#e6c08b",
                      "on-tertiary": "#432c04",
                      "on-surface-variant": "#c3c7cd",
                      "surface-variant": "#343537",
                      "primary-container": "#2f4a63"
              },
              "borderRadius": {
                      "DEFAULT": "0.125rem",
                      "lg": "0.25rem",
                      "xl": "0.5rem",
                      "full": "0.75rem"
              },
              "spacing": {
                      "xl": "48px",
                      "lg": "24px",
                      "md": "16px",
                      "xs": "4px",
                      "sm": "8px",
                      "gutter": "20px",
                      "container-max": "1280px",
                      "base": "4px"
              },
              "fontFamily": {
                      "h1-display": ["Inter"],
                      "h2-subheading": ["Inter"],
                      "h1-mobile": ["Inter"],
                      "data-label": ["JetBrains Mono"],
                      "body-small": ["Inter"],
                      "body-main": ["Inter"],
                      "data-value": ["JetBrains Mono"]
              },
              "fontSize": {
                      "h1-display": ["48px", {"lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                      "h2-subheading": ["24px", {"lineHeight": "1.3", "fontWeight": "600"}],
                      "h1-mobile": ["32px", {"lineHeight": "1.2", "fontWeight": "700"}],
                      "data-label": ["12px", {"lineHeight": "1", "letterSpacing": "0.05em", "fontWeight": "500"}],
                      "body-small": ["14px", {"lineHeight": "1.5", "fontWeight": "400"}],
                      "body-main": ["16px", {"lineHeight": "1.6", "fontWeight": "400"}],
                      "data-value": ["14px", {"lineHeight": "1", "fontWeight": "400"}]
              }
            },
          },
        }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .technical-overlay {
            background-image: 
                radial-gradient(circle at 2px 2px, rgba(47, 74, 99, 0.15) 1px, transparent 0);
            background-size: 24px 24px;
        }
        .ice-gradient {
            background: linear-gradient(180deg, rgba(15, 17, 21, 0) 0%, rgba(15, 17, 21, 0.8) 100%);
        }
    </style>
</head>
<body class="bg-surface text-on-surface font-body-main selection:bg-primary/30">
<main class="min-h-screen flex flex-col md:flex-row">
<!-- Left Side: Atmospheric Brand Section -->
<section class="relative hidden md:flex md:w-1/2 lg:w-3/5 h-screen overflow-hidden border-r border-outline-variant/20">
<div class="absolute inset-0 z-0">
<img class="w-full h-full object-cover" data-alt="An atmospheric, low-angle photograph of a pristine professional ice rink at night. The ice surface is perfectly smooth, reflecting cool blue and crisp white overhead arena lights. The setting is dark and moody, with deep arctic shadows and a technical, engineering-focused aesthetic. Thin cyan neon light accents trace the rink's perimeter, emphasizing a precision-engineered environment. The overall tone is cold, quiet, and exceptionally clean, consistent with a premium sports management system." src="https://lh3.googleusercontent.com/aida-public/AB6AXuC7EJZX6MdKYfbCpj0NDaJL_Z-zhzjTQE_y1YVB2o4qEOfzWYS-NRaJe4TsKhhAdWGeB-uT0g-zsGU9K1M4c1wqSs4ILlnq1-1mZ1JD1gVA5HSmkDXN3yxXrGf7cCEaAC6mbAp3FwPtBFg714tTy9XbUVZiu590ne3bObFLO2FJWUQlD8NIRuLE_kx6ppda48U42oWISJPbfLfUy9LFQdQ-046TRirraP7GbnWYBbBGasuCc2kShN3wVWgVy46Oc4rJVwDCUOkHtddg"/>
<div class="absolute inset-0 ice-gradient"></div>
<div class="absolute inset-0 technical-overlay"></div>
</div>
<!-- Brand Identity Overlays -->
<div class="relative z-10 flex flex-col justify-between w-full p-xl">
<div>
<h1 class="font-h1-display text-h1-display text-primary tracking-tighter">GLACIER RINK</h1>
<div class="mt-sm flex items-center gap-2">
<span class="w-2 h-2 rounded-full bg-tertiary-fixed animate-pulse"></span>
<span class="font-data-label text-data-label text-on-surface-variant uppercase tracking-widest">Wszystkie systemy aktywne</span>
</div>
</div>
<div class="max-w-md">
<div class="flex flex-col gap-xs mb-lg">
<div class="h-[1px] w-12 bg-primary"></div>
<p class="font-body-small text-on-surface-variant uppercase tracking-widest">Zaawansowane Zarządzanie Lodowiskiem</p>
</div>
<div class="grid grid-cols-2 gap-md font-data-value text-data-value text-on-surface-variant/60">
<div class="border-l border-outline-variant/30 pl-md py-sm">
<span class="block font-data-label text-primary/70 mb-1">TEMP. TAFII</span>
                            -4.2°C
                        </div>
<div class="border-l border-outline-variant/30 pl-md py-sm">
<span class="block font-data-label text-primary/70 mb-1">WILGOTNOŚĆ</span>
                            42%
                        </div>
</div>
</div>
</div>
</section>
<!-- Right Side: Login Form -->
<section class="flex-1 flex flex-col justify-center items-center p-md md:p-xl bg-surface">
<div class="w-full max-w-[420px] flex flex-col">
<!-- Tab Switcher -->
<div class="flex border-b border-outline-variant/20 mb-xl">
<a href="{{ route('login') }}" class="flex-1 py-md font-h2-subheading text-h2-subheading text-primary border-b-2 border-primary transition-all">
                        Zaloguj się
                    </a>
<a href="{{ route('register') }}" class="flex-1 py-md font-h2-subheading text-h2-subheading text-on-surface-variant hover:text-on-surface transition-all">
    Utwórz konto
</a>
</div>
<!-- Social Logins -->
<div class="flex flex-col gap-sm mb-xl">
<button class="w-full py-3 px-md bg-on-surface text-surface font-semibold flex items-center justify-center gap-3 rounded-lg hover:opacity-90 active:scale-[0.98] transition-all">
<svg class="w-5 h-5" viewbox="0 0 24 24">
<path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"></path>
<path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"></path>
<path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"></path>
<path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"></path>
</svg>
                        Kontynuuj z Google
                    </button>
<button class="w-full py-3 px-md bg-on-surface text-surface font-semibold flex items-center justify-center gap-3 rounded-lg hover:opacity-90 active:scale-[0.98] transition-all">
<svg class="w-5 h-5" fill="currentColor" viewbox="0 0 24 24">
<path d="M17.05 20.28c-.96 0-2.04-.6-3.23-.6-1.21 0-2.35.61-3.28.61-1.35 0-3.35-1.57-4.32-3.13-1.98-3.15-1.51-7.85.42-10.63.95-1.38 2.37-2.25 3.91-2.28 1.17-.02 2.28.79 3 .79s2.03-.82 3.42-.68c.58.03 2.22.24 3.28 1.78-.09.05-1.96 1.14-1.94 3.4.03 2.76 2.25 3.73 2.28 3.75-.02.05-.35 1.23-1.2 2.47-.73 1.07-1.5 2.14-2.69 2.14zM14.28 4.24c-.62.75-1.67 1.34-2.65 1.26-.14-1.12.38-2.27 1.03-3.04.66-.77 1.83-1.33 2.74-1.26.15 1.16-.5 2.29-1.12 3.04z"></path>
</svg>
                        Kontynuuj z Apple
                    </button>
</div>
<div class="relative mb-xl">
<div class="absolute inset-0 flex items-center">
<div class="w-full border-t border-outline-variant/20"></div>
</div>
<div class="relative flex justify-center">
<span class="px-md bg-surface text-on-surface-variant font-data-label text-data-label uppercase">lub e-mail</span>
</div>
</div>
<!-- Form Fields -->
<form class="flex flex-col gap-lg">
<div class="flex flex-col gap-xs">
<label class="font-data-label text-data-label text-on-surface-variant uppercase ml-1">Adres E-mail</label>
<input class="w-full bg-surface-container-lowest border border-primary-container text-on-surface p-md rounded-lg focus:ring-1 focus:ring-primary focus:border-primary outline-none transition-all" placeholder="email@example.pl" type="email"/>
</div>
<div class="flex flex-col gap-xs">
<div class="flex justify-between items-center ml-1">
<label class="font-data-label text-data-label text-on-surface-variant uppercase">Hasło</label>
<a class="text-xs text-primary hover:underline font-medium" href="#">Zapomniałeś hasła?</a>
</div>
<input class="w-full bg-surface-container-lowest border border-primary-container text-on-surface p-md rounded-lg focus:ring-1 focus:ring-primary focus:border-primary outline-none transition-all" placeholder="••••••••" type="password"/>
</div>
<div class="flex items-center gap-sm">
<input class="w-4 h-4 rounded border-outline-variant bg-surface-container-lowest text-primary focus:ring-primary" id="remember" type="checkbox"/>
<label class="font-body-small text-on-surface-variant cursor-pointer" for="remember">Zapamiętaj mnie</label>
</div>
<button class="w-full py-4 bg-primary-container text-on-primary-container font-semibold rounded-lg flex items-center justify-center gap-2 hover:bg-primary-container/80 active:scale-[0.99] transition-all mt-md" type="submit">
                        Zaloguj się
                        <span class="material-symbols-outlined" style="font-variation-settings: 'wght' 600">arrow_forward</span>
</button>
</form>
<div class="mt-xl text-center">
<a class="font-body-small text-on-surface-variant hover:text-primary flex items-center justify-center gap-xs transition-colors" href="{{ route('welcome') }}">
<span class="material-symbols-outlined text-[18px]">keyboard_backspace</span>
                        Wróć do strony głównej
                    </a>
</div>
</div>
</section>
</main>
<!-- Technical Footer Bar (Subtle) -->
<footer class="fixed bottom-0 w-full md:w-1/2 lg:w-2/5 right-0 p-md pointer-events-none">
<div class="flex justify-between items-center font-data-label text-[10px] text-on-surface-variant/40 uppercase tracking-widest px-md">
<span>© 2024 GLACIER RINK MANAGEMENT</span>
<div class="flex gap-md">
<span>V 4.12.0</span>
<span>SECURED AES-256</span>
</div>
</div>
</footer>
</body></html>