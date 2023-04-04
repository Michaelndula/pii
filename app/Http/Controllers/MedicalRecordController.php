<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MedicalRecord;

class MedicalRecordController extends Controller
{

    public function MedicalRecord(Request $request){

        $medical_record = new MedicalRecord;
        $medical_record->medical_record = $request->medical_record;
        $results = $medical_record->save();

        if($results){
            return ["results"=>"Medical Record Created"];
        }else{
            return ["results"=>"Medical Record not sent"];
        }

    }

    //display all Medical Records
    public function index()
    {
        $medical_record = MedicalRecord::all();

        return response()->json([
            'data' => $medical_record,
        ], 200);
    }
}
