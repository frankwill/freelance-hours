<?php

namespace App\Http\Controllers;

use App\Models\User;
// use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{
    public function __invoke(Request $request)
    {
        // $user = User::query()->create([
        //     'name' => 'Frank',
        //     'email' => 'frank@teste.com',
        //     'password' => '123456'
        // ]);


        $user = User::find(1);
        // dd($user);

        Auth::login($user);
        Auth::logout();



        return view('teste.jeremiguas');
    }
}
