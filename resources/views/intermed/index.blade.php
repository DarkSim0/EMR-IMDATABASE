@extends('templates.main')

@section('title', '| Select')

@section('navbar')

@include('templates.nav')

@endsection

@section('content')

<div class="row">
    
    <div class="col-lg-4 d-flex align-items-stretch stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="form-group col-md-6" >
                    <p class="card-title">Hospital no:{{$patient->Hospnum}}</p>
                    <label>Name: {{$patient->lname}}, {{$patient->fname}} {{$patient->mname}}</label> <br>
                    <label>Gender: {{$patient->sex}}</label> <br>
                    <p>Birthdate: {{$patient->birthdate}}</p>
                </div>
                <div class="form-group col-md-12" >
                
                </div>
            </div>
        </div>
    </div>

    <div class="col-8  stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="form-group col-md-6" >
                    <p class="card-title">Hospital no:{{$patient->Hospnum}}</p>
                    <label>Name: {{$patient->lname}}, {{$patient->fname}} {{$patient->mname}}</label> <br>
                    <label>Gender: {{$patient->sex}}</label> <br>
                    <p>Birthdate: {{$patient->birthdate}}</p>
                </div>
                <div class="form-group col-md-6" >

                </div>
            </div>
        </div>
    </div>
</div>




@endsection




@section('scripts')

<script>
    $(document).ready(function() {

        $('#storenote').on('submit',function(e){
            e.preventDefault();
            
            $.ajax({
                method:"POST",
                url:"{{route('store.note')}}",
                data: $('#storenote').serialize(),
                success: function (response) {
                    console.log(response)
                    $('#prognoteim').modal('hide')
                    alert("Data Saved");
                },
                error: function(error){
                    console.log(error)
                    alert("Data Not Saved");
                }
            });
        });
    });
</script>

@endsection


