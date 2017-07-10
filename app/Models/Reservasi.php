<?php namespace Azzahra\Models;

use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model {

    /**
     * Generated
     */

    protected $table = 'reservasi';
    protected $fillable = ['id_reservasi', 'id_bundle', 'id_pegawai', 'id_jam', 'id_service', 'kodeCabang', 'id_customer', 'tanggal', 'status'];
    protected $primaryKey = 'id_reservasi';
    public $timestamps = false;


    public function pegawai() {
        return $this->belongsTo(\Azzahra\Models\Pegawai::class, 'id_pegawai', 'id_pegawai');
    }

    public function customer() {
        return $this->belongsTo(\Azzahra\Customer::class, 'id_customer', 'id_customer');
    }

    public function service() {
        return $this->belongsTo(\Azzahra\Models\Service::class, 'id_service', 'id_service');
    }

    public function bundle() {
        return $this->belongsTo(\Azzahra\Models\Bundle::class, 'id_bundle', 'id_bundle');
    }

    public function cabang() {
        return $this->belongsTo(\Azzahra\Models\Cabang::class, 'kodeCabang', 'kodeCabang');
    }

    public function jamreservasi() {
        return $this->belongsTo(\Azzahra\Models\Jamreservasi::class, 'id_jam', 'id_jam');
    }


}
