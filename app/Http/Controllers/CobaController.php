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

    public function indexx ($a)
    {
        $tampilan =  Coba::find ('$jurusan');
    	$tampilan =  Coba::where ('nama','like','%'.$a.'%')-> orwhere ('jurusan','like','%'.$a.'%')->get();
    	return $tampilan;
    }

    // public function percobaan5 ()
    // {
    // 	$buah =  ['mangga','jeruk','apel','anggur','manggis'];
    // 	return view ('buah', compact('buah'));
    // }

    //  public function namasiswa ()
    // {
    // 	$nama =  ['vela','lala','lili','lele','lulu'];
    // 	return view ('nama', compact('nama'));
    // }


    // public function data ($test)
    // {
    //     $dutaa =	['binatang'=> ['singa','ular','kelinci','kucing','kuda'],
    // 			    'kendaraan' => ['motor','mobil','kereta','pesawat','bus'],
    // 				'laptop' => ['asus','lenovo','acer','apple','axioo']];
    // 	$ahaha = $dutaa [$test];
    // 	return view ('data', compact('ahaha'));
    // }

}