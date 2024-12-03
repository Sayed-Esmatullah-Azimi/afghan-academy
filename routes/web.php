<?php

use App\Http\Controllers\AdminControlelr;
use App\Http\Controllers\PostController;
use App\Models\Item;
use App\Models\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;


Route::get('/', [PostController::class ,'index'])->name('post');
Route::get('/welcome',function (Request $request) {
    $laguageCode = $request->language;
    $language = Language::where('code',$laguageCode)->first();
    $languageId = $language ? $language->id : null;
    // if( ! $language){
    //     return back()->withErrors('Unable to find Langrage ,Please choose the correct one');
    // }
    $item = Item::find(1);
    $translation = $item->translations->where('language_id',$languageId)->first();
    $languages = Language::all();
    // dd($item);
    if(! $item){
        abort(404);
    }

    return view('welcome' , compact('translation'));
})->name('welcome');
Route:: view('/about' , 'about' );
Route::resource('admin', AdminControlelr::class);

Route::get('admin/delete/{id}', [AdminControlelr::class ,'destroy'])->name('admin.delete');
