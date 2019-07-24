<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>IM-Database @yield('title')</title>

	<link rel="stylesheet" href="{{asset('assets/css/uikit.min.css')}}">

	<style>

	img{
	position:absolute;
	padding-left: 88px;
	width:14%;
	max-width:10%;
	bottom:1020px;
	}	

	#ads{
		width: 100%;
		text-align: right;
		position: fixed;
		top: -25px;
		
	}	

	.header,
	.footer {
    width: 100%;
    text-align: right;
    position: fixed;
	}
	.header {
    top: 0px;
	}
	.footer {
    bottom: 0px;
	}
	.pagenum:before {
    content: counter(page);
	}
	body{
	margin-left: -10px;
	margin-top: 180px; 
	}
	</style>
	
	@yield('style')
	
</head>

<body>
<div class="header">
	<img  src="{{asset('assets/images/NKTI-oval-logo-transpbkg.gif')}}" alt="NKTI-Logo.gif"  >
	<h6 class="uk-h5"><center>NATIONAL KIDNEY & TRANSPLANT INSTITUTE</center></h6>
	<h6 class="uk-h5" style="margin-top: -20px;" ><center>East Avenue, Quezon City</center></h6>
	<h6 class="uk-h5" style="margin-top: -20px;" ><CENTER>ADMITTING HISTORY AND PHYSICAL EXAMINATION</CENTER></h6>
	<table style="width: 100%" >
		<thead>
			<tr>
				<th>PATIENT'S NAME</th>
				<th>SEX</th>
				<th>AGE</th>
				<th>CS</th>
				<th>RM/UNIT NO</th>
				<th>HOSPITAL NO</th>
			</tr>
		</thead>
		<tbody style="margin-top:-20px;" >
			<tr>
				<td>{{$demo->lname.', '.$demo->fname.' '.$demo->mname}}</td>
				<td>{{$demo->gender}}</td>
				<td>{{$demo->age}}</td>
				<td>{{$demo->cs}}</td>
				<td>{{$demo->roomNo}}</td>
				<td>{{$demo->hospitalNo}}</td>
			</tr>
			<tr>
				<td colspan="3" >Address: {{$demo->address}}</td>
				<td colspan="2" >Contact no: {{$demo->contactnum}}</td>
				<td colspan="1" >Religion: {{$demo->religion}}</td>
			</tr>
			<tr>
				<td colspan="3" >Attending Physician M.D. {{$row->consult['lname'].', '.$row->consult['fname'].$row->consult['mname']}}{{$row->attendingPhysicianOther}}</td>
				<td colspan="3" >Date admitted: {{ $row->dateAdmit }}</td>
			</tr>
		</tbody>
	</table>
</div >

<div class="footer">
    <span class="uk-text-muted">Page</span> <span class="pagenum uk-text-muted"></span> 
</div>
<div id="ads">
	<span class="uk-text-muted" >ADS-QPF-002</span>
</div>

<div class="uk-container">
	@yield('content')
</div>

	@yield('script')

</body>

</html>