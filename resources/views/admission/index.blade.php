@extends('templates.main')

@section('title', '| Admissions')

@section('navbar')

@include('templates.nav')

@endsection

@section('content')


@if(Session::has('success'))	
   <div class="row purchace-popup">
		<div class="col-md-12 grid-margin">
		  <span class="d-block d-md-flex align-items-center">
		 	<strong class=" text-success" >Success:</strong>

		 	&nbsp&nbsp <small class="designation text-info" >{{ Session::get('success') }}</small> 
		 	<h6 class="ml-auto mt-4 mt-md-0" ></h6>

		    <i class="mdi mdi-close popup-dismiss d-none d-md-block"></i>
		  </span>
		</div>
    </div>
@endif



<div class="col-lg-12 grid-margin stretch-card">

	<div class="card">

		<div class="card-body">
			
			<h4 class="card-title text-info">Admissions</h4>

			<form method="get">
				
				<div class="input-group">
                    <input type="text" class="form-control" name="search" value="{{isset($search) ? $search: ''}}" placeholder="Search Patient" autocomplete="off" >
                    <span class="input-group-append" >	
						<button type="submit" class="btn btn-info" > Search	</button>
                    </span>
				</div>

			</form>
			    
			
			<div class="table-responsive">

					<div class="form-group" style="margin-top: 20px; " >
						@if($errors->any())
							<h4 class="card-title text-danger" >{{$errors->first()}}</h4>
						@endif
					</div>		
				
				<table class="table table-stripped">
					
					<thead>
						
						<tr>
							
							<th></th>

							<th>User</th>

							<th>Name</th>

							<th>Date Admitted</th>

							<th>Gender</th>

							<th>Civil Status</th>

							<th>Hospital No.</th>

						</tr>

					</thead>

					<tbody>

						@foreach( $result as $r )
							<tr>
								<td>
							
									<a href="{{ url('admissions/select/'.$r->Healthnum) }}" class="btn btn-outline-warning btn-sm" >Select</a>
								
								</td>
								<td class="py-1" >
							@if($r->gender=='M'||$r->gender=='Male')
								<img src="{{asset('assets/images/faces-clipart/pic-1.png')}}" alt="image">
							@else
								<img src="{{asset('assets/images/faces-clipart/pic-2.png')}}" alt="image">
							@endif	
								</td>						
							@if($r->lname == '' && $r->fname == '' )
								<td><b>NO NAME</b></td>
							@else
								<td>{{$r->lname}}, {{$r->fname}} {{$r->mname}}</td>
							@endif
								<td><?php  ?>{{ date( 'n / j / Y' , strtotime($r->created_at))}}</td>
								<td>{{$r->sex}}</td>
							@if($r->cs == '')
								<td><b>NO STATUS</b></td>
							@else
								<td>{{$r->cs}}</td>
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

@endsection