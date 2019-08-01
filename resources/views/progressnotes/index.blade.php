<div class="modal fade" id="prognoteim" role="dialog" > 
    <div class="modal-dialog" >
        <div class="modal-content">
         <div class="modal-header">
             <h4 class="modal-title" >Progress Notes</h4>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close" >
                 <span aria-hidden="true">&times;</span>
             </button>
         </div>      
         <form id="storenote">
            <div class="modal-body">
                {{ csrf_field() }}
               
                <div class="form-group">
                    <input type="hidden" name="Healthnum" value="{{$patient->Healthnum}}" >
                </div>
                <div class="form-group">
                    
                    <label>Subjective</label>
                    <textarea name="Subjective" rows="10" class="form-control" ></textarea>
                </div>
                <div class="form-group">
                    <label>Objectives</label>
                    <textarea name="Objectives" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label>Assessment</label>
                    <textarea name="Assessment" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label>Plans</label>
                    <textarea name="Plans" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label>Orders</label>
                    <textarea name="Orders" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label>Patients Outcome</label>
                    <textarea name="PxOutcome" rows="10" class="form-control"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger" data-dismiss="modal" >Close</button>
                <input class="btn btn-primary" id="action"  type="submit" value="add" >
            </div>
            <input type="hidden" name="Healthno" value="{{$patient->Healthnum}}" >
                <input type="hidden" name="TransTypeName" value="PROGRESS NOTES" >
                <input type="hidden" name="EncodedBy" value="{{ Auth::user()->uname }}" >
                <input type="hidden" name="TransType" value="2" >
                <input type="hidden" name="Status" value="1" >
        </form>   
        </div>
    </div>
</div> 


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

    //  $(document).ready(function() {

    //     $('#storenote').on('submit',function(e){
    //         e.preventDefault();
            
    //         $.ajax({
    //             method:"POST",
    //             url:"/progStore",
    //             data: $('#storenote').serialize(),
    //             success: function (response) {
    //                 console.log(response)
    //                 $('#prognoteim').modal('hide')
    //                 alert("Data Saved");
    //             },
    //             error: function(error){
    //                 console.log(error)
    //                 alert("Data Not Saved");
    //             }
    //         });
    //     });
    // });
</script>

@endsection