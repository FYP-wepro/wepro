<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/flaticon.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/style.css')}}"/>
	<title></title>
</head>
<body>
<div class="container" style="margin-top: 80px">
	<form action="{{url('/addSubCatagoryInsert')}}">
  <div class="form-row">
  	
    <div class="form-group col-md-6">
      <label for="inputEmail4">name Subcatagory</label>
      <input type="Text" class="form-control" name="subcatagory" placeholder="subcatagory name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Image Url</label>
      <input type="text" class="form-control" name="imgurl" placeholder="Imgage Url">
    </div>
  </div>
  
  
  <div class="form-row">
    
    <div class="form-group col-md-4">
      <label for="inputState">Select Main catagory</label>
     <?php
    
    	echo '<select name="catagory" class="form-control">';

    	?>

    	 // Open your drop down box
    	@foreach($catagoryes as $catagory)

  	<?php  echo '<option>' .$catagory->name. '</option>';

  	?>

		@endforeach
<?php		

echo '</select>';

?>
    </div>
    
  </div>
  
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>

</div>

</body>
</html>