<?php

namespace App\Imports;

use App\Models\Student;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class StudentsImport implements ToCollection ,ToModel, WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        //
    }

    public function headingRow() : int
    {
        return 1;
    }

    public function model(array $row)
    {
        return new Student([
            'name' => $row[0],
            'age' => $row[1],
            'avatar' => $row[2]
        ]);
    }

    
    
}
