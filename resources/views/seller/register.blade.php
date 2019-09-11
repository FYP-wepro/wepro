<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Wizard-v3</title>
  <!-- Mobile Specific Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <!-- Font-->
  <link rel="stylesheet" type="text/css" href="{{asset('/formWizard/css/roboto-font.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('/formWizard/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css')}}">
  <!-- datepicker -->
  <link rel="stylesheet" type="text/css" href="{{asset('/formWizard/css/jquery-ui.min.css')}}">
  <!-- Main Style Css -->
    <link rel="stylesheet" href="{{asset('/formWizard/css/style.css')}}"/>


    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
  <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}"/>
  <link rel="stylesheet" href="{{asset('css/flaticon.css')}}"/>
  <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}"/>
  <link rel="stylesheet" href="{{asset('css/style.css')}}"/>

</head>
<body>
  <h1 style="margin:50px">Wepro</h1>
  <hr>
  <div class="page-content" style="margin-top:-118px">
    <div class="wizard-v3-content">
      <div class="wizard-form">
        <div class="wizard-header">
          <h3 class="heading">Sign Up Your User Account</h3>
          <p>Fill all form field to go next step</p>
        </div>
            <form class="form-register" action="#" method="post">
              <div id="form-total">


                <!-- SECTION 1 -->
                  <h2>
                    <span class="step-icon"><i class="zmdi zmdi-account"></i></span>
                    <span class="step-text">Personal</span>
                  </h2>
                  <section>
                      <div class="inner">
                        <h3>Personal Information</h3>
                        <br>
                        
                      <div class="form-group col-md-6" style="float: right;">
                        <input type="fname" class="form-control" name="fname" placeholder="Full Name">
                      </div>

                      <br>
    
                <div class="form-row">
                  <div class="form-holder form-holder-2">

                    <label class="form-row-inner">
                      
                      <img src="http://via.placeholder.com/150x150" id="output" style="border-radius:50%; width: 100px  ;height: 100px; cursor: pointer;margin-top: -48px"/>
                      <input type="file" id="myfile" style="display:none" accept="image/*" name="image" id="file" onchange="loadFile(event)"/>
                      
                      
                        

                      <script>
                      var loadFile = function(event) {
                      var image = document.getElementById('output');
                     var source; 
                     image.src = URL.createObjectURL(event.target.files[0]);
                     source= image.src;
                     alert(source);
                      };
                      </script>
                                             <span class="border"></span>
                    </label>
                  </div>
                </div>

                
                <div class="form-row">
                  <div class="form-holder form-holder-2">
                    <div class="form-group col-md-12" >
                      <label for="description">Description:</label>
                      <textarea class="form-control" rows="5" name="description"></textarea>
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-holder form-holder-2">
                    <div class="form-group col-md-12" >
                      
                      <input type="text" name="language" placeholder="Add Languages">
                    </div>
                  </div>
                </div>
              </div>
                  </section>


            <!-- SECTION 2 -->
                  <h2>
                    <span class="step-icon"><i class="zmdi zmdi-lock"></i></span>
                    <span class="step-text">Professional</span>
                  </h2>
                  <section>
                    <h6>Select Main Catagory</h6>
                    <br>
                    <br>
                     <!-- <div class="inner">
                        <h3>Professional Information:</h3>
                <div class="form-row">
                  
                   
                     <div class="form-group col-md-4" style="max-width: 100%;height: 30px;">
                       <label for="inputState">Select Main catagory</label>
                         <?php
    
                         //echo '<select name="catagory" class="form-control" style="float:right;">';

                         ?>

                    // Open your drop down box
                     @foreach($catagoryes as $catagory)

                     <?php // echo '<option>' .$catagory->name. '</option>';

                       ?>

                       @endforeach
                      <?php   

                   // echo '</select>';

                    ?>
                      </div>
                  
                  </div>
-->
                  <!-- Default checked -->

  
               <!-- </div> -->
 @foreach($catagoryes as $catagory)
 <div class="form-check form-check-inline">             
<input type="checkbox" name="hob[]" value="<?php echo $catagory->name?>"><?php echo $catagory->name;?>
</div>
@endforeach



                  </section>
                  <!-- SECTION 3 -->
                  <h2>
                    <span class="step-icon"><i class="zmdi zmdi-card"></i></span>
                    <span class="step-text">Payment</span>
                  </h2>
                  <section>
                      <div class="inner">
                        <h3>Payment Information:</h3>
                        <div class="form-row">
                          <div class="form-holder form-holder-2">
                            <input type="radio" name="radio1" id="pay-1" value="pay-1" checked>
                            <label class="pay-1-label" for="pay-1"><img src="images/wizard_v3_icon_1.png" alt="pay-1">Credit Card</label>
                    <input type="radio" name="radio1" id="pay-2" value="pay-2">
                    <label class="pay-2-label" for="pay-2"><img src="images/wizard_v3_icon_2.png" alt="pay-2">Paypal</label>
                          </div>
                        </div>
                        <div class="form-row">
                  <div class="form-holder form-holder-2">
                    <label class="form-row-inner">
                      <input type="text" class="form-control" id="holder" name="holder" required>
                      <span class="label">Holder Name*</span>
                        <span class="border"></span>
                    </label>
                  </div>
                </div>
                        <div class="form-row">
                  <div class="form-holder">
                    <label class="form-row-inner">
                      <input type="text" class="form-control" id="card" name="card" required>
                      <span class="label">Card Number*</span>
                      <span class="border"></span>
                    </label>
                  </div>
                  <div class="form-holder">
                    <label class="form-row-inner">
                      <input type="text" class="form-control" id="cvc" name="cvc" required>
                      <span class="label">CVC*</span>
                      <span class="border"></span>
                    </label>
                  </div>
                </div>
                        <div class="form-row form-row-date form-row-date-1">
                  <div class="form-holder form-holder-2">
                    <label for="date" class="special-label">Expiry Date*:</label>
                    <select name="month_1" id="month_1">
                      <option value="Month" disabled selected>Month</option>
                      <option value="Feb">Feb</option>
                      <option value="Mar">Mar</option>
                      <option value="Apr">Apr</option>
                      <option value="May">May</option>
                    </select>
                    <select name="year_1" id="year_1">
                      <option value="Year" disabled selected>Year</option>
                      <option value="2017">2017</option>
                      <option value="2016">2016</option>
                      <option value="2015">2015</option>
                      <option value="2014">2014</option>
                      <option value="2013">2013</option>
                    </select>
                  </div>
                </div>
              </div>
                  </section>
                  <!-- SECTION 4 -->
                  <h2>
                    <span class="step-icon"><i class="zmdi zmdi-receipt"></i></span>
                    <span class="step-text">Confirm</span>
                  </h2>
                  <section>
                      <div class="inner">
                        <h3>Confirm Details:</h3>
                        <div class="form-row table-responsive">
                  <table class="table">
                    <tbody>
                      <tr class="space-row">
                        <th>Full Name:</th>
                        <td id="fullname-val"></td>
                      </tr>
                      <tr class="space-row">
                        <th>Email Address:</th>
                        <td id="email-val"></td>
                      </tr>
                      <tr class="space-row">
                        <th>Phone Number:</th>
                        <td id="phone-val"></td>
                      </tr>
                      <tr class="space-row">
                        <th>User:</th>
                        <td id="username-val"></td>
                      </tr>
                      <tr class="space-row">
                        <th>Gender:</th>
                        <td id="gender-val"></td>
                      </tr>
                      <tr class="space-row">
                        <th>Address:</th>
                        <td id="address-val"></td>
                      </tr>
                      <tr class="space-row">
                        <th>Card Type:</th>
                        <td id="pay-val">Credit Card</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
                  </section>
              </div>
            </form>
      </div>
    </div>
  </div>
  <script src="{{asset('/formWizard/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('/formWizard/js/jquery.steps.js')}}"></script>
  <script src="{{asset('/formWizard/js/jquery-ui.min.js')}}"></script>
  <script src="{{asset('/formWizard/js/main.js')}}"></script>
</body>
</html>