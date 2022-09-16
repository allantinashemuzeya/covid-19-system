<?php

namespace App\Http\Controllers;

use App\Models\Patients;
use Symfony\Component\HttpFoundation\Request;


class CovidTestMasterController extends Controller
{
    // Home
    public function index(){
        return view('covid_test_master.PatientRegistration');
    }

    // Register PatientRegistration
    public function register(Request $request){

        $patient = new Patients();
        $patient->firstName = $request->firstName;
        $patient->lastName = $request->lastName;
        $patient->age = $request->age;
        $patient->sex = $request->sex;
        $patient->passportNumber = $request->passportNumber;
        $patient->id_number = $request->id_number;
        $patient->laboratoryReferenceNumber = $this->generateRandomString();
        $patient->collection_site = $request->collection_site;
        $patient->dob = $request->dob;
        $patient->email_address = $request->email_address;
        $patient->contact_details = $request->contact_details;
        $patient->referring_doctor = $request->referring_doctor;
        $patient->receive_date = $request->receive_date;
        $patient->collection_date = $request->collection_date;
        $patient->report_date  = $request->report_date;

        
        $patient->save();
        if($patient->save()){
            return redirect(route('covid_test_master'))->with('success','Patient Saved');
        }else{
            return redirect(route('covid_test_master'))->with('error','Could Not Save User');
        }

    }

    // Helper functions 

    function generateRandomString($length = 8) {
        $characters = '0123456789';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

}