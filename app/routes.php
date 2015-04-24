<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array('before' => 'newyear', 'uses' => 'HomeController@showWelcome'));
Route::get('about', 'AboutController@showAbout');
Route::get('about/directions', array('uses' => 'AboutController@showDirections', 'as' => 'directions'));
Route::get('about/{thesubject}', 'AboutController@shoSubject');

Route::get('programs', function(){
    return View::make('programs');
});

Route::get('graphic-design', function(){
    return View::make('graphic-design');
});

Route::get('signup', function(){
    return View::make('signup');
});

Route::post('thanks', function(){
    $theEmail = Input::get('email');
    return View::make('thanks')->with('theEmail', $theEmail);
});

Route::get('data', function()
{
//   $painting = Paintings::find(1);
//   $painting->title = 'Do No Wrong - Just Do Right';
//   $painting->save();
//   return $painting->title;

    echo '<pre>';
    $paintings = Paintings::where('year','=','2014')->get();
    var_dump($paintings->toArray());
    echo '</pre>';

});