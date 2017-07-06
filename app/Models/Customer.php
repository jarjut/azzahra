<?php namespace Azzahra\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model {

    /**
     * Generated
     */

    protected $table = 'customers';
    protected $fillable = ['id_customer', 'nama', 'email', 'jeniskelamin', 'nohp', 'alamat', 'password', 'remember_token'];


    public function reservasis() {
        return $this->hasMany(\Azzahra\Models\Reservasi::class, 'id_customer', 'id_customer');
    }


}
