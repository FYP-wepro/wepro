<!DOCTYPE html>
<html>
<head>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}"/>
	<title></title>
</head>
<body>
	<div class="container" style="margin-top: 50px">
<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Job Title</label>
      <input type="text" class="form-control" id="jobTitle" placeholder="Job Title">
    </div>
    <div class="form-group col-md-6">
    <label for="exampleFormControlSelect1">select Level</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Entry level</option>
      <option>intermediate</option>
      <option>Expert</option>
    </select>
  </div>
  </div>
  <div class="form-group col-md-6">
    <label for="exampleFormControlSelect1">select Type Of Project</label>
    <select class="form-control" id="jobType" name="jobType">
    	<option selected disabled>Select Type of Job</option>
      <option>Fixed-Price</option>
      <option>Hourly</option>
     </select>
     <script>
                                        $("#jobType").on("change", function (e) {
                                                  e.preventDefault();
                                                  var type=$("#jobType").val();
                                                  if(type=='Fixed-Price'){
                                                  	var priceHtml ='<div class="form-group col-md-6">';
                                                  	priceHtml += '<label for="budget">Est.Budget</label>';
                                                  	priceHtml += '<input type="number" class="form-control" id="jobTitle" placeholder="Est. Budget"></div>';


                                                  	$('#price').html(priceHtml);
                                                  	$('#hourlyRate').html('');
                                                  }
                                                  else if(type=='Hourly'){
                                                  	var priceHtml ='<div class="row"><div class="form-group col-md-6">';
                                                  	priceHtml += '<label for="budget">Est.Time</label>';
                                                  	priceHtml += '<input type="number" class="form-control" id="jobTitle" placeholder="Est. Time"></div>';

                                                  	var rate ='<div class="form-group col-md-6">';
                                                  	rate += '<label for="budget">Hourly Rate</label>';
                                                  	rate += '<input type="number" class="form-control" id="hourlyRate" placeholder="Hourly rate"></div></div>';


                                                  	$('#price').html(priceHtml);
                                                  	$('#hourlyRate').html(rate);

                                                  }
                                                  else
                                                  {
                                                  	alert('invalid');
                                                  }
                                                  });
                                              </script>


                                                         
  </div>

  <span id="price"></span>
  <div id="hourlyRate"></div>
  
  
   
                <div class="form-group">
                    <label for="title">Discription</label>
                    <textarea type="text" class="form-control" rows="7" name="discription" id="discription" placeholder="e.g Need for EXpert WordPress Developer...."></textarea>
                 </div>
 
  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>
  
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
</div>
</body>
</html>