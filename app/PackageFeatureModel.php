<?php

namespace App;
use Illuminate\Database\Eloquent\Relations\Pivot;

class PackageFeatureModel extends Pivot {
	protected $table = "package_feature_models";
	protected $fillable = ['package_id', 'feature_id'];
	// public function package() {
	// 	return $this->hasMany(PackagesModel::class, 'id', 'package_id');
	// }

	// public function feature() {
	// 	return $this->belongsToMany(FeatureModel::class, 'id', 'feature_id');
	// }
}
