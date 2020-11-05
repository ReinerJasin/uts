<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mentee extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_mentee',
        'nim_mentee',
        'mentored_by',
        'jurusan',
        'tanggal_lahir',
        'jenis_kelamin',    
    ];

    public function mentor() {
        return $this->belongsTo(Mentor::class, 'mentored_by', 'id');
    }
}
