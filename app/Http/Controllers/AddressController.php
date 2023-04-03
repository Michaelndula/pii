<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;

class AddressController extends Controller
{
   //create new patient
   public function Address(Request $request){

    $patient = new Address;

    $patient->facility_name = $request->facility_name;
    $patient->street = $request->street;
    $patient->city = $request->city;
    $patient->county = $request->county;
    $patient->state = $request->state;
    $results = $patient->save();

    if($results){
        return ["results"=>"Address Created"];
    }else{
        return ["results"=>"Address not sent"];
    }

}
}
