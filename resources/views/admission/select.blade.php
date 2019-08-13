@extends('templates.main')

@section('title', '| Select')

@section('navbar')

@include('templates.nav')

@endsection

@section('content')

<div class="col-lg-12 grid-margin stretch-card">
	<div class="card">
		<div class="card-body">
			<h3 class=" text-primary">Patient Demographics</h3>
		</div>
		@include('templates.demograph')
	</div>
</div>
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h3 class="text-info">Select Service</h3>   
            <br>
            @foreach($service  as $s)
                <a href="{{url('/'.$s->Clinic.'/'.$patient->Healthnum)}}" class="btn btn-outline-secondary" >{{$s->Clinic}}</a>           
            @endforeach 
        </div>
    </div>
</div>

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
       
            <div class="card-body">
                <table class="table" >
                    <thead>
                        <tr>
                            <th>Forms</th>
                            <th>Service</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($sample as $samp)
                        <tr>
                                <td>{{$samp->Transtype}}</td>   
                                <td>{{$samp->department}}</td>
                                <td><button type="submit" class="btn btn-info"   name="selectTrans" value="{{$samp->id}}" >SELECT</button></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
       
    </div>
</div>  


<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <td>Transaction Type</td>
                        <td>Encoded by</td>
                    </tr>
                </thead>
                <tbody>
                   @foreach($transaction as  $transy ) 
                    <tr>
                        <td>{{$transy->TransTypeName}}</td>
                        <td>{{$transy->EncodedBy}}</td>
                    </tr>
                   @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection

