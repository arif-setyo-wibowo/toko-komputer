<?php

namespace App\Exports;

use App\Models\ProcessorSocket;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SocketExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return ProcessorSocket::select('processorSocketId', 'processorSocketName')->get();
    }

    public function headings(): array
    {
        return ["ID", "NAME"];
    }
}
