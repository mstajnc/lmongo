<?php

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('/t/',function(){



	/*$user = new \App\User();
	$user->name = "Ucha";
    $user->email = "ucha19871@gmail.com";
    $user->password = \Hash::make('password');
	$user->location = "location";
	$user->gender = "gender";
	$user->adult = "adult";
	$user->save();*/

    //\App\User::find()


	$u = \App\User::find('551466bf03956d97428b456b');
    $u->gender = 'male';
    $u->save();

    \App\User::destroy('5514686503956d97428b456e');

	return \App\User::paginate();

	/*$client = new GuzzleHttp\Client(['base_url' => 'http://devcustomclips-api/api/v1/']);
	$response = $client->get('models',['auth' => ['dtateshvili', 'datoi$co']]);
	return $response->json();*/
});



Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
