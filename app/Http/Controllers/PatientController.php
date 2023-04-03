<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
{
    //create new patient
    public function Patient(Request $request){

        $patient = new Patient;

        $patient->id= $request->id;
        $patient->last_name = $request->last_name;
        $patient->first_name = $request->first_name;
        $patient->middle_name_initials = $request->middle_name_initials;
        $patient->date_of_birth = $request->date_of_birth;
        $patient->sex = $request->sex;
        $patient->age = $request->age;
        $patient->race = $request->race;
        $patient->HorL = $request->HorL;
        $results = $patient->save();

        if($results){
            return ["results"=>"Patient Created"];
        }else{
            return ["results"=>"Patient not sent"];
        }

    }

    //display all patients
    public function index()
    {
        $patient = Patient::all();

        return response()->json([
            'data' => $patient,
        ], 200);
    }


}
