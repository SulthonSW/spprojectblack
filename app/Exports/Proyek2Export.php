<?php

namespace App\Exports;

use App\Models\Proyek2;
use Maatwebsite\Excel\Concerns\FromCollection;

class Proyek2Export implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Proyek2::all();
    }
}
