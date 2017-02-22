<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTagTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tag', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('description', 80)->index('index_description1');
			$table->boolean('isactive')->default(1)->index('index_isactive2')->comment('isactive is a filed for user condition is active. if isactive= 1 the user has active but if isactive= 0 the user not active');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tag');
	}

}
