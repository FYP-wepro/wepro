<!DOCTYPE html>
<html>
<head>
   <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

  
       
  	
	
<title></title>
</head>
<body>
  @if(Session::has('buyerId'))
<nav class="navbar navbar-default" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="container">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">Wepro</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
      
      
    </ul>
    <div class="col-sm-3 col-md-3">
        <form class="navbar-form" role="search">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search" name="q">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>
        </div>
        </form>
    </div>
    <ul class="nav navbar-nav navbar-right">
       <li><a href="{{url('/buyerRequests')}}">Purposal</a></li>
      <li><a href="#">Active Jobs</a></li>
      <li><a href="#">Message</a></li>
      <li><a href="{{url('/jobRequestForm')}}">Post Request</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">BuyerName<b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">Profile</a></li>
          <li class="divider"></li>
          <li><a href="{{url('/buyerLogout')}}">logout</a></li>
        </ul>
      </li>
    </ul>
  </div><!-- /.navbar-collapse -->
  </div>
</nav>
<div class="container" style="margin-top: 50px">
<form action="{{url('/requestForm')}}">

    <div class="form-group col-md-12">
      <label for="inputEmail4">Job Title</label>
      <input type="text" class="form-control" name="jobTitle" id="jobTitle" placeholder="Job Title">
    </div>
    
    		 <div class="form-group col-md-12">
                    <label for="title">Discription</label>
                    <textarea type="text" class="form-control" rows="7" name="discription" id="discription" placeholder="e.g Need for EXpert WordPress Developer...."></textarea>
              </div>
 
  
  <div class="form-row">
  	<div class="form-group col-md-6">
  		<label for="title">Budget</label>
    <div class="input-group mb-3">
    	 
  <div class="input-group-prepend">
    <span class="input-group-text">$</span>
  </div>

  <input type="number" class="form-control" name="budget" id="budget" aria-label="Amount (to the nearest dollar)">
  <div class="input-group-append">
    <span class="input-group-text">.00</span>
  </div>
</div>
</div>
    
  

  	<div class="form-group col-md-6">
  		<label for="title">Catagory</label>
                            <?php
                      
                                           echo '<select id="catagory" name="catagory" class="form-control" style="float:right;"><option selected disabled>select main catagory</option>';

                                           ?>

                                    
                                       @foreach($catagoryes as $catagory)

                                       <?php echo '<option>' .$catagory->name. '</option>';

                                         ?>

                                         @endforeach
                                        <?php   

                                     echo '</select>';

                              ?>


                          </div>

                          </div>
<div class="row">
 <div class="col-md-6">
                            <div class="input-group"> 
                            <input class="form-control" type="text" name="skills" id="skills" placeholder="Add Skills">
                            <span  class="input-group-text" id="addSkill">Add</span>

                          </div>
                            <div id="skillList"></div>
                            <script>
                              var id = 0;
                              var skill_arr =[];
                              $("body").delegate("#addSkill", "click", function(e){
                                e.preventDefault();
                               var skill = $("#skills").val();
                               skill_arr[id]=skill;
                                id++;
                               var listHtml ='';
                               if(skill!="" && id<6){

                               listHtml += '<li class="skill_li" id="skill_id['+id+']">'+skill+'</li>';
                               $("#skillList").append(listHtml);
                               $("#skills").val('');
                             }
                             else{
                              alert("Please Add Skill");
                             }
                              
                              //console.log(skill_arr);

                            });

                            </script>
                          </div>
</div>
                          <br>

  
  <button type="button" class="btn btn-primary" id="requestForm">Submit</button>

  <script>

  $("body").delegate("#requestForm", "click", function () {
                                  var jobTitle = $("#jobTitle").val();
                                  var discription= $("#discription").val();
                                  var budget=$("#budget").val();
                                  var mainCata1 = $("#catagory").val();
                                // console.log(mainCata1);
                                                                      //console.log(checkbox2);
                                     //console.log(skill_arr);
                                     

                                     $.ajax({
                                      url:'{{url('/requestForm')}}',
                                      data:{jobTitle:jobTitle,discription:discription,budget:budget,mainCata1:mainCata1,skill_arr:skill_arr},

                                    success:function(data){
                                      console.log(data.catagory);
                                      top.location.href="{{url('/B_dashboard')}}";
                                      //alert(data);
                                    }
                                     });
                                  

                                    




                              });

                            </script>
</form>

</div>
@else
<script>
 top.location.href="{{url('/')}}"
</script>
@endif
</body>
</html>