<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('orders', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->Integer('user_id');
			// $table->foreign('user_id')->references('id')->on('users');
			$table->integer('package_id');
			// $table->foreign('package_id')->references('id')->on('packages_models');
			$table->integer('features_id');
			// $table->foreign('features_id')->references('id')->on('feature_models');
			$table->integer('theme_id');
			// $table->foreign('theme_id')->references('id')->on('theme_models');
			$table->String('domain_details');
			$table->String('extra_pay');
			// $table->integer('order_status');
			$table->String('own_domain');
			$table->String('logo_design');
			$table->String('purchase');
			$table->String('notes');
			$table->String('additional_comments');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('orders');
	}
}
