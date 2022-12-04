<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenjualModel extends Model
{
    use HasFactory;
    protected $table = 'penjual';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id', 'id_penjual', 'nama', 'nama_warung', 'lokasi', 'nomer_telepon'
    ];

    
}
