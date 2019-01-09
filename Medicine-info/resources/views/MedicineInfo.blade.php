@extends('layouts.app')

@section('content')
	<div style=" margin-left:9%; margin-top:0.5%;">
		<!-- ini baru contoh nanti tolong ganti jadi foreach dari database -->
		<form action="{{ url('/doSearch') }}" method="GET">
			<div style="float:right; margin-right:10%;"><input type="submit" value="Search" class="btn btn-default"></div>
			<div style="float:right; margin-right:2%;">
				<input type="search" name="search" id="sSearch" placeholder="Search By Name or disease"  class="form-control" >
				
			</div>
			<br>
			
		</form>

		<br>
		<br>
		
		<table class="fixed" border="0" style="width:90%;" >
		
	
			<tr>
				<th>Medicine</th>
				<th>Name</th>
				<th>Description</th>
				<th>Brand</th>
				<th>Drug Type</th>
				<th>Avg Price</th>
				<th>Detail</th>
			</tr>
			@foreach($drug as $d)
			<col width="17%" />    
			<col width="10%" />    
			<col width="40%" />
			<col width="10%" />
			<col width="10%" />    
			<col width="10%" />    
			<col width="10%" />
			<tr>
				<td><img width="150px" height="150px" src="{{url($d->ImageUrl)}}" style="margin-right:4px; margin-top:4px; margin-down:4px;"></td>
				<td>{{$d->Name}}</td>
				<td>{{$d->Desc}}</td>
				<td>{{$d->Brand}}</td>
				<td>{{$d->Type}}</td>
				<td>{{$d->AvgPrice}}</td>
				<td><a href="{{url('/doDetail/'.$d->Id)}}">Detail</a></td>
			</tr>
			
			@endforeach
		</table>

		<p>
    	    {{ $drug->appends(['search'=>request()->search])->links() }}
	    </p>

	</div>

</body>
</html>

@endsection