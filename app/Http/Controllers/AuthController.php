<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
{
    // ── Formularz logowania ──────────────────────────────────────────────────

    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'haslo' => ['required', 'string'],
        ]);

        // Auth używa getAuthPassword() → haslo_hash
        if (Auth::attempt([
            'email' => $credentials['email'],
            'password' => $credentials['haslo'],
        ], $request->boolean('remember'))) {
            $request->session()->regenerate();

            return redirect()->intended(route('welcome'))
                ->with('success', 'Zalogowano pomyślnie!');
        }

        return back()
            ->withInput($request->only('email'))
            ->withErrors(['email' => 'Nieprawidłowy e-mail lub hasło.']);
    }

    // ── Formularz rejestracji ────────────────────────────────────────────────

    public function showRegister()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            'imie'             => ['required', 'string', 'max:100'],
            'nazwisko'         => ['required', 'string', 'max:100'],
            'email'            => ['required', 'email', 'unique:uzytkownik,email'],
            'numer_telefonu'   => ['required', 'string', 'max:20'],
            'haslo'            => ['required', 'confirmed', Password::min(8)],
            'regulamin'        => ['accepted'],
        ], [
            'imie.required'           => 'Imię jest wymagane.',
            'nazwisko.required'       => 'Nazwisko jest wymagane.',
            'email.required'          => 'Adres e-mail jest wymagany.',
            'email.unique'            => 'Ten adres e-mail jest już zajęty.',
            'numer_telefonu.required' => 'Numer telefonu jest wymagany.',
            'haslo.required'          => 'Hasło jest wymagane.',
            'haslo.confirmed'         => 'Hasła nie są identyczne.',
            'haslo.min'               => 'Hasło musi mieć co najmniej 8 znaków.',
            'regulamin.accepted'      => 'Musisz zaakceptować regulamin.',
        ]);

        $user = User::create([
            'imie'           => $data['imie'],
            'nazwisko'       => $data['nazwisko'],
            'email'          => $data['email'],
            'numer_telefonu' => $data['numer_telefonu'],
            'haslo_hash'     => Hash::make($data['haslo']),
            'utworzono'      => now(),
        ]);

        Auth::login($user);
        $request->session()->regenerate();

        return redirect()->route('welcome')
            ->with('success', 'Konto zostało utworzone. Witaj, ' . $user->imie . '!');
    }

    // ── Wylogowanie ──────────────────────────────────────────────────────────

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
