<?php namespace Azzahra\Models;

use Illuminate\Database\Eloquent\Model;

class Voucher extends Model {

    /**
     * Generated
     */

    protected $table = 'voucher';
    protected $primaryKey = 'kode_voucher';
    public $timestamps = false;
    protected $fillable = ['kode_voucher', 'discount', 'status'];


    public function reservasis() {
        return $this->belongsToMany(\Azzahra\Models\Reservasi::class, 'pembayaran', 'kode_voucher', 'id_reservasi');
    }

    public function pembayarans() {
        return $this->hasMany(\Azzahra\Models\Pembayaran::class, 'kode_voucher', 'kode_voucher');
    }


}
