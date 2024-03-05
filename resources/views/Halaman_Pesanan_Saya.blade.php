<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ $judul }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{ asset('coffe-template/images/bg_3.jpg') }}">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('coffe-template/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('coffe-template/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('coffe-template/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('coffe-template/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('coffe-template/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('coffe-template/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('coffe-template/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('coffe-template/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('coffe-template/css/jquery.timepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('coffe-template/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('coffe-template/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('coffe-template/css/style.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.html">Kopi<small>Gembira</small></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="room.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Products</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                            <a class="dropdown-item" href="/Products">All Products</a>
                            @foreach($datacategoryproduk as $dtctprdk)
                            <a class="dropdown-item" href="/othersproducts/{{ $dtctprdk->name_category_slug }}">{{ $dtctprdk->name_category }}</a>
                            @endforeach
                        </div>
                    </li>
                    <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="room.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ auth()->user()->name}}

                            @if(auth()->user()->image == 'default.jpg')

                            <img src="{{ asset('storage/no_image/' . auth()->user()->image) }}" alt="" height="20px" class="rounded-circle">

                            @else

                            <img src="{{ asset('storage/' . auth()->user()->image) }}" alt="" height="20px" class="rounded-circle">

                            @endif
                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                            <a class="dropdown-item" href="/profileuser">Profile</a>
                            <a class="dropdown-item" href="/logout">Logout</a>
                        </div>
                    </li>
                    <li class="nav-item"><a href="/pesanansaya" class="nav-link">Pesanan Saya</a></li>
                    <li class="nav-item cart"><a href="/Keranjang" class="nav-link"><span class="icon icon-shopping_cart"></span><span class="bag d-flex justify-content-center align-items-center"><small>{{ Cart::count() }}</small></span></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <section class="home-slider owl-carousel">

        <div class="slider-item" style="background-image: url(coffe-template/images/bg_3.jpg);" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">

                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-3 mt-5 bread">Pesanan Saya</h1>
                    </div>

                </div>
            </div>
        </div>
    </section>
    @if(session()->has('profile'))
    <div class="container mt-5">
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>{{ session('profile') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>

    @endif

    <section class="ftco-section ftco-cart">
        <div class="container">
            <div class="container">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <i class="fa-solid fa-triangle-exclamation"></i><strong style="font-weight: 600; margin-left:10px;">Peringatan !!! </strong> Batalkan Pesanan Hanya Bisa Dilakukan Ketika Belum Membayar, Jika Sudah Membayar Maka Pesanan Sudah Tidak Bisa Dibatalkan
                </div>
            </div>
            <div class="row d-md-flex">
                <div class="col-lg-12 ftco-animate p-md-5">
                    <div class="row">
                        <div class="col-md-12 nav-link-wrap mb-5">
                            <div class="nav ftco-animate nav-pills justify-content-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Belum Bayar ({{ $datapesananbelumbayarcount }})</a>

                                <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Sudah Bayar ({{ $datapesanansudahbayarcount }})</a>

                                <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Sudah Di Proses ({{ $datapesanandiprosescount }})</a>

                                <a class="nav-link" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false">Sedang Dikirim ({{ $datapesanansedangdikirimcount }})</a>

                                <a class="nav-link" id="v-pills-5-tab" data-toggle="pill" href="#v-pills-5" role="tab" aria-controls="v-pills-5" aria-selected="false">Diterima</a>

                                <a class="nav-link" id="v-pills-6-tab" data-toggle="pill" href="#v-pills-6" role="tab" aria-controls="v-pills-6" aria-selected="false">Pesanan Dibatalkan ({{ $datapesanandibatalkancount }})</a>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex align-items-center">

                            <div class="tab-content ftco-animate" id="v-pills-tabContent">

                                <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
                                    <div class="row">
                                        <div class="col-md-12 ftco-animate">
                                            <div class="cart-list">
                                                <table class="table">
                                                    <thead class="thead-primary">
                                                        <tr class="text-center">
                                                            <th>No Order</th>
                                                            <th>Tanggal Order</th>
                                                            <th>Nama Pembeli</th>
                                                            <th>Total Bayar</th>
                                                            <th>Detail Order Alamat Barang</th>
                                                            <th>Detail Order Barang</th>
                                                            <th>Detail Ongkir Barang</th>
                                                            <th>Status Pesanan</th>
                                                            <th>Action</th>
                                                            <th>Batalkan Pesanan</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        @foreach($datapesananbelumbayar as $dtpsnblmbyr)
                                                        <tr class="text-center">

                                                            <td class="image-prod">
                                                                <p>{{ $dtpsnblmbyr->no_order }}</p>
                                                            </td>

                                                            <td class="product-name">
                                                                <h3>{{ $dtpsnblmbyr->tanggal_order }}</h3>
                                                            </td>

                                                            <td class="price" name="harga_barang">{{ $dtpsnblmbyr->nama_penerima }}</td>

                                                            <td class="quantity">
                                                                @php

                                                                $string_total_bayar = $dtpsnblmbyr->total_bayar;
                                                                $string_total_bayarr = str_replace(',', '', $string_total_bayar); // Menghapus koma
                                                                $float_total_bayarrr = (float)$string_total_bayarr; // Mengkonversi ke float

                                                                @endphp


                                                                @if($dtpsnblmbyr->total_ongkir)

                                                                <p>Rp. {{ $float_total_bayarrr + $dtpsnblmbyr->total_ongkir }}</p>

                                                                @elseif($dtpsnblmbyr->total_ongkir == null)

                                                                <p>Rp. {{ $float_total_bayarrr }}</p>
                                                                @else
                                                                @endif


                                                            </td>
                                                            <td class="keterangan_pesanan">
                                                                <a href="/detailorderalamatbarang/{{ $dtpsnblmbyr->no_order }}" class="btn btn-primary">Detail</a>
                                                            </td>
                                                            <td class="keterangan_pesanan">
                                                                <a href="/detailorderpesananbarang/{{ $dtpsnblmbyr->no_order }}" class="btn btn-primary">Detail</a>
                                                            </td>
                                                            @if(!$dtpsnblmbyr->origin && !$dtpsnblmbyr->destination && !$dtpsnblmbyr->weight && !$dtpsnblmbyr->courier)
                                                            <td></td>
                                                            @elseif($dtpsnblmbyr->origin || $dtpsnblmbyr->destination || $dtpsnblmbyr->weight || $dtpsnblmbyr->courier)
                                                            <td>
                                                                <a href="/lihatdetailongkir/{{ $dtpsnblmbyr->no_order }}" class="btn btn-primary">Lihat Detail Ongkir</a>
                                                            </td>
                                                            @else
                                                            @endif
                                                            <td class="keterangan_pesanan">
                                                                @if($dtpsnblmbyr->status_bayar == 'Unpaid')
                                                                <span class="badge text-bg-primary" style="font-size: 17px;">Belum Bayar</span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                @if(!$dtpsnblmbyr->origin && !$dtpsnblmbyr->destination && !$dtpsnblmbyr->weight && !$dtpsnblmbyr->courier)
                                                                <a href="/tambahongkir/{{ $dtpsnblmbyr->no_order }}" class="btn btn-primary">Tambahkan Ongkir</a>
                                                                @elseif($dtpsnblmbyr->origin || $dtpsnblmbyr->destination || $dtpsnblmbyr->weight || $dtpsnblmbyr->courier)
                                                                <!-- <form action="/pembayaran/{{  $dtpsnblmbyr->no_order }}" method="post">
                                                                    @csrf

                                                                    <button type="submit" class="btn btn-white p-3">Bayar</button>
                                                                </form> -->
                                                                <a href="/pembayaran/{{  $dtpsnblmbyr->no_order }}" class="btn btn-white">Bayar</a>
                                                                @else
                                                                @endif
                                                            </td>
                                                            <form action="/hapuspesanansaya/{{ $dtpsnblmbyr->no_order }}" method="post">
                                                                @csrf
                                                                @method('delete')

                                                                <td class="product-remove"><button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Membatalkan Pesanan ?')" style="padding:10px;">Batal</button></td>
                                                            </form>

                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade show" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
                                    <div class="row">
                                        <div class="col-md-12 ftco-animate">
                                            <div class="cart-list">
                                                <table class="table">
                                                    <thead class="thead-primary">
                                                        <tr class="text-center">
                                                            <th>No Order</th>
                                                            <th>Tanggal Order</th>
                                                            <th>Nama Pembeli</th>
                                                            <th>Total Bayar</th>
                                                            <th>Detail Order Alamat Barang</th>
                                                            <th>Detail Order Barang</th>
                                                            <th>Detail Ongkir Barang</th>
                                                            <th>Status Pesanan</th>
                                                            <th>Action</th>
                                                            <th>Batalkan Pesanan</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        @foreach($datapesanansudahbayar as $dtpsnsdhbyr)
                                                        <tr class="text-center">

                                                            <td class="image-prod">
                                                                <p>{{ $dtpsnsdhbyr->no_order }}</p>
                                                            </td>

                                                            <td class="product-name">
                                                                <h3>{{ $dtpsnsdhbyr->tanggal_order }}</h3>
                                                            </td>

                                                            <td class="price" name="harga_barang">{{ $dtpsnsdhbyr->nama_penerima }}</td>

                                                            <td class="quantity">
                                                                <p>Rp. {{ $dtpsnsdhbyr->total_bayar_keseluruhan }}</p>
                                                            </td>
                                                            <td class="keterangan_pesanan">
                                                                <a href="/detailorderalamatbarang/{{ $dtpsnsdhbyr->no_order }}" class="btn btn-primary">Detail</a>
                                                            </td>
                                                            <td class="keterangan_pesanan">
                                                                <a href="/detailorderpesananbarang/{{ $dtpsnsdhbyr->no_order }}" class="btn btn-primary">Detail</a>
                                                            </td>
                                                            <td>
                                                                <a href="/lihatdetailongkir/{{ $dtpsnsdhbyr->no_order }}" class="btn btn-primary">Lihat Detail Ongkir</a>
                                                            </td>

                                                            <td class="keterangan_pesanan">
                                                                @if($dtpsnsdhbyr->status_bayar == 'Paid')
                                                                <span class="badge text-bg-primary" style="font-size: 17px;">Sudah Bayar</span>
                                                                <span class="badge text-bg-primary" style="font-size: 17px;">Menunggu Diproses...</span>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade show" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
                                    <div class="row">
                                        <div class="col-md-12 ftco-animate">
                                            <div class="cart-list">
                                                <table class="table">
                                                    <thead class="thead-primary">
                                                        <tr class="text-center">
                                                            <th>No Order</th>
                                                            <th>Tanggal Order</th>
                                                            <th>Nama Pembeli</th>
                                                            <th>Total Bayar</th>
                                                            <th>Detail Order Alamat Barang</th>
                                                            <th>Detail Order Barang</th>
                                                            <th>Detail Ongkir Barang</th>
                                                            <th>Status Pesanan</th>
                                                            <th>Action</th>
                                                            <th>Batalkan Pesanan</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        @foreach($datapesanandiproses as $dtpsndprs)
                                                        <tr class="text-center">

                                                            <td class="image-prod">
                                                                <p>{{ $dtpsndprs->no_order }}</p>
                                                            </td>

                                                            <td class="product-name">
                                                                <h3>{{ $dtpsndprs->tanggal_order }}</h3>
                                                            </td>

                                                            <td class="price" name="harga_barang">{{ $dtpsndprs->nama_penerima }}</td>

                                                            <td class="quantity">
                                                                <p>Rp. {{ $dtpsndprs->total_bayar_keseluruhan }}</p>
                                                            </td>
                                                            <td class="keterangan_pesanan">
                                                                <a href="/detailorderalamatbarang/{{ $dtpsndprs->no_order }}" class="btn btn-primary">Detail</a>
                                                            </td>
                                                            <td class="keterangan_pesanan">
                                                                <a href="/detailorderpesananbarang/{{ $dtpsndprs->no_order }}" class="btn btn-primary">Detail</a>
                                                            </td>
                                                            <td>
                                                                <a href="/lihatdetailongkir/{{ $dtpsndprs->no_order }}" class="btn btn-primary">Lihat Detail Ongkir</a>
                                                            </td>

                                                            <td class="keterangan_pesanan">
                                                                @if($dtpsndprs->status_bayar == 'Paid')
                                                                <span class="badge text-bg-primary" style="font-size: 17px;">Pesanan Sudah Diproses</span>
                                                                <span class="badge text-bg-primary" style="font-size: 17px;">Menunggu Untuk Dikirim...</span>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade show" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-4-tab">
                                    <div class="row">
                                        <div class="col-md-12 ftco-animate">
                                            <div class="cart-list">
                                                <table class="table">
                                                    <thead class="thead-primary">
                                                        <tr class="text-center">
                                                            <th>No Order</th>
                                                            <th>Tanggal Order</th>
                                                            <th>Nama Pembeli</th>
                                                            <th>Total Bayar</th>
                                                            <th>Detail Order Alamat Barang</th>
                                                            <th>Detail Order Barang</th>
                                                            <th>Detail Ongkir Barang</th>
                                                            <th>Status Pesanan</th>
                                                            <th>Action</th>
                                                            <th>Batalkan Pesanan</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        @foreach($datapesanansedangdikirim as $dtpsnsdgdrm)
                                                        <tr class="text-center">

                                                            <td class="image-prod">
                                                                <p>{{ $dtpsnsdgdrm->no_order }}</p>
                                                            </td>

                                                            <td class="product-name">
                                                                <h3>{{ $dtpsnsdgdrm->tanggal_order }}</h3>
                                                            </td>

                                                            <td class="price" name="harga_barang">{{ $dtpsnsdgdrm->nama_penerima }}</td>

                                                            <td class="quantity">
                                                                <p>Rp. {{ $dtpsnsdgdrm->total_bayar_keseluruhan }}</p>
                                                            </td>
                                                            <td class="keterangan_pesanan">
                                                                <a href="/detailorderalamatbarang/{{ $dtpsnsdgdrm->no_order }}" class="btn btn-primary">Detail</a>
                                                            </td>
                                                            <td class="keterangan_pesanan">
                                                                <a href="/detailorderpesananbarang/{{ $dtpsnsdgdrm->no_order }}" class="btn btn-primary">Detail</a>
                                                            </td>
                                                            <td>
                                                                <a href="/lihatdetailongkir/{{ $dtpsnsdgdrm->no_order }}" class="btn btn-primary">Lihat Detail Ongkir</a>
                                                            </td>

                                                            <td class="keterangan_pesanan">
                                                                @if($dtpsnsdgdrm->status_bayar == 'Paid' && $dtpsnsdgdrm->status_order == 2)
                                                                <span class="badge text-bg-primary" style="font-size: 17px;">Pesanan Sedang Dikirim</span>
                                                                <span class="badge text-bg-primary" style="font-size: 17px;">Menunggu Untuk Diterima...</span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <a href="/terimabarang/{{ $dtpsnsdgdrm->no_order }}" class="btn btn-primary">Terima Barang</a>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade show" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-5-tab">
                                    <div class="row">
                                        <div class="col-md-12 ftco-animate">
                                            <div class="cart-list">
                                                <table class="table">
                                                    <thead class="thead-primary">
                                                        <tr class="text-center">
                                                            <th>No Order</th>
                                                            <th>Tanggal Order</th>
                                                            <th>Nama Pembeli</th>
                                                            <th>Total Bayar</th>
                                                            <th>Detail Order Alamat Barang</th>
                                                            <th>Detail Order Barang</th>
                                                            <th>Detail Ongkir Barang</th>
                                                            <th>Status Pesanan</th>
                                                            <th>Action</th>
                                                            <th>Batalkan Pesanan</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        @foreach($datapesananditerima as $dtpsndtrm)
                                                        <tr class="text-center">

                                                            <td class="image-prod">
                                                                <p>{{ $dtpsndtrm->no_order }}</p>
                                                            </td>

                                                            <td class="product-name">
                                                                <h3>{{ $dtpsndtrm->tanggal_order }}</h3>
                                                            </td>

                                                            <td class="price" name="harga_barang">{{ $dtpsndtrm->nama_penerima }}</td>

                                                            <td class="quantity">
                                                                <p>Rp. {{ $dtpsndtrm->total_bayar_keseluruhan }}</p>
                                                            </td>
                                                            <td class="keterangan_pesanan">
                                                                <a href="/detailorderalamatbarang/{{ $dtpsndtrm->no_order }}" class="btn btn-primary">Detail</a>
                                                            </td>
                                                            <td class="keterangan_pesanan">
                                                                <a href="/detailorderpesananbarang/{{ $dtpsndtrm->no_order }}" class="btn btn-primary">Detail</a>
                                                            </td>
                                                            <td>
                                                                <a href="/lihatdetailongkir/{{ $dtpsndtrm->no_order }}" class="btn btn-primary">Lihat Detail Ongkir</a>
                                                            </td>

                                                            <td class="keterangan_pesanan">
                                                                @if($dtpsndtrm->status_bayar == 'Paid' && $dtpsndtrm->status_order == 3)
                                                                <span class="badge text-bg-primary" style="font-size: 17px;">Pesanan Sudah Diterima</span>
                                                                <span class="badge text-bg-primary" style="font-size: 17px;">Pesanan Selesai...</span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <a href="/nilaipesanan/{{ $dtpsndtrm->no_order }}" class="btn btn-primary">Nilai Pesanan</a>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade show" id="v-pills-6" role="tabpanel" aria-labelledby="v-pills-6-tab">
                                    <div class="row">
                                        <div class="col-md-12 ftco-animate">
                                            <div class="cart-list">
                                                <table class="table">
                                                    <thead class="thead-primary">
                                                        <tr class="text-center">
                                                            <th>No Order</th>
                                                            <th>Tanggal Dibatalkan</th>
                                                            <th>Nama Pembeli</th>
                                                            <th>Total Bayar</th>
                                                            <th>Detail Order Alamat Barang</th>
                                                            <th>Detail Order Barang</th>
                                                            <th>Status Pesanan</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        @foreach($datapesanandibatalkan as $dtpsndbtlkn)
                                                        <tr class="text-center">

                                                            <td class="image-prod">
                                                                <p>{{ $dtpsndbtlkn->no_order }}</p>
                                                            </td>

                                                            <td class="product-name">
                                                                <h3>{{ $dtpsndbtlkn->tanggal_order }}</h3>
                                                            </td>

                                                            <td class="price" name="harga_barang">{{ $dtpsndbtlkn->nama_penerima }}</td>

                                                            <td class="quantity">
                                                                @php

                                                                $string_total_bayar = $dtpsndbtlkn->total_bayar;
                                                                $string_total_bayarr = str_replace(',', '', $string_total_bayar); // Menghapus koma
                                                                $float_total_bayarrr = (float)$string_total_bayarr; // Mengkonversi ke float

                                                                @endphp

                                                                <p>Rp. {{ $float_total_bayarrr }}</p>
                                                            </td>
                                                            <td class="keterangan_pesanan">
                                                                <a href="/detailorderalamatbarang/{{ $dtpsndbtlkn->no_order }}" class="btn btn-primary">Detail</a>
                                                            </td>
                                                            <td class="keterangan_pesanan">
                                                                <a href="/detailorderpesananbarang/{{ $dtpsndbtlkn->no_order }}" class="btn btn-primary">Detail</a>
                                                            </td>

                                                            <td>
                                                                <h3>Dibatalkan</h3>
                                                            </td>

                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="ftco-footer ftco-section img">
        <div class="overlay"></div>
        <div class="container">

            <div class="row">
                <div class="col-md-12 text-center">

                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
            </div>
        </div>
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>


    <script src="{{ asset('coffe-template/js/jquery.min.js') }}"></script>
    <script src="{{ asset('coffe-template/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('coffe-template/js/popper.min.js') }}"></script>
    <script src="{{ asset('coffe-template/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('coffe-template/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('coffe-template/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('coffe-template/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('coffe-template/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('coffe-template/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('coffe-template/js/aos.js') }}"></script>
    <script src="{{ asset('coffe-template/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('coffe-template/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('coffe-template/js/jquery.timepicker.min.js') }}"></script>
    <script src="{{ asset('coffe-template/js/scrollax.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{ asset('coffe-template/js/google-map.js') }}"></script>
    <script src="{{ asset('coffe-template/js/main.js') }}"></script>

    <script>
        $(document).ready(function() {

            var quantitiy = 0;
            $('.quantity-right-plus').click(function(e) {

                // Stop acting like a button
                e.preventDefault();
                // Get the field name
                var quantity = parseInt($('#quantity').val());

                // If is not undefined

                $('#quantity').val(quantity + 1);


                // Increment

            });

            $('.quantity-left-minus').click(function(e) {
                // Stop acting like a button
                e.preventDefault();
                // Get the field name
                var quantity = parseInt($('#quantity').val());

                // If is not undefined

                // Increment
                if (quantity > 0) {
                    $('#quantity').val(quantity - 1);
                }
            });

        });
    </script>

</body>

</html>