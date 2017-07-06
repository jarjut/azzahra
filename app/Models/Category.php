<?php namespace Azzahra\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

    /**
     * Generated
     */

    protected $table = 'category';
    protected $primaryKey = 'id_category';
    protected $fillable = ['id_category', 'nama', 'deskripsi', 'gambar'];


    public function services() {
        return $this->hasMany(\Azzahra\Models\Service::class, 'id_category', 'id_category');
    }


}
