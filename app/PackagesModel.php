<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PackagesModel extends Model {

	public function features() {
		return $this->belongsToMany(FeatureModel::class, PackageFeatureModel::class, "package_id", "feature_id");
	}
}
