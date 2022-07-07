<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tempats = DB::select('select * from tempat_wisatas');
        // foreach ($tempats as $tempat) {}

        return view('guest.beranda');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function TransposeMatriks($X)
    {
        $tX = [];
        $nRow = sizeof($X);
        $nCol = sizeof($X[0]);
        for ($i = 0; $i < $nCol; $i++) {
            $cl = [];
            for ($j = 0; $j < $nRow; $j++) {
                $cl . array_push($X[$j][$i]);
            }
            $tX . array_push($cl);
        }
        return $tX;
    }

    public function MatrisNormalisasi($X, $isKeuntungan)
    {
        $tX = TransposeMatriks($X);
        $tR = [];
        for ($j = 0; $j < sizeof($tX); $j++) {
            $min1 = min($tX[$j]); //min_tX_row
            $max1 = max($tX[$j]); //max_tX_row
            $rl = []; // membuat list baris
            if ($isKeuntungan[$j] == True) {
                for ($val = 0; $val < $tX[$j]; $val++) {
                    $re = $val / $max1;
                    array_push($rl, $re);
                }
            } else {
                for ($val = 0; $val < $tX[$j]; $val++) {
                    $re = $min1 / $val;
                    array_push($rl, $re);
                }
            }
            array_push($tR, $rl);
        }
        $R = TransposeMatriks($tR);
        return $R;
    }

    public function NormalisasiBobot($Wx)
    {
        $s = array_sum($Wx);
        $W = [];
        foreach ($Wx as $val) {
            array_push($W, $val / $s);
        }
        return $W;
    }

    public function Peringkat($R, $W)
    {
        $A = [];
        for ($i = 0; $i < sizeof($R); $i++) {
            $a1 = 0;
            for ($j = 0; $j < sizeof($R[$i]); $j++) {
                $a1 = $a1 + ($W[$j] * $R[$i][$j]);
            }
            array_push($A, $a1);
        }
        return $A;
    }

    public function semiMain()
    {
        // Keuntungan atau Biayaan
        /* Kriteria :
           1. Jarak
           2. Area Parkir
           3. Tambahan Khusus 1
           4. Tambahan Khusus 2 
           5. Tambahan Khusus 3
           6. Tambahan Khusus 4
         */
        $isKeuntungan = [False, False, True, True, True];

        // Matriks bobot
        /* Apabila jumlah bobot tidak sama dengan 
           1, lakukan NormalisasiBobot */
        $Wx = [4, 3, 2, 1];
        $W = NormalisasiBobot($Wx);

        // Matrik Alternatif
        $X = [
            [3, 2, 3, 4],
            [2, 4, 3, 3],
            [4, 5, 5, 5]
        ];

        // Matriks X ternomalisasi
        $R = MatriksNormalisasi($X, $isKeuntungan);

        // Matriks Peringkat Alternative
        $A = Peringkat($R, $W);
        print_r($A);
    }

    public function distance($lat1, $lon1, $lat2, $lon2, $unit)
    {
        $theta = $lon1 - $lon2;
        $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
        $dist = acos($dist);
        $dist = rad2deg($dist);
        $miles = $dist * 60 * 1.1515;
        $unit = strtoupper($unit);

        if ($unit == "K") {
            return ($miles * 1.609344);
        } else if ($unit == "N") {
            return ($miles * 0.8684);
        } else {
            return $miles;
        }

        // distance(-0.326636, 103.154260, -2.608350, 140.675299, "M") . " Miles<br>";
        // distance(-0.326636, 103.154260, -2.608350, 140.675299, "K") . " Kilo Meter<br>";
    }

    public function kriteria(Request $request)
    {
        $kategori = $request->kategori;
        $kelurahan = $request->kelurahan;

        $idKategoris = DB::select('select * from kategori_wisatas where nama = ?', [$kategori]);
        foreach ($idKategoris as $value) {
            $idKategori = $value->id;
        }

        $kelurahan = $request->kelurahan;
        $idKelurahans = DB::select('select * from kelurahans where nama = ?', [$kelurahan]);
        foreach ($idKelurahans as $value) {
            $idKelurahan = $value->id;
        }

        $tempats = DB::select('select * from tempat_wisatas where kategoriWisataid = ?', [$idKategori]);
        if ($idKategori == 2) {
            
        }
        $kriteriaTambahanUntukSaws = DB::select('select * from kriteria_tambahan_untuk_saws where kategoriWisataId = ?', [$idKategori]);
        
        return view('guest.kriteria', ['idKategori' => $idKategori, 'idKelurahan' => $idKelurahan, 'kriteriaTambahanUntukSaws' => $kriteriaTambahanUntukSaws]);
    }

    public function hasil(Request $request)
    {
        
    }
}
