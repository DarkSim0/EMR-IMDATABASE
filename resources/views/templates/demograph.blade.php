		
<div class="box">
	<div class="box-body">
		<div class="col-md-2">
		 Hospital Number	
			<h1><span class="text-success" >{{$patient->Hospnum}}</span></h1>
		</div>
		<div class="col-md-8">

			<h3 class="" >{{ $patient->lname.', '.$patient->fname.' '.$patient->mname }}</h3>
			<h4> <span >Gender:</span>	 @if($patient->sex == 'Male') <span class="text-primary" >{{ $patient->sex }}</span> @else <span style="color:#ff66d9;">{{ $patient->sex }}</span> @endif &nbsp; Age: {{$patient->age}} &nbsp; Civil Status: {{ $patient->cs }} &nbsp; Religion: {{$patient->religion}} </h4>
			<u><h4></h4></u>
		</div>
	</div>

	<hr>

	<div class="">

		<div class="box-body">
			<div class="col-md-8">
			<h4>Address: {{$patient->address}} </h4>
			<h4>Contact No: {{$patient->contactnum}}</h4>
			<h4></h4>
			</div>
			
		</div>
	</div>
</div>
