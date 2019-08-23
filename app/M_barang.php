<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class M_barang extends Model
{
    public $timestamps = false;
    protected $table = "tbl_barang";
    protected $fillable = ['nama_produk','harga','gambar']; //sesuaikan dengan struktur database yang sudah dibuat

}
