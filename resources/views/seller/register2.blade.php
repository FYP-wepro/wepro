<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> 
	<script>
              	$(document).ready(function(){  
              		$("#form2").hide();

              		$("#next1").click(function(){  
        $("#form1").hide();
        $('#form2').show();
    });  
   
				});  
        

              	
              </script>
</head>
<body>

<form id="form1">
		<section>
                      
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
              <button id="next1">next</button>
                  </section>
      </form>        

	<form id="form2">
                      
               <h3>Professional</h3>
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
              <button id="next2">next</button>
              <button id="privi1">privious</button>
                 
              </form>

              


</body>
</html>