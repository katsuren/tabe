<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopReviewsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('shop_reviews', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('created_by');
			$table->integer('shop_id');
			$table->text('review');
			$table->integer('score');
			$table->integer('cost');
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
		Schema::drop('shop_reviews');
	}

}
