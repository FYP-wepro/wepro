<!DOCTYPE html>
<html>
<head>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="http://malsup.github.com/jquery.form.js"></script>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

  <!-- Font-->
  <link rel="stylesheet" type="text/css" href="{{asset('/formWizard/css/style.css')}}">
  

  <style>
    .skill_li{
      float:left;
      margin-top: 10px;
    margin-right: 30px;
    display: block;
    border: 1px solid #ccc;
    border-radius: 12px;
    padding: 5px 18px;
    background-color: #eee;
    }
  </style>



  

<script>
  $(document).ready(function () {
    //Initialize tooltips
    $('.nav-tabs > li a[title]').tooltip();
    
    //Wizard
    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

        var $target = $(e.target);
    
        if ($target.parent().hasClass('disabled')) {
            return false;
        }
    });

    $(".next-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        $active.next().removeClass('disabled');
        nextTab($active);

    });
    $(".prev-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        prevTab($active);

    });
});

function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
}
</script>
         
     

</head>
<body>

  <div class="container">
  <div class="row">
    <section>
        <div class="wizard">
            <div class="wizard-inner">
                <div class="connecting-line"></div>
                <ul class="nav nav-tabs" role="tablist">

                    <li role="presentation" class="active">
                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-folder-open"></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-pencil"></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-picture"></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-ok"></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>

            
                <div class="tab-content">

                  <!-------------------------------------- step 1 --------------------------------------->
                    <div class="tab-pane active" role="tabpanel" id="step1">
                      <form method="post" action="{{ url('Buyerpersonal') }}" id="personal" enctype="multipart/form-data">
                        @csrf
                    <div class="form-group">
                    <h2>
                            <span class="step-icon"><i class="zmdi zmdi-account"></i></span>
                            <span class="step-text">Personal</span>
                            </h2>
                  </div>
                  
                <div class="row">  
                  <div class="form-group col-lg-6">
                    <label for="fname">Full Name:</label>
                    <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Full Name">
                  </div>
                  
                </div>  
                
                <div class="form-group">
                    <label for="title">Discription</label>
                    <textarea type="text" class="form-control" rows="7" name="discription" id="discription" placeholder="e.g This is EXpert WordPress Developer...."></textarea>
                 </div>
                 <div class="row">
                 <div class="form-group col-lg-6">
                  <label class="form-row-inner">
                    <label for="title">Profile Image</label>
                                          <img src="http://via.placeholder.com/150x150" id="output" style="border-radius:50%; width: 100px  ;height: 100px; cursor: pointer;"/>
                                <input type='file' id="profileImg" name="profileImg" onchange="readURL1(this);" accept=".png, .jpg, .jpeg" style="display: none;" />
                                  
                                  <script>
                    function readURL1(input, id) {
                      id = id || '#output';
                      if (input.files && input.files[0]) {
                          var reader = new FileReader();
                   
                          reader.onload = function (e) {
                              $(id)
                                      .attr('src', e.target.result)
                                      .width(200)
                                      .height(150);
                          };
                   
                          reader.readAsDataURL(input.files[0]);
                      }
                   }
              </script> 
                      
                      

                               </label>

                 </div>

            
              

              </div> 

              <div class="row">
                <div class="form-group col-lg-4">
                    <label for="title">Country</label>
                    <input type="text" class="form-control" name="country" placeholder="Hourly rate ">
                  </div>
              </div>


                 
                  
           

                        <ul class="list-inline pull-right">
                            <li><button type="submit" class="btn btn-primary next-step" id="step1_submit">Save and continue</button></li>
                        </ul>
                         </form>
                         
                    </div>
                    <script>
$(document).ready(function(){
  var profileImg;
  var fullName;
  var discription;
  var country;
  var buyerId;
  
  $('#personal').ajaxForm({

   
     
      success:function(data)
      {
        if(data.errors)
        {
          console.log(data.errors);
        }
        if(data.success)
        {
         
        top.location.href="{{url('/B_dashboard')}}";

        }


 
      }
    });

});
</script>
                    <!-------------------------------------------- step 2 ------------------------------->
                  
        </div>
    </section>
   </div>
</div>
</body>
</html>