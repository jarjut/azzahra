<?php namespace Azzahra\Models;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model {

    /**
     * Generated
     */

    protected $table = 'pembayaran';
    protected $primaryKey = 'id_pembayaran';
    protected $fillable = ['id_pembayaran', 'id_reservasi', 'kode_voucher', 'tanggal', 'jumlah'];


    public function reservasi() {
        return $this->belongsTo(\Azzahra\Models\Reservasi::class, 'id_reservasi', 'id_reservasi');
    }

    public function voucher() {
        return $this->belongsTo(\Azzahra\Models\Voucher::class, 'kode_voucher', 'kode_voucher');
    }


}
