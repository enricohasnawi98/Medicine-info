<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>MedicineInfo</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />


	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
	
	
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/flexslider.css">
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
	<link rel="stylesheet" href="css/style.css">

	
	<script src="js/modernizr-2.6.2.min.js"></script>
	

	</head>
	<body>
	
	<div id="page">
	<nav class="colorlib-nav" role="navigation">
		<div class="top-menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="top">
							<div class="row">
								<div class="col-md-6">
									<div id="colorlib-logo"><a href="/">Medicine<span>Info</span></a></div>
								</div>
								<div class="col-md-3">
									<div class="num">
										<span class="icon"><i class="icon-phone"></i></span>
										<p><a href="#">+62-11-2222-3333
</a><br><a href="#">+62-22-1111-2222</a></p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="loc">
										<span class="icon"><i class="icon-location"></i></span>
										<p><a href="#">Medicine Info Tower</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="menu-wrap">
				<div class="container">
					<div class="row">
						<div class="col-xs-8">
							<div class="menu-1">
								<ul>
									<li><a href="/">Home</a></li>
									
									<li class="active"><a href="/MedicineInfo">Medicine Info</a></li>
									
									<li><a href="/Aboutus">About Us</a></li>

									<li><a href="/ViewCompareDrug">Compare Drug</a></li>

									<li><a href="/ScannDrug">Scan Original Drug</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</nav>
    
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
			<col width="10%" />    
			<col width="10%" />    
			<col width="50%" />
			<col width="10%" />
			<col width="10%" />    
			<col width="10%" />    
			<col width="10%" />
			<tr>
				<td><img width="50px" height="50px" src="{{url($d->ImageUrl)}}" style="margin-right:4px; margin-top:4px; margin-down:4px;"></td>
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