<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;
// Web Routes


//ALL LISTINGS
Route::get('/', function () {
    return view('listings', [
        'heading' => 'latest listing',
        'listings'=> Listing::all()
    ]);
});

//SINGLE LISTINGS
Route::get('/listings{id}', function($id){ //get listing by it ID
    return view('listing',[
        'listing' => Listing::find($id)
    ]);
});