<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ContactFormController;
use App\Models\ContactForm;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('KlavierProject/p-log',[ TestController::class, 'index' ]);

// Route::resource('contacts', ContactFormController::class);
Route::get('contacts', [ ContactFormController::class, 'index'])->name('contacts.index');

// グループ化してまとめるとシンプルに書ける
Route::prefix('contacts') // 頭に contacts をつける
->middleware(['auth']) // 認証
->name('contacts.') // ルート名
->controller(ContactFormController::class) // コントローラ指定(laravel9から)
->group(function(){ // グループ化
    Route::get('/', 'index')->name('index'); //トップページ(いまのところ、お問い合わせ一覧)
    Route::get('/create', 'create')->name('create'); // プロフィール登録画面
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
