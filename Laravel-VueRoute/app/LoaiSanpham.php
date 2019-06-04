<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiSanpham extends Model
{
    protected $table="loaisanpham";

    public function sanpham(){
        return $this->hasMany('App\SanPham', 'id_loaisanpham', 'id');
    }
}
