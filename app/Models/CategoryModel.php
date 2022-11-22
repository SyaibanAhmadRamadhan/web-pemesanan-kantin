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

    public function getMenu()
    {
        return $this->hasMany(DaftarMenuModel::class, 'id_category');
    }
}
