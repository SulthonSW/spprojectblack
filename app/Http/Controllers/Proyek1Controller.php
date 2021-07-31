<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyek1;
use App\Exports\Proyek1Export;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class Proyek1Controller extends Controller
{
    public function export()
	{
		return Excel::download(new Proyek1Export, 'Proyek1.xlsx');
	}
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function halaman()
    {
        //$data = Home::paginate(1);
        //$data = Home::getTable('homes')->latest('created_at')->first();
        $data1 = Proyek1::latest('id')->first();
        return view('proyek1',['data'=>$data1]);
    }

}
