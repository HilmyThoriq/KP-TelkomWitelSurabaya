<?php

namespace App\Imports;

use App\Models\Mitra;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithValidation;

class MitraImport implements ToModel, WithValidation
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Mitra([
            'namamitra' => $row[0],
            'kodemitra' => $row[1],
            'catatan' => @$row[2],
        ]);

    }

    public function rules(): array
    {
        return [
            '*.1' => ['required', 'digits:11'],
            // Check if it's 11 digits
        ];
    }

    public function onFailure(array $row, $failures)
    {
        $error_message = '';
        foreach ($failures as $failure) {
            $row = $failure->row();
            $error_message .= "Row $row: " . implode('; ', $failure->errors()) . "<br>";
        }
        Session::flash('import_errors', $error_message);
    }
}
