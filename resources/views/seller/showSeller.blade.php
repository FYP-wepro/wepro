<!DOCTYPE html>
<html>
<head>
	<title>Academica - Learning Page Template</title>
	<meta charset="UTF-8">
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<meta name="description" content="Academica Learning Page Template">
	<meta name="keywords" content="academica, unica, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="{{asset('img/favicon.ico')}}" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/flaticon.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/style.css')}}"/>

</head>

<body>
	<h3 style="text-align:center; margin:30px; ">Our To Rated Seller</h3>
<div class="row">
@foreach($sellers as $seller)
<a href="/wepro/public/sellerProfile/{{$seller->sellerId}}" style="cursor: pointer;">
<div class="col-lg-4" style="margin-left: 10px;">

<div class="course-item" style="width: 380.667px;">
	
					<figure class="course-preview">
						<img src="http://localhost/wepro/public/seller/{{$seller->coverImg}}" alt="" style="height: 233px;">
						<div class="price">{{$seller->pRate}}$</div>
					</figure>
					<div class="course-content">
						<div class="cc-text" style="height: 233px;">
							<h5>{{$seller->pTitle}}</h5>
							<p>{{$seller->discription}}</p>
							
							<span><i class="flaticon-student-2"></i>20</span>
							<span><i class="flaticon-placeholder"></i>3</span>
							<div class="rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star i-fade"></i>
							
						</div>
						</div>
						<div class="seller-info">
							<div class="seller-pic set-bg" data-setbg="http://localhost/wepro/public/seller/{{$seller->profileImg}}"></div>
							<h6>{{$seller->fullName}} <span style="margin-left: 260px;">{{$seller->country}}</span></h6>
						</div>
					</div>
				</div>
		  </div>
		  </a>
@endforeach
</div>

</body>

</html>
<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('js/circle-progress.min.js')}}"></script>
	<script src="{{asset('js/main.js')}}"></script>