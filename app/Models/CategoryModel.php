<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    use HasFactory;
    protected $table = 'category';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id', 'name_category'
    ];

    public function getMenu($param)
    {
        return $this->hasMany(DaftarMenuModel::class, 'id_category')->where('name_menu', 'LIKE', '%' . $param . '%')->get();
    }
}
