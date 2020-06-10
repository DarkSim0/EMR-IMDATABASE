
<div class="modal fade bd-example-modal-lg" id="prognoteimEdit" role="dialog" aria-hidden="true"> 
    <div class="modal-dialog modal-lg" >
        <div class="modal-content">
         <div class="modal-header">
             <h4 class="modal-title" >Progress Notes</h4>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close" >
                 <span aria-hidden="true">&times;</span>
             </button>
         </div>      
         <form id="editnote">
            <div class="modal-body">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                {{-- retreive data by id --}}
                <div class="form-group">
                    <input type="hidden" name="Healthnum" value="{{$patient->Healthnum}}" >
                </div>
                <div class="row" >
                    <div class="col-md-12 ">
                        <label>Subjective</label>
                        <input type="text" name="Subjective" id="Subjective"  rows="10" class="form-control" >
                    </div>
                    <div class="col-md-4 ">
                        <label>Objectives</label>
                        <textarea name="Objectives" rows="10" id="Objectives" class="form-control"></textarea>
                    </div>
                    <div class="col-md-4">
                    <label>Assessment</label>
                    <textarea name="Assessment" rows="10" id="Assessment" class="form-control"></textarea>
                    </div>
                    <div class="col-md-4">
                    <label>Plans</label>
                    <textarea name="Plans" rows="10" id="Plans" class="form-control"></textarea>
                    </div>
                </div>
                <div class="row" >
                <div class="col-md-6">
                    <label>Orders</label>
                    <textarea name="Orders" id="Orders" rows="10" class="form-control"></textarea>
                </div> 
                <div class="col-md-6">
                    <label>Patients Outcome</label>
                    <textarea name="PxOutcome" id="PxOutcome" rows="10" class="form-control"></textarea>
                </div>
                </div>
                
            </div>

            <input type="hidden" name="Healthno" value="{{$patient->Healthnum}}" >
            <input type="hidden" name="EncodedBy" value="{{Auth::user()->uname}}" >
            <input type="hidden" name="TransType" value="2" >
            <input type="hidden" name="Status" value="1" >

            <div class="modal-footer">
                <button class="btn btn-danger" data-dismiss="modal" >CLOSE</button>
                <input class="btn btn-success"  type="submit" value="UPDATE" >
            </div>
          
        </form>   
        </div>
    </div>
</div> 


