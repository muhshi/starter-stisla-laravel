<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home', [PageController::class, 'home'])->middleware(['auth', 'verified'])->name('home');
Route::redirect('/', '/home', 301);
Route::get('/new', [PageController::class, 'new'])->name('blog.new');
Route::post('/store', [PageController::class, 'store'])->name('blog.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::get('/auth/github/redirect', function () {
    return Socialite::driver('github')->redirect();
});

Route::get('/auth/github/callback', function () {
    try {
        $githubUser = Socialite::driver('github')->user();

        $user =  User::where([
            'github_id' => $githubUser->id,
        ])->first();
        if (!$user) {
            if (User::where('email', $githubUser->getEmail())->exists()) {
                return redirect('/login')->withErrors(['email' => 'Email ini login menggunakan metode lain']);
            }
            $password = "A1b@c#";
            $user = User::create([
                'name' => $githubUser->getName(),
                'email' => $githubUser->getEmail(),
                'username' => $githubUser->getNickname(),
                'github_id' => $githubUser->getId(),
                'github_token' => $githubUser->token,
                'github_refresh_token' => $githubUser->refreshToken,
                'password' => $password
            ]);

            $user->sendEmailVerificationNotification();
        }

        Auth::login($user);

        return redirect('/');
    } catch (\Exception $e) {
        return redirect('/login');
    }
});

// $githubUser = Socialite::driver('github')->user();

//     $user = User::updateOrCreate([
//         'github_id' => $githubUser->id,
//     ], [
//         'name' => $githubUser->name,
//         'email' => $githubUser->email,
//         'username' => $githubUser->nickname,
//         'github_token' => $githubUser->token,
//         'github_refresh_token' => $githubUser->refreshToken,
//     ]);

//     Auth::login($user);

//     return redirect('/');
