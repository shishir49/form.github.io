<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<style type="">
    html{
      //background: url('bak2.jpg');
      //background-repeat: repeat;
      background: white;
    }
		body{
			margin:auto;
		}
	.top{
		background: url('back3.jpg');
		padding: 5px;
    z-index: 2;
	}
	.heading{
		//font-family: TitlingGothicFBComp Standard Medium,sans-serif;
    font-family: Cambria,Helvetica,Arial,sans-serif;
		color: red;
	}

	.p1{
		width: 50%;
		font-size: 18px;
    //font-family: Cambria,Helvetica,Arial,sans-serif;
	}

	select{
		cursor: pointer;
		//background: #f0efee;
	}

	form{
		width: 90%;
		padding-left: 10%;
    background: #f0efee;
	}

  td{
    padding: 5px;
    padding-right: 65px;
  }

	
  .form-control{
    //border:1px solid gray;
  }
	label{
		font-size: 18px;
    //font-family: Cambria,Helvetica,Arial,sans-serif;
	}
	textarea{
		background: #f0efee;
	}
	.form-control{
		//font-family: GT-America-Compressed,Helvetica,Arial,sans-serif;
    font-family: Cambria,Helvetica,Arial,sans-serif;
		
	}

	.bootstrap-iso .form-control:focus{border-color: red;  box-shadow: none; -webkit-box-shadow: none;} 
    .bootstrap-iso .has-error .form-control:focus{box-shadow: none; -webkit-box-shadow: none;}

    .btn .btn-danger{
    	background: #dc1c23!important;
    }

    .col-md-12{
      padding-top: 5%;
      //background: white;
      width: 70%; 
      margin-left: 15%;
      box-shadow: 0px 0px 10px black;
      border-radius: 10px 10px 10px 10px;
      background: #f0efee;
      z-index: 0;
    }

#dragDrop{
  height: 60px;
  border:2px dashed gray;
  cursor: pointer;
}


/*CHECKBOX*/

.container {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  width: 200px;
  cursor: pointer;
  font-size: 15px;
  font-weight: normal;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default checkbox */
.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: white;
  border: 1px solid #d2cbcb;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.container input:checked ~ .checkmark {
  background-color: red;
}
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.container input:checked ~ .checkmark:after {
  display: block;
}

/* Style the checkmark/indicator */
.container .checkmark:after {
  left: 9px;
  top: 5px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}

.val{
  color: red;
  font-size: 25px;
  width: 10px;
  float: right;
  margin-left: 20px;
   
}

.btn-danger{
  background: #ff0000;
}

</style>
</head>


<body>
   <center>
   	  <div class="top">
   	  	<h1 class="heading">REQUEST A QUOTE</h1>

   	  <p class="p1">For an obligation free quote, complete what you can below. If you don't know or are unsure of any section, leave blank or make a comment in boxes provided
      A DomeShelter™ Consultant can discuss your situation to arrive at best solution</p>
   	  </div>
   
</center>


   <div class="col-md-12">
               
               	 <form action="" method="post">
                  
                   <div class="form-group">
                    <label for="">What is the shelter's intended use? <div class="val">*</div></label>
                    <input required type="text" name="timeslot" id="timeslot" class="form-control form-control-lg" placeholder="COMMENTS ABOUT SHELTERS USE"></input>
                   </div>
                   <br>
                   <div class="form-group">
                       <label for="">Where will the shelter be located?<i style="font-weight:normal; font-size: 15px;">(This helps us assess the wind rating required
)</i> <div class="val">*</div></label>
                       <input required type="text" name="name" class="form-control form-control-lg" placeholder="SHELTER LOCATION?"></input>
                   </div>
                    <br>
                   <div class="form-group">
                       <label for="">Do you know the size required?<i style="font-weight:normal; font-size: 15px;">(If unsure, we can offer suggestions based on your intended use
)</i><div class="val">*</div></label>
                       <input required type="emali" name="email" class="form-control form-control-lg" placeholder="ENTER WIDTH, LEANGTH, HEIGHT IF KNOWN, APPROXIAMTE OR EXACT. COMMENT IF NECESSARY."></input>
                   </div>
                     <br>
                    <div class="form-group">
                    <label for="">Which mounting system may be required?<div class="val">*</div></label><br>
                    <select class="form-control">
                    	<option>Unsure</option>
                    	<option>Sea Containers</option>
                    	<option>Steel Posts</option>
                    	<option>Combination ( Post and Containers) </option>
                    	<option>Cement Blocks</option>
                    </select>
                    <br>
                    <p>Any comments on mounting system? If unsure, we can offer suggestions.</p>

                    <input required type="text" name="timeslot" id="timeslot" class="form-control form-control-lg" placeholder="COMMENTS ON SHELTER MOUNTING SYSTEM"></input>
                   </div>
                    
                     <br>
                   <div class="form-group">
                       <label for="">Which add-ons may be required?<div class="val">*</div></label>
                       <br>

                       
                       <table cellpadding="0">
                       	  <tr>
                       	  	 <td>
                                <label class="container">Sea Containers
                                  <input type="checkbox" checked="checked">
                                  <span class="checkmark"></span>
                                </label>
                             </td>
                             <td>
                                <label class="container">End Walls - One End
                                  <input type="checkbox">
                                  <span class="checkmark"></span>
                                </label>
                             </td>
                             <td>
                                <label class="container">End Walls - Both End
                                  <input type="checkbox">
                                  <span class="checkmark"></span>
                                </label>
                             </td>
                       	  	 
                       	  	  
                       	  </tr>
                          <tr>
                             <td>
                                <label class="container">Doors - Personal Access
                                  <input type="checkbox">
                                  <span class="checkmark"></span>
                                </label>
                             </td>
                             <td>
                                <label class="container">Doors - Large Equipment
                                  <input type="checkbox">
                                  <span class="checkmark"></span>
                                </label>
                             </td>
                             <td>
                                <label class="container">Signage
                                  <input type="checkbox">
                                  <span class="checkmark"></span>
                                </label>
                             </td>
                             
                              
                          </tr>
                          <tr>
                             <td>
                                <label class="container">Lighting
                                  <input type="checkbox">
                                  <span class="checkmark"></span>
                                </label>
                             </td>
                             <td>
                                <label class="container">Hulk Earth Anchor
                                  <input type="checkbox">
                                  <span class="checkmark"></span>
                                </label>
                             </td>
                             <td>
                                <label class="container">Quick Deployment Flooring
                                  <input type="checkbox">
                                  <span class="checkmark"></span>
                                </label>
                             </td>
                             
                              
                          </tr>
                       	  
                       	   
                       </table> 
                       
                       <br> 
                       <input placeholder="ANY COMMENTS ON ADD-ONS?" class="form-control form-control-lg"></input>                                              
                         
                   </div>
                    <br>
                   <div class="form-group">
                       <label for="">When will the Shelter be required on site?</label>
                       <select class="form-control">
                    	<option>Immediately</option>
                    	<option>WITHIN A MONTH</option>
                    	<option>WITHIN 3 MONTHS</option>
                    	<option>OTHER ( DETAIL BELOW)</option>
                    	<option>NOT SURE</option>
                    </select>
                    <br> 
                       <input placeholder="ANY COMMENTS ON TIMING?" class="form-control form-control-lg"></input>
                   </div>
                    <br>
                   <div class="form-group">
                       <label for="">Any additional requirements?</label>
                       <p>Detail any additional information that could assist us to assess your requirements.</p>
                       <input required type="emali" name="email" class="form-control form-control-lg" placeholder=""></input>
                       <br>
                       
                     </div>    
                    <div class="custom-file">
                      <label for="">If you have photos or documents, upload them here (maximum 5)</label>
                      <input type="file" class="custom-file-input" id="customFile">
                      
                    </div>
                    <br>
                    <div class="custom-file">
                      
                      <div class="form-control" id="dragDrop">
                        <center><label for="">Or Drag and Drop Here </label></center>
                      </div>
                      
                    </div>
                    
                   
                      <br>
                   <div class="form-group">
                   	<label>Your Details<div class="val">*</div></label><br>
		           <input type="" name="" class="form-control form-control-lg" placeholder="FIRST NAME" style="width:47.5%;display:inline-block;"><input type="" name="" class="form-control form-control-lg"placeholder="LAST NAME" style="width:47.5%;display:inline-block;margin-left: 5%;">
		           </div>
              
		           <div class="form-group">
		           <input type="" name="" class="form-control form-control" placeholder="COMPANY" style="width:47.5%;display:inline-block;"><input type="" name="" class="form-control form-control-lg"placeholder="BEST CONTACT PHONE" style="width:47.5%;display:inline-block;margin-left: 5%;">
		           </div>
               
		           <div class="form-group">
                       <input required type="email" name="email" class="form-control form-control-lg" placeholder="EMAIL">
                   </div>

                   <div class="form-group">
                   	<input class="form-control form-control-lg" placeholder="WHEN IS THE BEST TIME FOR A DOMESHELTER TO COTACT YOU TO DISCUSS?"></input>
                   </div> 
                    
		           <div class="form-group">
                    <button type="submit" class="btn btn-danger btn-block" name="submit">Submit</button>
                   </div>


               </form>
               
           </div>




</body>
</html>