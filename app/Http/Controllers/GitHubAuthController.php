<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;

class GitHubAuthController extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     */

    public function redirectToGitHub()
    {
        return Socialite::driver('github')->redirect();
    }

    /**
     * Maneja la respuesta de GitHub después de la autenticación.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleCallback()
    {
        try {
            $githubUser = Socialite::driver('github')->user();
        } catch (\Exception $e) {
            return redirect('/login')->withErrors('Error al iniciar sesión con GitHub: ' . $e->getMessage());
        }

        // Verifica si el usuario ya existe en la base de datos por su correo electrónico
        $user = User::where('email', $githubUser->getEmail())->first();

        if (!$user) {
            // Si el usuario no existe, crea uno nuevo y asigna un valor al campo 'username'
            $username = $githubUser->getNickname() ?: explode('@', $githubUser->getEmail())[0];
            $user = User::create([
                'email' => $githubUser->getEmail(),
                'name' => $githubUser->getName(),
                'provider_id' => $githubUser->getId(),
                'username' => $username,
                // Asigna un valor al campo 'username'
            ]);
        }

        // Autentica al usuario en Laravel
        Auth::login($user, true);

        return redirect('/home');
    }
}