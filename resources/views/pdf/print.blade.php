@extends('templates.print_main')

@section('title', '| Admitting History')

@section('style')
<style>

table, th{
	font-size: 10px;
}
table{
	border: 1px solid black;
}
#column {
    float: left;
    width: 52%;
}

#row:after {
    content: "";
    display: table;
    clear: both;
}


body{
	font-size: 10px;	
}

#histope{
	position: relative;
}
input[type=checkbox], input[type=radio] {
    vertical-align: middle;
    position: relative;
    bottom: 1px;
}
input[type=radio] {
    bottom: 2px;
}
.page-break {
    page-break-after: always;
}
#historype{
	margin-right: 200px; 
}



</style>


@endsection

@section('content')

	
	<b>I. Chief Complaint/s:</b>  {{ $row->chiefComplaint }} <br><br>
	<div class="uk-grid">
		<div id="historype" class="uk-width-xxlarge uk-margin">
			<b>II. History of Present Illness: </b> <span id="histope" >{{$row->historyPresentIllness}}</span> 
		</div>
	</div>
	 <br><br>
	<div id="row">
		<div id="column">
		<b >III. Past medical history
			<input type="checkbox"{{in_array("Unremarkable",$remark)?"checked":""}}> <span class="uk-text-middle uk-text-bold">Unremarkble</span> 
			 <input type="checkbox"{{in_array("Remarkable",$remark)?"checked":""}}> <span class="uk-text-middle uk-text-bold">Remarkable</span>	
			</b>
			<br>	
			<input type="checkbox"{{in_array("Hytn",$check1)?"checked":""}}> <span class="uk-text-middle">Hypertension</span>
			<input type="checkbox"{{in_array("Dibs",$check1)?"checked":""}}> <span class="uk-text-middle">Diabetes</span>
			<input type="checkbox"{{in_array("asma",$check1)?"checked":""}}> <span class="uk-text-middle">Asthma</span>
			<input type="checkbox"{{in_array("other",$check1)?"checked":""}}> <span class="uk-text-middle">Other:</span> <br>
			{{$row->pastMedicalHistoryOther}}
		</div>
		<div id="column">
			<b >IV. Past surgical history
				<input type="checkbox"{{in_array("Unremarkable",$remark1)?"checked":""}}> <span class="uk-text-middle uk-text-bold">Unremarkble</span> 
			 <input type="checkbox"{{in_array("Remarkable",$remark1)?"checked":""}}> <span class="uk-text-middle uk-text-bold">Remarkable</span>
			</b>
			<br>
				
			<input type="checkbox"{{in_array("Appendectomy",$check2)?"checked":""}}> <span class="uk-text-middle">Appendectomy</span>
			<input type="checkbox"{{in_array("Cholecystec",$check2)?"checked":""}}> <span class="uk-text-middle">Cholecystectomy</span>
			<input type="checkbox"{{in_array("Others",$check2)?"checked":""}}> <span class="uk-text-middle">Other:</span> <br>
	
			{{$row->pastSurgicalHistoryOther}}
		</div>
	</div>

		<b >OB-Gyne History</b>
		<input type="checkbox"{{in_array("Unremarkable",$remark2)?"checked":""}}> <span class="uk-text-middle uk-text-bold">Unremarkble</span> 
		 <input type="checkbox"{{in_array("Remarkable",$remark2)?"checked":""}}> <span class="uk-text-middle uk-text-bold">Remarkable</span>
		 <br>
	 	<b>G: </b>{{$row->gynegen}} <b>P: </b>{{$row->gynepen}} {{$row->gynefour}} <b>LMP: </b>{{$row->gynelmp}}

	<br>
	<div id="row">
		<div id="column">
			<b >V. Personal and social history<input type="checkbox"{{in_array("Unremarkable",$remark3)?"checked":""}}> <span class="uk-text-middle uk-text-middle">Unremarkble</span>
			<input type="checkbox"{{in_array("Remarkable",$remark3)?"checked":""}}> <span class="uk-text-middle uk-text-middle">Remarkable</span></b><br>
			<input type="checkbox"{{in_array("smoker",$check3)?"checked":""}}> <span class="uk-text-middle">Smoker</span>
			<input type="checkbox"{{in_array("alcholic",$check3)?"checked":""}}> <span class="uk-text-middle">Alcholic drinker</span>
			<input type="checkbox"{{in_array("illegal",$check3)?"checked":""}}> <span class="uk-text-middle">Illegal drug use</span>
			<br>
			<input type="checkbox"{{in_array("other",$check3)?"checked":""}}> <span class="uk-text-middle">Other:</span>
			<br>
			{{$row->personalAndSocialHistoryOther}}
		</div>
		<div id="column">
			<b >VI. Family history<input type="checkbox"{{in_array("Unremarkable",$remark4)?"checked":""}}> <span class="uk-text-middle uk-text-bold">Unremarkble</span> 
			<input type="checkbox"{{in_array("Remarkable",$remark4)?"checked":""}}> <span class="uk-text-middle uk-text-bold">Remarkable</span></b>
			<br>
			
			<input type="checkbox"{{in_array("Hypertension",$check4)?"checked":""}}> <span class="uk-text-middle ">Hypertension</span>
			<input type="checkbox"{{in_array("DM",$check4)?"checked":""}}> <span class="uk-text-middle">DM</span>
			<input type="checkbox"{{in_array("Asthma",$check4)?"checked":""}}> <span class="uk-text-middle">Asthma</span>
			<br>
			<input type="checkbox"{{in_array("Other",$check4)?"checked":""}}> <span class="uk-text-middle">Other:</span>
			<br>
			{{$row->familyHistoryOther}}
		</div>
	</div>
	<br>
	<table style="width: 100%" >
		<thead>
			<tr>
				<th><b>VII. Systems review</b>
				<input type="checkbox"{{in_array("Unremarkable",$check5)?"checked":""}}> <span class="uk-text-middle uk-text-bold">Unremarkble</span> </th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>
				<div class="uk-form-label">Skin</div>

	       		<input type="checkbox"{{in_array("sknl",$check5)?"checked":""}}> <span class="uk-text-middle">Skin Lesions</span> 
	            <input type="checkbox"{{in_array("skrs",$check5)?"checked":""}}> <span class="uk-text-middle">Skin Rashes</span>  
	            <input type="checkbox"{{in_array("lace",$check5)?"checked":""}}> <span class="uk-text-middle">Lacertation</span>  
	            <input type="checkbox"{{in_array("brusi",$check5)?"checked":""}}> <span class="uk-text-middle">Bruising</span>  
	            <input type="checkbox"{{in_array("burns",$check5)?"checked":""}}> <span class="uk-text-middle">Burns</span> 

        		<div class="uk-form-label">Heent</div>

	        	<input type="checkbox"{{in_array("injr",$check5)?"checked":""}}> <span class="uk-text-middle">Injury</span> 
	        	<input type="checkbox"{{in_array("conts",$check5)?"checked":""}}> <span class="uk-text-middle">Contusion</span>  
	        	<input type="checkbox"{{in_array("acthg",$check5)?"checked":""}}> <span class="uk-text-middle">Acuity Change</span>  
	        	<input type="checkbox"{{in_array("pain",$check5)?"checked":""}}> <span class="uk-text-middle">Pain</span>  
	        	<input type="checkbox"{{in_array("redns",$check5)?"checked":""}}> <span class="uk-text-middle">Redness</span>  <br>
				<input type="checkbox"{{in_array("itchi",$check5)?"checked":""}}> <span class="uk-text-middle">Itchiness</span> 
				<input type="checkbox"{{in_array("diplo",$check5)?"checked":""}}> <span class="uk-text-middle">Diplopia</span> 
				<input type="checkbox"{{in_array("otalg",$check5)?"checked":""}}> <span class="uk-text-middle">Otalgia</span> 
				<input type="checkbox"{{in_array("nasdis",$check5)?"checked":""}}> <span class="uk-text-middle">Nasoaural Discharge</span> 
				<input type="checkbox"{{in_array("epistax",$check5)?"checked":""}}> <span class="uk-text-middle">Epistaxis</span> 
				<input type="checkbox"{{in_array("soretro",$check5)?"checked":""}}> <span class="uk-text-middle">Sore Throat</span> 

				<div class="uk-form-label">Pulmonary</div>
       
	        	<input type="checkbox"{{in_array("sob",$check5)?"checked":""}}> <span class="uk-text-middle">SOB</span> 
	        	<input type="checkbox"{{in_array("cough",$check5)?"checked":""}}> <span class="uk-text-middle">Cough</span> 
	        	<input type="checkbox"{{in_array("cougdry",$check5)?"checked":""}}> <span class="uk-text-middle">Cough dry</span> 
	        	<input type="checkbox"{{in_array("cougpro",$check5)?"checked":""}}> <span class="uk-text-middle">Cough productive</span> 
	        	<input type="checkbox"{{in_array("wheez",$check5)?"checked":""}}> <span class="uk-text-middle">Wheezing</span>  <br>
	        	<input type="checkbox"{{in_array("hemopt",$check5)?"checked":""}}> <span class="uk-text-middle">Hemoptysis</span> 

	        	<div class="uk-form-label">Cardiovascular</div>

	        	<input type="checkbox"{{in_array("chespan",$check5)?"checked":""}}> <span class="uk-text-middle">Chest Pain</span> 
	        	<input type="checkbox"{{in_array("palpit",$check5)?"checked":""}}> <span class="uk-text-middle">Palpitation</span> 
	        	<input type="checkbox"{{in_array("pnd",$check5)?"checked":""}}> <span class="uk-text-middle">PND</span> 
	        	<input type="checkbox"{{in_array("orthop",$check5)?"checked":""}}> <span class="uk-text-middle">Orthopnea</span> 
	        	<input type="checkbox"{{in_array("syncope",$check5)?"checked":""}}> <span class="uk-text-middle">Syncope</span> 
	     
	        	<div class="uk-form-label">Gastroenterology</div>
	      
	        	<input type="checkbox"{{in_array("nause",$check5)?"checked":""}}> <span class="uk-text-middle">Nausea</span> 
	        	<input type="checkbox"{{in_array("vomit",$check5)?"checked":""}}> <span class="uk-text-middle">Vomiting</span> 
	        	<input type="checkbox"{{in_array("diarea",$check5)?"checked":""}}> <span class="uk-text-middle">Diarrhea</span> 
	        	<input type="checkbox"{{in_array("pain",$check5)?"checked":""}}> <span class="uk-text-middle">Pain</span> 
	        	<input type="checkbox"{{in_array("melena",$check5)?"checked":""}}> <span class="uk-text-middle">Melena</span>  <br>
	        	<input type="checkbox"{{in_array("hematoc",$check5)?"checked":""}}> <span class="uk-text-middle">Hematochezia</span> 

        		</td>
				<td>
				
				<div class="uk-form-label">Musculskeletal</div>

	        	<div class="uk-form-controls">
	        	<input type="checkbox"{{in_array("bojpn",$check5)?"checked":""}}> <span class="uk-text-middle">Bone or Joint Pain </span> 
	        	<input type="checkbox"{{in_array("lwbp",$check5)?"checked":""}}> <span class="uk-text-middle">Low Back Pain </span> 
	        	<input type="checkbox"{{in_array("riptp",$check5)?"checked":""}}> <span class="uk-text-middle">Radiation of Paint to Foot</span> 

	        	<div class="uk-form-label">Neck</div>
     
	        	<input type="checkbox"{{in_array("tende",$check5)?"checked":""}}> <span class="uk-text-middle">Tenderness</span> 
	        	<input type="checkbox"{{in_array("swell",$check5)?"checked":""}}> <span class="uk-text-middle">Swelling</span> 
	        	<input type="checkbox"{{in_array("thyro",$check5)?"checked":""}}> <span class="uk-text-middle">Thyromegaly</span> 
	        	<input type="checkbox"{{in_array("neckpa",$check5)?"checked":""}}> <span class="uk-text-middle">Neck Pain</span> 
	     		<div class="uk-form-label">Endocrine</div>
	        	<input type="checkbox"{{in_array("polyur",$check5)?"checked":""}}> <span class="uk-text-middle">Polyuria</span> 
	        	<input type="checkbox"{{in_array("polydips",$check5)?"checked":""}}> <span class="uk-text-middle">Polydipsia</span> 

	        	<div class="uk-form-label">Genitourinary</div>
        
	        	<input type="checkbox"{{in_array("dysur",$check5)?"checked":""}}> <span class="uk-text-middle">Dysuria</span> 
	        	<input type="checkbox"{{in_array("urgen",$check5)?"checked":""}}> <span class="uk-text-middle">Urgency</span> 
	        	<input type="checkbox"{{in_array("freque",$check5)?"checked":""}}> <span class="uk-text-middle">Frequency</span> 
	        	<input type="checkbox"{{in_array("nuctur",$check5)?"checked":""}}> <span class="uk-text-middle">Nucturia</span> 
	        	<input type="checkbox"{{in_array("flanpa",$check5)?"checked":""}}> <span class="uk-text-middle">Flank Pain</span>  <br>
	        	<input type="checkbox"{{in_array("hematur",$check5)?"checked":""}}> <span class="uk-text-middle">Hematuria</span> 
	        	<div class="uk-form-label">Neurological</div>

	        	<input type="checkbox"{{in_array("focalwek",$check5)?"checked":""}}> <span class="uk-text-middle">Focal Weakness</span> 
	        	<input type="checkbox"{{in_array("headache",$check5)?"checked":""}}> <span class="uk-text-middle">Headache</span> 
	        	<input type="checkbox"{{in_array("seizur",$check5)?"checked":""}}> <span class="uk-text-middle">Seizures</span> 
	        	<input type="checkbox"{{in_array("dizzis",$check5)?"checked":""}}> <span class="uk-text-middle">Dizziness</span>  <br>
	        	<input type="checkbox"{{in_array("drowsin",$check5)?"checked":""}}> <span class="uk-text-middle">Drowsiness</span> 
	        	<input type="checkbox"{{in_array("loc",$check5)?"checked":""}}> <span class="uk-text-middle">LOC</span>  
	        	<input type="checkbox"{{in_array("numbns",$check5)?"checked":""}}> <span class="uk-text-middle">Numbness</span> 
	    
	        	<div class="uk-form-label">Psychiatric</div>
	     		<input type="checkbox"{{in_array("depress",$check5)?"checked":""}}> <span class="uk-text-middle">Depression</span> 
	        	<input type="checkbox"{{in_array("syncope",$check5)?"checked":""}}> <span class="uk-text-middle">Anxiety</span> 
	        	<input type="checkbox"{{in_array("syncope",$check5)?"checked":""}}> <span class="uk-text-middle">Suicidal Ideation</span> 
	        	<input type="checkbox"{{in_array("homical",$check5)?"checked":""}}> <span class="uk-text-middle">Homicidal</span>  <br>
	        	<input type="checkbox"{{in_array(
	        	"delun",$check5)?"checked":""}}> <span class="uk-text-middle" >Delusion</span>
        		
        		</td>
			</tr>
		</tbody>
	</table>
	
	<div class="page-break"></div>
	<b>VIII. Physical Examination</b>
	<br>
	<label for="">Vital Signs BP:{{$row->bp}}  RR:{{$row->rr}}  HR:{{$row->hr}}  Temp:{{$row->te}}  BMI:{{$row->bmi}}   
		</label>
	<div class="uk-margin">
		<label for="">General Survey:</label>
		<input  type="checkbox"{{in_array("awakealert",$check6)?"checked":""}}><span class="uk-text-middle">Awake & Alert</span>
		<input  type="checkbox"{{in_array("cooperative",$check6)?"checked":""}}><span class="uk-text-middle">Cooperative</span>
		<input  type="checkbox"{{in_array("notinrespiratory",$check6)?"checked":""}}><span class="uk-text-middle">Not in respiratory distress</span>
		<input  type="checkbox"{{in_array("alteredsensor",$check6)?"checked":""}}><span class="uk-text-middle">Altered Sensornium</span> <br>
		 <span class="uk-text-bold" >Other Pertinent Findings:</span>  {{$row->pertinentFind1}}
	</div>
	<div id="row">
		<div id="column">
			<div class="uk-margin">
				<label class="uk-text-bold">SKIN:</label>
				<input  type="checkbox"{{in_array("rashpete",$check7)?"checked":""}}><span class="uk-text-middle">Rashes/Petechie</span>
				<input  type="checkbox"{{in_array("warm",$check7)?"checked":""}}><span class="uk-text-middle">Warm</span>
				<input  type="checkbox"{{in_array("moist",$check7)?"checked":""}}><span class="uk-text-middle">Moist</span> 
				<input  type="checkbox"{{in_array("goodtur",$check7)?"checked":""}}><span class="uk-text-middle">Good turgor</span>
				<br>
				<span class="uk-text-bold" >Other Pertinent Findings:</span>{{$row->pertinentFind2}}
			</div>
			<div class="uk-margin">
				<label class="uk-text-bold">HEENT:</label>
				<input  type="checkbox"{{in_array("moistoral",$check7)?"checked":""}}><span class="uk-text-middle">Moist oral mucosa </span>
				<input  type="checkbox"{{in_array("icteric",$check7)?"checked":""}}><span class="uk-text-middle">Icteric sclerae</span> 
				<input  type="checkbox"{{in_array("antiteric",$check7)?"checked":""}}><span class="uk-text-middle">Anicteric sclerae </span> 
				<br>
				<input  type="checkbox"{{in_array("nonasal",$check7)?"checked":""}}><span class="uk-text-middle">No nasal discharges </span>
				<input  type="checkbox"{{in_array("plaeconjun",$check7)?"checked":""}}><span class="uk-text-middle">Pink palpebral conjunctivae </span>	
				<br>		
				<input  type="checkbox"{{in_array("notonsil",$check7)?"checked":""}}><span class="uk-text-middle">tonsillopharyngeal congestio</span>
				<br>
				<span class="uk-text-bold" >Other Pertinent Findings:</span>{{$row->pertinentFind3}}
			</div>
			<div class="uk-margin">
				<label class="uk-text-bold">NECK:</label>
				<input  type="checkbox"{{in_array("supple",$check7)?"checked":""}}><span class="uk-text-middle">Supple</span>
				<input  type="checkbox"{{in_array("nolad",$check7)?"checked":""}}><span class="uk-text-middle">No LAD</span>
				<input  type="checkbox"{{in_array("noneckvein",$check7)?"checked":""}}><span class="uk-text-middle">No neck vein</span>
				<br>
				<span class="uk-text-bold">Other Pertinent Findings:</span>
				{{$row->pertinentFind4}}
			</div>
			<div class="uk-margin">
				<label class="uk-text-bold">HEART:</label>
				<input  type="checkbox"{{in_array("adyprecor",$check7)?"checked":""}}><span class="uk-text-middle">Adynamic precordium</span>
				<input  type="checkbox"{{in_array("dis12",$check7)?"checked":""}}><span class="uk-text-middle">Distinct S1 and S2</span>
				<br>
				<input  type="checkbox"{{in_array("normrate",$check7)?"checked":""}}><span class="uk-text-middle">Normal rate</span>
				<input  type="checkbox"{{in_array("regrhyt",$check7)?"checked":""}}><span class="uk-text-middle">Regular rhythm</span>
				<input  type="checkbox"{{in_array("nomurmur",$check7)?"checked":""}}><span class="uk-text-middle">No murmurs</span>
				<br>
				<span class="uk-text-bold">Other Pertinent Findings:</span> {{$row->pertinentFind5}}
			</div>
		</div>
		<div id="column">
			<div class="uk-margin">
				<label class="uk-text-bold">CHEST AND LUNGS:</label>
				<input  type="checkbox"{{in_array("ralescrack",$check7)?"checked":""}}><span class="uk-text-middle">Rales/crackles/rhonchi</span>
				<input  type="checkbox"{{in_array("equalchest",$check7)?"checked":""}}><span class="uk-text-middle">Equal chest expansion</span>
				<input  type="checkbox"{{in_array("clearbreath",$check7)?"checked":""}}><span class="uk-text-middle">Clear breath sounds</span>
				<input  type="checkbox"{{in_array("norhonchi",$check7)?"checked":""}}><span class="uk-text-middle">No rhonchi</span>
				<input  type="checkbox"{{in_array("wheezes",$check7)?"checked":""}}><span class="uk-text-middle">Wheezes</span>
				<br>
				<span class="uk-text-bold">Other Pertinent Findings:</span>{{$row->pertinentFind6}}
			</div>

			<div class="uk-margin">
				<label class="uk-text-bold">ABDOMEN AND RECTAL</label>
				<input  type="checkbox"{{in_array("norectal",$check7)?"checked":""}}><span class="uk-text-middle">No organomegaly</span>
				<input  type="checkbox"{{in_array("flatflab",$check7)?"checked":""}}><span class="uk-text-middle">Flat/flabby</span>
				<input  type="checkbox"{{in_array("normoact",$check7)?"checked":""}}><span class="uk-text-middle">Normoactive</span>
				<input  type="checkbox"{{in_array("noorgano",$check7)?"checked":""}}><span class="uk-text-middle">No organomegaly</span>
				<input  type="checkbox"{{in_array("nontend",$check7)?"checked":""}}><span class="uk-text-middle">Non-tender</span>
				<input  type="checkbox"{{in_array("soft",$check7)?"checked":""}}><span class="uk-text-middle">Soft</span>
				<br>
				<span class="uk-text-bold">Other Pertinent Findings:</span>{{$row->pertinentFind7}}
			</div>
			<div class="uk-margin">
				<label class="uk-text-bold">BACK</label>
				<input  type="checkbox"{{in_array("nodeform",$check7)?"checked":""}}><span class="uk-text-middle">No deformities</span>
				<input  type="checkbox"{{in_array("nocostovert",$check7)?"checked":""}}><span class="uk-text-middle">No costovetebral angle tenderness</span>
				<br>
				<span class="uk-text-bold">Other Pertinent Findings:</span>{{$row->pertinentFind8}}
			</div>
			<div class="uk-margin">
				<label class="uk-text-bold">Extremities</label>
				<input  type="checkbox"{{in_array("essennormalextremit",$check7)?"checked":""}}><span class="uk-text-middle">Strong & equal peripheral pulses</span>
				<input  type="checkbox"{{in_array("noedema",$check7)?"checked":""}}><span class="uk-text-middle">No Edema <br>
				<input  type="checkbox"{{in_array("crt",$check7)?"checked":""}}><span class="uk-text-middle">CRT greater than 2 sec
				<br>
				<span class="uk-text-bold">Other Pertinent Findings:</span>{{$row->pertinentFindCVS}}
			</div> 
		</div>
	</div>
	<table style="width:100%"  >
		<thead>
			<tr>
				<th><label class="uk-text-bold">Neurologic Examination</label>
		<input type="checkbox"{{in_array("Unremarkable",$remark2)?"checked":""}}> <span class="uk-text-middle uk-text-bold">Unremarkble</span> 
		 <input type="checkbox"{{in_array("Remarkable",$remark2)?"checked":""}}> <span class="uk-text-middle uk-text-bold">Remarkable</span></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>
						<label class="uk-text-bold">Cerebral</label> <br>
		<input  type="checkbox"{{in_array("consci",$check7)?"checked":""}}><span class="uk-text-middle">Conscious </span>
		<input  type="checkbox"{{in_array("cohera",$check7)?"checked":""}}><span class="uk-text-middle">Coherant </span>
		<input  type="checkbox"{{in_array("orient",$check7)?"checked":""}}><span class="uk-text-middle">Oriented </span>
		<input  type="checkbox"{{in_array("intactmem",$check7)?"checked":""}}><span class="uk-text-middle">Intact memory </span> <br>
		<label class="uk-text-bold">Cranial nerves</label> <br>
		<input  type="checkbox"{{in_array("withnormal",$check7)?"checked":""}}><span class="uk-text-middle">Within normal limits </span> <br>
		<label class="uk-text-bold">Motor</label> <br>
		<input  type="checkbox"{{in_array("goodmuscle",$check7)?"checked":""}}><span class="uk-text-middle">Good muscle tone and strength </span>
				</td>
			
				<td>
		<label class="uk-text-bold">Sensory</label> <br>
		<input  type="checkbox"{{in_array("intactpain",$check7)?"checked":""}}><span class="uk-text-middle">Intact to pain and light touch </span> <br>
		<label class="uk-text-bold">Reflexes</label> <br>
		<input  type="checkbox"{{in_array("nomoreflex",$check7)?"checked":""}}><span class="uk-text-middle">Normoreflexia </span> 
		<input  type="checkbox"{{in_array("nobabinsk",$check7)?"checked":""}}><span class="uk-text-middle">No babinski's reflex </span>
				</td>
			</tr>
			<tr>
				<td>
					<label class="uk-text-bold">Motor</label><br>
					<label>[SIDE]Shoulder</label>
				</td>
				<td>
					<span class="uk-text-mute">[Flexion] R: L:</span> <span class="uk-text-mute">[Extension] R: L: </span> 
					<span class="uk-text-mute">[Abduction] R: L:</span>
				</td>
			</tr>
			<tr>
				<td>
					<label>[SIDE]Elbow</label>
				</td>
				<td>
					<span class="uk-text-mute">[Flexion] R: L:</span> <span class="uk-text-mute">[Extension] R: L: </span>
				</td>
			</tr>
			<tr>
				<td>
					
					<label>Handgrip</label>
				</td>
				<td>
					R: L:
				</td>
			</tr>
			<tr>
				<td>[SIDE]Hip</td>
				<td>
					<span class="uk-text-mute">[Flexion] R: L: [Extension] R: L:</span>
				</td>
			</tr>
			<tr>
				<td>[SIDE]Knee</td>
				<td>
					<span class="uk-text-mute">[Flexion] R: L: [Extension] R: L:</span>
				</td>
			</tr>
			<tr>
				<td>
					<label class="uk-text-bold">Sensory</label><br>
					<label>[SIDE]Shoulder</label>
				</td>
				<td>
					<span class="uk-text-mute">[Arm] R: L:</span> <span class="uk-text-mute">[Forearm] R: L: </span> 
					<span class="uk-text-mute">[Hand] R: L:</span>
				</td>
			</tr>
			<tr>
				<td>
					<label>[SIDE]Hips</label>
				</td>
				<td>
					<span class="uk-text-mute">[Thigh] R: L:</span> <span class="uk-text-mute">[Leg] R: L:</span>
					<span class="uk-text-mute">[Foot] R: L:</span>
				</td>
			</tr>
			<tr>
				<label>Additional neurologic findings: &nbsp;{{$row->pertinentFind10}}</label>
			</tr>
		</tbody>
	</table>
	

		
@endsection
 