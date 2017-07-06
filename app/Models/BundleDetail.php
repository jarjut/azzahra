<?php namespace Azzahra\Models;

use Illuminate\Database\Eloquent\Model;

class BundleDetail extends Model {

    /**
     * Generated
     */

    protected $table = 'bundle_detail';
    protected $fillable = ['id_bundle', 'id_service'];


    public function bundle() {
        return $this->belongsTo(\Azzahra\Models\Bundle::class, 'id_bundle', 'id_bundle');
    }

    public function service() {
        return $this->belongsTo(\Azzahra\Models\Service::class, 'id_service', 'id_service');
    }


}
