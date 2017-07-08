<?php namespace Azzahra\Models;

use Illuminate\Database\Eloquent\Model;

class Cabang extends Model {

    /**
     * Generated
     */

    protected $table = 'cabang';
    public $timestamps = false;
    protected $fillable = ['kodeCabang', 'nama', 'alamat'];


    public function admins() {
        return $this->hasMany(\Azzahra\Models\Admin::class, 'kodeCabang', 'kodeCabang');
    }

    public function pegawais() {
        return $this->hasMany(\Azzahra\Models\Pegawai::class, 'kodeCabang', 'kodeCabang');
    }

    public function reservasis() {
        return $this->hasMany(\Azzahra\Models\Reservasi::class, 'kodeCabang', 'kodeCabang');
    }


}
