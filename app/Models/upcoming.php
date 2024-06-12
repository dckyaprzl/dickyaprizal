<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class upcoming extends Model
{
    protected $table = "upcoming";
    protected $primaryKey = 'Kode_Film';
    public $timestamps = true;
 
    protected $fillable = ['thumbnail','Judul_Film','Tahun_Rilis','ID_Genre','deskripsi'];
}
