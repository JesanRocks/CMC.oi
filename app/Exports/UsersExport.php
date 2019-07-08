<?php

namespace App\Exports;

use App\Inventario;

use Maatwebsite\Excel\Concerns\FromQuery;

use PhpOffice\PhpSpreadsheet\Shared\Date;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;

use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

use Maatwebsite\Excel\Concerns\FromCollection;

class UsersExport implements FromQuery,WithMapping,WithHeadings,WithColumnFormatting
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function query()
    {
        return Inventario::where('id', '>=', 1);
    }
	
	public function map($inventario): array
    {
        return [
            $inventario->articulo->dsc,
			$inventario->codigo,
			$inventario->grupo->codigo,
			$inventario->independiente,
			$inventario->serial,
			$inventario->modelo,
			$inventario->marca->nombre,
			$inventario->color->nombre,
			$inventario->incorp,
			$inventario->desincorp,
			$inventario->observacion,
			$inventario->created_at,
		];
    }

    public function headings(): array
    {
        return [
            'Nombre',
            'Codigo',
            'Grupo',
            'Ident',
            'Serial',
            'Modelo',
            'Marca',
            'Color',
            'Incorp',
            'Desincorp',
            'Observación',
            'Fecha',
        ];
    }

    public function columnFormats(): array
    {
        return [
            'L' => NumberFormat::FORMAT_DATE_DDMMYYYY,
        ];
    }

}
