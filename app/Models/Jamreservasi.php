<?php namespace Azzahra\Models;

use Illuminate\Database\Eloquent\Model;

class Jamreservasi extends Model {

    /**
     * Generated
     */

    protected $table = 'jamreservasi';
    protected $primaryKey = 'id_jam';
    protected $fillable = ['id_jam', 'start', 'end'];
    public $timestamps = false;


    public function reservasis() {
        return $this->hasMany(\Azzahra\Models\Reservasi::class, 'id_jam', 'id_jam');
    }


}
