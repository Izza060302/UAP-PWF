<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DosenModel extends Model
{
    use HasFactory;

    protected $table = 'tb_dosens';
    protected $fillable = ['nip', 'nama_dosen', 'foto_dosen'];
}
