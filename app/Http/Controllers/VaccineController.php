<?php

namespace App\Http\Controllers;

use App\Vaccine;
use Illuminate\Http\Request;

class VaccineController extends Controller
{

    public function getAllVaccine($id)
    {
        $vaccines = Vaccine::where('dog_id', $id)->get();
        return  $vaccines;
    }

    public function createVaccine($vaccine)
    {
        Vaccine::create($vaccine);
    }


}
