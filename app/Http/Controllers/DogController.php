<?php

namespace App\Http\Controllers;
use App\Dog;

use App\Vaccine;
use App\Vaccines;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\Object_;
use stdClass;

class DogController extends Controller
{


    public function index()
    {
        $dogs = Dog::all();
       return $dogs;

    }
    public function show($id)
    {
        return Dog::where('user_id',$id)->get();
    }

    public function showDog($id)
    {
        return Dog::find($id);
    }

    public function makePhoto($photo)
    {
        $explouded = explode(',',$photo);
        $decode = base64_decode($explouded[1]);

        if(str_contains($explouded[0],'jpeg')){
            $extension = 'jpg';
        }else{
            $extension = 'png';
        }
        $fileName = str_random().'.'.$extension;

        $path = public_path().'/'.$fileName;
        file_put_contents($path,$decode);
        chmod($path, 0755);
        return $fileName;
    }


    public function store(Request $request)
    {

        $pathbd = "/public/";
        $defaultImage = "default.png";
        $vaccine = new VaccineController();
        if($request->photo){

           $fileName = $this->makePhoto($request->photo);

            $newDog = new Dog;

            $newDog->user_id = $request->user_id;
            $newDog->name = $request->name;
            $newDog->photo = $pathbd.$fileName;
            $newDog->weight = $request->weight;
            $newDog->size = $request->size;
            $newDog->race =$request->race;
            $newDog->sex = $request->sex;
            $newDog->birth = $request->birth;
            $newDog->color = $request->color;
            $newDog->chip_date = $request->chip_date;
            $newDog->location_chip = $request->location_chip;
            $newDog->save();
            $ids = $newDog->id;
            $vaccine->createVaccine($request->vaccine,$ids);

            return"El perro se ha añadido con exito";
        }else{
            $newDog = new Dog;
            $newDog->user_id = $request->user_id;
            $newDog->name = $request->name;
            $newDog->photo = $pathbd.$defaultImage;
            $newDog->weight = $request->weight;
            $newDog->size = $request->size;
            $newDog->race =$request->race;
            $newDog->sex = $request->sex;
            $newDog->birth = $request->birth;
            $newDog->color = $request->color;
            $newDog->chip_date = $request->chip_date;
            $newDog->location_chip = $request->location_chip;
            $newDog->save();
            $ids = $newDog->id;
            $vaccine->createVaccine($request->vaccine,$ids);
            return"El perro se ha añadido con exito sin foto";
        }
    }

    public function update(Request $request, $id)
    {

        $pos = strpos($request->photo, "/");

        if($pos === 0){
            $newDog = Dog::findOrFail($id);
            $newDog->update($request->all());

        }else {
            $newDog = Dog::findOrFail($id);
            $pathbd = "/public/";
            $fileName = $this->makePhoto($request->photo);

            $newDog->user_id = $request->user_id;
            $newDog->name = $request->name;
            $newDog->photo = $pathbd . $fileName;
            $newDog->weight = $request->weight;
            $newDog->size = $request->size;
            $newDog->race = $request->race;
            $newDog->sex = $request->sex;
            $newDog->birth = $request->birth;
            $newDog->color = $request->color;
            $newDog->chip_date = $request->chip_date;
            $newDog->location_chip = $request->location_chip;
            $newDog->save();
            return "Actualizado con exito";
        }

    }

    public function destroy($id)
    {
        Dog::find($id)->delete();
    }
}
