<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_barang extends Model
{
    use HasFactory;


    // app/Models/Product.php

    public function totalSold()
    {
        return $this->hasMany(tb_rincian_transaksi::class)->sum('qty');
    }
}
