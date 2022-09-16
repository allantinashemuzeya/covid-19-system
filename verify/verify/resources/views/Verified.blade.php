@extends('layouts.layout')
@section('content')

    <div class="section bg-white">
        <div class="section">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-12 col-md-4 col-lg-3 py-3">
                        <div class=" bg-light border p-3">
                            <h2 class="text-primary"><strong>Verify Results Process</strong></h2>
                            <ol class="steps">
                                <li class="steps-item "><span>1</span> Patient Information</li>
                                <li class="steps-item active"><span>2</span> Complete</li>
                            </ol>
                        </div>
                    </div>

                    <div class="col-12 col-md-8 col-lg-9 py-5">
						@if($patientData !== null)
                        <h1 style="color: rgb(55, 192, 55); font-size: 2em">Verified</h1>
							@else
								<h1 style="color: rgb(180, 20, 20); font-size: 3em; font-weight: bold">PATIENT NOT FOUND</h1>
						@endif

                    </div>

				@if($patientData !== null)
                    <div class="col-12 col-md-8 col-lg-9 py-5">
                        <h2 style="color: black ">Patient:</h2>
                        <h1>{{$patientData->firstName}} {{$patientData->lastName}}</h1>
                    </div>


                    <div class="col-12 col-md-8 col-lg-9 py-5">
                        <h2 style="color: black ">Test type:</h2>
                        <h1>SARS-COV2 [COVID-19] RT-PCR</h1>
                    </div>


                    <div class="col-12 col-md-8 col-lg-9 py-5">
                        <h2 style="color: black ">Sample Collection Date:</h2>
                        <h1>{{$patientData->receive_date}}</h1>
                    </div>


                    <div class="col-12 col-md-8 col-lg-9 py-5">
                        <h2 style="color: black ">RESULT:</h2>
                        <h1 style="color: green ">{{$patientData->result}}</h1>
                    </div>
				@endif
                </div>
            </div>
        </div>
    </div>

@endsection
