<?php

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('/t/',function(){





	$users = \App\User::where('id',4)->get();

	return $users;

	/*$client = new GuzzleHttp\Client(['base_url' => 'http://devcustomclips-api/api/v1/']);
	$response = $client->get('models',['auth' => ['dtateshvili', 'datoi$co']]);
	return $response->json();*/
});



Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
