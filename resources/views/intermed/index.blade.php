@extends('templates.main')

@section('title', '| Select')

@section('navbar')

@include('templates.nav')

@endsection

@section('content')

<div class="row">
    
    <div class="col-md-4 d-flex align-items-stretch stretch-card grid-margin">
        <div class="box box-primary">
            <div class="box-body">
                <div class="form-group col-md-12" >
                    <p class="box-header">Hospital no: <span class="text-success" >{{$patient->Hospnum}}</span> </p>
                    <label>Name: <span class="card-title" >{{$patient->lname}}, {{$patient->fname}} {{$patient->mname}}</span></label> <br>
                    <label>Gender: @if($patient->sex == 'Male')<span class="text-primary" >{{$patient->sex}}</span>@else <span style="color:#ff66d9;" >{{$patient->sex}}</span> @endif </label> <br>
                    <label>Birthdate: {{$patient->birthdate}}</label><br>
                    <label> Civil Status: {{$patient->cs}}</label>
                </div>
                <div class="form-group col-md-12" >
                
                </div>
            </div>
        </div>
    </div>

    <div class="col-8  stretch-card grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="form-group col-md-6" >
                    <p class="card-title">Hospital no:{{$patient->Hospnum}}</p>
                    <label>Name: {{$patient->lname}}, {{$patient->fname}} {{$patient->mname}}</label> <br>
                    <label>Gender: {{$patient->sex}}</label> <br>
                    <p>Birthdate: {{$patient->birthdate}}  </p>
                </div>
                <div class="form-group col-md-6" >

                </div>
            </div>
        </div>
    </div>

</div>
<div class="row" >
    <div class="col-lg-12 stretch-card grid-margin" >
        <div class="card">
            <div class="card-body">
                <div class="form-group col-md-12" >
                    <label class="card-title">Admitting History and Physical Examination</label>
                    <span class="float-right"  ><a class="btn btn-primary" href="{{url('IM/admittinghistory/'.$patient->Healthnum)}}">New +</a></span> 
                    <table class="table" >
                        <thead>
                            <tr>
                                <th>Chief Complaint</th>
                                <th>Attending Physician</th>
                                <th>Date Created</th>
                            </tr>
                        </thead>
                        <tbody>
                     
                            <tr>
                                <td>sample 1</td>
                                <td>sample 2</td>
                                <td>sample 3</td>
                            </tr>
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row" >
    <div class="col-lg-12 stretch-card grid-margin" >
        <div class="card">
            <div class="card-body">
                <div class="form-group col-md-12" >
                    <label class="card-title">Progress notes </label>
                    <span class="float-right" ><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#prognoteim" >New +</button></span> 
                    <table class="table" >
                        <thead>
                            <tr>
                                <th>Subjective</th>
                                <th>Date Created</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($notes as $n)
                            <tr>
                                <td>{{$n->Subjective}}</td>
                                <td>{{$n->created_at}}</td>
                                <td>
                                    <a href="#" class="btn btn-success " id="editbtn">Edit</a>
                                    <a href="#" class="btn btn-danger" >Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

 

@include('intermed.progressnotes.index')


@endsection

@section('scripts') 
{{-- insert ajax --}}
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
                    $("form").trigger("reset");
                    $('#prognoteim').modal('hide');
                    alert("Data Saved");
                },
                error: function(error){
                    console.log(error)
                    //alert("Data Not Saved");
                },
             
            });
        });
    });

</script>
{{-- update ajax --}}
<script>
    $(document).ready(function(){
        $('#editbtn').on
    });

</script>



@endsection


