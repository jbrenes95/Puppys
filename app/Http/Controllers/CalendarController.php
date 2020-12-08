<?php

namespace App\Http\Controllers;

use App\Calendar;
use Illuminate\Http\Request;

class CalendarController extends Controller
{

    public function index()
    {
        return Calendar::all();
    }

    public function store(Request $request)
    {
        $newCalendar = new Calendar;
        $newCalendar->user_id = $request->userId;
        $newCalendar-> end= $request->endStr;
        $newCalendar->start = $request->startStr;
        $newCalendar->title = $request->title;
        $newCalendar->save();
    }

    public function show($id)
    {
        return Calendar::where('user_id',$id)->get();
    }

    public function update(Request $request, $id)
    {
        $currentCalendar = Calendar::findOrFail($id);
        $currentCalendar->user_id = $request->userId;
        $currentCalendar-> end= $request->endStr;
        $currentCalendar->start = $request->startStr;
        $currentCalendar->title = $request->title;
        $currentCalendar->save();
    }

    public function destroy($id)
    {
        Calendar::find($id)->delete();
    }
}
