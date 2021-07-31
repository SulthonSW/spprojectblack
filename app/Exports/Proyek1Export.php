<?php

namespace App\Exports;

use App\Models\Proyek1;
use Maatwebsite\Excel\Concerns\FromCollection;

class Proyek1Export implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Proyek1::all();
    }
}
