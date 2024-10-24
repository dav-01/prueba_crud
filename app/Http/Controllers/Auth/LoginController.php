<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Redirigir al listado de usuarios después del login.
     *
     * @var string
     */
    protected $redirectTo = '/users';

    /**
     * Crear una nueva instancia del controlador.
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    /**
     * Sobrescribimos el intento de login para verificar si el usuario está activo.
     */
    protected function attemptLogin(Request $request)
    {
        $credentials = $request->only($this->username(), 'password');

        $user = \App\Models\User::where('email', $credentials[$this->username()])->first();

        if ($user && !$user->is_active) {
            // Si el usuario está inactivo, se devuelve un error.
            return false;
        }

        return Auth::attempt($credentials, $request->filled('remember'));
    }

    /**
     * Devuelve la vista con error si el usuario no está activo.
     */
    protected function sendFailedLoginResponse(Request $request)
    {
        throw \Illuminate\Validation\ValidationException::withMessages([
            $this->username() => [trans('auth.failed') . ' O el usuario está inhabilitado.'],
        ]);
    }
}
