<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modul extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_modul_10',
        'foto_modul_10',
        'link_modul_10',
    ];

    public $timestamps = true;
}
