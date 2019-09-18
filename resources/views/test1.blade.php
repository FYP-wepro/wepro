

<!--Modal: Login / Register Form-->
<div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog cascading-modal" role="document">
    <!--Content-->
    <div class="modal-content">

      <!--Modal cascading tabs-->
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

        <!-- Tab panels -->
        <div class="tab-content">
          <!--Panel 7-->
          <div class="tab-pane fade in show active" id="panel7" role="tabpanel">

            <!--Body-->
            <div class="modal-body mb-1">
              <div class="md-form form-sm mb-5">
                <i class="fas fa-envelope prefix"></i>
                <input type="email" id="modalLRInput10" class="form-control form-control-sm validate">
                <label data-error="wrong" data-success="right" for="modalLRInput10">Your email</label>
              </div>

              <div class="md-form form-sm mb-4">
                <i class="fas fa-lock prefix"></i>
                <input type="password" id="modalLRInput11" class="form-control form-control-sm validate">
                <label data-error="wrong" data-success="right" for="modalLRInput11">Your password</label>
              </div>
              <div class="text-center mt-2">
                <button class="btn btn-info">Log in <i class="fas fa-sign-in ml-1"></i></button>
              </div>
            </div>
            <!--Footer-->
            <div class="modal-footer">
              <div class="options text-center text-md-right mt-1">
                <p>Not a member? <a href="#" class="blue-text">Sign Up</a></p>
                <p>Forgot <a href="#" class="blue-text">Password?</a></p>
              </div>
              <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
            </div>

          </div>
          <!--/.Panel 7-->

          <!--Panel 8-->
          <div class="tab-pane fade" id="panel8" role="tabpanel">

            <!--Body-->
            <div class="modal-body">
              <div class="md-form form-sm mb-5">
                <i class="fas fa-envelope prefix"></i>
                <input type="email" id="modalLRInput12" class="form-control form-control-sm validate">
                <label data-error="wrong" data-success="right" for="modalLRInput12">Your email</label>
              </div>

              <div class="md-form form-sm mb-5">
                <i class="fas fa-lock prefix"></i>
                <input type="password" id="modalLRInput13" class="form-control form-control-sm validate">
                <label data-error="wrong" data-success="right" for="modalLRInput13">Your password</label>
              </div>

              <div class="md-form form-sm mb-4">
                <i class="fas fa-lock prefix"></i>
                <input type="password" id="modalLRInput14" class="form-control form-control-sm validate">
                <label data-error="wrong" data-success="right" for="modalLRInput14">Repeat password</label>
              </div>

              <div class="text-center form-sm mt-2">
                <button class="btn btn-info">Sign up <i class="fas fa-sign-in ml-1"></i></button>
              </div>

            </div>
            <!--Footer-->
            <div class="modal-footer">
              <div class="options text-right">
                <p class="pt-1">Already have an account? <a href="#" class="blue-text">Log In</a></p>
              </div>
              <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
            </div>
          </div>
          <!--/.Panel 8-->
        </div>

      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!--Modal: Login / Register Form-->

<div class="text-center">
  <a href="" class="btn btn-default btn-rounded my-3" data-toggle="modal" data-target="#modalLRForm">Launch
    Modal LogIn/Register</a>
</div>













































//////////////////////////////////////////


<div class="form-group col-md-4" style="max-width: 100%;height: 30px;">
                       <h4>Select Main catagory</h4>
                       <button id="addNew"></button>
                       <div id="mainCatagory"></div>



                       <script>
                         $(document).ready(function(){
                          $("#addNew").click(function(e){

                            e.preventDefault();

                          
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
                                  dropdownHtml += '<div class="col-lg-6">';

                                                                        dropdownHtml += '<select id="addNewCata" name="addNewcata" class="form-control" style="float:left"><option disabled>select main catagory</option>';
                                  $.each(mainCatagory, function(i)
                                                                        {
                                                                          //console.log(catagory_name[i]);
                                                                            
                                                                        
                                                                        dropdownHtml += '<option>'+mainCatagory[i]+'</option>';
                                                                          
                                                                        });
                                                                        dropdownHtml += ' </div>';
                                                                        //console.log(dropdownHtml);
                                                                        $("#mainCatagory").html(dropdownHtml);
                                        

                                }
                            });


                          });


                         });


                       </script> 
                       <div class="row">
                        <div class="col-lg-6" id="subCata2"></div>
                        </div>
                                     

                                      <script>
                                        $('body').delegate("#addNewCata").on("change", function (e) {
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
                                                                            
                                                                            checkBoxHtml += '<div class="col-lg-6">';

                                                                         checkBoxHtml += '<label><input type="checkbox" value="'+catagory_name[i]+'">'+catagory_name[i]+'</label>';
                                                                      
                                                                          checkBoxHtml += ' </div>';
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

                                     
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
</script>
                    
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
                        </div>

                                      <!------------- sub catagory --------------------->

                                      <div class="row" id="subCata">
                                      </div>
                                     

                                      <script>
                                        $('body').delegate("#catagory").on("change", function (e) {
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
                                                                            
                                                                            checkBoxHtml += '<div class="col-lg-6">';

                                                                         checkBoxHtml += '<label><input type="checkbox" value="'+catagory_name[i]+'">'+catagory_name[i]+'</label>';
                                                                      
                                                                          checkBoxHtml += ' </div>';
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
