<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mentor extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_mentor',
        'nim_mentor',
        'jurusan',
        'tanggal_lahir',
        'jenis_kelamin',    
    ];

    public function mentees() {
        return $this->hasMany(mentee::class, 'mentored_by', 'id');
    }
}
