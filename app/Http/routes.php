<?php

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('/t/',function(){



	/*$user = new \App\User();
	$user->name = "Doby";
	$user->email = "u@u.com";
	$user->save();*/



	$users = \App\User::paginate();

	return $users;

	/*$client = new GuzzleHttp\Client(['base_url' => 'http://devcustomclips-api/api/v1/']);
	$response = $client->get('models',['auth' => ['dtateshvili', 'datoi$co']]);
	return $response->json();*/
});



Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
