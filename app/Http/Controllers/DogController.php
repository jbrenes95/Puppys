<?php

namespace App\Http\Controllers;

use App\Dog;

use App\Vaccines;
use Illuminate\Http\Request;


class DogController extends Controller
{

    public function index()
    {
        $dogs = Dog::all();
       return $dogs;

    }
    public function show($id)
    {
        return Dog::find($id);
    }

    public function create(Request $request)
    {
        $vaccine = new VaccineController();

        if($namePhoto = $request->photo){
            $name = $namePhoto->getClientOriginalName();
            $namePhoto->move('iamges',$name);
            Dog::create($request->only('user_id','name',$name,'weight','size','race','sex','birth','color','chip_date','location_chip',''));
            $vaccine->createVaccine($request->only('vaccine_id','dog_id','veterinary','vaccination_date','expiration'));
        }else {
            $name = "Foto por defecto";
            $namePhoto->move('iamges',$name);
            Dog::create($request->only('user_id','name',$name,'weight','size','race','sex','birth','color','chip_date','location_chip',''));
            $vaccine->createVaccine($request->only('vaccine_id','dog_id','veterinary','vaccination_date','expiration'));
        }
        /*$newDog = new Dog;
        $newDog->user_id = 3;
        $newDog->name = "pancho";
        $newDog->photo = "dadasdasd";
        $newDog->weight = 8;
        $newDog->size = "grande";
        $newDog->race = "husky";
        $newDog->sex = "hembra";
        $newDog->birth = "2020-05-2";
        $newDog->color = "marron";
        $newDog->chip_date = "2020-05-5";
        $newDog->location_chip = "lomo";
        $newDog->save();*/

    }

    public function update(Request $request, $id)//probar
    {
        $dog = Dog::findOrFail($id);
        $newDog = $request->all();
        $dog->update($newDog);

    }

    public function destroy($id)//probar
    {
        //Esto lo hare con el soft delete
    }
}
