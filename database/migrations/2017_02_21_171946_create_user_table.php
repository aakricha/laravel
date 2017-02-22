<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('email', 50)->index('index_email');
			$table->string('username', 16)->index('index_username');
			$table->char('password', 32);
			$table->char('key', 16);
			$table->date('dob');
			$table->string('country_code', 5);
			$table->string('country', 32);
			$table->string('state', 50);
			$table->string('city', 50);
			$table->string('postal_code', 8);
			$table->text('address', 65535)->nullable();
			$table->string('phone_code', 5);
			$table->string('phone_number', 15);
			$table->text('param', 65535)->nullable();
			$table->dateTime('created');
			$table->dateTime('updated');
			$table->boolean('isactive')->default(1)->index('index_isactive')->comment('isactive is a filed for user condition is active. if isactive= 1 the user has active but if isactive= 0 the user not active');
			$table->boolean('blocked')->default(0)->index('index_blocked')->comment('blocked is a filed for user condition is blocked by admin. if blocked = 1 the user has blocked but if blocked = 0 the user not blocked');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user');
	}

}
