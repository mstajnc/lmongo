<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('comments', function($collection)
        {
            $collection->increments('id');
            $collection->string('text');
            $collection->integer('user_id');
            $collection->integer('question_id');
            $collection->string('agree');
            $collection->string('reply');
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
        Schema::drop('comments');
	}

}
