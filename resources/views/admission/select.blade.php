@extends('templates.main')

@section('title', '| Patient-Info')

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
        @foreach($service as $s)

        @if($s->Clinic == 'IM')
            <a href="#" class="btn btn-info">IM</a>
        @elseif($s->Clinic == 'PEDIA')
            <a href="#" class="btn btn-primary">PEDIA</a>
        @else
            <p class="danger" >No Clinic registered For this Account</p>
        @endif
        @endforeach
        </div>
    </div>
</div>

@endsection