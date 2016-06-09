<?php
Route::group(['middleware' => ['web']], function()
{
	Route::get('talk','Nahid\Talk\Http\Controllers\TalkController@index');
});
