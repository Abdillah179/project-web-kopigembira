<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ $judul }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


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
                    <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
                    <li class="nav-item cart"><a href="/login" class="nav-link"><i class="fa-regular fa-user"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <section class="home-slider owl-carousel">

        <div class="slider-item">
            <img src="{{ asset('waifu-image-product-barang/' . $detaildatabarang->gambar_barang) }}" style="object-fit: contain;">
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5 ftco-animate">
                    <a href="{{ asset('image-product-barang/' . $detaildatabarang->gambar_barang) }}" class="image-popup"><img src="{{ asset('image-product-barang/' . $detaildatabarang->gambar_barang) }}" class="img-fluid" alt="Colorlib Template" width="335px"></a>
                </div>
                <div class="col-lg-6 product-details pl-md-5 ftco-animate">
                    <h3>{{ $detaildatabarang->name_barang }}</h3>
                    <p class="price"><span>Rp. {{ $detaildatabarang->harga_barang }}</span></p>
                    <h5>Category : {{ $detaildatabarang->kategori_barang }}</h5>
                    <h5>Stok Produk : {{ $detaildatabarang->stok_barang }}</h5>
                    <p>{{ $detaildatabarang->keterangan_barang }}
                    </p>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            @if($detaildatabarang->id_kategori_barang == 1)
                            <p>Pilih Ukuran Gilingan : </p>
                            <div class="form-group d-flex">
                                <div class="select-wrap">
                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                    <select name="" id="" class="form-control">
                                        @foreach($ukurangilingankopi as $ugk)
                                        <option value="">{{ $ugk->name_ukuran_gilingan }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            @else
                            <div class="col-md-6">

                            </div>
                            @endif
                        </div>
                        <div class="w-100"></div>
                        <div class="input-group col-md-6 d-flex mb-3">
                            <span class="input-group-btn mr-2">
                                <button type="button" class="quantity-left-minus btn" data-type="minus" data-field="">
                                    <i class="icon-minus"></i>
                                </button>
                            </span>
                            <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
                            <span class="input-group-btn ml-2">
                                <button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
                                    <i class="icon-plus"></i>
                                </button>
                            </span>
                        </div>
                    </div>
                    <p><a href="/login" class="btn btn-primary py-3 px-5">Add to Cart</a></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <span class="subheading">Discover</span>
                    <h2 class="mb-4">Related products</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="menu-entry">
                        <a href="#" class="img" style="background-image: url(images/menu-1.jpg);"></a>
                        <div class="text text-center pt-4">
                            <h3><a href="#">Coffee Capuccino</a></h3>
                            <p>A small river named Duden flows by their place and supplies</p>
                            <p class="price"><span>$5.90</span></p>
                            <p><a href="#" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="menu-entry">
                        <a href="#" class="img" style="background-image: url(images/menu-2.jpg);"></a>
                        <div class="text text-center pt-4">
                            <h3><a href="#">Coffee Capuccino</a></h3>
                            <p>A small river named Duden flows by their place and supplies</p>
                            <p class="price"><span>$5.90</span></p>
                            <p><a href="#" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="menu-entry">
                        <a href="#" class="img" style="background-image: url(images/menu-3.jpg);"></a>
                        <div class="text text-center pt-4">
                            <h3><a href="#">Coffee Capuccino</a></h3>
                            <p>A small river named Duden flows by their place and supplies</p>
                            <p class="price"><span>$5.90</span></p>
                            <p><a href="#" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="menu-entry">
                        <a href="#" class="img" style="background-image: url(images/menu-4.jpg);"></a>
                        <div class="text text-center pt-4">
                            <h3><a href="#">Coffee Capuccino</a></h3>
                            <p>A small river named Duden flows by their place and supplies</p>
                            <p class="price"><span>$5.90</span></p>
                            <p><a href="#" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="ftco-footer ftco-section img">
        <div class="overlay"></div>
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">About Us</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-5 mb-md-5">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Recent Blog</h2>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                            <div class="text">
                                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                                <div class="meta">
                                    <div><a href="#"><span class="icon-calendar"></span> Sept 15, 2018</a></div>
                                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                            <div class="text">
                                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                                <div class="meta">
                                    <div><a href="#"><span class="icon-calendar"></span> Sept 15, 2018</a></div>
                                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-5 mb-md-5">
                    <div class="ftco-footer-widget mb-4 ml-md-4">
                        <h2 class="ftco-heading-2">Services</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">Cooked</a></li>
                            <li><a href="#" class="py-2 d-block">Deliver</a></li>
                            <li><a href="#" class="py-2 d-block">Quality Foods</a></li>
                            <li><a href="#" class="py-2 d-block">Mixed</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
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