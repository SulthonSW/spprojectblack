<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyek1;
use App\Models\Proyek2;

class ApiController extends Controller
{
    public function cpj1_1(request $request)
{
	$input = new Proyek1;
    $input->tinggi_awal1 = $request->tinggi_awal1;
    $input->kedalaman1 = $request->kedalaman1;
    $input->tinggi_sekarang1 = $request->tinggi_sekarang1;
    $input->save();
}
    public function cpj1_2(request $request)
    {
        $input = new Proyek1;
        $input->tinggi_awal2 = $request->tinggi_awal2;
        $input->kedalaman2 = $request->kedalaman2;
        $input->tinggi_sekarang2 = $request->tinggi_sekarang2;
        $input->save();
    }

    public function cpj1_3(request $request)
    {
        $input = new Proyek1;
        $input->tinggi_awal3 = $request->tinggi_awal3;
        $input->kedalaman3 = $request->kedalaman3;
        $input->tinggi_sekarang3 = $request->tinggi_sekarang3;
        $input->save();
    }
    public function spj1_2()
    {
     return Proyek1::all();
    }
    
    public function spj1_1()
    {
     return Proyek1::all();
    }

    public function spj1_3()
    {
     return Proyek1::all();
    }
    
    public function cpj2_1(request $request)
    {
        $input = new Proyek1;
        $input->tinggi_awal1 = $request->tinggi_awal1;
        $input->kedalaman1 = $request->kedalaman1;
        $input->tinggi_sekarang1 = $request->tinggi_sekarang1;
        $input->save();
    }

    public function cpj2_2(request $request)
    {
        $input = new Proyek2;
        $input->tinggi_awal2 = $request->tinggi_awal2;
        $input->kedalaman2 = $request->kedalaman2;
        $input->tinggi_sekarang2 = $request->tinggi_sekarang2;
        $input->save();
    }
    public function cpj2_3(request $request)
    {
        $input = new Proyek2;
        $input->tinggi_awal3 = $request->tinggi_awal3;
        $input->kedalaman3 = $request->kedalaman3;
        $input->tinggi_sekarang3 = $request->tinggi_sekarang3;
        $input->save();
    }
    public function spj2_1()
    {
     return Proyek2::all();
    }
    
    public function spj2_2()
    {
     return Proyek2::all();
    }
    
    public function spj2_3()
    {
     return Proyek1::all();
    }

        
}