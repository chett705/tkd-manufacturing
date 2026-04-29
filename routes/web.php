<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TeamMemberController;
use Illuminate\Support\Facades\Route;


//Login admin route
Route::get('/login', function () {
    return view('backend.auth.login');
})->name('login');

Route::post('/login', function (\Illuminate\Http\Request $request) {
    $request->validate([
        'username' => 'required|string',
        'password' => 'required|string',
    ]);

    if ($request->username === 'admin' && $request->password === '123456') {
        $request->session()->put('is_admin', true);
        $request->session()->put('admin_name', 'TK&D Administrator');

        return redirect()->route('admin.dashboard');
    }

    return back()->with('error', 'ឈ្មោះឬពាក្យសម្ងាត់មិនត្រឹមត្រូវ។');
})->name('login.post');

Route::get('/logout', function (\Illuminate\Http\Request $request) {
    $request->session()->forget(['is_admin', 'admin_name']);
    return redirect('/login')->with('success', 'ចាកចេញដោយជោគជ័យ។');
})->name('logout');
//Backend route

Route::get('/login', function () {
    return view('backend.auth.login');
});
Route::prefix('admin')
    ->name('admin.')
    ->middleware('admin')
    ->group(function () {

        Route::get('/', function () {
            return view('backend.dashboard.index');
        })->name('dashboard');

        // Resource Routes
        Route::resource('products', ProductController::class);
        Route::resource('certificates', CertificateController::class);
        Route::resource('blogs', BlogController::class);
        Route::resource('team-members', TeamMemberController::class);
        Route::resource('activities', ActivityController::class);
        Route::resource('faqs', FaqController::class);
        Route::resource('contacts', ContactController::class);
    });


// frontend

//Route for frontend pages
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{slug}', [ProductController::class, 'show'])->name('products.show');

Route::get('/export', [ExportController::class, 'index'])->name('export');

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

Route::get('/activities', [ActivityController::class, 'index'])->name('activities');

Route::get('/faq', [FaqController::class, 'index'])->name('faq');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
