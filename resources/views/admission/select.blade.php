@extends('templates.main')

@section('title', '| Select')

@section('navbar')

@include('templates.nav')

@endsection

@section('content')

<div class="col-lg-12 grid-margin stretch-card">
	<div class="card">
		<div class="card-body">
			<h3 class=" text-primary">Select clinic</h3>
		</div>
		@include('templates.demograph')
	</div>
</div>
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <form method="get" class="form-control">
                <select name="transact" >
                    @foreach($service  as $s)
                        <option value="{{$s->Clinic}}">{{$s->Clinic}}</option>   
                    @endforeach 
                    
                </select>
                <button type="submit" value="Continue" class="btn btn-primary" >CONTINTUE</button>
            </form>
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
                            <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#{{$samp->TransLink}}" >ADD</button></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>  
        </div>
    </div>
</div>    



@include('progressnotes.index')


@endsection
