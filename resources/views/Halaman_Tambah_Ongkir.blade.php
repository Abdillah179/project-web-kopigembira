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

        <div class="slider-item" style="background-image: url(coffe-template/images/bg_3.jpg);" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">

                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-3 mt-5 bread">Tambah Ongkir</h1>
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

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 ftco-animate">
                    <form action="/posttambahongkir/{{ $dataorder->no_order }}" method="post" class="billing-form ftco-bg-dark p-3 p-md-5">
                        @csrf

                        <h3 class="mb-4 billing-heading">Tambah Ongkir</h3>
                        <div class="row align-items-end">
                            <div class="w-100"></div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="country">Kota</label>
                                    <div class="select-wrap">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select name="destination" id="" class="form-control">
                                            @foreach($city as $cty)
                                            <option value="{{ $cty['city_id'] }}">{{ $cty['city_name'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="country">provinsi</label>
                                    <div class="select-wrap">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select name="province" id="" class="form-control">
                                            @foreach($provinsi as $prnvs)
                                            <option value="{{ $prnvs['province'] }}">{{ $prnvs['province'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="streetaddress">Berat Total Keseluruhan Barang (gr)</label>
                                    <input type="number" class="form-control" name="total_berat" placeholder="House number and street name" value="{{ $dataorder->total_berat }}" readonly>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="country">Kurir</label>
                                    <div class="select-wrap">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select name="courier" id="" class="form-control">
                                            <option value="jne">JNE</option>
                                            <option value="pos">POS</option>
                                            <option value="tiki">TIKI</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mt-5">
                                <button type="submit" name="submit" class="btn btn-primary btn-outline-primary">Tambah Ongkir</button>
                            </div>
                        </div>
                    </form><!-- END -->
                </div> <!-- .col-md-8 -->
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

</body>

</html>