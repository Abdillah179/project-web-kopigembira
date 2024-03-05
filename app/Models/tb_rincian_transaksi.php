<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_rincian_transaksi extends Model
{
    use HasFactory;


    protected $fillable = [
        'no_order',
        'id_pembeli',
        'tb_barang_id',
        'gambar_barang',
        'nama_barang',
        'harga_barang',
        'berat_barang',
        'qty',
        'sub_total',
        'kategori_barang',
        'keterangan_pesanan',
        'stok_barang',
        'ukuran_gilingan_kopi'
    ];

    protected $guarded = ["id"];
}
