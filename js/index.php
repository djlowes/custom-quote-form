<?php 
    $your_email ='harts@outnet.com.au';// <<=== update to your email address
    
    
    $errors = '';
    $meters_wide = '';
    $meters_long = '';
    $meters_wide2 = '';
    $meters_long2 = '';
    $people_in_marquee = '';
    $seated_or_standing = '';
    $surface_to_build = '';
    $fname = '';
    $lname = '';  
    $date = '';
    $email = '';
    $phone = '';
    $other_notes = '';
    $delivery_location = '';
    
    if(isset($_POST['saveForm']))
    {
        $meters_wide = $_POST['Field46'];
        $meters_long = $_POST['Field48'];
        $meters_wide2 = $_POST['Field46_2'];
        $meters_long2 = $_POST['Field48_2'];
        $people_in_marquee = $_POST['Field19'];
        $seated_or_standing = $_POST['Field21'];
        $surface_to_build = $_POST['Field2'];
        $fname = $_POST['Field33'];
        $lname = $_POST['Field34'];  
        $date = $_POST['Field36'];
        $email = $_POST['Field38'];
        $phone = $_POST['Field42'];
        $other_notes = $_POST['Field40'];
        $delivery_location = $_POST['Field44'];
    
    	if(empty($errors))
    	{
    		//send the email
    		$to = $email;
    		$subject="Marquee Quoter";    		    		
    		
    		$body = "\n".
            "Thank you for using the Harts Easy Marquee Quoter, Below is a summary of your enquiry; \n".
            "Know the marquee size: \n".
    		"Meters Wide: $meters_wide \n".
            "Meters Long: $meters_long \n".
            "Need help with the marquee size: \n".
    		"Meters Wide: $meters_wide2 \n".
            "Meters Long: $meters_long2 \n".
    		"People in my marquee: $people_in_marquee, $seated_or_standing  \n".    		
    		"The surface to build on.: $surface_to_build \n\n ".
    		"Personal Details \n ".
            "Name : $fname $lname \n ".
            "Email : $email \n ".
    		"Phone : $phone \n".
    		"Date : $date \n".
            "Other Notes : $other_notes \n".
            "Delivery Location : $delivery_location \n\n".
            "One of our marquee specialists will contact you shortly.\n";	
    		
    		$headers = "From: web@marqueequote.com.au \r\n";
    		$headers .= "Reply-To: web@marqueequote.com.au \r\n".
    		            'X-Mailer: PHP/' . phpversion();  
    		
    		if(mail($your_email, $subject, $body,$headers))
            {
                //$mesg='Your request has been succesfully submited. One of our helpful consltants will be in contact with you shortly.';
                header('location:http://hartspartyhire.com.au/');
            }
    		    		
    	}
    }
    
   
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />	

	<title>Marquee Quoter</title>
    <link href="style.css" rel="stylesheet"/>
	<link href="step.css" rel="stylesheet"/>
    <link href="jquery.fancybox.css" rel="stylesheet"/>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<script src="js/sliding2.js"></script>
    <script src="js/gen_validatorv31.js"></script>
    <script src="js/jquery.fancybox.js"></script>
    <script>
        $('.fancybox').fancybox();
    </script>
</head>

<body>
<div id="header">
    <div class="line"></div>
    <div class="main">
        <div>
            <div class="logo"><a href="#">LOGO</a></div>
        </div>
    </div>
</div>
<div class="topcon"></div>
<div id="container">
          
        <div class="info">
            <h2>Harts Easy Marquee Quoter</h2>
            <div>It's as Simple as;<br/>
            <br/>
            1. Fill out the following details of your requirements.<br/>
            2. One of our marquee specialists will contact you with an estimate.<br/>
            3. We arrange a FREE / NO OBLIGATION site inspection (if the site is within 30km of our Melbourne warehouse).<br/>
            4. Within 24 hours of the site inspection our marquee specialist will email you your accurate fixed quote.</div>
            
            <div class="clearbottom"></div>
            <a class="fancybox" href="#myfcbox"><div class="startbt"></div></a>
        </div>
        
    <div class="alldiv" id="myfcbox" style="display: none;">   
		
		<div id="navigation">
			<ul>
				<li class="selected">
					<a id="st1" href="#">Step 1<br>
						<span>Marquee size</span>
					</a>
				</li>
				<li>
					<a id="st2" href="#">Step 2<br>
						<span>Securing Marquee</span>
					</a>
				</li>
				<li>
					<a id="st3" href="#">Step 3<br>
						<span>Your details</span>
					</a>
				</li>
				<li>
					<a id="st4" href="#">Step 4<br>
						<span>Submit</span>
					</a>
				</li>
			</ul>
		</div>
	
		<div style="clear: both"></div>
		<form action="" method="post" class="wufoo" name="myform">
		<div id="steps">
			<div class="step">
				<div class="divchild notranslate section" id="fo8li23">
					<section>
						<h3 id="title23"></h3>
					</section>
				</div>
                
				<div class="fll">
					<div class="title">I know my marquee size!<br>
						<span>Enter your measurements in metres</span>
					</div>
					<div class="inputbox">
						<input type="text"   tabindex="1" value="" name="Field46" id="Field46"/>
						<label for="Field46" id="title46" class="desc ">Meters Wide</label>
					</div>
					<div class="inputbox hasbg">
						<input type="text"   tabindex="2" value="" name="Field48" id="Field48"/>
						<label for="Field48" id="title48" class="desc ">Meters Long</label>
					</div>
				</div>
				
				<div class="fll">
					<div class="title">I need help with my marquee size!<br>
						<span>Tell us how big your space is and we'll quote the best fitting marquee</span>
					</div>
					<div class="inputbox">
						<input type="text" tabindex="3" value="" name="Field46_2" id="Field46_2"/>
						<label for="Field46_2" id="Field46_2" class="desc ">Meters Wide</label>
					</div>
					<div class="inputbox hasbg">
						<input type="text"   tabindex="4" value="" name="Field48_2" id="Field48_2"/>
						<label for="Field48_2" id="Field48_2" class="desc ">Meters Long</label>
					</div>
				</div>
				
				<div class="fll fll-last">
					<div class="title">I want to fit<br>
						
					</div>
					<div class="inputbox">
						<input type="text"   tabindex="5" value="" name="Field19" id="Field19"/>
						<label for="Field46" id="title46" class="desc desc2">People in my marquee</label>
					</div>
					
					<div class="radiobox">
						<span>
							<input type="radio" checked="checked" tabindex="6" value="Seated" class="field radio" name="Field21" id="Field21_0"/>
							<label for="Field21_0" class="choice">
							Seated</label>
						</span>
						<span>
							<input type="radio"   tabindex="7" value="Standing" class="field radio" name="Field21" id="Field21_1"/>
							<label for="Field21_1" class="choice">
							Standing</label>
						</span>
					</div>
				</div>
                <div class="clearbottom" style="clear: both;"></div>
				
				
				<div tabindex="8" class="nextbt next2s2"></div>
            </div>
			
			<div class="step">
				<div class="divchild notranslate section" id="fo8li23">
					<section>
						<h3 id="title23">How will Harts secure the marquee? "Pegs are cheaper." </h3>
					</section>
				</div>
				
				
				<div class="divchild notranslate" id="fo8li2">
					<fieldset>
						<!--[if !IE | (gte IE 8)]-->
						<legend class="desc" id="title2">
							Choose the surface to build on.
						</legend>
						<!--[endif]-->
						<!--[if lt IE 8]>
						<label id="title2" class="desc">
						Choose the surface to build on.
						</label>
						<![endif]-->
						<div>
							<input type="hidden" value="" name="Field2" id="radioDefault_2"/>
							<span style="width: 120%;">
								<input type="radio" checked="checked"   tabindex="9" value="My marquee can be pegged (Set up on grass / dirt with no underground services." class="field radio" name="Field2" id="Field2_0"/>
								<label for="Field2_0" class="choice">
								My marquee can be pegged (Set up on grass / dirt with no underground services.</label>
							</span>
							<span style="width: 120%;">
								<input type="radio"   tabindex="10" value="My marquee needs weights (Setup on a hard surface or I have underground services)" class="field radio" name="Field2" id="Field2_1"/>
								<label for="Field2_1" class="choice">
								My marquee needs weights (Setup on a hard surface or I have underground services)</label>
							</span>
						</div>
					</fieldset>
				</div>
                <div class="clearbottom" style="clear: both;"></div>
				<div tabindex="11" class="nextbt next2s3"></div>
            </div>
			
			<div class="step">
				<div class="divchild notranslate section" id="fo8li25">
					<section>
						<h3 id="title25">Personal Details</h3>
						<div id="instruct25">Red fields are required</div>
					</section>
				</div>
				
				
				<div class="divchild notranslate leftHalf" id="fo8li33">
					<label for="Field33" id="title33" class="desc">
					Name
					<span class="req" id="req_33">*</span>
					</label>
					<span>
						<input type="text" placeholder="First name" required="" tabindex="12" size="8" value="" class="field text fn" name="Field33" id="Field33"/>
						<label for="Field33"></label>
					</span>
					<span>
						<input type="text" placeholder="Last name" required=""   tabindex="13" size="14" value="" class="field text ln" name="Field34" id="Field34"/>
						<label for="Field34"></label>
					</span>
				</div>
            
            
            
				<div class="divchild date notranslate rightHalf" id="fo8li36">
					<label for="Field36" id="title36" class="desc">
						Function Date
						<span class="req" id="req_36">*</span>
					</label>
					<div>
						<input style="text-align: left;" type="text" required=""   tabindex="17" maxlength="255" value="" class="field text medium" spellcheck="false" name="Field36" id="Field36"/> 
					</div>
                     <script>
                        $(function() {
                            $( "#Field36" ).datepicker({ dateFormat: 'dd/mm/yy' });
                        });
                     </script>
				</div>             
            
				<div class="divchild notranslate leftHalf" id="fo8li38">
					<label for="Field38" id="title38" class="desc">
						Email
						<span class="req" id="req_38">*</span>
					</label>
					<div>
						<input type="email" required=""   tabindex="14" maxlength="255" value="" class="field text medium" spellcheck="false" name="Field38" id="Field38"/> 
					</div>
				</div>
				
				
				
				<div class="divchild notranslate rightHalf" id="fo8li40">
					<label for="Field40" id="title40" class="desc">
						Other Notes
					</label>
					
					<div>
						<textarea   tabindex="18" cols="50" rows="10" spellcheck="true" class="field textarea medium" name="Field40" id="Field40"></textarea>
					</div>
				</div>
				
				<div class="divchild notranslate leftHalf" id="fo8li42">
					<label for="Field42" id="title42" class="desc">
						Phone
						<span class="req" id="req_42">*</span>
					</label>
					<div>
						<input type="tel" value="" maxlength="255" required=""   tabindex="15" name="Field42" class="field text medium" id="Field42"/> 
					</div>
					
				</div>
				
				
				<div class="divchild notranslate leftHalf" id="fo8li44">
					<label for="Field44" id="title44" class="desc">
						Delivery Location
						<span class="req" id="req_44">*</span>
					</label>
					<div>
						<input type="text" required=""   tabindex="16" maxlength="255" value="" class="field text medium" name="Field44" id="Field44"/>
					</div>
					<p id="instruct44" class="instruct"><small>If you don't have an exact address, a suburb or area is fine.</small></p>
				</div>
                <div class="clearbottom" style="clear: both; height: 60px;"></div>
				<div tabindex="19" class="nextbt next2s4"></div>
            </div>
            
			
			<div class="step">
                <div class="divchild buttons section">
                    <section>
                        <h3 id="title50"></h3>
                         <i style="font-size: 13px;">Thank you for your time. Please click the "Request a quote" button below and one of our helpful consultants will contact you shortly.</i>
                         <br /><br />
                    </section>
                    
					<div>
						<input type="hidden" value="" id="currentPage" name="currentPage"/>
						
						<input type="submit" value="REQUEST A QUOTE" class="btImg submit" name="saveForm" id="saveForm" tabindex="91"/>
					</div>
				</div>
                
				<div class="divchild notranslate section" id="fo8li50">
					<section>
						
						<div id="instruct50">
                            <br/>
                            <b>The 'Harts 24 Hour Quick Quote Guarantee' is conditional on the following:</b>
							
							<br/>
							- Only applicable to enquiries received during business hours Monday to Thursday. Excludes Public Holidays.<br/>
							- Only guaranteed within 24 hours if you provide accurate and adequate item requirements and client / site information and contact details.<strong><br/></strong>
							- In the event of site specific items such as marquees and staging we guarantee the quote will be sent to you within 24 hours of the site inspection.<br/>
							- Subject to the requested items or suitable alternatives being available for the required dates.
						</div>
					</section>
				</div>	
				
            </div>
        </div>
		
		</div>
    </form>
	<script language="JavaScript">
    // Code for validating the form
    
    var frmvalidator  = new Validator("myform");
    //remove the following two lines if you like error message box popups
    //frmvalidator.EnableOnPageErrorDisplaySingleBox();
    //frmvalidator.EnableMsgsTogether();     
    frmvalidator.addValidation("Field33","req","Please provide your first name!");
    frmvalidator.addValidation("Field34","req","Please provide your last name!"); 
    frmvalidator.addValidation("Field38","req","Please provide your email!"); 
    frmvalidator.addValidation("Field38","email","Please enter a valid email address!");
    frmvalidator.addValidation("Field42","req","Please provide your phone number!");     
    frmvalidator.addValidation("Field42","numeric","Please enter a valid phone number!");
    frmvalidator.addValidation("Field44","req","Please provide delivery location!");
    frmvalidator.addValidation("Field36","req","Please provide function date!");  
</script>
</div>


</body>
</html>
<script>
	$('.nextbt.next2s2').click(function(){
		$('#navigation a#st2').click();
	});
	$('.nextbt.next2s3').click(function(){
		$('#navigation a#st3').click();
	});
	$('.nextbt.next2s4').click(function(){
		$('#navigation a#st4').click();
	});
    $('.startbt').click(function(){
       $('#Field46').focus(200);
    });
    $('#navigation a#st1').click(function(){
       $('#Field46').focus();
    });
    $('#navigation a#st3').click(function(){
       $('#Field33').focus(500);
    });
    $(".next2s2").keydown(function(e){
        if(e.keyCode == "9"){
            e.preventDefault();
            $('#navigation a#st2').click();
            $('#Field2_0').focus(500);
        }
    });
    $(".next2s3").keydown(function(e){
        if(e.keyCode == "9"){
            e.preventDefault();
            $('#navigation a#st3').click();
            $('#Field33').focus(500);
        }
    });
    $(".next2s4").keydown(function(e){
        if(e.keyCode == "9"){
            e.preventDefault();
            $('#navigation a#st4').click();
            $('#saveForm').focus(500);
        }
    });
    /*
    $('.startbt').click(function(){
		var $lefty = $('.wufoo');
        $lefty.animate({
          left: parseInt($lefty.css('left'),0) == 0 ?
            -870 :
            -870
        });
	});*/
</script>
