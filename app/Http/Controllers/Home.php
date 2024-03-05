<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\Post;
use App\Models\User;
use App\Models\ModelUser;
use App\Models\sub_category;
use App\Models\tb_barang;
use App\Models\tb_ukuran_gilingan_kopi;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\Routing\Route;
use Illuminate\Auth\Events\Registered;
use Illuminate\Pagination\LengthAwarePaginator;


class Home extends Controller
{
    public function index()
    {
        return view("home", [
            "judul" => 'Kopi Gembira',
            'databarangcoffe' => sub_category::where('id_kategori', 1)->paginate(8)->withQuerystring(),
            'databarangteaandbeverage' => sub_category::where('id_kategori', 2)->paginate(8)->withQuerystring(),
            'databaranggrinders' => sub_category::where('id_kategori', 3)->paginate(8)->withQuerystring(),
            'databarangcoffeemachines' => sub_category::where('id_kategori', 4)->paginate(8)->withQuerystring(),
            'databarangmanualbrewers' => sub_category::where('id_kategori', 5)->paginate(8)->withQuerystring(),
            'databarangcoffeetools' => sub_category::where('id_kategori', 6)->paginate(8)->withQuerystring(),
        ]);
    }

    public function DetailsProductBarang(sub_category $barang)
    {
        return view("Details_Product_Barang", [
            "judul" => 'Kopi Gembira',
            'databarang' => tb_barang::where('slug_category_barang', $barang->name_category_slug)->latest()->paginate(8)->withQuerystring(),
            'subcategorybarangfirst' => $barang
        ]);
    }


    public function DetailsProductBarangHome(tb_barang $detailbarang)
    {
        $barang = tb_barang::where('slug_name_barang', $detailbarang->slug_name_barang)->first();

        $ukurangilingan = tb_ukuran_gilingan_kopi::where('id_ukuran_gilingan', $barang->id_gilingan)->get();

        return view("Details_Product_Barang_Home", [
            "judul" => 'Kopi Gembira',
            'detaildatabarang' => $detailbarang,
            'ukurangilingankopi' => $ukurangilingan,
        ]);
    }
}
