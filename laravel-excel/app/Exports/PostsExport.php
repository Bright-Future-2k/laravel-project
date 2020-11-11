<?php

namespace App\Exports;

use App\Models\Post;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\FromCollection;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class PostsExport implements FromCollection, WithStyles
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Post::all();
    }

    public function styles(Worksheet $sheet)
    {
        
        return [
            'C2'    => ['font' => ['bold' => true]],
        ];
    }
}
