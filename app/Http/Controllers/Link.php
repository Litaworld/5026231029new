<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Link extends Controller
{
    //
    public function helloworld()
    {
        return view('blog');
    }

    public function index(){
    	$nama = "Diki Alfarabi Hadi";
    	$umur = 35 ;
        $alamat = "Surabaya" ;
        $pelajaran = ["Alpro", "Matematika 1", "PAP"];
        return view('biodata',['nama' => $nama, 'usia' => $umur, 'alamat' => $alamat, 'matkul' => $pelajaran]);;
    }
}
