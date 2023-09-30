<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;

class GoogleAuthController extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     */

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    /**
     * @return \Illuminate\Http\Response
     */


    public function handleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();
        } catch (\Exception $e) {
            return redirect('/login')->withErrors('Error al iniciar sesión con Google: ' . $e->getMessage());
        }

        // Verifica si el usuario ya existe en la base de datos por su correo electrónico
        $user = User::where('email', $googleUser->getEmail())->first();

        if (!$user) {
            // Si el usuario no existe, crea uno nuevo y asigna un valor al campo 'username'
            $username = $googleUser->getNickname() ?: explode('@', $googleUser->getEmail())[0];
            $user = User::create([
                'email' => $googleUser->getEmail(),
                'name' => $googleUser->getName(),
                'provider_id' => $googleUser->getId(),
                'username' => $username,
            ]);
        }

        // Autentica al usuario en Laravel
        Auth::login($user, true);

        return redirect('/home');
    }
}
