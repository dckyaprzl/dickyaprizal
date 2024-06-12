<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class top_rated extends Model
{
    protected $table = "top_rated";
    protected $primaryKey = 'Kode_Film';
    public $timestamps = true;
 
    protected $fillable = ['thumbnail','Judul_Film','Tahun_Rilis','ID_Genre','Rating', 'deskripsi','video_url'];
}
