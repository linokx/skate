<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	    Schema::create('photos', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->text('url');
			$table->integer('width');
			$table->integer('height');
			$table->integer('user_id')->unsigned();
			$table->integer('spot_id')->unsigned();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('photos');
	}

}
