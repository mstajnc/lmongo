<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Jenssegers\Mongodb\Collection;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($collection)
		{
            $collection->bigIncrements('id');
            $collection->string('name');
            $collection->string('email')->unique();
            $collection->string('password');
            $collection->string('location');
            $collection->string('gender');
            $collection->string('adult');
            $collection->rememberToken();
            $collection->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
