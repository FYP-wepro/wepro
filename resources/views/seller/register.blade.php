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
                      <form method="post" action="{{ route('personal') }}" id="personal" enctype="multipart/form-data">
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
                  <div class="form-group col-lg-6">
                    <label for="title">Pofressenal Title</label>
                    <input type="text" class="form-control" id="pTitle" name="pTitle" placeholder="e.g Professional WordPress developer">
                  </div>
                </div>  
                
                <div class="form-group">
                    <label for="title">Discription</label>
                    <textarea type="text" class="form-control" rows="7" name="discription" id="discription" placeholder="e.g This is EXpert WordPress Developer...."></textarea>
                 </div>-->
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

            
              <div class="form-group col-lg-6">
                  <div class="avatar-edit">
                  <input type='file' id="coverImg" name="coverImg" onchange="readURL2(this);" accept=".png, .jpg, .jpeg" />
                  <label for="imageUpload"></label>
                  <img id="blah" src="https://www.tutsmake.com/wp-content/uploads/2019/01/no-image-tut.png" class="" width="200" height="150"/>
                  </div>
                  <script>
                    function readURL2(input, id) {
                      id = id || '#blah';
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
              </div>  

              </div> 

              <div class="row">
                <div class="form-group col-lg-4">
                    <label for="title">Profile Rate pr Hour</label>
                    <input type="int" class="form-control" name="pRate" placeholder="Hourly rate ">
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
  var coverImg;
  var fullName;
  var pTitle;
  var discription;
  var pRate;
  var sellerId;
  
  $('#personal').ajaxForm({
     
      success:function(data)
      {
        if(data.errors)
        {
          console.log(data.errors);
        }
        if(data.success)
        {
          //console.log(data);
        //coverImg=data.coverImg;
        //rofileImg=data.profileImg;
        //fullName=data.fullName;
        //pTiltle=data.pTiltle;
        //discription=data.discription;
        //pRate=data.pRate;
        //sellerId =data.sellerId;
         $.ajax({
                type: "get",
                url: "{{url('personalSave')}}",
                data:data,
                success: function (data) {
                  console.log(data.success);

                }
            });


        }


 
      }
    });

});
</script>
                    <!-------------------------------------------- step 2 ------------------------------->
                    <div class="tab-pane" role="tabpanel" id="step2">
                        <h3>Professional</h3>
                        <br><br><br>
                        
                      <form action="{{url('/professional')}}"> 
                        <div class="row">
                          <div class="col-lg-6">
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

                              <div id="subCata">
                                      </div>
                                     

                                      <script>
                                        $("#catagory").on("change", function (e) {
                                                  e.preventDefault();
                                                  var catagory=$("#catagory").val();
                                                  //alert(catagory);
                                                  $.ajax({

                                                             type:'GET',

                                                             url:'/wepro/public/ajax',

                                                             data:{catagory:catagory},
                                                            
                                                             

                                                             success:function(data){
                                                               

                                                              //$("#subCata").html(data);
                                                              //$("subCatagory").val(data);
                                                             //console.log(data[0]);



                                                              var obj= JSON.parse(data);
                                                              
                                                                        let catagory_name=[];
                                                                        for (let i=0; i<obj.length; i+=1) {
                                                                         catagory_name.push(obj[i].name);

                                                                         
                                                                        }

                                                                        var checkBoxHtml='';
                                                                        checkBoxHtml += '<br><br><h4 style="margin:20px;">Select sub catagory</h4>'
                                                                        $.each(catagory_name, function(i)
                                                                        {
                                                                          //console.log(catagory_name[i]);
                                                                            
                                                                            

                                                                         checkBoxHtml += '<label><input class="checkbox1" name="checkbox1[]" id="checkbox1['+i+']" type="checkbox" value="'+catagory_name[i]+'">'+catagory_name[i]+'</label>';
                                                                      
                                                                          
                                                                        });
                                                                        $("#subCata").html(checkBoxHtml);

                                                              // console.log(checkBoxHtml);
                                                              //var string = JSON.stringify(data);
                                                                //console.log(string);
                                                               // console.log(data['name']);
                                                                // $.each(data, function(index, element) {


                                                                  //console.log(element.name);
                                                                // });




                                                             }

                                                          });

                                                });

                                      </script>
                                      <br><br>
                                      <button id="addNewBtn" style="background-color: transparent; border: none; cursor: pointer; color: Green;">+ Add More</button>
                          </div>
                          <!------------------------- Add skills List Block ---------------------------->
                          <div class="col-lg-6">
                            <div class="input-group"> 
                            <input class="form-control" type="text" name="skills" id="skills" placeholder="Add Skills">
                            <span class="input-group-addon" id="addSkill">Add</span>

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
                               if(skill!="" && id<11){

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

                        <!-------------------------Add New Block for Main Catagory ------------------------>

                        <div class="row">
                           <div class="col-lg-6" id="addNewBlock">
                              <div id="mainCatagory"></div><span id="delete"></span>
                              <div id="subCata2">
                                      </div>

                       <script>





                         
                          $("#addNewBtn").click(function(e){



                            e.preventDefault();
                            $("#addNewBtn").hide();

                            $("#addNewBlock").show();

                            
                            alert("here");
                            
                          
                            $.ajax({

                                type:'GET',

                                url:'/wepro/public/main',

                                
                                                            
                                                             

                                success:function(data){
                                  var catagoryes = JSON.parse(data);
                                  //console.log(data);
                                  let mainCatagory=[];
                                                                        for (let i=0; i<catagoryes.length; i+=1) {
                                                                         mainCatagory.push(catagoryes[i].name);

                                                                         
                                                                        }
                                 // console.log(mainCatagory);                                      
                                  var dropdownHtml = '';
                                 

                                                                        dropdownHtml += '<select id="addNewCata" name="addNewCata" class="form-control" style="float:left"><option>select main catagory</option>';
                                  $.each(mainCatagory, function(i)
                                                                        {
                                                                          //console.log(catagory_name[i]);
                                                                            
                                                                        
                                                                        dropdownHtml += '<option>'+mainCatagory[i]+'</option>';
                                                                          
                                                                        });
                                                                       
                                                                        //console.log(dropdownHtml);
                                                                        $("#mainCatagory").html(dropdownHtml);
                                                                        var deleteHtml = '<button id="deleteBtn">Delete</button>';
                                                                        $("#delete").html(deleteHtml);

                                        

                                }




                            });


                          });



                        


                       </script> 


                                      <script>
                                        $("body").delegate("#addNewCata", "change", function (e) {
                                                  e.preventDefault();
                                                  var catagory=$("#addNewCata").val();
                                                  //alert(catagory);
                                                  $.ajax({

                                                             type:'GET',

                                                             url:'/wepro/public/ajax',

                                                             data:{catagory:catagory},
                                                            
                                                             

                                                             success:function(data){
                                                               

                                                              //$("#subCata").html(data);
                                                              //$("subCatagory").val(data);
                                                             //console.log(data[0]);



                                                              var obj= JSON.parse(data);
                                                              
                                                                        let catagory_name=[];
                                                                        for (let i=0; i<obj.length; i+=1) {
                                                                         catagory_name.push(obj[i].name);

                                                                         
                                                                        }

                                                                        var checkBoxHtml='';
                                                                        checkBoxHtml += '<br><br><h4 style="margin:20px;">Select sub catagory</h4>'
                                                                        $.each(catagory_name, function(i)
                                                                        {
                                                                          //console.log(catagory_name[i]);
                                                                            
                                                                            

                                                                         checkBoxHtml += '<label><input class="checkbox2" type="checkbox" value="'+catagory_name[i]+'">'+catagory_name[i]+'</label>';
                                                                      
                                                                          
                                                                        });
                                                                        $("#subCata2").html(checkBoxHtml);
                                                                        //  console.log(checkBoxHtml);
                                                              //var string = JSON.stringify(data);
                                                                //console.log(string);
                                                               // console.log(data['name']);
                                                                // $.each(data, function(index, element) {


                                                                  //console.log(element.name);
                                                                // });




                                                             }

                                                          });

                                                });

                              $("body").delegate("#deleteBtn", "click", function (e) {
                              e.preventDefault();
                              $("#addNewBlock").hide();
                              $("#addNewBtn").show();

                             

                            });


                                      </script>
                            </div>

                            <div class="col-lg-6"></div>
                          
                        </div>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                            <li><button type="button" id="step2_submit" class="btn btn-primary next-step">Save and continue</button></li>
                            <script>

                              $("body").delegate("#step2_submit", "click", function () {
                                 var mainCata1 = $("#catagory").val();
                                // console.log(mainCata1);
                                 
                                   var mainCata2=$("#addNewCata").val();
                                   //console.log(mainCata2);

                                  
            
                                    var checkbox1 = [];
                                     $.each($('.checkbox1:checked'), function() {
                                     checkbox1.push($(this).val()); 
                                     });
                                    //console.log(checkbox1);

                                    var checkbox2 = [];
                                     $.each($('.checkbox2:checked'), function() {
                                     checkbox2.push($(this).val());
                                    
                                     });

                                      //console.log(checkbox2);
                                     //console.log(skill_arr);
                                     

                                     $.ajax({
                                      url:'{{url('/professional')}}',
                                      data:{mainCata1:mainCata1,mainCata2:mainCata2,checkbox1:checkbox1,checkbox2:checkbox2,skill_arr:skill_arr},

                                    success:function(data){
                                      top.location.href="{{url('/S_dashboard')}}";
                                      //alert(data);
                                    }
                                     });
                                  

                                    




                              });

                            </script>

                        </ul>
                      </form>
                    </div>
                    <!--------------------------------------- Step 3 ----------------------------------------------------->
                    <div class="tab-pane" role="tabpanel" id="step3">
                        <h3>Step 3</h3>
                        <p>This is step 3</p>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                            <li><button type="button" class="btn btn-default next-step">Skip</button></li>
                            <li><button type="button" class="btn btn-primary btn-info-full next-step">Save and continue</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="complete">
                        <h3>Complete</h3>
                        <p>You have successfully completed all steps.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            
        </div>
    </section>
   </div>
</div>
</body>
</html>