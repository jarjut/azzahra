<?php namespace Azzahra\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model {

    /**
     * Generated
     */

    protected $table = 'admins';
    protected $fillable = ['id_admin', 'kodeCabang', 'nama', 'nip', 'jeniskelamin', 'password', 'remember_token'];


    public function cabang() {
        return $this->belongsTo(\Azzahra\Models\Cabang::class, 'kodeCabang', 'kodeCabang');
    }


}
