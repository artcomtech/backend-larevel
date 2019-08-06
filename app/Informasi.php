<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Informasi extends Model
{
    protected $table = "tbl_informasi";
    protected $fillable = ['id_kategori','title','desc','isi','image','stt'];
    protected $primaryKey = "id_informasi";
}
