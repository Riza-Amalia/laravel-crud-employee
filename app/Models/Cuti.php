<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuti extends Model
{
    use HasFactory;
    protected $table = "cuti";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'tgl_cuti', 'lama_cuti', 'keterangan'
    ];
}