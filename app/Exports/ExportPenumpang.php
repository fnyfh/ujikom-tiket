<?php

namespace App\Exports;

use App\Models\PenumpangModel;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportPenumpang implements FromQuery, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

    protected $from_date;
    protected $to_date;

    function __construct($from_date,$to_date) {
        $this->from_date = $from_date;
        $this->to_date = $to_date;
    }
    public function query()
    {
        $data =PenumpangModel::whereBetween('created_at',[ $this->from_date,$this->to_date])
        ->select('nama_penumpang','username','id_level')
        ->orderBy('id_penumpang');

        return $data;
    }

    // public function headings(): array
    // {
    //     return [
    //         'Nama penumpang',
    //         'Username',
    //         'Level',
    //     ];
    // }
}