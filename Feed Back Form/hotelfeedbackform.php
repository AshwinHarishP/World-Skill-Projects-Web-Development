<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Feedback Form in HTML Example </title>

    <meta name="author" content="Codeconvey" />
    
    <link rel="stylesheet" href="css/style.css">
    <!--Only for demo purpose - no need to add.-->
    <link rel="stylesheet" href="css/demo.css" />
	
</head>
<body>
		


<header class="ScriptHeader">
    <div class="rt-container">
    	<div class="col-rt-12">
        	<div class="rt-heading">
            	<h1>HOTEL FEEDBACK FORM</h1>
                <p>Please provide us a feed back t server better.</p>
            </div>
        </div>
    </div>
</header>

<section>
    <div class="rt-container">
          <div class="col-rt-12">
              <div class="Scriptcontent">
              
       
<div class="feedback">
<p>Dear Customer,<br>
Thank you for visiting our hotel and enjoyed your dish with us. We would like to know your experience.Your valuable feedback will be helpfull to improve our service.</p>

<h4>Please rate your service experience for the following parameters</h4>

<form method="post"action="feedbacksubmit.php">
<label>1. Your overall experience with us ?</label><br>
  
<span class="star-rating">
  <input type="radio" name="rating1" value="1"><i></i>
  <input type="radio" name="rating1" value="2"><i></i>
  <input type="radio" name="rating1" value="3"><i></i>
  <input type="radio" name="rating1" value="4"><i></i>
  <input type="radio" name="rating1" value="5"><i></i>
</span>

  <div class="clear"></div> 
  <hr class="survey-hr">
<label>2. About our service</label><br>
<span class="star-rating">
  <input type="radio" name="rating2" value="1" ><i></i>
  <input type="radio" name="rating2" value="2" ><i></i>
  <input type="radio" name="rating2" value="3" ><i></i>
  <input type="radio" name="rating2" value="4" ><i></i>
  <input type="radio" name="rating2" value="5" ><i></i>
</span>


  <div class="clear"></div> 
  <hr class="survey-hr">
<label>3. About our food and cost</label><br><br/>
  <div style="color:grey">
    <span style="float:left">
     POOR
    </span>
    <span style="float:right">
      BEST
    </span>
    
  </div>
<span class="scale-rating">
  <label value="1">
  <input type="radio" name="rating3" >
  <label style="width:100%;"></label>
  </label>
  <label value="2">
  <input type="radio" name="rating3" >
  <label style="width:100%;"></label>
  </label>
  <label value="3">
  <input type="radio" name="rating3">
  <label style="width:100%;"></label>
  </label>
  <label value="4">
  <input type="radio" name="rating3">
  <label style="width:100%;"></label>
  </label>
  <label value="5">
  <input type="radio" name="rating3">
  <label style="width:100%;"></label>
  </label>
  <label value="6">
  <input type="radio" name="rating3">
  <label style="width:100%;"></label>
  </label>
  <label value="7">
  <input type="radio" name="rating3">
  <label style="width:100%;"></label>
  </label>
  <label value="8">
  <input type="radio" name="rating3">
  <label style="width:100%;"></label>
  </label>
  <label value="9">
  <input type="radio" name="rating3">
  <label style="width:100%;"></label>
  </label>
  <label value="10">
  <input type="radio" name="rating3" >
  <label style="width:100%;"></label>
  </label>
</span>

  <div class="clear"></div> 
  <hr class="survey-hr"> 
<label for="m_3189847521540640526commentText">4. Any Other suggestions please let us know😊:</label><br/><br/>
<textarea cols="75" name="commentText" rows="5" style="100%"></textarea><br>
<br>
  <div class="clear"></div> 
<input style="background:#43a7d5;color:#fff;padding:12px;border:0" type="submit" name="submit" value="submit">
</form>
                  </div>
           
    		</div>
		</div>
    </div>
</section>
    

	</body>
</html>