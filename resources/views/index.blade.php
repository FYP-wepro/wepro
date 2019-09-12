<!DOCTYPE html>
<html lang="en">
<head>
	<title>Academica - Learning Page Template</title>
	<meta charset="UTF-8">
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


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
<!-- style and javascript for model box of buyer and seller signup and login -->
	

	<style>
		.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 10; /* Sit on top */
  padding-top: 30px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 30%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 15px;
  font-weight: bold;
}

.closeSeller {
  color: #aaaaaa;
  float: right;
  font-size: 15px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: white;
  text-decoration: none;
  cursor: pointer;
  background: #5cb85c;
    opacity: 0.8;
}

.closeSeller:hover,
.closeSeller:focus {
  color: white;
  text-decoration: none;
  cursor: pointer;
  
  background: #5cb85c;
    opacity: 0.8;
}
</style>

<style>
	.form-control {
    font-size: 16px;
    transition: all 0.4s;
    box-shadow: none;
  }
  .form-control:focus {
        border-color: #5cb85c;
    }
    .form-control, .btn {
        border-radius: 50px;
    outline: none !important;
    }
  
    
  .signin-form a {
    color: #5cb85c;
  }    
  .signin-form h2 {
    text-align: center;
    font-size: 34px;
    margin: 10px 0 15px;
  }
  .signin-form .hint-text {
    color: #999;
    text-align: center;
    margin-bottom: 20px;
  }
  .signin-form .form-group {
    margin-bottom: 20px;
  }
    .signin-form .btn {        
        font-size: 18px;
    line-height: 26px;        
        font-weight: bold;
    text-align: center;
    }
    .signin-form .small {
        font-size: 13px;
    }
  .signup-btn {
    text-align: center;
    border-color: #5cb85c;
    transition: all 0.4s;
  }
  .signup-btn:hover {
    background: #5cb85c;
    opacity: 0.8;
  }
    .or-seperator {
        margin: 50px 0 15px;
        text-align: center;
        border-top: 1px solid #e0e0e0;
    }
    .or-seperator b {
        padding: 0 10px;
    width: 40px;
    height: 40px;
    font-size: 16px;
    text-align: center;
    line-height: 40px;
    background: #fff;
    display: inline-block;
        border: 1px solid #e0e0e0;
    border-radius: 50%;
        position: relative;
        top: -22px;
        z-index: 1;
    }
    .social-btn .btn {
    color: #fff;
        margin: 10px 0 0 30px;
    font-size: 15px;
        width: 55px;
        height: 55px;
        line-height: 38px;
        border-radius: 50%;
    font-weight: normal;
        text-align: center;
    border: none;
    transition: all 0.4s;
    } 
  .social-btn .btn:first-child {
    margin-left: 0;
  }
  .social-btn .btn:hover {
    opacity: 0.8;
  }
  .social-btn .btn-primary {
    background: #507cc0;
  }
  .social-btn .btn-info {
    background: #64ccf1;
  }
  .social-btn .btn-danger {
    background: #df4930;
  }
  .social-btn .btn i {
    font-size: 20px;
  }
</style>

</head>
<body>

<!--<button id="myBtn">Open Modal</button>-->

<!------------------------------------------ The Modal box for buyer -------------------------- -->


<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">




    <div class="modal-c-tabs">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fas fa-user mr-1"></i>
              Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fas fa-user-plus mr-1"></i>
              Register</a>
          </li>
        </ul>

      </div>  
      <!-- tab panel start -->

              <div class="tab-content">
          <!--Panel login-->
          <div class="tab-pane fade in show active" id="panel7" role="tabpanel">

            <!--Body-->
            <div class="signin-form">

    <form action="{{url('signup')}}" id="idForm">

    <h2>Login As Buyer</h2>
        <p class="hint-text">Sign up with your social media account</p>
    <div class="social-btn text-center">
      <a href="#" class="btn btn-primary btn-lg" title="Facebook"><i class="fa fa-facebook"></i></a>
      <a href="#" class="btn btn-info btn-lg" title="Twitter"><i class="fa fa-twitter"></i></a>
      <a href="#" class="btn btn-danger btn-lg" title="Google"><i class="fa fa-google"></i></a>
    </div>
    <div class="or-seperator"><b>or</b></div>
        <div class="form-group">
          <input type="text" class="form-control input-lg" name="email" placeholder="email or username" required="required">
        </div>
      <div class="form-group">
          <input type="password" class="form-control input-lg" name="password" placeholder="Password" required="required">
        </div>
        -->  
        <div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block signup-btn" id="submitButtonId">Login</button>
        </div>
        <div class="text-center small"><a href="#">Forgot Your password?</a></div>
    </form>
    
</div>

          </div>
          <!--/.Panel 7-->

          <!--Panel register start-->
          <div class="tab-pane fade" id="panel8" role="tabpanel">

            <!--Body-->

            <div class="signin-form">

    <form action="{{url('signup')}}" id="idForm">

    <h2>Join Wepro as Buyer</h2>
        <p class="hint-text">Sign up with your social media account</p>
    <div class="social-btn text-center">
      <a href="#" class="btn btn-primary btn-lg" title="Facebook"><i class="fa fa-facebook"></i></a>
      <a href="#" class="btn btn-info btn-lg" title="Twitter"><i class="fa fa-twitter"></i></a>
      <a href="#" class="btn btn-danger btn-lg" title="Google"><i class="fa fa-google"></i></a>
    </div>
    <div class="or-seperator"><b>or</b></div>
        <div class="form-group">
          <input type="text" class="form-control input-lg" name="email" placeholder="email" required="required">
        </div>
        <div class="form-group">
          <input type="text" class="form-control input-lg" name="username" placeholder="username" required="required">
        </div>
      <div class="form-group">
          <input type="password" class="form-control input-lg" name="password" placeholder="Password" required="required">
        </div>
         
        <div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block signup-btn" id="submitButtonId">Sign Up</button>
        </div>
        <div class="text-center small"><a href="#">Forgot Your password?</a></div>
    </form>
    
</div>

          </div>
            
          </div>
          <!--/.Panel register end-->
      

        <!-- end panel tab -->  
       
    <button type="button" class="btn btn-outline-info waves-effect ml-auto close">Close</button>
  </div>

</div>




<!------------------------------- model box for seller -------------------------------->

<!-- The Modal -->
<div id="myModal1" class="modal">

  <!-- Modal content -->
  <div class="modal-content">




    <div class="modal-c-tabs">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#panel9" role="tab"><i class="fas fa-user mr-1"></i>
              Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#panel10" role="tab"><i class="fas fa-user-plus mr-1"></i>
              Register</a>
          </li>
        </ul>

      </div>  
      <!-- tab panel start -->

              <div class="tab-content">
          <!--Panel login-->
          <div class="tab-pane fade in show active" id="panel9" role="tabpanel">

            <!--Body-->
            <div class="signin-form">

    <form action="{{url('signup')}}" id="idForm">

    <h2>Sign In</h2>
        <p class="hint-text">Sign up with your social media account</p>
    <div class="social-btn text-center">
      <a href="#" class="btn btn-primary btn-lg" title="Facebook"><i class="fa fa-facebook"></i></a>
      <a href="#" class="btn btn-info btn-lg" title="Twitter"><i class="fa fa-twitter"></i></a>
      <a href="#" class="btn btn-danger btn-lg" title="Google"><i class="fa fa-google"></i></a>
    </div>
    <div class="or-seperator"><b>or</b></div>
        <div class="form-group">
          <input type="text" class="form-control input-lg" name="email" placeholder="email or username" required="required">
        </div>
      <div class="form-group">
          <input type="password" class="form-control input-lg" name="password" placeholder="Password" required="required">
        </div>
         
        <div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block signup-btn" id="submitButtonId">Sign Up</button>
        </div>
        <div class="text-center small"><a href="#">Forgot Your password?</a></div>
    </form>
    <div class="text-center small">Already have an Acocunt ?<a href="#">Login</a></div>
</div>

          </div>
          <!--/.Panel 7-->

          <!--Panel register start-->
          <div class="tab-pane fade" id="panel10" role="tabpanel">

            <!--Body-->

            <div class="signin-form">

    <form action="{{url('sellerSignup')}}" id="idForm">

    <h2>Join Wepro As Seller </h2>
        <p class="hint-text">Sign up with your social media account</p>
    <div class="social-btn text-center">
      <a href="#" class="btn btn-primary btn-lg" title="Facebook"><i class="fa fa-facebook"></i></a>
      <a href="#" class="btn btn-info btn-lg" title="Twitter"><i class="fa fa-twitter"></i></a>
      <a href="#" class="btn btn-danger btn-lg" title="Google"><i class="fa fa-google"></i></a>
    </div>
    <div class="or-seperator"><b>or</b></div>
        <div class="form-group">
          <input type="text" class="form-control input-lg" name="email" placeholder="email" required="required">
        </div>
        <div class="form-group">
          <input type="text" class="form-control input-lg" name="username" placeholder="Username" required="required">
        </div>
      <div class="form-group">
          <input type="password" class="form-control input-lg" name="password" placeholder="Password" required="required">
        </div>
        
        <div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block signup-btn" id="submitButtonId">Sign Up</button>
        </div>
        <div class="text-center small"><a href="#">Forgot Your password?</a></div>
    </form>
    
</div>

          </div>
            
          </div>
          <!--/.Panel register end-->
      

        <!-- end panel tab -->  
       
    <button type="button" class="btn btn-outline-info waves-effect ml-auto closeSeller">Close</button>
  </div>

</div>


<!------------------------------------  end of model box for Seller ------------------------------>




	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section" style="z-index: 9;">
		<div class="header-warp">
			<div class="container">
				<a href="#" class="site-logo">
					<img src="img/logo.png" alt="">
				</a>
				<div class="user-panel">
					<button type="button" id="myBtn" style="border: none; background-color: transparent;"><a href="#" >Buyer</a></button><span>/</span><button type="button" id="myBtn2" style="border: none; background-color: transparent;"><a href="#" >Seller</a></button>
				</div>
				
<!-- javascript for model box -->
				<script>
// Get the modal
var modal = document.getElementById("myModal");

var modal1 = document.getElementById("myModal1");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

var btn2 = document.getElementById("myBtn2");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

var span2 = document.getElementsByClassName("closeSeller")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}


btn2.onclick = function() {
  modal1.style.display = "block";
}
// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}


span2.onclick = function() {
  modal1.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

window.onclick = function(event) {
  if (event.target == modal1) {
    modal1.style.display = "none";
  }
}
</script>


<!-- header menu bar -->


				<div class="nav-switch">
					<i class="fa fa-bars"></i>
				</div>
				<ul class="main-menu">
					<li><a href="index.html">Home</a></li>
					<li><a href="about.html">About us</a></li>
					<li><a href="courses.html">Courses</a></li>
					<li><a href="blog.html">News</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</div>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Hero section -->
	<section class="hero-section set-bg" data-setbg="img/bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-7">
					<div class="hero-text text-white">
					<h2>Literature Course</h2>
					<p>Donec id mattis est. Proin nunc sapien, gravida ut sapien ut, ultrices faucibus sapien. Proin vehicula varius ex, vel feugiat massa scelerisque id. Nullam vulputate a lectus non molestie. </p>
					<div class="hero-author">
						<div class="hero-author-pic set-bg" data-setbg="{{asset('img/hero-author.jpg')}}"></div>
						<h5>By Sebastian Smith, <span>Senior Lead Developer</span></h5>
						<a href="#" class="site-btn">See Details <i class="fa fa-angle-right"></i></a>
					</div>
				</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end -->


	<!-- Search section -->
	<section class="multi-search-section">
		<div class="msf-warp">
			<div class="container">
				<h5>Search By catagory</h5>
				<form class="multi-search-form ">
					
					<input type="text" placeholder="FreeLancer">
					<!--<input type="text" placeholder="Level">
					<input type="text" placeholder="Date">
					<input type="text" placeholder="Teacher">
					<input type="text" placeholder="Price">-->
					<button class="site-btn">Search <i class="fa fa-angle-right"></i></button>
				</form>
			</div>
		</div>
	</section>
	<!-- Search section end -->


	<!-- Services section -->
	<section class="services-section spad">
		<div class="container">

			<h3 style=" margin-bottom: 40px;">Find Servives From Top Freelancer</h3>
			
		
			<div class="row">
				
				@foreach($catagoryes as $catagory)
				<div class="col-lg-3 col-md-6 service-item" style="margin-right: 10xp;">
					<a href="/wepro/public/subCatagory/{{$catagory->id}}">
					<div class="card" style="width: 16rem;">
  						<img src='<?php echo $catagory->src; ?>' class="card-img-top" alt="...">
  					<div class="card-body">
    					<h6 style="text-align: center;">{{$catagory->name}}</h6>
  					</div>
					</div>
					</a>

				</div>
				@endforeach

			</div>
		</div>
	</section>
	<!-- Services section end -->


	<!-- Review section -->
	<section class="review-section spad set-bg" data-setbg="{{asset('img/review-bg.jpg')}}">
		<div class="container">
			<div class="sec-title text-center text-white">
				<span>our students</span>
				<h2>Testimonials</h2>
			</div>
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="review-slider owl-carousel text-white">
					<div class="rs-item">
						<div class="quota">“</div>
						<h5>It helped me so much</h5>
						<p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mat tis effic iturut magna. Etiam nec odio vestibulum est mat tis effic iturut magna vestibulum est mat tis effic iturut magna.</p>
						<div class="review-avator set-bg" data-setbg="{{asset('img/review-avator.jpg')}}"></div>
						<h6><span>Daiane Smith,</span> Student</h6>
					</div>
					<div class="rs-item">
						<div class="quota">“</div>
						<h5>It helped me so much</h5>
						<p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mat tis effic iturut magna. Etiam nec odio vestibulum est mat tis effic iturut magna vestibulum est mat tis effic iturut magna.</p>
						<div class="review-avator set-bg" data-setbg="{{asset('img/review-avator.jpg')}}"></div>
						<h6><span>Daiane Smith,</span> Student</h6>
					</div>
				</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Review section end -->


	<!-- Courses section  -->
	<section class="courses-section spad">
		<div class="container">
			<div class="sec-title text-center">
				<span>Only  the best</span>
				<h2>Our Courses</h2>
			</div>
			<div class="course-slider owl-carousel">
				<!-- course -->
				<div class="course-item">
					<figure class="course-preview">
						<img src="{{asset('img/courses/1.jpg')}}" alt="">
						<div class="price">$25</div>
					</figure>
					<div class="course-content">
						<div class="cc-text">
							<h5>Italian for Begginers & Advanced Course</h5>
							<p>Donec molestie tincidunt tellus sit amet aliquet. Proin auctor nisi ut purus eleifend, et auctor lorem hendrerit. </p>
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
							<div class="seller-pic set-bg" data-setbg="{{asset('img/courses/sellers/1.jpg')}}"></div>
							<h6>By Sebastian Smith, <span>Italian Teacher</span></h6>
						</div>
					</div>
				</div>
				<!-- course -->
				<div class="course-item">
					<figure class="course-preview">
						<img src="{{asset('img/courses/2.jpg')}}" alt="">
						<div class="price">$25</div>
					</figure>
					<div class="course-content">
						<div class="cc-text">
							<h5>English Literature Advanced Course</h5>
							<p>Donec molestie tincidunt tellus sit amet aliquet. Proin auctor nisi ut purus eleifend, et auctor lorem hendrerit. </p>
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
							<div class="seller-pic set-bg" data-setbg="{{asset('img/courses/sellers/2.jpg')}}"></div>
							<h6>By Maria Williams, <span>English Teacher</span></h6>
						</div>
					</div>
				</div>
				<!-- course -->
				<div class="course-item">
					<figure class="course-preview">
						<img src="{{asset('img/courses/3.jpg')}}" alt="">
						<div class="price">$25</div>
					</figure>
					<div class="course-content">
						<div class="cc-text">
							<h5>Portrait Photography Course for Begginers</h5>
							<p>Donec molestie tincidunt tellus sit amet aliquet. Proin auctor nisi ut purus eleifend, et auctor lorem hendrerit. </p>
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
							<div class="seller-pic set-bg" data-setbg="{{asset('img/courses/sellers/3.jpg')}}"></div>
							<h6>By Jack Smith, <span>Photographer</span></h6>
						</div>
					</div>
				</div>
				<!-- course -->
				<div class="course-item">
					<figure class="course-preview">
						<img src="{{asset('img/courses/4.jpg')}}" alt="">
						<div class="price">$25</div>
					</figure>
					<div class="course-content">
						<div class="cc-text">
							<h5>Italian for Begginers & Advanced Course</h5>
							<p>Donec molestie tincidunt tellus sit amet aliquet. Proin auctor nisi ut purus eleifend, et auctor lorem hendrerit. </p>
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
							<div class="seller-pic set-bg" data-setbg="{{asset('img/courses/sellers/1.jpg')}}"></div>
							<h6>By Sebastian Smith, <span>Italian Teacher</span></h6>
						</div>
					</div>
				</div>
				<!-- course -->
				<div class="course-item">
					<figure class="course-preview">
						<img src="{{asset('img/courses/5.jpg')}}" alt="">
						<div class="price">$25</div>
					</figure>
					<div class="course-content">
						<div class="cc-text">
							<h5>English Literature Advanced Course</h5>
							<p>Donec molestie tincidunt tellus sit amet aliquet. Proin auctor nisi ut purus eleifend, et auctor lorem hendrerit. </p>
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
							<div class="seller-pic set-bg" data-setbg="{{asset('img/courses/sellers/2.jpg')}}"></div>
							<h6>By Maria Williams, <span>English Teacher</span></h6>
						</div>
					</div>
				</div>
				<!-- course -->
				<div class="course-item">
					<figure class="course-preview">
						<img src="{{asset('img/courses/6.jpg')}}" alt="">
						<div class="price">$25</div>
					</figure>
					<div class="course-content">
						<div class="cc-text">
							<h5>Portrait Photography Course for Begginers</h5>
							<p>Donec molestie tincidunt tellus sit amet aliquet. Proin auctor nisi ut purus eleifend, et auctor lorem hendrerit. </p>
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
							<div class="seller-pic set-bg" data-setbg="{{asset('img/courses/sellers/3.jpg')}}"></div>
							<h6>By Jack Smith, <span>Photographer</span></h6>
						</div>
					</div>
				</div>
				<!-- course -->
				<div class="course-item">
					<figure class="course-preview">
						<img src="{{asset('img/courses/3.jpg')}}" alt="">
						<div class="price">$25</div>
					</figure>
					<div class="course-content">
						<div class="cc-text">
							<h5>Portrait Photography Course for Begginers</h5>
							<p>Donec molestie tincidunt tellus sit amet aliquet. Proin auctor nisi ut purus eleifend, et auctor lorem hendrerit. </p>
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
							<div class="seller-pic set-bg" data-setbg="{{asset('img/courses/sellers/3.jpg')}}"></div>
							<h6>By Jack Smith, <span>Photographer</span></h6>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Courses section end -->



	<!-- Fact section -->
	<section class="fact-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-sm-6 fact-item">
					<figure>
						<img src="{{asset('img/icons/1.png')}}" alt="">
					</figure>
					<h2>2500</h2>
					<p>New Students</p>
				</div>
				<div class="col-lg-3 col-sm-6 fact-item">
					<figure>
						<img src="{{asset('img/icons/2.png')}}" alt="">
					</figure>
					<h2>14k</h2>
					<p>Grad Students</p>
				</div>
				<div class="col-lg-3 col-sm-6 fact-item">
					<figure>
						<img src="{{asset('img/icons/3.png')}}" alt="">
					</figure>
					<h2>129</h2>
					<p>Qualified Teachers</p>
				</div>
				<div class="col-lg-3 col-sm-6 fact-item">
					<figure>
						<img src="{{asset('img/icons/4.png')}}" alt="">
					</figure>
					<h2>1490</h2>
					<p>Amazing Courses</p>
				</div>
			</div>
		</div>
	</section>
	<!-- Fact section end -->


	<!-- Newslatter section -->
	<section class="newslatter-section set-bg" data-setbg="{{asset('img/newslatter-bg.jpg')}}">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<div class="sec-title text-white sec-style-2">
						<span>Newsletter</span>
						<h2>Stay updated</h2>
					</div>
				</div>

				<div class="col-lg-9 nl-form-warp">
					<form class="newslatter-form">
						<input type="text" placeholder="Your E-mail">
						<button class="site-btn">Subscribe <i class="fa fa-angle-right"></i></button>
					</form>
					<p>*Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul.</p>
				</div>
			</div>
		</div>
	</section>
	<!-- Newslatter section end -->



	<!-- Footer section -->
	<footer class="footer-section spad pb-0">
		<div class="container">
			<div class="text-center">
				<a href="#" class="site-btn">Enroll Now <i class="fa fa-angle-right"></i></a>
			</div>
			<div class="row text-white spad">
				<div class="col-lg-3 col-sm-6 footer-widget">
					<h4>Engeneering</h4>
					<ul>
						<li><a href="#">Applied Studies</a></li>
						<li><a href="#">Computer Engeneering</a></li>
						<li><a href="#">Software Engeneering</a></li>
						<li><a href="#">Informational Engeneering</a></li>
						<li><a href="#">System Engeneering</a></li>
					</ul>
				</div>
				<div class="col-lg-3 col-sm-6 footer-widget">
					<h4>Business School</h4>
					<ul>
						<li><a href="#">Applied Studies</a></li>
						<li><a href="#">Computer Engeneering</a></li>
						<li><a href="#">Software Engeneering</a></li>
						<li><a href="#">Informational Engeneering</a></li>
						<li><a href="#">System Engeneering</a></li>
					</ul>
				</div>
				<div class="col-lg-3 col-sm-6 footer-widget">
					<h4>Art & Design</h4>
					<ul>
						<li><a href="#">Graphic Design</a></li>
						<li><a href="#">Motion Graphics & 3D</a></li>
						<li><a href="#">Classichal Painting</a></li>
						<li><a href="#">Sculpture</a></li>
						<li><a href="#">Fashion Design</a></li>
					</ul>
				</div>
				<div class="col-lg-3 col-sm-6 footer-widget">
					<h4>Higher Education</h4>
					<ul>
						<li><a href="#">Applied Studies</a></li>
						<li><a href="#">Computer Engeneering</a></li>
						<li><a href="#">Software Engeneering</a></li>
						<li><a href="#">Informational Engeneering</a></li>
						<li><a href="#">System Engeneering</a></li>
					</ul>
				</div>
			</div>
			<div class="footer-bottom">
				
				<div class="social">
					<a href=""><i class="fa fa-pinterest"></i></a>
					<a href=""><i class="fa fa-facebook"></i></a>
					<a href=""><i class="fa fa-twitter"></i></a>
					<a href=""><i class="fa fa-dribbble"></i></a>
					<a href=""><i class="fa fa-behance"></i></a>
					<a href=""><i class="fa fa-linkedin"></i></a>
				</div>
				<ul class="footer-menu">
					<li><a href="#">Home</a></li>
					<li><a href="#">About us</a></li>
					<li><a href="#">Courses</a></li>
					<li><a href="#">Courses</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
				<div class="footer-logo">
					<a href="#">
						<img src="{{asset('img/footer-logo.png')}}" alt="">
					</a>
				</div>
			</div>

			<div class="row">
				<div class="col-12">
					<p class="text-white  text-center"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>	
				</div>
				
			</div>
		</div>



	</footer>
	<!-- Footer section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('js/circle-progress.min.js')}}"></script>
	<script src="{{asset('js/main.js')}}"></script>


</body>
</html>