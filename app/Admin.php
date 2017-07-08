<?php

namespace Azzahra;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use Notifiable;
    protected $table = "admins";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $primaryKey = 'id_admin';

    protected $fillable = [
        'kodeCabang', 'nama', 'nip', 'jeniskelamin', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function cabang() {
        return $this->belongsTo(\Azzahra\Models\Cabang::class, 'kodeCabang', 'kodeCabang');
    }
}
