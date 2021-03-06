<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\TempatWisata;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $s = DB::select('select * from tempat_wisatas');
        $k = DB::select('select * from kecamatans');
        $w = DB::select('select * from kategori_wisatas');
        $r = DB::select('select * from kelurahans');

        return view('admin.berandaAdmin', ['s' => $s, 'k' => $k, 'w' => $w, 'r' => $r]);
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

    public function login()
    {
        return view('admin.adminLogin');
    }

    public function postLogin(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/adminBeranda');
        } else {
            return back();
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function tempatWisata(Request $request)
    {
        $s = DB::select('select * from tempat_wisatas');
        $k = DB::select('select * from kecamatans');
        $w = DB::select('select * from kategori_wisatas');
        $r = DB::select('select * from kelurahans');
        
        $t = DB::insert('insert into tempat_wisatas (id, nama, isAktif, linkInternet, kategoriWisataId, kelurahanId, latitude, longitude, deskripsi) values (?, ?, ?, ?, ?, ?, ?, ?, ?)', [51, $request->tempatWisataNama, true, $request->tempatWisataLink, $request->tempatWisataKategori, $request->tempatWisataKelurahan, $request->tempatWisataLatitude, $request->tempatWisataLongitude, $request->tempatWisataDeskripsi]);
        return view('admin.berandaAdmin', ['s' => $s, 'k' => $k, 'w' => $w, 'r' => $r]);
    }

    public function coba1()
    {
        $x = TempatWisata::all();
        return $x;
    }
}
