<?php


use App\Http\Controllers\ActivityController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\HomeSectionController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TeamMemberController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/login', function () {
    return view('backend.auth.login');
})->name('login');

// Login POST
Route::post('/login', function (Request $request) {
    $request->validate([
        'username' => 'required|string',
        'password' => 'required|string',
    ]);

    if (Auth::attempt([
        'username' => $request->username,
        'password' => $request->password,
    ])) {
        $request->session()->regenerate();
        return redirect()->route('admin.dashboard')->with('success', 'wellcome to Dashboard!');
    }

    return back()->with('error', 'ឈ្មោះឬពាក្យសម្ងាត់មិនត្រឹមត្រូវ។');
})->name('login.post');

// Logout 
Route::post('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/login')->with('success', 'ចាកចេញដោយជោគជ័យ។');
})->name('logout');

// ====================== ADMIN ROUTES ======================
Route::prefix('admin')
    ->name('admin.')
    ->middleware(['auth', 'admin'])
    ->group(function () {

        Route::redirect('/', '/admin/dashboard');
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

        // Resource Routes
        Route::resource('products', ProductController::class);
        Route::resource('certificates', CertificateController::class);
        Route::resource('blogs', BlogController::class);
        Route::resource('team-members', TeamMemberController::class);
        Route::resource('activities', ActivityController::class);
        Route::resource('faqs', FaqController::class);
        Route::resource('contacts', ContactController::class)->only(['index', 'destroy']);
        Route::resource('users', UserController::class);
        Route::resource('home-sections', HomeSectionController::class);
        
            
    });
// frontend\\
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', function () {
    return view('Frontend.pages.AboutUsPage');
})->name('about-us');
Route::get('/our-trading-products', function () {
    return view('Frontend.pages.ProductPage');
})->name('products');
Route::get('/export', function () {
    return view('Frontend.pages.Export');
})->name('export');
Route::get('/blog', function () {
    return view('Frontend.pages.Blogpaage');
})->name('blog');
Route::get('/activities', function () {
    return view('Frontend.pages.AtivitiesPage');
})->name('activities');
Route::get('/contact-us', function () {
    return view('Frontend.pages.ContactUsPage');
})->name('contact-us');
