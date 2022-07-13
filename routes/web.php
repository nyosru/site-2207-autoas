<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\SessionController;
use App\Http\Controllers\DidriveController;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Cookie;

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

Auth::routes();



Route::get('/{page?}', [HomeController::class, 'pageShow'])
    ->where('page', 'index|about|post|contact|conf|oferta|vozvrat')
    ->name('mod_page');




Route::name('didrive.')
    ->prefix('didrive')
    ->group(function () {

        Route::get('/', [ DidriveController::class, 'index'])
            // ->where('cat', '[1-9]')
            ->name('index');

        Route::get('22', [ DidriveController::class, 'index2'])
            // ->where('cat', '[1-9]')
            ->name('index2');

    });


Route::name('shop.')
    ->prefix('/shop')
    ->group(function () {

        // Route::post('/search', [HomeController::class, 'search'] )
        Route::post('/search', function (Request $request) {
            return redirect()->route('shop.show', ['v1' => 'search', 'v2' => $request->search]);
        })
            ->name('search');

        // Route::get('/search/{string}', [HomeController::class, 'searchResult'] )
        //     ->name('search-result');

        // dd('123');


        Route::post('send_order', [HomeController::class, 'sendOrder'])
            // ->where('cat', '[1-9]')
            ->name('send_order');

        Route::get('cart', [HomeController::class, 'shopCart'])
            // ->where('cat', '[1-9]')
            ->name('cart');

        Route::get('/{v1?}/{v2?}/{v3?}/{v4?}/', [HomeController::class, 'shopShow'])
            // ->where('cat', '[1-9]')
            ->name('show');
    });


// Route::get('session/get', [SessionController::class, 'accessSessionData']);
// Route::get('session/set', [SessionController::class, 'storeSessionData']);
// Route::get('session/remove', [SessionController::class, 'deleteSessionData']);


Route::get('/{any}', function () {
    return redirect('/');
})->where('any', '.*');

// Route::get('/', function () {
//     return view('welcome');
// });



Route::prefix('api_shop')->group(function () {

    Route::post('add_to_cart', function (Request $request, SessionController $sessionController) {

        // $ss = $sessionController->getItems( $request );
        $sessionController->addItem($request, $request->aj_id, 1);
        $items = $sessionController->getItems($request);

        $out = [
            // 'e' => $e ?? 'x',
            // 'id' => $request->aj_id,
            // 'ss' => $ss ?? 'x',
            // 'ss2' => $ss2 ?? 'x',
            // // 'card0' => $cart0,
            // 'card' => $cart ?? '[]',
            // 'all' => $request->all(),
            'status' => 'ok',
            'items' => $items ?? [],
            // 'msg' => $ex->getMessage()
        ];

        $out['kolvo'] = sizeof($items ?? []);

        return response()->json($out);
        // return redirect('/');
    })
        // ->where('any', '.*')
    ;

    Route::post('change-kolvo/{item}/{new_kolvo}', function (Request $request, SessionController $sessionController, $item, $new_kolvo) {

        try {
            //code...
            $out = [
                'status' => 'ok'
            ];
            $sessionController->addItem($request, $item, $new_kolvo);
            // $out['items'] = $sessionController->getItems($request);
            $out['item_id'] = $item;
            $out['items'] = $sessionController->getItems($request);
        } catch (\Throwable $th) {
            //throw $th;
        }

        return response()->json($out ?? ['items' => [], 'status' => 'error']);
    });
});
