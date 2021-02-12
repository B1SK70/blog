<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class generalController extends Controller
{

    public function inicio()
    {
        return view('inicio');
    }

    public function libros()
    {
        return view('libros');
    }

    public function l1()
    {
        return view('l1');
    }

    public function l2()
    {
        return view('l2');
    }

    public function l3()
    {
        return view('l3');
    }

    public function l4()
    {
        return view('l4');
    }

    public function l5()
    {
        return view('l5');
    }

    public function l6()
    {
        return view('l6');
    }


    public function sobremi()
    {
        return view('sobremi');
    }

    public function sugerencias()
    {
        return view('sugerencias');
    }

    public function plantilla()
    {
        return view('plantilla');
    }
}
