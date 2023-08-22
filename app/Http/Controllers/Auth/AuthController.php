<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Str;

class Authcontroller extends Controller
{
    public function githubredirect(Request $request){
        return Socialite::driver('github')->redirect();
    }

    public function githubcallback(Request $request){
        $userdata = Socialite::driver('github')->user();
        // $user = Socialite::driver('github')->user();
        // dd($user);

        $user = User::where('email', $userdata->email)->where('authtype','github')->first();

        if ($user) {
            # login...
            Auth::login($user);
            return redirect('/');
        }
        else{
            # register..
            // Generate a random password
            $randomPassword = Str::random(16);

            // Hash the random password using bcrypt
            $hashedPassword = Hash::make($randomPassword);

            $user = new User();
            $user->name=$userdata->name;
            $user->email=$userdata->email;
            $user->password=$hashedPassword;
            $user->authtype='github';
            $user->save();

            Auth::login($user);
            return redirect('/');
        }

        
    }

    public function googleredirect(Request $request){
        return Socialite::driver('google')->redirect();
    }

    public function googlecallback(Request $request){
        $userdata = Socialite::driver('google')->user();
        // $user = Socialite::driver('google')->user();
        // dd($user);

        $user = User::where('email', $userdata->email)->where('authtype','google')->first();

        if ($user) {
            # login...
            Auth::login($user);
            return redirect('/');
        }
        else{
            # register..
            // Generate a random password
            $randomPassword = Str::random(16);

            // Hash the random password using bcrypt
            $hashedPassword = Hash::make($randomPassword);

            $user = new User();
            $user->name=$userdata->name;
            $user->email=$userdata->email;
            $user->password=$hashedPassword;
            $user->authtype='google';
            $user->save();

            Auth::login($user);
            return redirect('/');
        }

        
    }
}
