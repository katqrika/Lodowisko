<!DOCTYPE html>

<html class="dark" lang="pl"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Glacier Rink - Logowanie</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
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
<img class="w-full h-full object-cover" alt="Lodowisko nocą" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC7EJZX6MdKYfbCpj0NDaJL_Z-zhzjTQE_y1YVB2o4qEOfzWYS-NRaJe4TsKhhAdWGeB-uT0g-zsGU9K1M4c1wqSs4ILlnq1-1mZ1JD1gVA5HSmkDXN3yxXrGf7cCEaAC6mbAp3FwPtBFg714tTy9XbUVZiu590ne3bObFLO2FJWUQlD8NIRuLE_kx6ppda48U42oWISJPbfLfUy9LFQdQ-046TRirraP7GbnWYBbBGasuCc2kShN3wVWgVy46Oc4rJVwDCUOkHtddg"/>
<div class="absolute inset-0 ice-gradient"></div>
<div class="absolute inset-0 technical-overlay"></div>
</div>
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

{{-- Komunikat o błędzie --}}
@if ($errors->any())
<div class="mb-lg p-md bg-error-container rounded-lg border border-error/30">
    <ul class="list-none space-y-xs">
        @foreach ($errors->all() as $error)
            <li class="font-body-small text-on-error-container flex items-center gap-xs">
                <span class="material-symbols-outlined text-[16px]">error</span>
                {{ $error }}
            </li>
        @endforeach
    </ul>
</div>
@endif

{{-- Komunikat sukcesu (np. po rejestracji) --}}
@if (session('success'))
<div class="mb-lg p-md bg-primary-container rounded-lg border border-primary/30">
    <p class="font-body-small text-on-primary-container flex items-center gap-xs">
        <span class="material-symbols-outlined text-[16px]">check_circle</span>
        {{ session('success') }}
    </p>
</div>
@endif

<!-- Form Fields -->
<form class="flex flex-col gap-lg" method="POST" action="{{ route('login.post') }}">
@csrf
<div class="flex flex-col gap-xs">
<label class="font-data-label text-data-label text-on-surface-variant uppercase ml-1" for="email">Adres E-mail</label>
<input
    id="email"
    name="email"
    class="w-full bg-surface-container-lowest border @error('email') border-error @else border-primary-container @enderror text-on-surface p-md rounded-lg focus:ring-1 focus:ring-primary focus:border-primary outline-none transition-all"
    placeholder="email@example.pl"
    type="email"
    value="{{ old('email') }}"
    autocomplete="email"
    required
/>
</div>
<div class="flex flex-col gap-xs">
<div class="flex justify-between items-center ml-1">
<label class="font-data-label text-data-label text-on-surface-variant uppercase" for="haslo">Hasło</label>
<a class="text-xs text-primary hover:underline font-medium" href="#">Zapomniałeś hasła?</a>
</div>
<input
    id="haslo"
    name="haslo"
    class="w-full bg-surface-container-lowest border @error('haslo') border-error @else border-primary-container @enderror text-on-surface p-md rounded-lg focus:ring-1 focus:ring-primary focus:border-primary outline-none transition-all"
    placeholder="••••••••"
    type="password"
    autocomplete="current-password"
    required
/>
</div>
<div class="flex items-center gap-sm">
<input class="w-4 h-4 rounded border-outline-variant bg-surface-container-lowest text-primary focus:ring-primary" id="remember" name="remember" type="checkbox" value="1"/>
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
<!-- Technical Footer Bar -->
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
