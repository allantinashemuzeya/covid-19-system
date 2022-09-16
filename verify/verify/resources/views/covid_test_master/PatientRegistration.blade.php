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
							@if (session('success'))
								<div class="alert alert-success">
									<h1 style="font-weight: bolder; font-size:2 em;">{{ session('success') }}</h1>
								</div>
								@else
									<strong>Please enter the patient's information below.</strong>
							@endif
						</p>

						<form autocomplete="off" action="{{ route('register') }}" method="post">
						@csrf

							{{-- First Name --}}

							<div class="form-row">
								<div class="form-group col-12 col-lg-3">
									<label for="firstName">First Name</label> *
									<input
										required
										class="form-control"
										type="text"
										data-val="true"
										data-val-length="The field First  Name must be a string with a maximum length of 100."
										data-val-length-max="100"
										data-val-required="The First  Name field is required."
										id="firstName"
										maxlength="100"
										name="firstName"
										placeholder="eg Nhonho" />
									<span class="text-danger small field-validation-valid"
										data-valmsg-for="firstName" data-valmsg-replace="true"></span>
								</div>
							</div>

							{{-- Last Name --}}

							<div class="form-row">
								<div class="form-group col-12 col-lg-3">
									<label for="firstName">Last Name</label> *
									<input
										required
										class="form-control"
										type="text"
										data-val="true"
										data-val-length="The field Last Name must be a string with a maximum length of 100."
										data-val-length-max="100"
										data-val-required="The Last  Name field is required."
										id="lastName"
										maxlength="100"
										name="lastName"
										placeholder="eg Wilson" />
									<span class="text-danger small field-validation-valid"
										data-valmsg-for="lastName" data-valmsg-replace="true"></span>
								</div>
							</div>

							{{-- Age  --}}

							<div class="form-row">
								<div class="form-group col-12 col-lg-3">
									<label for="firstName">Age</label> *
									<input
										required
										class="form-control"
										type="number"
										data-val="true"
										data-val-length="The field age must be a number with a maximum length of 2."
										data-val-length-max="2"
										data-val-required="The Age field is required."
										id="age"
										maxlength="2"
										name="age"
										placeholder="eg 18" />
									<span class="text-danger small field-validation-valid"
										data-valmsg-for="age" data-valmsg-replace="true"></span>
								</div>
							</div>


							{{-- Sex  --}}

							<div class="form-row">
								<div class="form-group col-12 col-lg-3">
									<label for="firstName">Sex </label><span style="color:red">*</span>
									<select
										required
										class="form-control"
										type="text"
										data-val="true"
										data-val-required="The Sex field is required."
										id="firstName"
										maxlength="100"
										name="sex">

										<option default value="female">Female</option>
										<option value="male">Male</option>

									</select>
									<span class="text-danger small field-validation-valid"
										data-valmsg-for="sex" data-valmsg-replace="true"></span>
								</div>
							</div>


							{{-- Passport Number --}}

							<div class="form-row">
								<div class="form-group col-12 col-lg-3">
									<label for="firstName">Passport </label>
									<input
										class="form-control"
										type="text"
										data-val="true"
										data-val-length="The field Passport Number must be a string with a maximum length of 15."
										data-val-length-max="100"
										id="passportNumber"
										maxlength="100"
										name="passportNumber"
										value="" />
									<span class="text-danger small field-validation-valid"
										data-valmsg-for="passportNumber" data-valmsg-replace="true"></span>
								</div>
							</div>


							{{-- Id Number --}}

							<div class="form-row">
								<div class="form-group col-12 col-lg-3">
									<label for="id_number">Id Number</label>
									<input
										class="form-control"
										type="text"
										data-val="true"
										data-val-length="The field ID Number must be a string with a maximum length of 20."
										data-val-length-max="100"
										id="id_number"
										maxlength="100"
										name="id_number"
										value="" />
									<span class="text-danger small field-validation-valid"
										data-valmsg-for="id_number" data-valmsg-replace="true"></span>
								</div>
							</div>



							{{--  Collection Site --}}

							<div class="form-row">
								<div class="form-group col-12 col-lg-3">
									<label for="collection_site">Collection Site <span style="color:red">*</span></label>
									<input
									    required
										class="form-control"
										type="text"
										data-val="true"
										data-val-length="The field Collection Site must be a string with a maximum length of 100."
										data-val-length-max="100"
										id="firstName"
										maxlength="100"
										name="collection_site"
										placeholder="eg Midrand Johannesburg" />
									<span class="text-danger small field-validation-valid"
										data-valmsg-for="collection_site" data-valmsg-replace="true"></span>
								</div>
							</div>



							{{--  Date of Birth --}}

							<div class="form-row">
								<div class="form-group col-12 col-lg-3">
									<label for="dob">Date of Birth <span style="color:red">*</span></label>
									<input
										required
										class="form-control"
										type="date"
										data-val="true"
										data-val-length-max="100"
										id="dob"
										name="dob"
										value="" />
									<span class="text-danger small field-validation-valid"
										data-valmsg-for="dob" data-valmsg-replace="true"></span>
								</div>
							</div>



							{{--  Email Address --}}

							<div class="form-row">
								<div class="form-group col-12 col-lg-3">
									<label for="email_address">Email Address <span style="color:red">*</span></label>
									<input
										class="form-control"
										type="text"
										data-val="true"
										data-val-length="The field Email Address must be a string with a maximum length of 100."
										data-val-length-max="100"
										id="email_address"
										maxlength="100"
										name="email_address"
										plaveholder="eg covid@gmail.com" />
									<span class="text-danger small field-validation-valid"
										data-valmsg-for="email_address" data-valmsg-replace="true"></span>
								</div>
							</div>



							{{--  Contact Details --}}

							<div class="form-row">
								<div class="form-group col-12 col-lg-3">
									<label for="email_address">Phone Number <span style="color:red">*</span></label>
									<input
										required
										class="form-control"
										type="text"
										data-val="true"
										data-val-length="The field Phone Number must be a string with a maximum length of 12."
										data-val-length-max="12"
										id="contact_details"
										maxlength="12"
										name="contact_details"
										/>
									<span class="text-danger small field-validation-valid"
										data-valmsg-for="email_address" data-valmsg-replace="true"></span>
								</div>
							</div>




							{{--  Result --}}

							<div class="form-row">
								<div class="form-group col-12 col-lg-3">
									<label for="collection_site">Result </label>
									<input
										class="form-control"
										type="text"
										data-val="true"
										data-val-length="The field Result must be a string with a maximum length of 100."
										data-val-length-max="100"
										id="result"
										maxlength="100"
										name="result"
										placeholder="eg POSITIVE" />
									<span class="text-danger small field-validation-valid"
										data-valmsg-for="result" data-valmsg-replace="true"></span>
								</div>
							</div>



							{{--  Receive Date --}}

							<div class="form-row">
								<div class="form-group col-12 col-lg-3">
									<label for="dob">Receive Date </label>
									<input
									required
										class="form-control"
										type="datetime-local"
										data-val="true"
										id="receive_date"
										name="receive_date"
										value="" />
									<span class="text-danger small field-validation-valid"
										data-valmsg-for="receive_date" data-valmsg-replace="true"></span>
								</div>
							</div>



							{{--  Collection Date --}}

							<div class="form-row">
								<div class="form-group col-12 col-lg-3">
									<label for="dob">Collection Date </label>
									<input
									 required
										class="form-control"
										type="datetime-local"
										data-val="true"
										id="receive_date"
										name="collection_date"
										value="" />
									<span class="text-danger small field-validation-valid"
										data-valmsg-for="collection_date" data-valmsg-replace="true"></span>
								</div>
							</div>



							{{--  Report Date --}}

							<div class="form-row">
								<div class="form-group col-12 col-lg-3">
									<label for="dob">Report Date </label>
									<input
									required
										class="form-control"
										type="datetime-local"
										data-val="true"
										id="report_date"
										name="report_date"
										value="" />
									<span class="text-danger small field-validation-valid"
										data-valmsg-for="report_date" data-valmsg-replace="true"></span>
								</div>
							</div>


							{{-- Referring Doctor --}}

							<div class="form-row">
								<div class="form-group col-12 col-lg-3">
									<label for="firstName">Referring Doctor</label>
									<input
										class="form-control"
										type="text"
										data-val="true"
										data-val-length="The field referring_doctor must be a string with a maximum length of 100."
										data-val-length-max="100"
										data-val-required="The referring_doctor  Name field is required."
										id="referring_doctor"
										maxlength="100"
										name="referring_doctor"
										placeholder="Yvonne van Holt" />
									<span class="text-danger small field-validation-valid"
										data-valmsg-for="referring_doctor" data-valmsg-replace="true"></span>
								</div>
							</div>



							<div class="form-row mt-5 justify-content-between">
								<div class="form-group col-6">

								</div>
								<div class="form-group col-6 text-right">
									<button type="submit" class="btn btn-primary px-5">Create</button>
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
