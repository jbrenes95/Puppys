<?php

namespace App\Http\Controllers;

use App\Vaccine;
use Illuminate\Http\Request;

class VaccineController extends Controller
{
    public function index()
    {
        $vaccine = Vaccine::all();
        return $vaccine;

    }

    public function show($id)
    {
        $vaccines = Vaccine::where('dog_id', $id)->get();
        return  $vaccines;
    }

    public function maxIdVaccine($userId)
    {
        $vaccines = Vaccine::where('dog_id', $userId)->orderBy('vaccines_id','desc')->get();
        return  $vaccines;
    }
    public function store(Request $request)
    {
        $vac =  new Vaccine;
        $vac->vaccines_id = $request->vaccines_id;
        $vac->dog_id = $request->dog_id ;
        $vac->name = $request->name;
        $vac->veterinary = $request->veterinary;
        $vac->vaccination_date = $request->vaccination_date;
        $vac->expiration = $request->expiration;
        $vac->save();
        return "esta insertado";

    }

    public function createVaccine($request,$ids)
    {
        $vac =  new Vaccine;
        $vac->vaccines_id = $request['vaccines_id'];
        $vac->dog_id =  $ids;
        $vac->name = $request['name'];
        $vac->veterinary = $request['veterinary'];
        $vac->vaccination_date = $request['vaccination_date'];
        $vac->expiration = $request['expiration'];
        $vac->save();

    }


}
