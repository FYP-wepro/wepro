<!DOCTYPE html>
<html lang="en">
<head>
	<title>Wepro</title>
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

@if($errors->any())
<h4>{{$errors->first()}}</h4>
@endif
<div id="buyerModel" class="modal">

  <!-- Modal content -->
  <div class="modal-content">




    <div class="modal-c-tabs">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#buyerLogin" role="tab"><i class="fas fa-user mr-1"></i>
              Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#buyserRegister" role="tab"><i class="fas fa-user-plus mr-1"></i>
              Register</a>
          </li>
        </ul>

      </div>  
      <!-- tab panel start -->

              <div class="tab-content">
          <!--Panel login-->
          <div class="tab-pane fade in show active" id="buyerLogin" role="tabpanel">

            <!--Body-->
            <div class="signin-form">

    <form action="" id="idForm">

    <h2>Sign Buyer</h2>
        <p class="hint-text">Sign up with your social media account</p>
    <div class="social-btn text-center">
      <a href="#" class="btn btn-primary btn-lg" title="Facebook"><i class="fa fa-facebook"></i></a>
      <a href="#" class="btn btn-info btn-lg" title="Twitter"><i class="fa fa-twitter"></i></a>
      <a href="#" class="btn btn-danger btn-lg" title="Google"><i class="fa fa-google"></i></a>
    </div>
    <div class="or-seperator"><b>or</b></div>
        <div class="form-group">
          <input type="text" class="form-control input-lg" name="buyeremail" id="buyeremail" placeholder="email or username" required="required">
        </div>
      <div class="form-group">
          <input type="password" class="form-control input-lg" name="buyerpassword" id="buyerpassword" placeholder="Password" required="required">
        </div>
         
        <div class="form-group">
            <button type="button" class="btn btn-success btn-lg btn-block signup-btn" id="loginbuyer">Login</button>
        </div>
        <div class="alert alert-danger buyerLoginError" style="display:none"></div>
        <div class="text-center small"><a href="#">Forgot Your password?</a></div>
    </form>
    <div class="text-center small">Already have an Acocunt ?<a href="#">Login</a></div>

</div>

          </div>


<!-------------------------------Script for Login Buyer--------------------------------------->

<script>
$("#loginbuyer").click(function(e){
      e.preventDefault();
     
      var email =$("#buyeremail").val();
      var password=$("#buyerpassword").val();
                                                  //alert(catagory);
                                                  $.ajax({

                                                             type:'GET',

                                                             url:'{{url('/buyerLogin')}}',

                                                             data:{email:email,password:password},
                                                            
                                                             

                                                             success:function(data){
                                                            if(data.success){
                                                              //console.log(data.success);
                                                              top.location.href="{{url('/B_dashboard')}}";
                                                              
                                                            }

                                                          if(data.errors)
                                                          {
                                                         
                                                            alert(data.errors);     
                                                          }    
                                                              
                                                                  



                                                             }

                                                          });



    });
  </script>
</script>

<!-------------------------------Panel register start--------------------------------------->
          <div class="tab-pane fade" id="buyserRegister" role="tabpanel">

            <!--Body-->

            <div class="signin-form">

    <form action="" id="idForm">

    <h2>Join Wepro As Buyer </h2>
        <p class="hint-text">Sign up with your social media account</p>
    <div class="social-btn text-center">
      <a href="#" class="btn btn-primary btn-lg" title="Facebook"><i class="fa fa-facebook"></i></a>
      <a href="#" class="btn btn-info btn-lg" title="Twitter"><i class="fa fa-twitter"></i></a>
      <a href="#" class="btn btn-danger btn-lg" title="Google"><i class="fa fa-google"></i></a>
    </div>
    <div class="or-seperator"><b>or</b></div>
    
        <div class="form-group">
          <input type="text" class="form-control input-lg" name="emailBuyer" id="emailBuyer" placeholder="email" required="required">
        </div>
        <div class="form-group">
          <input type="text" class="form-control input-lg" name="usernameBuyer" id="usernameBuyer" placeholder="Username" required="required">
        </div>
      <div class="form-group">
          <input type="password" class="form-control input-lg" name="passwordBuyer" id="passwordBuyer" placeholder="Password" required="required">
        </div>
        
        <div class="form-group">
            <button type="button" class="btn btn-success btn-lg btn-block signup-btn" id="registerBuyer">Sign Up</button>
        </div>

        <div class="alert alert-danger  buyerError" style="display:none">
         
        </div>

        <!--
@if ($errors->any())

    <div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
-->
        <div class="text-center small"><a href="#">Forgot Your password?</a></div>
    </form>


    
</div>

          </div>
            
          </div>
          <!--/.Panel register end-->
      

        <!-- end panel tab -->  
       
    <button type="button" class="btn btn-outline-info waves-effect ml-auto closeBuyer">Close</button>
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

    <form action="" id="idForm">

    <h2>login Seller</h2>
        <p class="hint-text">Sign in with your social media account</p>
    <div class="social-btn text-center">
      <a href="#" class="btn btn-primary btn-lg" title="Facebook"><i class="fa fa-facebook"></i></a>
      <a href="#" class="btn btn-info btn-lg" title="Twitter"><i class="fa fa-twitter"></i></a>
      <a href="#" class="btn btn-danger btn-lg" title="Google"><i class="fa fa-google"></i></a>
    </div>
    <div class="or-seperator"><b>or</b></div>
        <div class="form-group">
          <input type="text" class="form-control input-lg" name="emailSeller" id="emailSeller" placeholder="email or username" required="required">
        </div>
      <div class="form-group">
          <input type="password" class="form-control input-lg" name="passwordSeller" id="passwordSeller" placeholder="Password" required="required">
        </div>
         
        <div class="form-group">
            <button type="button" class="btn btn-success btn-lg btn-block signup-btn" id="loginSeller">Login</button>
        </div>
        
    </form>
    
</div>

          </div>


          <script>
$("#loginSeller").click(function(e){
      e.preventDefault();
     
      var email =$("#emailSeller").val();
      var password=$("#passwordSeller").val();
                                                  //alert(catagory);
                                                  $.ajax({

                                                             type:'GET',

                                                             url:'{{url('/sellerLogin')}}',

                                                             data:{email:email,password:password},
                                                            
                                                             

                                                             success:function(data){
                                                            if(data.success){
                                                              //console.log(data.success);
                                                              top.location.href="{{url('/S_dashboard')}}";
                                                              
                                                            }

                                                          if(data.errors)
                                                          {
                                                         
                                                            alert(data.errors);     
                                                          }    
                                                              
                                                                  



                                                             }

                                                          });



    });
  </script>
</script>
          <!--/.Panel 7-->

          <!--Panel register start-->
          <div class="tab-pane fade" id="panel10" role="tabpanel">

            <!--Body-->

            <div class="signin-form">

    <form action="" id="idForm">

    <h2>Join Wepro As Seller </h2>
        <p class="hint-text">Sign up with your social media account</p>
    <div class="social-btn text-center">
      <a href="#" class="btn btn-primary btn-lg" title="Facebook"><i class="fa fa-facebook"></i></a>
      <a href="#" class="btn btn-info btn-lg" title="Twitter"><i class="fa fa-twitter"></i></a>
      <a href="#" class="btn btn-danger btn-lg" title="Google"><i class="fa fa-google"></i></a>
    </div>
    <div class="or-seperator"><b>or</b></div>
    
        <div class="form-group">
          <input type="text" class="form-control input-lg" name="email" id="email" placeholder="email" required="required">
        </div>
        <div class="form-group">
          <input type="text" class="form-control input-lg" name="username" id="username" placeholder="Username" required="required">
        </div>
      <div class="form-group">
          <input type="password" class="form-control input-lg" name="password" id="password" placeholder="Password" required="required">
        </div>
        
        <div class="form-group">
            <button type="button" class="btn btn-success btn-lg btn-block signup-btn" id="registerSeller">Sign Up</button>
        </div>

        <div class="alert alert-danger  sellerError" style="display:none">
         
        </div>

        <!--
@if ($errors->any())

    <div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
-->
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
					<h2>Wepro</h2>
				</a>
				<div class="user-panel">
					<button type="button" class="myBtn" style="border: none; background-color: transparent;"><a href="#" >Buyer</a></button><span>/</span><button type="button" id="myBtn2" style="border: none; background-color: transparent;"><a href="#" >Seller</a></button>
				</div>
				
<!-- javascript for model box -->
<script>

$(document).ready(function(){



var buyerModel = document.getElementById("buyerModel");

var modal1 = document.getElementById("myModal1");

// Get the button that opens the modal
var buyerBtn = document.getElementsByClassName("myBtn")[0];

var btn2 = document.getElementById("myBtn2");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("closeBuyer")[0];

var span2 = document.getElementsByClassName("closeSeller")[0];

// When the user clicks the button, open the modal 
buyerBtn.onclick = function() {
  buyerModel.style.display = "block";
}


btn2.onclick = function() {
  modal1.style.display = "block";
}
// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  buyerModel.style.display = "none";
  $("#username").val('');
  $("#email").val();
  $("#password").val();
}


span2.onclick = function() {
  modal1.style.display = "none";
  $("#username").val('');
  $("#email").val();
  $("#password").val();
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
    $("#username").val('');
  $("#email").val();
  $("#password").val();
  }
}

});

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
					<li><a href="#" id="postRequest">Post Request</a></li>
				</ul>
			</div>
		</div>
	</header>
	<!-- Header section end -->
<script>
$(document).ready(function(){
$("#postRequest").click(function(){
    <?php
   if(Session::has('buyerId')){
    ?>
  console.log(Session('buyerId'));
  top.location.href="{{url('/jobRequestForm')}}";


  <?php
}
else{
  ?>
  alert("please login or Create account First");
     buyerModel.style.display = "block";

 <?php
}
?>
  });
  
  });
</script>

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
				<form action="{{url('subCatagory2')}}" class="multi-search-form form-inline">
					
					<!--<input type="text" placeholder="FreeLancer">-->
					<!--<input type="text" placeholder="Level">
					<input type="text" placeholder="Date">
					<input type="text" placeholder="Teacher">
					<input type="text" placeholder="Price">-->
          <?php
    
      echo '<select id="catagory" name="catagory" class="form-control" style="width:80%;height:49px;border-radius:0;"><option selected disabled>Search Top rated FreeLancer</option>';

      ?>

      @foreach($catagoryes as $catagory)

    <?php  echo '<option value="'.$catagory->id.'">' .$catagory->name. '</option>';

    ?>

    @endforeach
<?php   

echo '</select>';

?>
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
			
				<!-- course -->
				

          
            <div class="row course-item sellerSlider" style="background-color: transparent;">

            </div>
          
					
				

        
				<!-- course -->
				
				<!-- course -->
				
				<!-- course -->
				<!-- course -->
				<!-- course -->
				<!-- course -->
				
			
		</div>
	</section>
	<!-- Courses section end -->
<script>
          $(document).ready(function(){
            $.ajax({
              url:"{{url('/sellers')}}",
              success:function(data){
                var obj = JSON.parse(data);
                console.log(obj[0].coverImg);
                var sellerHtml='';
                $.each(obj, function(i){
                  sellerHtml+='<div class="col-lg-4">';                                            
                  sellerHtml+='<a href="#">';
                  sellerHtml +='<figure class="course-preview">';
                  sellerHtml+='<img class=".img-responsive" src="http://localhost/wepro/public/seller/'+obj[i].coverImg+'" alt="" style="height:233px;">';
                  sellerHtml+='<div class="price">'+obj[i].pRate+'$</div></figure><div class="course-content"><div class="cc-text" style="height:282px">';
                  sellerHtml+='<h5>'+obj[i].pTitle+'</h5><p>'+obj[i].discription+'</p><span><i class="flaticon-student-2"></i>20</span><span><i class="flaticon-placeholder"></i>3</span>';
                  sellerHtml+='<div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star i-fade"></i></div>';
                  sellerHtml+='</div><div class="seller-info"><div class="seller-pic set-bg"><img style="border-radius:30px;height:100%" src="http://localhost/wepro/public/seller/'+obj[i].profileImg+'"></div><h6>'+obj[i].fullName+'</span></h6></div></div></a></div>';
                });

                $(".sellerSlider").html(sellerHtml);

              }

            });
          })
        </script>


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

  <script>
    $("#registerBuyer").click(function(e){
       e.preventDefault();
      var username=$("#usernameBuyer").val();
      var email =$("#emailBuyer").val();
      var password=$("#passwordBuyer").val();
      console.log(username);
                                                  //alert(catagory);
                                                  $.ajax({

                                                             type:'GET',

                                                             url:'{{url('/buyerSignup')}}',

                                                             data:{email:email,username:username,password:password},
                                                            
                                                             

                                                             success:function(data){
                                                            if(data.success){
                                                              //console.log(data.success);
                                                              top.location.href="{{url('/buyerRegister')}}";
                                                              $("#username").val('');
                                                              $("#email").val('');
                                                              $("#password").val('');
                                                              $("#buyerModel").hide();
                                                              //console.log(data.success);
                                                            }

                                                          if(data.errors)
                                                          {
                                                          $.each(data.errors, function(key, value){
                                                              //console.log(key);
                                                              $('.buyerError').show();
                                                              $('.buyerError').append('<p>'+value+'</p>');
                                                          });

                                                          setTimeout(function() {
                                                            $('.buyerError').html('');
                                                            $('.buyerError').css('display','none');
                                                            }, 3000);
                                                              
                                                          }    
                                                              
                                                                  



                                                             }

                                                          });



    });
  </script>
  <script>
    $("#registerSeller").click(function(e){
       e.preventDefault();
      var username=$("#username").val();
      var email =$("#email").val();
      var password=$("#password").val();
                                                  //alert(catagory);
                                                  $.ajax({

                                                             type:'GET',

                                                             url:'{{url('/sellerSignup')}}',

                                                             data:{email:email,username:username,password:password},
                                                            
                                                             

                                                             success:function(data){
                                                            if(data.success){
                                                              //console.log(data.success);
                                                              top.location.href="{{url('/register')}}";
                                                              $("#username").val('');
                                                              $("#email").val('');
                                                              $("#password").val('');
                                                              $("#myModal1").hide();
                                                              //console.log(data.success);
                                                            }

                                                          if(data.errors)
                                                          {
                                                          $.each(data.errors, function(key, value){
                                                              //console.log(key);
                                                              $('.sellerError').show();
                                                              $('.sellerError').append('<p>'+value+'</p>');
                                                          });

                                                          setTimeout(function() {
                                                            $('.sellerError').html('');
                                                            $('.sellerError').css('display','none');
                                                            }, 3000);
                                                              
                                                          }    
                                                              
                                                                  



                                                             }

                                                          });



    });
  </script>
	<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('js/circle-progress.min.js')}}"></script>
	<script src="{{asset('js/main.js')}}"></script>


</body>
</html>

