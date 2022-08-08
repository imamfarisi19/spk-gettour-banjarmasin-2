<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KriteriaTambahanUntukSawSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //1
            'kategori_wisata_id' => '1',
            'penjelasan' => null,
            'isBenefit'=>null,
            'bobot'=>null,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //2
            'kategori_wisata_id' => '1',
            'penjelasan' => null,
            'isBenefit'=>null,
            'bobot'=>null,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //3
            'kategori_wisata_id' => '1',
            'penjelasan' => null,
            'isBenefit'=>null,
            'bobot'=>null,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //4
            'kategori_wisata_id' => '2',
            'penjelasan' => 'Harga Murah Dan Bersih',
            'isBenefit'=>true,
            'bobot'=>2,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //5
            'kategori_wisata_id' => '2',
            'penjelasan' =>'Spot Photo',
            'isBenefit'=>true,
            'bobot'=>1,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //6
            'kategori_wisata_id' => '2',
            'penjelasan' =>'Hiburan Khas Banjar',
            'isBenefit'=>true,
            'bobot'=>1,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //7
            'kategori_wisata_id' => '2',
            'penjelasan' => 'Pemandangan Sekitar',
            'isBenefit'=>true,
            'bobot'=>2,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //8
            'kategori_wisata_id' => '3',
            'penjelasan' => null,
            'isBenefit'=>null,
            'bobot'=>null,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //9
            'kategori_wisata_id' => '3',
            'penjelasan' => null,
            'isBenefit'=>null,
            'bobot'=>null,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //10
            'kategori_wisata_id' => '3',
            'penjelasan' => null,
            'isBenefit'=>null,
            'bobot'=>null,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //11
            'kategori_wisata_id' => '4',
            'penjelasan' => 'Kebersihan',
            'isBenefit'=>true,
            'bobot'=>2,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        
        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //12
            'kategori_wisata_id' => '4',
            'penjelasan' => 'Keamanan Alat Permainan',
            'isBenefit'=>true,
            'bobot'=>3,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //13
            'kategori_wisata_id' => '4',
            'penjelasan' => null,
            'isBenefit'=>null,
            'bobot'=>null,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //14
            'kategori_wisata_id' => '5',
            'penjelasan' => 'Alat Bermain',
            'isBenefit'=>true,
            'bobot'=>2,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //15
            'kategori_wisata_id' => '5',
            'penjelasan' => 'Nilai Sejarah',
            'isBenefit'=>true,
            'bobot'=>2,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //16
            'kategori_wisata_id' => '5',
            'penjelasan' => 'Wisata air',
            'isBenefit'=>true,
            'bobot'=>2,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //17
            'kategori_wisata_id' => '5',
            'penjelasan' => 'Kebersihan dan Keamanan',
            'isBenefit'=>true,
            'bobot'=>3,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //18
            'kategori_wisata_id' => '6',
            'penjelasan' => 'Memiliki Restoran',
            'isBenefit'=>true,
            'bobot'=>2,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //19
            'kategori_wisata_id' => '6',
            'penjelasan' => 'Keamanan Wahana Bagi Pengunjung',
            'isBenefit'=>true,
            'bobot'=>3,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //20
            'kategori_wisata_id' => '6',
            'penjelasan' => 'Kebersihan',
            'isBenefit'=>true,
            'bobot'=>3,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //21
            'kategori_wisata_id' => '7',
            'penjelasan' => 'Kajian Rutin',
            'isBenefit'=>true,
            'bobot'=>3,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //22
            'kategori_wisata_id' => '7',
            'penjelasan' => 'Nilai Sejarah',
            'isBenefit'=>true,
            'bobot'=>3,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //23
            'kategori_wisata_id' => '7',
            'penjelasan' => 'Memiliki Taman',
            'isBenefit'=>true,
            'bobot'=>3,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //24
            'kategori_wisata_id' => '7',
            'penjelasan' => 'Kebersihan dan Keamanan',
            'isBenefit'=>true,
            'bobot'=>3,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //25
            'kategori_wisata_id' => '9',
            'penjelasan' => null,
            'isBenefit'=>null,
            'bobot'=>null,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //26
            'kategori_wisata_id' => '9',
            'penjelasan' => null,
            'isBenefit'=>null,
            'bobot'=>null,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //27
            'kategori_wisata_id' => '9',
            'penjelasan' => null,
            'isBenefit'=>null,
            'bobot'=>null,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //28
            'kategori_wisata_id' => '10',
            'penjelasan' => 'Model Pakaian Terbaru',
            'isBenefit'=>true,
            'bobot'=>3,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //29
            'kategori_wisata_id' => '10',
            'penjelasan' => 'Memiliki Tempat Ganti Baju',
            'isBenefit'=>true,
            'bobot'=>2,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //30
            'kategori_wisata_id' => '10',
            'penjelasan' => 'Kebersihan dan Keamanan',
            'isBenefit'=>true,
            'bobot'=>3,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //31
            'kategori_wisata_id' => '11',
            'penjelasan' => null,
            'isBenefit'=>null,
            'bobot'=>null,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //32
            'kategori_wisata_id' => '11',
            'penjelasan' => null,
            'isBenefit'=>null,
            'bobot'=>null,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //33
            'kategori_wisata_id' => '11',
            'penjelasan' => null,
            'isBenefit'=>null,
            'bobot'=>null,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //34
            'kategori_wisata_id' => '12',
            'penjelasan' => 'Cepat Saji',
            'isBenefit'=>true,
            'bobot'=>3,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //35
            'kategori_wisata_id' => '12',
            'penjelasan' => 'Memiliki Menu Terkenal',
            'isBenefit'=>true,
            'bobot'=>2,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //36
            'kategori_wisata_id' => '12',
            'penjelasan' => 'Kebersihan dan Keamanan',
            'isBenefit'=>true,
            'bobot'=>3,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //37
            'kategori_wisata_id' => '13',
            'penjelasan' => 'Memiliki Tokoh',
            'isBenefit'=>true,
            'bobot'=>1,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //38
            'kategori_wisata_id' => '13',
            'penjelasan' => 'Nilai Sejarah',
            'isBenefit'=>true,
            'bobot'=>2,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //39
            'kategori_wisata_id' => '13',
            'penjelasan' => 'Kebersihan dan Keamanan',
            'isBenefit'=>true,
            'bobot'=>3,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //40
            'kategori_wisata_id' => '14',
            'penjelasan' => 'Cepat Saji',
            'isBenefit'=>true,
            'bobot'=>2,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //41
            'kategori_wisata_id' => '14',
            'penjelasan' => 'Memiliki Menu Terkenal',
            'isBenefit'=>true,
            'bobot'=>1,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //42
            'kategori_wisata_id' => '14',
            'penjelasan' => 'Kebersihan dan Keamanan',
            'isBenefit'=>true,
            'bobot'=>3,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //43
            'kategori_wisata_id' => '15',
            'penjelasan' => 'Macam - macam wahana permainan',
            'isBenefit'=>true,
            'bobot'=>2,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //44
            'kategori_wisata_id' => '15',
            'penjelasan' => 'Nilai Sejarah',
            'isBenefit'=>true,
            'bobot'=>1,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('kriteria_tambahan_untuk_saws')->insert([
            //45
            'kategori_wisata_id' => '15',
            'penjelasan' => 'Kebersihan dan Keamanan',
            'isBenefit'=>true,
            'bobot'=>3,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        
    }
}
