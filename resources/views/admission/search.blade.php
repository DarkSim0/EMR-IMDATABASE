@extends('templates.main')

@section('title', '| Admissions')

@section('navbar')

@include('templates.nav')

@endsection

@section('content')

<div class="col-lg-12 grid-margin stretch-card">
	
	<div class="card">
	
		<div class="card-body">
			
			<h4 class="card-title" >Search Patient</h4>

			<div class="row">

				<div class="col-md-3">
					
					<div class="form-group">
					
						<label class="card-description">Hospital No</label>
						<form method="get">
								
								<div class="input-group">
				                    <input type="text" class="form-control" name="search" value="{{isset($search) ? $search: ''}}" placeholder="Search Patient" autocomplete="off" >
				                    <span class="input-group-append" >	
										<button type="submit" class="btn btn-info" > Search	</button>
				                    </span>
								</div>

						</form>

					</div>

				</div>	

							<table class="table table-stripped">
					
					<thead>
						
						<tr>
							
							<th></th>

							<th>User</th>

							<th>Name</th>

							<th>Birth Date</th>

							<th>Age</th>

							<th>Gender</th>

							<th>Civil Status</th>

							<th>Hospital No.</th>


						</tr>

					</thead>

					<tbody>

						@foreach( $result as $r )
							<tr>
									<td>
										<a href="{{url('admissions/create/'.$r->Hospnum)}}" class="btn btn-secondary btn-sm" >View</a>
									</td>
									<td class="py-1" >
								@if($r->Sex=='M'|| $r->Sex=='Male')
									<img src="{{asset('assets/images/faces-clipart/pic-1.png')}}" alt="image">
								@else
									<img src="{{asset('assets/images/faces-clipart/pic-2.png')}}" alt="image">
								@endif	
									</td>						
								@if($r->LastName == '' && $r->FirstName == '' )
									<td><b>NO NAME</b></td>
								@else
									<td>{{$r->LastName}}, {{$r->FirstName}} {{$r->MiddleName}}</td>
								@endif
									<td><?php  ?>{{ date( 'n / j / Y' , strtotime($r->BirthDate))}}</td>
									<td>{{$r->age}}</td>
									<td>{{$r->Sex}}</td>
								@if($r->CivilStatus == '')
									<td><b>NO STATUS</b></td>
								@else
									@if($r->CivilStatus == '0') 
									<td>Child</td>
									@elseif($r->CivilStatus == '1')
									<td>Single</td>
									@elseif($r->CivilStatus == '2')
									<td>Married</td>
									@elseif($r->CivilStatus == '3')
									<td>Widow/er</td>
									@elseif($r->CivilStatus == '4')
									<td>Separated</td>
									@else
									<td>Divorced</td>
									@endif
								@endif
							
								@if($r->Hospnum > 0)
									<td>{{$r->Hospnum}}</td>
								@else
									<td><b>NO HOSPNUM</b></td>
								@endif
							</tr>
						@endforeach

					</tbody>
				
				</table>

					</div>

				</div>

			</div>

		</div>

	</div>

</div>				

@endsection