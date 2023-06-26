<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewController;
use App\Http\Controllers\LoginController;
use App\Models\Posts;
use App\Http\Controllers\phoneController;
use App\Http\Controllers\ContactController;


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/admin', function () {
    return view('admin');
})->name('admin');



Route::view('/', '/project/index1')->name('home');
Route::view('/services', '/project/services')->name('services');
Route::view('/about', '/project/about')->name('about');
Route::view('/network', '/project/network')->name('network');
Route::view('/clients', '/project/clients')->name('clients');
Route::view('/testimonials', '/project/testimonials')->name('testimonials');
Route::view('/contact', '/project/contact')->name('contact');

// Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login.form');
// Route::post('/login', [LoginController::class, 'login'])->name('login');









Route::get('welcome', [NewController::class, 'showWelcome']);

Route::get('abouts', function () {
    return 'Abouts Shere';
});

// Route::get('abouts/direction', function () {
//     return 'Direction here';
// })->name('direction');
// Route::get('where', function () {
//     return Redirect::route('direction');
// });


Route::get('abouts/{subject}',[AboutController::class,'showsubject']);



// Route::get('submit-form', function () {
//     return 'Process Form';
// });

// Route::get('abouts/{thesubject}', function ($thesubject) {
//     return $thesubject. ' (details of thesubject)';
// });

// Route::get('about/{price}/{art}', function ($price,$art) {
//     return $price. ' and ' .$art;
// });





Route::get('/insert/{title}/{body}',function($title,$body){
    DB::insert('insert into posts (title, body) values (?, ?)', [$title, $body]);
    return 'Done';
});

Route::get('/read', function () {
    $result = DB::select('select * from posts where id > ?', [1]);  
    foreach ($result as $post){
        return $post->title;
    }
});

Route::get('update', function () {
    $updated = DB::update('update posts set title = "New Title haha" where id > ?', [1]);
    return $updated; 
});

Route::get('delete', function () {
    $deleted = DB::delete('delete from posts where id = ?', [1]);
    return $deleted;    
});


Route::get('readAll', function () {
    $post = posts::all();
    foreach ($post as $p){
        echo $p->title . " + " . $p->body;
        echo "<br>";
    }    
});

Route::get('insertWithModel', function () {
    $p = new posts;
    $p->title = 'Java';
    $p->body = 'Im Java';
    $p->save();
    return 'Done';
});

Route::get('deleteWithModel', function () {
   Posts::where('id','>',6)->delete();
   return 'done';
});

Route::get('updateWithModel', function () {
    $p = Posts::where('id',6)->first();
    $p->title = 'Updated';
    $p->body = 'Updated';
    $p->save();
 });

 


 Route::resource('/contactt', ContactController::class);