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
								<li class="steps-item active"><span>1</span> Patient Information</li>
								<li class="steps-item "><span>2</span> Complete</li>
							</ol>
						</div>
					</div>

					<div class="col-12 col-md-8 col-lg-9 py-5">

						<p class="mb-5">
							<strong>Please enter the patient's information below.</strong>
						</p>

						<form autocomplete="off" action="{{ route('verifyWP') }}" method="post">
						@csrf
							<div class="form-row">

								<div class="form-group col-12 col-lg-3">
									<label for="IdentityNumber">Identity or Passport Number</label> *
									<input required 
										class="form-control"
										type="text" data-val="true"
										data-val-length="The field Identity or Passport Number must be a string with a maximum length of 30."
										data-val-length-max="30"
										data-val-required="The Identity or Passport Number field is required."
										id="IdentityNumber"
										maxlength="30"
										name="IdentityNumber" 
										value="9006250445085" />
									<span class="text-danger small field-validation-valid"
										data-valmsg-for="IdentityNumber" data-valmsg-replace="true"></span>
								</div>

							</div>

							
							<div class="form-row mt-5 justify-content-between">
								<div class="form-group col-6">

								</div>
								<div class="form-group col-6 text-right">
									<button type="submit" class="btn btn-primary px-5">Find</button>
								</div>
							</div>

							<input name="__RequestVerificationToken" type="hidden"
								value="CfDJ8AMbY6i5bHRJtERDdtHduaCIZk_LNz7Xt7lfpXmHIkhvSd7Fm66msmOVJ_yWpNAu9kN6svmx-CZmGGX57hWC1b0OLN75qBj4BUPVNucWn_vwAWXXVaDtPlwVPxfd6LwBF4BgS2NSlLsWDo_3KwKnFig" />
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	
@endsection