<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TempatWisataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tempat_wisatas')->insert([
            //1
            'nama' => 'Masjid Bersejarah Sultan Suriansyah',
            'isAktif' => true,
            'linkInternet' => 'https://www.google.co.id/maps/place/Masjid+Bersejarah+Sultan+Suriansyah/@-3.2943336,114.5718894,17z/data=!3m1!4b1!4m5!3m4!1s0x2de423aa7513ac87:0xeaf1e9e019cee4f9!8m2!3d-3.294339!4d114.5761166',
            'kategori_wisata_id'  => 13,
            'kelurahan_id' => 47,
            'latitude' => -3.2943389616915900,
            'longitude' => 114.5761158791220000,
            'deskripsi' => 'Masjid Sultan Suriansyah atau Masjid Kuin adalah sebuah masjid bersejarah di Kota Banjarmasin yang merupakan masjid tertua di Kalimantan Selatan. Masjid ini dibangun pada masa pemerintahan Sultan Suriansyah (1526-1550), Raja Banjar pertama yang memeluk agama Islam. Masjid Kuin merupakan salah satu dari tiga masjid tertua yang ada di kota Banjarmasin pada masa Mufti Jamaluddin (Mufti Banjarmasin), masjid yang lainnya adalah Masjid Besar (cikal bakal Masjid Jami Banjarmasin) dan Masjid Basirih. Masjid ini terletak di Jalan Kuin Utara, Kelurahan Kuin Utara, kawasan yang dikenal sebagai Banjar Lama merupakan situs ibu kota Kesultanan Banjar yang pertama kali. Masjid ini letaknya berdekatan dengan komplek makam Sultan Suriansyah dan di tepian kiri sungai Kuin.',
            'created_at' => now(),
            'updated_at' => now(),
            'user_id' => 1,
        ]);

        DB::table('tempat_wisatas')->insert([
            //2
            'nama' => 'Masjid Jami Banjarmasin',
            'isAktif' => true,
            'linkInternet' => "https://www.google.co.id/maps/place/Masjid+Jami'+Banjarmasin/@-3.3066593,114.5931647,17z/data=!3m1!4b1!4m5!3m4!1s0x2de42396024097fd:0x2238b6ccdb20493b!8m2!3d-3.3066647!4d114.5953534",
            'kategori_wisata_id'  => 13,
            'kelurahan_id' => 50,
            'latitude' => -3.3066485950888900,
            'longitude' => 114.5953640785110000,
            'deskripsi' => 'Masjid Jami Banjarmasin atau dikenal juga sebagai Masjid Jami Sungai Jingah adalah sebuah masjid bersejarah di kota Banjarmasin, Kalimantan Selatan. Mesjid berarsitektur Banjar dan kolonial (indish) yang dibuat dengan bahan dasar kayu ulin ini dibangun pada tahun 1777.[1] Walaupun termasuk di lingkungan Kelurahan Antasan Kecil Timur, masjid yang seluruh konstruksi bangunan didominasi kayu besi alias kayu ulin ini lebih identik dikenal Masjid Jami Sungai Jingah. Lokasi awal pembangunan masjid ialah di tepi Sungai Martapura, setelah masjid ini dipindahkan sekarang berada di Jalan Masjid kelurahan Antasan Kecil Timur, Kota Banjarmasin pada tahun 1934.',
            'created_at' => now(),
            'updated_at' => now(),
            'user_id' => 1,
        ]);

        DB::table('tempat_wisatas')->insert([
            //3
            'nama' => 'Masjid Raya Sabilal Muhtadin',
            'isAktif' => true,
            'linkInternet' => 'https://www.google.co.id/maps/place/Masjid+Raya+Sabilal+Muhtadin+Banjarmasin/@-3.318945,114.5890558,17z/data=!3m1!4b1!4m5!3m4!1s0x2de423c3a2fe085b:0xa11c32c86b5171f2!8m2!3d-3.3189504!4d114.5912445',
            'kategori_wisata_id'  => 13,
            'kelurahan_id' => 22,
            'latitude' => -3.3189530391178700,
            'longitude' => 114.5912444496770000,
            'deskripsi' => 'Masjid Raya Sabilal Muhtadin adalah sebuah masjid besar yang berada di Kota Banjarmasin, Kalimantan Selatan, Indonesia, tepatnya di kelurahan Antasan Besar, kecamatan Banjarmasin Tengah. Di dalam kompleks mini juga terdapat kantor MUI Kalimantan Selatan. Masjid ini dibangun di tepi barat sungai Martapura dan dibangun pada tahun 1981. Sabilal Muhtadin, nama pilihan untuk Mesjid Raya Kota Banjarmasin ini, diambil dari nama kitab fiqih Sabilal Muhtadin karangan Ulama Besar alm. Syekh Muhammad Arsyad al-Banjari (1710—1812) yang selama hidupnya memperdalam dan mengembangkan agama Islam di Kesultanan Banjar atau Kalimantan Selatan sekarang ini. Ulama Besar ini tidak saja dikenal di seluruh Nusantara, akan tetapi dikenal dan dihormati melewati batas negerinya sampai ke Malaka, Filipina, Bombay, Mekkah, Madinah, Istambul dan Mesir.',
            'created_at' => now(),
            'updated_at' => now(),
            'user_id' => 1,
        ]);

        DB::table('tempat_wisatas')->insert([
            //4
            'nama' => 'Gereja Betel Indonesia Banjarmasin',
            'isAktif' => true,
            'linkInternet' => 'https://www.google.com/maps/place/Gereja+Bethel+Indonesia+R.k.+Ilir+Jemaat+Anugrah/@-3.3326341,114.581586,17z/data=!3m1!4b1!4m5!3m4!1s0x2de4216260e68e01:0xd7fa6c2972580f16!8m2!3d-3.3326522!4d114.5860363',
            'kategori_wisata_id'  => 13,
            'kelurahan_id' => 15,
            'latitude' => -3.3178586502910500,
            'longitude' => 114.5774365410840000,
            'deskripsi' => 'Gereja Bethel Indonesia R.K Ilir merupakan salah satu gereja di Kota Banjarmasin. Gereja ini menyediakan tempat ibadah ummat ummat kristiani untuk ibadah rutin minggu pagi - sore - malam, ibadah misa, Paskah, kamis putih, baptis (pembaptisan), Natal hingga Jumat Agung. Gereja Bethel Indonesia R.K Ilir memiliki ciri khas bangunan yang sejuk dengan sejarah gereja di Kota Banjarmasin yang kuat sehingga menjadi tempat ibadah bagi ummat Kristen Kota Banjarmasin.',
            'created_at' => now(),
            'updated_at' => now(),
            'user_id' => 1,
        ]);

        DB::table('tempat_wisatas')->insert([
            //5
            'nama' => 'GKE Eppata',
            'isAktif' => true,
            'linkInternet' => 'https://www.google.co.id/maps/place/GKE+Eppata/@-3.3154928,114.5885496,17z/data=!3m1!4b1!4m5!3m4!1s0x2de423c1173f3fa1:0xf78de214b060ac8b!8m2!3d-3.3154938!4d114.5908709',
            'kategori_wisata_id'  => 13,
            'kelurahan_id' => 22,
            'latitude' => -3.3154928060083900,
            'longitude' => 114.5908723601220000,
            'deskripsi' => 'Kalimantan (Bahasa Inggris) (Kalimantan Evangelical Church) ialah sebuah kelompok gereja Kristen Protestan di Indonesia yang didirikan pada tanggal 10 April 1839, awalnya dengan nama Gereja Dayak Evangelis (GDE). Gereja ini melakukan pelayanan iman kepada suku-suku di pulau Kalimantan yaitu suku-suku yang termasuk ke dalam rumpun suku Dayak, meski begitu GKE tidak tertutup bagi anggota non-Dayak. Gereja ini berkantor pusat di kota Banjarmasin, provinsi Kalimantan Selatan. Indonesia.',
            'created_at' => now(),
            'updated_at' => now(),
            'user_id' => 1,
        ]);

        DB::table('tempat_wisatas')->insert([
            //6
            'nama' => 'Gereja Katolik Hati Yesus Yang Maha Kudus',
            'linkInternet' => 'https://www.google.co.id/maps/place/Gereja+Katolik+Hati+Yesus+Yang+Maha+Kudus/@-3.3200191,114.5984115,17z/data=!3m1!4b1!4m5!3m4!1s0x2de423e8c5d0d435:0xe1f8a00bbe54af18!8m2!3d-3.3200245!4d114.6006002',
            'isAktif' => true,
            'kategori_wisata_id'  => 13,
            'kelurahan_id' => 28,
            'latitude' => -3.3200244613952000,
            'longitude' => 114.6006001496770000,
            'deskripsi' => 'Paroki Hati Yesus Yang Maha Kudus Veteran adalah sebuah paroki dari Gereja Katolik Roma di Keuskupan Banjarmasin; berpusat di Jalan Veteran di Kota Banjarmasin - Propinsi Kalimantan Selatan. Para pastor yang pernah berkarya di Paroki Veteran antara lain dari ordo Misionaris Keluarga Kudus (MSF) dan Kongregasi Pasionis (CP)',
            'created_at' => now(),
            'updated_at' => now(),
            'user_id' => 1,
        ]);

        DB::table('tempat_wisatas')->insert([
            //7
            'nama' => 'Katedral Keluarga Kudus',
            'isAktif' => true,
            'linkInternet' => 'https://www.google.co.id/maps/place/Katedral+Keluarga+Kudus/@-3.3246211,114.5884742,17z/data=!3m1!4b1!4m5!3m4!1s0x2de423dc6f04b5c3:0x57418dcb5032caf1!8m2!3d-3.3246265!4d114.5906629',
            'kategori_wisata_id'  => 13,
            'kelurahan_id' => 24,
            'latitude' => -3.3246291390368400,
            'longitude' => 114.5906601674690000,
            'deskripsi' => 'Gereja Katedral Keluarga Kudus Banjarmasin merupakan salah satu gereja di Kota Banjarmasin. Gereja ini menyediakan tempat ibadah ummat ummat kristiani untuk ibadah rutin minggu pagi - sore - malam, ibadah misa, Paskah, kamis putih, baptis (pembaptisan), Natal hingga Jumat Agung. Gereja Katedral Keluarga Kudus Banjarmasin memiliki ciri khas bangunan yang sejuk dengan sejarah gereja di Kota Banjarmasin yang kuat sehingga menjadi tempat ibadah bagi ummat Kristen Kota Banjarmasin.',
            'created_at' => now(),
            'updated_at' => now(),
            'user_id' => 1,
        ]);

        DB::table('tempat_wisatas')->insert([
            //8
            'nama' => 'Gereja GKE Hosiana',
            'isAktif' => true,
            'linkInternet' => 'https://www.google.co.id/maps/place/Gereja+GKE+Hosiana/@-3.3126853,114.5719726,17z/data=!3m1!4b1!4m5!3m4!1s0x2de423b57b211ae3:0xe58414c7bc0e5206!8m2!3d-3.3126874!4d114.5741782',
            'kategori_wisata_id'  => 13,
            'kelurahan_id' => 33,
            'latitude' => -3.3126853060256200,
            'longitude' => 114.5741773429300000,
            'deskripsi' => 'Gereja Kalimantan Evangelis (disingkat GKE) atau Gereja Evangelikal di Kalimantan (Bahasa Inggris) (Kalimantan Evangelical Church) ialah sebuah kelompok gereja Kristen Protestan di Indonesia yang didirikan pada tanggal 10 April 1839, awalnya dengan nama Gereja Dayak Evangelis (GDE). Gereja ini melakukan pelayanan iman kepada suku-suku di pulau Kalimantan yaitu suku-suku yang termasuk ke dalam rumpun suku Dayak, meski begitu GKE tidak tertutup bagi anggota non-Dayak. Gereja ini berkantor pusat di kota Banjarmasin, provinsi Kalimantan Selatan. Indonesia.',
            'created_at' => now(),
            'updated_at' => now(),
            'user_id' => 1,
        ]);

        DB::table('tempat_wisatas')->insert([
            //9
            'nama' => 'HKBP Gereja Banjarmasin',
            'isAktif' => true,
            'linkInternet' => 'https://www.google.co.id/maps/place/HKBP+GEREJA+BANJARMASIN/@-3.3133325,114.5701007,17z/data=!3m1!4b1!4m5!3m4!1s0x2de423c983785a2b:0x61900fff1444f4bb!8m2!3d-3.313354!4d114.5723323',
            'kategori_wisata_id'  => 13,
            'kelurahan_id' => 33,
            'latitude' => -3.3133485723737000,
            'longitude' => 114.5723215361830000,
            'deskripsi' => 'Gereja HKBP Banjarmasin merupakan salah satu gereja di Kota Banjarmasin. Gereja ini menyediakan tempat ibadah ummat ummat kristiani untuk ibadah rutin minggu pagi - sore - malam, ibadah misa, Paskah, kamis putih, baptis (pembaptisan), Natal hingga Jumat Agung. Gereja HKBP Banjarmasin memiliki ciri khas bangunan yang sejuk dengan sejarah gereja di Kota Banjarmasin yang kuat sehingga menjadi tempat ibadah bagi ummat Kristen Kota Banjarmasin.',
            'created_at' => now(),
            'updated_at' => now(),
            'user_id' => 1,
        ]);

        DB::table('tempat_wisatas')->insert([
            //10
            'nama' => 'Gereja Yesus Sejati Banjarmasin',
            'isAktif' => true,
            'linkInternet' => 'https://www.google.co.id/maps/place/Gereja+Yesus+Sejati+Banjarmasin/@-3.3200056,114.5908108,17z/data=!3m1!4b1!4m5!3m4!1s0x2de423e9fd50851b:0x207015672ee309ba!8m2!3d-3.3200169!4d114.5950392',
            'kategori_wisata_id'  => 13,
            'kelurahan_id' => 23,
            'latitude' => -3.3200538047109300,
            'longitude' => 114.5950379496770000,
            'deskripsi' => 'Gereja Yesus Sejati Banjarmasin merupakan salah satu gereja di Kota Banjarmasin. Gereja ini menyediakan tempat ibadah ummat ummat kristiani untuk ibadah rutin minggu pagi - sore - malam, ibadah misa, Paskah, kamis putih, baptis (pembaptisan), Natal hingga Jumat Agung. Gereja Yesus Sejati Banjarmasin memiliki ciri khas bangunan yang sejuk dengan sejarah gereja di Kota Banjarmasin yang kuat sehingga menjadi tempat ibadah bagi ummat Kristen Kota Banjarmasin.',
            'created_at' => now(),
            'updated_at' => now(),
            'user_id' => 1,
        ]);

        DB::table('tempat_wisatas')->insert([
            //11
            'nama' => 'Gereja Pantekosta Indonesia',
            'isAktif' => true,
            'linkInternet' => 'https://www.google.com/maps/place/Gereja+Pantekosta+di+Indonesia+(GPdI)+Kota+Banjarmasin/@-3.3302541,114.5800736,12.44z/data=!4m9!1m2!2m1!1sGereja+Pantekosta+di+Indonesia!3m5!1s0x2de423c29f323bab:0xf7eadf0de6e64f6f!8m2!3d-3.320348!4d114.5949843!15sCh5HZXJlamEgUGFudGVrb3N0YSBkaSBJbmRvbmVzaWGSAQZjaHVyY2g',
            'kategori_wisata_id'  => 13,
            'kelurahan_id' => 23,
            'latitude' => -3.3203338625938623,
            'longitude' => 114.59498359255569,
            'deskripsi' => 'Gereja Pantekosta di Indonesia (disingkat GPdI) merupakan salah satu lembaga Gereja Kristen di Indonesia yang mempercayai Allah yang Esa, Allah Tri-Tunggal, dalam namaNya yang berkuasa, nama Allah Bapa , Allah Anak dan Roh Kudus yaitu TUHAN Yesus Kristus. GPdI percaya dan menantikan kedatangan Tuhan Yesus Kristus kedua kali, bukan sebagai bayi seperti pada peristiwa Natal, namun sebagai Raja di atas segala raja. Penggunaan nama ini merupakan sebagai pengganti nama Vereeniging De Pinkstergemeente in Nederlandsch Oost Indie. Aliran ini merupakan salah satu denominasi Pantekosta terbesar di Indonesia.',
            'created_at' => now(),
            'updated_at' => now(),
            'user_id' => 1,
        ]);

        DB::table('tempat_wisatas')->insert([
            //12
            'nama' => 'Gereja Katolik St. Perawan Maria Yang Terkandung Tanpa Noda',
            'isAktif' => true,
            'linkInternet' => 'https://www.google.co.id/maps/place/GBI+Pak+Niko+Banjarmasin/@-3.3210536,114.5927747,17z/data=!3m1!4b1!4m5!3m4!1s0x2de423c2a3ef0bf9:0x17042fd0228b6196!8m2!3d-3.3210609!4d114.5949566',
            'kategori_wisata_id'  => 13,
            'kelurahan_id' => 11,
            'latitude' => -3.331868340066398,
            'longitude' => 114.59194336370979,
            'deskripsi' => 'Gereja Santa Perawan Maria Yang Terkandung Tanpa Noda - Paroki Kelayan merupakan Paroki Gereja Katolik Roma di Keuskupan Banjarmasin; terletak di Kelurahan Kelayan Barat, Kecamatan Banjarmasin Selatan, Kota Banjarmasin, Kalimantan Selatan. Pada 5 November 1939, Mgr. J. Kusters, Prefek Apostolik Banjarmasin memberkati gereja di Kelayan, dan tanggal 11 November 1939 Paroki Kelayan didirikan dengan batas antar kedua Paroki di Banjarmasin (dengan Paroki Katedral Keluarga Kudus) adalah Sungai Martapura.',
            'created_at' => now(),
            'updated_at' => now(),
            'user_id' => 1,
        ]);

        DB::table('tempat_wisatas')->insert([
            //13
            'nama' => 'HKBP Borneo Res. Banjarmasin',
            'isAktif' => true,
            'linkInternet' => 'https://www.google.com/maps/place/HKBP+Borneo+Res.+Banjarmasin/@-3.3105981,114.57481,18.33z/data=!4m9!1m2!2m1!1sgereja+indonesia+banjarmasin!3m5!1s0x2de42358a0897d5b:0x5f82a108c5fce657!8m2!3d-3.310327!4d114.5751514!15sChxnZXJlamEgaW5kb25lc2lhIGJhbmphcm1hc2luWh4iHGdlcmVqYSBpbmRvbmVzaWEgYmFuamFybWFzaW6SAQZjaHVyY2iaASNDaFpEU1VoTk1HOW5TMFZKUTBGblNVUkpkamMyZDJKQkVBRQ',
            'kategori_wisata_id'  => 13,
            'kelurahan_id' => 2,
            'latitude' => -3.3103090384768983,
            'longitude' => 114.57513999261465,
            'deskripsi' => 'HKBP Borneo Res. Banjarmasin (Gereja) terletak di Kota Banjar Baru, Kalimantan Selatan, Indonesia. Daerah atau landmark terdekat adalah Banjarmasin Barat. Alamat HKBP Borneo Res. Banjarmasin adalah Belitung Selatan, Banjarmasin Barat, Kota Banjarmasin, Kalimantan Selatan 70128, Indonesia. HKBP Borneo Res.',
            'created_at' => now(),
            'updated_at' => now(),
            'user_id' => 1,
        ]);

        DB::table('tempat_wisatas')->insert([
            //14
            'nama' => 'Lontong Orari Banjarmasin',
            'isAktif' => true,
            'linkInternet' => 'https://www.google.co.id/maps/place/Lontong+Orari+Banjarmasin/@-3.3141084,114.5962308,17z/data=!3m1!4b1!4m5!3m4!1s0x2de423eae2586c99:0x844946f2a0cc155c!8m2!3d-3.3141036!4d114.5984199',
            'kategori_wisata_id'  => 14,
            'kelurahan_id' => 31,
            'latitude' => -3.3141010880922200,
            'longitude' => 114.5984209270540000,
            'deskripsi' => 'Kota Banjarmasin Kalimantan Selatan memiliki beragam destinasi wisata menarik yang bisa kamu kunjungi saat liburan. Dan salah satu yang bisa kamu nikmati adalah wisata kulinernya. Bagi kamu yang suka lontong, bakal suka lihat informasi ini. Kota Banjarmasin juga terkenal dengan wisata kuliner Lontong Orari. Jadi, selain berburu kuliner Soto Banjar, ada baiknya kamu coba sarapan atau makan siang lontong ini. Lontong Orari terkenal dengan enak dan gurihnya. Banyak warga yang rutin datang kemari untuk makan siang, sarapan, atau makan malam. Datang lebih awal untuk mendapatkan bagian badan ikan haruan. Kalau kebagian kepala dan ekor, kamu bisa minta dobel ikannya. Selain lontong ada nasi kuning di rumah makan ini.',
            'created_at' => now(),
            'updated_at' => now(),
            'user_id' => 1,
        ]);

        DB::table('tempat_wisatas')->insert([
            //15
            'nama' => 'Waroeng Pondok Bahari',
            'isAktif' => true,
            'linkInternet' => 'https://www.google.co.id/maps/place/Waroeng+Pondok+Bahari/@-3.3176961,114.5922092,17z/data=!3m1!4b1!4m5!3m4!1s0x2de423c210b1080b:0xc57e789be939c487!8m2!3d-3.3177015!4d114.5943979',
            'kategori_wisata_id'  => 14,
            'kelurahan_id' => 23,
            'latitude' => -3.3177045239812300,
            'longitude' => 114.5943968153290000,
            'deskripsi' => 'Warung makanan dengan khas nuansa banjar serta ornamen dan ruangan bahari sangat pas untuk makan bersama. Warung ini menyediakan berbagai macam menu makanan khas Banjarmasin, seperti sop banjar, nasi kuning haruan, soto banjar, dll. Selain itu tempatnya juga sangat nyaman dan cocok untuk makan bersama keluarga, teman maupun kerabat.',
            'created_at' => now(),
            'updated_at' => now(),
            'user_id' => 1,
        ]);

        DB::table('tempat_wisatas')->insert([
            //16
            'nama' => 'Soto Bang Mamat',
            'isAktif' => true,
            'linkInternet' => 'https://www.google.co.id/maps/place/Depot+Soto+Bang+Amat/@-3.3043872,114.6090182,17z/data=!3m1!4b1!4m5!3m4!1s0x2de4238e4566331d:0x34083a92d1c5d264!8m2!3d-3.3043999!4d114.6132459',
            'kategori_wisata_id'  => 14,
            'kelurahan_id' => 34,
            'latitude' => -3.3043763875374000,
            'longitude' => 114.6132254509260000,
            'deskripsi' => 'Soto daging yang enaaakk banget di daerah muara karang, lengkap dengan acar, emping, dan perkedel kentang. Jangan lupa pake sambel yang banyak dan jeruk nipis biar nampol pedes asem2 seger dan gurih. Extra in kerupuk putih, mereka sedia lho.',
            'created_at' => now(),
            'updated_at' => now(),
            'user_id' => 1,
        ]);

        DB::table('tempat_wisatas')->insert([
            //17
            'nama' => 'Depot Sari Patin',
            'isAktif' => true,
            'linkInternet' => 'https://www.google.co.id/maps/place/Depot+Sari+Patin/@-3.3011977,114.5874702,17z/data=!3m1!4b1!4m5!3m4!1s0x2de423a37e448207:0x24473a58f5e526a7!8m2!3d-3.3012031!4d114.5896589',
            'kategori_wisata_id'  => 14,
            'kelurahan_id' => 51,
            'latitude' => -3.3011923505798200,
            'longitude' => 114.5896588496750000,
            'deskripsi' => 'Depot Sari Patin yang terletak di Jalan Brigjend H Hasan Basri No.53, Sungai Miai, Kecamatan Banjarmasin Utara, Kota Banjarmasin, Kalimantan Selatan dikenal sebagai salah satu rumah makan yang menyediakan kuliner khas Banjar.',
            'created_at' => now(),
            'updated_at' => now(),
            'user_id' => 1,
        ]);

        DB::table('tempat_wisatas')->insert([
            //18
            'nama' => 'Rumah Sambal Acan Raja Banjar',
            'isAktif' => true,
            'linkInternet' => 'https://www.google.co.id/maps/place/Rumah+Sambal+Acan+Raja+Banjar/@-3.3273915,114.5872923,17z/data=!3m1!4b1!4m5!3m4!1s0x2de423d9256288f7:0x4e3df0697824e75b!8m2!3d-3.3274223!4d114.5895229',
            'kategori_wisata_id'  => 14,
            'kelurahan_id' => 8,
            'latitude' => -3.3274233078807800,
            'longitude' => 114.5895224823000000,
            'deskripsi' => 'Rumah Makan Sambal Acan Raja Banjar (ARB) dirintis Aulia Abdi bersama isteri tercintanya, Gina Puspita Dewi di tahun 2014. Diawali dengan menjual sambal acan bikinan isterinya secara online. Modal awal hanya Rp 100.000.',
            'created_at' => now(),
            'updated_at' => now(),
            'user_id' => 1,
        ]);

        DB::table('tempat_wisatas')->insert([
            //19
            'nama' => 'Wisata Kuliner Kampung Arab',
            'isAktif' => true,
            'linkInternet' => 'https://www.google.co.id/maps/place/Wisata+kuliner+kampung+arab/@-3.3046008,114.5860378,17z/data=!3m1!4b1!4m5!3m4!1s0x2de4236d5744bf9d:0xc6c9c8e36e50c490!8m2!3d-3.3046062!4d114.5882265',
            'kategori_wisata_id'  => 14,
            'kelurahan_id' => 29,
            'latitude' => -3.3045591735872100,
            'longitude' => 114.5882271225730000,
            'deskripsi' => 'Pemerintahan Kota Banjarmasin terus mengembangkan sejumlah tempat menjadi kawasan wisata. Baru-baru ini, kembali diresmikan satu destinasi yakni Arabian Food yang terletak di Jl. Antasan Kecil Barat atau biasa dikenal dengan nama Kampung Arab. Seperti diketahui, sejak dulu Kampung Arab sudah ada dan dikenal oleh masyarakat luas. Keberadaan Kampung Arab ini menjadi salah satu kekhasan Banjarmasin yang bisa berpotensi dikembangkan menjadi kawasan wisata dan perekonomian warga.',
            'created_at' => now(),
            'updated_at' => now(),
            'user_id' => 1,
        ]);

        DB::table('tempat_wisatas')->insert([
            //20
            'nama' => 'Mie Bancir Khas Banjar Agus Sasirangan',
            'isAktif' => true,
            'linkInternet' => 'https://www.google.co.id/maps/place/Mie+bancir+khas+banjar+agus+sasirangan+outlete+KAYUTANGI/@-3.2847217,114.5874868,17z/data=!3m1!4b1!4m5!3m4!1s0x2de4230a211e0d25:0xe38d400f895698ff!8m2!3d-3.2847271!4d114.5896755',
            'kategori_wisata_id'  => 14,
            'kelurahan_id' => 43,
            'latitude' => -3.2847263360131500,
            'longitude' => 114.5896742674550000,
            'deskripsi' => 'Mie Bancir merupakan sajian kuliner khas masyarakat Banjar dengan bahan utama  mie kuning. Sedangkan bumbu dasar yang digunakan untuk membuat kuahnya kurang lebih sama dengan bahan untuk membuat hidangan Sop/Soto Banjar dengan ditambah saus tomat khas Banjar.',
            'created_at' => now(),
            'updated_at' => now(),
            'user_id' => 1,
        ]);

        DB::table('tempat_wisatas')->insert([
            //21
            'nama' => 'Waterboom Banua Anyar',
            'isAktif' => true,
            'linkInternet' => 'https://www.google.co.id/maps/place/WATER+BOOM+%7C+Banua+Anyar/@-3.3097302,114.6054288,14.5z/data=!4m5!3m4!1s0x2de4238a7444d9e3:0xef2c7e64735b91fb!8m2!3d-3.3084032!4d114.6192556',
            'kategori_wisata_id'  => 15,
            'kelurahan_id' => 34,
            'latitude' => -3.3083871335681000,
            'longitude' => 114.6192609643780000,
            'deskripsi' => 'Destinasi wisata terakhir yang tidak boleh Anda lewatkan ketika berkunjung ke Banjarmasin yaitu Waterboom Banua Anyar. Objek wisata yang berada di kawasan Benua Anyar ini menawarkan berbagai wahana seru untuk para pengunjungnya. Di sini Anda bisa puas bermain air bersama keluarga, karena berbagai fasilitasnya yang begitu menunjang seperti sewa peralatan renang, kolam anak, water slide, wahana permainan air, dan banyak lagi lainnya.',
            'created_at' => now(),
            'updated_at' => now(),
            'user_id' => 1,
        ]);

        DB::table('tempat_wisatas')->insert([
            //22
            'nama' => 'Alfin WaterBoom',
            'isAktif' => true,
            'linkInternet' => 'https://www.google.co.id/maps/place/Alfin+Water+Boom/@-3.3395227,114.5862393,17z/data=!3m1!4b1!4m5!3m4!1s0x2de4216e69dad563:0x598a7b6e8ebe8ac2!8m2!3d-3.3395281!4d114.588428',
            'kategori_wisata_id'  => 15,
            'kelurahan_id' => 15,
            'latitude' => -3.3395709036366500,
            'longitude' => 114.5884279496790000,
            'deskripsi' => 'Wisata kolam renang permainan semakin bermunculan di Kota Banjarmasin, Provinsi Kalimantan Selatan. Tidak hanya di tengah kota, di pinggiran pun juga ada, seperti Alfin Waterboom. Walau berada di pemukiman padat, lokasinya di Jalan Tembus Mantuil, Kelurahan Kelayan Selatan, Kecamatan Banjarmasin Selatan, ini banyak dikunjungi masyarakat.',
            'created_at' => now(),
            'updated_at' => now(),
            'user_id' => 1,
        ]);

        DB::table('tempat_wisatas')->insert([
            //23
            'nama' => 'Borneo Mini Waterpark',
            'isAktif' => true,
            'linkInternet' => 'https://www.google.co.id/maps/place/Borneo+Mini+Waterpark/@-3.2798212,114.5741721,17z/data=!3m1!4b1!4m5!3m4!1s0x2de4238d5891bcfd:0xeeb9c65e988c10a8!8m2!3d-3.2798296!4d114.5763693',
            'kategori_wisata_id'  => 15,
            'kelurahan_id' => 43,
            'latitude' => -3.2798105331001600,
            'longitude' => 114.5763661643530000,
            'deskripsi' => 'Beragam tempat wisata di Kalimantan Selatan bisa dikunjungi bersama keluarga, termasuk objek wisata airnya. Salah satu pilihan wisata air di Banjarmasin yang seru dan cocok untuk seluruh keluarga adalah Borneo Mini Waterpark.Lokasinya cukup mudah dijangkau yaitu di Jalan AMD Raya, HKSN, Banjarmasin Utara, Kota Banjarmasin, Kalimantan Selatan. Tempat wisata ini cocok untuk seluruh keluarga, apalagi jika cuaca tengah panas tentunya bermain air dan berenang akan sangat menyegarkan.',
            'created_at' => now(),
            'updated_at' => now(),
            'user_id' => 1,
        ]);

        DB::table('tempat_wisatas')->insert([
            //24
            'nama' => 'Kolam Renang Gelanggang Olaharaga Hasanudin',
            'isAktif' => true,
            'linkInternet' => 'https://www.google.co.id/maps/place/Kolam+Renang+Gelanggang+Olahraga+Hasanudin/@-3.3266397,114.6015054,17z/data=!3m1!4b1!4m5!3m4!1s0x2de423e38fad9889:0x766c966113e7d79d!8m2!3d-3.3266451!4d114.6036941',
            'kategori_wisata_id'  => 15,
            'kelurahan_id' => 32,
            'latitude' => -3.3264789446046900,
            'longitude' => 114.6034472803230000,
            'deskripsi' => 'Kolam Renang Gelanggang Remaja merupakan salah satu kolam renang yang berada di kompleks Gelanggang Olahraga (GOR) Hasanuddin HM, Kota Banjarmasin. Kolam renang berada di ujung kompleks di wilayah Jalan Pangeran Antasari RT 13 Kelurahan Sungai Baru, Banjarmasin Tengah, Banjarmasin, Kalimantan Selatan. Kolam renang diresmikan bertepatan dengan GOR Hasanuddin HM pada 10 November 1975 oleh Menteri Dalam Negeri Amir Mahmud.',
            'created_at' => now(),
            'updated_at' => now(),
            'user_id' => 1,
        ]);

        DB::table('tempat_wisatas')->insert([
            //25
            'nama' => 'Taman nol km',
            'isAktif' => true,
            'linkInternet' => 'https://www.google.co.id/maps/place/Taman+Nol+km/@-3.3136836,114.5897723,17z/data=!3m1!4b1!4m5!3m4!1s0x2de42315762b074d:0xe0ffc0c5ffbc867!8m2!3d-3.313689!4d114.591961',
            'kategori_wisata_id'  => 15,
            'kelurahan_id' => 22,
            'latitude' => -3.3150443177046500,
            'longitude' => 114.5925079285310000,
            'deskripsi' => 'Pembangunan Taman Siring 0 KM merupakan bagian dari revitalisasi Kota Pusaka Banjarmasin yang bertemakan Kota Sungai sebagai front city yang dibangun pada 2016, oleh Ditjen Cipta Karya melalui Satker Penataan Bangunan Lingkungan Bidang Cipta Karya Provinsi Kalimantan Selatan. Taman Siring 0 KM terletak di tengah Kota Banjarmasin dan berada disekitar Pasar terapung Kota, 20 km dari Bandara Syamsuddin Noor apabila minggu tiba kawasan ini menjadi area car free dayjuga menjadi tempat berkumpulnya komunitas-komunitas yang memanfaatkan hari libur untuk berkumpul dan berlatih seperti komunitas parkour dan skateboard memanfaatkan jumping area yang memang disediakan untuk olahraga tersebut. Pengunjung juga terlihat memanfaatkan fasilitas taman seperti batu reflexy atau duduk duduk gazebo sambil menikmati jajanan di sekitar taman.',
            'created_at' => now(),
            'updated_at' => now(),
            'user_id' => 1,
        ]);

        DB::table('tempat_wisatas')->insert([
            //26
            'nama' => 'Taman kamboja',
            'isAktif' => true,
            'linkInternet' => 'https://www.google.co.id/maps/place/Taman+Kamboja/@-3.322101,114.5850199,17z/data=!3m1!4b1!4m5!3m4!1s0x2de423db2e78adeb:0x1bdceb2be507897d!8m2!3d-3.3221064!4d114.5872086',
            'kategori_wisata_id'  => 15,
            'kelurahan_id' => 25,
            'latitude' => -3.3221063613711700,
            'longitude' => 114.5872058674680000,
            'deskripsi' => 'Taman Kamboja, Taman Wisata Favorit Dilengkapi Wahana Permainan di Banjarmasin by Dara Mendra Taman Kamboja, Taman Wisata Favorit Dilengkapi Wahana Permainan di Banjarmasin Harga Tiket: -, Jam Operasional: 24 Jam, Alamat: Kertak Baru Ulu, Kec. Banjarmasin Tengah, Kota Banjarmasin, Kalimantan Selatan; Map: Cek Lokasi Taman Kamboja Banjarmasin atau lebih dikenal dengan nama RTH oleh warga sekitar ini merupakan sebuah taman yang menyediakan banyak fasilitas permainan untuk anak-anak. Taman ini dulunya merupakan kompleks kuburan pada zaman Belanda namun oleh pemerintah setempat berhasil mengubahnya menjadi tempat rekreasi.RTH merupakan taman yang berlokasi di pusat Kota Banjarmasin. Banyak sekali warga yang melakukan aktivitas di dalam taman tersebut. Dari orang dewasa yang bermain bersama anak-anaknya hingga para muda mudi yang berdua bersama pasangan atau teman mereka duduk bersantai di bawah pohon.Taman Kamboja tidak hanya menawarkan wahana permainan saja. Namun, terdapat air mancur dengan beragam warna yang bisa disaksikan di tengah taman. Keindahan dari air mancur ini akan membuat siapa saja yang melihatnya akan terpikat dengan keindahan dari beragam warna yang dihasilkan olehnya.',
            'created_at' => now(),
            'updated_at' => now(),
            'user_id' => 1,
        ]);

        DB::table('tempat_wisatas')->insert([
            //27
            'nama' => 'Taman Banjarmasin Bungas',
            'isAktif' => true,
            'linkInternet' => 'https://www.google.co.id/maps/place/Taman+Banjarmasin+Bungas/@-3.3048458,114.5860451,17z/data=!3m1!4b1!4m5!3m4!1s0x2de423bb6c934073:0x3c4a7ae0d0fc879!8m2!3d-3.3048512!4d114.5882338',
            'kategori_wisata_id'  => 15,
            'kelurahan_id' => 29,
            'latitude' => -3.3048549886528300,
            'longitude' => 114.5882396109840000,
            'deskripsi' => 'Taman Bungas atau lebih tepatnya taman yang berukuran mini kira-kira berukuran 4x10 meter. Letaknya tidak jauh dari gedung Menara Pandang, taman ini terletak di Jalan Pierre Tendean Banjarmasin, Kalsel.',
            'created_at' => now(),
            'updated_at' => now(),
            'user_id' => 1,
        ]);

        DB::table('tempat_wisatas')->insert([
            //28
            'nama' => 'Taman Edukasi Kota Banjarmasin',
            'isAktif' => true,
            'linkInternet' => 'https://www.google.co.id/maps/place/TAMAN+EDUKASI+KOTA+BANJARMASIN/@-3.324043,114.6001197,17z/data=!3m1!4b1!4m5!3m4!1s0x2de42376a25f671f:0x67b44a53c32d5348!8m2!3d-3.3240484!4d114.6023084',
            'kategori_wisata_id'  => 15,
            'kelurahan_id' => 28,
            'latitude' => -3.3240460683993900,
            'longitude' => 114.6023150508240000,
            'deskripsi' => 'Taman Edukasi Baiman merupakan taman mini yang terletak di Jalan A Yani Km 2, Kota Banjarmasin, Kalsel, tepat di samping pintu masuk Duta Mall. Panjang ini sekira 40 meter dengan lapisan beton di lantainya dan terdapat bola terbuat dari beton berfungsi sebagai pagar.',
            'created_at' => now(),
            'updated_at' => now(),
            'user_id' => 1,
        ]);

        DB::table('tempat_wisatas')->insert([
            //29
            'nama' => 'Taman Siring Sungai Martapura',
            'isAktif' => true,
            'linkInternet' => 'https://www.google.co.id/maps/place/Taman+Siring+Sungai+Martapura,+Banjarmasin/@-3.319501,114.589197,17z/data=!3m1!4b1!4m5!3m4!1s0x2de423c2f70bfddd:0x29051d2d8e63e96f!8m2!3d-3.3195064!4d114.5934242',
            'kategori_wisata_id'  => 15,
            'kelurahan_id' => 23,
            'latitude' => -3.3195063985214100,
            'longitude' => 114.5934329351540000,
            'deskripsi' => 'Taman Siring merupakan salah satu destinasi wisata Banjarmasin yang cukup terkenal. Taman yang terletak di Jalan Kapten Pierre Tendean, Banjarmasin, Kalimantan Selatan ini menjadi salah satu destinasi wisata yang wajib dikunjungi, bahkan tak sedikit pengunjung yang menghabiskan waktunya bersama keluarga, pasangan, atau teman menikmati keindahan Taman Siring. Taman Siring biasanya ramai pada pukul 17.00 hingga 24.00 WITA, suasananya yang sejuk karena banyak ditumbuhi pohon-pohon rindang membuat siapapun betah berlama-lama disana.  Belum lagi keindahan yang ditawarkan seperti Sungai Martapura dan kota Banjarmasin mampu menarik hati siapa saja. Dengan hal itulah mengapa Siring begitu digemari menjadi salah satu daftar tujuan destinasi wisata Banjarmasin.',
            'created_at' => now(),
            'updated_at' => now(),
            'user_id' => 1,
        ]);

        DB::table('tempat_wisatas')->insert([
            //30
            'nama' => 'Hutan Kota Sabilal Muhtadin',
            'isAktif' => true,
            'linkInternet' => 'https://www.google.co.id/maps/place/Hutan+Kota+Sabilal+Muhtadin+Banjarmasin/@-3.3200529,114.589713,17z/data=!3m1!4b1!4m5!3m4!1s0x2de423c31a93bb13:0x26b53c01e81ae0af!8m2!3d-3.3200583!4d114.5919017',
            'kategori_wisata_id'  => 15,
            'kelurahan_id' => 22,
            'latitude' => -3.3200629859885000,
            'longitude' => 114.5919063937980000,
            'deskripsi' => 'Hampir setiap hari saat sorenya terlebih jika akhir pekan halaman Masjid Raya Sabilal Muhtadin Banjarmasin menjadi tempat sejumlah warga menikmati suasana dibulan Ramadhan. Ada yang duduk di bawah pohon rindang, berjalan memutari halaman masjid, dan banyak juga berfoto selfi serta berbagai aktivitas warga lainnya.',
            'created_at' => now(),
            'updated_at' => now(),
            'user_id' => 1,
        ]);
    }
}
