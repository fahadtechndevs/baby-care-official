<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackageFeatureModelsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('package_feature_models', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->Integer('package_id');
			// $table->foreign('package_id')->references('id')->on('packages_models');
			$table->Integer('features_id');
			// $table->foreign('features_id')->references('id')->on('feature_models');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('package_feature_models');
	}
}
