<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductCategoriesTable extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('product_categories', function(Blueprint $table) {

      $table->increments('id');

      $table->string('title');
      $table->integer('parent_id')->nullable()->index();
      $table->integer('order');

      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::drop('product_categories');
  }

}
