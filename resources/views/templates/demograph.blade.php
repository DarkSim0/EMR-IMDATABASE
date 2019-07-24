	<div class="card-body grid-margin stretch-card">
			
			<div class="card">
			
				<blockquote class="blockquote blockquote-primary">
					
					<div class="row">

						<div class="col-md-3">

							<h4 class="card-description text-info" >Patient Name (Last, First, Middle)</h4>
							<u><h4>{{ $patient->lname.', '.$patient->fname.' '.$patient->mname }}</h4></u>	

						</div>

						<div class="col-md-3">
							
							<h4 class="card-description text-info" >Gender
							</h4>

							<u><h4>{{ $patient->sex }}</h4></u>

						</div>

						<div class="col-md-3">
							
							<h4 class="card-description text-info">
								Age
							</h4>

							<u><h4>{{$patient->age}}</h4></u>

						</div>

						<div class="col-md-3">
							
							<h4 class="card-description text-info">
								
								Civil Status

							</h4>

							<u><h4>{{ $patient->cs }}</h4></u>

						</div>

					</div>
				
					<div class="row">
				
						<div class="col-md-3">
							
							<h4 class="card-description text-info" >Religion</h4>

							<u><h4>{{$patient->religion}}</h4></u>

						</div>

						<div class="col-md-3">
							
							<h4 class="card-description text-info">Hospital No.
							</h4>
							
							<u><h4>{{$patient->Hospnum}}</h4></u>

						</div>

						<div class="col-md-3">
							
							<h4 class="card-description text-info" >Contact No.</h4>
							
							<u><h4>{{$patient->contactnum}}</h4></u>

						</div>

					</div>

					<div class="row">
						
						<div class="col-md-8">
							
							<h4 class="card-description text-info">Address</h4>

							<u><h4>{{$patient->address}}</h4></u>

						</div>

					</div>
								
				</blockquote>
		
			

			</div>
			

	</div>