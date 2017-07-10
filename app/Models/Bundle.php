<?php namespace Azzahra\Models;

use Illuminate\Database\Eloquent\Model;

class Bundle extends Model {

    /**
     * Generated
     */

    protected $table = 'bundle';
    protected $primaryKey = 'id_bundle';
    public $timestamps = false;
    protected $fillable = ['id_bundle', 'nama', 'harga'];


    public function services() {
        return $this->belongsToMany(\Azzahra\Models\Service::class, 'bundle_detail', 'id_bundle', 'id_service');
    }

    public function bundleDetails() {
        return $this->hasMany(\Azzahra\Models\BundleDetail::class, 'id_bundle', 'id_bundle');
    }

    public function reservasis() {
        return $this->hasMany(\Azzahra\Models\Reservasi::class, 'id_bundle', 'id_bundle');
    }


}
