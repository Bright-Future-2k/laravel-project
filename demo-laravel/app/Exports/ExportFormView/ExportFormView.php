<?php

namespace App\Exports\ExportFormView;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithDrawings;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;

class ExportFormView implements FromView, WithEvents, ShouldAutoSize, WithDrawings
{
    
    public function view(): View
    {
        return view('student.users');
    }
    public function drawings()
    {
        $drawing = new Drawing();
        //$drawing->setName('Logo');
        //$drawing->setDescription('This is my logo');
        $drawing->setPath(public_path('/storage/avatars/3WBqKeMSSH1Ipug7VnhVWJDOktutLkZ4llBS6eX0.jpeg'));
        //$drawing->setHeight(90);
        $drawing->setCoordinates('B3:S28');

        return $drawing;
    }

    public function registerEvents(): array
    {

        return [
            AfterSheet::class => function (AfterSheet $event) {
                //$cellRange = 'A1:T43';
                //$event->sheet->setSize('A1:T43', 500, 50);

                $event->sheet->setSize(array(
                    'A1' => array(
                        'width'     => 50,
                        'height'    => 50
                    )
                ));
                $event->sheet->autoSize();
                $event->sheet->getStyle('A1:T43:A43:T1')->applyFromArray([
                    'borders' => [
                        'outline' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUM,
                            'color' => ['argb' => '#2d3436'],
                        ],
                    ],
                ]);

                $event->sheet->getStyle('A1:T1')->applyFromArray([
                    'borders' => [
                        'outline' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUM,
                            'color' => ['argb' => '#2d3436'],
                        ],
                    ],
                ]);
                $event->sheet->getStyle('A30:B32')->applyFromArray([
                    'borders' => [
                        'outline' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUM,
                            'color' => ['argb' => '#2d3436'],
                        ],
                    ],
                ]);
                $event->sheet->getStyle('C30:I32')->applyFromArray([
                    'borders' => [
                        'outline' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUM,
                            'color' => ['argb' => '#2d3436'],
                        ],
                    ],
                ]);
                $event->sheet->getStyle('J30:L32')->applyFromArray([
                    'borders' => [
                        'outline' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUM,
                            'color' => ['argb' => '#2d3436'],
                        ],
                    ],
                ]);
                $event->sheet->getStyle('M30:T43')->applyFromArray([
                    'borders' => [
                        'outline' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUM,
                            'color' => ['argb' => '#2d3436'],
                        ],
                    ],
                ]);
                $event->sheet->getStyle('A39:L43')->applyFromArray([
                    'borders' => [
                        'outline' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUM,
                            'color' => ['argb' => '#2d3436'],
                        ],
                    ],
                ]);
                $event->sheet->getStyle('A30:B30')->applyFromArray([
                    'borders' => [
                        'outline' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUM,
                            'color' => ['argb' => '#2d3436'],
                        ],
                    ],
                ]);
                $event->sheet->getStyle('A31:L31')->applyFromArray([
                    'borders' => [
                        'outline' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUM,
                            'color' => ['argb' => '#2d3436'],
                        ],
                    ],
                ]);
                $event->sheet->getStyle('A32:L32')->applyFromArray([
                    'borders' => [
                        'outline' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUM,
                            'color' => ['argb' => '#2d3436'],
                        ],
                    ],
                ]);
                $event->sheet->getStyle('C30:I30')->applyFromArray([
                    'borders' => [
                        'outline' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUM,
                            'color' => ['argb' => '#2d3436'],
                        ],
                    ],
                ]);
                $event->sheet->getStyle('C31:I31')->applyFromArray([
                    'borders' => [
                        'outline' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUM,
                            'color' => ['argb' => '#2d3436'],
                        ],
                    ],
                ]);
                $event->sheet->getStyle('C32:I32')->applyFromArray([
                    'borders' => [
                        'outline' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUM,
                            'color' => ['argb' => '#2d3436'],
                        ],
                    ],
                ]);
                $event->sheet->getStyle('M30:M31')->applyFromArray([
                    'borders' => [
                        'outline' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUM,
                            'color' => ['argb' => '#2d3436'],
                        ],
                    ],
                ]);
                $event->sheet->getStyle('O31:O31')->applyFromArray([
                    'borders' => [
                        'outline' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUM,
                            'color' => ['argb' => '#2d3436'],
                        ],
                    ],
                ]);
                $event->sheet->getStyle('Q31:Q31')->applyFromArray([
                    'borders' => [
                        'outline' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUM,
                            'color' => ['argb' => '#2d3436'],
                        ],
                    ],
                ]);
                $event->sheet->getStyle('M30:T31')->applyFromArray([
                    'borders' => [
                        'outline' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUM,
                            'color' => ['argb' => '#2d3436'],
                        ],
                    ],
                ]);
                $event->sheet->getStyle('R30:T30')->applyFromArray([
                    'borders' => [
                        'outline' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUM,
                            'color' => ['argb' => '#2d3436'],
                        ],
                    ],
                ]);
                $event->sheet->getStyle('M32:M33')->applyFromArray([
                    'borders' => [
                        'outline' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUM,
                            'color' => ['argb' => '#2d3436'],
                        ],
                    ],
                ]);
                $event->sheet->getStyle('M34')->applyFromArray([
                    'borders' => [
                        'outline' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUM,
                            'color' => ['argb' => '#2d3436'],
                        ],
                    ],
                ]);
                $event->sheet->getStyle('M35')->applyFromArray([
                    'borders' => [
                        'outline' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUM,
                            'color' => ['argb' => '#2d3436'],
                        ],
                    ],
                ]);
                $event->sheet->getStyle('M36')->applyFromArray([
                    'borders' => [
                        'outline' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUM,
                            'color' => ['argb' => '#2d3436'],
                        ],
                    ],
                ]);
                $event->sheet->getStyle('M37:M41')->applyFromArray([
                    'borders' => [
                        'outline' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUM,
                            'color' => ['argb' => '#2d3436'],
                        ],
                    ],
                ]);
                $event->sheet->getStyle('M42')->applyFromArray([
                    'borders' => [
                        'outline' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUM,
                            'color' => ['argb' => '#2d3436'],
                        ],
                    ],
                ]);
                $event->sheet->getStyle('M43')->applyFromArray([
                    'borders' => [
                        'outline' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUM,
                            'color' => ['argb' => '#2d3436'],
                        ],
                    ],
                ]);
                $event->sheet->getStyle('R43:T43')->applyFromArray([
                    'borders' => [
                        'outline' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUM,
                            'color' => ['argb' => '#2d3436'],
                        ],
                    ],
                ]);
                $event->sheet->getStyle('R30:T43')->applyFromArray([
                    'borders' => [
                        'outline' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUM,
                            'color' => ['argb' => '#2d3436'],
                        ],
                    ],
                ]);
                $event->sheet->getStyle('A39:C43')->applyFromArray([
                    'borders' => [
                        'outline' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUM,
                            'color' => ['argb' => '#2d3436'],
                        ],
                    ],
                ]);
                $event->sheet->getStyle('D39:F43')->applyFromArray([
                    'borders' => [
                        'outline' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUM,
                            'color' => ['argb' => '#2d3436'],
                        ],
                    ],
                ]);
                $event->sheet->getStyle('G39:I43')->applyFromArray([
                    'borders' => [
                        'outline' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUM,
                            'color' => ['argb' => '#2d3436'],
                        ],
                    ],
                ]);
                $event->sheet->getStyle('J39:L43')->applyFromArray([
                    'borders' => [
                        'outline' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUM,
                            'color' => ['argb' => '#2d3436'],
                        ],
                    ],
                ]);
                $event->sheet->getStyle('N42:Q42')->applyFromArray([
                    'borders' => [
                        'outline' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUM,
                            'color' => ['argb' => '#2d3436'],
                        ],
                    ],
                ]);
                $event->sheet->getStyle('R42:T42')->applyFromArray([
                    'borders' => [
                        'outline' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUM,
                            'color' => ['argb' => '#2d3436'],
                        ],
                    ],
                ]);
            },
        ];
    }
}
