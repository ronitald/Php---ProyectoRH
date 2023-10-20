<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vacant;
use App\Http\Controllers\VacantController;

class VacantController extends Controller
{
    public function insert_vacancy(Request $request)
    {
        $data = $request->validate([
            'contract_type' => 'required|string|max:50',
            'vacancy_num' => 'required|numeric',
            'workday' => 'required|in:DAYTIME,MAXIMUM,ORDINARY',
            'months_experience' => 'required|string|max:50',
            'salary' => 'required|numeric',
        ]);

        Vacant::create($data);

        return redirect()->route('insert_vacancy')->with('success', 'Registro insertado correctamente');
    }
}
