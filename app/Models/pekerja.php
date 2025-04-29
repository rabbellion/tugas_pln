<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pekerja extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_pekerja',
        'kategori',
        'nama',
    ];
}
