<?php

namespace App\Http\Controllers;

use App\Dog;
use Illuminate\Http\Request;


class DogController extends Controller
{

    public function index()
    {
        $dogs = Dog::all();
       return $dogs;
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
