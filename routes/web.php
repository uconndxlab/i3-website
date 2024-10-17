<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UserController;

use App\Http\Middleware\SamlRequired;




Route::get('/saml_login', [AuthController::class, 'saml_login'])->name('saml_login');
Route::post('/saml', [AuthController::class, 'saml_acs'])->name('saml_acs')->withoutMiddleware([VerifyCsrfToken::class]);
Route::get('/logout', [AuthController::class, 'saml_logout'])->name('logout');
Route::get('/saml_logout', [AuthController::class, 'saml_logout_redirect'])->name('saml_logout');


Route::middleware([SamlRequired::class])->group(function() {
    Route::get('/', [PublicController::class, 'index'])->name('home');
    Route::post('/posts/{id}/admin-update', [PostsController::class, 'admin_update'])->name('posts.admin-update');

    Route::get('/posts/create', [PostsController::class, 'create'])->name('posts.create');
    Route::post('/posts/store', [PostsController::class, 'store'])->name('posts.store');
    Route::post('/posts/{id}/vote', [PostsController::class, 'vote'])->name('posts.vote');
    Route::get('/posts/{id}/vote', function($id) {
        return redirect()->route('posts.show', ['id' => $id]);
    });
    Route::post('/posts/{id}/comment', [PostsController::class, 'comment'])->name('posts.comment');
    Route::get('/posts/{id}/comment', function($id) {
        return redirect()->route('posts.show', ['id' => $id]);
    });
    Route::post('/posts/{id}/delete', [PostsController::class, 'delete'])->name('posts.delete');

    Route::get('/login', function() { return redirect()->route('profile'); })->name('login');
    Route::get('/profile', [UserController::class, 'profile'])->name('profile');
});

Route::get('/posts', [PostsController::class, 'index'])->name('posts');
Route::get('/posts/{id}', [PostsController::class, 'show'])->name('posts.show');