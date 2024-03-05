<?php

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Home;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Halaman_User;
use Illuminate\Support\Facades\Password;
use App\Http\Controllers\AdminController;
use Illuminate\Auth\Events\PasswordReset;
use App\Http\Controllers\LoginRegister;
use Illuminate\Foundation\Auth\EmailVerificationRequest;


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

// GET HALAMAN HOME
Route::middleware(["guest"])->group(function () {
    Route::get("/", [Home::class, 'index']);

    Route::get('/detailsproductbarang/{barang:name_category_slug}', [Home::class, 'DetailsProductBarang']);

    Route::get('/login', [LoginRegister::class, 'index'])->name('login');

    Route::get('/Registrasi', [LoginRegister::class, 'Registrasi']);

    Route::get('/forgot/verify', [LoginRegister::class, 'ForgotVerify']);

    route::get('/detailsproductbaranghome/{detailbarang:slug_name_barang}', [Home::class, 'DetailsProductBarangHome']);
});


Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/Products');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::get('/forgot-password', function () {
    return view('auth.forgot-password', [
        'judul' => 'Forgot Password'
    ]);
})->middleware('guest')->name('password.request');

Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);

    $status = Password::sendResetLink(
        $request->only('email')
    );

    return $status === Password::RESET_LINK_SENT
        ? redirect('/forgot/verify') : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');

Route::get('/reset-password/{token}', function (string $token) {
    return view(
        'auth.reset-password',
        [
            'token' => $token,
            'judul' => 'Reset Password'
        ]
    );
})->middleware('guest')->name('password.reset');

Route::post('/reset-password', function (Request $request) {
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:8|confirmed',
    ]);

    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function (User $user, string $password) {
            $user->forceFill([
                'password' => Hash::make($password)
            ])->setRememberToken(Str::random(60));

            $user->save();

            event(new PasswordReset($user));
        }
    );

    return $status === Password::PASSWORD_RESET
        ? redirect()->route('login')->with('status', __($status))
        : back()->withErrors(['email' => [__($status)]]);
})->middleware('guest')->name('password.update');

// POST HALAMAN HOME

Route::post('/postloginuser', [LoginRegister::class, 'PostLoginUser']);

Route::post('/postregisteruser', [LoginRegister::class, 'PostRegisterUser']);


// GET HALAMAN USER

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/Products', [Halaman_User::class, 'index']);

    Route::get('/detailsproducts/{slug:name_category_slug}', [Halaman_User::class, 'DetailsSemuaProducts']);

    Route::get('/detailsoneproducts/{slug:slug_name_barang}', [Halaman_User::class, 'DetailsOneProducts']);

    // Route::get('/othersproducts/{slug:name_category_slug}', [Halaman_User::class, 'OthersProduct']);

    Route::get('/otherscategoryproducts/{slug:name_category_slug}', [Halaman_User::class, 'OthersCategoryProducts']);

    Route::get('/profileuser', [Halaman_User::class, 'ProfileUser']);

    Route::get('/Keranjang', [Halaman_User::class, 'KeranjangBelanja']);

    Route::get('/hapuskeranjang/{id}', [Halaman_User::class, 'HapusKeranjang']);

    Route::get('/pesanansaya', [Halaman_User::class, 'PesananSaya']);

    Route::get('/detailorderalamatbarang/{detail:no_order}', [Halaman_User::class, 'DetailOrderAlamatBarang']);

    Route::get('/detailorderpesananbarang/{barang:no_order}', [Halaman_User::class, 'DetailOrderPesananBarang']);

    Route::get('/tambahongkir/{slugorder:no_order}', [Halaman_User::class, 'TambahOngkirPesanan']);

    Route::get('/lihatdetailongkir/{detailongkir:no_order}', [Halaman_User::class, 'LihatDetailOngkir']);

    Route::get('/pembayaran/{bayar:no_order}', [Halaman_User::class, 'Pembayaran']);

    Route::get('/terimabarang/{terimabrg:no_order}', [Halaman_User::class, 'TerimaBarang']);

    Route::get('/nilaipesanan/{nilai:no_order}', [Halaman_User::class, 'NilaiPesanan']);

    Route::get('/logout', [LoginRegister::class, 'logout']);
});

// POST HALAMAN USER

Route::post('/postprofileuser', [Halaman_User::class, 'PostProfileUser']);

Route::post('/postfotoprofileuser', [Halaman_User::class, 'PostFotoProfileUser']);

Route::post('/postcart', [Halaman_User::class, 'PostCart']);

Route::post('/postcartoneproducts', [Halaman_User::class, 'PostCartOneProducts']);

Route::post('/postcheckout', [Halaman_User::class, 'PostCheckout']);

Route::delete('/hapuspesanansaya/{hapus:no_order}', [Halaman_User::class, 'HapusPesananSaya']);

Route::post('/posteditdetailorderalamatuser/{alamat:no_order}', [Halaman_User::class, 'PostEditDetailOrderAlamatUser']);

Route::post('/posttambahongkir/{slugorder:no_order}', [Halaman_User::class, 'PostTambahOngkir']);

Route::post('/postpilihantambahongkir/{sluggable:no_order}', [Halaman_User::class, 'PostPilihanTambahOngkir']);

Route::post('/postterimabarang/{foto:no_order}', [Halaman_User::class, 'PostTerimaBarang']);

Route::post('/postnilaipesanan/{penilaian:no_order}', [Halaman_User::class, 'PostPenilaianBarang']);







// GET HALAMAN ADMIN

Route::middleware('admin', 'verified')->group(function () {
});



// POST HALAMAN ADMIN
