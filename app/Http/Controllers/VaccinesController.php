<?php

namespace App\Http\Controllers;

use App\Vaccines;
use Illuminate\Http\Request;

class VaccinesController extends Controller
{
    public function getAllVaccine($id)
    {
        $vaccines = Vaccines::all();
        return  $vaccines;
    }
}
