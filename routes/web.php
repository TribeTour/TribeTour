<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
use App\Article;

Route::get('/', ['as' => 'home', 'uses' => 'PagesController@getIndex']);
Route::get('/event_wall', ['as' => 'event_wall', 'uses' => 'PagesController@getEventWall']);
Route::get('/story', ['as' => 'story', 'uses' => 'PagesController@getStory']);




Route::group (['prefix' => 'students','middleware' => ['roles'], 'roles' => ['User', 'Admin']], function(){

	Route::get('/joined_tour', ['as' => 'students.joined_tour', 'uses' => 'StudentPagesController@getStudentJoinedTour']);

	Route::get('/my_noticeboard', ['as' => 'students.my_noticeboard', 'uses' => 'StudentPagesController@getStudentMyNoticeBoard']);

	Route::get('/profile', ['as' => 'students.profile', 'uses' => 'StudentPagesController@getStudentProfile']);

	Route::get('/mystory', ['as' => 'students.mystory', 'uses' => 'StudentPagesController@getStudentMyStory']);

});

Route::group (['prefix' => 'TourGuide','middleware' => ['roles'], 'roles' => ['Tour Guide', 'Admin']], function(){

	Route::get('/joined_tour', ['as' => 'TourGuide.joined_tour', 'uses' => 'TourGuidePagesController@getTourGuideJoinedTour']);

	Route::get('/my_noticeboard', ['as' => 'TourGuide.my_noticeboard', 'uses' => 'TourGuidePagesController@getTourGuideMyNoticeBoard']);

	Route::get('/profile', ['as' => 'TourGuide.profile', 'uses' => 'TourGuidePagesController@getTourGuideProfile']);

	Route::get('/mystory', ['as' => 'TourGuide.mystory', 'uses' => 'TourGuidePagesController@getTourGuideMyStory']);

});
Auth::routes();

