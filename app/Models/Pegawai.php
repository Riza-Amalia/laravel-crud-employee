<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $table = "pegawai";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'no_induk', 'nama', 'alamat', 'tgl_lahir', 'tgl_bergabung'
    ];

    public function cuti()
    {
        return $this->hasMany(Cuti::class);
    }
}
