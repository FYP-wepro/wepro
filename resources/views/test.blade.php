<!DOCTYPE html>
<html>
<head>


<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/flaticon.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/style.css')}}"/>
		<style>
		.modal {
  
  display: hide;
   /* Hidden by default */
  
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
  font-size: 28px;
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
  color: #000;
  text-decoration: none;
  cursor: pointer;
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

	<title></title>
</head>
<body>

<div id="modal1" class="modal">
	<h1>Fahad</h1>
</div>

<div id ="modal2" class="modal">
	<h1>Khan</h1>
</div>

<button type="button" id="btn1" data-toggle="tab" href="modal1">modal 1</button>

<button id="btn2" type="button" data-toggle="modal2"> modal 2</button>


<script>
// Get the modal
var modal1 = document.getElementById("modal1");

var modal2 = document.getElementById("modal2");

// Get the button that opens the modal
var btn1 = document.getElementById("btn1");

var btn2 = document.getElementById("btn2");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

var span2 = document.getElementsByClassName("closeSeller")[0];

// When the user clicks the button, open the modal 
btn1.onclick = function() {
  modal1.style.display = "block";
}


btn2.onclick = function() {
  modal2.style.display = "block";
}
// When the user clicks on <span> (x), close the modal

</script>



</body>



</html>