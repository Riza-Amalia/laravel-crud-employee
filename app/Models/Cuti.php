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
        'id', 'pegawai_id', 'tgl_cuti', 'lama_cuti', 'sisa_cuti', 'keterangan'
    ];

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class);
    }
}
