<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\User;

class AuthController extends Controller
{

    //---- LOGIN ------//

    //vista login
    public function showLoginForm(){
        return view("auth.login");
    }

    //validacion de login
    protected function validateLogin(Request $request)
    {
        $request->validate([
            $this->username() => 'required|string',
            'password' => 'required|string',
        ]);
    }

    //si falla el login
    public function username()
    {
        return 'user_name'; // Reemplaza 'email' con el nombre del campo de inicio de sesión que estás utilizando
    }

    protected function sendFailedLoginResponse(Request $request)
    {
        return redirect()->back()
            ->withInput($request->only($this->username(), 'remember'))
            ->withErrors([
                $this->username() => trans('auth.failed', ['message' => 'No se pudo iniciar sesión. Verifica tus credenciales.']), // Agrega el mensaje personalizado aquí
            ]);
    }

    // inicio de sesion
    public function login(Request $request)
    {
        $this->validateLogin($request);

        // Busca al usuario en MongoDB por user_name
        $user = User::where('user_name', $request->input('user_name'))->first();

        // Verifica si el usuario existe y si la contraseña es correcta
        if ($user && Hash::check($request->input('password'), $user->password)) {
            // Inicia sesión en Laravel
            $rememberMe = $request->has('remember_me'); //verifica el valor de remember
            auth()->login($user, $rememberMe); //pasa el valor a rememberMe

            // Redirige a la ruta deseada después del inicio de sesión
            return redirect('/');
        }

        // Si la autenticación falla, muestra un mensaje de error
        return $this->sendFailedLoginResponse($request);
    }


    //---- REGISTRO ------//


    //vista registro
    public function showRegistrationForm(){
        return view("auth.registration");
    }

    //registro de usuarios
    public function registration(Request $request)
    {
        // Validar los campos de entrada
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);

        // Crear un nuevo usuario
        $user = new User();
        $user->name = $request->input('name');
        $user->user_name = $request->input('user_name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->user_password = bcrypt($request->input('user_password'));
        $user->save();

        // Redireccionar o devolver una respuesta
        return redirect('/')->with('success', 'Usuario creado exitosamente');
    }

    //---- CERRAR SESION ------//

    //cerrar sesion
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login'); //ruta

    }
}
