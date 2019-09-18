<!DOCTYPE html>
<html>
<head>


  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

  <!-- Font-->
  <link rel="stylesheet" type="text/css" href="{{asset('/formWizard/css/style.css')}}">
  

  



  

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

            <form role="form">
                <div class="tab-content">

                  <!-------------------------------------- step 1 --------------------------------------->
                    <div class="tab-pane active" role="tabpanel" id="step1">
                      <form action="/action_page.php">
                    <div class="form-group">
                    <h2>
                            <span class="step-icon"><i class="zmdi zmdi-account"></i></span>
                            <span class="step-text">Personal</span>
                            </h2>
                  </div>
                <div class="row">  
                  <div class="form-group col-lg-6">
                    <label for="fname">Full Name:</label>
                    <input type="text" class="form-control" name="fname" placeholder="Full Name">
                  </div>
                  <div class="form-group col-lg-6">
                    <label for="title">Pofressenal Title</label>
                    <input type="text" class="form-control" name="ptiltle" placeholder="e.g Professional WordPress developer">
                  </div>
                </div>  
                
                <div class="form-group">
                    <label for="title">Discription</label>
                    <textarea type="text" class="form-control" rows="7" name="ptiltle" placeholder="e.g This is EXpert WordPress Developer...."></textarea>
                 </div>
                 <div class="row">
                 <div class="form-group col-lg-6">
                  <label class="form-row-inner">
                    <label for="title">Profile Image</label>
                                          <img src="http://via.placeholder.com/150x150" id="output" style="border-radius:50%; width: 100px  ;height: 100px; cursor: pointer;"/>
                                <input type="file" id="profile" style="display:none" accept="image/*" name="image" id="file" onchange="loadFile(event)"/>
                      
                      
                        

                                <script>
                                var loadFile = function(event) {
                                var image = document.getElementById('output');
                               var source; 
                               image.src = URL.createObjectURL(event.target.files[0]);
                               source= image.src;
                               alert(source);
                                };
                                </script>

                               </label>

                 </div>


                 <div class="form-group col-lg-6">
                  <input type='file' onchange="readURL(this);" />
                     <img id="blah" src=""http://via.placeholder.com/150x150" id="output" alt="upload cover Image" />
                     <script>
                      function readURL(input) {
                          if (input.files && input.files[0]) {
                              var reader = new FileReader();

                              reader.onload = function (e) {
                                  $('#blah')
                                      .attr('src', e.target.result)
                                      .width(200)
                                      .height(200);

                                      
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
                  <div class="form-group col-lg-4">
                    <label for="title">Currency</label>
                    <select name="currency">
                      <option>US Dollar</option>
                      <option>Chinese</option>
                      <option>Pound</option>
                    </select>
                  </div>
                   <div class="form-group col-lg-4">
                    <label for="title">Country</label>
                    <select name="currency">
                      <option>PAkistan </option>
                      <option>Bangladesh</option>
                      <option>Srilanka</option>
                    </select>
                  </div>
                  
              </div>


                 
                  
           

                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-primary next-step" id="firstNext">Save and continue</button></li>
                        </ul>
                         </form>
                    </div>

                    <!-------------------------------------------- step 2 ------------------------------->
                    <div class="tab-pane" role="tabpanel" id="step2">
                        <h3>Professional</h3>
                        <br><br><br>
                        
                      <form> 
                        <div class="row">
                          <div class="col-lg-6">
                            <?php
                      
                                           echo '<select id="catagory" name="catagory" class="form-control" style="float:right;"><option disabled>select main catagory</option>';

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
                                                                            
                                                                            

                                                                         checkBoxHtml += '<label><input type="checkbox" value="'+catagory_name[i]+'">'+catagory_name[i]+'</label>';
                                                                      
                                                                          
                                                                        });
                                                                        $("#subCata").html(checkBoxHtml);
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

                                      </script>
                                      <br><br>
                                      <button id="addNewBtn" style="background-color: transparent; border: none; cursor: pointer; color: Green;">+ Add More</button>
                          </div>
                          <!------------------------- Add New Block ---------------------------->
                          <div class="col-lg-6" id="addNewBlock">
                              <div id="mainCatagory"></div><span id="delete"></span>
                              <div id="subCata2">
                                      </div>

                       <script>





                         $(document).ready(function(){
                          $("#addNewBtn").click(function(e){



                            e.preventDefault();
                            $("#addNewBtn").hide();

                            

                            
                          
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
                                  console.log(mainCatagory);                                      
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
                                                                            
                                                                            

                                                                         checkBoxHtml += '<label><input type="checkbox" value="'+catagory_name[i]+'">'+catagory_name[i]+'</label>';
                                                                      
                                                                          
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
                             

                            });


                                      </script>
                                     
                                      

                          </div>
                        
                        </div>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                            <li><button type="button" class="btn btn-primary next-step">Save and continue</button></li>
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
            </form>
        </div>
    </section>
   </div>
</div>
</body>
</html>