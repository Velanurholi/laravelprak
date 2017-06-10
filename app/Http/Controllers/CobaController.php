<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coba;

class CobaController extends Controller
{
    //
    public function test ()
    {
    	$a =  Coba::all();
    	return $a;
    }

    public function test2 ($id)
    {
    	$c =  Coba::find($id);
    	return $c;
    }

    public function indexx ()
    {
    	$tampilan =  Coba::all ();
    	return view ('indexx', compact('tampilan'));
    }

    public function percobaan5 ()
    {
    	$buah =  ['mangga','jeruk','apel','anggur','manggis'];
    	return view ('buah', compact('buah'));
    }

     public function namasiswa ()
    {
    	$nama =  ['vela','lala','lili','lele','lulu'];
    	return view ('nama', compact('nama'));
    }


    public function test ($datas)
    {
        $koplak =	['binatang'=> ['singa','ular','kelinci','kucing','kuda'],
    			    'kendaraan' => ['motor','mobil','kereta','pesawat','bus'],
    				'laptop' => ['asus','lenovo','acer','apple','axioo']];
    	$ahaha = $koplak [$datas];
    	return view ('data', compact('ahaha'));
    }

}