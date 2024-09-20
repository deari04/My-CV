<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class biodata extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'keterangan',
        'umur',
        'alamat',
    ];
}
