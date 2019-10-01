<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Stylesheets -->
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/flaticon.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/style.css')}}"/>
</head>
<body>


	


<h1 style="text-align:center;visibility: hidden;"id="cataID">{{$subCatagoryes[0]->mainCatagoryID}}</p>
	<h1 id="heading" style="text-align: center; font-size: 50px; margin-top: 100px "></h1>
	<p style="text-align: center; font-size: 25px;">A single Place, Millions Of telent</p>


<div class="row">
	<div class="col-lg-3" style="margin-left:30px;margin-top: 10px;">
		<div id="sidebarName" style="font-size: 20px;"></div>
		@foreach($subCatagoryes as $subCatagory)
		<ul>
			<a href="#"><li>{{$subCatagory->name}}</li></a>
		</ul>
		@endforeach

	</div>

@foreach($subCatagoryes as $subCatagory)
	<a href="/wepro/public/showSeller/{{$subCatagory->id}}">
	
		<div class="col-lg-4 col-md-6 mb-4" style="max-width: 24.333333%">
            <div class="card" style="width: 20rem; margin-left: 5px">
              <img class="card-img-top" src="<?php echo $subCatagory->src; ?>" alt="">
              <div class="card-body">
    					
    					<h6 style="text-align: center;">{{$subCatagory->name}}</h6>
  				</div>
              
            </div>
          </div>
        
      </a>  
@endforeach



</div>

<script>
	$(document).ready(function(){
	var cataID=$("#cataID").html();
	
	 $.ajax({

                                                             type:'GET',

                                                             url:'/wepro/public/getName',

                                                             data:{cataID:cataID},
                                                            
                                                             

                                                             success:function(data){
                                                             var catagoryes = JSON.parse(data);
                                                             //console.log(catagoryes.name);
                                                            //var heading ='<h1 style="font-size: 50px">'+catagoryes.name+'<h1>';
                                                             $("#heading").html(catagoryes.name);
                                                             $("#sidebarName").html(catagoryes.name);
                                                             }

                                                          });

	});
</script>

</body>
</html>