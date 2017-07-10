<?php namespace Azzahra\Models;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model {

    /**
     * Generated
     */

    protected $table = 'pembayaran';
    protected $fillable = ['id_pembayaran', 'kodeCabang', 'nama', 'id_bundle', 'id_service', 'tanggal', 'status'];
    protected $primaryKey = 'id_pembayaran';
    public $timestamps = false;


    public function bundle() {
        return $this->belongsTo(\Azzahra\Models\Bundle::class, 'id_bundle', 'id_bundle');
    }

    public function service() {
        return $this->belongsTo(\Azzahra\Models\Service::class, 'id_service', 'id_service');
    }



}
