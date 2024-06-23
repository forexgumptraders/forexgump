<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactanosController;
use App\Http\Controllers\BillingController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\VistasController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\SerenusController;
use App\Http\Controllers\AureumController;
use App\Http\Controllers\SupraController;
use App\Http\Controllers\CookiePolicyController;
use App\Http\Controllers\RobotsController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use App\Http\Controllers\JoinGroupController;
use App\Http\Livewire\TermsCheckbox;
use Laravel\Fortify\Http\Controllers\EmailVerificationPromptController;

$controller_path = 'App\Http\Controllers';


Route::get('/', [MailController::class, 'index'])->name('contactanos.index');
Route::post('/', [MailController::class, 'store'])->name('contactanos.store');

Route::get('/', [PostController::class, 'index'])->name('posts.index');

Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');

Route::get('category/{category}', [PostController::class, 'category'])->name('post.category');

Route::get('tag/{tag}', [PostController::class, 'tag'])->name('posts.tag');


Route::get('home', [VistasController::class, 'home'])->name('home.home');

Route::get('policy', [VistasController::class, 'policy'])->name('home.policy');

Route::get('terms', [VistasController::class, 'terms'])->name('home.terms');

Route::get('cookies', [VistasController::class, 'cookies'])->name('home.cookies');


Route::get('trading-ai', [VistasController::class, 'tradingai'])->name('home.trading-ai');


//paypal

// Route::get('trading-ai/serenus', [SerenusController::class, 'serenusIndex'])->name('robot.serenusIndex');
// Route::post('trading-ai/serenus/create-paypal-order', [SerenusController::class, 'createPaypalOrder'])->name('robot.createPaypalOrder');
// Route::post('trading-ai/serenus/capture-paypal-order', [SerenusController::class, 'capturePaypalOrder'])->name('robot.capturePaypalOrder');
// Route::get('trading-ai/serenus/botserenus', [SerenusController::class, 'serenus'])->name('robot.serenus')->middleware('verificarPagoSerenus')->middleware('auth');

// Route::get('view-bot-serenus', $controller_path . '\SerenusController@serenus')->name('robot.serenus')->middleware('verificarPagoSerenus')->middleware('auth');


// Route::get('trading-ai/aureum', [AureumController::class, 'aureumIndex'])->name('robot.aureumIndex');
// Route::post('trading-ai/aureum/create-paypal-order', [AureumController::class, 'createPaypalOrder'])->name('robot.createPaypalOrder');
// Route::post('trading-ai/aureum/capture-paypal-order', [AureumController::class, 'capturePaypalOrder'])->name('robot.capturePaypalOrder');
// Route::get('trading-ai/aureum/botaureum', [AureumController::class, 'aureum'])->name('robot.aureum')->middleware('verificarPagoAureum')->middleware('auth');


// Route::get('view-bot-aureum', $controller_path . '\AureumController@aureum')->name('robot.aureum')->middleware('verificarPagoAureum')->middleware('auth');


Route::get('trading-ai/supra', [SupraController::class, 'supraIndex'])->name('robot.supraIndex');
Route::post('trading-ai/supra/create-paypal-order', [SupraController::class, 'createPaypalOrder'])->name('robot.createPaypalOrder');
Route::post('trading-ai/supra/capture-paypal-order', [SupraController::class, 'capturePaypalOrder'])->name('robot.capturePaypalOrder');
Route::get('trading-ai/supra/botsupra', [SupraController::class, 'supra'])->name('robot.supra')->middleware('verificarPagoSupra')->middleware('auth');


Route::get('view-bot-supra', $controller_path . '\SupraController@supra')->name('robot.supra')->middleware('verificarPagoSupra')->middleware('auth');

//stripe

Route::get('products', [ProductController::class, 'index'])->name('products.index');

Route::get('products/{product}/pay', [ProductController::class, 'pay'])->middleware('auth')->name('products.pay');

Route::get('articles', [ArticleController::class, 'index'])->name('articles.index');

Route::get('articles/{article}', [ArticleController::class, 'show'])->middleware('subscription', 'auth', 'verified')->name('articles.show');

Route::get('my-robots', [RobotsController::class, 'index'])->middleware('auth', 'verified')->name('robots.show');


Route::get('billing', [BillingController::class, 'index'])->middleware('auth')->name('billing.index');



Route::get('/load-more-articles', [ArticleController::class, 'loadMoreArticles'])->name('load-more-articles');

Route::get('/cookie-policy', [CookiePolicyController::class, 'show'])->name('cookie.policy');




//messages



Route::get('/unirte-al-grupo', [VistasController::class, 'telegram'])->middleware('auth', 'verified')->name('unirte-al-grupo');

Route::get('/unirte-al-grupo-plus', [VistasController::class, 'telegramplus'])->middleware('subscription', 'auth', 'verified')->name('unirte-al-grupo-plus');


Route::get('/user/invoice/{invoice}', function (Request $request, $invoiceId) {
    return $request->user()->downloadInvoice($invoiceId, [
        'vendor' => 'Your Company',
        'product' => 'Your Product',
    ]);
});


Route::post('/articles/{article}/like', [ArticleController::class, 'like'])->name('articles.like')->middleware('auth');
Route::post('/articles/{article}/dislike', [ArticleController::class, 'dislike'])->name('articles.dislike')->middleware('auth');
Route::post('/articles/{article}/cancel', [ArticleController::class, 'cancelLikeOrDislike'])->name('articles.cancel')->middleware('auth');
Route::post('/articles/like/check', [ArticleController::class, 'checkLike'])->name('articles.like.check');
Route::get('/articles/{article}/{type}/has-liked', [ArticleController::class, 'hasLiked']);
// Ejemplo de una ruta para obtener los conteos
Route::get('/articles/{article}/counts',  [ArticleController::class, 'getLikeDislikeCounts']);

Route::get('/email/verify', [EmailVerificationPromptController::class, '__invoke'])
    ->middleware('auth')
    ->name('verification.notice');


    Route::get('/auth/redirect',  [AuthController::class, 'redirect'])->name('auth.redirect');
     
    Route::get('/auth/callback',  [AuthController::class, 'callback'])->name('auth.callback');
     