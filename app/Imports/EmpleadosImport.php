<?php

namespace App\Imports;

use App\Empleado;
use Maatwebsite\Excel\Concerns\ToModel;

class EmpleadosImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Empleado([
            'legajo' => $row[0],
            'id_usuario' => '1',
            'nombre' => $row[1],
        ]);
    }
}
