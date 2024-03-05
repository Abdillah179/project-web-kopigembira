<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_transaksi extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_pembeli',
        'no_order',
        'tanggal_order',
        'tipe_alamat',
        'nama_penerima',
        'no_handphone_penerima',
        'alamat_lengkap_penerima',
        'kecamatan',
        'kode_pos',
        'kota',
        'provinsi',
        'total_bayar',
        'total_berat',
        'status_bayar',
        'status_order',
        'origin',
        'destination',
        'courier',
        'total_ongkir',
        'etd',
        'service',
        'description',
        'total_bayar_keseluruhan',
        'bukti_diterima',
        'penilaian_barang'
    ];

    protected $guarded = ["id"];
}
