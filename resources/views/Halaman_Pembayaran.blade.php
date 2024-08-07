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

    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.MIDTRANS_CLIENT_KEY') }}"></script>

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
                            <a class="dropdown-item" href="/otherscategoryproducts/{{ $dtctprdk->name_category_slug }}">{{ $dtctprdk->name_category }}</a>
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
                    <li class="nav-item"><a href="contact.html" class="nav-link">Pesanan Saya</a></li>
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
                        <h1 class="mb-3 mt-5 bread">Halaman Pembayaran</h1>
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
            <div class="row">
                <div class="col-md-12 ftco-animate">
                    <div class="cart-list">
                        <!-- <input type="hidden" name="id_pembeli" value="{{ auth()->user()->id }}"> -->
                        <table class="table">
                            <thead class="thead-primary">
                                <tr class="text-center">
                                    <th>&nbsp;</th>
                                    <th>&nbsp;</th>
                                    <th>Product</th>
                                    <th>Berat Satuan Produk</th>
                                    <th>Stok Produk</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Ukuran Gilingan</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($datarincibarang as $dtrncbrg)

                                <tr class="text-center">
                                    <td></td>



                                    <td class="image-prod">
                                        <img src="{{ asset('image-product-barang/' . $dtrncbrg->gambar_barang) }}" alt="" height=70px>
                                    </td>

                                    <td class="product-name">
                                        <h3>{{ $dtrncbrg->nama_barang }}</h3>
                                        <p>{{ $dtrncbrg->kategori_barang }}</p>
                                    </td>

                                    <td>
                                        <h3>{{ $dtrncbrg->berat_barang }}gr</h3>
                                    </td>

                                    <td>
                                        <h3>{{ $dtrncbrg->stok_barang }}</h3>
                                    </td>

                                    <td class="price" name="price" value="{{ $dtrncbrg->harga_barang }}">Rp. {{ $dtrncbrg->harga_barang }}</td>

                                    <td class="quantity">
                                        <h3>{{ $dtrncbrg->qty }}</h3>
                                    </td>
                                    <td class="ukuran_gilingan">
                                        <h3>{{ $dtrncbrg->ukuran_gilingan_kopi }}</h3>
                                    </td>
                                    <td class="total">
                                        <h3>Rp. {{ $dtrncbrg->sub_total }}</h3>
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row justify-content-end">
                <div class="col-xl-8 ftco-animate mt-5">
                    <h3 class="mb-4 billing-heading">Alamat Pengiriman Barang</h3>
                    <div class="row align-items-end">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="firstname">Nama Penerima</label>
                                <input type="text" class="form-control" name="nama_penerima" value="{{ $datapembayaran->nama_penerima }}" readonly>
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="country">Tipe Alamat</label>
                                <input type="text" class="form-control" name="nama_penerima" value="{{ $datapembayaran->tipe_alamat }}" readonly>
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="phone">No Telepon</label>
                                <input type="text" class="form-control" placeholder="" name="no_handphone_penerima" value="{{ $datapembayaran->no_handphone_penerima }}" readonly>
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="streetaddress">Alamat Lengkap</label>
                                <input type="text" class="form-control" placeholder="" name="alamat_lengkap_penerima" value="{{ $datapembayaran->alamat_lengkap_penerima }}" readonly>
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="towncity">Kecamatan</label>
                                <input type="text" class="form-control" placeholder="" name="kecamatan" value="{{ $datapembayaran->kecamatan }}" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="postcodezip">Kode Pos</label>
                                <input type="text" class="form-control" placeholder="" name="kode_pos" value="{{ $datapembayaran->kode_pos }}" readonly>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="emailaddress">kota</label>
                                <input type="text" class="form-control" placeholder="" name="kota" value="{{ $datapembayaran->kota }}" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="country">Provinsi</label>
                                <input type="text" class="form-control" placeholder="" name="provinsi" value="{{ $datapembayaran->provinsi }}" readonly>
                            </div>
                        </div>
                        <div class=" w-100">
                        </div>
                    </div>
                </div>
                <div class="col col-lg-3 col-md-6 mt-5 cart-wrap ftco-animate">
                    <div class="cart-total mb-3">
                        <h3>Cart Totals</h3>
                        <p class="d-flex">
                            <span>SubTotal</span>
                            <span>Rp. {{ $datapembayaran->total_bayar }}</span>
                        </p>
                        <hr>
                        <p class=" d-flex total-price">
                            <span>Total</span>
                            <span>Rp. {{ $datapembayaran->total_bayar }}</span>
                        </p>
                        <p class=" d-flex total-price">
                            <span>Total Berat Keseluruhan Barang</span>
                            <span>{{ $datapembayaran->total_berat }}gr</span>
                        </p>
                    </div>
                    <div class="cart-total mb-3">
                        <h3>Detail Ongkir</h3>
                        <p class="d-flex">
                            <span>Tujuan</span>
                            <span>{{ $city['city_name'] }}</span>
                        </p>
                        <hr>
                        <p class=" d-flex total-price">
                            <span>Kurir</span>
                            <span>{{ $datapembayaran->courier }}</span>
                        </p>
                        <p class=" d-flex total-price">
                            <span>Total Ongkir</span>
                            <span>Rp. {{ $datapembayaran->total_ongkir }}</span>
                        </p>
                        <p class=" d-flex total-price">
                            <span>ETD</span>
                            <span>Estimasi Tiba {{ $datapembayaran->etd }} Hari</span>
                        </p>
                        <p class=" d-flex total-price">
                            <span>Service</span>
                            <span>{{ $datapembayaran->service }}</span>
                        </p>
                        <p class=" d-flex total-price">
                            <span>Description</span>
                            <span>{{ $datapembayaran->description }}</span>
                        </p>
                    </div>
                    <div class="cart-total mb-3">
                        <h3>Total Bayar Keseluruhan</h3>
                        <p class="d-flex total-price">
                            <span>Total Bayar Keseluruhan</span>
                            <span>Rp. {{ $datapembayaran->total_bayar_keseluruhan }}</span>
                        </p>
                        <hr>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group mt-4 d-flex justify-content-center">
                            <div class="radio">
                                <button class="btn btn-dark py-3 px-4" id="pay-button">Bayar</button>
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


    <script type="text/javascript">
        // For example trigger on button clicked, or any time you need
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function() {
            // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
            window.snap.pay('{{ $snapToken }}');
            // customer will be redirected after completing payment pop-up
        });
    </script>


</body>

</html>