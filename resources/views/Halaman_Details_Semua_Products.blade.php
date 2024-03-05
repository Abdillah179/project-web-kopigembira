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


    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <style>
        .product-image {
            position: relative;
            /* Sesuaikan tinggi sesuai gambar */
        }

        .product-image img {
            width: 100%;
            height: auto;
            filter: blur(5px);
        }

        .stock-empty-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 21px;
            /* Sesuaikan ukuran font */
            text-shadow: 10px 10px 10px rgba(0, 0, 0, 0.5);
            /* Menambahkan shadow untuk membuat teks lebih jelas */
        }
    </style>

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
                    <li class="nav-item"><a href="/pesanansaya" class="nav-link">Pesanan Saya</a></li>
                    <li class="nav-item cart"><a href="/Keranjang" class="nav-link"><span class="icon icon-shopping_cart"></span><span class="bag d-flex justify-content-center align-items-center"><small>{{ Cart::count() }}</small></span></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <section class="home-slider owl-carousel">

        <div class="slider-item" style="object-fit: contain;">
            @if($datasubcategorybarangfirst->id == 1)
            <img src="{{ asset('image-product-barang/coffee-beans.jpg') }}">
            @elseif($datasubcategorybarangfirst->id == 2)
            <img src="{{ asset('image-product-barang/drip-coffee.jpg') }}">
            @elseif($datasubcategorybarangfirst->id == 3)
            <img src="{{ asset('image-product-barang/cold-brew.jpg') }}">
            @elseif($datasubcategorybarangfirst->id == 4)
            <img src="{{ asset('image-product-barang/ready-to-drink.jpg') }}">
            @elseif($datasubcategorybarangfirst->id == 5)
            <img src="{{ asset('image-product-barang/kopi-luwak.jpg') }}">
            @elseif($datasubcategorybarangfirst->id == 6)
            <img src="{{ asset('image-product-barang/coffee-beans.jpg') }}">
            @elseif($datasubcategorybarangfirst->id == 7)
            <img src="{{ asset('image-product-barang/capsules.jpg') }}">
            @else
            <!-- Tampilkan gambar default jika tidak sesuai dengan kondisi di atas -->
            <img src="{{ asset('image-product-barang/coffe-beans.jpg') }}">
            @endif
        </div>
    </section>

    <section class="ftco-section" style="margin-top: -400px;">
        <div class="container">
            <div class="row">
                <!-- .col-md-8 -->

                <div class="col-xl-3 sidebar ftco-animate">
                    <div class="sidebar-box ftco-animate">
                        <div class="categories">
                            <h3>Categories</h3>
                            @foreach($datacategoryproduk as $dtctpd)
                            <li><a href="/otherscategoryproducts/{{ $dtctpd->name_category_slug }}">{{ $dtctpd->name_category }}
                                    <span>({{ \App\Models\sub_category::where('id_kategori', $dtctpd->id)->count() }})</span>
                                </a></li>
                            @endforeach
                        </div>
                    </div>

                </div>

                <div class="col-xl-9 ftco-animate">
                    <div class="sidebar-box">
                        <form action="/detailsproducts/{{ $datasubcategorybarangfirst->name_category_slug }}" class="search-form">
                            <div class="form-group">
                                <div class="icon">
                                    <span class="icon-search"></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Search..." name="search">
                            </div>
                        </form>
                    </div>
                    <div class="row">
                        @foreach($dataproducts as $dtprdcts)
                        <div class="col-md-4">
                            <div class="menu-entry">
                                @if($dtprdcts->stok_barang == 0 || $dtprdcts->stok_barang == null)
                                <div class="product-image">
                                    <a href="/detailsoneproducts/{{ $dtprdcts->slug_name_barang }}"><img src="{{ asset('image-product-barang/' . $dtprdcts->gambar_barang) }}" alt="" class="img-fluid" width="400px" data-aos="flip-left" data-aos-duration="1000"></a>
                                    <div class="stock-empty-text">Stok Kosong</div>
                                </div>

                                @else
                                <a href="/detailsoneproducts/{{ $dtprdcts->slug_name_barang }}"><img src="{{ asset('image-product-barang/' . $dtprdcts->gambar_barang) }}" alt="" class="img-fluid" width="400px" data-aos="flip-left" data-aos-duration="1000"></a>

                                @endif

                                <div class="text text-center pt-4">
                                    <h3><a href="/detailsoneproducts/{{ $dtprdcts->slug_name_barang }}">{{ $dtprdcts->name_barang }}</a></h3>
                                    @if($dtprdcts->id_kategori_barang == 1)
                                    <p>Category : Coffee</p>
                                    @elseif($dtprdcts->id_kategori_barang == 2)
                                    <p>Category : Drip Coffee</p>
                                    @elseif($dtprdcts->id_kategori_barang == 3)
                                    <p>Category : Grinders</p>
                                    @elseif($dtprdcts->id_kategori_barang == 4)
                                    <p>Category : Coffee Machines</p>
                                    @elseif($dtprdcts->id_kategori_barang == 5)
                                    <p>Category : Manual Brewers</p>
                                    @elseif($dtprdcts->id_kategori_barang == 6)
                                    <p>Category : Coffee Tools</p>
                                    @endif

                                    <p>Terjual : {{ $dtprdcts->totalSold() }}</p>

                                    <p><a href="/detailsoneproducts/{{ $dtprdcts->slug_name_barang }}" class="btn btn-primary btn-outline-primary">Detail Produk</a></p>

                                    <form action="/postcart" method="post">
                                        @csrf

                                        <input type="hidden" name="id_product" value="{{ $dtprdcts->id }}">
                                        <p><button type="submit" class="btn btn-primary btn-outline-primary">Add To Cart</button></p>
                                    </form>

                                </div>
                            </div>
                        </div>
                        @endforeach
                        {{ $dataproducts->links() }}
                    </div>



                    <div class="row mt-5 pt-3 d-flex">
                        <div class="col-md-6 d-flex">

                        </div>
                        <div class="col-md-6">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- .section -->

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

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>