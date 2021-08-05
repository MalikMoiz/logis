<?php

use Illuminate\Support\Facades\Routes;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\QuotesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Models\Blogs;
use App\Models\Quotes;
use App\Models\Contact;

Route::any('/', function () {
    return view('index');
})->name('index');
Route::get('dashboard', function () {
    if((session()->get('logininfo.type'))=="admin" || (session()->get('logininfo.type'))=="user" ){
    return view('adminpanel');
    }
    else{
        return view('login');
    }
  })->name('dashboard');
Route::get('adminpanel', function () {
  return view('login');
})->name('adminpanel');
Route::get('air-cargo', function () {
    return view('Air_Cargo');
});
Route::get('bolg-details', function () {
    return view('blog_details');
});
Route::get('blog', function () {
   $blogsall=Blogs::orderBy('id', 'desc')->take(5)->get();
    $blogsrecent=Blogs::orderBy('id', 'desc')->take(7)->get();
    return view('blog',compact('blogsrecent','blogsall'));
});
Route::get('contact', function () {
    return view('contact');
})->name('contact');
Route::get('blog-posting', function () {
    if((session()->get('logininfo.type'))=="admin"){
    return view('blogposting');
    }
    else{
        return view ('login');
    }
})->name('blogpost');
Route::get('flight-support', function () {
    
    return view('Flight_Support');
});
Route::get('group-air', function () {
    
    return view('Group_Air');
});
Route::get('private-jet', function () {
    
    return view('Private_Jet');
});
Route::get('services', function () {
     
    return view('services');
});
Route::get('quotes', function () {
    
    return view('quotes');
})->name('quotes');
Route::get('quotesshow', function () {
    $quotes=Quotes::orderBy('id','desc')->paginate(10);
    if((session()->get('logininfo.type'))=="admin" || (session()->get('logininfo.type'))=="user" ){
    return view('quotesadmin',compact('quotes'));
    }
    else{
        return view ('login');
    }
})->name('quotesshow');
Route::get('aerospace', function () {
   
    return view('aerospace');
})->name('aerospace');
Route::get('automotive', function () {
    
    return view('automotive');
})->name('automotive');
Route::get('dangerousgood', function () {
    
    return view('dangerousgoods');
})->name('dangerousgoods');
Route::get('heavyandoutsize', function () {
    
    return view('heavyandoutsize');
})->name('heavyandoutsize');
Route::get('humanitarianaid', function () {
    
    return view('humanitarianaid');
})->name('humanitarianaid');
Route::get('oilandgas', function () {
    
    return view('oilandgas');
})->name('oilandgas');
Route::get('onboardcourier', function () {
    
    return view('onboardcourier');
})->name('onboardcourier');
Route::get('aircraftleasing', function () {
    
    return view('aircraftleasing');
})->name('aircraftleasing');
Route::get('automotivelaunches', function () {
    
    return view('automotivelaunches');
})->name('automotivelaunches');
Route::get('evacuationflights', function () {
    
    return view('evacuationflights');
})->name('evacuationflights');
Route::get('government', function () {
    
    return view('government');
})->name('government');
Route::get('mice', function () {
    
    return view('mice');
})->name('mice');
Route::get('oilandgasgroupair', function () {
    
    return view('oilandgasgroupair');
})->name('oilandgasgroupair');
Route::get('sportsteams', function () {
    
    return view('sportsteams');
})->name('sportsteams');
Route::get('touroperators', function () {
    
    return view('touroperators');
})->name('touroperators');
Route::get('tmcs', function () {
    
    return view('tmcs');
})->name('tmcs');
Route::get('about', function () {
    
    return view('about');
})->name('about');
Route::get('corporatetravel', function () {
    
    return view('corporatetravel');
})->name('corporatetravel');
Route::get('hospitalityandevents', function () {
    
    return view('hospitalityandevents');
})->name('hospitalityandevents');
Route::get('musictours', function () {
    
    return view('musictours');
})->name('musictours');
Route::get('luxurytravel', function () {
    
    return view('luxurytravel');
})->name('luxurytravel');
Route::get('medevac', function () {
    
    return view('medevac');
})->name('medevac');
Route::get('moviepromotours', function () {
    
    return view('moviepromotours');
})->name('moviepromotours');
Route::get('sportsevents', function () {
    
    return view('sportsevents');
})->name('sportsevents');
Route::get('airpassengerduty', function () {
    
    return view('airpassengerduty');
})->name('airpassengerduty');
Route::get('casestudies', function () {
    
    return view('casestudies');
})->name('casestudies');
Route::get('deliveryandferrysupport', function () {
    
    return view('deliveryandferrysupport');
})->name('deliveryandferrysupport');
Route::get('diversionmanagement', function () {
    
    return view('diversionmanagement');
})->name('diversionmanagement');
Route::get('flightplanning', function () {
    
    return view('flightplanning');
})->name('flightplanning');
Route::get('outsourcedflightoperations', function () {
    
    return view('outsourcedflightoperations');
})->name('outsourcedflightoperations');
Route::get('timecriticalsolutions', function () {
   
   return view('timecriticalsolutions');
})->name('timecriticalsolutions');
Route::get('contactadmin', function () {
    $contact=Contact::orderBy('id', 'desc')->get();
    if((session()->get('logininfo.type'))=="admin" || (session()->get('logininfo.type'))=="user" ){
    return view('contactadmin',compact('contact'));
    }
    else{   
        return view ('login');
    }
})->name('contactadmin');

Route::post('/blogposting',[BlogsController::class,'blogposting']);
Route::get('/blog-single/{blog}',[BlogsController::class,'single'])->name('blog.details');
Route::post('/quotessubmit',[QuotesController::class,'quotes'])->name('quotes.submit');
Route::post('/login',[UserController::class,'login'])->name('login');
Route::any('/logout',[UserController::class,'logout'])->name('logout');
Route::any('contact/postcontact',[ContactController::class,'contact'])->name('postcontact');