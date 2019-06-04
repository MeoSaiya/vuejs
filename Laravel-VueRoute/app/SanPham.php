<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sanpham extends Model
{
    protected $table="sanpham";

    public function loaisanpham(){
        return $this->belongTo('App\LoaiSanPham', 'id_loaisanpham', 'id');
    }
}
