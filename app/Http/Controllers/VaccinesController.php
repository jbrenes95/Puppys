<?php

namespace App\Http\Controllers;

use App\Vaccines;


class VaccinesController extends Controller
{

    public function index()
    {
        $dogs = Vaccines::all();
        return $dogs;
    }

}
