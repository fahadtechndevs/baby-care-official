<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeatureModel extends Model {

	public function packages() {
		return $this->belongsToMany(PackagesModel::class, PackageFeatureModel::class, "feature_id", "package_id");
	}
}
