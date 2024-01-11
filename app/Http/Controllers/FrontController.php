<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public static function home()
    {
        return view('welcome');
    }

    public static function login()
    {
        return view('auth.login');
    }

    public static function register()
    {
        return view('auth.register');
    }

    public static function forgot()
    {
        return view('auth.forgot');
    }

    public static function reset()
    {
        return view('auth.reset');
    }

    public static function generate()
    {
        return view('generate');
    }

    public static function template_1()
    {
        $pdf = Pdf::loadView('templates.template_1');
        return $pdf->stream();
    }

    public static function template_2()
    {
        $pdf = Pdf::loadView('templates.template_2');
        return $pdf->stream();
    }

    public static function template_3()
    {
        $pdf = Pdf::loadView('templates.template_3');
        return $pdf->stream();
    }

    public static function template_4()
    {
        $pdf = Pdf::loadView('templates.template_4');
        return $pdf->stream();
    }

    public static function template_5()
    {
        $pdf = Pdf::loadView('templates.template_5');
        return $pdf->stream();
    }


}
