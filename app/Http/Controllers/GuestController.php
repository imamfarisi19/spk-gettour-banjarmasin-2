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
        // $L1 = DB::select('select * from kecamatans where id = ?', [1]);// $L2 = DB::select('select * from kecamatans where id = ?', [2]);// $L3 = DB::select('select * from kecamatans where id = ?', [3]);// $L4 = DB::select('select * from kecamatans where id = ?', [4]);// $L5 = DB::select('select * from kecamatans where id = ?', [5]);
        $L = DB::select('select * from kecamatans');

        // $A1 = DB::select('select * from tempat_wisatas where id = ?', [1]);// $A2 = DB::select('select * from tempat_wisatas where id = ?', [2]);// $A3 = DB::select('select * from tempat_wisatas where id = ?', [3]);// $A4 = DB::select('select * from tempat_wisatas where id = ?', [4]);// $A5 = DB::select('select * from tempat_wisatas where id = ?', [5]);// $A6 = DB::select('select * from tempat_wisatas where id = ?', [6]);// $A7 = DB::select('select * from tempat_wisatas where id = ?', [7]);// $A8 = DB::select('select * from tempat_wisatas where id = ?', [8]);// $A9 = DB::select('select * from tempat_wisatas where id = ?', [9]);// $A10 = DB::select('select * from tempat_wisatas where id = ?', [10]);// $A11 = DB::select('select * from tempat_wisatas where id = ?', [11// $A12 = DB::select('select * from tempat_wisatas where id = ?', [12]);// $A13 = DB::select('select * from tempat_wisatas where id = ?', [13]);// $A14 = DB::select('select * from tempat_wisatas where id = ?', [14]);// $A15 = DB::select('select * from tempat_wisatas where id = ?', [15]);// $A16 = DB::select('select * from tempat_wisatas where id = ?', [16]);// $A17 = DB::select('select * from tempat_wisatas where id = ?', [17]);// $A18 = DB::select('select * from tempat_wisatas where id = ?', [18]);// $A19 = DB::select('select * from tempat_wisatas where id = ?', [19]);// $A20 = DB::select('select * from tempat_wisatas where id = ?', [20]);// $A21 = DB::select('select * from tempat_wisatas where id = ?', [21]);// $A22 = DB::select('select * from tempat_wisatas where id = ?', [22]);// $A23 = DB::select('select * from tempat_wisatas where id = ?', [23]);// $A24 = DB::select('select * from tempat_wisatas where id = ?', [24]);// $A25 = DB::select('select * from tempat_wisatas where id = ?', [25]);// $A26 = DB::select('select * from tempat_wisatas where id = ?', [26]);// $A27 = DB::select('select * from tempat_wisatas where id = ?', [27]);// $A28 = DB::select('select * from tempat_wisatas where id = ?', [28]);// $A29 = DB::select('select * from tempat_wisatas where id = ?', [29]);// $A30 = DB::select('select * from tempat_wisatas where id = ?', [30]);
        $A = DB::select('select * from tempat_wisatas');

        $KUJ = DB::select('select * from kriteria_umum_jaraks');
        if ($KUJ == null) {
            $arrD = array();
            $arrI = array();
            $arrL = array();
            foreach ($L as $valueL) {
                foreach ($A as $valueA) {

                    $D = $this->distance($valueL->latitude, $valueL->longitude, $valueA->latitude, $valueA->longitude, 'K');
                    array_push($arrD, $D);

                    $I = $valueA->id;
                    array_push($arrI, $I);
                }
                $LL = $valueL->id;
                array_push($arrL, $LL);
            }

            DB::table('kriteria_umum_jaraks')->truncate();

            for ($i = 0; $i < 150; $i++) {
                if ($i >= 0 && $i < 30) {
                    if ($arrD[$i] < 2) {
                        DB::insert('insert into kriteria_umum_jaraks (tempatWisataId, kecamatanId, bobot, created_at, updated_at) values (?, ?, ?, ?, ?)', [$arrI[$i], 1, 1, now(), now()]);
                    } else if ($arrD[$i] >= 2 && $arrD[$i] < 5) {
                        DB::insert('insert into kriteria_umum_jaraks (tempatWisataId, kecamatanId, bobot, created_at, updated_at) values (?, ?, ?, ?, ?)', [$arrI[$i], 1, 2, now(), now()]);
                    } else {
                        DB::insert('insert into kriteria_umum_jaraks (tempatWisataId, kecamatanId, bobot, created_at, updated_at) values (?, ?, ?, ?, ?)', [$arrI[$i], 1, 3, now(), now()]);
                    }
                } else if ($i >= 30 && $i < 60) {
                    if ($arrD[$i] < 2) {
                        DB::insert('insert into kriteria_umum_jaraks (tempatWisataId, kecamatanId, bobot, created_at, updated_at) values (?, ?, ?, ?, ?)', [$arrI[$i], 2, 1, now(), now()]);
                    } else if ($arrD[$i] >= 2 && $arrD[$i] < 5) {
                        DB::insert('insert into kriteria_umum_jaraks (tempatWisataId, kecamatanId, bobot, created_at, updated_at) values (?, ?, ?, ?, ?)', [$arrI[$i], 2, 2, now(), now()]);
                    } else {
                        DB::insert('insert into kriteria_umum_jaraks (tempatWisataId, kecamatanId, bobot, created_at, updated_at) values (?, ?, ?, ?, ?)', [$arrI[$i], 2, 3, now(), now()]);
                    }
                } else if ($i >= 60 && $i < 90) {
                    if ($arrD[$i] < 2) {
                        DB::insert('insert into kriteria_umum_jaraks (tempatWisataId, kecamatanId, bobot, created_at, updated_at) values (?, ?, ?, ?, ?)', [$arrI[$i], 3, 1, now(), now()]);
                    } else if ($arrD[$i] >= 2 && $arrD[$i] < 5) {
                        DB::insert('insert into kriteria_umum_jaraks (tempatWisataId, kecamatanId, bobot, created_at, updated_at) values (?, ?, ?, ?, ?)', [$arrI[$i], 3, 2, now(), now()]);
                    } else {
                        DB::insert('insert into kriteria_umum_jaraks (tempatWisataId, kecamatanId, bobot, created_at, updated_at) values (?, ?, ?, ?, ?)', [$arrI[$i], 3, 3, now(), now()]);
                    }
                } else if ($i >= 90 && $i < 120) {
                    if ($arrD[$i] < 2) {
                        DB::insert('insert into kriteria_umum_jaraks (tempatWisataId, kecamatanId, bobot, created_at, updated_at) values (?, ?, ?, ?, ?)', [$arrI[$i], 4, 1, now(), now()]);
                    } else if ($arrD[$i] >= 2 && $arrD[$i] < 5) {
                        DB::insert('insert into kriteria_umum_jaraks (tempatWisataId, kecamatanId, bobot, created_at, updated_at) values (?, ?, ?, ?, ?)', [$arrI[$i], 4, 2, now(), now()]);
                    } else {
                        DB::insert('insert into kriteria_umum_jaraks (tempatWisataId, kecamatanId, bobot, created_at, updated_at) values (?, ?, ?, ?, ?)', [$arrI[$i], 4, 3, now(), now()]);
                    }
                } else {
                    if ($arrD[$i] < 2) {
                        DB::insert('insert into kriteria_umum_jaraks (tempatWisataId, kecamatanId, bobot, created_at, updated_at) values (?, ?, ?, ?, ?)', [$arrI[$i], 5, 1, now(), now()]);
                    } else if ($arrD[$i] >= 2 && $arrD[$i] < 5) {
                        DB::insert('insert into kriteria_umum_jaraks (tempatWisataId, kecamatanId, bobot, created_at, updated_at) values (?, ?, ?, ?, ?)', [$arrI[$i], 5, 2, now(), now()]);
                    } else {
                        DB::insert('insert into kriteria_umum_jaraks (tempatWisataId, kecamatanId, bobot, created_at, updated_at) values (?, ?, ?, ?, ?)', [$arrI[$i], 5, 3, now(), now()]);
                    }
                }
            }
        }
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
        $tX = array();
        $nRow = sizeof($X);
        $nCol = sizeof($X[0]);
        for ($i = 0; $i < $nCol; $i++) {
            $cl = array();
            for ($j = 0; $j < $nRow; $j++) {
                array_push($cl, $X[$j][$i]);
            }
            array_push($tX, $cl);
        }
        return $tX;
    }

    public function MatriksNormalisasi($X, $isKeuntungan)
    {
        $tX = $this->TransposeMatriks($X);
        $tR = array();

        for ($j = 0; $j < sizeof($tX); $j++) {
            $min2 = min($tX[$j]);
            $max2 = max($tX[$j]);
            $rl = array();
            array_push($rl);
            unset($rl);
            $rl = array();
            if ($isKeuntungan[$j] == true) {
                for ($o = 0; $o < sizeof($tX[$j]); $o++) {
                    $re = $tX[$j][$o] / $max2;
                    array_push($rl, $re);
                }
            } else {
                for ($p = 0; $p < sizeof($tX[$j]); $p++) {
                    $re = $min2 / $tX[$j][$p];
                    array_push($rl, $re);
                }
            }
            array_push($tR, $rl);
        }
        $R = $this->TransposeMatriks($tR);
        return $R;
    }

    public function NormalisasiBobot($Wx)
    {
        $s = array_sum($Wx);
        $W = array();
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

    public function semiMain($bobot, $idKategori, $idKecamatan)
    {
        // Keuntungan atau Biayaan
        /* Kriteria :
           1. Jarak
           2. Area Parkir
           3. Tambahan Khusus 1
           4. Tambahan Khusus 2
           5. Tambahan Khusus 3
         */
        $isKeuntungan = [False, True, True, True, True];

        // Matriks bobot
        /* Apabila jumlah bobot tidak sama dengan
           1, lakukan NormalisasiBobot */
        $Wx = $bobot;

        $W = $this->NormalisasiBobot($Wx);

        $tempatWisata = DB::select('select * from tempat_wisatas where kategoriWisataId = ?', [intval($idKategori)]);
        //dd($tempatWisata);

        // for ($i = 0; $i < sizeof($tempatWisata); $i++) {
        //     array_push($jaraks ,DB::table('kriteria_umum_jaraks')
        //         ->where('tempatWisataId', '=', $tempatWisata[$i]->id)
        //         ->get());
        // }

        $jaraks = DB::select('select * from kriteria_umum_jaraks where kecamatanId = ?', [intval($idKecamatan)]);

        $jarak = array();
        for ($i = 0; $i < sizeof($jaraks); $i++) {
            $j = $jaraks[$i]->bobot;
            array_push($jarak, $j);
        }

        //dd($jarak);
        // $jj = array_keys($jarak);
        // dd($jj);
        // $tempatWisata[0]->id;

        //jarak per kecamatan
        $q = array();
        $e = array();
        $keyJarak = array();
        $keyJarak = array_keys($jarak);

        for ($j = 0; $j < sizeof($jarak); $j++) {
            if ($j < 30) {
                if ($keyJarak[$j] <= 29) {
                    unset($q);
                    $q = array();
                    array_push($e, $jarak[$j]);
                    if (sizeof($e) == 30) {
                        array_push($q, $e);
                        unset($e);
                        $e = array();

                        foreach ($q as $value) {
                            $val = array_keys($value);
                        }

                        $arr5 = array();
                        foreach ($val as $v) {
                            $vv = $v + 1;
                            array_push($arr5, $vv);
                        }

                        $arr6 = array();
                        foreach ($tempatWisata as $TW) {
                            for ($k = 0; $k < 30; $k++) {
                                if ($TW->id == $arr5[$k]) {
                                    array_push($arr6, $arr5[$k]);
                                }
                            }
                        }

                        $arr7 = array();
                        $arr8 = array();
                        $arr9 = array();
                        $myKeyy = array();
                        foreach ($arr6 as $a6) {
                            $ar6 = $a6 - 1;
                            array_push($arr7, $ar6);
                        }
                        foreach ($arr7 as $a7) {
                            foreach ($q as $qq) {
                                foreach ($qq as $key => $qqq) {
                                    $myKey = $key;
                                    if ($a7 == $myKey) {
                                        array_push($arr9, $qqq);
                                    }
                                }
                            }
                        }


                        unset($q);
                        $q = array();
                        array_push($q, $arr9);
                    }
                }
            } else if ($j >= 30 && $j < 60) {
                if ($keyJarak[$j] >= 30 && $keyJarak[$j] <= 59) {
                    array_push($e, $jarak[$j]);
                    unset($q);
                    $q = array();
                    if (sizeof($e) == 30) {
                        array_push($q, $e);
                        unset($e);
                        $e = array();

                        foreach ($q as $value) {
                            $val = array_keys($value);
                        }

                        $arr5 = array();
                        foreach ($val as $v) {
                            $vv = $v + 1;
                            array_push($arr5, $vv);
                        }

                        $arr6 = array();
                        foreach ($tempatWisata as $TW) {
                            for ($k = 0; $k < 30; $k++) {
                                if ($TW->id == $arr5[$k]) {
                                    array_push($arr6, $arr5[$k]);
                                }
                            }
                        }

                        $arr7 = array();
                        $arr8 = array();
                        $arr9 = array();
                        $myKeyy = array();
                        foreach ($arr6 as $a6) {
                            $ar6 = $a6 - 1;
                            array_push($arr7, $ar6);
                        }
                        foreach ($arr7 as $a7) {
                            foreach ($q as $qq) {
                                foreach ($qq as $key => $qqq) {
                                    $myKey = $key;
                                    if ($a7 == $myKey) {
                                        array_push($arr9, $qqq);
                                    }
                                }
                            }
                        }

                        unset($q);
                        $q = array();
                        array_push($q, $arr9);
                    }
                }
            } else if ($j >= 60 && $j < 90) {
                if ($keyJarak[$j] >= 60 && $keyJarak[$j] <= 89) {
                    array_push($e, $jarak[$j]);
                    unset($q);
                    $q = array();
                    if (sizeof($e) == 30) {
                        array_push($q, $e);
                        unset($e);
                        $e = array();

                        foreach ($q as $value) {
                            $val = array_keys($value);
                        }

                        $arr5 = array();
                        foreach ($val as $v) {
                            $vv = $v + 1;
                            array_push($arr5, $vv);
                        }

                        $arr6 = array();
                        foreach ($tempatWisata as $TW) {
                            for ($k = 0; $k < 30; $k++) {
                                if ($TW->id == $arr5[$k]) {
                                    array_push($arr6, $arr5[$k]);
                                }
                            }
                        }

                        $arr7 = array();
                        $arr8 = array();
                        $arr9 = array();
                        $myKeyy = array();
                        foreach ($arr6 as $a6) {
                            $ar6 = $a6 - 1;
                            array_push($arr7, $ar6);
                        }
                        foreach ($arr7 as $a7) {
                            foreach ($q as $qq) {
                                foreach ($qq as $key => $qqq) {
                                    $myKey = $key;
                                    if ($a7 == $myKey) {
                                        array_push($arr9, $qqq);
                                    }
                                }
                            }
                        }

                        unset($q);
                        $q = array();
                        array_push($q, $arr9);
                    }
                }
            } else if ($j >= 90 && $j < 120) {
                if ($keyJarak[$j] >= 90 && $keyJarak[$j] <= 119) {
                    unset($q);
                    $q = array();
                    array_push($e, $jarak[$j]);
                    if (sizeof($e) == 30) {
                        array_push($q, $e);
                        unset($e);
                        $e = array();

                        foreach ($q as $value) {
                            $val = array_keys($value);
                        }

                        $arr5 = array();
                        foreach ($val as $v) {
                            $vv = $v + 1;
                            array_push($arr5, $vv);
                        }

                        $arr6 = array();
                        foreach ($tempatWisata as $TW) {
                            for ($k = 0; $k < 30; $k++) {
                                if ($TW->id == $arr5[$k]) {
                                    array_push($arr6, $arr5[$k]);
                                }
                            }
                        }

                        $arr7 = array();
                        $arr8 = array();
                        $arr9 = array();
                        $myKeyy = array();
                        foreach ($arr6 as $a6) {
                            $ar6 = $a6 - 1;
                            array_push($arr7, $ar6);
                        }
                        foreach ($arr7 as $a7) {
                            foreach ($q as $qq) {
                                foreach ($qq as $key => $qqq) {
                                    $myKey = $key;
                                    if ($a7 == $myKey) {
                                        array_push($arr9, $qqq);
                                    }
                                }
                            }
                        }

                        unset($q);
                        $q = array();
                        array_push($q, $arr9);
                    }
                }
            } else {
                if ($keyJarak[$j] >= 120 && $keyJarak[$j] <= 149) {
                    unset($q);
                    $q = array();
                    array_push($e, $jarak[$j]);
                    if (sizeof($e) == 30) {
                        array_push($q, $e);
                        unset($e);
                        $e = array();

                        foreach ($q as $value) {
                            $val = array_keys($value);
                        }

                        $arr5 = array();
                        foreach ($val as $v) {
                            $vv = $v + 1;
                            array_push($arr5, $vv);
                        }

                        $arr6 = array();
                        foreach ($tempatWisata as $TW) {
                            for ($k = 0; $k < 30; $k++) {
                                if ($TW->id == $arr5[$k]) {
                                    array_push($arr6, $arr5[$k]);
                                }
                            }
                        }

                        $arr7 = array();
                        $arr8 = array();
                        $arr9 = array();
                        $myKeyy = array();
                        foreach ($arr6 as $a6) {
                            $ar6 = $a6 - 1;
                            array_push($arr7, $ar6);
                        }
                        foreach ($arr7 as $a7) {
                            foreach ($q as $qq) {
                                foreach ($qq as $key => $qqq) {
                                    $myKey = $key;
                                    if ($a7 == $myKey) {
                                        array_push($arr9, $qqq);
                                    }
                                }
                            }
                        }

                        unset($q);
                        $q = array();
                        array_push($q, $arr9);
                        //dd($q);
                    }
                }
            }
        }

        $X = array();
        $Y = array();

        $y = DB::table('kriteria_tambahan_untuk_saws')->where('kategoriWisataId', '=', intval($idKategori))->get();
        //dd($y);

        // Matrik Alternatif
        if ($idKecamatan != null) {
            if ($idKecamatan == 1) {
                for ($i = 0; $i < sizeof($q[0]); $i++) {
                    array_push($Y, $q[0][$i], $y[0]->bobot, $y[0]->bobot, $y[1]->bobot, $y[2]->bobot);
                    array_push($X, $Y);
                    unset($Y);
                    $Y = array();
                }
            } else if ($idKecamatan == 2) {
                for ($i = 0; $i < sizeof($q[0]); $i++) {
                    array_push($Y, $q[0][$i], $y[0]->bobot, $y[0]->bobot, $y[1]->bobot, $y[2]->bobot);
                    array_push($X, $Y);
                    unset($Y);
                    $Y = array();
                }
            } else if ($idKecamatan == 3) {
                for ($i = 0; $i < sizeof($q[0]); $i++) {
                    array_push($Y, $q[0][$i], $y[0]->bobot, $y[0]->bobot, $y[1]->bobot, $y[2]->bobot);
                    array_push($X, $Y);
                    unset($Y);
                    $Y = array();
                }
            } else if ($idKecamatan == 4) {
                for ($i = 0; $i < sizeof($q[0]); $i++) {
                    array_push($Y, $q[0][$i], $y[0]->bobot, $y[0]->bobot, $y[1]->bobot, $y[2]->bobot);
                    array_push($X, $Y);
                    unset($Y);
                    $Y = array();
                }
            } else {
                for ($i = 0; $i < sizeof($q[0]); $i++) {
                    array_push($Y, $q[0][$i], $y[0]->bobot, $y[0]->bobot, $y[1]->bobot, $y[2]->bobot);
                    array_push($X, $Y);
                    unset($Y);
                    $Y = array();
                }
            }
        }
        
        // Matriks X ternomalisasi
        $R = $this->MatriksNormalisasi($X, $isKeuntungan);

        // Matriks Peringkat Alternative
        $A = $this->Peringkat($R, $W);

        arsort($A); // Sort an array in descending order and maintain index association

        return $A;
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
        $kecamatan = $request->kecamatan;
        $idKategori = '';
        $idKecamatan = '';
        $a = '';
        $b = '';
        $c = '';
        $arr = array();
        $arr1 = array();

        $idKategoris = DB::select('select * from kategori_wisatas where nama = ?', [$kategori]);
        foreach ($idKategoris as $value) {
            $idKategori = $value->id;
        }

        $idKecamatans = DB::select('select * from kecamatans where nama = ?', [$kecamatan]);
        foreach ($idKecamatans as $value) {
            $idKecamatan = $value->id;
        }

        $kriteriaTambahanUntukSaws = DB::select('select * from kriteria_tambahan_untuk_saws where kategoriWisataId = ?', [$idKategori]);
        foreach ($kriteriaTambahanUntukSaws as $value) {
            array_push($arr, $value->id);
            array_push($arr1, $value->penjelasan);
        }
        foreach ($kriteriaTambahanUntukSaws as $value) {
            if ($value->id == $arr[0]) {
                $a = $value->penjelasan;
            } else if ($value->id == $arr[1]) {
                $b = $value->penjelasan;
            } else {
                $c = $value->penjelasan;
            }
        }

        return view('guest.kriteria', ['idKategori' => $idKategori, 'idKecamatan' => $idKecamatan, 'a' => $a, 'b' => $b, 'c' => $c]);
    }

    public function hasil(Request $request)
    {
        //dd($request->all());
        $idKategori = $request->idKategori;
        $idKecamatan = $request->idKecamatan;

        $bobot = array();
        array_push($bobot, $request->jarak);
        array_push($bobot, $request->areaParkir);
        array_push($bobot, $request->kriteriaKhusus1);
        array_push($bobot, $request->kriteriaKhusus2);
        array_push($bobot, $request->kriteriaKhusus3);
        $SAW = $this->semiMain($bobot, $idKategori, $idKecamatan);
        $ksaw = array_keys($SAW);

        $arrIdTempat = array();
        foreach ($ksaw as $value) {
            $a = $value + 1;
            array_push($arrIdTempat, $a);
        }
        $hasil = $arrIdTempat;
        //array_slice($arrIdTempat, 0, 10, true);

        //dd($hasil);
        $tempat = array();
        $tempatFix = array();
        for ($i = 0; $i < sizeof($hasil); $i++) {
            $tempat = DB::table('tempat_wisatas')->where('id', '=', $hasil[$i])->where('kategoriWisataId', '=', intval($idKategori))->get();

            array_push($tempatFix, $tempat);
            //array_push($tempat, DB::select('select * from tempat_wisatas where id = ?', [$hasil[$i]]));
        }

        
        dd($tempatFix);
        return view('guest.hasil', ['tempat' => $tempat, 'idKecamatan' => $idKecamatan]);
    }
}
