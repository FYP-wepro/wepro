<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/flaticon.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/style.css')}}"/>
</head>
<body>

<div class="row">


	
@foreach($subCatagoryes as $subCatagory)
			<div class="col-lg-3 col-md-6 service-item" style="margin-right: 10xp;">
					<a href="">
					<div class="card" style="width: 16rem;">
  						<img src="<?php echo $subCatagory->src; ?>" class="card-img-top" alt="...">
  					<div class="card-body">
    					<h6 style="text-align: center;">{{$subCatagory->name}}</h6>
  					</div>
					</div>
					</a>

					</div>
	@endforeach



			</div>				
</body>
</html>