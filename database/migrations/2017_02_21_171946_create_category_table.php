<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('category', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('parent_id')->index('index_parent_id');
			$table->string('description', 50)->index('index_description');
			$table->boolean('isactive')->default(1)->index('index_isactive1')->comment('isactive is a filed for user condition is active. if isactive= 1 the user has active but if isactive= 0 the user not active');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('category');
	}

}
