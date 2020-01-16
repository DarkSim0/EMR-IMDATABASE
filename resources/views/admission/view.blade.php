@extends('templates.main')

@section('title', 'Admitting History')

@section('navbar')

@include('templates.nav')

@endsection

@section('content')
	  @if ($errors->has('admittingHistoryNo'))
        <div style="margin-top: 20px;">
            <p class="text-danger">This admitting history already exist</p>
        </div>
 	 @endif
<div class="col-lg-12 grid-margin stretch-card">
	<div class="card">
		<div class="card-body">
			<h3 class=" text-primary">Admitting History and Physical Examination </h3>
		</div>
		@include('templates.demograph')
	</div>
</div>
<form  method="post" >
	{{csrf_field()}}
	<input type="hidden" value="{{$patient->id}}" name="admittingHistoryNo" > 
<div class="col-lg-12 grid-margin stretch-card" >
	<div class="card">
			<div class="card-body">
			<div class="row">
				<div class="col-md-6">
					<p class="card-description" >Date Admitted</p>
					<input type="text" name="dateAdmit" value="{{date( 'n / j / Y' , strtotime($patient->created_at))}}" class="form-control" >
				</div>
				<div class="col-md-6">
					<p class="card-description">Attending Physician</p>
					<select class="form-control" name="attendingPhysician" >
						<option value="">-No Physician Selected-</option>
						@foreach($consultants as  $value)
							<option value="{{$value->id}}" >{{$value->lname.','.$value->fname.' '.$value->mname}}</option>
						@endforeach
					</select>
					<p class="card-description" style="margin-top: 20px;" >Attending Physician Other</p>
					<input type="text" class="form-control" name="attendingPhysicianOther" placeholder="Enter Physician's Full name" >	
				</div>	
			</div>		
		</div>
	</div>
</div>

<div class="col-lg-12 grid-margin stretch-card">
	
	<div class="card">
		
		<div class="card-body">
			
			<div class="form-group row">
			
				<label class="col-sm-3 col-form-label text-info"> I. Chief Complaint:</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" placeholder="Chief complaint of a patient" name="chiefComplaint" >
				</div>

			</div>

			<div class="form-group row">
				
				<p class="col-sm-3 text-info" >II. History of Present Illness</p>
				<textarea name="historyPresentIllness" class="form-control" placeholder="History of present illness of a patient..." ="" cols="30" rows="10"></textarea>

			</div>

		</div>
	

	</div>

</div>

<div class="col-md-12">
	<div class="row">
		<div class="col-md-6 d-flex grid-margin align-items-stretch">
			<div class="card">
				<div class="card-body">		
					<div class="form-group row">
						<label class="col-form-label col-sm-3 text-info">III. Past Medical History</label>
						<div class="col-sm-4">
							 <div class="form-radio">
		                      <label class="form-check-label">
		                        <input type="radio" class="form-check-input" name="remarksmedical[]"  value="Unremarkable" > Unremarkable
		                      </label>
		                	</div>
						</div>
						<div class="col-sm-4">
		                    <div class="form-radio">
		                      <label class="form-check-label">
		                        <input type="radio" class="form-check-input" name="remarksmedical[]"  value="Remarkable" > Remarkable
		                      </label>
		                    </div>
		              	</div>
						<div class="form-group">
							<div class="form-check form-check-flat">
		                        <label class="form-check-label">
		                          <input type="checkbox" name="pastMedicalHistory[]" value="Hytn" class="form-check-input" > Hypertension
		                        </label>
		                   	</div>
		               	  	<div class="form-check form-check-flat">
		                        <label class="form-check-label">
		                          <input type="checkbox" name="pastMedicalHistory[]" value="Dibs" class="form-check-input"> Diabetes
		                        </label>
		                     </div>
		                    <div class="form-check form-check-flat">
			                    <label class="form-check-label">
			                      <input type="checkbox" name="pastMedicalHistory[]" value="asma" class="form-check-input"> Asthma
			                    </label>
		                  	</div>
		                    <div class="form-check form-check-flat">
			                    <label class="form-check-label">
			                      <input type="checkbox" name="pastMedicalHistory[]" value="other" class="form-check-input"> Others
			                    </label>
		                  	</div>
		                  	<textarea name="pastMedicalHistoryOther" class="form-control" cols="30" rows="10" placeholder="Others.." ></textarea>
						</div>	   
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6 grid-margin stretch-card">	
			<div class="card">
				<div class="card-body">
					<div class="form-group row">
						<label class="col-form-label col-sm-3 text-info">IV. Past Surgical History</label>
						<div class="col-sm-4">
							<div class="form-radio">
			                      <label class="form-check-label">
			                        <input type="radio" class="form-check-input" name="remarkssurgical[]"value="Unremarkable" > Unremarkable
			                      </label>
		                	</div>
						</div>
						<div class="col-sm-4">
							<div class="form-radio">
			                      <label class="form-check-label">
			                        <input type="radio" class="form-check-input" name="remarkssurgical[]" value="Remarkable" > Remarkable
			                      </label>
		                	</div>
						</div>
						<div class="form-group">
							<div class="form-check form-check-flat">
		                        <label class="form-check-label">
		                          <input type="checkbox" name="pastSurgicalHistory[]" value="Appendectomy" class="form-check-input"> Appendectomy
		                        </label>
		                   	</div>
		               	  	<div class="form-check form-check-flat">
		                        <label class="form-check-label">
		                          <input type="checkbox" name="pastSurgicalHistory[]" value="Cholecystec" class="form-check-input"> Cholecystec
		                        </label>
		                     </div>
		              		<div class="form-check form-check-flat">
			                    <label class="form-check-label">
			                      <input type="checkbox" name="pastSurgicalHistory[]" value="Others" class="form-check-input"> Others
			                    </label>
		                  	</div>
		                  	<textarea name="pastSurgicalHistoryOther" class="form-control" cols="30" rows="10" placeholder="Others.." ></textarea>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-form-label col-sm-3">OB-Gyne History</label>
						<div class="col-sm-4">
							<div class="form-radio">
			                      <label class="form-check-label">
			                        <input type="radio" class="form-check-input" name="gyneremark[]" id="membershipRadios1" value="Unremarkable" > Unremarkable
			                      </label>
		                	</div>
						</div>
						<div class="col-sm-4">
							<div class="form-radio">
			                      <label class="form-check-label">
			                        <input type="radio" class="form-check-input" name="gyneremark[]" id="membershipRadios1" value="Remarkable" > Remarkable
			                      </label>
		                	</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								G<input type="text" name="gynegen" class="form-control">
							</div>
							<div class="col-md-3">
								P <input type="text" name="gynepen" class="form-control" >
							</div>
							<div class="col-md-3">
							 	.<input type="text" name="gynefour" class="form-control" >
							</div>
							<div class="col-md-3">
								LMP<input type="text" name="gynelmp" placeholder="mm/dd/yyyy" class="form-control">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="col-md-12">
	<div class="row">
		<div class="col-md-6 d-flex grid-margin align-items-stretch">
			<div class="card">
				<div class="card-body">		
					<div class="form-group row">
						<label class="col-form-label col-sm-3 text-info">V. Personal and Social History</label>
						<div class="col-sm-4">
							 <div class="form-radio">
		                      <label class="form-check-label">
		                        <input type="radio" class="form-check-input" name="remakcns[]" id="membershipRadios1" value="Unremarkable" > Unremarkable
		                      </label>
		                	</div>
						</div>
						<div class="col-sm-4">
		                    <div class="form-radio">
		                      <label class="form-check-label">
		                        <input type="radio" class="form-check-input" name="remakcns[]" id="membershipRadios2" value="Remarkable"> Remarkable
		                      </label>
		                    </div>
		              	</div>
						<div class="form-group">
							<div class="form-check form-check-flat">
		                        <label class="form-check-label">
		                          <input type="checkbox" name="personalAndSocialHistory[]" class="form-check-input" value="smoker"> Smoker
		                        </label>
		                   	</div>
		               	  	<div class="form-check form-check-flat">
		                        <label class="form-check-label">
		                          <input type="checkbox" name="personalAndSocialHistory[]" class="form-check-input" value="alcholic" > Alcoholic Drinker
		                        </label>
		                     </div>
		                    <div class="form-check form-check-flat">
			                    <label class="form-check-label">
			                      <input type="checkbox" name="personalAndSocialHistory[]" class="form-check-input" value="illegal" > Illegal Drug Use
			                    </label>
		                  	</div>
		                    <div class="form-check form-check-flat">
			                    <label class="form-check-label">
			                      <input type="checkbox" name="personalAndSocialHistory[]" class="form-check-input" value="other" > Others
			                    </label>
		                  	</div>
		                  	<textarea name="personalAndSocialHistoryOther" class="form-control" cols="30" rows="10" placeholder="Others.." ></textarea>
						</div>	   
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6 grid-margin stretch-card">	
			<div class="card">
				<div class="card-body">
					<div class="form-group row">
						<label class="col-form-label col-sm-3 text-info">VI. Family History</label>
						<div class="col-sm-4">
							<div class="form-radio">
			                      <label class="form-check-label">
			                        <input type="radio" class="form-check-input" name="remarksfamily[]" id="membershipRadios1" value="Unremarkable" > Unremarkable
			                      </label>
		                	</div>
						</div>
						<div class="col-sm-4">
							<div class="form-radio">
			                      <label class="form-check-label">
			                        <input type="radio" class="form-check-input" name="remarksfamily[]" id="membershipRadios1" value="Remarkable" > Remarkable
			                      </label>
		                	</div>
						</div>
						<div class="form-group">
							<div class="form-check form-check-flat">
		                        <label class="form-check-label">
		                          <input type="checkbox" name="familyHistory[]" value="Hypertension" class="form-check-input"> Hypertension
		                        </label>
		                   	</div>
		               	  	<div class="form-check form-check-flat">
		                        <label class="form-check-label">
		                          <input type="checkbox" name="familyHistory[]" value="DM" class="form-check-input"> DM
		                        </label>
		                     </div>
		              		<div class="form-check form-check-flat">
			                    <label class="form-check-label">
			                      <input type="checkbox" name="familyHistory[]" value="Asthma" class="form-check-input"> Asthma
			                    </label>
		                  	</div>
		                  	<div class="form-check form-check-flat">
			                    <label class="form-check-label">
			                      <input type="checkbox" name="familyHistory[]" value="Others" class="form-check-input"> Others
			                    </label>
		                  	</div>
		                  	<textarea name="familyHistoryOther" class="form-control" cols="30" rows="10" placeholder="Others.." ></textarea>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="col-lg-12 grid-margin ">

	<div class="card">

		<div class="card-body">
			
			<div class="form-group">
				<label class="col-form-label col-sm-3 text-info">VII. System Review</label>
						<div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="systemsReview[]" value="UNREMARKABLE" class="form-check-input"> UNREMARKABLE
	                        </label>
		               </div>
				<div class="row">
					<div class="col-sm-4">
						<label class="col-form-label col-sm-3 text-primary" >Skin</label>
						<div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="systemsReview[]" value="sknl" class="form-check-input"> Skin Lesions
	                        </label>
		               </div>
		               <div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="systemsReview[]" value="skrs" class="form-check-input"> Skin Rashes
	                        </label>
		               </div>
		               <div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="systemsReview[]" value="lace" class="form-check-input"> Lacertation
	                        </label>
		               </div>
		               <div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="systemsReview[]" value="brusi" class="form-check-input"> Bruising
	                        </label>
		               </div>
		               <div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="systemsReview[]" value="burns" class="form-check-input"> Burns
	                        </label>
		               </div>
		               <label class="col-form-label col-sm-3 text-primary">Musculskeletal</label>
		               <div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="systemsReview[]" value="bojpn" class="form-check-input"> Bone or Joint Pain
	                        </label>
		               </div>
		               <div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="systemsReview[]" value="lwbp" class="form-check-input"> Low Back Pain
	                        </label>
		               </div>
		               <div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="systemsReview[]" value="riptp" class="form-check-input"> Radiation of Pain to Foot
	                        </label>
		               </div>
					</div>
					<div class="col-sm-4">
						<label class="col-form-label col-sm-3 text-primary">Heent</label>
						<div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="systemsReview[]" value="injr" class="form-check-input"> Injury
	                        </label>
		               </div>
		               	<div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="systemsReview[]" value="conts" class="form-check-input"> Contusion
	                        </label>
		               </div>
		               	<div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="systemsReview[]" value="acthg" class="form-check-input"> Acuity Change
	                        </label>
		               </div>
		               	<div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="systemsReview[]" value="pain" class="form-check-input"> Pain
	                        </label>
		               </div>
		               	<div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="systemsReview[]" value="redns" class="form-check-input"> Redness
	                        </label>
		               </div>
		               	<div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="systemsReview[]" value="itchi" class="form-check-input"> Itchiness
	                        </label>
		               </div>
		               	<div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="systemsReview[]" value="diplo" class="form-check-input"> Diplopia
	                        </label>
		               </div>
		               	<div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="systemsReview[]" value="otalg" class="form-check-input"> Otalgia
	                        </label>
		               </div>
		               	<div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="systemsReview[]" value="nasdis" class="form-check-input"> Nasoaural Discharge
	                        </label>
		               </div>
		               	<div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="systemsReview[]" value="epistax" class="form-check-input"> Epistaxis
	                        </label>
		               </div>
		               	<div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="systemsReview[]" value="soretro" class="form-check-input"> Sore Throat
	                        </label>
		               </div>
					</div>
					<div class="col-sm-4">
						<label class="col-form-label col-sm-3 text-primary">Neck</label>
						<div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="systemsReview[]" value="tende" class="form-check-input"> Tenderness
	                        </label>
		               </div>
		               <div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="systemsReview[]" value="swell" class="form-check-input"> Swelling
	                        </label>
		               </div>
		               <div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="systemsReview[]" value="thyro" class="form-check-input"> Thyromegaly
	                        </label>
		               </div>
		               <div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="systemsReview[]" value="neckpa" class="form-check-input"> Neck Pain
	                        </label>
		               </div>
						<label class="col-form-label col-sm-4 text-primary">Endocrine</label>
						<div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="systemsReview[]" value="polyur" class="form-check-input"> Polyuria
	                        </label>
		               </div>
		               <div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="systemsReview[]" value="polydips" class="form-check-input"> Polydipsia
	                        </label>
		               </div>
					
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<label class="col-form-label col-sm-4 text-primary">Genitourinary</label>
						<div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="systemsReview[]" value="dysur" class="form-check-input"> Dysuria
	                        </label>
		               </div>
		               <div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="systemsReview[]" value="urgen" class="form-check-input"> Urgency
	                        </label>
		               </div>
		               <div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="systemsReview[]" value="freque" class="form-check-input"> Frequency
	                        </label>
		               </div>
		               <div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="systemsReview[]" value="nuctur" class="form-check-input"> Nucturia
	                        </label>
		               </div>
		               <div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="systemsReview[]" value="flanpa" class="form-check-input"> Flank Pain
	                        </label>
		               </div>
		               <div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="systemsReview[]" value="hematur" class="form-check-input"> Hematuria
	                        </label>
		               </div>
					</div>
					<div class="col-sm 4">
						<label class="col-form-label col-sm-4 text-primary">Cardiovascular</label>
						<div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="systemsReview[]" value="chespan" class="form-check-input"> Chest Pain
	                        </label>
		               </div>
		               <div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="systemsReview[]" value="palpit" class="form-check-input"> Palpitation
	                        </label>
		               </div>
		               <div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="systemsReview[]" value="pnd" class="form-check-input"> PND
	                        </label>
		               </div>
		               <div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="systemsReview[]" value="orthop" class="form-check-input"> Orthopnea
	                        </label>
		               </div>
		               <div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="systemsReview[]" value="syncope" class="form-check-input"> Syncope
	                        </label>
		               </div>
					</div>
					<div class="col-sm-4">
						<label class="col-form-label col-sm-4 text-primary">Gastroenterology</label>
						<div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="systemsReview[]" value="nause" class="form-check-input"> Nausea
	                        </label>
		               </div>
		               <div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="systemsReview[]" value="vomit" class="form-check-input"> Vomiting
	                        </label>
		               </div>
		               <div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="systemsReview[]" value="diarea" class="form-check-input"> Diarrhea
	                        </label>
		               </div>
		               <div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="systemsReview[]" value="pain" class="form-check-input"> Pain
	                        </label>
		               </div>
		               <div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="systemsReview[]" value="melena" class="form-check-input"> Melena
	                        </label>
		               </div>
		               <div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="systemsReview[]" value="hematoc" class="form-check-input"> Hematochezia
	                        </label>
		               </div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<label class="col-form-label col-sm-4 text-primary">Neurological</label>
						<div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="systemsReview[]" value="focalwek" class="form-check-input"> Focal Weakness
	                        </label>
		               </div>
		               <div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="systemsReview[]" value="headache" class="form-check-input"> Headache
	                        </label>
		               </div>
		               <div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="systemsReview[]" value="seizur" class="form-check-input"> Seizures
	                        </label>
		               </div>
		               <div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="systemsReview[]" value="dizzis" class="form-check-input"> Dizziness
	                        </label>
		               </div>
		               <div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="systemsReview[]" value="drowsin" class="form-check-input"> Drowsiness
	                        </label>
		               </div>
		               <div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="systemsReview[]" value="loc" class="form-check-input"> LOC
	                        </label>
		               </div>
		               <div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="systemsReview[]" value="numbns" class="form-check-input"> Numbness
	                        </label>
		               </div>
					</div>
					<div class="col-sm-4">
						<label class="col-form-label col-sm-4 text-primary">Psychiatric</label>
						<div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="systemsReview[]" value="depress" class="form-check-input"> Depression
	                        </label>
		               </div>
		               <div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="systemsReview[]" value="anxiety" class="form-check-input"> Anxiety
	                        </label>
		               </div>
		               <div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="systemsReview[]" value="suiciden" class="form-check-input"> Suicidal Ideation
	                        </label>
		               </div>
		               <div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="systemsReview[]" value="homical" class="form-check-input"> Homicidal
	                        </label>
		               </div>
		               <div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="systemsReview[]" value="delun" class="form-check-input"> Delusion
	                        </label>
		               </div>
					</div>
					<div class="col-sm-4">
						<label class="col-form-label col-sm-4 text-primary">Pulmonary</label>
						<div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="systemsReview[]" value="sob" class="form-check-input"> SOB
	                        </label>
		               </div>
		               <div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="systemsReview[]" value="cough" class="form-check-input"> Cough
	                        </label>
		               </div>
		               <div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="systemsReview[]" value="cougdry" class="form-check-input"> Cough dry
	                        </label>
		               </div>
		               <div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="systemsReview[]" value="cougpro" class="form-check-input"> Cough productive
	                        </label>
		               </div>
		               <div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="systemsReview[]" value="wheez" class="form-check-input"> Wheezing
	                        </label>
		               </div>
		               <div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="systemsReview[]" value="hemopt" class="form-check-input"> Hemoptysis
	                        </label>
		               </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>	
<div class="col-lg-12 grid-margin ">

	<div class="card">

		<div class="card-body">
			
			<div class="form-group">
				<label class="col-form-label col-sm-3 text-info">VIII. Physical Examination</label>
				<div class="row">
					<label class="col-form-label col-sm-3 text-primary"  >Vital Signs</label>	
				</div>
				<div class="row">
					<div class="col-md-2">
						BP<input type="text" name="bp" class="form-control">
					</div>
					<div class="col-md-2">
						RR <input type="text" name="rr" class="form-control" >
					</div>
					<div class="col-md-2">
					 	T<input type="text" name="te" class="form-control" >
					</div>
					<div class="col-md-2">
						HR<input type="text" name="hr" class="form-control">
					</div>
					<div class="col-md-2">
						BMI<input type="text" name="bmi" class="form-control">
					</div>
				</div>
				<div class="row">
					<label class="col-form-label col-sm-3">General Survey</label>
					<div class="form-check form-check-flat">
                        <label class="form-check-label">
                          <input type="checkbox" name="peGenSurvey[]" value="awakealert" class="form-check-input"> Awaker & Alert &nbsp
                        </label>
		            </div>
		            <div class="form-check form-check-flat">
                        <label class="form-check-label">
                          <input type="checkbox" name="peGenSurvey[]" value="cooperative" class="form-check-input"> Cooperative &nbsp
                        </label>
		            </div>
		            <div class="form-check form-check-flat">
                        <label class="form-check-label">
                          <input type="checkbox" name="peGenSurvey[]" value="notinrespiratory" class="form-check-input"> Not in Respiratory Distress &nbsp
                        </label>
		            </div>
		            <div class="form-check form-check-flat">
                        <label class="form-check-label">
                          <input type="checkbox" name="peGenSurvey[]" value="alteredsensor" class="form-check-input"> Altered Sensornium
                        </label>
		            </div>
				</div>
				<div class="row">
					<label class="col-form-label col-sm-2">Other Pertinent Findings</label>
					<div class="col-md-6">
						<textarea name="pertinentFind1" class="form-control" cols="30" rows="10"></textarea>
					</div>
				</div>
				<div class="row blockquote" style="margin-top:20px;">
					<div class="col-sm-4">
						<label class="col-form-label col-sm-4 text-primary">Skin/Extremities</label>
						<div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="peFindings[]" value="essennormalextremit" class="form-check-input"> Essentially normal
	                        </label>
		               </div>
		               	<div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="peFindings[]" value="musclejoint" class="form-check-input"> Muscle/Joint pains
	                        </label>
		               </div>
		               	<div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="peFindings[]" value="rashpete" class="form-check-input"> Rashes/Petechie
	                        </label>
		               </div>
		               <div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="peFindings[]" value="clubbing" class="form-check-input"> Clubbing
	                        </label>
		               </div>
		               	<div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="peFindings[]" value="swelling" class="form-check-input"> Swelling
	                        </label>
		               </div>
		               <div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="peFindings[]" value="warm" class="form-check-input"> Warm
	                        </label>
		               </div>
		               <div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="peFindings[]" value="coldclam" class="form-check-input"> Cold clammy
	                        </label>
		               </div>
					</div>
					<div class="col-sm-3">
		               <div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="peFindings[]" value="weakpulse" class="form-check-input"> Weak pulse
	                        </label>
		               </div>
		               <div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="peFindings[]" value="moist" class="form-check-input"> Moist
	                        </label>
		               </div>
						<div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="peFindings[]" value="cyanosis" class="form-check-input"> Cyanosis
	                        </label>
		               </div>
		               <div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="peFindings[]" value="poorski" class="form-check-input"> Poor skin turgor
	                        </label>
		               </div>
						<div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="peFindings[]" value="goodtur" class="form-check-input"> Good turgor
	                        </label>
		               </div>
		               <div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="peFindings[]" value="edema" class="form-check-input"> Edema
	                        </label>
		               </div>
		               <div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="peFindings[]" value="pailnail" class="form-check-input"> Pail nailbeds
	                        </label>
		               </div>
					</div>
					<div class="col-sm-5">
						<label class="col-form-label col-sm-4 text-primary">Other Pertinent Findings</label>
						<textarea class="form-control" name="pertinentFind2" id="" cols="30" rows="10"></textarea>
					</div>
				</div>
				<div class="row blockquote" style="margin-top:20px;">
					<div class="col-sm-4">
						<label class="col-form-label col-sm-4 text-primary">Heent</label>
						<div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="peFindings[]" value="essennormalheent" class="form-check-input"> Essentially normal
	                        </label>
		               	</div>
		               	<div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="peFindings[]" value="drymucus" class="form-check-input"> Dry mucus membrane
	                        </label>
		               	</div>
						<div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="peFindings[]" value="sunkenfont" class="form-check-input"> Sunken fontanelle
	                        </label>
		               	</div>
		               	<div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="peFindings[]" value="moistoral" class="form-check-input"> Moist oral mucosa
	                        </label>
		               	</div>
		               	<div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="peFindings[]" value="abnorpupil" class="form-check-input"> Abnormal pupilary reaction
	                        </label>
		               	</div>
		               	<div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="peFindings[]" value="icteric" class="form-check-input"> Icteric sclerae 
	                        </label>
		               	</div>
		               	<div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="peFindings[]" value="antiteric" class="form-check-input"> Anicteric sclerae
	                        </label>
		               	</div>
					</div>
					<div class="col-sm-3">
						<div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="peFindings[]" value="nonasal" class="form-check-input"> No nasal discharges
	                        </label>
		               	</div>
		               	<div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="peFindings[]" value="cerviclymp" class="form-check-input"> Cervical lympadenopathy
	                        </label>
		               	</div>
		               	<div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="peFindings[]" value="paleconjun" class="form-check-input"> Pale conjunctivae
	                        </label>
		               	</div>
		               	<div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="peFindings[]" value="pinkconjun" class="form-check-input"> Pink palpebral conjunctivae
	                        </label>
		               	</div>
						<div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="peFindings[]" value="notonsil" class="form-check-input"> No Tonsillopharyngeal Congestio
	                        </label>
		               </div>
		               <div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="peFindings[]" value="sunkeye" class="form-check-input"> Sunken eyeballs
	                        </label>
		               </div>
					</div>
					<div class="col-sm-5">
						<label class="col-form-label col-sm-4 text-primary">Other Pertinent Findings</label>
						<textarea class="form-control" name="pertinentFind3" id="" cols="30" rows="10"></textarea>
					</div>
				</div>
				<div class="row blockquote" style="margin-top:20px;" >
					<div class="col-sm-7">
						<label class="col-form-label col-sm-4 text-primary">Neck</label>
						<div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="peFindings[]" value="supple" class="form-check-input"> Supple
	                        </label>
		               	</div>
		               	<div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="peFindings[]" value="nolad" class="form-check-input"> No LAD
	                        </label>
		               	</div>
		               	<div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="peFindings[]" value="noneckvein" class="form-check-input"> No neck vein
	                        </label>
		               	</div>
		               	<div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="peFindings[]" value="pinkpal" class="form-check-input"> Pink palpebral conjunctivae
	                        </label>
		               	</div>
					</div>
					<div class="col-sm-5">
						<label class="col-form-label col-sm-4 text-primary">Other Pertinent Findings</label>
						<textarea class="form-control" name="pertinentFind4" id="" cols="30" rows="10"></textarea>
					</div>
				</div>
				<div class="row blockquote">
					<div class="col-sm-7">
						<label class="col-form-label col-sm-4 text-primary">Heart</label>
						<div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="peFindings[]" value="adyprecor" class="form-check-input"> Adynamic Precordium
	                        </label>
		               	</div>
		               	<div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="peFindings[]" value="dis12" class="form-check-input"> Distinct S1 and S2
	                        </label>
		               	</div>
		               	<div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="peFindings[]" value="normrate" class="form-check-input"> Normal rate
	                        </label>
		               	</div>
		               	<div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="peFindings[]" value="regrhyt" class="form-check-input"> Regular rhythm
	                        </label>
		               	</div>
						<div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="peFindings[]" value="nomurmur" class="form-check-input"> No murmurs
	                        </label>
		               </div>
					</div>
					<div class="col-sm-5">
						<label class="col-form-label col-sm-4 text-primary">Other Pertinent Findings</label>
						<textarea class="form-control" name="pertinentFind5" id="" cols="30" rows="10"></textarea>
					</div>
				</div>
				<div class="row blockquote">
					<div class="col-sm-4">
						<label class="col-form-label col-sm-4 text-primary">Chest and Lungs</label>
						<div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="peFindings[]" value="essennormalchest" class="form-check-input"> Essentially normal
	                        </label>
		               	</div>
		               	<div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="peFindings[]" value="lumpsover" class="form-check-input"> Lumps over breast(s)
	                        </label>
		               	</div>
		               	<div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="peFindings[]" value="ralescrack" class="form-check-input"> Rales/crackles/rhonchi
	                        </label>
		               	</div>
		               	<div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="peFindings[]" value="asymchest" class="form-check-input"> Asymmetrical chest expansion
	                        </label>
		               	</div>
		               	<div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="peFindings[]" value="equalchest" class="form-check-input"> Equal chest expansion
	                        </label>
		               	</div>
					</div>
					<div class="col-sm-3">
						<div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="peFindings[]" value="interrib" class="form-check-input"> Intercostal rib retraction
	                        </label>
		               	</div>
		               	<div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="peFindings[]" value="decbreath" class="form-check-input"> Decreased breath sounds
	                        </label>
		               	</div>
		               	<div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="peFindings[]" value="clearbreath" class="form-check-input"> Clear breath sounds
	                        </label>
		               	</div>
		               	<div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="peFindings[]" value="norhonchi" class="form-check-input"> No rhonchi
	                        </label>
		               	</div>
		               	<div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="peFindings[]" value="wheezes" class="form-check-input"> Wheezes
	                        </label>
		               	</div>
					</div>
					<div class="col-sm-5">
						<label class="col-form-label col-sm-4 text-primary">Other Pertinent Findings</label>
						<textarea class="form-control" name="pertinentFind6" id="" cols="30" rows="10"></textarea>
					</div>
				</div>
				<div class="row blockquote">
					<div class="col-sm-4">
						<label class="col-form-label col-sm-4 text-primary">Abdomen and Rectal</label>
						<div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="peFindings[]" value="essennormalabdo" class="form-check-input"> Essentially normal  
	                        </label>
		               	</div>
		               	<div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="peFindings[]" value="hyperbowel" class="form-check-input"> Hyperactive bowel sounds
	                        </label>
		               	</div>
		               	<div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="peFindings[]" value="utecontra" class="form-check-input"> Uterine contraction
	                        </label>
		               	</div>
		               	<div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="peFindings[]" value="noorgano" class="form-check-input"> No organomegaly
	                        </label>
		               	</div>
		               	<div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="peFindings[]" value="abnorrigid" class="form-check-input"> Abnorminal rigidity
	                        </label>
		               	</div>
		               	<div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="peFindings[]" value="palpamass" class="form-check-input"> Palpable mass(es)
	                        </label>
		               	</div>
		               	<div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="peFindings[]" value="flatflab" class="form-check-input"> Flat/Flabby
	                        </label>
		               	</div>
					</div>
					<div class="col-sm-3">
						<div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="peFindings[]" value="abnortender" class="form-check-input"> Abnorminal Tenderness
	                        </label>
		               	</div>
		               	<div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="peFindings[]" value="norectal" class="form-check-input"> No rectal mass
	                        </label>
		               	</div>
		               	<div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="peFindings[]" value="tympaniticdull" class="form-check-input"> Tympanitic/dull abdomen
	                        </label>
		               	</div>
		               	<div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="peFindings[]" value="normoact" class="form-check-input"> Normoactive
	                        </label>
		               	</div>
		               	<div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="peFindings[]" value="normalprost" class="form-check-input"> Normal prostate
	                        </label>
		               	</div>
		               	<div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="peFindings[]" value="nontend" class="form-check-input"> Non-tender
	                        </label>
		               	</div>
		               	<div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="peFindings[]" value="soft" class="form-check-input"> Soft
	                        </label>
		               	</div>
					</div>
					<div class="col-sm-5">
						<label class="col-form-label col-sm-4 text-primary">Other Pertinent Findings</label>
						<textarea class="form-control" name="pertinentFind7" id="" cols="30" rows="10"></textarea>
					</div>
				</div>
				<div class="row blockquote">
					<div class="col-sm-7">
						<label class="col-form-label col-sm-4 text-primary">Back</label>
						<div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="peFindings[]" value="nodeform" class="form-check-input"> No Deformities
	                        </label>
			            </div>
			            <div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="peFindings[]" value="nocostovert" class="form-check-input"> No costovertebral angle tenderness
	                        </label>
			            </div>
					</div>
		            <div class="col-sm-5">
						<label class="col-form-label col-sm-4 text-primary">Other Pertinent Findings</label>
						<textarea class="form-control" name="pertinentFind8" id="" cols="30" rows="10"></textarea>
					</div>
				</div>
				<div class="row blockquote">
					
					 <div class="col-sm-4">
					 	<label class="col-form-label col-sm-4 text-primary">CVS</label>
					 	<div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="peFindings[]" value="essennormalcvs" class="form-check-input"> Essentially normal
	                        </label>
			            </div>
						<div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="peFindings[]" value="bradycar" class="form-check-input"> Bradycardia
	                        </label>
			            </div>
			            <div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="peFindings[]" value="muffledsounds" class="form-check-input"> Muffled heart sounds
	                        </label>
			            </div>
			            <div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="peFindings[]" value="heaves" class="form-check-input"> Heaves
	                        </label>
			            </div>
			            <div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="peFindings[]" value="displayapex" class="form-check-input"> Display apex
	                        </label>
			            </div>
					 </div>
					 <div class="col-sm-3">
					 	<div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="peFindings[]" value="murmur" class="form-check-input"> Murmur
	                        </label>
			            </div>
			            <div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="peFindings[]" value="pericardial" class="form-check-input"> Pericardial buldge
	                        </label>
			            </div>
			            <div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="peFindings[]" value="tachyca" class="form-check-input"> Tachycardia
	                        </label>
			            </div>
			            <div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="peFindings[]" value="thrills" class="form-check-input"> Thrills
	                        </label>
			            </div>
			            <div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="peFindings[]" value="irregrhy" class="form-check-input"> Irregular rhythm
	                        </label>
			            </div>
					 </div>
					 <div class="col-sm-5">
						<label class="col-form-label col-sm-4 text-primary">Other Pertinent Findings</label>
						<textarea class="form-control" name="pertinentFindCVS" id="" cols="30" rows="10"></textarea>
					</div>
				</div>
				<div class="row blockquote">
					<div class="col-sm-7">
						<label class="col-form-label col-sm-4 text-primary">GU(IE)</label>
						<div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="peFindings[]" value="essennormalgu" class="form-check-input"> Essentially normal
	                        </label>
			            </div>
			            <div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="peFindings[]" value="bloodstain" class="form-check-input"> Blood stained in examining finger
	                        </label>
			            </div>
			            <div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="peFindings[]" value="cervicdila" class="form-check-input"> Cervical dilatation
	                        </label>
			            </div>
			            <div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="peFindings[]" value="presendischarg" class="form-check-input"> Presence of abnormal discharge
	                        </label>
			            </div>
					</div>
		            <div class="col-sm-5">
						<label class="col-form-label col-sm-4 text-primary">Other Pertinent Findings</label>
						<textarea class="form-control" name="pertinentFindGU" id="" cols="30" rows="10"></textarea>
					</div>
				</div>
				<div class="row blockquote">
					<div class="col-sm-7">
						<label class="col-form-label col-sm-4 text-primary">Extremities</label>
						<div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="peFindings[]" value="strongequal" class="form-check-input"> Strong & equal peripheral pulses
	                        </label>
			            </div>
			            <div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="peFindings[]" value="crt" class="form-check-input"> CRT <2 sec
	                        </label>
			            </div>
			            <div class="form-check form-check-flat">
	                        <label class="form-check-label">
	                          <input type="checkbox" name="peFindings[]" value="noedema" class="form-check-input"> No edema
	                        </label>
			            </div>
					</div>
		            <div class="col-sm-5">
						<label class="col-form-label col-sm-4 text-primary">Other Pertinent Findings</label>
						<textarea class="form-control" name="pertinentFind9" id="" cols="30" rows="10"></textarea>
					</div>
				</div>
			</div>
		</div>

	</div>

</div>

<div class="col-md-12 grid-margin ">
	<div class="card">
		<div class="card-body">		
			<div class="form-group row">
				<label class="col-form-label col-sm-3 text-primary">Neurological Examination</label>
				<div class="col-sm-4">
					 <div class="form-radio">
                      <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="remarksneuro[]" id="membershipRadios1" value="Unremarkable" > Unremarkable
                      </label>
                	</div>
				</div>
				<div class="col-sm-4">
                    <div class="form-radio">
                      <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="remarksneuro[]" id="membershipRadios2" value="Remarkable"> Remarkable
                      </label>
                    </div>
              	</div>
				<div class="form-group col-sm-3">
					<div class="form-check form-check-flat">
                        <label class="form-check-label">
                          <input type="checkbox" name="peFindings[]" value="essenorm" class="form-check-input"> Essentially normal
                        </label>
                   	</div>
               	  	<div class="form-check form-check-flat">
                        <label class="form-check-label">
                          <input type="checkbox" name="peFindings[]" value="abnorgait" class="form-check-input"> Abnormal gait
                        </label>
                     </div>
                    <div class="form-check form-check-flat">
	                    <label class="form-check-label">
	                      <input type="checkbox" name="peFindings[]" value="abnorpost" class="form-check-input"> Abnormal position sense
	                    </label>
                  	</div>
                    <div class="form-check form-check-flat">
	                    <label class="form-check-label">
	                      <input type="checkbox" name="peFindings[]" value="abnnorsens" class="form-check-input"> Abnormal sensation
	                    </label>
                  	</div>
                  	
				</div>
				<div class="col-sm-4">
					<div class="form-check form-check-flat">
                        <label class="form-check-label">
                          <input type="checkbox" name="peFindings[]" value="presofabnor" class="form-check-input"> Presence of abnormal reflex(es)
                        </label>
                   	</div>
                   	<div class="form-check form-check-flat">
                        <label class="form-check-label">
                          <input type="checkbox" name="peFindings[]" value="pooralter" class="form-check-input"> Poor/altered memory
                        </label>
                   	</div>
                   	<div class="form-check form-check-flat">
                        <label class="form-check-label">
                          <input type="checkbox" name="peFindings[]" value="poormuscle" class="form-check-input"> Poor muscle tone/strength
                        </label>
                   	</div>
                   	<div class="form-check form-check-flat">
                        <label class="form-check-label">
                          <input type="checkbox" name="peFindings[]" value="poorcoor" class="form-check-input"> Poor coordination
                        </label>
                   	</div>
				</div>	
				<div class="col-sm-5">
					<textarea name="pertinentFind10" class="form-control" cols="30" rows="10" placeholder="Others.." ></textarea>
				</div>   
			</div>
			<div class="form-group">
				<label class="col-form-label col-sm-4 text-primary">Cerebral</label>
				<div class="col-sm-10 row">
					<div class="form-check form-check-flat">
                        <label class="form-check-label">
                          <input type="checkbox" name="peFindings[]" value="consci" class="form-check-input"> Conscious 
                          &nbsp
                        </label>
                   	</div>
                   	<div class="form-check form-check-flat">
                        <label class="form-check-label">
                          <input type="checkbox" name="peFindings[]" value="cohera" class="form-check-input"> Coherent  &nbsp
                        </label>
                   	</div>
                   	<div class="form-check form-check-flat">
                        <label class="form-check-label">
                          <input type="checkbox" name="peFindings[]" value="orient" class="form-check-input"> Oriented  &nbsp
                        </label>
                   	</div>
                   	<div class="form-check form-check-flat">
                        <label class="form-check-label">
                          <input type="checkbox" name="peFindings[]" value="intactmem" class="form-check-input"> Intact memory  
                        </label>
                   	</div>
				</div>	
			</div>
			<div class="form-group">
				<label class="col-form-label col-sm-4 text-primary">Cranial Nerves</label>
				<div class="col-sm-10 row">
					<div class="form-check form-check-flat">
                        <label class="form-check-label">
                          <input type="checkbox" name="peFindings[]" value="withnormal" class="form-check-input"> Within normal limits
                        </label>
                   	</div>
				</div>	
			</div>
			<div class="form-group">
				<label class="col-form-label col-sm-4 text-primary">Motor</label>
				<div class="col-sm-10 row">
					<div class="form-check form-check-flat">
                        <label class="form-check-label">
                          <input type="checkbox" name="peFindings[]" value="goodmuscle" class="form-check-input"> Good muscle tone and strength
                        </label>
                   	</div>
				</div>	
			</div>
			<div class="form-group">
				<label class="col-form-label col-sm-4 text-primary">Sensory</label>
				<div class="col-sm-10 row">
					<div class="form-check form-check-flat">
                        <label class="form-check-label">
                          <input type="checkbox" name="peFindings[]" value="intactpain" class="form-check-input"> Intact to pain and light touch
                        </label>
                   	</div>
				</div>	
			</div>
			<div class="form-group">
				<label class="col-form-label col-sm-4 text-primary">Reflexes</label>
				<div class="col-sm-10 row">
					<div class="form-check form-check-flat">
                        <label class="form-check-label">
                          <input type="checkbox" name="peFindings[]" value="nomoreflex" class="form-check-input"> Normoreflexia 
                          &nbsp
                        </label>
                   	</div>
                   	<div class="form-check form-check-flat">
                        <label class="form-check-label">
                          <input type="checkbox" name="peFindings[]" value="nobabinsk" class="form-check-input"> No babinski's reflex
                        </label>
                   	</div>
                  </div>	
			</div>
		</div>
	</div>
</div>


<div class="col-md-12 grid-margin ">
	<div class="row">
		<div class="col-md-6 d-flex grid-margin align-items-stretch">
			<div class="card">
				<div class="card-body">		
					<div class="form-group row">
						<label class="col-form-label col-sm-6 text-primary" style="margin-right: 80px" >MOTOR</label>
						<a href="" class="btn btn-rounded btn-warning btn-fw" style="margin-right: 20px;" >Auto Fill</a>
						<a href="" class="btn btn-rounded btn-inverse-secondary btn-fw" >Clear</a>
						<div class="table-responsive" >
							<table class="table">
								<thead>
									<tr>
										<th>SIDE</th>
										<th>RIGHT</th>
										<th>LEFT</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										
										<td><label class="badge badge-info">Shoulder</label></td>
										<td></td>
										<td></td>
								
									</tr>
									<tr>
										<td>Flexion</td>
										<td><input type="text" name="motorshoulderflex" class="form-control" style="margin-right: -40px;" ></td>
										<td><input type="text" name="motorshoulderflex1" class="form-control"  style="margin-right: -40px;" ></td>
									</tr>
									<tr>
										<td>Extension</td>
										<td><input type="text" name="motorshoulderexte" class="form-control" style="margin-right: -40px;" ></td>
										<td><input type="text" name="motorshoulderexte1" class="form-control"  style="margin-right: -40px;" ></td>
									</tr>
									<tr>
										<td>Abduction</td>
										<td><input type="text" name="motorshoulderabdu" class="form-control" style="margin-right: -40px;" ></td>
										<td><input type="text" name="motorshoulderabdu1" class="form-control"  style="margin-right: -40px;" ></td>
									</tr>
									<tr>
										<td><label class="badge badge-success">Elbow</label></td>
										<td></td>
										<td></td>
									</tr>
										<tr>
										<td>Flexion</td>
										<td><input type="text" name="motorelbowflex" class="form-control" style="margin-right: -40px;" ></td>
										<td><input type="text" name="motorelbowflex1" class="form-control"  style="margin-right: -40px;" ></td>
									</tr>
									<tr>
										<td>Extension</td>
										<td><input type="text" name="motorelbowexte" class="form-control" style="margin-right: -40px;" ></td>
										<td><input type="text" name="motorelbowexte1" class="form-control"  style="margin-right: -40px;" ></td>
									</tr>
									<tr>
										<td>Handgrip</td>
										<td><input type="text" name="motorhandgrip" class="form-control" style="margin-right: -40px;" ></td>
										<td><input type="text" name="motorhandgrip1" class="form-control"  style="margin-right: -40px;" ></td>
									</tr>
									<tr>
										<td><label class="badge badge-warning">Hip</label></td>
										<td></td>
										<td></td>
									</tr>
										<tr>
										<td>Flexion</td>
										<td><input type="text" name="motorhipflex" class="form-control" style="margin-right: -40px;" ></td>
										<td><input type="text" name="motorhipflex1" class="form-control"  style="margin-right: -40px;" ></td>
									</tr>
									<tr>
										<td>Extension</td>
										<td><input type="text" name="motorhipexte" class="form-control" style="margin-right: -40px;" ></td>
										<td><input type="text" name="motorhipexte1" class="form-control"  style="margin-right: -40px;" ></td>
									</tr>
									<tr>
										<td><label class="badge badge-primary">Knee</label></td>
										<td></td>
										<td></td>
									</tr>
										<tr>
										<td>Flexion</td>
										<td><input type="text" name="motorkneeflex" class="form-control" style="margin-right: -40px;" ></td>
										<td><input type="text" name="motorkneeflex1" class="form-control"  style="margin-right: -40px;" ></td>
									</tr>
									<tr>
										<td>Extension</td>
										<td><input type="text" name="motorkneeexte" class="form-control" style="margin-right: -40px;" ></td>
										<td><input type="text" name="motorkneeexte1" class="form-control"  style="margin-right: -40px;" ></td>
									</tr>
								</tbody>
							</table>
						</div>   
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6 grid-margin stretch-card">
			<div class="card">
				<div class="card-body">		
					<div class="form-group row">
						<label class="col-form-label col-sm-6 text-primary" style="margin-right: 80px" >SENSORY</label>
						<a href="" class="btn btn-rounded btn-warning btn-fw" style="margin-right: 20px;" >Auto Fill</a>
						<a href="" class="btn btn-rounded btn-inverse-secondary btn-fw" >Clear</a>
						<div class="table-responsive" >
							<table class="table">
								<thead>
									<tr>
										<th>SIDE</th>
										<th>RIGHT</th>
										<th>LEFT</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										
										<td><label class="badge badge-info">Shoulder</label></td>
										<td></td>
										<td></td>
								
									</tr>
									<tr>
										<td>Arm</td>
										<td><input type="text" name="sensoryshoulderarm" class="form-control" style="margin-right: -40px;" ></td>
										<td><input type="text" name="sensoryshoulderarm1" class="form-control"  style="margin-right: -40px;" ></td>
									</tr>
									<tr>
										<td>Forearm</td>
										<td><input type="text" name="sensoryshoulderfore" class="form-control" style="margin-right: -40px;" ></td>
										<td><input type="text" name="sensoryshoulderfore1" class="form-control"  style="margin-right: -40px;" ></td>
									</tr>
									<tr>
										<td>Hand</td>
										<td><input type="text" name="sensoryshoulderhand" class="form-control" style="margin-right: -40px;" ></td>
										<td><input type="text" name="sensoryshoulderhand1" class="form-control"  style="margin-right: -40px;" ></td>
									</tr>
									<tr>
										<td><label class="badge badge-success">Hips</label></td>
										<td></td>
										<td></td>
									</tr>
										<tr>
										<td>Thigh</td>
										<td><input type="text" name="sensoryhipthigh" class="form-control" style="margin-right: -40px;" ></td>
										<td><input type="text" name="sensoryhipthigh1" class="form-control"  style="margin-right: -40px;" ></td>
									</tr>
									<tr>
										<td>Leg</td>
										<td><input type="text" name="sensoryhipleg" class="form-control" style="margin-right: -40px;" ></td>
										<td><input type="text" name="sensoryhipleg1" class="form-control"  style="margin-right: -40px;" ></td>
									</tr>
									<tr>
										<td>Foot</td>
										<td><input type="text" name="sensoryhipfoot" class="form-control" style="margin-right: -40px;" ></td>
										<td><input type="text" name="sensoryhipfoot1" class="form-control"  style="margin-right: -40px;" ></td>
									</tr>
								</tbody>
							</table>
						</div>   
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="col-md-12 grid-margin " style="margin-top: -20px;">
	<div class="row">
		<div class="col-md-6 grid-margin stretch-card">
			<div class="card">
				<div class="card-body">		
					<div class="form-group row">
						<label class="col-form-label col-sm-6 text-primary" >IX. Admitting Impression</label>
						<textarea name="admittingImpression" class="form-control"  cols="30" rows="10"></textarea>
						   
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6 grid-margin stretch-card">
			<div class="card">
				<div class="card-body">		
					<div class="form-group row">
						<label class="col-form-label col-sm-6 text-primary"  >X. Plans</label>
						<textarea name="plans" class="form-control" cols="30" rows="10"></textarea>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="col-md-12 grid-margin">

	<button type="submit" class="btn btn-outline-primary btn-fw" ><i class="mdi mdi-file-document" ></i>Submit</button>
	<button type="" class="btn btn-outline-success btn-fw" ><i class="mdi mdi-printer" ></i>Print</button>
</div>


</form>	
@endsection

