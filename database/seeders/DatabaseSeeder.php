<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\category;
use App\Models\tb_barang;
use App\Models\sub_category;
use App\Models\tb_ukuran_gilingan_kopi;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Tabel Kategori

        category::create([
            "name_category" => "Coffee",
            "name_category_slug" => "coffee",
        ]);

        category::create([
            "name_category" => "Tea And Beverages",
            "name_category_slug" => "tea-and-beverages",
        ]);

        category::create([
            "name_category" => "Grinders",
            "name_category_slug" => "grinders",
        ]);

        category::create([
            "name_category" => "Coffee Machines",
            "name_category_slug" => "coffee-machines",
        ]);

        category::create([
            "name_category" => "Manual Brewers",
            "name_category_slug" => "manual-brewers",
        ]);

        category::create([
            "name_category" => "Coffee Tools",
            "name_category_slug" => "coffee-tools",
        ]);

        // END TABEL KATEGORI


        // TABEL SUB KATEGORI

        sub_category::create([
            "name_category" => "Coffee Beans",
            "name_category_slug" => "coffee-beans",
            'id_kategori' => 1,
            'category' => 'coffee',
            'image_category' => 'coffee-beans.jpg'
        ]);

        sub_category::create([
            "name_category" => "Drip Coffee",
            "name_category_slug" => "drip-coffee",
            'id_kategori' => 1,
            'category' => 'coffee',
            'image_category' => 'drip-coffee.jpg'
        ]);

        sub_category::create([
            "name_category" => "Cold Brew",
            "name_category_slug" => "cold-brew",
            'id_kategori' => 1,
            'category' => 'coffee',
            'image_category' => 'cold-brew.jpg'
        ]);

        sub_category::create([
            "name_category" => "Ready To Drink",
            "name_category_slug" => "ready-to-drink",
            'id_kategori' => 1,
            'category' => 'coffee',
            'image_category' => 'ready-to-drink.jpg'
        ]);

        sub_category::create([
            "name_category" => "Kopi Luwak",
            "name_category_slug" => "kopi-luwak",
            'id_kategori' => 1,
            'category' => 'coffee',
            'image_category' => 'kopi-luwak.jpg'
        ]);

        sub_category::create([
            "name_category" => "Green Bean",
            "name_category_slug" => "green-bean",
            'id_kategori' => 1,
            'category' => 'coffee',
            'image_category' => 'green-bean.jpg'
        ]);

        sub_category::create([
            "name_category" => "Capsules",
            "name_category_slug" => "capsules",
            'id_kategori' => 1,
            'category' => 'coffee',
            'image_category' => 'capsules.jpg'
        ]);

        sub_category::create([
            "name_category" => "Syrups",
            "name_category_slug" => "syrups",
            'id_kategori' => 2,
            'category' => 'tea-and-beverages',
            'image_category' => 'syrups.jpg'
        ]);

        sub_category::create([
            "name_category" => "Powder",
            "name_category_slug" => "powder",
            'id_kategori' => 2,
            'category' => 'tea-and-beverages',
            'image_category' => 'powder.jpg'
        ]);

        sub_category::create([
            "name_category" => "Tea",
            "name_category_slug" => "tea",
            'id_kategori' => 2,
            'category' => 'tea-and-beverages',
            'image_category' => 'tea.jpg'
        ]);

        sub_category::create([
            "name_category" => "Milk And Dairy",
            "name_category_slug" => "milk-and-dairy",
            'id_kategori' => 2,
            'category' => 'tea-and-beverages',
            'image_category' => 'milk-and-dairy.jpg'
        ]);

        sub_category::create([
            "name_category" => "Electric Grinder",
            "name_category_slug" => "electric-grinder",
            'id_kategori' => 3,
            'category' => 'grinders',
            'image_category' => 'electric-grinder.jpg'
        ]);

        sub_category::create([
            "name_category" => "Manual Grinder",
            "name_category_slug" => "manual-grinder",
            'id_kategori' => 3,
            'category' => 'grinders',
            'image_category' => 'manual-grinder.jpg'
        ]);

        sub_category::create([
            "name_category" => "Electric Grinder Sparepart",
            "name_category_slug" => "electric-grinder-sparepart",
            'id_kategori' => 3,
            'category' => 'grinders',
            'image_category' => 'electric-grinder-sparepart.jpg'
        ]);

        sub_category::create([
            "name_category" => "Manual Grinder Sparepart",
            "name_category_slug" => "manual-grinder-sparepart",
            'id_kategori' => 3,
            'category' => 'grinders',
            'image_category' => 'manual-grinder-sparepart.jpg'
        ]);

        sub_category::create([
            "name_category" => "Fully Automatic Espresso Machines",
            "name_category_slug" => "fully-automatic-espresso-machines",
            'id_kategori' => 4,
            'category' => 'coffee-machines',
            'image_category' => 'fully-automatic-espresso-machines.jpg'
        ]);

        sub_category::create([
            "name_category" => "Mesin Kopi untuk Cafe",
            "name_category_slug" => "mesin-kopi-untuk-cafe",
            'id_kategori' => 4,
            'category' => 'coffee-machines',
            'image_category' => 'mesin-kopi-untuk-cafe.jpg'
        ]);

        sub_category::create([
            "name_category" => "Home Espresso Machines",
            "name_category_slug" => "home-espresso-machines",
            'id_kategori' => 4,
            'category' => 'coffee-machines',
            'image_category' => 'home-espresso-machines.jpg'
        ]);

        sub_category::create([
            "name_category" => "Automatic Coffee Brewers",
            "name_category_slug" => "automatic-coffee-brewers",
            'id_kategori' => 4,
            'category' => 'coffee-machines',
            'image_category' => 'automatic-coffee-brewers.jpg'
        ]);


        sub_category::create([
            "name_category" => "Spareparts",
            "name_category_slug" => "spareparts",
            'id_kategori' => 4,
            'category' => 'coffee-machines',
            'image_category' => 'spareparts.jpg'
        ]);

        sub_category::create([
            "name_category" => "Espresso Maker",
            "name_category_slug" => "espresso-maker",
            'id_kategori' => 5,
            'category' => 'manual-brewers',
            'image_category' => 'espresso-maker.jpg'
        ]);

        sub_category::create([
            "name_category" => "Pour Over",
            "name_category_slug" => "pour-over",
            'id_kategori' => 5,
            'category' => 'manual-brewers',
            'image_category' => 'pour-over.jpg'
        ]);

        sub_category::create([
            "name_category" => "French Press",
            "name_category_slug" => "french-press",
            'id_kategori' => 5,
            'category' => 'manual-brewers',
            'image_category' => 'french-press.jpg'
        ]);

        sub_category::create([
            "name_category" => "Mokapot",
            "name_category_slug" => "mokapot",
            'id_kategori' => 5,
            'category' => 'manual-brewers',
            'image_category' => 'mokapot.jpg'
        ]);

        sub_category::create([
            "name_category" => "Vietnam Drip",
            "name_category_slug" => "vietnam-drip",
            'id_kategori' => 5,
            'category' => 'manual-brewers',
            'image_category' => 'vietnam-drip.jpg'
        ]);

        sub_category::create([
            "name_category" => "All In One",
            "name_category_slug" => "all-in-one",
            'id_kategori' => 5,
            'category' => 'manual-brewers',
            'image_category' => 'all-in-one.jpg'
        ]);

        sub_category::create([
            "name_category" => "Press Brewers",
            "name_category_slug" => "press-brewers",
            'id_kategori' => 5,
            'category' => 'manual-brewers',
            'image_category' => 'press-brewers.jpg'
        ]);

        sub_category::create([
            "name_category" => "Cold Brewers",
            "name_category_slug" => "cold-brewers",
            'id_kategori' => 5,
            'category' => 'manual-brewers',
            'image_category' => 'cold-brewers.jpg'
        ]);

        sub_category::create([
            "name_category" => "Syphon",
            "name_category_slug" => "syphon",
            'id_kategori' => 5,
            'category' => 'manual-brewers',
            'image_category' => 'syphon.jpg'
        ]);

        sub_category::create([
            "name_category" => "Turkish Pot",
            "name_category_slug" => "turkish-pot",
            'id_kategori' => 5,
            'category' => 'manual-brewers',
            'image_category' => 'turkish-pot.jpg'
        ]);

        sub_category::create([
            "name_category" => "Tea Brewers",
            "name_category_slug" => "tea-brewers",
            'id_kategori' => 5,
            'category' => 'manual-brewers',
            'image_category' => 'tea-brewers.jpg'
        ]);

        sub_category::create([
            "name_category" => "Kettles",
            "name_category_slug" => "kettles",
            'id_kategori' => 6,
            'category' => 'coffee-tools',
            'image_category' => 'kettles.jpg'
        ]);

        sub_category::create([
            "name_category" => "Filters",
            "name_category_slug" => "filters",
            'id_kategori' => 6,
            'category' => 'coffee-tools',
            'image_category' => 'filters.jpg'
        ]);

        sub_category::create([
            "name_category" => "Servers",
            "name_category_slug" => "servers",
            'id_kategori' => 6,
            'category' => 'coffee-tools',
            'image_category' => 'servers.jpg'
        ]);

        sub_category::create([
            "name_category" => "Canisters",
            "name_category_slug" => "canisters",
            'id_kategori' => 6,
            'category' => 'coffee-tools',
            'image_category' => 'canisters.jpg'
        ]);

        sub_category::create([
            "name_category" => "Measuring Spoon",
            "name_category_slug" => "measuring-spoon",
            'id_kategori' => 6,
            'category' => 'coffee-tools',
            'image_category' => 'measuring-spoon.jpg'
        ]);

        // END TABEL SUB KATEGORI


        // TABEL UKURAN GILINGAN KOPI


        tb_ukuran_gilingan_kopi::create([
            'name_ukuran_gilingan' => 'Wholebean',
            'slug_name_ukuran_gilingan' => 'wholebean',
            'id_ukuran_gilingan' => 1,
        ]);

        tb_ukuran_gilingan_kopi::create([
            'name_ukuran_gilingan' => 'Fine',
            'slug_name_ukuran_gilingan' => 'fine',
            'id_ukuran_gilingan' => 1,
        ]);
        tb_ukuran_gilingan_kopi::create([
            'name_ukuran_gilingan' => 'Medium',
            'slug_name_ukuran_gilingan' => 'medium',
            'id_ukuran_gilingan' => 1,
        ]);
        tb_ukuran_gilingan_kopi::create([
            'name_ukuran_gilingan' => 'Medium Coarse',
            'slug_name_ukuran_gilingan' => 'medium-coarse',
            'id_ukuran_gilingan' => 1,
        ]);
        tb_ukuran_gilingan_kopi::create([
            'name_ukuran_gilingan' => 'Super Fine',
            'slug_name_ukuran_gilingan' => 'super-fine',
            'id_ukuran_gilingan' => 1,
        ]);
        tb_ukuran_gilingan_kopi::create([
            'name_ukuran_gilingan' => 'Medium Fine',
            'slug_name_ukuran_gilingan' => 'medium-fine',
            'id_ukuran_gilingan' => 1,
        ]);
        tb_ukuran_gilingan_kopi::create([
            'name_ukuran_gilingan' => 'Coarse',
            'slug_name_ukuran_gilingan' => 'coarse',
            'id_ukuran_gilingan' => 1,
        ]);

        // END Tabel Ukuran Gilingan Kopi

        tb_barang::create([
            "name_barang" => "Crema Espresso - Kopi House Blend 500gr",
            "slug_name_barang" => "crema-espresso-kopi-house-blend-500gr",
            "keterangan_barang" => "Crema Espresso - Kopi House Blend 500gr

            Kopi Crema Espresso diracik sempurna kombinas antara kopi Arabika Gayo Atu Lintang dengan kopi Robusta Dampit, sehingga menciptakan rasa begitu berkesan seperti kacang panggang, manis karamel dan cokelat hitam. Disangrai begitu khas dengan level medium dark roast untuk mengoptimalkan karakter rasa, memiliki cita rasa yang kuat sangat tepat untuk espresso dan variasi resep kopi susu.
            Paling populer dan banyak yang menyukainya, Anda buktikan segera coba kreasikan sajian kopi favorit dengan ini. Crema Espresso - Kopi House Blend 500gr merupakan biji kopi premium blend, racikan biji kopi terbaik yang disangrai teliti untuk lebih mengoptimalkan lagi kompleksitas rasa. Profil rasa inilah yang membuat premium blend Crema Espresso selalu dipesan kembali untuk kebutuhan sajian espresso di kedai kopi ataupun rumahan. Keunikan rasa yang tercipta rahasianya ada pada racikan tepat arabika aceh dan robusta dampit, penasaran ingin mencobanya? Otten Coffee sangat senang untuk merekomendasikannya pada Anda.
            Crema Espresso sesuai namanya, espresso yang tercipta akan menghasilkan crema yang kaya. Dan bukan rahasia umum lagi, crema adalah syarat wajib sajian espresso yang nikmat. Untuk lebih mengetahui potensi apa yang ada pada crema espresso, Anda harus mencobanya sendiri, kreasikan potensi sajian resep kopi lain dengan crema espresso.
            Anda juga bisa pesan kopi Crema Espresso dalam bentuk biji kopi maupun bubuk kopi yang digiling begitu presisi sesuai pilihan alat seduh.
            Tunggu apa lagi, masukkan ke keranjang belanja Anda sekarang juga, dan pesan hanya di ottencoffee.co.id
            ---

            Kesegaran aroma biji kopi Anda terjaga karena menggunakan kemasan lapisan alumunium dengan fitur One Way Air Valve dan Zip Lock.
            Pemesanan dalam bentuk bubuk, biji kopi digiling dengan mesin penggiling kokoh dari Mahlkonig sesaat kopi akan dikirimkan ke Anda.
            Rekomendasi level gilingan:
            Super fine: Turkish coffee
            Fine: Espresso
            Medium fine: Mokapot
            Medium: Pour over (V60, Chemex, Kalita) syphon, Aeropress, Vietnam Drip
            Medium coarse: French press
            Coarse: Cold drip, cold brew​",

            "id_kategori_barang" => 1,
            "kategori_barang" => "Coffee Beans",
            "slug_category_barang" => "coffee-beans",
            "harga_barang" => "119000",
            "berat_barang" => "500",
            "gambar_barang" => "crema-espresso-kopi-house-blend-500gr.jpg",
            "stok_barang" => 400,
            "id_gilingan" => 1,
        ]);

        tb_barang::create([
            "name_barang" => "Kopi Susu Blend - 500gr",
            "slug_name_barang" => "kopi-susu-blend-500gr",
            "keterangan_barang" => "Kopi Susu Blend - 500gr

            Kopi Susu Blend ini perpaduan dari Arabika Gayo Atu Lintang dan Robusta Temanggung diracik sempurna dengan nama Susu Blend yang memiliki cita rasa cokelat hitam, kesan rasa kacang panggang dan gurih, karakter rasa yang kuat. Susu Blend ini tergolong komersial yang sangat cocok untuk kebutuhan kedai kopi dan paling direkomendasikan untuk penggunaan espresso. Cita rasa espresso yang nikmat dan sesuai untuk membuat variasi resep kopi yang enak.
            Kopi Susu Blend, Biji kopi pilihan eksklusif, diracik khusus dan didedikasikan untuk para pecinta kopi susu nusantara. Sangat mudah menemukan rasio tepat untuk konsistensi rasa hanya dengan menggunakan Kopi Susu Blend di tiap seduhannya. Oleh karena itu, Otten Coffee antusias merekomendasikan racikan kopi istimewa ini untuk kebutuhan sajian kopi susu di rumah dan bahkan cocok sebagai persediaan kopi untuk kebutuhan bisnis kedai kopi Anda.
            Sajian kopi susu dengan biji kopi berkualitas akan memberikan pengalaman menikmati kopi di rumah ataupun untuk pelanggan di kedai kopi anda. Karakter Kopi Susu Blend memberikan kesan aftertaste yang panjang dengan body yang kuat serta memiliki profil rasa coklat hitam, umami, kacang panggang. Kopi Susu Blend akan menjadi favorit baru Anda dalam penyajian setiap hari dengan tambahan rasa yang juga bisa Anda sesuaikan jika ingin menambahkan syrup. ​
            Anda juga bisa pesan kopi Susu Blend dalam bentuk biji kopi maupun bubuk kopi yang digiling begitu presisi sesuai pilihan alat seduh.
            Tunggu apa lagi, masukkan ke keranjang belanja Anda sekarang juga, dan pesan hanya di ottencoffee.co.id
            ---
            Kesegaran aroma biji kopi Anda terjaga karena menggunakan kemasan lapisan alumunium dengan fitur One Way Air Valve dan Zip Lock.
            Pemesanan dalam bentuk bubuk, biji kopi digiling dengan mesin penggiling kokoh dari Mahlkonig sesaat kopi akan dikirimkan ke Anda.
            Rekomendasi level gilingan:
            Super fine: Turkish coffee
            Fine: Espresso
            Medium fine: Mokapot
            Medium: Pour over (V60, Chemex, Kalita) syphon, Aeropress, Vietnam Drip
            Medium coarse: French press
            Coarse: Cold drip, cold brew​
            ---
            
            Cara Mudah Membuat Sajian Kopi Susu Sesuai Selera

            1. Persiapkan alat kopi favorit (rekomendasi: Manual Espresso Maker seperti Flair, Staresso, Leverpresso)
            2. Lakukan pre-heat pada peralatan dan cangkir, serta giling halus Kopi Susu Blend
            3. Sesuaikan kebutuhan rasio kopi (gram) dan jumlah air seduhan (ml) (suhu 92-96° C), kemudian lakukan proses seduh menggunakan Manual Espresso Maker
            4. Ketika espresso telah selesai, sesuaikan kebutuhan susu yang digunakan,
            5. Susu Kental Manis untuk sajian kopi susu yang nikmat nan berkesan
            6. Susu Segar untuk sajian latte dengan tekstur lembut yang istimewa
            7. Anda bisa melakukan improvisasi selama proses menyajikan kopi susu, sesuaikan sajian dengan selera, disajikan hangat lebih nikmat, dingin pun rasanya menarik.
            8. Opsional pada tahap akhir, menambahkan sedikit ekstrak sirup atau bubuk matcha akan menciptakan sajian kopi susu yang luar biasa Kemasan Kopi Susu Blend mampu menjaga kesegaran biji kopi hingga proses seduh, komposisi 500 gram untuk ragam keperluan, dari seduh kopi di rumah hingga bisnis kedai kopi. Ketika menyeduh kopi susu, sesuaikan varian susu favorit Anda untuk cita rasa sesuai selera.",

            "id_kategori_barang" => 1,
            "kategori_barang" => "Coffee Beans",
            "slug_category_barang" => "coffee-beans",
            "harga_barang" => "74000",
            "berat_barang" => "500",
            "gambar_barang" => "kopi-susu-blend-500gr.jpg",
            "stok_barang" => 400,
            "id_gilingan" => 1,

        ]);
        tb_barang::create([
            "name_barang" => "Golden Crema - Kopi House Blend 500gr",
            "slug_name_barang" => "golden-crema-kopi-house-blend-500gr",
            "keterangan_barang" => "Golden Crema - Kopi House Blend 500gr

            Kopi Golden Crema merupakan perpaduan antara Arabika Mandheling Wet Process dan Robusta Temanggung, diracik begitu teliti dengan nama Golden Crema yang memiliki cita rasa cokelat, jeruk, biji-bijian gandum dan rempah. Direkomendasikan untuk penggunaan mesin espresso, paling sesuai untuk kebutuhan kedai kopi maupun variasi resep kopi enak dari espresso.
            Rasakan pengalaman mencoba biji kopi terbaru ini, Golden Crema pun mampu hasilkan espresso dengan crema yang tebal estetis. Kesan rasa yang cukup lama dengan karakter rasa keseluruhan begitu seimbang. Tantang diri Anda untuk menemukan cita rasa terbaik maupun resep kopi favorit dengan Golden Crema.
            Anda juga bisa pesan kopi Golden Crema dalam bentuk biji kopi maupun bubuk kopi yang digiling begitu presisi sesuai pilihan alat seduh.
            Tunggu apa lagi, masukkan ke keranjang belanja Anda sekarang juga, dan pesan hanya di ottencoffee.co.id
            ---
            Kesegaran aroma biji kopi Anda terjaga karena menggunakan kemasan lapisan alumunium dengan fitur One Way Air Valve dan Zip Lock.
            Pemesanan dalam bentuk bubuk, biji kopi digiling dengan mesin penggiling kokoh dari Mahlkonig sesaat kopi akan dikirimkan ke Anda.

            Rekomendasi level gilingan:

            Super fine: Turkish coffee
            Fine: Espresso
            Medium fine: Mokapot
            Medium: Pour over (V60, Chemex, Kalita) syphon, Aeropress, Vietnam Drip
            Medium coarse: French press
            Coarse: Cold drip, cold brew​",

            "id_kategori_barang" => 1,
            "kategori_barang" => "Coffee Beans",
            "slug_category_barang" => "coffee-beans",
            "harga_barang" => "125000",
            "berat_barang" => "500",
            "gambar_barang" => "golden-crema-kopi-house-blend-500gr.jpg",
            "stok_barang" => 270,
            "id_gilingan" => 1,

        ]);
        tb_barang::create([
            "name_barang" => "Premium Arabica - Kopi House Blend 500gr",
            "slug_name_barang" => "premium-arabica-kopi-house-blend-500gr",
            "keterangan_barang" => "Premium Arabica - Kopi House Blend 500gr

            Kopi Blend Arabika diracik premium sehingga hadirkan cita rasa buah ceri hitam yang kaya, dengan ketebalan rasa layaknya sirup, tingkat keasaman rendah berkarakter cokelat, keseluruhan rasanya begitu alami. Premium arabica ini tergolong kopi komersial untuk kedai kopi dan paling tepat untuk penggunaan mesin espresso. Cita rasa espresso yang dihasilkan begitu nikmat, sesuai untuk membuat variasi resep kopi yang enak.
            Anda juga bisa pesan kopi Premium Arabica dalam bentuk biji kopi maupun bubuk kopi yang digiling begitu presisi sesuai pilihan alat seduh.
            Tunggu apa lagi, masukkan ke keranjang belanja Anda sekarang juga, dan pesan hanya di ottencoffee.co.id
            ---
            Kesegaran aroma biji kopi Anda terjaga karena menggunakan kemasan lapisan alumunium dengan fitur One Way Air Valve dan Zip Lock.
            Pemesanan dalam bentuk bubuk, biji kopi digiling dengan mesin penggiling kokoh dari Mahlkonig sesaat kopi akan dikirimkan ke Anda.
            Rekomendasi level gilingan:

            Super fine: Turkish coffee
            Fine: Espresso
            Medium fine: Mokapot
            Medium: Pour over (V60, Chemex, Kalita) syphon, Aeropress, Vietnam Drip
            Medium coarse: French press
            Coarse: Cold drip, cold brew​",

            "id_kategori_barang" => 1,
            "kategori_barang" => "Coffee Beans",
            "slug_category_barang" => "coffee-beans",
            "harga_barang" => "107000",
            "berat_barang" => "500",
            "gambar_barang" => "premium-arabica-kopi-house-blend-500gr.jpg",
            "stok_barang" => 390,
            "id_gilingan" => 1,

        ]);
        tb_barang::create([
            "name_barang" => "Sidikalang 200g Kopi Arabica",
            "slug_name_barang" => "sidikalang-200g-kopi-arabica",
            "keterangan_barang" => "Sidikalang 200g Kopi Arabica

            Kopi Arabika Sidikalang memiliki aroma yang khas memikat dengan perpaduan cita rasa teh hitam, cokelat dan rasa yang alami. Biji kopi yang berasal dari ketinggian 1350 mdpl di wilayah Sidikalang kabupaten Dairi provinsi Sumatera Utara ini setelah panen diproses giling basah (semi washed). Kemudian disangrai dengan sempurna pada level medium dark untuk mengoptimalkan cita rasa paling istimewa.
            Rasakan pengalaman menyeduh kopi arabika Sidikalang dengan alat kopi favorit Anda seperti pour over V60 maupun french press. Temukan resep kopi yang paling sesuai dengan selera Anda. Tiap tegukan begitu berkesan, mengingatkan kopi pertama yang membuat Anda jatuh cinta.
            Anda juga bisa pesan single origin Sidikalang dalam bentuk biji kopi maupun bubuk kopi yang digiling begitu presisi sesuai pilihan alat seduh.
            Tunggu apa lagi, masukkan ke keranjang belanja Anda sekarang juga, dan pesan hanya di ottencoffee.co.id
            ---
            Kesegaran aroma biji kopi Anda terjaga karena menggunakan kemasan lapisan alumunium dengan fitur One Way Air Valve dan Zip Lock.
            Pemesanan dalam bentuk bubuk, biji kopi digiling dengan mesin penggiling kokoh dari Mahlkonig sesaat kopi akan dikirimkan ke Anda.

            Rekomendasi level gilingan:

            Super fine: Turkish coffee
            Fine: Espresso
            Medium fine: Mokapot
            Medium: Pour over (V60, Chemex, Kalita) syphon, Aeropress, Vietnam Drip
            Medium coarse: French press
            Coarse: Cold drip, cold brew​",

            "id_kategori_barang" => 1,
            "kategori_barang" => "Coffee Beans",
            "slug_category_barang" => "coffee-beans",
            "harga_barang" => "84000",
            "berat_barang" => "200",
            "gambar_barang" => "sidikalang-200g-kopi-arabica.jpg",
            "stok_barang" => 247,
            "id_gilingan" => 1,

        ]);
        tb_barang::create([
            "name_barang" => "Aceh Gayo Atu Lintang 200g Kopi Arabica",
            "slug_name_barang" => "aceh-gayo-atu-lintang-200g-kopi-arabica",
            "keterangan_barang" => "Aceh Gayo Atu Lintang 200g Kopi Arabica

            Kopi Arabika Aceh Gayo Atu Lintang menyimpan cita rasa gula merah, sensasi kulit jeruk, jahe dan buah pala, temukan perpaduan khas ini di setiap seduhan kopi Anda. Biji kopi yang berasal dari ketinggian 1.500 mdpl gampong Atu Lintang wilayah Gayo kabupaten Aceh Tengah provinsi Aceh, hasil panennya diproses giling basah (semi washed) yang kemudian disangrai sempurna level medium roast untuk memaksimalkan cita rasa.
            Tantang diri Anda untuk menyeduh kopi arabika aceh gayo atu lintang dengan alat seduh kopi favorit seperti pour over v60 maupun cara seduh tradisional. Temukan resep kopi paling istimewa di setiap momen minum kopi Anda, rasakan bagaimana kopi ini mampu menjangkau selera Anda.
            Anda juga bisa pesan kopi arabika aceh gayo atu lintang dalam bentuk biji kopi maupun bubuk kopi yang digiling begitu presisi sesuai pilihan alat seduh.
            Tunggu apa lagi, masukkan ke keranjang belanja Anda sekarang juga, dan pesan hanya di ottencoffee.co.id
            ---
            Kesegaran aroma biji kopi Anda terjaga karena menggunakan kemasan lapisan alumunium dengan fitur One Way Air Valve dan Zip Lock.
            Pemesanan dalam bentuk bubuk, biji kopi digiling dengan mesin penggiling kokoh dari Mahlkonig sesaat kopi akan dikirimkan ke Anda.
            Rekomendasi level gilingan:
            Super fine: Turkish coffee
            Fine: Espresso
            Medium fine: Mokapot
            Medium: Pour over (V60, Chemex, Kalita) syphon, Aeropress, Vietnam Drip
            Medium coarse: French press",

            "id_kategori_barang" => 1,
            "kategori_barang" => "Coffee Beans",
            "slug_category_barang" => "coffee-beans",
            "harga_barang" => "79000",
            "berat_barang" => "200",
            "gambar_barang" => "aceh-gayo-atu-lintang-200g-kopi-arabica.jpg",
            "stok_barang" => 190,
            "id_gilingan" => 1,

        ]);
        tb_barang::create([
            "name_barang" => "Drip Coffee 10g Arabica Toraja Sapan (4 Sachet)",
            "slug_name_barang" => "drip-coffee-10g-arabica-toraja-sapan-(4 Sachet)",
            "keterangan_barang" => "Drip Coffee Arabica Toraja 
            MENIKMATI kopi nikmat ketika bepergian atau saat bertualang ke alam bebas kini bukan lagi masalah. Jika Anda tidak ingin bepergian dengan repot dan membawa alat-alat kopi, maka opsi Drip Coffee dari Otten Coffee ini mungkin akan menjadi piliahan yang paling pas untuk Anda.
            Drip Coffee adalah kemasan kopi siap minum yang sangat praktis karena Anda hanya tinggal perlu menyobek bagian luarnya dan mengeluarkan bagian dalam yang telah dilengkapi dengan filter. Bagian filter inilah yang kemudian hanya tinggal perlu diseduh dengan air panas dan bisa bagian filter ini bisa diseduh di atas wadah cangkir apa saja. Kopi yang tersedia dalam set coffee drip ini pun telah digiling menurut ukuran kebutuhan seduh ala filter coffee, yaitu medium dan dengan takaran gramasi yang khusus untuk keperluan perorangan. Karenanya set coffee drip ini benar-benar sangat praktis untuk dibawa bepergian.
            Set coffee drip Toraja ini adalah kopi-kopi siap minum dari single origin Toraja Sapan. Single origin Toraja Sapan sendiri merupakan salah satu single origin favorit di Otten Coffee karena karakternya yang eksotis dan menarik.
            Tasting notes Toraja Sapan: full body, dark chocolate yang cukup panjang, ada taste herbal dengan acidity cukup tajam dan sweet spicy. –Satu set coffee drip Toraja terdiri dari 4 pieces.",

            "id_kategori_barang" => 2,
            "kategori_barang" => "Drip Coffe",
            "slug_category_barang" => "drip-coffee",
            "harga_barang" => "70000",
            "berat_barang" => "10",
            "gambar_barang" => "drip-coffee-10g-arabica-toraja-sapan-(4 Sachet).jpg",
            "stok_barang" => 300,
            "id_gilingan" => 0,

        ]);
        tb_barang::create([
            "name_barang" => "Drip Coffee 10g Arabica Aceh Gayo Atu Lintang (4 Sachet)",
            "slug_name_barang" => "drip-coffee-10g-arabica-aceh-gayo-atu-lintang-(4 Sachet)",
            "keterangan_barang" => "Drip Coffee 10g Arabica Gayo Atu Lintang
            MENIKMATI kopi nikmat ketika bepergian atau saat bertualang ke alam bebas kini bukan lagi masalah. Jika Anda tidak ingin bepergian dengan repot dan membawa alat-alat kopi, maka opsi Drip Coffee dari Otten Coffee ini mungkin akan menjadi piliahan yang paling pas untuk Anda.
            Drip Coffee adalah kemasan kopi siap minum yang sangat praktis karena Anda hanya tinggal perlu menyobek bagian luarnya dan mengeluarkan bagian dalam yang telah ‘dilengkapi’ dengan filter. Bagian filter inilah yang kemudian hanya tinggal perlu diseduh dengan air panas dan bisa bagian filter ini bisa diseduh di atas wadah cangkir apa saja. Kopi yang tersedia dalam set coffee drip ini pun telah digiling menurut ukuran kebutuhan seduh ala filter coffee, yaitu medium dan dengan takaran gramasi yang khusus untuk keperluan perorangan. Karenanya set coffee drip ini benar-benar sangat praktis untuk dibawa bepergian. –Satu set coffee drip Gayo Atu Lintang terdiri dari 4 pieces.",

            "id_kategori_barang" => 2,
            "kategori_barang" => "Drip Coffee",
            "slug_category_barang" => "drip-coffee",
            "harga_barang" => "60000",
            "berat_barang" => "10",
            "gambar_barang" => "drip-coffee-10g-arabica-aceh-gayo-atu-lintang-(4 Sachet).jpg",
            "stok_barang" => 700,
            "id_gilingan" => 0,

        ]);
        // tb_barang::create([
        //     "name_barang" => "Vanilla Latte",
        //     "slug_name_barang" => "vanilla-latte",
        //     "keterangan_barang" => "-",
        //     "id_kategori_barang" => 1,
        //     "kategori_barang" => "Coffee",
        //     "slug_category_barang" => "coffee",
        //     "harga_barang" => "12000",
        //     "berat_barang" => "100",
        //     "gambar_barang" => "vanilla-latte.jpg",

        // ]);
        // tb_barang::create([
        //     "name_barang" => "Red Velvet Latte",
        //     "slug_name_barang" => "red-velvet-latte",
        //     "keterangan_barang" => "-",
        //     "id_kategori_barang" => 1,
        //     "kategori_barang" => "Coffee",
        //     "slug_category_barang" => "coffee",
        //     "harga_barang" => "12000",
        //     "berat_barang" => "100",
        //     "gambar_barang" => "red-velvet-latte.jpg",

        // ]);
        // tb_barang::create([
        //     "name_barang" => "Taro Latte",
        //     "slug_name_barang" => "taro-latte",
        //     "keterangan_barang" => "-",
        //     "id_kategori_barang" => 1,
        //     "kategori_barang" => "Coffee",
        //     "slug_category_barang" => "coffee",
        //     "harga_barang" => "16000",
        //     "berat_barang" => "100",
        //     "gambar_barang" => "taro-latte.jpg",

        // ]);
        // tb_barang::create([
        //     "name_barang" => "Green Tea Latte",
        //     "slug_name_barang" => "green-tea-latte",
        //     "keterangan_barang" => "-",
        //     "id_kategori_barang" => 1,
        //     "kategori_barang" => "Coffee",
        //     "slug_category_barang" => "coffee",
        //     "harga_barang" => "14000",
        //     "berat_barang" => "100",
        //     "gambar_barang" => "green-tea-latte.jpg",

        // ]);
        // tb_barang::create([
        //     "name_barang" => "Red Velvet Latte Non Coffee",
        //     "slug_name_barang" => "red-velvet-latte-non-coffee",
        //     "keterangan_barang" => "-",
        //     "id_kategori_barang" => 2,
        //     "kategori_barang" => "Non-Coffee",
        //     "slug_category_barang" => "non-coffee",
        //     "harga_barang" => "14000",
        //     "berat_barang" => "100",
        //     "gambar_barang" => "red-velvet-latte-2.jpg",

        // ]);
        // tb_barang::create([
        //     "name_barang" => "Taro Latte Non Coffee",
        //     "slug_name_barang" => "taro-latte-non-coffee",
        //     "keterangan_barang" => "-",
        //     "id_kategori_barang" => 2,
        //     "kategori_barang" => "Non-Coffee",
        //     "slug_category_barang" => "non-coffee",
        //     "harga_barang" => "14000",
        //     "berat_barang" => "100",
        //     "gambar_barang" => "taro-latte-non-coffee.jpg",

        // ]);
        // tb_barang::create([
        //     "name_barang" => "Green Tea Latte Non Coffee",
        //     "slug_name_barang" => "green-tea-latte-non-coffee",
        //     "keterangan_barang" => "-",
        //     "id_kategori_barang" => 2,
        //     "kategori_barang" => "Non-Coffee",
        //     "slug_category_barang" => "non-coffee",
        //     "harga_barang" => "14000",
        //     "berat_barang" => "100",
        //     "gambar_barang" => "green-tea-latte-non-coffee.jpg",

        // ]);
        // tb_barang::create([
        //     "name_barang" => "Ovaltine Latte",
        //     "slug_name_barang" => "ovaltine-latte",
        //     "keterangan_barang" => "-",
        //     "id_kategori_barang" => 2,
        //     "kategori_barang" => "Non-Coffee",
        //     "slug_category_barang" => "non-coffee",
        //     "harga_barang" => "12000",
        //     "berat_barang" => "100",
        //     "gambar_barang" => "ovaltine-latte.jpg",

        // ]);
        // tb_barang::create([
        //     "name_barang" => "Lemon Tea",
        //     "slug_name_barang" => "lemon-tea",
        //     "keterangan_barang" => "-",
        //     "id_kategori_barang" => 2,
        //     "kategori_barang" => "Non-Coffee",
        //     "slug_category_barang" => "non-coffee",
        //     "harga_barang" => "10000",
        //     "berat_barang" => "100",
        //     "gambar_barang" => "lemon-tea.jpg",

        // ]);
        // tb_barang::create([
        //     "name_barang" => "Nasi Ayam Tulang Lunak",
        //     "slug_name_barang" => "nasi-ayam-tulang-lunak",
        //     "keterangan_barang" => "-",
        //     "id_kategori_barang" => 3,
        //     "kategori_barang" => "Food",
        //     "slug_category_barang" => "food",
        //     "harga_barang" => "18000",
        //     "berat_barang" => "100",
        //     "gambar_barang" => "nasi-ayam-tulang-lunak.jpg",

        // ]);
        // tb_barang::create([
        //     "name_barang" => "Nasi Katsu Geprek Biasa",
        //     "slug_name_barang" => "nasi-katsu-geprek-biasa",
        //     "keterangan_barang" => "-",
        //     "id_kategori_barang" => 3,
        //     "kategori_barang" => "Food",
        //     "slug_category_barang" => "food",
        //     "harga_barang" => "14000",
        //     "berat_barang" => "100",
        //     "gambar_barang" => "nasi-katsu-geprek-biasa.jpg",

        // ]);
        // tb_barang::create([
        //     "name_barang" => "Nasi Katsu Geprek Mozarella",
        //     "slug_name_barang" => "nasi-katsu-geprek-mozarella",
        //     "keterangan_barang" => "-",
        //     "id_kategori_barang" => 3,
        //     "kategori_barang" => "Food",
        //     "slug_category_barang" => "food",
        //     "harga_barang" => "17000",
        //     "berat_barang" => "100",
        //     "gambar_barang" => "nasi-katsu-geprek-mozarella.jpg",

        // ]);
        // tb_barang::create([
        //     "name_barang" => "Katsu Geprek Mozarella",
        //     "slug_name_barang" => "katsu-geprek-mozarella",
        //     "keterangan_barang" => "-",
        //     "id_kategori_barang" => 3,
        //     "kategori_barang" => "Food",
        //     "slug_category_barang" => "food",
        //     "harga_barang" => "13000",
        //     "berat_barang" => "100",
        //     "gambar_barang" => "katsu-geprek-mozarella.jpg",

        // ]);
        // tb_barang::create([
        //     "name_barang" => "Hot Dog",
        //     "slug_name_barang" => "hot-dog",
        //     "keterangan_barang" => "-",
        //     "id_kategori_barang" => 3,
        //     "kategori_barang" => "Food",
        //     "slug_category_barang" => "food",
        //     "harga_barang" => "13000",
        //     "berat_barang" => "100",
        //     "gambar_barang" => "hot-dog.jpg",

        // ]);
        // tb_barang::create([
        //     "name_barang" => "Ayam Tulang Lunak",
        //     "slug_name_barang" => "ayam-tulang-lunak",
        //     "keterangan_barang" => "-",
        //     "id_kategori_barang" => 3,
        //     "kategori_barang" => "Food",
        //     "slug_category_barang" => "food",
        //     "harga_barang" => "12000",
        //     "berat_barang" => "100",
        //     "gambar_barang" => "ayam-tulang-lunak.jpg",

        // ]);
        // tb_barang::create([
        //     "name_barang" => "Katsu Geprek Biasa",
        //     "slug_name_barang" => "katsu-geprek-biasa",
        //     "keterangan_barang" => "-",
        //     "id_kategori_barang" => 3,
        //     "kategori_barang" => "Food",
        //     "slug_category_barang" => "food",
        //     "harga_barang" => "10000",
        //     "berat_barang" => "100",
        //     "gambar_barang" => "katsu-geprek-biasa.jpg",

        // ]);
        // tb_barang::create([
        //     "name_barang" => "Nasi",
        //     "slug_name_barang" => "nasi",
        //     "keterangan_barang" => "-",
        //     "id_kategori_barang" => 3,
        //     "kategori_barang" => "Food",
        //     "slug_category_barang" => "food",
        //     "harga_barang" => "7000",
        //     "berat_barang" => "100",
        //     "gambar_barang" => "nasi.jpg",

        // ]);
        // tb_barang::create([
        //     "name_barang" => "Juice Mangga",
        //     "slug_name_barang" => "juice-mangga",
        //     "keterangan_barang" => "-",
        //     "id_kategori_barang" => 4,
        //     "kategori_barang" => "Drinks",
        //     "slug_category_barang" => "drinks",
        //     "harga_barang" => "17000",
        //     "berat_barang" => "100",
        //     "gambar_barang" => "juice-mangga.jpg",

        // ]);
        // tb_barang::create([
        //     "name_barang" => "Juice Jambu",
        //     "slug_name_barang" => "juice-jambu",
        //     "keterangan_barang" => "-",
        //     "id_kategori_barang" => 4,
        //     "kategori_barang" => "Drinks",
        //     "slug_category_barang" => "drinks",
        //     "harga_barang" => "17000",
        //     "berat_barang" => "100",
        //     "gambar_barang" => "juice-jambu.jpg",

        // ]);
        // tb_barang::create([
        //     "name_barang" => "Juice Melon",
        //     "slug_name_barang" => "juice-melon",
        //     "keterangan_barang" => "-",
        //     "id_kategori_barang" => 4,
        //     "kategori_barang" => "Drinks",
        //     "slug_category_barang" => "drinks",
        //     "harga_barang" => "17000",
        //     "berat_barang" => "100",
        //     "gambar_barang" => "juice-melon.jpg",

        // ]);
        // tb_barang::create([
        //     "name_barang" => "Juice Orange",
        //     "slug_name_barang" => "juice-orange",
        //     "keterangan_barang" => "-",
        //     "id_kategori_barang" => 4,
        //     "kategori_barang" => "Drinks",
        //     "slug_category_barang" => "drinks",
        //     "harga_barang" => "17000",
        //     "berat_barang" => "100",
        //     "gambar_barang" => "juice-orange.jpg",

        // ]);
        // tb_barang::create([
        //     "name_barang" => "Juice Semangka",
        //     "slug_name_barang" => "juice-semangka",
        //     "keterangan_barang" => "-",
        //     "id_kategori_barang" => 4,
        //     "kategori_barang" => "Drinks",
        //     "slug_category_barang" => "drinks",
        //     "harga_barang" => "17000",
        //     "berat_barang" => "100",
        //     "gambar_barang" => "juice-semangka.jpg",

        // ]);
        // tb_barang::create([
        //     "name_barang" => "Juice Strawberry",
        //     "slug_name_barang" => "juice-strawberry",
        //     "keterangan_barang" => "-",
        //     "id_kategori_barang" => 4,
        //     "kategori_barang" => "Drinks",
        //     "slug_category_barang" => "drinks",
        //     "harga_barang" => "17000",
        //     "berat_barang" => "100",
        //     "gambar_barang" => "juice-strawberry.jpg",

        // ]);
        // tb_barang::create([
        //     "name_barang" => "Juice Apel",
        //     "slug_name_barang" => "juice-apel",
        //     "keterangan_barang" => "-",
        //     "id_kategori_barang" => 4,
        //     "kategori_barang" => "Drinks",
        //     "slug_category_barang" => "drinks",
        //     "harga_barang" => "17000",
        //     "berat_barang" => "100",
        //     "gambar_barang" => "juice-apel.jpg",

        // ]);
        // tb_barang::create([
        //     "name_barang" => "Aqua",
        //     "slug_name_barang" => "aqua",
        //     "keterangan_barang" => "-",
        //     "id_kategori_barang" => 4,
        //     "kategori_barang" => "Drinks",
        //     "slug_category_barang" => "drinks",
        //     "harga_barang" => "7000",
        //     "berat_barang" => "100",
        //     "gambar_barang" => "aqua.jpg",

        // ]);
        // END TABEL BARANG
    }
}
