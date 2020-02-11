<?php

namespace App\Exports;

use App\UserModelExport;
use Maatwebsite\Excel\Concerns\FromCollection;

class UserExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return UserModelExport::all();
    }
}
