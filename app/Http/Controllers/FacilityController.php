<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Facility;

class FacilityController extends Controller
{
    public function Facility(Request $request){

        $facility = new Facility;

        $facility->id= $request->id;
        $facility->f_name = $request->name;
        $facility->facility_city = $request->facility_city;
        $facility->facility_county = $request->facility_county;
        $facility->facility_state = $request->facility_state;
        $facility->facility_phone = $request->facility_phone;
        $results = $facility->save();

        if($results){
            return ["results"=>"Facility Created"];
        }else{
            return ["results"=>"Facility not sent"];
        }

    }

}
