<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Web\Auth\LoginController;




Route::get('/', function () {
    if (Auth::check()) {
        // Redirect based on user role
        $user = Auth::user();

        if ($user->can('admin')) {
            return redirect()->route('admin');
        } elseif ($user->can('vendor')) {
            return redirect('/vendor');
        } elseif ($user->can('user')) {
            return redirect('/user');
        }

        // Default fallback if no role is matched
        return redirect('/dashboard');
    }

    return view('login');
})->name('login-html');


Route::get('/login2', function () {
    return view('login2');
});

Route::post('/login', [LoginController::class, 'login'])->name('login');
// public urls ends






// Only Auth User starts
Route::middleware(['auth'])->group(function () {
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});
// Only Auth User ends






// Admin Routes Start from here
Route::middleware(['auth', 'can:admin'])->group(function () {
    Route::get('/system-user', function () {
        return view('admin.system-user');
    })->name('system-user');

    Route::get('/system-user2', function () {
        return view('admin.system-user1');
    })->name('system-user2');

    Route::get('/empty', function () {
        return view('admin.null');
    })->name('empty');

    Route::get('/admin', function () {
        return view('admin.index');
    })->name('admin');

    Route::get('/admin-profile', function () {
        return view('admin.profile.admin-profile');
    })->name('admin-profile');

    Route::get('/admin-edit-profile', function () {
        return view('admin.profile.edit-profile');
    })->name('admin-edit-profile');
});
// Admin Routes Ends from here 




// Vendor Routes Start from here 
Route::middleware(['auth', 'can:vendor'])->group(function () {
    Route::get('/vendor', function () {
        return view('vendor.index');
    });

    Route::get('/vendor-profile', function () {
        return view('vendor.profile.vendor-profile');
    })->name('vendor-profile');

    Route::get('/vendor-edit-profile', function () {
        return view('vendor.profile.edit-profile');
    })->name('vendor-edit-profile');
});
// Vendor Routes Ends from here 




// User Routes Start from here
Route::middleware(['auth', 'can:user'])->group(function () {
    Route::get('/user', function () {
        return view('user.index');
    });

    Route::get('/user-profile', function () {
        return view('user.profile.user-profile');
    })->name('user-profile');
});
// User Routes Ends from here 
