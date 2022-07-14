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
            'kategoriWisataId' => 13,
            'kelurahanId' => 47,
            'latitude' => -3.2943389616915900,
            'longitude' => 114.5761158791220000,
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //2
            'nama' => 'Masjid Jami Banjarmasin',
            'isAktif' => true,
            'linkInternet' => "https://www.google.co.id/maps/place/Masjid+Jami'+Banjarmasin/@-3.3066593,114.5931647,17z/data=!3m1!4b1!4m5!3m4!1s0x2de42396024097fd:0x2238b6ccdb20493b!8m2!3d-3.3066647!4d114.5953534",
            'kategoriWisataId' => 13,
            'kelurahanId' => 50,
            'latitude' => -3.3066485950888900,
            'longitude' => 114.5953640785110000,
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //3
            'nama' => 'Masjid Raya Sabilal Muhtadin',
            'isAktif' => true,
            'linkInternet' => 'https://www.google.co.id/maps/place/Masjid+Raya+Sabilal+Muhtadin+Banjarmasin/@-3.318945,114.5890558,17z/data=!3m1!4b1!4m5!3m4!1s0x2de423c3a2fe085b:0xa11c32c86b5171f2!8m2!3d-3.3189504!4d114.5912445',
            'kategoriWisataId' => 13,
            'kelurahanId' => 22,
            'latitude' => -3.3189530391178700,
            'longitude' => 114.5912444496770000,
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //4
            'nama' => 'Gereja Indonesia Banjarmasin',
            'isAktif' => true,
            'linkInternet' => 'https://www.google.co.id/maps/place/Gereja+indonesia+Banjarmasin/@-3.3178653,114.5752465,17z/data=!3m1!4b1!4m5!3m4!1s0x2de423335da76821:0xe265bb5b57f6f289!8m2!3d-3.3178707!4d114.5774353',
            'kategoriWisataId' => 13,
            'kelurahanId' => 33,
            'latitude' => -3.3178586502910500,
            'longitude' => 114.5774365410840000,
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //5
            'nama' => 'GKE Eppata',
            'isAktif' => true,
            'linkInternet' => 'https://www.google.co.id/maps/place/GKE+Eppata/@-3.3154928,114.5885496,17z/data=!3m1!4b1!4m5!3m4!1s0x2de423c1173f3fa1:0xf78de214b060ac8b!8m2!3d-3.3154938!4d114.5908709',
            'kategoriWisataId' => 13,
            'kelurahanId' => 22,
            'latitude' => -3.3154928060083900,
            'longitude' => 114.5908723601220000,
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //6
            'nama' => 'Gereja Katolik Hati Yesus Yang Maha Kudus',
            'linkInternet' => 'https://www.google.co.id/maps/place/Gereja+Katolik+Hati+Yesus+Yang+Maha+Kudus/@-3.3200191,114.5984115,17z/data=!3m1!4b1!4m5!3m4!1s0x2de423e8c5d0d435:0xe1f8a00bbe54af18!8m2!3d-3.3200245!4d114.6006002',
            'isAktif' => true,
            'kategoriWisataId' => 13,
            'kelurahanId' => 28,
            'latitude' => -3.3200244613952000,
            'longitude' => 114.6006001496770000,
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //7
            'nama' => 'Katedral Keluarga Kudus',
            'isAktif' => true,
            'linkInternet' => 'https://www.google.co.id/maps/place/Katedral+Keluarga+Kudus/@-3.3246211,114.5884742,17z/data=!3m1!4b1!4m5!3m4!1s0x2de423dc6f04b5c3:0x57418dcb5032caf1!8m2!3d-3.3246265!4d114.5906629',
            'kategoriWisataId' => 13,
            'kelurahanId' => 24,
            'latitude' => -3.3246291390368400,
            'longitude' => 114.5906601674690000,
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //8
            'nama' => 'Gereja GKE Hosiana',
            'isAktif' => true,
            'linkInternet' => 'https://www.google.co.id/maps/place/Gereja+GKE+Hosiana/@-3.3126853,114.5719726,17z/data=!3m1!4b1!4m5!3m4!1s0x2de423b57b211ae3:0xe58414c7bc0e5206!8m2!3d-3.3126874!4d114.5741782',
            'kategoriWisataId' => 13,
            'kelurahanId' => 33,
            'latitude' => -3.3126853060256200,
            'longitude' => 114.5741773429300000,
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //9
            'nama' => 'HKBP Gereja Banjarmasin',
            'isAktif' => true,
            'linkInternet' => 'https://www.google.co.id/maps/place/HKBP+GEREJA+BANJARMASIN/@-3.3133325,114.5701007,17z/data=!3m1!4b1!4m5!3m4!1s0x2de423c983785a2b:0x61900fff1444f4bb!8m2!3d-3.313354!4d114.5723323',
            'kategoriWisataId' => 13,
            'kelurahanId' => 33,
            'latitude' => -3.3133485723737000,
            'longitude' => 114.5723215361830000,
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //10
            'nama' => 'Gereja Yesus Sejati Banjarmasin',
            'isAktif' => true,
            'linkInternet' => 'https://www.google.co.id/maps/place/Gereja+Yesus+Sejati+Banjarmasin/@-3.3200056,114.5908108,17z/data=!3m1!4b1!4m5!3m4!1s0x2de423e9fd50851b:0x207015672ee309ba!8m2!3d-3.3200169!4d114.5950392',
            'kategoriWisataId' => 13,
            'kelurahanId' => 23,
            'latitude' => -3.3200538047109300,
            'longitude' => 114.5950379496770000,
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //11
            'nama' => 'GBI Kingdom of God Banjarmasin',
            'isAktif' => true,
            'linkInternet' => 'https://www.google.co.id/maps/place/GBI+Kingdom+of+God+Banjarmasin/@-3.3200056,114.5908108,17z/data=!4m5!3m4!1s0x2de423e81decd85b:0xa2719730b534ee27!8m2!3d-3.3208863!4d114.5950768',
            'kategoriWisataId' => 13,
            'kelurahanId' => 23,
            'latitude' => -3.3208865613852500,
            'longitude' => 114.5950749496770000,
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //12
            'nama' => 'GBI Pak Niko Banjarmasin',
            'isAktif' => true,
            'linkInternet' => 'https://www.google.co.id/maps/place/GBI+Pak+Niko+Banjarmasin/@-3.3210536,114.5927747,17z/data=!3m1!4b1!4m5!3m4!1s0x2de423c2a3ef0bf9:0x17042fd0228b6196!8m2!3d-3.3210609!4d114.5949566',
            'kategoriWisataId' => 13,
            'kelurahanId' => 23,
            'latitude' => -3.3210562836788100,
            'longitude' => 114.5949526208410000,
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //13
            'nama' => 'Gereja HKBP Banjarmasin',
            'isAktif' => true,
            'linkInternet' => 'https://www.google.co.id/maps/place/Gereja+HKBP+Banjarmasin/@-3.3236698,114.587698,17z/data=!3m1!4b1!4m5!3m4!1s0x2de423dc7e932e15:0x21fc99114044b46a!8m2!3d-3.3237433!4d114.5898587',
            'kategoriWisataId' => 13,
            'kelurahanId' => 24,
            'latitude' => -3.3237455306186800,
            'longitude' => 114.5898565849650000,
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //14
            'nama' => 'Lontong Orari Banjarmasin',
            'isAktif' => true,
            'linkInternet' => 'https://www.google.co.id/maps/place/Lontong+Orari+Banjarmasin/@-3.3141084,114.5962308,17z/data=!3m1!4b1!4m5!3m4!1s0x2de423eae2586c99:0x844946f2a0cc155c!8m2!3d-3.3141036!4d114.5984199',
            'kategoriWisataId' => 14,
            'kelurahanId' => 31,
            'latitude' => -3.3141010880922200,
            'longitude' => 114.5984209270540000,
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //15
            'nama' => 'Waroeng Pondok Bahari',
            'isAktif' => true,
            'linkInternet' => 'https://www.google.co.id/maps/place/Waroeng+Pondok+Bahari/@-3.3176961,114.5922092,17z/data=!3m1!4b1!4m5!3m4!1s0x2de423c210b1080b:0xc57e789be939c487!8m2!3d-3.3177015!4d114.5943979',
            'kategoriWisataId' => 14,
            'kelurahanId' => 23,
            'latitude' => -3.3177045239812300,
            'longitude' => 114.5943968153290000,
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //16
            'nama' => 'Soto Bang Mamat',
            'isAktif' => true,
            'linkInternet' => 'https://www.google.co.id/maps/place/Depot+Soto+Bang+Amat/@-3.3043872,114.6090182,17z/data=!3m1!4b1!4m5!3m4!1s0x2de4238e4566331d:0x34083a92d1c5d264!8m2!3d-3.3043999!4d114.6132459',
            'kategoriWisataId' => 14,
            'kelurahanId' => 34,
            'latitude' => -3.3043763875374000,
            'longitude' => 114.6132254509260000,
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //17
            'nama' => 'Depot Sari Patin',
            'isAktif' => true,
            'linkInternet' => 'https://www.google.co.id/maps/place/Depot+Sari+Patin/@-3.3011977,114.5874702,17z/data=!3m1!4b1!4m5!3m4!1s0x2de423a37e448207:0x24473a58f5e526a7!8m2!3d-3.3012031!4d114.5896589',
            'kategoriWisataId' => 14,
            'kelurahanId' => 51,
            'latitude' => -3.3011923505798200,
            'longitude' => 114.5896588496750000,
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //18
            'nama' => 'Rumah Sambal Acan Raja Banjar',
            'isAktif' => true,
            'linkInternet' => 'https://www.google.co.id/maps/place/Rumah+Sambal+Acan+Raja+Banjar/@-3.3273915,114.5872923,17z/data=!3m1!4b1!4m5!3m4!1s0x2de423d9256288f7:0x4e3df0697824e75b!8m2!3d-3.3274223!4d114.5895229',
            'kategoriWisataId' => 14,
            'kelurahanId' => 8,
            'latitude' => -3.3274233078807800,
            'longitude' => 114.5895224823000000,
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //19
            'nama' => 'Wisata Kuliner Kampung Arab',
            'isAktif' => true,
            'linkInternet' => 'https://www.google.co.id/maps/place/Wisata+kuliner+kampung+arab/@-3.3046008,114.5860378,17z/data=!3m1!4b1!4m5!3m4!1s0x2de4236d5744bf9d:0xc6c9c8e36e50c490!8m2!3d-3.3046062!4d114.5882265',
            'kategoriWisataId' => 14,
            'kelurahanId' => 29,
            'latitude' => -3.3045591735872100,
            'longitude' => 114.5882271225730000,
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //20
            'nama' => 'Mie Bancir Khas Banjar Agus Sasirangan',
            'isAktif' => true,
            'linkInternet' => 'https://www.google.co.id/maps/place/Mie+bancir+khas+banjar+agus+sasirangan+outlete+KAYUTANGI/@-3.2847217,114.5874868,17z/data=!3m1!4b1!4m5!3m4!1s0x2de4230a211e0d25:0xe38d400f895698ff!8m2!3d-3.2847271!4d114.5896755',
            'kategoriWisataId' => 14,
            'kelurahanId' => 43,
            'latitude' => -3.2847263360131500,
            'longitude' => 114.5896742674550000,
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //21
            'nama' => 'Waterboom Banua Anyar',
            'isAktif' => true,
            'linkInternet' => 'https://www.google.co.id/maps/place/WATER+BOOM+%7C+Banua+Anyar/@-3.3097302,114.6054288,14.5z/data=!4m5!3m4!1s0x2de4238a7444d9e3:0xef2c7e64735b91fb!8m2!3d-3.3084032!4d114.6192556',
            'kategoriWisataId' => 15,
            'kelurahanId' => 34,
            'latitude' => -3.3083871335681000,
            'longitude' => 114.6192609643780000,
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //22
            'nama' => 'Alfin WaterBoom',
            'isAktif' => true,
            'linkInternet' => 'https://www.google.co.id/maps/place/Alfin+Water+Boom/@-3.3395227,114.5862393,17z/data=!3m1!4b1!4m5!3m4!1s0x2de4216e69dad563:0x598a7b6e8ebe8ac2!8m2!3d-3.3395281!4d114.588428',
            'kategoriWisataId' => 15,
            'kelurahanId' => 15,
            'latitude' => -3.3395709036366500,
            'longitude' => 114.5884279496790000,
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //23
            'nama' => 'Borneo Mini Waterpark',
            'isAktif' => true,
            'linkInternet' => 'https://www.google.co.id/maps/place/Borneo+Mini+Waterpark/@-3.2798212,114.5741721,17z/data=!3m1!4b1!4m5!3m4!1s0x2de4238d5891bcfd:0xeeb9c65e988c10a8!8m2!3d-3.2798296!4d114.5763693',
            'kategoriWisataId' => 15,
            'kelurahanId' => 43,
            'latitude' => -3.2798105331001600,
            'longitude' => 114.5763661643530000,
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //24
            'nama' => 'Kolam Renang Gelanggang Olaharaga Hasanudin',
            'isAktif' => true,
            'linkInternet' => 'https://www.google.co.id/maps/place/Kolam+Renang+Gelanggang+Olahraga+Hasanudin/@-3.3266397,114.6015054,17z/data=!3m1!4b1!4m5!3m4!1s0x2de423e38fad9889:0x766c966113e7d79d!8m2!3d-3.3266451!4d114.6036941',
            'kategoriWisataId' => 15,
            'kelurahanId' => 32,
            'latitude' => -3.3264789446046900,
            'longitude' => 114.6034472803230000,
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //25
            'nama' => 'Taman nol km',
            'isAktif' => true,
            'linkInternet' => 'https://www.google.co.id/maps/place/Taman+Nol+km/@-3.3136836,114.5897723,17z/data=!3m1!4b1!4m5!3m4!1s0x2de42315762b074d:0xe0ffc0c5ffbc867!8m2!3d-3.313689!4d114.591961',
            'kategoriWisataId' => 15,
            'kelurahanId' => 22,
            'latitude' => -3.3150443177046500,
            'longitude' => 114.5925079285310000,
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //26
            'nama' => 'Taman kamboja',
            'isAktif' => true,
            'linkInternet' => 'https://www.google.co.id/maps/place/Taman+Kamboja/@-3.322101,114.5850199,17z/data=!3m1!4b1!4m5!3m4!1s0x2de423db2e78adeb:0x1bdceb2be507897d!8m2!3d-3.3221064!4d114.5872086',
            'kategoriWisataId' => 15,
            'kelurahanId' => 25,
            'latitude' => -3.3221063613711700,
            'longitude' => 114.5872058674680000,
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //27
            'nama' => 'Taman Banjarmasin Bungas',
            'isAktif' => true,
            'linkInternet' => 'https://www.google.co.id/maps/place/Taman+Banjarmasin+Bungas/@-3.3048458,114.5860451,17z/data=!3m1!4b1!4m5!3m4!1s0x2de423bb6c934073:0x3c4a7ae0d0fc879!8m2!3d-3.3048512!4d114.5882338',
            'kategoriWisataId' => 15,
            'kelurahanId' => 29,
            'latitude' => -3.3048549886528300,
            'longitude' => 114.5882396109840000,
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //28
            'nama' => 'Taman Edukasi Kota Banjarmasin',
            'isAktif' => true,
            'linkInternet' => 'https://www.google.co.id/maps/place/TAMAN+EDUKASI+KOTA+BANJARMASIN/@-3.324043,114.6001197,17z/data=!3m1!4b1!4m5!3m4!1s0x2de42376a25f671f:0x67b44a53c32d5348!8m2!3d-3.3240484!4d114.6023084',
            'kategoriWisataId' => 15,
            'kelurahanId' => 28,
            'latitude' => -3.3240460683993900,
            'longitude' => 114.6023150508240000,
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //29
            'nama' => 'Taman Siring Sungai Martapura',
            'isAktif' => true,
            'linkInternet' => 'https://www.google.co.id/maps/place/Taman+Siring+Sungai+Martapura,+Banjarmasin/@-3.319501,114.589197,17z/data=!3m1!4b1!4m5!3m4!1s0x2de423c2f70bfddd:0x29051d2d8e63e96f!8m2!3d-3.3195064!4d114.5934242',
            'kategoriWisataId' => 15,
            'kelurahanId' => 23,
            'latitude' => -3.3195063985214100,
            'longitude' => 114.5934329351540000,
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //30
            'nama' => 'Hutan Kota Sabilal Muhtadin',
            'isAktif' => true,
            'linkInternet' => 'https://www.google.co.id/maps/place/Hutan+Kota+Sabilal+Muhtadin+Banjarmasin/@-3.3200529,114.589713,17z/data=!3m1!4b1!4m5!3m4!1s0x2de423c31a93bb13:0x26b53c01e81ae0af!8m2!3d-3.3200583!4d114.5919017',
            'kategoriWisataId' => 15,
            'kelurahanId' => 22,
            'latitude' => -3.3200629859885000,
            'longitude' => 114.5919063937980000,
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
