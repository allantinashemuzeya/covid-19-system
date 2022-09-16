<?php

namespace App\Http\Controllers;

use App\Models\Patients;
use Illuminate\Routing\Controller as BaseController; 
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;


class VerifyController extends BaseController{

    public function verificationForm(){
        return view('VerificationForm');
    }

    public function verify($passportNumber){

        // Fetch Patient Details
        $patientData = Patients::where('passportNumber', $passportNumber)->first();
        
        if($patientData !== null){
            return view('Verified', ['patientData' => $patientData]);
        }
        else{
            $patientData = null;
            return view('Verified', ['patientData' => $patientData]);
        }
    }

    public function verifyWP(Request $request){

        // Fetch Patient Details
        $patientData = Patients::where('passportNumber', $request->IdentityNumber)->first();
        
        if($patientData !== null){
            return view('Verified', ['patientData' => $patientData]);
        }
        else{
            $patientData = null;
            return view('Verified', ['patientData' => $patientData]);
        }
    }
}
        
