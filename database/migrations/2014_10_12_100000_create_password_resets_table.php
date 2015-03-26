<?php

use Illuminate\Database\Migrations\Migration;
use Jenssegers\Mongodb\Collection;

class CreatePasswordResetsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('password_resets', function($collection)
		{
            $collection->index('email');
            $collection->index('token');
            $collection->timestamp('created_at');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('password_resets');
	}

}
