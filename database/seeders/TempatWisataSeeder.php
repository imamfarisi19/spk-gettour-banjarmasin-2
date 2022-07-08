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
            'linkInternet' => Str::random(10),
            'kategoriWisataId' => 13,
            'kelurahanId' => 47,
            'latitude' => -3.2943389616915900,
            'longitude' => 114.5761158791220000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //2
            'nama' => 'Masjid Jami Banjarmasin',
            'isAktif' => true,
            'linkInternet' => Str::random(10),
            'kategoriWisataId' => 13,
            'kelurahanId' => 50,
            'latitude' => -3.3066485950888900,
            'longitude' => 114.5953640785110000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //3
            'nama' => 'Masjid Raya Sabilal Muhtadin',
            'isAktif' => true,
            'linkInternet' => Str::random(10),
            'kategoriWisataId' => 13,
            'kelurahanId' => 22,
            'latitude' => -3.3189530391178700,
            'longitude' => 114.5912444496770000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //4
            'nama' => 'Gereja Indonesia Banjarmasin',
            'isAktif' => true,
            'linkInternet' => Str::random(10),
            'kategoriWisataId' => 13,
            'kelurahanId' => 33,
            'latitude' => -3.3178586502910500,
            'longitude' => 114.5774365410840000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //5
            'nama' => 'GKE Eppata',
            'isAktif' => true,
            'linkInternet' => Str::random(10),
            'kategoriWisataId' => 13,
            'kelurahanId' => 22,
            'latitude' => -3.3154928060083900,
            'longitude' => 114.5908723601220000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //6
            'nama' => 'Gereja Katolik Hati Yesus Yang Maha Kudus',
            'linkInternet' => Str::random(10),
            'isAktif' => true,
            'kategoriWisataId' => 13,
            'kelurahanId' => 28,
            'latitude' => -3.3200244613952000,
            'longitude' => 114.6006001496770000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //7
            'nama' => 'Katedral Keluarga Kudus',
            'isAktif' => true,
            'linkInternet' => Str::random(10),
            'kategoriWisataId' => 13,
            'kelurahanId' => 24,
            'latitude' => -3.3246291390368400,
            'longitude' => 114.5906601674690000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //8
            'nama' => 'Gereja GKE Hosiana',
            'isAktif' => true,
            'linkInternet' => Str::random(10),
            'kategoriWisataId' => 13,
            'kelurahanId' => 33,
            'latitude' => -3.3126853060256200,
            'longitude' => 114.5741773429300000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //9
            'nama' => 'HKBP Gereja Banjarmasin',
            'isAktif' => true,
            'linkInternet' => Str::random(10),
            'kategoriWisataId' => 13,
            'kelurahanId' => 33,
            'latitude' => -3.3133485723737000,
            'longitude' => 114.5723215361830000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //10
            'nama' => 'Gereja Yesus Sejati Banjarmasin',
            'isAktif' => true,
            'linkInternet' => Str::random(10),
            'kategoriWisataId' => 13,
            'kelurahanId' => 23,
            'latitude' => -3.3200538047109300,
            'longitude' => 114.5950379496770000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //11
            'nama' => 'GBI Kingdom of God Banjarmasin',
            'isAktif' => true,
            'linkInternet' => Str::random(10),
            'kategoriWisataId' => 13,
            'kelurahanId' => 23,
            'latitude' => -3.3208865613852500,
            'longitude' => 114.5950749496770000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //12
            'nama' => 'GBI Pak Niko Banjarmasin',
            'isAktif' => true,
            'linkInternet' => Str::random(10),
            'kategoriWisataId' => 13,
            'kelurahanId' => 23,
            'latitude' => -3.3210562836788100,
            'longitude' => 114.5949526208410000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //13
            'nama' => 'Gereja HKBP Banjarmasin',
            'isAktif' => true,
            'linkInternet' => Str::random(10),
            'kategoriWisataId' => 13,
            'kelurahanId' => 24,
            'latitude' => -3.3237455306186800,
            'longitude' => 114.5898565849650000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //14
            'nama' => 'Lontong Orari Banjarmasin',
            'isAktif' => true,
            'linkInternet' => Str::random(10),
            'kategoriWisataId' => 14,
            'kelurahanId' => 31,
            'latitude' => -3.3141010880922200,
            'longitude' => 114.5984209270540000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //15
            'nama' => 'Waroeng Pondok Bahari',
            'isAktif' => true,
            'linkInternet' => Str::random(10),
            'kategoriWisataId' => 14,
            'kelurahanId' => 23,
            'latitude' => -3.3177045239812300,
            'longitude' => 114.5943968153290000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //16
            'nama' => 'Soto Bang Mamat',
            'isAktif' => true,
            'linkInternet' => Str::random(10),
            'kategoriWisataId' => 14,
            'kelurahanId' => 34,
            'latitude' => -3.3043763875374000,
            'longitude' => 114.6132254509260000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        DB::table('tempat_wisatas')->insert([
            //17
            'nama' => 'Depot Sari Patin',
            'isAktif' => true,
            'linkInternet' => Str::random(10),
            'kategoriWisataId' => 14,
            'kelurahanId' => 51,
            'latitude' => -3.3011923505798200,
            'longitude' => 114.5896588496750000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //18
            'nama' => 'Rumah Sambal Acan Raja Banjar',
            'isAktif' => true,
            'linkInternet' => Str::random(10),
            'kategoriWisataId' => 14,
            'kelurahanId' => 8,
            'latitude' => -3.3274233078807800,
            'longitude' => 114.5895224823000000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        DB::table('tempat_wisatas')->insert([
            //19
            'nama' => 'Wisata Kuliner Kampung Arab',
            'isAktif' => true,
            'linkInternet' => Str::random(10),
            'kategoriWisataId' => 14,
            'kelurahanId' => 29,
            'latitude' => -3.3045591735872100,
            'longitude' => 114.5882271225730000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //20
            'nama' => 'Mie Bancir Khas Banjar Agus Sasirangan',
            'isAktif' => true,
            'linkInternet' => Str::random(10),
            'kategoriWisataId' => 14,
            'kelurahanId' => 43,
            'latitude' => -3.2847263360131500,
            'longitude' => 114.5896742674550000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //21
            'nama' => 'Waterboom Banua Anyar',
            'isAktif' => true,
            'linkInternet' => Str::random(10),
            'kategoriWisataId' => 15,
            'kelurahanId' => 34,
            'latitude' => -3.3083871335681000,
            'longitude' => 114.6192609643780000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //22
            'nama' => 'Alfin WaterBoom',
            'isAktif' => true,
            'linkInternet' => Str::random(10),
            'kategoriWisataId' => 15,
            'kelurahanId' => 15,
            'latitude' => -3.3395709036366500,
            'longitude' => 114.5884279496790000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //23
            'nama' => 'Borneo Mini Waterpark',
            'isAktif' => true,
            'linkInternet' => Str::random(10),
            'kategoriWisataId' => 15,
            'kelurahanId' => 43,
            'latitude' => -3.2798105331001600,
            'longitude' => 114.5763661643530000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //24
            'nama' => 'Kolam Renang Gelanggang Olaharaga Hasanudin',
            'isAktif' => true,
            'linkInternet' => Str::random(10),
            'kategoriWisataId' => 15,
            'kelurahanId' => 32,
            'latitude' => -3.3264789446046900,
            'longitude' => 114.6034472803230000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //25
            'nama' => 'Taman nol km',
            'isAktif' => true,
            'linkInternet' => Str::random(10),
            'kategoriWisataId' => 15,
            'kelurahanId' => 22,
            'latitude' => -3.3150443177046500,
            'longitude' => 114.5925079285310000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //26
            'nama' => 'Taman kamboja',
            'isAktif' => true,
            'linkInternet' => Str::random(10),
            'kategoriWisataId' => 15,
            'kelurahanId' => 25,
            'latitude' => -3.3221063613711700,
            'longitude' => 114.5872058674680000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //27
            'nama' => 'Taman Banjarmasin Bungas',
            'isAktif' => true,
            'linkInternet' => Str::random(10),
            'kategoriWisataId' => 15,
            'kelurahanId' => 29,
            'latitude' => -3.3048549886528300,
            'longitude' => 114.5882396109840000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //28
            'nama' => 'Taman Edukasi Kota Banjarmasin',
            'isAktif' => true,
            'linkInternet' => Str::random(10),
            'kategoriWisataId' => 15,
            'kelurahanId' => 28,
            'latitude' => -3.3240460683993900,
            'longitude' => 114.6023150508240000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //29
            'nama' => 'Taman Siring Sungai Martapura',
            'isAktif' => true,
            'linkInternet' => Str::random(10),
            'kategoriWisataId' => 15,
            'kelurahanId' => 23,
            'latitude' => -3.3195063985214100,
            'longitude' => 114.5934329351540000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tempat_wisatas')->insert([
            //30
            'nama' => 'Hutan Kota Sabilal Muhtadin',
            'isAktif' => true,
            'linkInternet' => Str::random(10),
            'kategoriWisataId' => 15,
            'kelurahanId' => 22,
            'latitude' => -3.3200629859885000,
            'longitude' => 114.5919063937980000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
