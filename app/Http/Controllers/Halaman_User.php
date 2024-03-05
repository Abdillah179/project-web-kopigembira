<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\category;
use App\Models\ModelUser;
use App\Models\sub_category;
use App\Models\tb_barang;
use App\Models\tb_transaksi;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use function Laravel\Prompts\alert;
use App\Models\tb_rincian_transaksi;
use App\Models\tb_rincian_transaksi_two;
use App\Models\tb_ukuran_gilingan_kopi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Symfony\Component\Routing\Route;


use Illuminate\Auth\Events\Registered;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Pagination\LengthAwarePaginator;

class Halaman_User extends Controller
{
    public function index()
    {
        $barang = DB::table('sub_categories');

        if (request('search')) {
            $search = '%' . request('search') . '%';
            $barang->where(function ($query) use ($search) {
                $query->where('name_category', 'like', $search);
            });
        }

        $barangs = $barang->paginate(8)->withQuerystring();

        return view("Halaman_Product", [
            "judul" => "Product",
            'datacategoryproduk' => category::all(),
            'datasemuacategory' => $barangs
        ]);
    }

    public function DetailsSemuaProducts(sub_category $slug)
    {
        $produk = tb_barang::where('slug_category_barang', $slug->name_category_slug);

        if (request('search')) {
            $search = '%' . request('search') . '%';
            $produk->where(function ($query) use ($search) {
                $query->where('name_barang', 'like', $search);
            });
        }

        $semuaprodukbarang = $produk->latest()->paginate(8)->withQuerystring();

        return view('Halaman_Details_Semua_Products', [
            'judul' => 'Detail Product',
            'dataproducts' => $semuaprodukbarang,
            'datacategoryproduk' => category::all(),
            'datasubcategorybarangfirst' => $slug,
        ]);
    }


    // public function OthersProduct(category $slug)
    // {
    //     $produk = tb_barang::where('slug_category_barang', $slug->name_category_slug);

    //     if (request('search')) {
    //         $search = '%' . request('search') . '%';
    //         $produk->where(function ($query) use ($search) {
    //             $query->where('name_barang', 'like', $search)
    //                 ->orwhere('kategori_barang', 'like', $search)
    //                 ->orwhere('harga_barang', 'like', $search);
    //         });
    //     }

    //     $produks = $produk->latest()->paginate(8)->withQuerystring();

    //     return view('Halaman_Others_Products', [
    //         'judul' => 'Others Product',
    //         'dataothersproducts' => $produks,
    //         'datafirstproducts' => $slug->name_category,
    //         'firstcategory' => $slug->name_category_slug,
    //         'datacategoryproduk' => category::all(),
    //     ]);
    // }

    public function DetailsOneProducts(tb_barang $slug)
    {
        $produk = tb_barang::where('slug_name_barang', $slug->slug_name_barang)->firstorfail();

        $ukurangilingan = tb_ukuran_gilingan_kopi::where('id_ukuran_gilingan', $produk->id_gilingan)->get();

        return view('Halaman_Details_One_Products', [
            'judul' => 'Details Product',
            'datadetailsoneproducts' => $slug,
            'ukurangilingankopi' => $ukurangilingan,
            'datacategoryproduk' => category::all(),
        ]);
    }

    public function ProfileUser()
    {
        return view('Halaman_Profile_User', [
            'judul' => 'Profile User',
            'datacategoryproduk' => category::all(),
        ]);
    }

    public function PostProfileUser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'kota' => 'required',
            'kode_pos' => 'required|numeric',
            'no_telepon' => 'required|numeric',
            'email' => 'required|email:dns',

        ]);

        User::where('id', auth()->user()->id)->update([
            'name' => $request->name,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'kota' => $request->kota,
            'kode_pos' => $request->kode_pos,
            'no_telepon' => $request->no_telepon,
            'email' => $request->email,
        ]);

        return back()->with('profile', 'Update Profile Berhasil');
    }

    public function PostFotoProfileUser(Request $request)
    {
        $request->validate([
            'image' => 'image|file|max:1024'
        ]);

        if ($request->file('image')) {

            $image['profile'] = $request->file('image')->store('profile');
        } else {
            $image['profile'] = 'default.jpg';
        }

        User::where('id', auth()->user()->id)->update([
            'image' => $image['profile'],
        ]);

        return redirect('/profileuser')->with('profile', 'Update Profile Berhasil');
    }

    public function PostCart(Request $request)
    {
        $product = tb_barang::where('id', $request->id_product)->firstorfail();

        if ($product->stok_barang == 0 || $product->stok_barang == null) {
            return redirect('/Products')->with('', '');
        } elseif (request('id_product')) {
            Cart::add(
                [
                    'id' => $product->id,
                    'name' => $product->name_barang,
                    'qty' => 1,
                    'price' => $product->harga_barang,
                    'options' => [
                        'category' => $product->kategori_barang,
                        'gambar_barang' => $product->gambar_barang,
                        'id_kategori_barang' => $product->id_kategori_barang,
                        'berat' => $product->berat_barang,
                        'stok_barang' => $product->stok_barang,
                    ],
                ]

            );
        }

        return redirect('/Products')->with('', '');
    }


    public function PostCartOneProducts(Request $request)
    {
        $productt = tb_barang::where('id', $request->product_id)->firstorfail();

        if ($productt->stok_barang == 0 || $productt->stok_barang == null) {
            return redirect('/Products')->with('', '');
        } elseif ($request->input('qty') > $productt->stok_barang) {
            return redirect('/Product')->with('', '');
        } else {
            Cart::add(
                [
                    'id' => $productt->id,
                    'name' => $productt->name_barang,
                    'qty' => $request->input('qty'),
                    'price' => $productt->harga_barang,
                    'options' => [
                        'category' => $productt->kategori_barang,
                        'gambar_barang' => $productt->gambar_barang,
                        'id_kategori_barang' => $productt->id_kategori_barang,
                        'berat' => $productt->berat_barang,
                        'gilingan' => $request->input('gilingan_kopi'),
                        'stok_barang' => $productt->stok_barang
                    ],
                ]

            );
        }

        return redirect('/Products')->with('', '');
    }

    public function KeranjangBelanja()
    {
        if (!auth()->user()->jenis_kelamin || !auth()->user()->alamat || !auth()->user()->kota || !auth()->user()->kode_pos || !auth()->user()->no_telepon) {
            return back()->with('verif', 'Tolong lengkapi terlebih dahulu alamat, jenis kelamin, kota, kode pos, dan no telepon anda di halaman Profile, Karena Data Tersebut Akan Digunakan Untuk Pengiriman Barang');
        } else {
            if (Cart::count() == 0) {
                return back()->with('gagals', 'Maaf Keranjang Belanja Anda Masih Kosong');
            } else {
                return view('Halaman_Keranjang_Belanja', [
                    'judul' => 'Keranjang Belanja',
                    'datacart' => Cart::content(),
                    'datacategoryproduk' => category::all(),
                    // 'dataprovinsi' => $provinsi,
                    // 'datakota' => $city,
                ]);
            }
        }
    }


    public function HapusKeranjang($id)
    {
        $rowId = $id;
        Cart::remove($rowId);

        return redirect('/Products')->with('', '');
    }


    public function PostCheckout(Request $request)
    {
        $request->validate([
            'nama_penerima' => 'required',
            'tipe_alamat' => 'required',
            'no_handphone_penerima' => 'required|numeric',
            'alamat_lengkap_penerima' => 'required',
            'kecamatan' => 'required',
            'kode_pos' => 'required|numeric',
            'kota' => 'required',
            'provinsi' => 'required',
        ]);

        date_default_timezone_set('Asia/Jakarta');

        tb_transaksi::create([
            'id_pembeli' => auth()->user()->id,
            'no_order' => $request->input('no_order'),
            'tanggal_order' => date("Y-m-d H:i:s"),
            'tipe_alamat' => $request->input('tipe_alamat'),
            'nama_penerima' => $request->input('nama_penerima'),
            'no_handphone_penerima' => $request->input('no_handphone_penerima'),
            'alamat_lengkap_penerima' => $request->input('alamat_lengkap_penerima'),
            'kecamatan' => $request->input('kecamatan'),
            'kode_pos' => $request->input('kode_pos'),
            'kota' => $request->input('kota'),
            'provinsi' => $request->input('provinsi'),
            'total_bayar' => $request->input('total_bayar'),
            'total_berat' => $request->input('total_berat'),
            'status_bayar' => 'Unpaid',
            'status_order' => 0,
        ]);


        foreach (Cart::content() as $items) {

            $string_items_subtotal = $items->subtotal();
            $string_items_subtotall = str_replace(',', '', $string_items_subtotal); // Menghapus koma
            $float_items_subtotalll = (float)$string_items_subtotall; // Mengkonversi ke float

            $data = [
                'no_order' => $request->input('no_order'),
                'id_pembeli' => auth()->user()->id,
                'tb_barang_id' => $items->id,
                'gambar_barang' => $items->options->gambar_barang,
                'nama_barang' => $items->name,
                'harga_barang' => $items->price,
                'berat_barang' => $items->options->berat,
                'qty' => $items->qty,
                'sub_total' => $float_items_subtotalll,
                'kategori_barang' => $items->options->category,
                'keterangan_pesanan' => $request->input('keterangan_pesanan'),
                'stok_barang' => $items->options->stok_barang,
                'ukuran_gilingan_kopi' => $items->options->gilingan,
            ];

            tb_rincian_transaksi::create($data);

            tb_rincian_transaksi_two::create($data);

            $barang = tb_barang::where('id', $items->id)->first();

            $stok = $barang->stok_barang;

            $stokk = $stok - $items->qty;

            tb_barang::where('id', $items->id)->update([
                'stok_barang' => $stokk,
            ]);

            Cart::destroy();
        }

        return redirect('/pesanansaya')->with('success', '');
    }

    public function PesananSaya()
    {
        return view("Halaman_Pesanan_Saya", [
            "judul" => 'Pesanan Saya',
            'datapesananbelumbayar' => tb_transaksi::where('id_pembeli', auth()->user()->id)->where('status_bayar', 'Unpaid')->where('status_order', 0)->get(),
            'datapesananbelumbayarcount' => tb_transaksi::where('id_pembeli', auth()->user()->id)->where('status_bayar', 'Unpaid')->where('status_order', 0)->count(),
            'datapesanansudahbayar' => tb_transaksi::where('id_pembeli', auth()->user()->id)->where('status_bayar', 'Paid')->where('status_order', 0)->get(),
            'datapesanansudahbayarcount' => tb_transaksi::where('id_pembeli', auth()->user()->id)->where('status_bayar', 'Paid')->where('status_order', 0)->count(),
            'datapesanandiproses' => tb_transaksi::where('id_pembeli', auth()->user()->id)->where('status_bayar', 'Paid')->where('status_order', 1)->get(),
            'datapesanandiprosescount' => tb_transaksi::where('id_pembeli', auth()->user()->id)->where('status_bayar', 'Paid')->where('status_order', 1)->count(),
            'datapesanansedangdikirim' => tb_transaksi::where('id_pembeli', auth()->user()->id)->where('status_bayar', 'Paid')->where('status_order', 2)->get(),
            'datapesanansedangdikirimcount' => tb_transaksi::where('id_pembeli', auth()->user()->id)->where('status_bayar', 'Paid')->where('status_order', 2)->count(),
            'datapesananditerima' => tb_transaksi::where('id_pembeli', auth()->user()->id)->where('status_bayar', 'Paid')->where('status_order', 3)->get(),
            'datapesanandibatalkan' => tb_transaksi::where('id_pembeli', auth()->user()->id)->where('status_order', 4)->get(),
            'datapesanandibatalkancount' => tb_transaksi::where('id_pembeli', auth()->user()->id)->where('status_order', 4)->count(),
            'datacategoryproduk' => category::all(),
        ]);
    }


    public function DetailOrderAlamatBarang(tb_transaksi $detail)
    {
        return view("Halaman_Detail_Order_Alamat", [
            'judul' => 'Detail Order Alamat',
            'dataalamat' => $detail,
            'datacategoryproduk' => category::all(),
        ]);
    }

    public function HapusPesananSaya(tb_transaksi $hapus)
    {
        tb_transaksi::where('no_order', $hapus->no_order)->update([
            'status_order' => 4
        ]);

        $rinciantransaksi = tb_rincian_transaksi::where('no_order', $hapus->no_order)->get();

        foreach ($rinciantransaksi as $rinci) {

            $qty = $rinci->qty;

            $barang = tb_barang::where('id', $rinci->tb_barang_id)->first();

            $barangg = $barang->stok_barang;

            tb_barang::where('id', $rinci->tb_barang_id)->update([
                'stok_barang' => $barangg + $qty,
            ]);
        }

        tb_rincian_transaksi::where('no_order', $hapus->no_order)->delete();

        return redirect('/pesanansaya')->with('', '');
    }


    public function PostEditDetailOrderAlamatUser(tb_transaksi $alamat, Request $request)
    {
        $request->validate([
            'nama_penerima' => 'required',
            'tipe_alamat' => 'required',
            'no_handphone_penerima' => 'required|numeric',
            'alamat_lengkap_penerima' => 'required',
            'kecamatan' => 'required',
            'kode_pos' => 'required|numeric',
            'kota' => 'required',
            'provinsi' => 'required',
        ]);

        $alamat->update([
            'nama_penerima' => $request->input('nama_penerima'),
            'tipe_alamat' => $request->input('tipe_alamat'),
            'no_handphone_penerima' => $request->input('no_handphone_penerima'),
            'alamat_lengkap_penerima' => $request->input('alamat_lengkap_penerima'),
            'kecamatan' => $request->input('kecamatan'),
            'kode_pos' => $request->input('kode_pos'),
            'kota' => $request->input('kota'),
            'provinsi' => $request->input('provinsi'),
        ]);

        return redirect('/pesanansaya')->with('', '');
    }


    public function DetailOrderPesananBarang(tb_transaksi $barang)
    {
        return view("Halaman_Detail_Order_Pesanan_Barang", [
            'judul' => 'Halaman Detail Order Pesanan Barang',
            'dataproductbarang' => tb_rincian_transaksi_two::where('no_order', $barang->no_order)->where('id_pembeli', auth()->user()->id)->get(),
            'dataproductbarangcount' => tb_transaksi::where('no_order', $barang->no_order)->first(),
            'datacategoryproduk' => category::all(),
        ]);
    }


    public function OthersCategoryProducts(category $slug)
    {
        $category = sub_category::where('category', $slug->name_category_slug);

        if (request('search')) {
            $search = "%" . request("search") . "%";
            $category->where(function ($query) use ($search) {
                $query->where("name_category", "like", "%" . $search . "%");
            });
        }

        $categoryy = $category->latest()->paginate(8);

        return view("Halaman_Others_Category_Products", [
            'judul' => 'Others Category Product',
            'dataotherscategoryproducts' => $categoryy,
            'datacategoryproduk' => category::all(),
            'dataothers' => $slug

        ]);
    }


    public function TambahOngkirPesanan(tb_transaksi $slugorder)
    {
        $response = Http::withHeaders([
            'key' => '9f805fa63bac4951f5a3af0863750cb6'
        ])->get('https://api.rajaongkir.com/starter/province');

        $provinsi = $response->json()['rajaongkir']['results'];

        $responses = Http::withHeaders([
            'key' => '9f805fa63bac4951f5a3af0863750cb6'
        ])->get('https://api.rajaongkir.com/starter/city');

        $city = $responses->json()['rajaongkir']['results'];

        return view("Halaman_Tambah_Ongkir", [
            'judul' => 'Halaman Tambah Ongkir',
            'dataorder' => $slugorder,
            'datacategoryproduk' => category::all(),
            'city' => $city,
            'provinsi' => $provinsi
        ]);
    }


    public function PostTambahOngkir(Request $request, tb_transaksi $slugorder)
    {
        if (!isset($_POST['submit'])) {
            return back()->with('error', '');
        } else {
            $response = Http::withHeaders([
                'key' => '9f805fa63bac4951f5a3af0863750cb6'
            ])->get('https://api.rajaongkir.com/starter/province');

            $provinsi = $response->json()['rajaongkir']['results'];

            $responses = Http::withHeaders([
                'key' => '9f805fa63bac4951f5a3af0863750cb6'
            ])->get('https://api.rajaongkir.com/starter/city');

            $city = $responses->json()['rajaongkir']['results'];

            $responses_cost = Http::withHeaders([
                'key' => '9f805fa63bac4951f5a3af0863750cb6'
            ])->post('https://api.rajaongkir.com/starter/cost', [
                "origin" => "171",
                "destination" => $request->input('destination'),
                "weight" => $request->input('total_berat'),
                "courier" => $request->input('courier')
            ]);

            $responsess = $responses_cost->json()['rajaongkir']['results'];

            return view("Halaman_Post_Tambah_Ongkir", [
                'judul' => 'Halaman Tambah Ongkir',
                'dataorder' => $slugorder,
                'datacategoryproduk' => category::all(),
                'city' => $request->input('destination'),
                'provinsi' => $request->input('province'),
                'courier' => $request->input('courier'),
                'cost' => $responsess,
                'origin' => 171,
                'destination' => $request->input('destination')
            ]);
        }
    }


    public function PostPilihanTambahOngkir(Request $request, tb_transaksi $sluggable)
    {
        $tbtransaksi = tb_transaksi::where('no_order', $sluggable->no_order)->firstorfail();

        $total_keseluruhan = $tbtransaksi->total_bayar;

        $total_bayar_keseluruhan = $total_keseluruhan + $request->input('total_ongkir');

        $sluggable->update([
            'origin' => $request->input('origin'),
            'destination' => $request->input('destination'),
            'courier' => $request->input('courier'),
            'total_ongkir' => $request->input('total_ongkir'),
            'etd' => $request->input('etd'),
            'service' => $request->input('service'),
            'description' => $request->input('description'),
            'total_bayar_keseluruhan' => $total_bayar_keseluruhan,

        ]);

        return redirect('/pesanansaya')->with('success', '');
    }


    public function LihatDetailOngkir(tb_transaksi $detailongkir)
    {
        $responses = Http::withHeaders([
            'key' => '9f805fa63bac4951f5a3af0863750cb6'
        ])->get('https://api.rajaongkir.com/starter/city');

        $city = collect($responses['rajaongkir']['results'])->where('city_id', $detailongkir->destination)->first();


        return view('Halaman_Detail_Ongkir_Barang', [
            'judul' => 'Detail Ongkir Barang',
            'dataongkir' => $detailongkir,
            'datacategoryproduk' => category::all(),
            'destination' => $city
        ]);
    }


    public function Pembayaran(tb_transaksi $bayar)
    {


        $responses = Http::withHeaders([
            'key' => '9f805fa63bac4951f5a3af0863750cb6'
        ])->get('https://api.rajaongkir.com/starter/city');

        $city = collect($responses['rajaongkir']['results'])->where('city_id', $bayar->destination)->first();

        //SAMPLE REQUEST START HERE

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.MIDTRANS_SERVER_KEY');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => $bayar->id,
                'gross_amount' => $bayar->total_bayar_keseluruhan,
            ),
            'customer_details' => array(
                'name' => $bayar->nama_penerima,
                'email' => $bayar->email,
                'phone' => $bayar->no_handphone_penerima,
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);


        $datarinciantransaksi = tb_rincian_transaksi::where('no_order', $bayar->no_order)->get();

        return view("Halaman_Pembayaran", [
            "judul" => 'Pesanan Saya',
            'datapembayaran' => $bayar,
            'datarincibarang' => $datarinciantransaksi,
            'datacategoryproduk' => category::all(),
            'snapToken' => $snapToken,
            'city' => $city,
        ]);
    }


    public function callback(Request $request)
    {
        $serverKey = config('midtrans.MIDTRANS_SERVER_KEY');
        $hashed = hash('sha512', $request->order_id . $request->status_code . $request->gross_amount . $serverKey);
        if ($hashed == $request->signature_key) {
            if ($request->transaction_status == 'capture') {
                $order = tb_transaksi::find($request->order_id);

                $order->update([
                    'status_bayar' => 'Paid'
                ]);
            }
        }
    }


    public function TerimaBarang(tb_transaksi $terimabrg)
    {
        return view("Halaman_Terima_Barang_Pesanan", [
            'judul' => 'Halaman Terima Barang',
            'data' => $terimabrg,
            'datacategoryproduk' => category::all(),
        ]);
    }


    public function PostTerimaBarang(Request $request, tb_transaksi $foto)
    {
        $request->validate([
            'bukti_diterima' => 'required|image|file|max:1024'
        ]);


        if ($request->file('bukti_diterima')) {

            $bukti['bukti_diterima'] = $request->file('bukti_diterima')->store('bukti_diterima');
        }

        $foto->update([
            'bukti_diterima' => $bukti['bukti_diterima'],
            'status_order' => 3
        ]);

        return redirect('/pesanansaya');
    }


    public function NilaiPesanan(tb_transaksi $nilai)
    {
        return view("Halaman_Nilai_Pesanan_User", [
            'judul' => 'Halaman Nilai Pesanan',
            'datapsn' => $nilai,
            'datacategoryproduk' => category::all(),
        ]);
    }


    public function PostPenilaianBarang(Request $request, tb_transaksi $penilaian)
    {
        $request->validate([
            'penilaian_barang' => 'required'
        ]);

        $penilaian->update([
            'penilaian_barang' => $request->penilaian_barang,
        ]);

        return redirect('/pesanansaya');
    }
}
