<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdminTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('admin', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('username', 16)->index('index_username1');
			$table->char('password', 32);
			$table->string('email', 50)->index('index_email1');
			$table->string('fullname', 50);
			$table->dateTime('createdon');
			$table->dateTime('updatedon');
			$table->boolean('isactive')->default(1)->index('index_isactive3');
			$table->boolean('blocked')->default(0)->index('index_blocked1');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('admin');
	}

}
