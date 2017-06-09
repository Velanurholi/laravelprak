<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrakerinController extends Controller
{
    //
    public function percobaan()
    {
    	$a="1";
    	$b="1";
    	return view ('index', compact('a','b'));
    }


 public function coba()
    {
    	$aa="Cuci";
    	$bb="Mandi";
    	$c="Makan";
    	$d="Main";
    	$e="Nonton";
    	return view ('coba', compact('aa','bb','c','d','e'));
    }


public function cobi()
    {
    	$f="Incu";
    	$g="Dadang";
    	$h="Gobang";
    	$i="Dedeng";
    	$j="Cucu Iceeuu";
    	return view ('cobi', compact('f','g','h','i','j'));
    }


public function cobu()
    {
    	$k="Lala";
    	$l="Lili";
    	$m="Lulu";
    	$n="Lele";
    	$o="Lolo";
    	return view ('cobu', compact('k','l','m','n','o'));
    }

public function cobe()
    {
    	$p="Ipa";
    	$q="Pkn";
    	$r="Ips";
    	$s="Mtk";
    	$t="Pai";
    	return view ('cobe', compact('p','q','r','s','t'));
    }


public function cobo()
    {
    	$u="Cucu";
    	$v="Cece";
    	$w="Cici";
    	$x="Coci";
    	$y="Iwin";
    	return view ('cobo', compact('u','v','w','x','y'));
    }



public function param ($id)
{
	return view ('welcome');
}



public function parameter ($e)
{
	return view ('welcome2', compact('e'));
}

}