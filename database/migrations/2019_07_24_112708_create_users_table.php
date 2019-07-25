<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateUsersTable.
 */
class CreateUsersTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
            $table->increments('id');

            $table->string('cpf', 11);
            $table->string('name', 60);
            $table->string('login', 80);
            $table->string('email', 180);
            $table->string('password', 254);
            $table->dateTime('register');
            $table->dateTime('change');
            $table->boolean('active');


            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        /* Schema::table('users', function(Blueprint $table) {

        });
         */
	    Schema::dropIfExists('users');
	}
}
