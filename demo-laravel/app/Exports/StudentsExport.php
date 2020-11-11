<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class StudentsExport implements  WithEvents, WithStyles
{
    //kieu text
    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function(AfterSheet $event) {
                $event->sheet->getStyle('A1:T43:A43:T1')->applyFromArray([
                    'borders' => [
                        'outline' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_DOUBLE ,
                            'color' => ['argb' => '#2d3436'],
                        ],
                    ],
                ]);
                $event->sheet->getStyle('A1:T1')->applyFromArray([
                    'borders' => [
                        'outline' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUM ,
                            'color' => ['argb' => '#2d3436'],
                        ],
                    ],
                ]);
                $event->sheet->getStyle('A30:B32')->applyFromArray([
                    'borders' => [
                        'outline' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUM ,
                            'color' => ['argb' => '#2d3436'],
                        ],
                    ],
                ]);
                $event->sheet->getStyle('C30:I32', 'C30:I31')->applyFromArray([
                    'borders' => [
                        'outline' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUM ,
                            'color' => ['argb' => '#2d3436'],
                        ],
                    ],
                ]);
            },
        ];
    }

    public function styles(Worksheet $sheet)
    {
        $sheet->mergeCells('A1:T1');
        $sheet->mergeCells('A30:B30');
        $sheet->mergeCells('A31:B31');
        $sheet->mergeCells('A32:B32');
    }

}
