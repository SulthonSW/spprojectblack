<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyek2;
use App\Exports\Proyek2Export;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class Proyek2Controller extends Controller
{
    public function export()
	{
		return Excel::download(new Proyek2Export, 'Proyek2.xlsx');
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
        $data1 = Proyek2::latest('id')->first();
        return view('proyek2',['data'=>$data1]);
    }

}
