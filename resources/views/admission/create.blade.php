@extends('templates.main')

@section('title', 'Create Admitting History')

@section('navbar')

@include('templates.nav')

@endsection

@section('content')

@if (session('error'))
   <div class="row purchace-popup{{ $errors->has('email') ? ' has-error' : '' }}">
		<div class="col-md-12 grid-margin">
		  <span class="d-block d-md-flex align-items-center">
		 	<strong class=" text-warning" >Warning:</strong>

		 	&nbsp&nbsp <small class="designation text-danger" >This Patient is already registered</small> 
		 	<h6 class="ml-auto mt-4 mt-md-0" ></h6>

		    <i class="mdi mdi-close popup-dismiss d-none d-md-block"></i>
		  </span>
		</div>
    </div>
@endif

<div class="row">
	
		<div class="col-md-12">
		
			<div class="box">
				
				<h4 class="card-title" >Admit New Patient</h4>

				<form method="post" >
				{{ csrf_field() }}
					<div class="row">

						<div class="col-md-3">
							
							<div class="form-group">
							
								<label class="card-description">Hospital No</label>
			
								<input type="text" name="Hospnum" class="form-control" value="{{$master->HospNum}}" placeholder="000000" readonly>
								@if($errors->has('hospitalNo'))
								   <p class="text-danger">Hospital Number is required</p>
								@endif
							</div>

						</div>

					</div>

					<div class="row">
						
						<div class="col-md-4">
							
							<div class="form-group">
								
								<label class="card-description">Last Name</label>

								<input type="text" name="lname"  class="form-control" value="{{$master->LastName}}" placeholder="Last Name" readonly>
								@if($errors->has('lname'))
								   <p class="text-danger">Last Name is required</p>
								@endif
							</div>

						</div>

						<div class="col-md-4">
							
							<div class="form-group">
								
								<label class="card-description">First Name</label>

								<input type="text" name="fname" class="form-control" value="{{$master->FirstName}}" placeholder="First Name"  readonly>
								@if($errors->has('fname'))
								   <p class="text-danger">First Name is required</p>
								@endif
							</div>

						</div>

						<div class="col-md-4">
							
							<div class="form-group">
								
								<label class="card-description">Middle Name</label>

								<input type="text" name="mname" class="form-control" value="{{$master->MiddleName}}" placeholder="Middle Name"  readonly>
								@if($errors->has('mname'))
								   <p class="text-danger">Middle Name is required</p>
								@endif
							</div>

						</div>

					</div>

					<div class="row">
						
						<div class="col-md-3">
							
							<div class="form-group">
								
								<label class="card-description">Date of Birth</label>

								<input type="text" name="birthdate" value="{{$master->BirthDate}}" class="form-control" placeholder="mm/dd/yyyy" readonly>
								@if($errors->has('birthdate'))
								   <p class="text-danger">Date of Birth is required</p>
								@endif
							</div>

						</div>

						<div class="col-md-2">
							
							<div class="form-group">
								
								<label class="card-description">Age</label>

								<input type="text" name="age" value="{{$master->Age}}" class="form-control"  readonly>
								@if($errors->has('hospitalNo'))
								   <p class="text-danger">Age is required</p>
								@endif
							</div>

						</div>

						<div class="col-md-7">
							
							<div class="form-group">
								
								<label class="card-description">Address</label>

								<input type="text" name="address" value="{{$master->HouseStreet}}" class="form-control" placeholder="Enter complete home address" readonly>
								@if($errors->has('address'))
								   <p class="text-danger">Age is required</p>
								@endif
							</div>

						</div>

					</div>

					<div class="row">
						
						<div class="col-md-2">
							
							<div class="form-group">
								
								<label class="card-description">Gender</label>
									
									<input type="text" name="sex" 
									value="<?php
										if($master->Sex=="F"){
											echo"Female";
										}else{
											echo"Male";
										}

									?>"
									class="form-control" 
									 readonly>
						
							</div>

						</div>

						<div class="col-md-2">
							
							<div class="form-group">
								
								<label class="card-description">Civil Status</label>

									<input type="text" name="cs" value="@if($master->CivilStatus=='0') Child 
					                @elseif($master->CivilStatus=='1') Single 
					                @elseif($master->CivilStatus=='2') Married
					                @elseif($master->CivilStatus=='3') Widow/er
					                @elseif($master->CivilStatus=='4') Separated
					                @else Divorced
					                @endif" class="form-control" readonly>
							</div>

						</div>

		

						<div class="col-md-4">
							
							<div class="form-group">
								
								<label class="card-description">Religion</label>

								<select name="religion" class="form-control">
	                              <option>-None-</option>
	                              <option value="Catholic" >Catholic</option>
	                              <option value="Christian" >Christian</option>
	                              <option value="Islam" >Islam</option>
	                              <option value="Iglesia ni Cristo" >Iglesia ni Cristo</option>
	                              <option value="Buddhist" >Buddhist</option>
	                              <option value="Protestant" >Protestant</option>
	                              <option value="Jehova's Witness" >Jehova's Witness</option>
	                              <option value="Prefer not to say">Prefer not to say</option>
                            	</select>

							</div> 

						</div>

					</div>
					


					<!-- <input type="hidden" name="admissionNo" value="{{$date->format('Ymd')}}"> -->

					<input type="hidden" value="{{Auth::user()->id}}" name="createdBy"  >
				
					<button type="submit" class="btn btn-primary btn-fw">Save</button>

				</form>

			</div>

		</div>
</div>

@endsection