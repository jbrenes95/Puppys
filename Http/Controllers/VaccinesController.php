<?php

namespace App\Http\Controllers;

use App\Vaccines;
use Illuminate\Http\Request;

class VaccinesController extends Controller
{

    public function index()
    {
        $vaccines = Vaccines::all();
        return $vaccines;
    }


}
