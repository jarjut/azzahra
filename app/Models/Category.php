<?php namespace Azzahra\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

    /**
     * Generated
     */

    protected $table = 'category';
    protected $primaryKey = 'id_category';
    public $timestamps = false;
    protected $fillable = ['id_category', 'nama'];


    public function services() {
        return $this->hasMany(\Azzahra\Models\Service::class, 'id_category', 'id_category');
    }


}
