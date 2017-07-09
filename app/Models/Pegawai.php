<?php namespace Azzahra\Models;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model {

    /**
     * Generated
     */

    protected $table = 'pegawai';
    protected $primaryKey = 'id_pegawai';
    protected $fillable = ['id_pegawai', 'kodeCabang', 'nama', 'nip'];


    public function cabang() {
        return $this->belongsTo(\Azzahra\Models\Cabang::class, 'kodeCabang', 'kodeCabang');
    }

    public function reservasis() {
        return $this->hasMany(\Azzahra\Models\Reservasi::class, 'id_pegawai', 'id_pegawai');
    }


}
