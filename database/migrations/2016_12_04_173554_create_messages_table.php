<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('messages', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name')->default('无名氏');
            $table->string('tel')->default('无号码');
            $table->string('email')->default('无邮箱');
            $table->text('content');
            $table->string('image')->default('');
            $table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('messages');
	}

}
