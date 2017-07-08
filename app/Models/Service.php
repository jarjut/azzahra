<?php namespace Azzahra\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model {

    /**
     * Generated
     */

    protected $table = 'service';
    protected $primaryKey = 'id_service';
    public $timestamps = false;
    protected $fillable = ['id_service', 'id_category', 'nama', 'harga', 'deskripsi', 'gambar'];


    public function category() {
        return $this->belongsTo(\Azzahra\Models\Category::class, 'id_category', 'id_category');
    }

    public function bundles() {
        return $this->belongsToMany(\Azzahra\Models\Bundle::class, 'bundle_detail', 'id_service', 'id_bundle');
    }

    public function bundleDetails() {
        return $this->hasMany(\Azzahra\Models\BundleDetail::class, 'id_service', 'id_service');
    }

    public function reservasis() {
        return $this->hasMany(\Azzahra\Models\Reservasi::class, 'id_service', 'id_service');
    }


}
